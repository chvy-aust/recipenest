<x-mylayouts.layout-prototype :showSidebar="false" :col="12">


    <section class="profile">
        {{-- Source: https://bootstrapbrain.com/component/bootstrap-about-us-section-snippet-example/ --}}


        <!-- About 2 - Bootstrap Brain Component -->
        <section class="py-3 py-md-5">
            <div class="container">
                <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                    <div class="col-12 col-lg-6">
                        <img class="img-fluid rounded" loading="lazy"
                            src="{{ asset('storage/images/profiles/harps-joseph-tAvpDE7fXgY-unsplash.jpg') }}"
                            alt="About 2">
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row justify-content-xl-center">
                            <div class="col-12 col-xl-10">
                                <h2 class="mb-3">John Doe</h2>
                                <p class="lead fs-4 mb-3 mb-xl-5">With years of experience and deep industry knowledge,
                                    we have a proven track record of success and are constantly pushing ourselves to
                                    stay ahead of the curve.</p>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="fs-5 m-0">Our evolution procedure is super intelligent.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="fs-5 m-0">We deliver services beyond expectations.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-4 mb-xl-5">
                                    <div class="me-3 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="fs-5 m-0">Let's hire us to reach your objectives.</p>
                                    </div>
                                </div>
                                <button type="button" class="btn bsb-btn-xl btn-outline-primary rounded-pill">Connect
                                    Now</button>
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