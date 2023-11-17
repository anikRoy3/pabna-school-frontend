<section class="container mx-auto sticky top-0 z-50 bg-white hidden" id="responsive_nav_two">
    <header class="pb-2 ">
        <div class="bg-[#0C1167] flex items-center justify-end text-white p-3">
            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6875 2.25H11.375V1.375H10.5V2.25H3.5V1.375H2.625V2.25H1.3125L0.875 2.6875V13.1875L1.3125 13.625H12.6875L13.125 13.1875V2.6875L12.6875 2.25ZM12.25 12.75H1.75V4.875H12.25V12.75ZM12.25 4H1.75V3.125H12.25V4ZM3.5 7.5H2.625V8.375H3.5V7.5ZM2.625 9.25H3.5V10.125H2.625V9.25ZM3.5 11H2.625V11.875H3.5V11ZM5.25 7.5H6.125V8.375H5.25V7.5ZM6.125 9.25H5.25V10.125H6.125V9.25ZM5.25 11H6.125V11.875H5.25V11ZM6.125 5.75H5.25V6.625H6.125V5.75ZM7.875 7.5H8.75V8.375H7.875V7.5ZM8.75 9.25H7.875V10.125H8.75V9.25ZM7.875 11H8.75V11.875H7.875V11ZM8.75 5.75H7.875V6.625H8.75V5.75ZM10.5 7.5H11.375V8.375H10.5V7.5ZM11.375 9.25H10.5V10.125H11.375V9.25ZM10.5 5.75H11.375V6.625H10.5V5.75Z" fill="#F1FDFF" />
            </svg>
            <small>১৬ চৈত্র ১৪২৯ / বৃহস্পতিবার, মার্চ ৩০, ২০২৩</small>
        </div>
        <div class="flex items-center justify-between gap-2 p-2">
            <label for="my-drawer2" class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M2.25 6.1875H21.75C22.1642 6.1875 22.5 5.85173 22.5 5.4375V3.5625C22.5 3.14827 22.1642 2.8125 21.75 2.8125H2.25C1.83577 2.8125 1.5 3.14827 1.5 3.5625V5.4375C1.5 5.85173 1.83577 6.1875 2.25 6.1875ZM2.25 13.6875H21.75C22.1642 13.6875 22.5 13.3517 22.5 12.9375V11.0625C22.5 10.6483 22.1642 10.3125 21.75 10.3125H2.25C1.83577 10.3125 1.5 10.6483 1.5 11.0625V12.9375C1.5 13.3517 1.83577 13.6875 2.25 13.6875ZM2.25 21.1875H21.75C22.1642 21.1875 22.5 20.8517 22.5 20.4375V18.5625C22.5 18.1483 22.1642 17.8125 21.75 17.8125H2.25C1.83577 17.8125 1.5 18.1483 1.5 18.5625V20.4375C1.5 20.8517 1.83577 21.1875 2.25 21.1875Z" fill="#0C1167" />
                </svg>
            </label>
            <div>
                <h3 class="text-[1.2em] school_name">{{$settings['school_name']}}</h3>
                <small>EIIN :  <span  class="EIIN_no">{{$settings['EIIN_no']}}</span>  | কলেজ কোড: <span class="college_code">{{$settings['college_code']}}</span>  | স্কুল কোড: <span class="school_code">{{$settings['school_code']}}</span></small>
            </div>
        </div>
        <div class="drawer">
            <input id="my-drawer2" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <!-- Page content here -->
            </div>
            <div class="drawer-side ">
                <label for="my-drawer2" class="drawer-overlay"></label>
                <ul class="menu p-4 w-64 min-h-full bg-base-200 text-base-content">
                    <li class="my-3"><a class="text-[1.5em] submenu" href="{{url('/')}}" >হোম</a></li>
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
                            <<li><a href="{{url('clubAndSociety')}}">ক্লাব এবং সোসাইটি</a></li>
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