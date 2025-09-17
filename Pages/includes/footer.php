<?php
?>
    <style>
        /* Footer-specific CSS variables to avoid conflicts */
        footer#ecospace-footer {
            --footer-bg-color: #f5f5f5;
            --footer-text-color: #333;
            --footer-border-color: #ddd;
            --footer-link-color: #0066cc;
            --footer-hover-color: #004499;
        }

        /* Footer component styles */
        footer#ecospace-footer {
            font-family: Arial, sans-serif;
            background-color: var(--footer-bg-color);
            color: var(--footer-text-color);
            padding: 25px;
            border-top: 1px solid var(--footer-border-color);
            border-radius: 15px;
            margin: 20px;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.05);
        }

        footer#ecospace-footer .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        footer#ecospace-footer .company-info {
            margin-bottom: 20px;
            line-height: 1.5;
        }

        footer#ecospace-footer .company-name {
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        footer#ecospace-footer .contact-info {
            margin: 15px 0;
            line-height: 1.6;
        }

        footer#ecospace-footer .divider {
            border-top: 1px solid var(--footer-border-color);
            margin: 20px 0;
        }

        footer#ecospace-footer .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        footer#ecospace-footer .services-column {
            display: flex;
            flex-direction: column;
        }

        footer#ecospace-footer .service-item {
            margin-bottom: 8px;
        }

        footer#ecospace-footer .copyright {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }

        footer#ecospace-footer a {
            color: var(--footer-link-color);
            text-decoration: none;
        }

        footer#ecospace-footer a:hover {
            color: var(--footer-hover-color);
            text-decoration: underline;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            footer#ecospace-footer {
                border-radius: 10px;
                margin: 10px;
                padding: 15px;
            }
            
            footer#ecospace-footer .services-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            footer#ecospace-footer .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Example page content 
    <div style="min-height: 100vh; padding: 20px;">
        <h1>Example Page Content</h1>
        <p>This page demonstrates the Ecospace Services footer component with rounded corners.</p>
        <p>Scroll down to see the footer.</p>
    </div>-->

    <!-- Footer Component -->
    <footer id="ecospace-footer">
        <div class="footer-content">
            <div class="company-info">
                <div class="company-name">Ecospace Services</div>
                <div>Arh Floor, Wing A, Suite 401</div>
                <div>Greyville Hub, Eastern Bypass Road, Rau, Nairobi, Kenya.</div>
            </div>

            <div class="contact-info">
                <div><a href="mailto:services@aspace.co.ke">services@aspace.co.ke</a></div>
                <div><a href="tel:+254798740614">+254-798 740 614</a></div>
            </div>

            <div class="divider"></div>

            <h2>Consultancy Services</h2>
            
            <div class="services-grid">
                <div class="services-column">
                    <div class="service-item">Surveying & Mapping</div>
                    <div class="service-item">Training</div>
                    <div class="service-item">Utility Management</div>
                    <div class="service-item">Agriculture</div>
                    <div class="service-item">Transport</div>
                    <div class="service-item">Physical Planning</div>
                </div>
                
                <div class="services-column">
                    <div class="service-item">Ecofield</div>
                    <div class="service-item">Ecohub SDI</div>
                    <div class="service-item">Land Astra</div>
                    <div class="service-item">Maji Safe</div>
                    <div class="service-item">Sukari Smart</div>
                    <div class="service-item">Data Processor</div>
                </div>
                
                <div class="services-column">
                    <div class="service-item">SurveyLink</div>
                    <div class="service-item">Sky Log</div>
                    <div class="service-item">Eco Connect</div>
                    <div class="service-item">Prosync UTM</div>
                    <div class="service-item">Accessories</div>
                    <div class="service-item">Contact us</div>
                </div>
                
                <div class="services-column">
                    <div class="service-item">Data Collectors</div>
                    <div class="service-item">GNSS Receivers</div>
                    <div class="service-item">Optical Equipment</div>
                    <div class="service-item">UAS (Drones)</div>
                    <div class="service-item">Careers</div>
                </div>
                
                <div class="services-column">
                    <div class="service-item">Training</div>
                    <div class="service-item">Repair Services</div>
                    <div class="service-item">Resources & Webinars</div>
                    <div class="service-item">Blog</div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="copyright">
                Copyright © 2025 Ecospace Services Ltd. All rights reserved.
            </div>
        </div>
    </footer>
