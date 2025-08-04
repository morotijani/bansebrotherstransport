<?php
    require_once ("system/DatabaseConnector.php");
    $title = "About Us";
    include ("system/inc/head.php");
    include ("system/inc/nav.php");
?>

    <!-- =======================
    Main Banner START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h1 class="fs-2 mb-2">About Banse Brothers Transport</h1>
                    <p class="mb-0">Fast & Sustainable Road Freight Solutions</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    About Section START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Image -->
                <div class="col-lg-6">
                    <img src="<?= PROOT; ?>assets/media/trucks/truck-1.jpg" class="rounded-3" alt="">
                </div>
                
                <!-- Content -->
                <div class="col-lg-6">
                    <h2 class="mb-4">Delivering Excellence in Every Mile</h2>
                    <p class="mb-3">Banse Brothers Transport is a leading provider of comprehensive trucking and freight solutions. With decades of experience in the transportation industry, we've built a reputation for reliability, efficiency, and exceptional service.</p>
                    <p class="mb-3">Our mission is to provide fast, sustainable, and cost-effective transport solutions that meet the evolving needs of businesses across the country. We combine cutting-edge technology with experienced professionals to ensure your cargo reaches its destination safely and on time.</p>
                    <p class="mb-4">What sets us apart is our commitment to sustainability, our dedicated team of professionals, and our state-of-the-art fleet that can handle any type of cargo.</p>
                    
                    <!-- Features -->
                    <div class="row g-4">
                        <!-- Feature item -->
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle flex-shrink-0"><i class="bi bi-truck fs-5"></i></div>
                                <div class="ms-3">
                                    <h5>Modern Fleet</h5>
                                    <p class="mb-0">Our vehicles are regularly maintained and equipped with the latest technology.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Feature item -->
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle flex-shrink-0"><i class="bi bi-people fs-5"></i></div>
                                <div class="ms-3">
                                    <h5>Expert Team</h5>
                                    <p class="mb-0">Our drivers and logistics specialists are highly trained professionals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    About Section END -->

    <!-- =======================
    Services Section START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2>Our Transport Services</h2>
                    <p class="mb-0">Comprehensive Trucking & Freight Solutions</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Service item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4"><i class="bi bi-box-seam fs-5"></i></div>
                        <h5>Full Truckload (FTL)</h5>
                        <p class="mb-0">Dedicated transport solutions for large shipments that require an entire truck, ensuring faster delivery with no stops.</p>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4"><i class="bi bi-boxes fs-5"></i></div>
                        <h5>Less Than Truckload (LTL)</h5>
                        <p class="mb-0">Cost-effective shipping for smaller freight that doesn't require an entire trailer, sharing space with other shipments.</p>
                    </div>
                </div>

                <!-- Service item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-body shadow p-4 h-100">
                        <!-- Icon -->
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4"><i class="bi bi-thermometer-snow fs-5"></i></div>
                        <h5>Temperature-Controlled</h5>
                        <p class="mb-0">Specialized transport for temperature-sensitive goods, maintaining precise climate conditions throughout transit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Services Section END -->

    <!-- =======================
    Team Section START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2>Meet Our Team</h2>
                    <p class="mb-0">The Professionals Behind Our Success</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Team member -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body shadow p-4 text-center">
                        <div class="avatar avatar-xxl mx-auto mb-3">
                            <img class="avatar-img rounded-circle" src="<?= PROOT; ?>assets/media/team/alhaji-moro-banse.jpg" alt="">
                        </div>
                        <h5 class="mb-1">Alhaji Moro Banse</h5>
                        <p class="mb-0 small">CEO & Founder</p>
                    </div>
                </div>

                <!-- Team member -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body shadow p-4 text-center">
                        <div class="avatar avatar-xxl mx-auto mb-3">
                            <img class="avatar-img rounded-circle" src="<?= PROOT; ?>assets/media/team/alhaji-inusah-banse.jpg" alt="">
                        </div>
                        <h5 class="mb-1">Alhaji Inusah Banse</h5>
                        <p class="mb-0 small">Operations Director</p>
                    </div>
                </div>

                <!-- Team member -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body shadow p-4 text-center">
                        <div class="avatar avatar-xxl mx-auto mb-3">
                            <img class="avatar-img rounded-circle" src="assets/media/team/team-3.jpg" alt="">
                        </div>
                        <h5 class="mb-1">Arimiyao Banse</h5>
                        <p class="mb-0 small">Logistics Manager</p>
                    </div>
                </div>

                <!-- Team member -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body shadow p-4 text-center">
                        <div class="avatar avatar-xxl mx-auto mb-3">
                            <img class="avatar-img rounded-circle" src="assets/media/team/team-4.jpg" alt="">
                        </div>
                        <h5 class="mb-1">Alhaji Hudu Banse</h5>
                        <p class="mb-0 small">Fleet Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Team Section END -->

<!-- =======================
Testimonials START -->
<section class="pt-0 pt-lg-5">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2>What Our Customers Say</h2>
                <p class="mb-0">Testimonials from Satisfied Clients</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
                    <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false" data-items="3" data-items-lg="2" data-items-md="1">
                        
                        <!-- Testimonial item -->
                        <div class="card card-body shadow p-4 h-100 mb-4">
                            <div class="d-flex mb-3">
                                <div class="avatar avatar-lg me-3">
                                    <img class="avatar-img rounded-circle" src="assets/media/avatar/01.jpg" alt="">
                                </div>
                                <div>
                                    <h6 class="mb-0">John Smith</h6>
                                    <p class="mb-0 small">Manufacturing Company</p>
                                </div>
                            </div>
                            <p class="mb-0">"Banse Brothers Transport has been our logistics partner for over 5 years. Their reliability and professionalism have been crucial to our supply chain efficiency."</p>
                        </div>
                        
                        <!-- Testimonial item -->
                        <div class="card card-body shadow p-4 h-100 mb-4">
                            <div class="d-flex mb-3">
                                <div class="avatar avatar-lg me-3">
                                    <img class="avatar-img rounded-circle" src="assets/media/avatar/02.jpg" alt="">
                                </div>
                                <div>
                                    <h6 class="mb-0">Emily Rodriguez</h6>
                                    <p class="mb-0 small">Retail Distribution</p>
                                </div>
                            </div>
                            <p class="mb-0">"The temperature-controlled transport service has been a game-changer for our perishable goods. Consistent quality and on-time delivery every time."</p>
                        </div>
                        
                        <!-- Testimonial item -->
                        <div class="card card-body shadow p-4 h-100 mb-4">
                            <div class="d-flex mb-3">
                                <div class="avatar avatar-lg me-3">
                                    <img class="avatar-img rounded-circle" src="assets/media/avatar/03.jpg" alt="">
                                </div>
                                <div>
                                    <h6 class="mb-0">Robert Johnson</h6>
                                    <p class="mb-0 small">Construction Materials</p>
                                </div>
                            </div>
                            <p class="mb-0">"We've worked with many transport companies, but Banse Brothers stands out for their exceptional customer service and ability to handle our heavy loads safely."</p>
                        </div>
                        
                        <!-- Testimonial item -->
                        <div class="card card-body shadow p-4 h-100 mb-4">
                            <div class="d-flex mb-3">
                                <div class="avatar avatar-lg me-3">
                                    <img class="avatar-img rounded-circle" src="assets/media/avatar/04.jpg" alt="">
                                </div>
                                <div>
                                    <h6 class="mb-0">Lisa Wong</h6>
                                    <p class="mb-0 small">E-commerce Platform</p>
                                </div>
                            </div>
                            <p class="mb-0">"Their tracking system gives us real-time updates on all our shipments. This transparency has improved our customer satisfaction significantly."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Testimonials END -->

<!-- =======================
CTA START -->
<section class="pt-0 pt-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-primary bg-opacity-10 p-4 p-sm-5 rounded-3">
                    <div class="row g-4 position-relative">
                        <!-- Content -->
                        <div class="col-md-6 col-lg-8">
                            <h3>Ready to experience our premium transport services?</h3>
                            <p class="mb-3">Contact us today to discuss your freight and logistics needs. Our team is ready to provide you with a customized solution.</p>
                            <a href="contact.php" class="btn btn-primary mb-0">Contact Us</a>
                        </div>
                        
                        <!-- Image -->
                        <div class="col-md-6 col-lg-4 text-end">
                            <img src="assets/media/element/contact-call.svg" class="h-300px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
CTA END -->

<?php include ("system/inc/footer.php"); ?>