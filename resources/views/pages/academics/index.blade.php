@extends('layouts.main')
@section('content')
<section class="container mx-auto">
    <div class="flex gap-5 flex-col lg:flex-row">
        <div style="flex:30%; border: 1px solid #E7E7E7;
background: var(--white, #FFF); width:100%">
            <p class="p-3 flex items-center justify-center bg-[#0C1167] text-white text-[1.3em]">শিক্ষা বর্ষপঞ্জি</p>
            <div class="px-2" id="academicTitleField">
                {{-- <p class="p-5 flex items-center my-2 text-[1.3em]" style="";
">
                    <span>
                        <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="#0C1167" />
                        </svg>
                    </span>
                    <small>বার্ষিক অনুষ্ঠান সূচী তারিখ</small>
                </p>
                <p class="p-5 flex items-center my-2 text-[1.3em]" style="background: var(--white, #FFF);
box-shadow: -1px 1px 4px 0px rgba(0, 0, 0, 0.25);">
                    <span>
                        <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="#0C1167" />
                        </svg>
                    </span>
                    <small>সাংবাৎসরিক কার্যক্রম সূচী তারিখ</small>
                </p>
                <p class="p-5 flex items-center my-2 text-[1.3em]" style="background: var(--white, #FFF);
box-shadow: -1px 1px 4px 0px rgba(0, 0, 0, 0.25);">
                    <span>
                        <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="#0C1167" />
                        </svg>
                    </span>
                    <small>পরীক্ষার তারিখ</small>
                </p>
                <p class="p-5 flex items-center my-2 text-[1.3em]" style="background: var(--white, #FFF);
box-shadow: -1px 1px 4px 0px rgba(0, 0, 0, 0.25);">
                    <span>
                        <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="#0C1167" />
                        </svg>
                    </span>
                    <small>একাডেমিক কার্যক্রম সূচী তারিখ</small>
                </p>
                <p class="p-5 flex items-center my-2 text-[1.3em]" style="background: var(--white, #FFF);
box-shadow: -1px 1px 4px 0px rgba(0, 0, 0, 0.25);">
                    <span>
                        <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="#0C1167" />
                        </svg>
                    </span>
                    <small>ক্লাস রুটিন</small>
                </p>
                <p class="p-5 flex items-center my-2 text-[1.3em]" style="background: var(--white, #FFF);
box-shadow: -1px 1px 4px 0px rgba(0, 0, 0, 0.25);">
                    <span>
                        <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="#0C1167" />
                        </svg>
                    </span>
                    <small>ছুটির তালিকা</small>
                </p> --}}
            </div>
        </div>
        <div style="flex:70%; width:100%;">
            <p class="p-3 flex items-center justify-center bg-[#0C1167] text-white text-[1.3em] mb-1">সিলেবাস </p>
            <p id="academicPdfField">
                {{-- <iframe  src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210101201653/PDF.pdf" style="width: 100%;" height="500">
                </iframe> --}}
            </p>
        </div>
    </div>
</section>
@endsection