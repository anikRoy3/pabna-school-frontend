@include('components.footer.index')


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const nav_one = document.getElementById("nav_one");
        const nav_two = document.getElementById("nav_two");
        const responsive_nav = document.getElementById("responsive_nav");
        const responsive_nav_two = document.getElementById("responsive_nav_two");

        function isMobileView() {
            return window.innerWidth <= 1365;
        }

        function updateNavigation() {
            if (isMobileView()) {
                nav_one.style.display = "none";
                nav_two.style.display = "none";
                responsive_nav.style.display = "block";
                responsive_nav_two.style.display = "none";
            } else {
                nav_one.style.display = "block";
                nav_two.style.display = "none";
                responsive_nav.style.display = "none";
                responsive_nav_two.style.display = "none";
            }
        }
        // Initial setup
        updateNavigation();

        // Add a resize event listener to check for changes in screen width
        window.addEventListener("resize", updateNavigation);

        // Reload the page and adapt navigation based on current screen size
        window.addEventListener("load", updateNavigation);

        window.addEventListener("scroll", function() {
            const scrollTop = window.scrollY;

            if (!isMobileView()) {
                if (scrollTop > 180) {
                    nav_one.style.display = "none";
                    nav_two.style.display = "block";
                }
                if (scrollTop === 0) {
                    nav_one.style.display = "block";
                    nav_two.style.display = "none";
                }
            }
            if (isMobileView()) {
                if (scrollTop > 0) {
                    responsive_nav.style.display = "none";
                    responsive_nav_two.style.display = "block";
                } else {
                    responsive_nav.style.display = "block";
                    responsive_nav_two.style.display = "none";
                }
            }
        });
    });
</script>


<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script>
    const swiperEl = document.querySelector('swiper-container')
    Object.assign(swiperEl, {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
        },
    });
    swiperEl.initialize();
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log($('.banner'))
        $('.banner').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    })
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        }) /*  */
    })
</script>




{{-- Navbar js --}}
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";
        $.ajax({
            url: localServerBaseUrl + '/api/settings',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const url = "{{ env('LOCAL_SERVER_BASE_URL') }}";
                const image_url = response.data[0].school_logo;
                $('.school_name').text(response.data[0].school_name);
                $('.EIIN_no').text(response.data[0].EIIN_no);
                $('.school_code').text(response.data[0].school_code);
                $('.college_code').text(response.data[0].college_code);
                const mobile_numbers = JSON.parse(response.data[0].mobile_numbers);
                const emails = JSON.parse(response.data[0].emails);
                $('.nav_school_logo').attr('src', `${url}/storage/${image_url}`);
                $('.school_email').text(emails[0]);
                if (mobile_numbers.length > 1) {
                    $('.mobile_no_2').text(mobile_numbers[1]);
                } else {
                    $('.mobile_no_1').text(mobile_numbers[0]);
                }
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });
    })
</script> --}}


{{-- sliders section  --}}
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";
        const banner_slider = $('.banner');
        const banner_items = $('.item')
        console.log(banner_items)
        $.ajax({
            url: localServerBaseUrl + '/api/sliders',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const url = "{{ env('LOCAL_SERVER_BASE_URL') }}";
                const sliders = response.data;
                let htmlContent = '';

                /* sliders.forEach(e => {
                    htmlContent += `
                    <div class="item banner_item">
        <img style="height: 450px; width: 100%"
            src="${e.image_url}"
            alt="">

    </div>
                   
        `;
                }); */
                // banner_slider.html(htmlContent);
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });
    })
</script> --}}

{{-- notice section script --}}
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";
        $.ajax({
            url: localServerBaseUrl + '/api/notices',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const notices_conatiner = $('#notices_conatiner');
                const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep",
                    "Oct", "Nov", "Dec"
                ]
                const notices = response.data
                let htmlContent = '';
                notices_conatiner.html('');
                notices.forEach(e => {
                    const dateObject = new Date(e.date);
                    const timeOptions = {
                        hour: 'numeric',
                        minute: 'numeric',
                        second: 'numeric'
                    };

                    const banglaDate = dateObject.toLocaleDateString('bn-BD', timeOptions)
                        .split(',');
                    htmlContent += `
                    <div class="flex p-2 gap-2 mb-2 items-center"
                    style="border: 0.5px solid #F6F6F6;
            background: var(--white, #FFF);
            box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.25);">
                    <div
                        style="border-radius: 3px;
                                background: #E7E8FF;
                                color: var(--blue-1, #0C1167);
                                padding:15px;
                                font-weight: 700;">
                        <p>${new Date(e.date).getDate()}</p>
                        <span>${months[new Date(e.date).getMonth()]}</span>
                    </div>
                    <div>
                        <small class="mb-3">${e.notice}</small>
                        <p class="flex items-center">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16"
                                    viewBox="0 0 15 16" fill="none">
                                    <path
                                        d="M3.75 0.96875C3.75 0.84443 3.70061 0.725201 3.61271 0.637294C3.5248 0.549386 3.40557 0.5 3.28125 0.5C3.15693 0.5 3.0377 0.549386 2.94979 0.637294C2.86189 0.725201 2.8125 0.84443 2.8125 0.96875V1.4375H1.875C1.37772 1.4375 0.900806 1.63504 0.549175 1.98667C0.197544 2.33831 0 2.81522 0 3.3125L0 4.25H15V3.3125C15 2.81522 14.8025 2.33831 14.4508 1.98667C14.0992 1.63504 13.6223 1.4375 13.125 1.4375H12.1875V0.96875C12.1875 0.84443 12.1381 0.725201 12.0502 0.637294C11.9623 0.549386 11.8431 0.5 11.7188 0.5C11.5944 0.5 11.4752 0.549386 11.3873 0.637294C11.2994 0.725201 11.25 0.84443 11.25 0.96875V1.4375H3.75V0.96875ZM15 13.625C15 14.1223 14.8025 14.5992 14.4508 14.9508C14.0992 15.3025 13.6223 15.5 13.125 15.5H1.875C1.37772 15.5 0.900806 15.3025 0.549175 14.9508C0.197544 14.5992 0 14.1223 0 13.625V5.1875H15V13.625ZM10.5141 7.86406C10.5683 7.86669 10.6226 7.85827 10.6735 7.83931C10.7244 7.82035 10.7709 7.79126 10.8102 7.75378C10.8496 7.71631 10.8809 7.67124 10.9023 7.6213C10.9237 7.57137 10.9347 7.51761 10.9347 7.46328C10.9347 7.40896 10.9237 7.3552 10.9023 7.30526C10.8809 7.25533 10.8496 7.21025 10.8102 7.17278C10.7709 7.13531 10.7244 7.10621 10.6735 7.08725C10.6226 7.0683 10.5683 7.05988 10.5141 7.0625C10.461 7.062 10.4083 7.07208 10.3592 7.09217C10.3101 7.11225 10.2654 7.14192 10.2279 7.17946C10.1904 7.21699 10.1607 7.26163 10.1406 7.31077C10.1205 7.3599 10.1104 7.41255 10.1109 7.46562C10.1109 7.68875 10.2909 7.86406 10.5141 7.86406ZM10.8291 8.39188H10.1991V12.2403H10.8291V8.39188ZM4.39125 12.2403V10.0841H6.51094V9.51219H4.39125V7.81344H6.70125V7.24156H3.75V12.2403H4.39125ZM7.48125 12.2403H8.115V9.85625C8.115 9.33687 8.32781 8.91219 9.00844 8.91219C9.12563 8.91219 9.25031 8.91594 9.31687 8.92625V8.35156C9.23804 8.33971 9.15847 8.33345 9.07875 8.33281C8.53312 8.33281 8.24344 8.63281 8.13 8.86438H8.11125V8.39188H7.48125V12.2403Z"
                                        fill="#0C1167" />
                                </svg>
                            </span>
                            <small class="me-4">${banglaDate[0]}</small>
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16"
                                    viewBox="0 0 15 16" fill="none">
                                    <path
                                        d="M7.49375 1.75C4.04375 1.75 1.25 4.55 1.25 8C1.25 11.45 4.04375 14.25 7.49375 14.25C10.95 14.25 13.75 11.45 13.75 8C13.75 4.55 10.95 1.75 7.49375 1.75ZM9.55625 10.9437L6.875 8.25625V4.875H8.125V7.74375L10.4437 10.0625L9.55625 10.9437Z"
                                        fill="#0C1167" />
                                </svg>
                            </span>
                            <small>${banglaDate[1]}</small>
                        </p>
                    </div>
                </div>
        `;
                });
                notices_conatiner.html(htmlContent);
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });
    })
</script> --}}

{{-- Achievement section script --}}
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";
        const ourAchievementContainer = $('#ourAchievementContainer')
        ourAchievementContainer.html('')
        $.ajax({
            url: localServerBaseUrl + '/api/ourAchievements',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const url = "{{ env('LOCAL_SERVER_BASE_URL') }}";
                const achievements = response.data[0];
                let htmlContent = '';
                const parsedImages = JSON.parse(achievements.images);
                parsedImages.slice(0, 3).forEach(e => {
                    htmlContent += `
                    <div class="sm:w-1/3 md:w-1/3 lg:w-full">
                        <img src="${localServerBaseUrl}/storage/${e}" alt="" class="w-full h-auto">
                    </div>
        `;
                });
                ourAchievementContainer.html(htmlContent);
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });
    })
</script>
 --}}


{{-- program section --}}
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";
        const program_images_container = $('#program_images_container')
        program_images_container.html('')
        $.ajax({
            url: localServerBaseUrl + '/api/ourAchievements',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const allImages = [];
                let htmlImages = ''
                response.data.forEach(element => {
                    const images = JSON.parse(element.images)
                    allImages.push(...images)
                });
                allImages.slice(3).forEach(image => {
                    htmlImages += `
                    <img src="${localServerBaseUrl}/storage/${image}" alt="">
                    `
                })
                program_images_container.html(htmlImages)
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });
    })
</script> --}}


{{-- Teachers section --}}
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";
        const teachers_day_container = $('#teachers_day_container');
        const teachers_morning_container = $('#teachers_morning_container')

        $.ajax({
            url: localServerBaseUrl + '/api/teachers',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const all_teachers = response.data;
                const day_teachers = all_teachers.filter(t => t.section === 'day');
                const morning_teachers = all_teachers.filter(t => t.section === 'morning');

                let d_t_html = '';
                let m_t_html = '';
                teachers_day_container.html('')
                const injectTeachers = (teachers, shift) => {

                }
                day_teachers.forEach(({
                    name,
                    designation,
                    lastDegree,
                    phone,
                    image
                }) => {
                    d_t_html += `
                        
                    <div class=" bg-base-100 shadow-xl  flex flex-col items-center justify-between" style="border-radius: 5px;
                    border: 0.5px solid var(--blue-1, #0C1167);
                    background: var(--white, #FFF);
                    height: 400px">
                <img style="height: 230px;" src="${localServerBaseUrl}/storage/${image}" alt="Shoes" class="p-2 rounded-xl" />
                <h2 class="">${name}</h2>
                <small>${designation}</small>
                <small>${lastDegree}</small>
                <div class="flex justify-between items-center w-full p-3">
                    <button style="border-radius: 5px; padding: 5px; background: var(--blue-1, #0C1167); color: white; display: flex; height: 30px; justify-content: center; align-items: center; gap: 5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M17.175 13.3167C16.15 13.3167 15.1583 13.15 14.2333 12.85C14.0884 12.8009 13.9326 12.7936 13.7837 12.829C13.6349 12.8643 13.499 12.9409 13.3917 13.05L12.0833 14.6917C9.725 13.5667 7.51667 11.4417 6.34167 9L7.96667 7.61667C8.19167 7.38333 8.25833 7.05833 8.16667 6.76667C7.85833 5.84167 7.7 4.85 7.7 3.825C7.7 3.375 7.325 3 6.875 3H3.99167C3.54167 3 3 3.2 3 3.825C3 11.5667 9.44167 18 17.175 18C17.7667 18 18 17.475 18 17.0167V14.1417C18 13.6917 17.625 13.3167 17.175 13.3167Z" fill="white" />
                        </svg>
                        <span>${phone}</span>
                    </button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="43" viewBox="0 0 44 43" fill="none">
                        <path d="M36.333 7.1665H7.66634C5.69551 7.1665 4.10092 8.779 4.10092 10.7498L4.08301 32.2498C4.08301 34.2207 5.69551 35.8332 7.66634 35.8332H36.333C38.3038 35.8332 39.9163 34.2207 39.9163 32.2498V10.7498C39.9163 8.779 38.3038 7.1665 36.333 7.1665ZM36.333 14.3332L21.9997 23.2915L7.66634 14.3332V10.7498L21.9997 19.7082L36.333 10.7498V14.3332Z" fill="#0C1167" />
                    </svg>
                </div>
            </div>

                        `
                })
                morning_teachers.forEach(({
                    name,
                    designation,
                    lastDegree,
                    phone,
                    image
                }) => {
                    m_t_html += `
                        
                    <div class=" bg-base-100 shadow-xl  flex flex-col items-center justify-between" style="border-radius: 5px;
    border: 0.5px solid var(--blue-1, #0C1167);
    background: var(--white, #FFF);
    height: 400px">
                <img style="height: 230px;" src="${localServerBaseUrl}/storage/${image}" alt="Shoes" class="p-2 rounded-xl" />
                <h2 class="">${name}</h2>
                <small>${designation}</small>
                <small>${lastDegree}</small>
                <div class="flex justify-between items-center w-full p-3">
                    <button style="border-radius: 5px; padding: 5px; background: var(--blue-1, #0C1167); color: white; display: flex; height: 30px; justify-content: center; align-items: center; gap: 5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M17.175 13.3167C16.15 13.3167 15.1583 13.15 14.2333 12.85C14.0884 12.8009 13.9326 12.7936 13.7837 12.829C13.6349 12.8643 13.499 12.9409 13.3917 13.05L12.0833 14.6917C9.725 13.5667 7.51667 11.4417 6.34167 9L7.96667 7.61667C8.19167 7.38333 8.25833 7.05833 8.16667 6.76667C7.85833 5.84167 7.7 4.85 7.7 3.825C7.7 3.375 7.325 3 6.875 3H3.99167C3.54167 3 3 3.2 3 3.825C3 11.5667 9.44167 18 17.175 18C17.7667 18 18 17.475 18 17.0167V14.1417C18 13.6917 17.625 13.3167 17.175 13.3167Z" fill="white" />
                        </svg>
                        <span>${phone}</span>
                    </button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="43" viewBox="0 0 44 43" fill="none">
                        <path d="M36.333 7.1665H7.66634C5.69551 7.1665 4.10092 8.779 4.10092 10.7498L4.08301 32.2498C4.08301 34.2207 5.69551 35.8332 7.66634 35.8332H36.333C38.3038 35.8332 39.9163 34.2207 39.9163 32.2498V10.7498C39.9163 8.779 38.3038 7.1665 36.333 7.1665ZM36.333 14.3332L21.9997 23.2915L7.66634 14.3332V10.7498L21.9997 19.7082L36.333 10.7498V14.3332Z" fill="#0C1167" />
                    </svg>
                </div>
            </div>

                        `
                })
                teachers_day_container.html(d_t_html);
                teachers_morning_container.html(m_t_html);
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });
    })
</script>
 --}}

{{-- Education section --}}
<script>
    const academics = []
    const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";

    function academicPdfRender(id) {
        const academicPdfField = $('#academicPdfField');
        const info = academics.find(info => info.id == id);
        academicPdfField.html(`
        <iframe  src="${localServerBaseUrl}/storage/${info.pdf}" style="width: 100%;" height="500" class="pointer">
                </iframe>
        `)

    }
    document.addEventListener("DOMContentLoaded", function() {
        const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";
        const academicTitleField = $('#academicTitleField');
        $.ajax({
            url: localServerBaseUrl + '/api/academic',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const infos = response.data;
                academics.push(...infos);
                let i_html = '';
                if (infos.length > 0) {
                    $('#academicPdfField').html(`
        <iframe  src="${localServerBaseUrl}/storage/${infos[0].pdf}" style="width: 100%;" height="500" class="pointer">
                </iframe>
        `)
                }
                infos.forEach(({
                    title,
                    id
                }) => {
                    i_html += `
                <p onClick="academicPdfRender('${id}')" class="p-5 pdfField flex items-center my-2 text-[1.3em]" style="">
                    <span>
                        <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="#0C1167" />
                        </svg>
                    </span>
                    <small>${title}</small>
                </p>
                `
                })
                academicTitleField.html(i_html);


            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });


    })
</script>

{{-- Admssion section --}}
<script>
    const admissions = []
    // const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";

    function admissionPdfRender(id) {
        const admissionPdfField = $('#admissionPdfField');
        const info = admissions.find(info => info.id == id);
        admissionPdfField.html(`
        <iframe  src="${localServerBaseUrl}/storage/${info.pdf}" style="width: 100%;" height="500" class="pointer">
                </iframe>
        `)

    }
    document.addEventListener("DOMContentLoaded", function() {
        const admissionTitleField = $('#admissionTitleField');
        $.ajax({
            url: localServerBaseUrl + '/api/admission',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log(response);
                const infos = response.data;
                admissions.push(...infos);
                let i_html = '';
                if (infos.length > 0) {
                    $('#admissionPdfField').html(`
        <iframe  src="${localServerBaseUrl}/storage/${infos[0].pdf}" style="width: 100%;" height="500" class="pointer">
                </iframe>
        `)
                }
                infos.forEach(({
                    title,
                    id
                }) => {
                    i_html += `
                <p onClick="admissionPdfRender('${id}')" class="p-5 pdfField flex items-center my-2 text-[1.3em]" style="">
                    <span>
                        <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="#0C1167" />
                        </svg>
                    </span>
                    <small>${title}</small>
                </p>
                `
                })
                admissionTitleField.html(i_html);


            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });


    })
</script>


{{-- Exam And Result section --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";
        const exam_name = $('#exam_name');
        const table_body = $('#table_body')
        const exam_names = []
        $.ajax({
            url: localServerBaseUrl + '/api/coCurricular',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const data = response.data;
                exam_name.html('')
                let table_body_element = ''
                table_body.html('')
                let exam_name_element = ''
                data.forEach(e => {
                    exam_names.push(e?.exam_name);
                    table_body_element += `
                    
                    <tr class="h-20 my-2">
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">${e?.exam_name.toUpperCase()}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">${e?.exam_year}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">${e?.total_candidates}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">${e?.attended_candidates}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">${e?.a_plus_holder}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">${e.total_pass}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">${e?.pass_rate}%</td>
                            </tr>
                    
                    `;
                })
                exam_names.forEach((name, i) => {
                    exam_name_element += `      
                <div class="flex items-center justify-center p-4 my-2 w-full ${i===0 ? 'text-white bg-[#0C1167]' :''}" style="border: 1px solid var(--blue-1, #0C1167);">
                        <span class="me-2">${name.toUpperCase()}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                            fill="none">
                            <path
                                d="M17.8817 13.2955L8.77183 22.4053C8.33247 22.8447 7.62016 22.8447 7.18084 22.4053L6.11833 21.3428C5.67972 20.9042 5.67887 20.1933 6.11645 19.7537L13.3362 12.5L6.11645 5.24628C5.67887 4.80664 5.67972 4.09578 6.11833 3.65717L7.18084 2.59466C7.6202 2.1553 8.33251 2.1553 8.77183 2.59466L17.8817 11.7045C18.321 12.1438 18.321 12.8561 17.8817 13.2955Z"
                                fill="white" />
                        </svg>
                    </div>
                
                `;
                })
                exam_name.html(exam_name_element)
                table_body.html(table_body_element);
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });
    })
</script>



{{-- School Activites for Club --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // for club page
        const club_page_title = $('#club_page_title');
        const club_page_title_two = $('#club_page_title_two')
        const club_page_description_one = $('#club_page_description_one');
        const club_page_description_two = $('#club_page_description_two');
        const club_page_image = $('#club_page_image');
        const club_page_images = $('#club_page_images');


        $.ajax({
            url: localServerBaseUrl + '/api/schoolActivities',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const data = response.data;
                data.forEach(d => {
                    const parsedImages = JSON.parse(d.images);
                    if (d.category == 'ক্লাব এবং সোসাইটি') {
                        club_page_title.html(d.category);
                        club_page_description_one.html(d.long_description.slice(0, 580));
                        club_page_description_two.html(d.long_description.slice(880));
                        club_page_title_two.html(d.category);
                        club_page_image.html(
                            `<img style="width: 100% ;" src="${localServerBaseUrl}/storage/${parsedImages[0]}" alt="">`
                        );
                        let imageElement = ''
                        parsedImages.forEach(image => {
                            imageElement += `
                            <img src="${localServerBaseUrl}/storage/${image}" alt="">
                            `;
                        })
                        club_page_images.html(imageElement);
                    }
                })

            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });


    })
</script>


{{-- School Activites for libraries --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // for libraries page
        const libraries_page_title = $('#libraries_page_title');
        const libraries_page_title_two = $('#libraries_page_title_two')
        const libraries_page_description_one = $('#libraries_page_description_one');
        const libraries_page_description_two = $('#libraries_page_description_two');
        const libraries_page_image = $('#libraries_page_image');
        const libraries_page_images = $('#libraries_page_images');


        $.ajax({
            url: localServerBaseUrl + '/api/schoolActivities',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const data = response.data;
                data.forEach(d => {
                    const parsedImages = JSON.parse(d.images);
                    if (d.category == 'লাইব্রেরি') {
                        libraries_page_title.html(d.category);
                        libraries_page_description_one.html(d.long_description.slice(0,
                            580));
                        libraries_page_description_two.html(d.long_description.slice(880));
                        libraries_page_title_two.html(d.category);
                        libraries_page_image.html(
                            `<img style="width: 100% ;" src="${localServerBaseUrl}/storage/${parsedImages[0]}" alt="">`
                        );
                        let imageElement = ''
                        parsedImages.forEach(image => {
                            imageElement += `
                            <img src="${localServerBaseUrl}/storage/${image}" alt="">
                            `;
                        })
                        libraries_page_images.html(imageElement);
                    }
                })

            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });


    })
</script>

{{-- School Activites for games --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // for games page
        const games_page_title = $('#games_page_title');
        const games_page_title_two = $('#games_page_title_two')
        const games_page_description_one = $('#games_page_description_one');
        const games_page_description_two = $('#games_page_description_two');
        const games_page_image = $('#games_page_image');
        const games_page_images = $('#games_page_images');


        $.ajax({
            url: localServerBaseUrl + '/api/schoolActivities',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const data = response.data;
                data.forEach(d => {
                    const parsedImages = JSON.parse(d.images);
                    if (d.category == 'গেমস এবং স্পোর্টস') {
                        games_page_title.html(d.category);
                        games_page_description_one.html(d.long_description.slice(0, 580));
                        games_page_description_two.html(d.long_description.slice(880));
                        games_page_title_two.html(d.category);
                        games_page_image.html(
                            `<img style="width: 100% ;" src="${localServerBaseUrl}/storage/${parsedImages[0]}" alt="">`
                        );
                        let imageElement = ''
                        parsedImages.forEach(image => {
                            imageElement += `
                            <img src="${localServerBaseUrl}/storage/${image}" alt="">
                            `;
                        })
                        games_page_images.html(imageElement);
                    }
                })

            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });


    })
</script>

{{-- School Activites for multimedia --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // for multimedia page
        const multimedia_page_title = $('#multimedia_page_title');
        const multimedia_page_title_two = $('#multimedia_page_title_two')
        const multimedia_page_description_one = $('#multimedia_page_description_one');
        const multimedia_page_description_two = $('#multimedia_page_description_two');
        const multimedia_page_image = $('#multimedia_page_image');
        const multimedia_page_images = $('#multimedia_page_images');


        $.ajax({
            url: localServerBaseUrl + '/api/schoolActivities',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const data = response.data;
                data.forEach(d => {
                    const parsedImages = JSON.parse(d.images);
                    if (d.category == 'মাল্টিমিডিয়া ক্লাস রুম') {
                        multimedia_page_title.html(d.category);
                        multimedia_page_description_one.html(d.long_description.slice(0,
                            580));
                        multimedia_page_description_two.html(d.long_description.slice(880));
                        multimedia_page_title_two.html(d.category);
                        multimedia_page_image.html(
                            `<img style="width: 100% ;" src="${localServerBaseUrl}/storage/${parsedImages[0]}" alt="">`
                        );
                        let imageElement = ''
                        parsedImages.forEach(image => {
                            imageElement += `
                            <img src="${localServerBaseUrl}/storage/${image}" alt="">
                            `;
                        })
                        multimedia_page_images.html(imageElement);
                    }
                })

            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });


    })
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        $.ajax({
            url: localServerBaseUrl + '/api/ourAchievements',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log(response);
                const all_images = [];
                const program_images = $('#program_images')
                const data = response.data;
                let imageHtml = '';
                data.forEach(d => {
                    const parsedImages = JSON.parse(d.images);
                    all_images.push(...parsedImages);
                })
                all_images.forEach(image => {
                    imageHtml += `                    
                    <img src="${localServerBaseUrl}/storage/${image}" alt="">
                    `;
                })
                program_images.html(imageHtml);
                console.log(all_images);

            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });


    })
</script>



{{-- FAQ ajax reequest --}}


<script>
    $(document).ready(function() {
        $('#faqForm').submit(function(event) {
            event.preventDefault();

            // Collect form data
            const formData = $(this).serialize();

            // Make AJAX request
            $.ajax({
                url: localServerBaseUrl + '/api/faqs',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.message) {
                        console.log(response);
                        $('#s_e_d').css('display', 'block');
                        $('#error_msg').css('display', 'none');
                        $('#success_msg').css('display', 'Thank you for your feedback.');
                        $('#success_msg').text(response.message);
                    }
                    // Handle success response here
                },
                error: function(error) {
                    // Handle errors
                    const errorMessage = JSON.parse(error.responseText).error;
                    $('#success_msg').css('display', 'none');
                    $('#s_e_d').css('display', 'block');
                    if (errorMessage) {
                        console.log(errorMessage);
                        $('#error_msg').css('display', 'block');
                        $('#error_msg').text(errorMessage.split(' ').slice(0, 5).join(' '));
                    }
                    console.log('Error:', errorMessage.split(' ').slice(0, 5).join(' '));
                    // Handle error response here
                }
            });

            setTimeout(() => {
                $('#s_e_d').css('display', 'none');
            }, 10000);
        });
    });
</script>

{{-- filtering teachers section --}}
<script>
    // document.addEventListener("DOMContentLoaded", function() {
    const localClientBaseUrl = "{{ env('LOCAL_CLIENT_BASE_URL') }}";

    function getDirectors(categoryId, clickedElement) {
        const directorsField = $('#directors');
        $('.directors_category').css({
            'background-color': 'initial',
            'color': 'initial',
        });

        // Set the background color and text color for the clicked element
        $(clickedElement).css({
            'background-color': '#0C1167',
            'color': '#ffffff',
        });
        $.ajax({
            url: localServerBaseUrl + '/api/directors',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const directors = response.data;
                // url: localServerBaseUrl + '/api/directors',
                const filteredDirectors = directors.filter(d => d.d_c_id == categoryId);
                let htmlContent = ''
                filteredDirectors.forEach(director => {
                    htmlContent += `
                    
                   <swiper-slide>

                    <div class=" bg-base-100 shadow-xl  flex flex-col items-center justify-between "
                        style="border-radius: 5px;
                    border: 0.5px solid var(--blue-1, #0C1167);
                    background: var(--white, #FFF);
                    height: 400px max-width: 300px">
                        <img style="height: 230px;" src="${director.image_url}" alt="Shoes" class="p-2 rounded-xl" />
                        <h2 class="text-[16px] font-semibold">${director.name}</h2>
                        <p class="w-full text-center">${director.designation}</p>
                        {{-- <small>{{$director['lastDegree']}}</small> --}}
                        <div class="flex justify-center w-full py-3">
                            <a href="{{ env('LOCAL_CLIENT_BASE_URL') }}/directors/${director.id}"
                                style="border-radius: 5px; background: var(--blue-1, #0C1167); color: white; display: flex; width: 100px; height: 30px; justify-content: center; align-items: center; gap: 5px;">
                                <span>আরো</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.7501 10.0001C1.7501 9.8343 1.81595 9.67533 1.93316 9.55812C2.05037 9.44091 2.20934 9.37506 2.3751 9.37506H17.1164L13.1826 5.44256C13.1245 5.38445 13.0784 5.31546 13.0469 5.23954C13.0155 5.16361 12.9993 5.08224 12.9993 5.00006C12.9993 4.91788 13.0155 4.8365 13.0469 4.76058C13.0784 4.68465 13.1245 4.61567 13.1826 4.55756C13.2407 4.49945 13.3097 4.45335 13.3856 4.4219C13.4615 4.39045 13.5429 4.37427 13.6251 4.37427C13.7073 4.37427 13.7887 4.39045 13.8646 4.4219C13.9405 4.45335 14.0095 4.49945 14.0676 4.55756L19.0676 9.55756C19.1258 9.61561 19.172 9.68458 19.2035 9.76052C19.235 9.83645 19.2512 9.91785 19.2512 10.0001C19.2512 10.0823 19.235 10.1637 19.2035 10.2396C19.172 10.3155 19.1258 10.3845 19.0676 10.4426L14.0676 15.4426C14.0095 15.5007 13.9405 15.5468 13.8646 15.5782C13.7887 15.6097 13.7073 15.6258 13.6251 15.6258C13.5429 15.6258 13.4615 15.6097 13.3856 15.5782C13.3097 15.5468 13.2407 15.5007 13.1826 15.4426C13.1245 15.3844 13.0784 15.3155 13.0469 15.2395C13.0155 15.1636 12.9993 15.0822 12.9993 15.0001C12.9993 14.9179 13.0155 14.8365 13.0469 14.7606C13.0784 14.6847 13.1245 14.6157 13.1826 14.5576L17.1164 10.6251H2.3751C2.20934 10.6251 2.05037 10.5592 1.93316 10.442C1.81595 10.3248 1.7501 10.1658 1.7501 10.0001Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                
                    </swiper-slide>

                    `;
                });
                directorsField.html(htmlContent);
                console.log(filteredDirectors)
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });
    }
    // })
</script>

</body>

</html>

<
