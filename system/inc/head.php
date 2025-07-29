<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title; ?> - Banse Brothers Transport</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Banse Brothers Transport">
	<meta name="description" content="Fast & Sustainable Road Freight Solutions">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})
			}
		})
		
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= PROOT; ?>assets/media/logo/logo.jpg">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/flatpickr.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="<?= PROOT; ?>assets/css/style.css">

</head>

<body>
	



<body>
	<!-- Offcanvas menu START -->
	<div class="offcanvas offcanvas-w-500px offcanvas-end" tabindex="-1" id="offcanvasBookstay" aria-labelledby="offcanvasBookstayLabel">
		<div class="offcanvas-header border-bottom px-3">
			<h5 class="offcanvas-title" id="offcanvasBookstayLabel">Book a Room</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body form-control-bg-light d-flex flex-column px-3">
			<!-- Form START -->
			<form>
				<!-- Pickup -->
				<div class="mb-3">
					<label class="form-label mb-0">Room & Suite Type</label>
					<select class="form-select js-choice" data-search-enabled="true" aria-label=".form-select-sm">
						<option value="">Select location</option>
						<option>Agave suite</option>
						<option>Olive Grove Suite</option>
						<option>Palm Suite</option>
						<option>Casa Green Suite</option>
					</select>
				</div>

				<!-- Date -->
				<div class="mb-3">
					<label class="form-label mb-0">Check in</label>
					<input type="text" class="form-control flatpickr" data-date-format="d M Y" placeholder="Select date">
				</div>
				
				<!-- Date -->
				<div class="mb-3">
					<label class="form-label mb-0">Check out</label>
					<input type="text" class="form-control flatpickr" data-date-format="d M Y" placeholder="Select date">
				</div>

				<!-- Occupant -->
				<div class="mb-3">
					<!-- Dropdown input -->
					<label class="form-label mb-0">Guests & rooms</label>
					<div class="dropdown guest-selector me-2">
						<input type="text" class="form-guest-selector form-control selection-result" value="2 Guests 1 Room" data-bs-auto-close="outside" data-bs-toggle="dropdown">
					
						<!-- dropdown items -->
						<ul class="dropdown-menu guest-selector-dropdown">
							<!-- Adult -->
							<li class="d-flex justify-content-between">
								<div>
									<h6 class="mb-0">Adults</h6>
									<small>Ages 13 or above</small>
								</div>

								<div class="hstack gap-1 align-items-center">
									<button type="button" class="btn btn-link adult-remove p-0 mb-0"><i class="bi bi-dash-circle fs-5 fa-fw"></i></button>
									<h6 class="guest-selector-count mb-0 adults">2</h6>
									<button type="button" class="btn btn-link adult-add p-0 mb-0"><i class="bi bi-plus-circle fs-5 fa-fw"></i></button>
								</div>
							</li>

							<!-- Divider -->
							<li class="dropdown-divider"></li>

							<!-- Child -->
							<li class="d-flex justify-content-between">
								<div>
									<h6 class="mb-0">Child</h6>
									<small>Ages 13 below</small>
								</div>

								<div class="hstack gap-1 align-items-center">
									<button type="button" class="btn btn-link child-remove p-0 mb-0" ><i class="bi bi-dash-circle fs-5 fa-fw"></i></button>
									<h6 class="guest-selector-count mb-0 child">0</h6>
									<button type="button" class="btn btn-link child-add p-0 mb-0" ><i class="bi bi-plus-circle fs-5 fa-fw"></i></button>
								</div>
							</li>

							<!-- Divider -->
							<li class="dropdown-divider"></li>

							<!-- Rooms -->
							<li class="d-flex justify-content-between">
								<div>
									<h6 class="mb-0">Rooms</h6>
									<small>Max room 8</small>
								</div>

								<div class="hstack gap-1 align-items-center">
									<button type="button" class="btn btn-link room-remove p-0 mb-0" ><i class="bi bi-dash-circle fs-5 fa-fw"></i></button>
									<h6 class="guest-selector-count mb-0 rooms">1</h6>
									<button type="button" class="btn btn-link room-add p-0 mb-0" ><i class="bi bi-plus-circle fs-5 fa-fw"></i></button>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<!-- Buttons -->
				<div class="text-center">
					<button class="btn btn-primary-soft w-100 mb-0">Check Availability</button>
				</div>
			</form>
			<!-- Form END -->

			<!-- List -->
			<div class="bg-light p-3 rounded mt-auto">
				<h6>Why Book Direct?</h6>
				<ul class="small ps-3">
					<li class="mb-2">10% discount is applied</li>
					<li class="mb-2">15% off on spa treatment</li>
					<li class="mb-2">Best price guaranteed</li>
					<li class="mb-2">Daily complimentary sunrise yoga</li>
					<li class="mb-2">Early check-in and late check-out</li>
				</ul>
			</div>
		</div>	
	</div>
	<!-- Offcanvas menu END -->

<!-- Header START -->
<header class="header-transparent">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-dark navbar-expand-xl">
		<div class="container-fluid px-md-5">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
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

					<!-- Nav item Link -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="listingMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings</a>
						<ul class="dropdown-menu" aria-labelledby="listingMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Hotel</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index.html">Hotel Home</a></li>
									<li> <a class="dropdown-item" href="index-hotel-chain.html">Hotel Chain</a></li>
									<li> <a class="dropdown-item" href="index-resort.html">Hotel Resort</a></li>
									<li> <a class="dropdown-item" href="hotel-grid.html">Hotel Grid</a></li>
									<li> <a class="dropdown-item" href="hotel-list.html">Hotel List</a></li>
									<li> <a class="dropdown-item" href="hotel-detail.html">Hotel Detail</a></li>
									<li> <a class="dropdown-item" href="room-detail.html">Room Detail</a></li>
									<li> <a class="dropdown-item" href="hotel-booking.html">Hotel Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Flight</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-flight.html">Flight Home</a></li>
									<li> <a class="dropdown-item" href="flight-list.html">Flight List</a></li>
									<li> <a class="dropdown-item" href="flight-detail.html">Flight Detail</a></li>
									<li> <a class="dropdown-item" href="flight-booking.html">Flight Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Tour</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-tour.html">Tour Home</a></li>
									<li> <a class="dropdown-item" href="tour-grid.html">Tour Grid</a></li>
									<li> <a class="dropdown-item" href="tour-detail.html">Tour Detail</a></li>
									<li> <a class="dropdown-item" href="tour-booking.html">Tour Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Cab</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-cab.html">Cab Home</a></li>
									<li> <a class="dropdown-item" href="cab-list.html">Cab List</a></li>
									<li> <a class="dropdown-item" href="cab-detail.html">Cab Detail</a></li>
									<li> <a class="dropdown-item" href="cab-booking.html">Cab Booking</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Directory</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="index-directory.html">Directory Home</a></li>
									<li> <a class="dropdown-item" href="directory-detail.html">Directory Detail</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Add Listing</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="join-us.html">Join us</a></li>
									<li> <a class="dropdown-item" href="add-listing.html">Add Listing</a></li>
									<li> <a class="dropdown-item" href="add-listing-minimal.html">Add Listing Minimal</a></li>
									<li> <a class="dropdown-item" href="listing-added.html">Listing Added</a></li>
								</ul>
							</li>

              <!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Hero</a>
								<ul class="dropdown-menu" data-bs-popper="none">
									<li> <a class="dropdown-item" href="hero-inline-form.html">Hero Inline Form</a></li>
									<li> <a class="dropdown-item" href="hero-multiple-search.html">Hero Multiple Search</a></li>
									<li> <a class="dropdown-item" href="hero-image-gallery.html">Hero Image Gallery</a></li>
									<li> <a class="dropdown-item" href="hero-split.html">Hero Split</a></li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="booking-confirm.html">Booking Confirmed</a></li>
							<li> <a class="dropdown-item" href="compare-listing.html">Compare Listing</a></li>
							<li> <a class="dropdown-item" href="offer-detail.html">Offer Detail</a></li>
						</ul>
					</li>

					<!-- Nav item Link -->
					<li class="nav-item"> <a class="nav-link" href="#">Our Story</a> </li>

					<!-- Nav item Link -->
					<li class="nav-item"> <a class="nav-link" href="#">Experience</a> </li>

					<!-- Nav item Link -->
					<li class="nav-item"> <a class="nav-link" href="#">Rooms & Suites</a> </li>

					<!-- Nav item Link -->
					<li class="nav-item"> <a class="nav-link" href="#">Offers</a> </li>

					<!-- Nav item Link -->
					<li class="nav-item"> <a class="nav-link" href="#">Gallery</a> </li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Book button -->
			<div class="nav flex-row ms-xl-auto">
				<button class="btn btn-sm btn-primary mb-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBookstay" aria-controls="offcanvasBookstay"><i class="bi bi-calendar-week me-2"></i>Book a Stay</button>
			</div>

		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main banner START -->
<section class="position-relative py-8 py-sm-9" style="background-image:url(assets/images/category/hotel/resort/bg-01.jpg); background-position: center left; background-size: cover;">
	<!-- Background dark overlay -->
	<div class="bg-overlay bg-dark opacity-2"></div>
	<div class="container z-index-9 position-relative">
		<div class="row">
			<div class="col-xl-8 m-auto text-center py-xl-8">
				<h1 class="display-4 text-white mb-3">A World Of Luxury Awaits You</h1>
				<h5 class="text-white mb-3">Discover a New Look of Luxury Resorts.</h5>
				<a href="#" class="btn btn-lg btn-dark mb-0">Discover More</a>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Main banner END -->