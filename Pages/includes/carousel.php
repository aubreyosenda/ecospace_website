<?php
// Carousel component for Ecospace Services
// This can be included in any page that needs the hero carousel
?>

<!-- Carousel Component -->
<div class="carousel-container">
    <!-- Hero Carousel -->
    <div id="ecospaceCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <!-- Slide 1 - The Complete Solution -->
            <div class="carousel-item active">
                <div class="carousel-slide-item" style="background-image: var(--carousel-gradient), url('../../assets/hero-1.jpg');">
                    <div class="container-fluid h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-8">
                                <div class="carousel-content-container">
                                    <h1>The Complete Solution</h1>
                                    <p>Ecospace's perspective to providing solutions considers a collaborative approach with the client. This infrastructure ensures that the clients have everything at their disposal at every stage of the work.</p>
                                    <a href="#" class="carousel-action-button">
                                        <i class="fas fa-search me-2"></i>Explore solutions
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 text-end d-none d-lg-block">
                                <div class="carousel-device-image">
                                    <!-- Device/Drone image would go here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 - Ecofield -->
            <div class="carousel-item">
                <div class="carousel-slide-item" style="background-image: var(--carousel-gradient), url('../../assets/hero-2.jpg');">
                    <div class="container-fluid h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-6">
                                <div class="carousel-content-container">
                                    <div class="carousel-badge">Ecofield</div>
                                    <h1>Integrating the Office and Remote Work Relationship</h1>
                                    <p>Ecospace's Ecofield data collection and office management application is more collaborative and streamlined into better work performance at the office as well at every stage of the work.</p>
                                    <a href="#" class="carousel-action-button">
                                        <i class="fas fa-desktop me-2"></i>Get started
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 text-end d-none d-lg-block">
                                <div class="carousel-mockup-image">
                                    <!-- Device mockup image would go here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 - Support -->
            <div class="carousel-item">
                <div class="carousel-slide-item" style="background-image: var(--carousel-gradient), url('assets/hero-3.jpg');">
                    <div class="container-fluid h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-6">
                                <div class="carousel-content-container">
                                    <div class="carousel-badge">Support</div>
                                    <h1>Critical projects require 24-hour support to ensure success.</h1>
                                    <p>We've got the training, technical support, solutions and product resources to help you achieve.</p>
                                    <a href="#" class="carousel-action-button">
                                        <i class="fas fa-phone me-2"></i>24 Hours support
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 4 - Collaboration -->
            <div class="carousel-item">
                <div class="carousel-slide-item" style="background-image: var(--carousel-gradient), url('assets/hero-4.jpg');">
                    <div class="container-fluid h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-8">
                                <div class="carousel-content-container">
                                    <div class="carousel-badge">Collaboration</div>
                                    <h1>We Make you Optimistic about your future Geospatial Business</h1>
                                    <p>Connecting sharing ideas and strategies, we focus on bringing you the best solutions to solve your daily needs.</p>
                                    <a href="#" class="carousel-action-button">
                                        <i class="fas fa-handshake me-2"></i>24 Hours support
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 5 - Career -->
            <div class="carousel-item">
                <div class="carousel-slide-item" style="background-image: var(--carousel-gradient), url('assets/hero-5.jpg');">
                    <div class="container-fluid h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-8">
                                <div class="carousel-content-container">
                                    <div class="carousel-badge">Career</div>
                                    <h1>We nurture your ideas to reality</h1>
                                    <p>Join the fast guidance and support from fellow team members, collaborate and envision your ideas into reality.</p>
                                    <a href="#" class="carousel-action-button">
                                        <i class="fas fa-rocket me-2"></i>Explore careers
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Carousel Indicators -->
        <div class="carousel-indicators carousel-navigation-indicators">
            <button type="button" data-bs-target="#ecospaceCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#ecospaceCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#ecospaceCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#ecospaceCarousel" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#ecospaceCarousel" data-bs-slide-to="4"></button>
        </div>
    </div>
</div>