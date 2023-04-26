<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>'
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    @livewireStyles
    <style>
        #show-more{
            cursor: pointer;
        }
        .siteDescription p {
            height: 100px;
            overflow: hidden;
        }

        .siteDescription p.show {
            height: auto;
        }

        @if(auth()->check())
        section.mySwiper{
            padding-top: 140px;
        }
        @else
        section.mySwiper {
            padding-top: 95px;

        }

        @endif

        span.font-weight-bold {
            color: #3f4064;
        }

        header {
            z-index: 999;
            top: 0;
            width: 100%;
            display: block;


        }

        /*section.mySwiper {*/
        /*    padding-top: 96px;*/
        /*}*/

        .swiper-popularBrands .swiper-wrapper {
            align-items: center;
        }

        @media only screen and (max-width: 992px) {
            div:nth-of-type(even) {
                border-left: none !important;
            }

            div:nth-of-type(odd) {
                border-right: none !important;
            }
        }

        section.best-selling div.row div:nth-of-type(-n+4) {
            border-top: none !important;
        }

        section.best-selling div.row div:nth-last-of-type(-n+4) {
            border-bottom: none !important;
        }

        section.best-selling div.row div:first-child {
            border-right: none !important;
        }

        section.best-selling div.row div:last-child {
            border-left: none !important;
        }

        section.best-selling div.row div:nth-of-type(4) {
            border-left: none !important;
        }

        section.best-selling div.row div:nth-of-type(5) {
            border-right: none !important;
        }

        .btn-like {
            cursor: pointer
        }

        section.categories div.row div a {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .nav-item a.nav-link {
            display: inline;
            height: 20px; /* Change the value to the height of your <i> element */
            line-height: 0; /* Change the value to the height of your <i> element */
        }

        .story {
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            overflow: hidden;
        }

        .story img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }

        .story svg {
            fill: none;
            stroke: #8a3ab8;
            stroke-width: 3px;
            stroke-dasharray: 1;
            stroke-dashoffset: 0;
            stroke-linecap: round;
        }

        .loading-effect {
            animation: loading 4500ms ease-in-out infinite alternate;
        }

        @keyframes loading {
            100% {
                stroke: #cd476b;
                stroke-dasharray: 10;
                transform: rotate(200deg);
            }
        }

        .nav-item i {
            vertical-align: 0;
            transition: all 0.5s ease;
        }

        div.dropdown-menu.position-absolute {
            right: 0;
            top: 39px;
        }

        div.list-group a.list-group-item, ul.list-group li.list-group-item {
            border: none;
        }

        .swiper-pagination-bullet-active {
            background-color: white !important;
            transition: all 0.2s ease;
            padding: 5px 7px 5px 7px;

        }

        .swiper-button-next, .swiper-button-prev {
            color: #3f4064 !important;
        }

        .mySwiper img {
            max-width: 100%;
            height: 30em;
        }

        .specialOffersSlider .swiper-slide {
            margin-left: 10px !important;
        }

        .specialOffersSlider .swiper-wrapper .swiper-slide div.rounded-4 {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }

        .myThirdSwiper .swiper-slide a {
            text-decoration: none !important;
        }


        .prev-button,
        .next-button {
            position: absolute;
            top: 50%;
            z-index: 9999;
            justify-content: center;
            align-items: center;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background-color: #fff;
            text-align: center;
            cursor: pointer;
            color: #3f4064 !important;
            border: 1px solid gray;
        }

        .next-button {
            display: none;
            right: 20px !important;
        }

        .prev-button {
            display: none;

            left: 20px !important;
        }

        .arrow {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-top: 2px solid #000;
            border-right: 2px solid #000;
            transform: rotate(45deg);
        }

        .left {
            margin-right: 3px;
            transform: rotate(-135deg);
        }

        .next-button .left {
            transform: rotate(45deg);
        }

        .right {
            margin-left: 3px;
            transform: rotate(45deg);
        }

        .prev-button .right {
            transform: rotate(-45deg);
        }


    </style>
    @vite(['resources/sass/app.scss'])
</head>
<body>
<livewire:header.index />
<livewire:slider.index />
<livewire:cheap-products.index />
<livewire:categories.index />
<livewire:new-products.index />
<livewire:best-sellings.index />
<livewire:popular-brands.index />
<livewire:footer.index/>


{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
@vite(['resources/js/app.js'])
@livewireScripts
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>


<script type="module">

    $('.nav-item').hover(function () {
        let i = $(this).find(' > i')
        i.css({
            verticalAlign: '-6px',
            transition: "all 0.5s ease"
        })
        if ($(this).index() === 0) {
            $('div.dropdown-menu.position-absolute').fadeIn().hover(function () {
                $(this).css({
                    display: 'block'
                })
            }, function () {
                $(this).css({
                    display: 'none'
                })
            })
        }
    }, function () {
        let i = $(this).find(' > i')
        i.css({
            verticalAlign: '0',
            transition: "all 0.5s ease"
        })
        $('div.dropdown-menu.position-absolute').css({
            display: 'none'
        });

    })

    $('ul.menu-target li').hover(function () {
        let itemTarget = $(this).data('menu-target')

    })
    $('.swiper').hover(function () {
        $(this).find('.next-button,.prev-button').css({
            display: 'inline-flex'
        })

    }, function () {
        $(this).find('.next-button,.prev-button').css({
            display: 'none'
        })

    })
    var lastScrollTop = 0;
    $(window).scroll(function () {
        let st = $(window).scrollTop()
        if (st > lastScrollTop) {
            $('section.myNavbar nav').slideUp()
        } else if (st < lastScrollTop) {
            $('section.myNavbar nav').slideDown()
        }
        lastScrollTop = st


    })
    $('#show-more').click(function () {
        $('.siteDescription p').toggleClass('show')
        if ($('.siteDescription p').hasClass('show')){
            $('#show-more').text('نمایش کمتر >')
        }else {
            $('#show-more').text('نمایش بیشتر >')

        }
    })


    var photoContainer = document.querySelector('.user-image');

    photoContainer.addEventListener('click', function () {
        document.querySelector('.story svg').classList.add('loading-effect');

        setTimeout(function () {
            document.querySelector('.story svg').classList.remove('loading-effect');
        }, 7500); // Change the duration to match the length of your animation
    });

</script>
<script>
    $(document).ready(function () {
        $(function() {
            $('.lazyload').lazy({
                scrollDirection: 'vertical',
                effect: 'fadeIn',
                visibleOnly: true,
                onError: function(element) {
                    console.log('error loading ' + element.data('src'));
                }
            });
        });
    });


</script>

</body>
</html>
