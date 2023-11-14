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


});