@php
    $extraClasses = (!request()->is('/') && !request()->is('home')) ? '' : '';
@endphp

<div class="jungle-box d-flex flex-column flex-md-row align-items-stretch overflow-hidden rounded shadow {{ $extraClasses }}">
    <div class="image-container w-100 w-md-50 position-relative">
        <picture>
            <source srcset="{{ asset('images/footer-image.webp') }}" type="image/webp">
            <img
                src="{{ asset('images/footer-image.jpeg') }}"
                alt="Jungle explorers"
                class="img-fluid w-100 h-100 object-fit-cover position-relative"
                style="object-position: center;"
            >
        </picture>
    </div>
    <div class="content-container p-5 d-flex flex-column justify-content-center w-100 w-md-50">
        <h2 class="mb-3" style="font-family: 'Georgia', serif;">Journey into the very heart of the jungle</h2>
        <p class="mb-3">
            At TrekTribe, we are passionate about providing exhilarating jungle expeditions that unveil the wonders of ancient ruins and breathtaking waterfalls.
            With our expert guides and immersive experiences, we invite you to embark on a remarkable journey through the untamed heart of the jungle.
        </p>
        <p class="mb-4">
            Our expeditions are meticulously crafted to blend adventure, education, and awe-inspiring natural beauty.
            Prepare to be captivated as we lead you through dense rainforests and unveil the secrets of ancient civilizations.
            Witness the magnificent ruins that stand as a testament to the past.
        </p>
        <div>
            <a href="#" class="btn btn-success px-4 py-2 rounded-pill">BOOK TODAY</a>
        </div>
    </div>
</div>



<footer class="text-center py-3">
    &copy; {{ date('Y') }} Jungletuin voor thuis
</footer>