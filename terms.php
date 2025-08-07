<?php
    require_once ("system/DatabaseConnector.php");
    $title = "Terms & Conditions";
    include ("system/inc/head.php");
    include ("system/inc/nav.php");
?>

    <!-- =======================
    Main Banner START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h1 class="fs-2 mb-2">Terms & Conditions</h1>
                    <p class="mb-0">Last Updated: <?php echo date('F d, Y'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Terms Content START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card shadow p-4">
                        <div class="card-body">
                            <h2>Agreement to Terms</h2>
                            <p>These Terms and Conditions constitute a legally binding agreement made between you and Banse Brothers Transport ("we," "us," or "our"), concerning your access to and use of our website and transportation services.</p>
                            <p>By accessing our website and using our services, you agree to be bound by these Terms and Conditions. If you disagree with any part of these terms, you may not access the website or use our services.</p>
                            
                            <h2>Services</h2>
                            <p>Banse Brothers Transport provides freight transportation and logistics services. By engaging our services, you agree to the following:</p>
                            <ul>
                                <li>You will provide accurate and complete information regarding the goods to be transported.</li>
                                <li>You warrant that you have the legal right to ship the goods.</li>
                                <li>You will comply with all applicable laws and regulations related to the shipment of goods.</li>
                                <li>You will pay all agreed-upon fees and charges for our services.</li>
                            </ul>
                            
                            <h2>Shipping Restrictions</h2>
                            <p>Certain items are prohibited from being shipped through our services, including but not limited to:</p>
                            <ul>
                                <li>Illegal substances and items</li>
                                <li>Hazardous materials (unless properly declared and we agree to transport them)</li>
                                <li>Firearms, explosives, and weapons</li>
                                <li>Perishable items (unless using our temperature-controlled services)</li>
                                <li>Live animals</li>
                                <li>Valuable items such as cash, jewelry, and precious metals (unless specifically arranged with additional insurance)</li>
                            </ul>
                            
                            <h2>Liability and Insurance</h2>
                            <p>Our liability for loss or damage to goods is limited as follows:</p>
                            <ul>
                                <li>We are liable only for actual loss or damage to goods, not to exceed $0.50 per pound per article, unless a higher value is declared and additional charges paid.</li>
                                <li>We are not liable for delays in delivery unless specifically guaranteed in writing.</li>
                                <li>We are not liable for loss, damage, or delay caused by acts of God, public authorities, strikes, labor disputes, weather, mechanical failures, or other causes beyond our control.</li>
                                <li>Additional insurance coverage is available at an extra cost.</li>
                            </ul>
                            
                            <h2>Claims Process</h2>
                            <p>In the event of loss or damage to your shipment:</p>
                            <ul>
                                <li>Claims must be filed in writing within 15 days of delivery for damage, or within 15 days of expected delivery date for loss.</li>
                                <li>All claims must include supporting documentation, including but not limited to shipping documents, invoices, and photographs of damaged goods.</li>
                                <li>Failure to file a claim within the specified time frame will result in the claim being denied.</li>
                            </ul>
                            
                            <h2>Payment Terms</h2>
                            <p>Payment for our services is due according to the following terms:</p>
                            <ul>
                                <li>Payment is due within 30 days of the invoice date, unless otherwise specified in writing.</li>
                                <li>Late payments are subject to a 1.5% monthly interest charge.</li>
                                <li>We reserve the right to withhold services for accounts with outstanding balances.</li>
                            </ul>
                            
                            <h2>Website Use</h2>
                            <p>By using our website, you agree to:</p>
                            <ul>
                                <li>Use the website only for lawful purposes and in accordance with these Terms.</li>
                                <li>Not use the website in any way that could disable, overburden, damage, or impair the site.</li>
                                <li>Not attempt to gain unauthorized access to any parts of the website.</li>
                                <li>Not use any robots, spiders, or other automatic devices to access the website.</li>
                            </ul>
                            
                            <h2>Intellectual Property</h2>
                            <p>The website and its original content, features, and functionality are owned by Banse Brothers Transport and are protected by international copyright, trademark, patent, trade secret, and other intellectual property laws.</p>
                            
                            <h2>Termination</h2>
                            <p>We may terminate or suspend your access to our services immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach these Terms and Conditions.</p>
                            
                            <h2>Changes to Terms</h2>
                            <p>We reserve the right to modify these Terms and Conditions at any time. When we do, we will revise the updated date at the top of this page. Continued use of the website after any such changes constitutes your acceptance of the new Terms and Conditions.</p>
                            
                            <h2>Governing Law</h2>
                            <p>These Terms shall be governed by and construed in accordance with the laws of the state where our headquarters is located, without regard to its conflict of law provisions.</p>
                            
                            <h2>Contact Us</h2>
                            <p>If you have any questions about these Terms and Conditions, please contact us at:</p>
                            <p>
                                Banse Brothers Transport<br>
                                123 Transport Avenue<br>
                                Logistics City, ST 12345<br>
                                Email: legal@bansebrotherstransport.com<br>
                                Phone: +123 456 7890
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Terms Content END -->

<?php
    include ("system/inc/footer.php");
?>