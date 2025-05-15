<section class="hero-banner position-relative overflow-hidden">
    <picture>
        <source srcset="{{ asset('images/nature.webp') }}" type="image/webp">
        <img
            src="{{ asset('images/nature.jpg') }}"
            alt="Jungle tuin achtergrond"
            width="1920"
            height="900"
            class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 z-2"
            loading="eager"
            fetchpriority="high"
        >
    </picture>
    <div class="hero-overlay d-flex flex-column justify-content-center align-items-start text-start">
        @include('partials.menu')

        <div class="hero-content text-start px-5">
            @isset($title)
                <h1 class="display-1 fw-normal" style="line-height: 1.1; font-size: 3.5rem;">
                    {{ $title }}
                </h1>
            @endisset

            @isset($subtitle)
                <h2 class="fs-3 fst-italic mb-4">
                    {{ $subtitle }}
                </h2>
            @endisset

            @isset($description)
                <p class="fs-5 mb-4" style="max-width: 600px;">
                    {{ $description }}
                </p>
            @endisset

            @if(isset($buttonUrl) && isset($buttonText))
                <a href="{{ $buttonUrl }}" class="btn btn-success btn-lg rounded-pill py-2">
                    {{ $buttonText }}
                </a>
            @endif
        </div>
    </div>
</section>