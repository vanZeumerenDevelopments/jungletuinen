<div class="slider-wrapper container my-5">
    <div class="glider-contain">
        <div class="glider">
            @foreach([1, 2, 3, 1, 2, 3] as $i)
                <picture>
                    <source srcset="{{ asset("images/slider/slider{$i}.webp") }}" type="image/webp">
                    <img src="{{ asset("images/slider/slider{$i}.jpg") }}" alt="Jungletuin {{ $i }}" width="800" height="500" loading="lazy">
                </picture>
            @endforeach
        </div>
    </div>
</div>

