<?php
    require_once ("system/DatabaseConnector.php");
    $title = "Contact Us";
    include ("system/inc/head.php");
    include ("system/inc/nav.php");
?>

    <!-- =======================
    Main Banner START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h1 class="fs-2 mb-2">Contact Banse Brothers Transport</h1>
                    <p class="mb-0">We're here to help with your transportation needs</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Contact Form START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Contact information -->
                <div class="col-lg-5">
                    <h2 class="mb-4">Get in Touch</h2>
                    <p class="mb-4">Have questions about our services or need a quote? Our team is ready to assist you with all your transportation needs.</p>
                    
                    <!-- Contact info -->
                    <div class="mb-4">
                        <h5>Contact Information</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3"><i class="bi bi-geo-alt me-2"></i>123 Transport Avenue, Logistics City, ST 12345</li>
                            <li class="mb-3"><i class="bi bi-telephone me-2"></i><a href="tel:+1234567890">+123 456 7890</a></li>
                            <li class="mb-3"><i class="bi bi-envelope me-2"></i><a href="mailto:info@bansebrotherstransport.com">info@bansebrotherstransport.com</a></li>
                            <li><i class="bi bi-clock me-2"></i>Monday - Friday: 8:00 AM - 6:00 PM</li>
                        </ul>
                    </div>
                    
                    <!-- Social links -->
                    <div class="mb-4">
                        <h5>Connect With Us</h5>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Contact form -->
                <div class="col-lg-7">
                    <div class="card bg-light p-4">
                        <!-- Card header -->
                        <div class="card-header bg-light p-0 pb-3">
                            <h3 class="mb-0">Send us message</h3>
                        </div>
                        <form>
                            <div class="row g-3">
                                <!-- Name -->
                                <div class="col-md-6">
                                    <label class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" placeholder="Your name" required>
                                </div>
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label class="form-label">Email *</label>
                                    <input type="email" class="form-control" placeholder="Your email" required>
                                </div>
                                <!-- Phone -->
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Your phone">
                                </div>
                                <!-- Subject -->
                                <div class="col-md-6">
                                    <label class="form-label">Subject *</label>
                                    <input type="text" class="form-control" placeholder="Subject" required>
                                </div>
                                <!-- Message -->
                                <div class="col-12">
                                    <label class="form-label">Message *</label>
                                    <textarea class="form-control" rows="4" placeholder="Your message" required></textarea>
                                </div>
                                <!-- Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Contact Form END -->

    <!-- =======================
    Map START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ratio ratio-21x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sus!4v1586000412513!5m2!1sen!2sus" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Map END -->

<?php
    include ("system/inc/footer.php");
?>