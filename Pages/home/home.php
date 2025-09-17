

<?php include '../includes/carousel_header.php'; ?>

<!-- Main Content Sections -->
<main>
    <!-- Our Values Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="display-4 fw-bold mb-4">Our Values</h2>
                    <p class="lead text-muted">We are committed to excellence in everything we do, guided by our core values that shape our approach to geospatial solutions.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Belong -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="mb-4">
                                <div class="bg-success rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                    <i class="fas fa-users text-white fs-2"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold mb-3">Belong</h4>
                            <p class="text-muted">Be yourself and thrive together. We foster an inclusive environment where every team member feels valued and can contribute their unique perspective to our collective success.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Grow -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="mb-4">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                    <i class="fas fa-chart-line text-white fs-2"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold mb-3">Grow</h4>
                            <p class="text-muted">Be encouraged and build the future. We believe in continuous learning and development, empowering our team to reach new heights in their professional journey.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Innovate -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="mb-4">
                                <div class="bg-warning rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                    <i class="fas fa-lightbulb text-white fs-2"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold mb-3">Innovate</h4>
                            <p class="text-muted">Be curious and make possibilities. Innovation drives us forward as we explore new technologies and methodologies to deliver cutting-edge geospatial solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Our Clients Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="display-4 fw-bold mb-4">Our Clients</h2>
                    <p class="lead text-muted">We are proud to serve a diverse range of clients across various industries, delivering exceptional geospatial solutions that drive their success.</p>
                </div>
            </div>
            
            <!-- Client Logos Row -->
            <div class="row align-items-center justify-content-center g-4">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                    <img src="assets/clients/client-1.png" alt="Client 1" class="img-fluid opacity-75 hover-opacity-100" style="max-height: 60px; transition: opacity 0.3s ease;">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                    <img src="assets/clients/client-2.png" alt="Client 2" class="img-fluid opacity-75 hover-opacity-100" style="max-height: 60px; transition: opacity 0.3s ease;">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                    <img src="assets/clients/client-3.png" alt="Client 3" class="img-fluid opacity-75 hover-opacity-100" style="max-height: 60px; transition: opacity 0.3s ease;">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                    <img src="assets/clients/client-4.png" alt="Client 4" class="img-fluid opacity-75 hover-opacity-100" style="max-height: 60px; transition: opacity 0.3s ease;">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                    <img src="assets/clients/client-5.png" alt="Client 5" class="img-fluid opacity-75 hover-opacity-100" style="max-height: 60px; transition: opacity 0.3s ease;">
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                    <img src="assets/clients/client-6.png" alt="Client 6" class="img-fluid opacity-75 hover-opacity-100" style="max-height: 60px; transition: opacity 0.3s ease;">
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-3">Ready to Transform Your Geospatial Projects?</h2>
                    <p class="lead mb-0">Let's discuss how our innovative solutions can help you achieve your goals. Contact our experts today to get started.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="#" class="btn btn-light btn-lg px-5 py-3 rounded-pill">
                        <i class="fas fa-phone me-2"></i>Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Additional styles for home page */
.hover-opacity-100:hover {
    opacity: 1 !important;
}

.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
}

/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Section spacing */
section {
    scroll-margin-top: 100px;
}

/* Button hover effects */
.btn {
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
}

/* Client logo animations */
@media (min-width: 768px) {
    .opacity-75 {
        transition: all 0.3s ease;
    }
    
    .opacity-75:hover {
        transform: scale(1.1);
    }
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .display-4 {
        font-size: 2.5rem;
    }
    
    .display-5 {
        font-size: 2rem;
    }
    
    .lead {
        font-size: 1.1rem;
    }
}
</style>

<?php include '../includes/footer.php'; ?>