@extends('layouts.main')
@section('content')

{{-- @dd($rules) --}}
<section class="container mx-auto">
    <div class="bg-[#0C1167] h-14 text-[1.5em] text-white flex justify-center items-center">নিয়ম ও প্রবিধান</div>
    <div class="flex flex-col lg:flex-row gap-2 p-8" >
        <div class="px-7" style="flex: 70%; background: var(--white, #FFF);
box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 1px -1px 2px 0px rgba(0, 0, 0, 0.25);" >
            <p class="text-[#0C1167] ml-7 my-7">নিম্নলিখিত কাজগুলি শৃঙ্খলা লঙ্ঘন হিসাবে গণ্য হবে:-
            </p>
            {!!$rules['description']!!}
          {{--   <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> এই প্রতিষ্ঠানের কোন নিয়ম লঙ্ঘন.
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> পরীক্ষায় বা ক্লাস পরীক্ষায় অন্যায় মানে অবলম্বন করা।
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> শিক্ষক-শিক্ষার্থীদের সম্পর্কে অশালীন মন্তব্য করা বা কারো ক্ষতি করার উদ্দেশ্যে কোনো বস্তু নিক্ষেপ করা।
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> বেঞ্চ, চেয়ার, টেবিল, ডেস্ক, ব্ল্যাকবোর্ড, দেয়ালে বা টয়লেট ইত্যাদিতে লেখা।
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> একটি শরীরের অভিযোগ দায়ের. তবে এটি ক্লাস টিচার, হাউস টিউটর বা প্রিফেক্টের সহায়তায় করা যেতে পারে।

                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> একটি নির্দিষ্ট শ্রেণীর ছাত্রদের জন্য নির্ধারিত নয় এমন শ্রেণীকক্ষে প্রবেশ করা।
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> এই প্রতিষ্ঠানের সম্পত্তি বা সম্পদের ক্ষতি সাধন করা।
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> তাদের অনুমতি ছাড়া অন্য ছাত্রদের ব্যাগ, ব্যায়াম বই এবং অন্য কোন উপকরণ দখল।
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> শিক্ষক, বিজিবি কর্মকর্তা ও কর্মচারী, অভিভাবক বা সিনিয়র শিক্ষার্থীদের প্রতি সম্মান প্রদর্শন না করা।
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> পুরুষ ও মহিলা শিক্ষার্থীদের মধ্যে সঠিক এবং যুক্তিসঙ্গত দূরত্ব বজায় না রাখা।
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> শিক্ষক, বিজিবি কর্মকর্তা ও কর্মচারী, অভিভাবক বা সিনিয়র শিক্ষার্থীদের প্রতি সম্মান প্রদর্শন না করা।
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> পুরুষ ও মহিলা শিক্ষার্থীদের মধ্যে সঠিক এবং যুক্তিসঙ্গত দূরত্ব বজায় না রাখা।
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> যেকোনো অপ্রয়োজনীয় বই, লিফলেট, সিডি, মোবাইল, MP3 প্লেয়ার ইত্যাদি বহন করা।

                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> খেলাধুলার সামগ্রী বহন করা এবং রাখা, অননুমোদিত পোশাক, ক্যাপ এবং অলঙ্কার ইত্যাদি পরা।
                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span> কোন শিক্ষকের আদেশ লঙ্ঘন.

                </span>
            </p>
            <p class="flex my-1 items-center">
                <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                    <path d="M4.00195 4.06606C3.70771 4.14923 3.43828 4.30309 3.21712 4.51424C2.99596 4.72539 2.8298 4.98742 2.73311 5.27749L0 13.4765L0.430371 13.9069L4.82813 9.50913C4.74053 9.32573 4.6875 9.123 4.6875 8.9062C4.6875 8.12954 5.31709 7.49995 6.09375 7.49995C6.87041 7.49995 7.5 8.12954 7.5 8.9062C7.5 9.68286 6.87041 10.3125 6.09375 10.3125C5.87695 10.3125 5.67422 10.2594 5.49082 10.1718L1.09307 14.5696L1.52344 15L9.72246 12.2668C10.0125 12.1702 10.2746 12.004 10.4857 11.7828C10.6969 11.5617 10.8507 11.2922 10.9339 10.998L12.1875 6.56245L8.4375 2.81245L4.00195 4.06606ZM14.5881 2.1729L12.8271 0.411865C12.2777 -0.137451 11.3868 -0.137451 10.8375 0.411865L9.18076 2.0686L12.9313 5.81919L14.5881 4.16245C15.1374 3.61314 15.1374 2.72251 14.5881 2.1729Z" fill="#0C1167" />
                </svg>
                <span>কোন ক্লাস বা পরীক্ষা থেকে স্বেচ্ছায় বিরত থাকা।
                </span>
            </p> --}}
        </div>
        <div class="flex flex-col items-center" style="flex: 30%; background: var(--white, #FFF);
box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 1px -1px 2px 0px rgba(0, 0, 0, 0.25);">
            <div class="my-7">
                <span class="bg-[#0C1167] text-white p-3 " style="border-radius: 40px;
                            border: 1px solid #939598;
                            background: var(--blue-1, #0C1167);">সামাজিক যোগাযোগ</span>
            </div>
            <div>
                <a href="{{url('/academics')}}" class="flex gap-2 my-4 items-center hover:text-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.1231 3.27297C21.2304 3.38027 21.3025 3.51757 21.3301 3.66673C21.3577 3.8159 21.3394 3.96992 21.2776 4.10847L12.7921 23.2005C12.7328 23.334 12.6358 23.4473 12.5131 23.5265C12.3903 23.6056 12.247 23.6472 12.1009 23.6461C11.9548 23.645 11.8123 23.6012 11.6907 23.5202C11.5691 23.4392 11.4739 23.3244 11.4166 23.19L8.35513 16.041L1.20463 12.978C1.07072 12.9204 0.956495 12.825 0.875929 12.7035C0.795363 12.582 0.751947 12.4397 0.750993 12.2939C0.750038 12.1481 0.791585 12.0053 0.870553 11.8827C0.949521 11.7602 1.06249 11.6633 1.19563 11.604L20.2876 3.11847C20.426 3.05704 20.5797 3.03893 20.7286 3.0665C20.8774 3.09408 21.016 3.16606 21.1231 3.27297Z" fill="#0C1167" />
                    </svg>
                    <span>পাঠ্যক্রম
                    </span>
                </a>
                <a href="{{url('academics')}}" target="_blank" class="flex gap-2 my-4 items-center hover:text-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.1231 3.27297C21.2304 3.38027 21.3025 3.51757 21.3301 3.66673C21.3577 3.8159 21.3394 3.96992 21.2776 4.10847L12.7921 23.2005C12.7328 23.334 12.6358 23.4473 12.5131 23.5265C12.3903 23.6056 12.247 23.6472 12.1009 23.6461C11.9548 23.645 11.8123 23.6012 11.6907 23.5202C11.5691 23.4392 11.4739 23.3244 11.4166 23.19L8.35513 16.041L1.20463 12.978C1.07072 12.9204 0.956495 12.825 0.875929 12.7035C0.795363 12.582 0.751947 12.4397 0.750993 12.2939C0.750038 12.1481 0.791585 12.0053 0.870553 11.8827C0.949521 11.7602 1.06249 11.6633 1.19563 11.604L20.2876 3.11847C20.426 3.05704 20.5797 3.03893 20.7286 3.0665C20.8774 3.09408 21.016 3.16606 21.1231 3.27297Z" fill="#0C1167" />
                    </svg>
                    <span>শিক্ষা বর্ষপঞ্জি
                    </span>
                </a>
                <a href="{{url('examAndResult')}}" target="_blank" class="flex gap-2 my-4 items-center hover:text-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.1231 3.27297C21.2304 3.38027 21.3025 3.51757 21.3301 3.66673C21.3577 3.8159 21.3394 3.96992 21.2776 4.10847L12.7921 23.2005C12.7328 23.334 12.6358 23.4473 12.5131 23.5265C12.3903 23.6056 12.247 23.6472 12.1009 23.6461C11.9548 23.645 11.8123 23.6012 11.6907 23.5202C11.5691 23.4392 11.4739 23.3244 11.4166 23.19L8.35513 16.041L1.20463 12.978C1.07072 12.9204 0.956495 12.825 0.875929 12.7035C0.795363 12.582 0.751947 12.4397 0.750993 12.2939C0.750038 12.1481 0.791585 12.0053 0.870553 11.8827C0.949521 11.7602 1.06249 11.6633 1.19563 11.604L20.2876 3.11847C20.426 3.05704 20.5797 3.03893 20.7286 3.0665C20.8774 3.09408 21.016 3.16606 21.1231 3.27297Z" fill="#0C1167" />
                    </svg>
                    <span>পরীক্ষার ফলাফল
                    </span>
                </a>
                <a href="{{url('admission')}}" target="_blank" class="flex gap-2 my-4 items-center hover:text-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.1231 3.27297C21.2304 3.38027 21.3025 3.51757 21.3301 3.66673C21.3577 3.8159 21.3394 3.96992 21.2776 4.10847L12.7921 23.2005C12.7328 23.334 12.6358 23.4473 12.5131 23.5265C12.3903 23.6056 12.247 23.6472 12.1009 23.6461C11.9548 23.645 11.8123 23.6012 11.6907 23.5202C11.5691 23.4392 11.4739 23.3244 11.4166 23.19L8.35513 16.041L1.20463 12.978C1.07072 12.9204 0.956495 12.825 0.875929 12.7035C0.795363 12.582 0.751947 12.4397 0.750993 12.2939C0.750038 12.1481 0.791585 12.0053 0.870553 11.8827C0.949521 11.7602 1.06249 11.6633 1.19563 11.604L20.2876 3.11847C20.426 3.05704 20.5797 3.03893 20.7286 3.0665C20.8774 3.09408 21.016 3.16606 21.1231 3.27297Z" fill="#0C1167" />
                    </svg>
                    <span>ভর্তি বিজ্ঞপ্তি
                    </span>
                </a>
                <a href="{{url('program')}}" target="_blank" class="flex gap-2 my-4 items-center hover:text-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.1231 3.27297C21.2304 3.38027 21.3025 3.51757 21.3301 3.66673C21.3577 3.8159 21.3394 3.96992 21.2776 4.10847L12.7921 23.2005C12.7328 23.334 12.6358 23.4473 12.5131 23.5265C12.3903 23.6056 12.247 23.6472 12.1009 23.6461C11.9548 23.645 11.8123 23.6012 11.6907 23.5202C11.5691 23.4392 11.4739 23.3244 11.4166 23.19L8.35513 16.041L1.20463 12.978C1.07072 12.9204 0.956495 12.825 0.875929 12.7035C0.795363 12.582 0.751947 12.4397 0.750993 12.2939C0.750038 12.1481 0.791585 12.0053 0.870553 11.8827C0.949521 11.7602 1.06249 11.6633 1.19563 11.604L20.2876 3.11847C20.426 3.05704 20.5797 3.03893 20.7286 3.0665C20.8774 3.09408 21.016 3.16606 21.1231 3.27297Z" fill="#0C1167" />
                    </svg>
                    <span>অনুষ্ঠান ও কর্মসূচি
                    </span>
                </a>

                <a href="{{url('program')}}" target="_blank" class="flex gap-2 my-4 items-center hover:text-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.1231 3.27297C21.2304 3.38027 21.3025 3.51757 21.3301 3.66673C21.3577 3.8159 21.3394 3.96992 21.2776 4.10847L12.7921 23.2005C12.7328 23.334 12.6358 23.4473 12.5131 23.5265C12.3903 23.6056 12.247 23.6472 12.1009 23.6461C11.9548 23.645 11.8123 23.6012 11.6907 23.5202C11.5691 23.4392 11.4739 23.3244 11.4166 23.19L8.35513 16.041L1.20463 12.978C1.07072 12.9204 0.956495 12.825 0.875929 12.7035C0.795363 12.582 0.751947 12.4397 0.750993 12.2939C0.750038 12.1481 0.791585 12.0053 0.870553 11.8827C0.949521 11.7602 1.06249 11.6633 1.19563 11.604L20.2876 3.11847C20.426 3.05704 20.5797 3.03893 20.7286 3.0665C20.8774 3.09408 21.016 3.16606 21.1231 3.27297Z" fill="#0C1167" />
                    </svg>
                    <span>তথ্যচিত্র
                    </span>
                </a>
                <a href="{{url('library')}}" target="_blank" class="flex gap-2 my-4 items-center hover:text-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.1231 3.27297C21.2304 3.38027 21.3025 3.51757 21.3301 3.66673C21.3577 3.8159 21.3394 3.96992 21.2776 4.10847L12.7921 23.2005C12.7328 23.334 12.6358 23.4473 12.5131 23.5265C12.3903 23.6056 12.247 23.6472 12.1009 23.6461C11.9548 23.645 11.8123 23.6012 11.6907 23.5202C11.5691 23.4392 11.4739 23.3244 11.4166 23.19L8.35513 16.041L1.20463 12.978C1.07072 12.9204 0.956495 12.825 0.875929 12.7035C0.795363 12.582 0.751947 12.4397 0.750993 12.2939C0.750038 12.1481 0.791585 12.0053 0.870553 11.8827C0.949521 11.7602 1.06249 11.6633 1.19563 11.604L20.2876 3.11847C20.426 3.05704 20.5797 3.03893 20.7286 3.0665C20.8774 3.09408 21.016 3.16606 21.1231 3.27297Z" fill="#0C1167" />
                    </svg>
                    <span>
                        লাইব্রেরি
                    </span>
                </a>

            </div>
        </div>
    </div>
</section>
@endsection