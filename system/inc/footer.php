    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
    Footer START -->
    <footer class="bg-dark pt-5">
        <div class="container">
            <!-- Row START -->
            <div class="row g-4">

                <!-- Widget 1 START -->
                <div class="col-lg-3">
                    <!-- logo -->
                    <a href="<?= PROOT; ?>index">
                        <img class="h-40px" src="<?= PROOT; ?>assets/media/logo/logo-nb.png" alt="logo">
                    </a>
                    <p class="my-3 text-body-secondary">Fast & Sustainable Road Freight Solutions for your business. Reliable, efficient, and eco-friendly transport services.</p>
                    <p class="mb-2"><a href="tel:+1234567890" class="text-body-secondary text-primary-hover"><i class="bi bi-telephone me-2"></i>+233 24 451 2130</a> </p>
                    <p class="mb-0"><a href="mailto:info@bansebrotherstransport.com" class="text-body-secondary text-primary-hover"><i class="bi bi-envelope me-2"></i>info@bansebrotherstransport.com</a></p>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class="col-lg-8 ms-auto">
                    <div class="row g-4">
                        <!-- Link block -->
                        <div class="col-6 col-md-3">
                            <h5 class="text-white mb-2 mb-md-4">Company</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>about">About Us</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>contact">Contact Us</a></li>
                                <!-- <li class="nav-item"><a class="nav-link text-body-secondary" href="blog">News and Blog</a></li> -->
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>team">Meet Our Team</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-3">
                            <h5 class="text-white mb-2 mb-md-4">Services</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>services.php?type=full-truckload">Full Truckload</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>services.php?type=less-than-truckload">Less Than Truckload</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>services.php?type=temperature-controlled">Temperature-Controlled</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>services.php?type=expedited">Expedited Shipping</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>services.php?type=international">International Shipping</a></li>
                            </ul>
                        </div>
                        
                        <!-- Link block -->
                        <div class="col-6 col-md-3">
                            <h5 class="text-white mb-2 mb-md-4">Support</h5>
                            <ul class="nav flex-column text-primary-hover">
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>quote">Get a Quote</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>tracking">Track Shipment</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>privacy">Privacy Policy</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>terms">Terms & Conditions</a></li>
                                <li class="nav-item"><a class="nav-link text-body-secondary" href="<?= PROOT; ?>faq">FAQ</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-3">
                            <h5 class="text-white mb-2 mb-md-4">Connect</h5>
                            <ul class="list-unstyled mb-0 text-primary-hover">
                                <li><a class="text-body-secondary" href="#"><i class="bi bi-facebook me-2"></i>Facebook</a></li>
                                <li><a class="text-body-secondary" href="#"><i class="bi bi-instagram me-2"></i>Instagram</a></li>
                                <li><a class="text-body-secondary" href="#"><i class="bi bi-twitter me-2"></i>Twitter</a></li>
                                <li><a class="text-body-secondary" href="#"><i class="bi bi-linkedin me-2"></i>Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Widget 2 END -->
            </div><!-- Row END -->

            <!-- Divider -->
            <hr class="mt-4 mb-0">

            <!-- Bottom footer -->
            <div class="row">
                <div class="col-12">
                    <div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
                        <!-- copyright text -->
                        <div class="text-body-secondary text-primary-hover"> Copyrights &copy;<?php echo date('Y'); ?> Banse Brothers Transport. All rights reserved. </div>
                        <!-- copyright links-->
                        <div class="mt-3 mt-md-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <!-- Language selector -->
                                    <div class="dropup mt-0 text-center text-sm-end">
                                        <a class="dropdown-toggle text-body-secondary" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-globe me-2"></i>English
                                        </a>
                                        <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
                                            <li><a class="dropdown-item" href="#">English</a></li>
                                            <li><a class="dropdown-item" href="#">German </a></li>
                                            <li><a class="dropdown-item" href="#">Spanish</a></li>
                                            <li><a class="dropdown-item" href="#">French</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
    Footer END -->

    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/choices.min.js"></script>
    <script src="assets/js/flatpickr.min.js"></script>

    <!-- ThemeFunctions -->
    <script src="assets/js/functions.js"></script>

</body>
</html>