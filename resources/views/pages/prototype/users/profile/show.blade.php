<x-mylayouts.layout-prototype :showSidebar="false" :col="12">


    <section class="profile">
        {{-- Source: https://bootstrapbrain.com/component/bootstrap-about-us-section-snippet-example/ --}}


        <!-- About 2 - Bootstrap Brain Component -->
        <section class="py-2">
            <div class="container">
                <div class="section-title-container d-flex align-items-center justify-content-between">
                    <div class="breadcrumb-section">
                        <a href="#" class="previous">home / chefs / </a>
                        <a href="#" class="previous" style="font-weight:bold;">Luigi D' Agostino</a>
                    </div>
                </div>
                <div class="row gy-3 gy-md-4 gy-lg-0">
                    <div class="col-12 col-lg-6">
                        <hr style="margin:10px 0px;">
                        <img class="profile-picture ratio ratio-4x3" loading="lazy"
                            src="{{ asset('storage/images/profiles/luigi-agostino-chef.jpg') }}"
                            alt="About 2">
                        <hr style="margin:10px 0px 0px 0px;">

                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row justify-content-xl-center">
                            <div class="col-12 col-xl-10 profile-left">
                                <div class="d-flex align-items-center profile-name">
                                    <i class="bi bi-person-bounding-box"></i>
                                    <h2> Luigi D'Agostino</h2>
                                </div>

                                <hr style="margin:10px 0px;">
                                <div class="profile badge-bar">
                                    <span><i class="bi bi-bookmark-star-fill"></i></span>
                                    <span class="badge red">italian connoisseur</span>
                                    <span class="badge green">vegetarian 🥦</span>
                                </div>
                                <hr style="margin:0px;">
                                <div class="d-flex mb-2 mb-xl-2 profile-bio"><p>Born in the hearts of Parm with a decade of culinary experience, Luigi's portfolio is both fresh, healthy and delicious.
                                From his cherished Melanzane a Funghetto, to his Verdye Gratinate Al Forno, Luigi has served it all! Well, everything except meat, that is.</p></div>
                                <hr style="margin:10px 0px;">
                                <div class="d-flex align-items-center profile-contact-info">
                                    <i class="bi bi-envelope-at-fill"></i>
                                    <i class="bi bi-telephone-fill"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-instagram"></i>
                                    <i class="bi bi-twitter"></i>
                                    <i class="bi bi-tiktok"></i>
                                </div>
                                <hr style="margin:10px 0px;">
                                <div class="view-portfolio-btn">
                                    <i class="bi bi-caret-down-fill"></i>
                                    <h2>View Portfolio</h2>
                                    <i class="bi bi-caret-down-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>




    <style>
        .profile-social-media {
            width: 80%;
            margin: auto;
        }
    </style>
    <section class="profile-social-media my-5">

        {{-- Source: https://www.aakashweb.com/apps/social-buttons-generator/ --}}
        {{-- For example only: https://www.onceuponachef.com/recipes/roasted-carrots-with-thyme.html --}}

        <h2 class="text-center">Social Media</h2>
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/gh/vaakash/socializer@f794acd/css/socializer.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.2/css/all.css">

        <div class="socializer" data-features="32px,circle,float,fluid,icon-white,pad"
            data-meta-link="https://www.onceuponachef.com/recipes/roasted-carrots-with-thyme.html"
            data-meta-title="Sample" data-sites="facebook,instagram,x,youtube,tiktok" data-text="in"></div>



        <script src="https://cdn.jsdelivr.net/gh/vaakash/socializer@f794acd/js/socializer.min.js"></script>
        <script>
            (function(){
    socializer( '.socializer' );
}());
        </script>
    </section>



    <section class="profile-contact">


        {{-- Source: https://startbootstrap.com/snippets/bootstrap-5-contact-form --}}

        <!-- Bootstrap 5 Contact Form Snippet -->

        <div class="">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card border-0 rounded-3">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="h1 fw-light">Contact Form</div>
                                <p class="mb-4 text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Expedita velit excepturi quibusdam et illo maiores sequi libero at consequuntur
                                    totam!</p>
                            </div>



                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                                <!-- Name Input -->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Name"
                                        data-sb-validations="required" />
                                    <label for="name">Name</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.
                                    </div>
                                </div>

                                <!-- Email Input -->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="emailAddress" type="email"
                                        placeholder="Email Address" data-sb-validations="required,email" />
                                    <label for="emailAddress">Email Address</label>
                                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address
                                        is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address
                                        Email is not valid.</div>
                                </div>

                                <!-- Message Input -->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" type="text" placeholder="Message"
                                        style="height: 10rem;" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Message is
                                        required.</div>
                                </div>

                                <!-- Submit success message -->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a
                                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>

                                <!-- Submit error message -->
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>

                                <!-- Submit button -->
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg disabled" id="submitButton"
                                        type="submit">Submit</button>
                                </div>
                            </form>
                            <!-- End of contact form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CDN Link to SB Forms Scripts -->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </section>


</x-mylayouts.layout-prototype>
