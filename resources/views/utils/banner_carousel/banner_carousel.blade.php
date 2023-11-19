
<div class="owl-carousel owl-theme banner">
    @foreach ($sliders as $item)    
    <div class="item banner_item">
        <img style=""
                src="{{ $item['image_url'] }}"
                alt="">
    </div>
    @endforeach
</div>

