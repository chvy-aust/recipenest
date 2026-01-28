@if ($collection->isEmpty())


@else




<style>
    /*
    Style the entire div
    position: relative is necessary to position controls
    margin will put some space between this and other elements
    */
    .full-slider {
        position: relative;
        background-color: white;
        margin: 80px 0px;
    }

    /*
    Style the heading area and ALL elements withing
    padding: ypx xpx; y=top and bottom; x=left and right
    */
    .slider-heading {
        position: relative;
        padding: 0px 0px;
        color: purple;
    }

    /*
    Style heading; can change p to h1, h2, i etc
    font-size examples: 1rem which might be 16px, or any decimal, 3.1rem
    */
    .slider-heading p {
        font-size: 3rem;
    }



    /* ========================START SLIDER CONTROLS========================*/



    /* Remove dot from ul li */
    ul.slider-controls {
        list-style: none;
    }


    /*
    Position the slider controls
    Top: 0% means position to the very top
    Left/right: 0% means position to the left/right
    */

    ul.slider-controls li {
        position: absolute;
        z-index: 1;
        top: 40%;
    }

    .left {
        right: 10%;
    }

    .right {
        right: 5%;
    }

    /* resize controls */
    .left i,
    .right i {
        font-size: 1.5rem;
    }

    /* ========================END SLIDER CONTROLS======================== */


    /* Custom nav */

    .tns-nav {
        text-align: center;
        margin: 20px;
    }

    /* Customize the dots/slider markers
    nav: true; must be within the script
    */
    .tns-nav button {
        background: #343a40;
        border: none;
        height: 13px;
        width: 4px;
        border-radius: 50%;
        margin-left: 9px;
    }


    /* Style image size */


    .slider-img {
        width: 100%;
        /* Make the container responsive */
        height: 400px;
        /* Fixed height for consistency */
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slider-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
{{-- FontAwesome --}}
{{--
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

{{-- FontAwesome 6.7.1 --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
<!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script><![endif]-->



<div class="full-slider">
    <div class="slider-heading">
        <p>{{ $title }}</p>
        <ul class=" slider-controls" id="{{ $id }}-controls">
            <li class="left"><i class="fas fa-chevron-left"></i> </li>
            <li class="right"><i class="fas fa-chevron-right"></i> </li>
        </ul>
    </div>
    <hr>



    <div class="container">
        <div class="my-slider" id="{{ $id }}">

            @foreach ($collection as $data)

            <div>
                <div class="slider-img"><img class="img-fluid" src="{{ $data->getImage() }}" alt="">
                </div>

                <div class="slider-item-details">
                    <div class="slider-item-title">
                        <p>
                            <b>{{ $data->title }}</b>
                        </p>
                    </div>

                    <div class="slider-product-price text-center">
                        <a class="btn btn-primary" href="#">Read More</a>
                    </div>

                </div>

            </div>
            @endforeach


        </div>
        <!-- or ul.my-slider > li -->

    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->

<script type="module">
    $(document).ready(function() {

        var slider = tns({
            container: '#{{ $id }}',
            items: {{ $items }},
            slideBy: 'page',
            autoplay: true,
            mouseDrag: true,
            gutter: 10,
            autoplayButtonOutput: false,
            navPosition: 'bottom',
            controlsContainer: '#{{ $id }}-controls',
            nav: false,
            speed: 3500,
            responsive: {
                640: {
                    items: 1  // 1 item on screens less than 640px
                },
                768: {
                    items: {{ $responsiveItems }}  // 2 or 1 items on screens between 640px and 768px
                },
                1024: {
                    items: {{ $responsiveItems }}  // 2 or 1 items on screens between 768px and 1024px
                },
                1200: {
                    items: {{ $items }}  // 4 or 1 items on screens larger than 1200px
                }
            }
        });
    });
</script>

@endif
