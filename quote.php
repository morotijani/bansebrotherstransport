<?php
    require_once ("system/DatabaseConnector.php");
    $title = "Request a Quote";
    include ("system/inc/head.php");
    include ("system/inc/nav.php");
    
    // Get service type from URL if available
    $service_type = isset($_GET['service']) ? $_GET['service'] : '';
?>

    <!-- =======================
    Header START -->
    <section class="py-5 py-lg-7 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h1 class="fs-2">Request a Freight Quote</h1>
                    <p class="mb-0">Get a customized quote for your shipping needs</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Header END -->

    <!-- =======================
    Quote Form START -->
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card shadow">
                        <!-- Card header -->
                        <div class="card-header border-bottom p-4">
                            <h5 class="card-title mb-0">Freight Quote Request Form</h5>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body p-4">
                            <form class="row g-4" method="post" action="process_quote.php">
                                <!-- Personal Information -->
                                <div class="col-12">
                                    <h6 class="mb-3">Contact Information</h6>
                                </div>
                                
                                <!-- Name -->
                                <div class="col-md-6">
                                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                
                                <!-- Phone -->
                                <div class="col-md-6">
                                    <label class="form-label">Phone <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" name="phone" required>
                                </div>
                                
                                <!-- Company -->
                                <div class="col-md-6">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control" name="company">
                                </div>
                                
                                <hr class="my-3">
                                
                                <!-- Shipment Information -->
                                <div class="col-12">
                                    <h6 class="mb-3">Shipment Details</h6>
                                </div>
                                
                                <!-- Service Type -->
                                <div class="col-md-6">
                                    <label class="form-label">Service Type <span class="text-danger">*</span></label>
                                    <select class="form-select" name="serviceType" required>
                                        <option value="">Select Service</option>
                                        <option value="FTL" <?php echo ($service_type == 'FTL') ? 'selected' : ''; ?>>Full Truckload (FTL)</option>
                                        <option value="LTL" <?php echo ($service_type == 'LTL') ? 'selected' : ''; ?>>Less Than Truckload (LTL)</option>
                                        <option value="Temperature-Controlled" <?php echo ($service_type == 'Temperature-Controlled') ? 'selected' : ''; ?>>Temperature-Controlled</option>
                                        <option value="Specialized" <?php echo ($service_type == 'Specialized') ? 'selected' : ''; ?>>Specialized Transport</option>
                                    </select>
                                </div>
                            
                                <!-- Cargo Type -->
                                <div class="col-md-6">
                                    <label class="form-label">Cargo Type <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="cargoType" placeholder="e.g., Electronics, Furniture, Food products" required>
                                </div>
                                
                                <!-- Weight -->
                                <div class="col-md-6">
                                    <label class="form-label">Approximate Weight (lbs) <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="weight" required>
                                </div>
                                
                                <!-- Dimensions -->
                                <div class="col-md-6">
                                    <label class="form-label">Dimensions (L x W x H in inches)</label>
                                    <input type="text" class="form-control" name="dimensions" placeholder="e.g., 48 x 40 x 48">
                                </div>
                                
                                <!-- Pickup Location -->
                                <div class="col-md-6">
                                    <label class="form-label">Pickup Location <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="pickup" placeholder="City, State, Zip Code" required>
                                </div>
                                
                                <!-- Delivery Location -->
                                <div class="col-md-6">
                                    <label class="form-label">Delivery Location <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="delivery" placeholder="City, State, Zip Code" required>
                                </div>
                                
                                <!-- Pickup Date -->
                                <div class="col-md-6">
                                    <label class="form-label">Desired Pickup Date <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control flatpickr" name="pickupDate" placeholder="Select date" required>
                                </div>
                                
                                <!-- Special Requirements -->
                                <div class="col-12">
                                    <label class="form-label">Special Requirements or Instructions</label>
                                    <textarea class="form-control" name="specialRequirements" rows="3" placeholder="Any specific handling instructions or requirements"></textarea>
                                </div>
                                
                                <!-- Button -->
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit Quote Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Quote Form END -->

<?php include ("system/inc/footer.php"); ?>