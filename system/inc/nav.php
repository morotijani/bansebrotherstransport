<!-- Header START -->
<header class="navbar-light header-sticky">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="<?= PROOT; ?>index">
                <img class="light-mode-item navbar-brand-item" src="<?= PROOT; ?>assets/media/logo/logo-nb.png" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="<?= PROOT; ?>assets/media/logo/logo-nb.png" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto ms-sm-0 p-0 p-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="d-none d-sm-inline-block small">Menu</span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll ms-auto">
                    <!-- Nav item Home -->
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

            <!-- Get quote button -->
            <div class="ms-xl-auto">
                <a href="<?= PROOT; ?>quote" class="btn btn-primary mb-0">Get a Quote</a>
            </div>
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- Header END -->