@extends('layouts.main')
@section('content')
    <section class="container mx-auto">
        <section class="px-3">
            <div class="flex flex-col lg:flex-row gap-3">
                <div style="flex:50%;">
                    <h4 class="text-[1.4em] text-[#0C1167] my-4 games_page_title"></h4>
                    <p id="games_page_description_one">
                       </p>
                </div>
                <div style="flex:50%;" id="games_page_image">
                    <img style="width: 100%;" src="src/assests/aboutUs_images/image_2.png" alt="">
                </div>
            </div>
            <p class="my-8" id="games_page_description_two"> </p>
        </section>
        <section class="px-3">
            <div class="my-8">
                <p class="text-[#0C1167] my-2 text-[1.4em] text-center "> <span id="games_page_title_two"> </span> তথ্যচিত্র</p>
                <div>
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4" id="games_page_images">
                      
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
