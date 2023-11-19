<section class="container mx-auto sticky top-0 z-50 bg-white hidden" id="responsive_nav">
    <header class="pb-2 ">
        <div class="bg-[#0C1167] flex items-center justify-end text-white p-3">
            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6875 2.25H11.375V1.375H10.5V2.25H3.5V1.375H2.625V2.25H1.3125L0.875 2.6875V13.1875L1.3125 13.625H12.6875L13.125 13.1875V2.6875L12.6875 2.25ZM12.25 12.75H1.75V4.875H12.25V12.75ZM12.25 4H1.75V3.125H12.25V4ZM3.5 7.5H2.625V8.375H3.5V7.5ZM2.625 9.25H3.5V10.125H2.625V9.25ZM3.5 11H2.625V11.875H3.5V11ZM5.25 7.5H6.125V8.375H5.25V7.5ZM6.125 9.25H5.25V10.125H6.125V9.25ZM5.25 11H6.125V11.875H5.25V11ZM6.125 5.75H5.25V6.625H6.125V5.75ZM7.875 7.5H8.75V8.375H7.875V7.5ZM8.75 9.25H7.875V10.125H8.75V9.25ZM7.875 11H8.75V11.875H7.875V11ZM8.75 5.75H7.875V6.625H8.75V5.75ZM10.5 7.5H11.375V8.375H10.5V7.5ZM11.375 9.25H10.5V10.125H11.375V9.25ZM10.5 5.75H11.375V6.625H10.5V5.75Z" fill="#F1FDFF" />
            </svg>
            <small>১৬ চৈত্র ১৪২৯ / বৃহস্পতিবার, মার্চ ৩০, ২০২৩</small>
        </div>

        <div class="flex items-center justify-between gap-2 p-2 ">
            <a href="{{url('/')}}">
                <div>
                    <img  class="w-[3.4em] nav_school_logo" src="{{env('LOCAL_SERVER_BASE_URL')}}/storage/{{$settings['school_logo']}}" alt="logo">
                </div>
            </a>
            <div>
                <h3 class="text-[1.2em] school_name">{{$settings['school_name']}}</h3>
                <small>EIIN :  <span  class="EIIN_no">{{$settings['EIIN_no']}}</span>  | কলেজ কোড: <span class="college_code">{{$settings['college_code']}}</span>  | স্কুল কোড: <span class="school_code">{{$settings['school_code']}}</span></small>
            </div>
        </div>
        <div class="flex items-center justify-between gap-5 px-2">
            <div class="flex gap-2 items-center justify-between">
                <label for="my-drawer" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none">
                        <path d="M2.25 6.1875H21.75C22.1642 6.1875 22.5 5.85173 22.5 5.4375V3.5625C22.5 3.14827 22.1642 2.8125 21.75 2.8125H2.25C1.83577 2.8125 1.5 3.14827 1.5 3.5625V5.4375C1.5 5.85173 1.83577 6.1875 2.25 6.1875ZM2.25 13.6875H21.75C22.1642 13.6875 22.5 13.3517 22.5 12.9375V11.0625C22.5 10.6483 22.1642 10.3125 21.75 10.3125H2.25C1.83577 10.3125 1.5 10.6483 1.5 11.0625V12.9375C1.5 13.3517 1.83577 13.6875 2.25 13.6875ZM2.25 21.1875H21.75C22.1642 21.1875 22.5 20.8517 22.5 20.4375V18.5625C22.5 18.1483 22.1642 17.8125 21.75 17.8125H2.25C1.83577 17.8125 1.5 18.1483 1.5 18.5625V20.4375C1.5 20.8517 1.83577 21.1875 2.25 21.1875Z" fill="#0C1167" />
                    </svg>
                </label>

                <button class="w-[6.385em] h-[2em]  flex text-white justify-center items-center gap-2" style="border-radius: 10px;
                                background: #D00025;">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 25 25" fill="none">
                            <path d="M24.5 11.8335C24.5 10.8489 23.9604 9.9985 23.1667 9.53683V3.16725C23.1667 2.80266 22.8758 1.8335 21.8333 1.8335C21.5367 1.8335 21.2421 1.93266 21.0008 2.126L17.4579 4.96058C15.6783 6.38308 13.4442 7.16683 11.1667 7.16683H3.16667C1.69375 7.16683 0.5 8.36058 0.5 9.8335V13.8335C0.5 15.3064 1.69375 16.5002 3.16667 16.5002H4.57083C4.51292 16.9368 4.48 17.381 4.48 17.8335C4.48 19.4906 4.86583 21.0564 5.545 22.456C5.76125 22.9014 6.23333 23.1668 6.72833 23.1668H9.82333C10.9087 23.1668 11.5604 21.9235 10.9025 21.0602C10.2192 20.1635 9.81292 19.0452 9.81292 17.8335C9.81292 17.3706 9.88042 16.9256 9.99667 16.5002H11.1667C13.4442 16.5002 15.6783 17.2839 17.4575 18.7064L21.0004 21.541C21.2367 21.7301 21.5303 21.8332 21.8329 21.8335C22.8713 21.8335 23.1663 20.8843 23.1663 20.5002V14.1306C23.9604 13.6685 24.5 12.8181 24.5 11.8335ZM20.5 17.726L19.1229 16.6243C16.8729 14.8243 14.0467 13.8335 11.1667 13.8335V9.8335C14.0467 9.8335 16.8729 8.84266 19.1229 7.04266L20.5 5.941V17.726Z" fill="white" />
                        </svg>
                    </span>
                    <small class="text-[10px]">ভর্তি বিজ্ঞপ্তি</small>
                </button>
            </div>
            <div class="flex gap-2 items-center">
                <button class="w-[5.35em] h-[2em] flex justify-center items-center gap-2" style="border-radius: 10px;
                            border: 1px solid var(--blue-1, #0C1167);">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 25 25" fill="none">
                            <path d="M12.5 12.5C15.8141 12.5 18.5 9.81406 18.5 6.5C18.5 3.18594 15.8141 0.5 12.5 0.5C9.18594 0.5 6.5 3.18594 6.5 6.5C6.5 9.81406 9.18594 12.5 12.5 12.5ZM16.9906 14.0281L14.75 23L13.25 16.625L14.75 14H10.25L11.75 16.625L10.25 23L8.00937 14.0281C4.66719 14.1875 2 16.9203 2 20.3V22.25C2 23.4922 3.00781 24.5 4.25 24.5H20.75C21.9922 24.5 23 23.4922 23 22.25V20.3C23 16.9203 20.3328 14.1875 16.9906 14.0281Z" fill="#0C1167" />
                        </svg>
                    </span>
                    <small class="text-[10px]">অনুষদ</small>
                </button>
                <button class="w-[5.35em] h-[2em] flex justify-center items-center gap-2   text-white px-[1em]" style="border-radius: 10px;
        background: var(--blue-1, #0C1167);">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 25" fill="none">
                            <path d="M16.4719 15.5283L12 20.0002L7.52813 15.5283C4.17656 15.6736 1.5 18.4158 1.5 21.8002V22.2502C1.5 23.4924 2.50781 24.5002 3.75 24.5002H20.25C21.4922 24.5002 22.5 23.4924 22.5 22.2502V21.8002C22.5 18.4158 19.8234 15.6736 16.4719 15.5283ZM2.1375 4.24082L2.4375 4.31113V7.04863C2.10938 7.24551 1.875 7.5877 1.875 8.0002C1.875 8.39395 2.09063 8.72207 2.39531 8.92363L1.66406 11.8439C1.58437 12.1674 1.7625 12.5002 2.02031 12.5002H3.97969C4.2375 12.5002 4.41563 12.1674 4.33594 11.8439L3.60469 8.92363C3.90938 8.72207 4.125 8.39395 4.125 8.0002C4.125 7.5877 3.89062 7.24551 3.5625 7.04863V4.58301L6.65625 5.32832C6.25313 6.13457 6 7.03457 6 8.0002C6 11.3143 8.68594 14.0002 12 14.0002C15.3141 14.0002 18 11.3143 18 8.0002C18 7.03457 17.7516 6.13457 17.3438 5.32832L21.8578 4.24082C22.7109 4.03457 22.7109 2.97051 21.8578 2.76426L12.9328 0.608008C12.3234 0.462695 11.6812 0.462695 11.0719 0.608008L2.1375 2.75957C1.28906 2.96582 1.28906 4.03457 2.1375 4.24082Z" fill="white" />
                        </svg>
                    </span>
                    <small class="text-[10px]">শিক্ষার্থী</small>
                </button>
            </div>
        </div>
        <div class="drawer">
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <!-- Page content here -->
            </div>
            <div class="drawer-side ">
                <label for="my-drawer" class="drawer-overlay"></label>
                <ul class="menu p-4 w-64 min-h-full bg-base-200 text-base-content">
                    <li class="my-3"><a href="{{url('/')}}" class="text-[1.5em] submenu">হোম</a></li>
                    <li class="my-3" tabindex="0">
                        <details>
                            <summary id="menu1" class="text-[1.5em] submenu">
                                আমাদের সম্পর্কে
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M2.5 6.95L3.01625 6.25L17.0088 6.25L17.5 6.925L10.4663 13.75H9.4325L2.5 6.95Z" fill="#0C1167" />
                                </svg>
                            </summary>
                            <ul class="p-2 z-30">
                                <li><a href="{{url('aboutUs')}}">আমাদের সম্পর্কে</a></li>
                                <li><a href="{{url('contact')}}">যোগাযোগ ও ঠিকানা</a></li>
                                <li><a href="{{url('teachers')}}">শিক্ষক ও কর্মচারী</a></li>
                            </ul>
                        </details>
                    </li>
                    <li class="my-3" tabindex="0">
                        <details>
                            <summary id="menu2" class="text-[1.5em]">একাডেমিক
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M2.5 6.95L3.01625 6.25L17.0088 6.25L17.5 6.925L10.4663 13.75H9.4325L2.5 6.95Z" fill="#0C1167" />
                                </svg>
                            </summary>
                            <ul class="p-2 z-30">
                                <li><a href="{{url('academics')}}">শিক্ষা বর্ষপঞ্জি</a></li>
                                <li><a href="{{url('rules')}}">নিয়মকানুন</a></li>
                                <li><a href="{{url('examAndResult')}}">পরীক্ষা এবং ফলাফল</a></li>
                            </ul>
                        </details>
                    </li>
                    <li class="my-3" tabindex="0">
                        <details>
                            <summary id="menu3" class="text-[1.5em] submenu">সহ - পাঠক্রম
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M2.5 6.95L3.01625 6.25L17.0088 6.25L17.5 6.925L10.4663 13.75H9.4325L2.5 6.95Z" fill="#0C1167" />
                                </svg>
                            </summary>
                            <ul class="p- z-30">
                                <li><a href="{{url('clubAndSociety')}}">ক্লাব এবং সোসাইটি</a></li>
                                <li><a href="{{url('gamesAndSports')}}">গেমস এবং স্পোর্টস</a></li>
                                <li><a href="{{url('library')}}"> লাইব্রেরি</a></li>
                                <li><a href="{{url('multimedia')}}">মাল্টিমিডিয়া ক্লাস রুম</a></li>
                            </ul>
                        </details>
                    </li>
                    <li class="my-3" tabindex="0">
                        <details>
                            <summary id="menu4" class="text-[1.5em]">ভর্তি- সংক্রান্ত
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M2.5 6.95L3.01625 6.25L17.0088 6.25L17.5 6.925L10.4663 13.75H9.4325L2.5 6.95Z" fill="#0C1167" />
                                </svg>
                            </summary>
                            <ul class="p-2 z-30">
                                <li><a href="{{url('admission')}}">ভর্তি সংক্রান্ত</a></li>
                            </ul>
                        </details>
                    </li>
                    <li class="my-3" tabindex="0">
                        <details>
                            <summary id="menu5" class="text-[1.5em]">তথ্যচিত্র
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M2.5 6.95L3.01625 6.25L17.0088 6.25L17.5 6.925L10.4663 13.75H9.4325L2.5 6.95Z" fill="#0C1167" />
                                </svg>
                            </summary>
                            <ul class="p-2 z-30">
                                <li><a href="{{url('program')}}">অনুষ্ঠান ও কর্মসূচি</a></li>
                            </ul>
                        </details>
                    </li>

                </ul>
            </div>
        </div>
    </header>
</section>