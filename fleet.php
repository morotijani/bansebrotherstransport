<?php
    require_once ("system/DatabaseConnector.php");
    $title = "Our Fleet";
    include ("system/inc/head.php");
    include ("system/inc/nav.php");
?>

    <!-- =======================
    Main Banner START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h1 class="fs-2 mb-2">Our Modern Fleet</h1>
                    <p class="mb-0">Reliable, efficient, and well-maintained vehicles for all your shipping needs</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Fleet Overview START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="mb-0">The Right Vehicle for Every Job</h2>
                    <p>Our diverse fleet of trucks and trailers is designed to handle any type of cargo with maximum efficiency and safety. All our vehicles are regularly maintained and equipped with the latest technology for tracking and security.</p>
                </div>
            </div>

            <!-- Fleet categories -->
            <div class="row g-4">
                <!-- Category 1 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="<?= PROOT; ?>assets/media/trucks/truck-4.jpg" class="card-img-top" alt="Semi Truck">
                        <div class="card-body">
                            <h5 class="card-title">Semi Trucks</h5>
                            <p class="card-text">Our standard semi trucks are perfect for long-haul shipments and full truckload services. Each truck is equipped with GPS tracking and advanced safety features.</p>
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>53' Dry Van Trailers</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Payload capacity up to 45,000 lbs</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Fuel-efficient engines</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="<?= PROOT; ?>assets/media/trucks/truck-5.jpg" class="card-img-top" alt="Refrigerated Truck">
                        <div class="card-body">
                            <h5 class="card-title">Refrigerated Trucks</h5>
                            <p class="card-text">Our temperature-controlled fleet ensures your perishable goods arrive in perfect condition. Advanced cooling systems maintain consistent temperatures throughout transit.</p>
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Temperature range from -20°F to 70°F</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Real-time temperature monitoring</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Multi-zone temperature control</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="<?= PROOT; ?>assets/media/trucks/truck-6.jpg" class="card-img-top" alt="Box Truck">
                        <div class="card-body">
                            <h5 class="card-title">Box Trucks</h5>
                            <p class="card-text">Ideal for local deliveries and smaller shipments, our box trucks provide flexible solutions for urban logistics and last-mile delivery needs.</p>
                            <ul class="list-unstyled mb-0">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Various sizes from 16' to 26'</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Liftgate options available</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>Perfect for urban deliveries</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Fleet Overview END -->

    <!-- =======================
    Fleet Features START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Fleet Features & Technology</h2>
                    <p>Our commitment to excellence extends to the technology and features in our fleet</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-3">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h5>GPS Tracking</h5>
                            <p class="mb-0">Real-time location tracking for all vehicles in our fleet, providing accurate ETAs and route optimization.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-3">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h5>Safety Systems</h5>
                            <p class="mb-0">Advanced safety features including collision avoidance, lane departure warnings, and electronic logging devices.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-lg bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-3">
                                <i class="bi bi-fuel-pump"></i>
                            </div>
                            <h5>Fuel Efficiency</h5>
                            <p class="mb-0">Eco-friendly engines and aerodynamic designs that reduce fuel consumption and environmental impact.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle mx-auto mb-3">
                                <i class="bi bi-tools"></i>
                            </div>
                            <h5>Regular Maintenance</h5>
                            <p class="mb-0">Comprehensive maintenance program ensuring all vehicles are in optimal condition for maximum reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Fleet Features END -->

    <!-- =======================
    CTA START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary bg-opacity-10 p-4 p-sm-5 rounded-3">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h3 class="mb-2">Ready to Ship with Our Fleet?</h3>
                                <p class="mb-lg-0">Contact us today to discuss your shipping needs and find the perfect vehicle solution for your cargo.</p>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <a href="<?= PROOT; ?>contact" class="btn btn-primary mb-0">Contact Us</a>
                                <a href="<?= PROOT; ?>quote" class="btn btn-outline-primary ms-2 mb-0">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    CTA END -->

<?php
    include ("system/inc/footer.php");
?>