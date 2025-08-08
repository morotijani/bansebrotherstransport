<?php
    require_once ("system/DatabaseConnector.php");
    $title = "Our Team";
    include ("system/inc/head.php");
    include ("system/inc/nav.php");
?>

    <!-- =======================
    Main Banner START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h1 class="fs-2 mb-2">Meet Our Team</h1>
                    <p class="mb-0">The dedicated professionals behind Banse Brothers Transport</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Leadership Team START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2>Leadership Team</h2>
                    <p class="mb-0">Meet the experienced professionals who guide our company</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Team Member 1 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body p-3">
                            <img class="rounded-circle mb-3" src="<?= PROOT; ?>assets/media/team/team-1.jpg" alt="">
                            <h5 class="mb-0">John Banse</h5>
                            <p class="mb-2">Chief Executive Officer</p>
                            <p class="small mb-3">With over 25 years in the transportation industry, John leads our company with a focus on innovation and customer satisfaction.</p>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body p-3">
                            <img class="rounded-circle mb-3" src="<?= PROOT; ?>assets/media/team/team-2.jpg" alt="">
                            <h5 class="mb-0">Michael Banse</h5>
                            <p class="mb-2">Chief Operations Officer</p>
                            <p class="small mb-3">Michael oversees our day-to-day operations, ensuring efficient logistics and maintaining our high service standards.</p>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body p-3">
                            <img class="rounded-circle mb-3" src="<?= PROOT; ?>assets/media/team/team-3.jpg" alt="">
                            <h5 class="mb-0">Sarah Johnson</h5>
                            <p class="mb-2">Chief Financial Officer</p>
                            <p class="small mb-3">Sarah manages our financial strategy, ensuring sustainable growth while maintaining competitive pricing for our clients.</p>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body p-3">
                            <img class="rounded-circle mb-3" src="<?= PROOT; ?>assets/media/team/team-4.jpg" alt="">
                            <h5 class="mb-0">David Martinez</h5>
                            <p class="mb-2">Technology Director</p>
                            <p class="small mb-3">David leads our technology initiatives, implementing cutting-edge solutions for tracking, routing, and customer service.</p>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Leadership Team END -->

    <!-- =======================
    Operations Team START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2>Operations Team</h2>
                    <p class="mb-0">The dedicated professionals who keep our fleet moving</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Team Member 1 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body p-3">
                            <img class="rounded-circle mb-3" src="<?= PROOT; ?>assets/media/team/team-5.jpg" alt="">
                            <h5 class="mb-0">Robert Wilson</h5>
                            <p class="mb-2">Fleet Manager</p>
                            <p class="small mb-3">Robert oversees our entire fleet, ensuring vehicles are well-maintained and ready for service at all times.</p>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body p-3">
                            <img class="rounded-circle mb-3" src="<?= PROOT; ?>assets/media/team/team-6.jpg" alt="">
                            <h5 class="mb-0">Jennifer Lee</h5>
                            <p class="mb-2">Logistics Coordinator</p>
                            <p class="small mb-3">Jennifer coordinates our complex logistics operations, optimizing routes and schedules for maximum efficiency.</p>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body p-3">
                            <img class="rounded-circle mb-3" src="<?= PROOT; ?>assets/media/team/team-7.jpg" alt="">
                            <h5 class="mb-0">Thomas Brown</h5>
                            <p class="mb-2">Safety Director</p>
                            <p class="small mb-3">Thomas ensures all our operations meet the highest safety standards, protecting our team, cargo, and the public.</p>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card text-center h-100">
                        <div class="card-body p-3">
                            <img class="rounded-circle mb-3" src="<?= PROOT; ?>assets/media/team/team-8.jpg" alt="">
                            <h5 class="mb-0">Amanda Garcia</h5>
                            <p class="mb-2">Customer Relations Manager</p>
                            <p class="small mb-3">Amanda leads our customer service team, ensuring clients receive prompt, professional assistance with all their needs.</p>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a class="btn btn-sm btn-light px-2" href="#"><i class="bi bi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Operations Team END -->

    <!-- =======================
    Join Our Team START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card bg-light p-4 p-sm-5">
                        <div class="row g-4 align-items-center">
                            <!-- Content -->
                            <div class="col-md-6">
                                <h2 class="mb-3">Join Our Growing Team</h2>
                                <p class="mb-4">We're always looking for talented individuals to join our team. Whether you're an experienced driver, logistics specialist, or office professional, we'd love to hear from you.</p>
                                <a href="<?= PROOT; ?>careers.php" class="btn btn-primary mb-0">View Open Positions</a>
                            </div>
                            <!-- Image -->
                            <div class="col-md-6 text-center">
                                <img src="<?= PROOT; ?>assets/media/team/join-team.jpg" class="rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Join Our Team END -->

<?php
    include ("system/inc/footer.php");
?>