<div class="container mx-auto  bg-base-100 shadow-xl py-3">
    <div class="card-content flex flex-col gap-2 items-center lg:flex-row justify-between">
        <div style="flex: 80%; width:80%;">
            @include('utils.banner_carousel.banner_carousel')
        </div>
        <div style="flex: 20%;">
            <div class="flex items-center flex-col lg:items-center">
                <img class="w-12 lg:w-20" src="src/assests/banner_images/teacher.png" alt="">
                <h4 class="text-[1.2em]">ফাওজিয়া রাশেদী</h4>
                <p class="mb-3">অধ্যক্ষ</p>
                <div class="text-center lg:text-center">
                    <small>পাবনা এজিবি কলোনির বাসিন্দাদের উদ্যোগে ১৯৬৫ সালের ১৫ মার্চ পাবনা প্রাণকেন্দ্র মতিঝিলে ‘পাবনা
                        জিলা স্কুল, পাবনা’ একটি প্রাথমিক বিদ্যালয় হিসেবে আত্মপ্রকাশ করে।</small>
                </div>
                <p class="mt-3">
                    <button class="w-[10.375em] h-[2em] flex justify-center items-center gap-2"
                        style="border-radius: 10px; border: 1px solid var(--blue-1, #0C1167);">
                        <a href="<?php echo 'http://localhost/pabna-school/priencipalTalk.php'; ?>" style="color: #0C1167;">অধ্যক্ষের কিছু কথা</a>
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>

