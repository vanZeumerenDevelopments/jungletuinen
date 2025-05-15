<section class="hero-leaves position-relative overflow-visible">
    <picture>
        <source srcset="{{ asset('images/leaves.webp') }}" type="image/webp">
        <img
            src="{{ asset('images/leaves.jpg') }}"
            alt="Bladeren achtergrond"
            width="1920"
            height="700"
            class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 z-0"
        >
    </picture>

    <section id="backgroundSection" class="position-relative z-3 slider-margin">
        <div class="container">
            @include('partials.slider')
        </div>
    </section>
</section>
