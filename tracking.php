<?php
    require_once ("system/DatabaseConnector.php");
    $title = "Track Shipment";
    include ("system/inc/head.php");
    include ("system/inc/nav.php");
?>

    <!-- =======================
    Main Banner START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h1 class="fs-2 mb-2">Track Your Shipment</h1>
                    <p class="mb-0">Real-time tracking for your cargo</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Tracking Form START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card shadow p-4">
                        <div class="card-body">
                            <h3 class="mb-4">Enter Your Tracking Number</h3>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Enter tracking number" aria-label="Tracking number">
                                            <button class="btn btn-lg btn-primary" type="submit">Track</button>
                                        </div>
                                        <div class="form-text">Example: BBT1234567890</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Tracking Form END -->

    <!-- =======================
    Tracking Info START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- This section would be shown after form submission with valid tracking number -->
                    <div class="tracking-result d-none">
                        <!-- Shipment Details -->
                        <div class="card shadow mb-4">
                            <div class="card-header border-bottom">
                                <h5 class="mb-0">Shipment Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-2"><strong>Tracking Number:</strong> <span id="tracking-number">BBT1234567890</span></p>
                                        <p class="mb-2"><strong>Service Type:</strong> <span id="service-type">Full Truckload</span></p>
                                        <p class="mb-2"><strong>Estimated Delivery:</strong> <span id="estimated-delivery">June 15, 2023</span></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2"><strong>Origin:</strong> <span id="origin">Chicago, IL</span></p>
                                        <p class="mb-2"><strong>Destination:</strong> <span id="destination">Dallas, TX</span></p>
                                        <p class="mb-2"><strong>Status:</strong> <span class="badge bg-success" id="status">In Transit</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tracking Timeline -->
                        <div class="card shadow">
                            <div class="card-header border-bottom">
                                <h5 class="mb-0">Tracking Timeline</h5>
                            </div>
                            <div class="card-body">
                                <div class="timeline">
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <i class="bi bi-check-circle-fill text-white"></i>
                                        </div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">Shipment Picked Up</h6>
                                            <p class="mb-0">Chicago, IL - June 12, 2023, 09:15 AM</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <i class="bi bi-check-circle-fill text-white"></i>
                                        </div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">Departed Origin Facility</h6>
                                            <p class="mb-0">Chicago, IL - June 12, 2023, 11:30 AM</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <i class="bi bi-check-circle-fill text-white"></i>
                                        </div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">In Transit</h6>
                                            <p class="mb-0">St. Louis, MO - June 13, 2023, 02:45 PM</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="timeline-icon bg-primary">
                                            <i class="bi bi-truck text-white"></i>
                                        </div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">In Transit</h6>
                                            <p class="mb-0">Oklahoma City, OK - June 14, 2023, 10:20 AM</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="timeline-icon bg-light">
                                            <i class="bi bi-circle text-primary"></i>
                                        </div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">Arriving at Destination</h6>
                                            <p class="mb-0">Estimated: Dallas, TX - June 15, 2023</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="timeline-icon bg-light">
                                            <i class="bi bi-circle text-primary"></i>
                                        </div>
                                        <div class="timeline-content">
                                            <h6 class="mb-1">Delivered</h6>
                                            <p class="mb-0">Estimated: Dallas, TX - June 15, 2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- No Results Message -->
                    <div class="no-results text-center py-5">
                        <div class="mb-4">
                            <i class="bi bi-search display-1 text-primary"></i>
                        </div>
                        <h3>Enter your tracking number above</h3>
                        <p class="mb-0">Your tracking number can be found on your shipping confirmation email or Bill of Lading.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Tracking Info END -->

    <!-- =======================
    Faqs START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="vstack gap-4">
                        <!-- Card item START -->
                        <div class="card border bg-transparent p-0">
                            <!-- Card header -->
                            <div class="card-header bg-transparent border-bottom p-4">
                                <h5 class="mb-0">Tracking FAQs</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-4 pt-0">
                                <!-- Faq item -->
                                <div class="mt-4">
                                    <h6 class="fw-normal">Where can I find my tracking number?</h6>
                                    <p class="mb-0">Your tracking number is provided in your shipping confirmation email and on your Bill of Lading. It typically starts with "BBT" followed by 10 digits.</p>
                                </div>

                                <!-- Faq item -->
                                <div class="mt-4">
                                    <h6 class="fw-normal">How often is tracking information updated?</h6>
                                    <p class="mb-0">Tracking information is updated in real-time as your shipment progresses through our transportation network. Major updates occur at pickup, during transit at key checkpoints, and upon delivery.</p>
                                </div>

                                <!-- Faq item -->
                                <div class="mt-4">
                                    <h6 class="fw-normal">How can I get help with an existing reservation?</h6>
                                    <p class="mb-0">Departure defective arranging rapturous did believe him all had supported. Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how. Suspicion neglected the resolving agreement perceived at an. Comfort reached gay perhaps chamber his six detract besides add.</p>
                                </div>

                                <!-- Faq item -->
                                <div class="mt-4">
                                    <h6 class="fw-normal">You can change your booking at any time</h6>
                                    <p class="mb-0">If your tracking information hasn't updated in 24 hours, please contact our customer service team. There might be a delay in scanning or a technical issue that needs to be addressed.</p>
                                </div>	
                            </div>
                        </div>
                        <!-- Card item END -->
                    </div>
                </div>
            </div>
        </div>
    </section>



                        
                        <!-- Item 3 -->
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tracking-faq-3">
                                    What if my tracking information isn't updating?
                                </button>
                            </h2>
                            <div id="tracking-faq-3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    
    <!-- =======================
    FAQ END -->

<?php
    include ("system/inc/footer.php");
?>