    
    <!-- Header START -->
    <header class="header-transparent">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid px-md-5">
                <!-- Logo START -->
                <a class="navbar-brand" href="<?= PROOT; ?>index">
                    <img class="navbar-brand-item" src="<?= PROOT; ?>assets/media/logo/logo-nb.png" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto me-3 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-scroll mx-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="<?= PROOT; ?>index">Home</a>
                        </li>

                        <!-- Nav item Services -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu" aria-labelledby="servicesMenu">
                                <li><a class="dropdown-item" href="<?= PROOT; ?>services">All Services</a></li>
                                <li><a class="dropdown-item" href="<?= PROOT; ?>services?type=full-truckload">Full Truckload (FTL)</a></li>
                                <li><a class="dropdown-item" href="<?= PROOT; ?>services?type=less-than-truckload">Less Than Truckload (LTL)</a></li>
                                <li><a class="dropdown-item" href="<?= PROOT; ?>services?type=temperature-controlled">Temperature-Controlled</a></li>
                                <li><a class="dropdown-item" href="<?= PROOT; ?>services?type=expedited">Expedited Shipping</a></li>
                                <li><a class="dropdown-item" href="<?= PROOT; ?>services?type=international">International Shipping</a></li>
                            </ul>
                        </li>

                       <!-- Nav item Fleet -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PROOT; ?>fleet">Our Fleet</a>
                        </li>

                        <!-- Nav item About -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PROOT; ?>about">About Us</a>
                        </li>

                        <!-- Nav item Contact -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PROOT; ?>contact">Contact</a>
                        </li>

                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Book button -->
                <div class="nav flex-row ms-xl-auto">
                    <button class="btn btn-sm btn-primary mb-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBookstay" aria-controls="offcanvasBookstay"><i class="bi bi-calendar-week me-2"></i>Get a Quote</button>
                </div>

            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
