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
        @isset($title)
            <h2 class="mb-3" style="font-family: 'Georgia', serif;">
                {{ $title }}
            </h2>
        @endisset
        @isset($description1)
        <p class="mb-3">
           {{ $description1 }}
        </p>
        @endisset
        @isset($description2)
        <p class="mb-4">
            {{ $description2 }}
        </p>
        @endisset

        @if(isset($contactPhone) || isset($contactEmail))
            <div class="mt-3">
                <h5 class="mb-2">Onze gegevens</h5>
                @isset($contactPhone)
                    <p class="mb-1">Telefoonnummer: <a href="tel:{{ $contactPhone }}">{{ $contactPhone }}</a></p>
                @endisset
                @isset($contactEmail)
                    <p class="mb-1">E-mail: <a href="mailto:{{ $contactEmail }}">{{ $contactEmail }}</a></p>
                @endisset
            </div>
        @endif

        @if(isset($buttonUrl) && isset($buttonText))
            <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                <a href="{{ $buttonUrl }}" class="btn btn-success btn-lg rounded-pill py-2 px-4">
                    {{ $buttonText }}
                </a>
            </div>
        @endif
    </div>
</div>



<footer class="text-center py-3">
    <div class="footer-inner d-flex flex-column align-items-center gap-3">
        <div>&copy; {{ date('Y') }} Jungletuin voor thuis</div>

        <div class="d-flex gap-2">
            @isset($buttonFacebook)
                <a href="{{ $buttonFacebook }}" target="_blank" rel="noopener"
                   class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center"
                   style="width: 40px; height: 40px;">
                    <i class="bi bi-facebook"></i>
                </a>
            @endisset

            @isset($buttonInstagram)
                <a href="{{ $buttonInstagram }}" target="_blank" rel="noopener"
                   class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center"
                   style="width: 40px; height: 40px;">
                    <i class="bi bi-instagram"></i>
                </a>
            @endisset
        </div>
    </div>
</footer>
