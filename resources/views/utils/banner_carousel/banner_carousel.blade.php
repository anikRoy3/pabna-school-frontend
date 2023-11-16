@php
    $imageArray = [
    "https://img.freepik.com/free-photo/space-background-realistic-starry-night-cosmos-shining-stars-milky-way-stardust-color-galaxy_1258-154643.jpg",
    "https://example.com/image2.jpg",
    "https://example.com/image3.jpg",
    "https://example.com/image4.jpg",
    // Add more image URLs as needed
];
@endphp

{{-- @dd($data) --}}

<div class="owl-carousel owl-theme banner">
    @foreach ($sliders as $item)    
    <div class="item banner_item">
        <img style="height: 450px; width: 100%"
            src="{{$item['image_url']}}"
            alt="">

    </div>
    @endforeach
</div>
