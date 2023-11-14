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


{{-- Navbar js --}}
<script>
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
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
{{-- 
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiperEl = document.getElementById('banner_sliderssdfasf')
        Object.assign(swiperEl, {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                clickable: true,
            },

        });
        swiperEl.initialize();
    })
</script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiperEl2 = document.getElementById('teachers_slider')
        console.log(swiperEl2)
        Object.assign(swiperEl2, {
            slidesPerView: 3,
            spaceBetween: 10,
            pagination: {
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },

        });
        swiperE2.initialize();
    })
</script>


{{-- sliders section  --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";
        const banner_slider = $('#banner_slider');
        $.ajax({
            url: localServerBaseUrl + '/api/sliders',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                const url = "{{ env('LOCAL_SERVER_BASE_URL') }}";
                const sliders = response.data;
                let htmlContent = '';
                sliders.forEach(e => {
                    htmlContent += `
                        <swiper-slide>
                            <img style="height: 450px; width: 100%" src="${e.image_url}" alt="">
                        </swiper-slide>
        `;
                });
                banner_slider.html(htmlContent);
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });
    })
</script>

{{-- notice section script --}}
<script>
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
</script>

{{-- Achievement section script --}}
<script>
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



{{-- program section --}}
<script>
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
</script>


{{-- Teachers section --}}
<script>
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


<script>
    const allInfos = []
    const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";

    function pdfRender(id) {
        const pdfField = $('#pdfField');
        const info = allInfos.find(info => info.id == id);
        pdfField.html(`
        <iframe  src="${localServerBaseUrl}/storage/${info.pdf}" style="width: 100%;" height="500" class="pointer">
                </iframe>
        `)

    }
    document.addEventListener("DOMContentLoaded", function() {
        const localServerBaseUrl = "{{ env('LOCAL_SERVER_BASE_URL') }}";
        const titleField = $('#titleField');
        $.ajax({
            url: localServerBaseUrl + '/api/academic',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log(response);
                const infos = response.data;
                allInfos.push(...infos);
                let i_html = '';
                if (infos.length > 0) {
                    $('#pdfField').html(`
        <iframe  src="${localServerBaseUrl}/storage/${infos[0].pdf}" style="width: 100%;" height="500" class="pointer">
                </iframe>
        `)
                }
                infos.forEach(({
                    title,
                    id
                }) => {
                    i_html += `
                <p onClick="pdfRender('${id}')" class="p-5 flex items-center my-2 text-[1.3em]" style="background: var(--white, #FFF);   
                box-shadow: -1px 1px 4px 0px rgba(0, 0, 0, 0.25);">
                    <span>
                        <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="#0C1167" />
                        </svg>
                    </span>
                    <small>${title}</small>
                </p>
                
                `
                })
                titleField.html(i_html);


            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
                // $('#result').text('Error occurred. Please check the console for details.');
            }
        });


    })
</script>

</body>

</html>
