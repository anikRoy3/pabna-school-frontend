
<header id="nav_two" class=" container mx-auto sticky top-0 z-40 bg-white h-[3.875em]" style="display: none; transition: opacity 2s ease;">
    <nav class="flex">
        <a href="{{url('/')}}">
            <section class="flex items-center">
                <div class=" z-40 flex ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 27 25" fill="none">
                        <path d="M27 0H-1.90735e-06L13.365 12.625L27 25V0Z" fill="#0C1167" />
                    </svg>
                    <div style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)" class="w-[7em] h-[6em] rounded-md P-[1.688em] flex justify-center items-center bg-white">
                        <img class="w-[5em] nav_school_logo" src="{{env('LOCAL_SERVER_BASE_URL')}}/storage/{{$settings['school_logo']}}" alt="logo">
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 27 25" fill="none">
                        <path d="M0 0H27L13.635 12.625L0 25V0Z" fill="#0C1167" />
                    </svg>
                </div>
            </section>
        </a>
        <div class="flex">
            <nav class="w-full h-11 mt-2 transition duration-300 bg-white opacity-90 ease-in-out ">
                <div class="flex w-[70.670em] items-center justify-between ">
                    <p class="text-[1.2em] me-7 school_name">{{$settings['school_name']}}
                    </p>
                    <ul class="menu menu-horizontal px-1 flex space-x-4 w-auto">
                        <li><a class="p-0" href="{{url('/')}}">হোম</a></li>
                        <li class="dropdown">
                            <details>
                                <summary id="menu1" class="p-0">
                                    আমাদের সম্পর্কে
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M2.5 6.95L3.01625 6.25L17.0088 6.25L17.5 6.925L10.4663 13.75H9.4325L2.5 6.95Z" fill="#0C1167" />
                                    </svg>
                                </summary>
                                <ul tabIndex={0} class="dropdown-content  menu p-2 shadow bg-base-100 rounded-box w-52">
                                    <li><a href="{{url('aboutUs')}}">আমাদের সম্পর্কে</a></li>
                                    <li><a href="{{url('contact')}}">যোগাযোগ ও ঠিকানা</a></li>
                                    <li><a href="{{url('teachers')}}">শিক্ষক ও কর্মচারী</a></li>
                                </ul>
                            </details>
                        </li>
                        <li class="dropdown">
                            <details>
                                <summary id="menu2" class="p-0">একাডেমিক
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M2.5 6.95L3.01625 6.25L17.0088 6.25L17.5 6.925L10.4663 13.75H9.4325L2.5 6.95Z" fill="#0C1167" />
                                    </svg>
                                </summary>
                                <ul tabIndex={0} class="dropdown-content  menu p-2 shadow bg-base-100 rounded-box w-52">
                                    <li><a href="{{url('academics')}}">শিক্ষা বর্ষপঞ্জি</a></li>
                                    <li><a href="{{url('rules')}}">নিয়মকানুন</a></li>
                                    <li><a href="{{url('examAndResult')}}">পরীক্ষা এবং ফলাফল</a></li>
                                </ul>
                            </details>
                        </li>
                        <li class="dropdown">
                            <details>
                                <summary id="menu3" class="p-0 submenu">সহ - পাঠক্রম
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M2.5 6.95L3.01625 6.25L17.0088 6.25L17.5 6.925L10.4663 13.75H9.4325L2.5 6.95Z" fill="#0C1167" />
                                    </svg>
                                </summary>
                                <ul tabIndex={0} class="dropdown-content  menu p-2 shadow bg-base-100 rounded-box w-52">
                                    <li><a href="{{url('clubAndSociety')}}">ক্লাব এবং সোসাইটি</a></li>
                                    <li><a href="{{url('gamesAndSports')}}">গেমস এবং স্পোর্টস</a></li>
                                    <li><a href="{{url('library')}}"> লাইব্রেরি</a></li>
                                    <li><a href="{{url('multimedia')}}">মাল্টিমিডিয়া ক্লাস রুম</a></li>
                                </ul>
                            </details>
                        </li>
                        <li class="dropdown">
                            <details>
                                <summary id="menu4" class="p-0">ভর্তি- সংক্রান্ত
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M2.5 6.95L3.01625 6.25L17.0088 6.25L17.5 6.925L10.4663 13.75H9.4325L2.5 6.95Z" fill="#0C1167" />
                                    </svg>
                                </summary>
                                <ul tabIndex={0} class="dropdown-content  menu p-2 shadow bg-base-100 rounded-box w-52">
                                    <li><a href="{{url('admission')}}">ভর্তি সংক্রান্ত</a></li>
                                </ul>
                            </details>
                        </li>
                        <li class="dropdown">
                            <details>
                                <summary id="menu5" class="p-0 text-[1.1em]">তথ্যচিত্র
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M2.5 6.95L3.01625 6.25L17.0088 6.25L17.5 6.925L10.4663 13.75H9.4325L2.5 6.95Z" fill="#0C1167" />
                                    </svg>
                                </summary>
                                <ul tabIndex={0} class="dropdown-content  menu p-2 shadow bg-base-100 rounded-box w-52">
                                    <li><a href="{{url('program')}}">অনুষ্ঠান ও কর্মসূচি</a></li>
                                </ul>
                            </details>
                        </li>
                    </ul>
                    <div><a class="px-3 text-[#0C1167]">লগইন করুন</a></div>

            </nav>
        </div>
    </nav>
</header>