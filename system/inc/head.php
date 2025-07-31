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
	
	<!-- Offcanvas menu START -->
	<div class="offcanvas offcanvas-w-500px offcanvas-end" tabindex="-1" id="offcanvasBookstay" aria-labelledby="offcanvasBookstayLabel">
		<div class="offcanvas-header border-bottom px-3">
			<h5 class="offcanvas-title" id="offcanvasBookstayLabel">Book a Room</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body form-control-bg-light d-flex flex-column px-3">
			<!-- Form START -->
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
