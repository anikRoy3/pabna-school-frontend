<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $sliders = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/sliders')->json()['data'];

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];

    $directors = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/directors')->json()['data'];

    $notices = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/notices?order=desc')->json()['data'];

    $teachers = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/teachers')->json()['data'];
    $topNotices = [];

    foreach ($notices as $notice) {
        if ($notice['is_top']) {
            $topNotices[] = $notice;
        }
    }

    $achievements = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/ourAchievements')->json()['data'];



    $achievementImages = [];


    foreach ($achievements as $achievement) {
        $endodedImages = json_decode($achievement['images']);
        foreach ($endodedImages as $image) {
            $achievementImages[] = $image;
        }
        if (count($achievementImages) > 3) {
            break;
        }
    } 

    return view('pages.homePage.index', compact(
        'settings',
        'sliders',
        'achievements',
        'notices',
        'topNotices',
        'achievementImages',
        'teachers',
        'directors'

    ));
});

Route::get('/aboutUs', function () {
    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];

    $achievements = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/ourAchievements')->json()['data'];

    $achievementImages = [];

    foreach ($achievements as $achievement) {
        $endodedImages = json_decode($achievement['images']);
        foreach ($endodedImages as $image) {
            $achievementImages[] = $image;
        }
        if (count($achievementImages) > 3) {
            break;
        }
    }


    return view('pages.aboutUs.index', compact('settings', 'achievementImages'));
});

Route::get('/contact', function () {

    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];

    return view('pages.contactUs.index', compact('settings'));
});

Route::get('/teachers', function () {

    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];

    $teachers = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/teachers')->json()['data'];

    return view('pages.teachersAndStaff.index', compact('teachers', 'settings'));
});

Route::get('/academics', function () {
    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];
    return view('pages.academics.index', compact('settings'));
});

Route::get('/admission', function () {
    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];
    return view('pages.admission.index', compact('settings'));
});

Route::get('/examAndResult', function () {
    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];
    return view('pages.examAndResult.index', compact('settings'));
});


Route::get('/clubAndSociety', function () {
    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];
    return view('pages.clubAndSociety.index', compact('settings'));
});


Route::get('/gamesAndSports', function () {
    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];
    return view('pages.gamesAndSports.index', compact('settings'));
});



Route::get('/library', function () {
    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];
    return view('pages.libraries.index', compact('settings'));
});


Route::get('/multimedia', function () {
    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];
    return view('pages.multimedia.index', compact('settings'));
});


Route::get('/program', function () {
    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];
    return view('pages.program.index', compact('settings'));
});


Route::get('/rules', function () {
    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];

    $rules = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/rules')->json()['data'][0];


    return view('pages.rules.index', compact('settings', 'rules'));
});



Route::get('directors/{id}', function ($id) {

    $baseUrl = env('LOCAL_SERVER_BASE_URL');

    $settings = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/settings')->json()['data'][0];

    $directors = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/directors')->json()['data'];

    $teachers = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get($baseUrl . '/api/teachers')->json()['data'];

    $director = collect($directors)->firstWhere('id', $id);

    return view('pages.directorsTalk.index', compact('director', 'settings', 'teachers', 'directors'));
})->name('directors.id');
