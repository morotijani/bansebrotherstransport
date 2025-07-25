<?php
    require_once ("system/DatabaseConnector.php");
    $title = "Our Services";
    include ("system/inc/head.php");
    include ("system/inc/nav.php");
    
    // Get service type from URL if available
    $service_type = isset($_GET['type']) ? $_GET['type'] : '';
?>

<!-- =======================
Header START -->
<section class="py-5 py-lg-7 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="fs-2">Our Transport Services</h1>
                <p class="mb-0">Comprehensive freight solutions tailored to your business needs</p>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Header END -->

<!-- =======================
Services START -->
<section class="pt-5">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="fs-1">Comprehensive Trucking & Freight Solutions</h2>
                <p>We offer a wide range of transportation services designed to meet the diverse needs of our clients. From full truckload to specialized transport, our experienced team ensures your cargo arrives safely and on time.</p>
            </div>
        </div>

        <!-- Services START -->
        <div class="row g-4">
            <!-- Service item -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100 <?php echo ($service_type == 'ftl') ? 'bg-light' : ''; ?>">
                    <div class="card-body p-4">
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-3"><i class="bi bi-truck"></i></div>
                        <h4>Full Truckload (FTL)</h4>
                        <p>Dedicated trucks for your shipments, offering maximum security and efficiency for large volume freight.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Dedicated vehicle</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Direct delivery</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Faster transit times</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Reduced handling</li>
                        </ul>
                        <a href="quote.php?service=FTL" class="btn btn-sm btn-primary mb-0">Request Quote</a>
                    </div>
                </div>
            </div>

            <!-- Service item -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100 <?php echo ($service_type == 'ltl') ? 'bg-light' : ''; ?>">
                    <div class="card-body p-4">
                        <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mb-3"><i class="bi bi-box-seam"></i></div>
                        <h4>Less Than Truckload (LTL)</h4>
                        <p>Cost-effective solutions for smaller shipments, sharing truck space with other freight to optimize costs.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Cost-effective</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Flexible scheduling</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Ideal for smaller loads</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Nationwide coverage</li>
                        </ul>
                        <a href="quote.php?service=LTL" class="btn btn-sm btn-primary mb-0">Request Quote</a>
                    </div>
                </div>
            </div>

            <!-- Service item -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100 <?php echo ($service_type == 'temperature') ? 'bg-light' : ''; ?>">
                    <div class="card-body p-4">
                        <div class="icon-lg bg-warning bg-opacity-10 text-warning rounded-circle mb-3"><i class="bi bi-thermometer-half"></i></div>
                        <h4>Temperature-Controlled</h4>
                        <p>Specialized refrigerated transport for temperature-sensitive goods, maintaining product integrity.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Precise temperature control</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Real-time monitoring</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Perishable goods protection</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Compliance with regulations</li>
                        </ul>
                        <a href="quote.php?service=Temperature-Controlled" class="btn btn-sm btn-primary mb-0">Request Quote</a>
                    </div>
                </div>
            </div>

            <!-- Service item -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100 <?php echo ($service_type == 'specialized') ? 'bg-light' : ''; ?>">
                    <div class="card-body p-4">
                        <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mb-3"><i class="bi bi-gear"></i></div>
                        <h4>Specialized Transport</h4>
                        <p>Custom solutions for oversized, heavy, or unusual cargo requiring special handling and equipment.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Oversized load handling</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Special equipment</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Permit management</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Route planning</li>
                        </ul>
                        <a href="quote.php?service=Specialized" class="btn btn-sm btn-primary mb-0">Request Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Services END -->

<!-- =======================
Features START -->
<section class="pt-5">
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fs-1">Why Choose Our Transport Services</h2>
            </div>
        </div>

        <!-- Features -->
        <div class="row g-4">
            <!-- Feature item -->
            <div class="col-md-4">
                <div class="card bg-light h-100">
                    <div class="card-body p-4 text-center">
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-3"><i class="bi bi-shield-check"></i></div>
                        <h5>Safety First</h5>
                        <p class="mb-0">Our drivers are trained in safety protocols and our vehicles undergo regular maintenance checks to ensure your cargo arrives safely.</p>
                    </div>
                </div>
            </div>

            <!-- Feature item -->
            <div class="col-md-4">
                <div class="card bg-light h-100">
                    <div class="card-body p-4 text-center">
                        <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-3"><i class="bi bi-clock"></i></div>
                        <h5>On-Time Delivery</h5>
                        <p class="mb-0">We understand the importance of timely deliveries and strive to maintain punctuality with every shipment.</p>
                    </div>
                </div>
            </div>

            <!-- Feature item -->
            <div class="col-md-4">
                <div class="card bg-light h-100">
                    <div class="card-body p-4 text-center">
                        <div class="icon-lg bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-3"><i class="bi bi-graph-up"></i></div>
                        <h5>Cost Efficiency</h5>
                        <p class="mb-0">Our optimized routes and load planning help reduce transportation costs without compromising on service quality.</p>
                    </div>
                </div>
            </div>

            <!-- Feature item -->
            <div class="col-md-4">
                <div class="card bg-light h-100">
                    <div class="card-body p-4 text-center">
                        <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle mx-auto mb-3"><i class="bi bi-geo-alt"></i></div>
                        <h5>Nationwide Coverage</h5>
                        <p class="mb-0">Our extensive network allows us to provide transport services across all 48 contiguous states.</p>
                    </div>
                </div>
            </div>

            <!-- Feature item -->
            <div class="col-md-4">
                <div class="card bg-light h-100">
                    <div class="card-body p-4 text-center">
                        <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mx-auto mb-3"><i class="bi bi-people"></i></div>
                        <h5>Experienced Team</h5>
                        <p class="mb-0">Our professional drivers and logistics experts have years of experience in the transportation industry.</p>
                    </div>
                </div>
            </div>

            <!-- Feature item -->
            <div class="col-md-4">
                <div class="card bg-light h-100">
                    <div class="card-body p-4 text-center">
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-3"><i class="bi bi-headset"></i></div>
                        <h5>24/7 Support</h5>
                        <p class="mb-0">Our customer service team is available around the clock to address any concerns or provide shipment updates.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Features END -->

<!-- =======================
CTA START -->
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-primary bg-opacity-10 p-4 p-sm-5 rounded-3">
                    <div class="row g-4 position-relative">
                        <!-- Content -->
                        <div class="col-md-6">
                            <h3 class="mb-3">Ready to Ship with Us?</h3>
                            <p class="mb-3">Get in touch with our team to discuss your transportation needs and receive a customized quote.</p>
                            <a href="quote.php" class="btn btn-primary mb-0">Request a Quote</a>
                        </div>
                        
                        <!-- Image -->
                        <div class="col-md-6 text-center">
                            <img src="assets/media/truck-illustration.png" class="h-300px" alt="">
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