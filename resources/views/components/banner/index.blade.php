<div class="container mx-auto  bg-base-100 shadow-xl py-3">
    <div class="card-content flex flex-col gap-2 items-center lg:flex-row justify-between">
        <div style="flex: 80%; width:80%;">
            @include('utils.banner_carousel.banner_carousel')
        </div>
        <div style="flex: 20%;">
            <div class="flex items-center flex-col lg:items-center">
                {{-- @dd($directors) --}}
                @foreach ($directors as $director)
                    @if ($director['d_c_id'] == 4)
                        <img class="w-12 lg:w-20" src="{{ $director['image_url'] }}" alt="">
                        <h4 class="text-[1.2em]">{{ $director['name'] }}</h4>
                        <p class="mb-3">{{ $director['designation'] }}</p>
                        <div class="text-center lg:text-center">
                            <small>
                                {!! implode(' ', array_slice(explode(' ', $director['biodata']), 0, 35)) !!}...
                            </small>
                        </div>
                        <p class="mt-3">
                            <button class="w-[10.375em] h-[2em] flex justify-center items-center gap-2"
                                style="border-radius: 10px; border: 1px solid var(--blue-1, #0C1167);">
                                <a href="{{ route('directors.id', ['id' => $director['id']]) }}"
                                    style="color: #0C1167;">অধ্যক্ষের কিছু কথা</a>
                            </button>
                        </p>
                    @break

                @else
                @endif
            @endforeach
        </div>
    </div>
</div>
</div>
