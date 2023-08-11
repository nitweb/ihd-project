<script src="{{ asset('frontend/plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/shuffle/shuffle.min.js') }}"></script>

{{-- Swiper JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
<script src="{{ asset('frontend/plugins/google-map/gmap.js') }}"></script>

<script src="{{ asset('frontend/js/script.js') }}"></script>


<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        zoom: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('sweetalert::alert')
