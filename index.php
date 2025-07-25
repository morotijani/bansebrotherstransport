<?php
    require_once ("system/DatabaseConnector.php");
    $title = "Welcome";
    include ("system/inc/head.php");
    include ("system/inc/nav.php");
?>

<!-- =======================
Main Banner START -->
<section class="pt-0 pt-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 ms-auto position-relative">
                <img src="assets/media/hero-truck.jpg" class="rounded-3" alt="Transport truck on highway">

                <!-- Search START -->
                <div class="col-11 col-sm-10 col-lg-8 col-xl-6 position-lg-middle ms-lg-8 ms-xl-7">
                    <div class="card shadow pb-0 mt-n7 mt-sm-n8 mt-lg-0">

                        <!-- Card header -->
                        <div class="card-header border-bottom p-3 p-sm-4">
                            <h5 class="card-title mb-0">Request a Freight Quote</h5>
                        </div>

                        <!-- Card body START -->
                        <form class="card-body form-control-border p-3 p-sm-4" method="post" action="process_quote.php">
                            <!-- Tabs START -->
                            <div class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <div class="form-check form-check-inline active" id="freight-one-way-tab" data-bs-toggle="pill" data-bs-target="#freight-one-way" role="tab" aria-controls="freight-one-way" aria-selected="true">
                                    <input class="form-check-input" type="radio" name="tripType" id="freightRadio1" value="one-way" checked>
                                    <label class="form-check-label" for="freightRadio1">One Way</label>
                                </div>
                                <div class="form-check form-check-inline" id="freight-round-way-tab" data-bs-toggle="pill" data-bs-target="#freight-round-way" role="tab" aria-controls="freight-round-way" aria-selected="false">
                                    <input class="form-check-input" type="radio" name="tripType" id="freightRadio2" value="round-trip">
                                    <label class="form-check-label" for="freightRadio2">Round Trip</label>
                                </div>
                            </div>
                            <!-- Tabs END -->

                            <!-- Tabs content START -->
                            <div class="tab-content my-4" id="pills-tabContent">
                                <!-- One way START -->
                                <div class="tab-pane fade show active" id="freight-one-way" role="tabpanel" aria-labelledby="freight-one-way-tab">
                                    <div class="row g-2 g-md-4">
                                        <!-- Pickup -->
                                        <div class="col-md-6 position-relative">
                                            <div class="form-fs-lg form-control-transparent">
                                                <label class="form-label small">Pickup Location</label>
                                                <select class="form-select js-choice" name="pickup" data-search-enabled="true" required>
                                                    <option value="">Select location</option>
                                                    <option>New York</option>
                                                    <option>Chicago</option>
                                                    <option>Los Angeles</option>
                                                    <option>Miami</option>
                                                    <option>Dallas</option>
                                                </select>
                                            </div>

                                            <!-- Auto fill button -->
                                            <div class="btn-flip-icon z-index-9 mt-2 mt-md-1">
                                                <button type="button" class="btn btn-dark shadow btn-round mb-0"><i class="fa-solid fa-right-left"></i></button>
                                            </div>
                                        </div>

                                        <!-- Drop -->
                                        <div class="col-md-6 text-md-end">
                                            <div class="form-fs-lg form-control-transparent">
                                                <label class="form-label small ms-3 ms-md-0 me-md-3">Delivery Location</label>
                                                <select class="form-select js-choice" name="delivery" data-search-enabled="true" required>
                                                    <option value="">Select Location</option>
                                                    <option>New York</option>
                                                    <option>Chicago</option>
                                                    <option>Los Angeles</option>
                                                    <option>Miami</option>
                                                    <option>Dallas</option>
                                                </select>
                                            </div>	
                                        </div>

                                        <!-- Date -->
                                        <div class="col-md-6">
                                            <div class="form-fs-lg form-control-transparent">
                                                <label class="form-label small">Pickup Date</label>
                                                <input type="text" name="pickupDate" class="form-control flatpickr" placeholder="Select date" required>
                                            </div>
                                        </div>

                                        <!-- Service Type -->
                                        <div class="col-md-6 text-md-end">
                                            <div class="form-fs-lg form-control-transparent">
                                                <label class="form-label small ms-3 ms-md-0 me-md-3">Service Type</label>
                                                <select class="form-select" name="serviceType" required>
                                                    <option value="">Select Service</option>
                                                    <option value="FTL">Full Truckload (FTL)</option>
                                                    <option value="LTL">Less Than Truckload (LTL)</option>
                                                    <option value="Temperature-Controlled">Temperature-Controlled</option>
                                                    <option value="Specialized">Specialized Transport</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Button -->
                                    <div class="text-center pt-4">
                                        <button type="submit" class="btn btn-primary mb-0">Get Quote</button>
                                    </div>
                                </div>
                                <!-- One way END -->

                                <!-- Round trip START -->
                                <div class="tab-pane fade" id="freight-round-way" role="tabpanel" aria-labelledby="freight-round-way-tab">
                                    <!-- Similar form fields as one-way with return date added -->
                                    <div class="row g-2 g-md-4">
                                        <!-- Pickup -->
                                        <div class="col-md-6 position-relative">
                                            <div class="form-fs-lg form-control-transparent">
                                                <label class="form-label small">Pickup Location</label>
                                                <select class="form-select js-choice" name="pickup_round" data-search-enabled="true">
                                                    <option value="">Select location</option>
                                                    <option>New York</option>
                                                    <option>Chicago</option>
                                                    <option>Los Angeles</option>
                                                    <option>Miami</option>
                                                    <option>Dallas</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Drop -->
                                        <div class="col-md-6 text-md-end">
                                            <div class="form-fs-lg form-control-transparent">
                                                <label class="form-label small ms-3 ms-md-0 me-md-3">Delivery Location</label>
                                                <select class="form-select js-choice" name="delivery_round" data-search-enabled="true">
                                                    <option value="">Select Location</option>
                                                    <option>New York</option>
                                                    <option>Chicago</option>
                                                    <option>Los Angeles</option>
                                                    <option>Miami</option>
                                                    <option>Dallas</option>
                                                </select>
                                            </div>	
                                        </div>

                                        <!-- Pickup Date -->
                                        <div class="col-md-6">
                                            <div class="form-fs-lg form-control-transparent">
                                                <label class="form-label small">Pickup Date</label>
                                                <input type="text" name="pickupDate_round" class="form-control flatpickr" placeholder="Select date">
                                            </div>
                                        </div>

                                        <!-- Return Date -->
                                        <div class="col-md-6">
                                            <div class="form-fs-lg form-control-transparent">
                                                <label class="form-label small">Return Date</label>
                                                <input type="text" name="returnDate" class="form-control flatpickr" placeholder="Select date">
                                            </div>
                                        </div>
                                        
                                        <!-- Service Type -->
                                        <div class="col-md-6 text-md-end">
                                            <div class="form-fs-lg form-control-transparent">
                                                <label class="form-label small ms-3 ms-md-0 me-md-3">Service Type</label>
                                                <select class="form-select" name="serviceType_round">
                                                    <option value="">Select Service</option>
                                                    <option value="FTL">Full Truckload (FTL)</option>
                                                    <option value="LTL">Less Than Truckload (LTL)</option>
                                                    <option value="Temperature-Controlled">Temperature-Controlled</option>
                                                    <option value="Specialized">Specialized Transport</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Button -->
                                    <div class="text-center pt-4">
                                        <button type="submit" class="btn btn-primary mb-0">Get Quote</button>
                                    </div>
                                </div>
                                <!-- Round trip END -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Main Banner END -->

<!-- =======================
Services START -->
<section class="pt-0 pt-md-5">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="fs-1">Comprehensive Trucking & Freight Solutions</h2>
            </div>
        </div>

        <!-- Services START -->
        <div class="row g-4">
            <!-- Service item -->
            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <h4>Full Truckload (FTL)</h4>
                        <p>Dedicated trucks for your shipments, offering maximum security and efficiency for large volume freight.</p>
                        <a href="services.php?type=ftl" class="btn btn-sm btn-primary-soft mb-0">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Service item -->
            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <h4>Less Than Truckload (LTL)</h4>
                        <p>Cost-effective solutions for smaller shipments, sharing truck space with other freight to optimize costs.</p>
                        <a href="services.php?type=ltl" class="btn btn-sm btn-primary-soft mb-0">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Service item -->
            <div class="col-md-4">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <h4>Temperature-Controlled</h4>
                        <p>Specialized refrigerated transport for temperature-sensitive goods, maintaining product integrity.</p>
                        <a href="services.php?type=temperature" class="btn btn-sm btn-primary-soft mb-0">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Services END -->

<!-- =======================
Excellence START -->
<section class="pt-0 pt-md-5">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="fs-1">Delivering Excellence in Every Mile</h2>
                <p class="mb-0">Fast, reliable, and cost-effective logistics solutions tailored to your business needs. Our experienced team ensures your cargo arrives safely and on time.</p>
            </div>
        </div>

        <!-- Features -->
        <div class="row g-4">
            <!-- Feature item -->
            <div class="col-md-4">
                <div class="card bg-light h-100">
                    <div class="card-body p-4">
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-3"><i class="bi bi-truck"></i></div>
                        <h5>Modern Fleet</h5>
                        <p class="mb-0">Our well-maintained trucks and trailers ensure reliable and efficient transport of your goods.</p>
                    </div>
                </div>
            </div>

            <!-- Feature item -->
            <div class="col-md-4">
                <div class="card bg-light h-100">
                    <div class="card-body p-4">
                        <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mb-3"><i class="bi bi-geo-alt"></i></div>
                        <h5>Real-Time Tracking</h5>
                        <p class="mb-0">Monitor your shipments in real-time with our advanced tracking technology.</p>
                    </div>
                </div>
            </div>

            <!-- Feature item -->
            <div class="col-md-4">
                <div class="card bg-light h-100">
                    <div class="card-body p-4">
                        <div class="icon-lg bg-warning bg-opacity-10 text-warning rounded-circle mb-3"><i class="bi bi-shield-check"></i></div>
                        <h5>Cargo Safety</h5>
                        <p class="mb-0">Your goods are secured with proper equipment and handling procedures throughout transit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Excellence END -->

<!-- =======================
Process START -->
<section class="pt-0 pt-md-5">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fs-1">How We Move Your Goods, Step by Step</h2>
            </div>
        </div>

        <!-- Steps -->
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row g-4">
                    <!-- Step 1 -->
                    <div class="col-md-4">
                        <div class="card border-0 text-center h-100">
                            <div class="card-body">
                                <div class="icon-lg bg-primary rounded-circle text-white mb-3">1</div>
                                <h5>Request a Quote</h5>
                                <p class="mb-0">Fill out our simple form with your shipping details to receive a competitive quote.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-md-4">
                        <div class="card border-0 text-center h-100">
                            <div class="card-body">
                                <div class="icon-lg bg-primary rounded-circle text-white mb-3">2</div>
                                <h5>Schedule Pickup</h5>
                                <p class="mb-0">Once you approve the quote, we'll arrange for pickup at your preferred time and location.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-md-4">
                        <div class="card border-0 text-center h-100">
                            <div class="card-body">
                                <div class="icon-lg bg-primary rounded-circle text-white mb-3">3</div>
                                <h5>Track & Deliver</h5>
                                <p class="mb-0">Monitor your shipment in transit and receive confirmation upon successful delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Process END -->

<!-- =======================
Global Reach START -->
<section class="pt-0 pt-md-5">
    <div class="container">
        <div class="row">
            <!-- Left side -->
            <div class="col-lg-6 position-relative">
                <h2 class="fs-1">Global Reach, Unmatched Reliability</h2>
                <p>Our extensive network allows us to deliver your goods anywhere in the country with precision and care. We pride ourselves on maintaining the highest standards of service quality and customer satisfaction.</p>
                
                <div class="row mt-4 g-4">
                    <!-- Stat item -->
                    <div class="col-sm-6">
                        <div class="d-flex">
                            <span class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle"><i class="bi bi-truck"></i></span>
                            <div class="ms-3">
                                <h5 class="mb-0">500+</h5>
                                <p class="mb-0">Vehicles in Fleet</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Stat item -->
                    <div class="col-sm-6">
                        <div class="d-flex">
                            <span class="icon-lg bg-success bg-opacity-10 text-success rounded-circle"><i class="bi bi-geo-alt"></i></span>
                            <div class="ms-3">
                                <h5 class="mb-0">48</h5>
                                <p class="mb-0">States Covered</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Stat item -->
                    <div class="col-sm-6">
                        <div class="d-flex">
                            <span class="icon-lg bg-warning bg-opacity-10 text-warning rounded-circle"><i class="bi bi-people"></i></span>
                            <div class="ms-3">
                                <h5 class="mb-0">1000+</h5>
                                <p class="mb-0">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Stat item -->
                    <div class="col-sm-6">
                        <div class="d-flex">
                            <span class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle"><i class="bi bi-clock-history"></i></span>
                            <div class="ms-3">
                                <h5 class="mb-0">15+</h5>
                                <p class="mb-0">Years Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Map or image -->
            <div class="col-lg-6 mt-5 mt-lg-0">
                <img src="assets/media/usa-map.jpg" class="rounded-3" alt="USA coverage map">
            </div>
        </div>
    </div>
</section>
<!-- =======================
Global Reach END -->

<!-- =======================
Testimonials START -->
<section class="pt-0 pt-md-5">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fs-1">What Our Customers Say</h2>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="row g-4">
            <!-- Testimonial item -->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <!-- Stars -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>
                        <p class="mb-3">"Their temperature-controlled transport service saved our perishable goods during a cross-country delivery. Excellent service and communication throughout."</p>
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm">
                                <img class="avatar-img rounded-circle" src="assets/media/team/01.jpg" alt="Customer">
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-0">Carolyn Ortiz</h6>
                                <p class="mb-0 small">Food Distribution Inc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial item -->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <!-- Stars -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>
                        <p class="mb-3">"We've been using their LTL services for our retail business for over 3 years. Always on time and professional. Highly recommended!"</p>
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm">
                                <img class="avatar-img rounded-circle" src="assets/media/team/02.jpg" alt="Customer">
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-0">James Wilson</h6>
                                <p class="mb-0 small">Retail Solutions Co.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial item -->
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <!-- Stars -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                            </ul>
                        </div>
                        <p class="mb-3">"Their full truckload service provided the security and efficiency we needed for our high-value manufacturing equipment. Great job!"</p>
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm">
                                <img class="avatar-img rounded-circle" src="assets/media/team/03.jpg" alt="Customer">
                            </div>
                            <div class="ms-2">
                                <h6 class="mb-0">Dennis Barrett</h6>
                                <p class="mb-0 small">Manufacturing Tech Ltd.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Testimonials END -->

<?php include ("system/inc/footer.php"); ?>