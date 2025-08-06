<?php
    require_once ("system/DatabaseConnector.php");
    $title = "Frequently Asked Questions";
    include ("system/inc/head.php");
    include ("system/inc/nav.php");
?>

    <!-- =======================
    Main Banner START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h1 class="fs-2 mb-2">Frequently Asked Questions</h1>
                    <p class="mb-0">Find answers to common questions about our transportation services</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    FAQ Content START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- FAQ Categories -->
                    <ul class="nav nav-pills nav-pills-bg-soft justify-content-center mb-4">
                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="pill" href="#tab-1">General</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill" href="#tab-2">Shipping</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill" href="#tab-3">Tracking</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="pill" href="#tab-4">Pricing</a> </li>
                    </ul>

                    <!-- FAQ Content -->
                    <div class="tab-content">
                        <!-- General FAQs -->
                        <div class="tab-pane fade show active" id="tab-1">
                            <div class="accordion accordion-icon accordion-bg-light" id="accordionExample1">
                                <!-- Item 1 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                            What areas do you service?
                                        </button>
                                    </h2>
                                    <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            Banse Brothers Transport provides nationwide shipping services across the continental United States. We also offer international shipping to select countries. Please contact our customer service team for specific information about your desired shipping route.
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 2 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                            What types of goods do you transport?
                                        </button>
                                    </h2>
                                    <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            We transport a wide variety of goods including general freight, retail merchandise, manufacturing materials, food products (with our temperature-controlled fleet), and more. There are some restrictions on hazardous materials and certain other items. Please contact us for specific information about your cargo.
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 3 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                            How do I get started with your services?
                                        </button>
                                    </h2>
                                    <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            Getting started is easy! Simply contact our customer service team by phone or email, or fill out our online quote request form. One of our representatives will reach out to discuss your shipping needs and provide you with a customized solution.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Shipping FAQs -->
                        <div class="tab-pane fade" id="tab-2">
                            <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                <!-- Item 1 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-4">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                            What's the difference between FTL and LTL shipping?
                                        </button>
                                    </h2>
                                    <div id="collapse-4" class="accordion-collapse collapse show" aria-labelledby="heading-4" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Full Truckload (FTL) means your shipment occupies an entire truck, providing dedicated service and direct transport from pickup to delivery. Less Than Truckload (LTL) means your shipment shares truck space with other shipments, which is more cost-effective for smaller loads but may involve multiple stops and longer transit times.
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 2 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                            How should I prepare my goods for shipping?
                                        </button>
                                    </h2>
                                    <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Proper packaging is essential for safe transport. Items should be securely packed in appropriate containers, properly labeled, and palletized if necessary. For specific guidelines based on your cargo type, please contact our team who can provide detailed instructions for your particular shipment.
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 3 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                            What documentation is required for shipping?
                                        </button>
                                    </h2>
                                    <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Required documentation typically includes a Bill of Lading (BOL), commercial invoice, and packing list. For international shipments, additional documents such as customs declarations, certificates of origin, and import/export permits may be required. Our team will guide you through the specific documentation needed for your shipment.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tracking FAQs -->
                        <div class="tab-pane fade" id="tab-3">
                            <div class="accordion accordion-icon accordion-bg-light" id="accordionExample3">
                                <!-- Item 1 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-7">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="true" aria-controls="collapse-7">
                                            How can I track my shipment?
                                        </button>
                                    </h2>
                                    <div id="collapse-7" class="accordion-collapse collapse show" aria-labelledby="heading-7" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            You can track your shipment in real-time through our online tracking portal. Simply enter your tracking number on our website's tracking page. Alternatively, you can contact our customer service team who can provide you with updates on your shipment's status.
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 2 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-8">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                                            What information do I need to track my shipment?
                                        </button>
                                    </h2>
                                    <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="heading-8" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            You'll need your tracking number, which is provided to you when your shipment is picked up. This number is also included on your Bill of Lading and shipping confirmation email. If you don't have your tracking number, our customer service team can help locate your shipment using other information such as your company name, pickup date, or destination.
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 3 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-9">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                                            How often is tracking information updated?
                                        </button>
                                    </h2>
                                    <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="heading-9" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            Our tracking system updates in real-time as your shipment progresses through various checkpoints in the transportation process. Major updates occur at pickup, during transit at key checkpoints, and upon delivery. For FTL shipments, GPS tracking provides more frequent location updates.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing FAQs -->
                        <div class="tab-pane fade" id="tab-4">
                            <div class="accordion accordion-icon accordion-bg-light" id="accordionExample4">
                                <!-- Item 1 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-10">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                                            How is shipping cost calculated?
                                        </button>
                                    </h2>
                                    <div id="collapse-10" class="accordion-collapse collapse show" aria-labelledby="heading-10" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            Shipping costs are calculated based on several factors including distance, weight, dimensions, type of service (FTL, LTL, etc.), special handling requirements, fuel surcharges, and current market conditions. For the most accurate pricing, we recommend requesting a quote for your specific shipment.
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 2 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-11">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
                                            Do you offer volume discounts?
                                        </button>
                                    </h2>
                                    <div id="collapse-11" class="accordion-collapse collapse" aria-labelledby="heading-11" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            Yes, we offer volume discounts for regular shippers and those with high-volume needs. We can create customized pricing plans based on your shipping frequency, volume, and specific requirements. Contact our sales team to discuss volume pricing options for your business.
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 3 -->
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="heading-12">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12">
                                            Are there additional fees I should be aware of?
                                        </button>
                                    </h2>
                                    <div id="collapse-12" class="accordion-collapse collapse" aria-labelledby="heading-12" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            Potential additional fees may include fuel surcharges, accessorial charges (such as liftgate service, inside delivery, residential delivery), detention fees for extended loading/unloading times, and special handling for hazardous materials or oversized items. We strive to be transparent about all potential costs, and these will be outlined in your quote and invoice.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact CTA -->
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <h3>Still have questions?</h3>
                            <p class="mb-4">Our customer service team is ready to help with any questions not covered in our FAQ.</p>
                            <a href="<?= PROOT; ?>contact" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    FAQ Content END -->

<?php
    include ("system/inc/footer.php");
?>