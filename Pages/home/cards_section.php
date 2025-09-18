<?php 
function renderCardsSection() {
    ?>
    <section class="cards-section">
        <div class="cards-container">

            <!-- Card 1: Ecofield -->
            <div class="card card-large1">
                <div class="card-content">
                    <div class="card-text">
                        <span class="card-tag">Ecofield</span>
                        <h3>Integrating the Office and Field Work Relationship</h3>
                        <p>Ecoscape's Ecofield data capture and office management application is one platform keeping you connected to the field or the office at every stage of the work.</p>
                        <button class="card-button">
                            <span>Ecofield</span>
                            <span class="arrow">→</span>
                        </button>
                    </div>
                    <div class="card-image">
                        <img src="../../assets/ecofield-app.jpg" alt="Ecofield mobile application interface" />
                    </div>
                </div>
            </div>

            <!-- Card 2: Support + Training -->
            <div class="card card-large">
                <div class="card-content">
                    <!-- Left side with image + overlay -->
                    <div class="card-image">
                        <div class="card-image-bg">
                            <img src="../../assets/surveyor-equipment.jpg" alt="Surveyor with equipment" />
                            <div class="card-overlay" style="padding: 20px; background: inherit;">
                                <div class="card card-small" style="background: #3b82f6; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); padding: 16px; display: flex; flex-direction: column; align-items: flex-start;">
                                    <div class="support-badge" style="padding: 6px 12px; border-radius: 15px; font-size: 1.5rem; margin-bottom: 10px; background: inherit; color: white;">Support</div>
                                    <h3 style="color: white; margin: 8px 0; font-size: 1.3rem;">Critical projects require 24-hour support to ensure success.</h3>
                                    <button class="card-button-outline" style="padding: 9px 16px; border-radius: 15px; font-size: 0.7rem; gap: 6px; background: inherit; color: white; border: 2px solid rgba(255,255,255,0.3);">
                                        <span style="color: white; font-size: 0.9rem">24 Hours support</span>
                                        <span class="arrow" style="color: white;">→</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right side with text -->
                    <div class="card-text">
                        <h3>We’ve got the training, technical support, solutions and product resources to help you achieve.</h3>
                    </div>
                </div>
            </div>

            <!-- Card 3: Collaboration -->
            <div class="card card-large">
                <div class="card-content">
                    <div class="card-text">
                        <span class="card-tag">Collaboration</span>
                        <h3>We Make you Optimistic about your future Geospatial Business</h3>
                        <p>Collectively sharing ideas and strategies, we focus on bringing you the best solutions to solve your daily needs.</p>
                        <button class="card-button">
                            <span>24 Hours support</span>
                            <span class="arrow">→</span>
                        </button>
                    </div>
                    <div class="card-image">
                        <img src="../../assets/team-collaboration.jpg" alt="Team collaboration in field" />
                    </div>
                </div>
            </div>

        </div>

        <style>
            .card-large1{
                margin-top: -130px;
            }
        .cards-section {
            padding: 60px 60px;
            background: #f8f9fa;
        }

        .cards-container {
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 60px;
        }

        .card {
            background: white;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.2);
        }

        .card-content {
            display: flex;
            align-items: center;
            padding: 80px;
            gap: 60px;
        }

        .card-text {
            flex: 1;
        }

        .card-tag {
            background: #e5f3ff;
            color: #0066cc;
            padding: 10px 24px;
            border-radius: 30px;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .card h3 {
            font-size: 2.2rem;
            font-weight: bold;
            margin: 20px 0;
            line-height: 1.3;
        }

        .card p {
            color: #444;
            font-size: 1.4rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .card-button {
            background: #22c55e;
            color: white;
            border: none;
            padding: 18px 32px;
            border-radius: 30px;
            font-size: 1.4rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: background 0.3s ease;
        }

        .card-button:hover {
            background: #16a34a;
        }

        .card-button-outline {
            background: rgba(255,255,255,0.9);
            color: #333;
            border: 2px solid rgba(255,255,255,0.3);
            padding: 18px 32px;
            border-radius: 30px;
            font-size: 1.4rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.3s ease;
        }

        .card-button-outline:hover {
            background: white;
        }

        .card-image {
            flex: 0 0 50%;
        }

        .card-image img {
            width: 100%;
            height: auto;
            border-radius: 20px;
        }

        .card-image-bg {
            position: relative;
            height: 100%;
            min-height: 350px;
        }

        .card-image-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.4);
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .support-badge {
            background: #3b82f6;
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: 600;
            width: fit-content;
            margin-bottom: 20px;
        }

      /* Responsive behavior */
@media (max-width: 968px) {

    .cards-section {
        padding: 10px 5px;
    }

    .cards-container {
        gap: 10px;
    }

    .card {
        margin: 5px;
        border-radius: 15px; /* smaller radius */
    }

    .card-content {
        flex-direction: column;
        text-align: center;
        padding: 15px;
        gap: 15px;
    }

    .card-image {
        flex: none;
        width: 100%;
        order: -1;
    }

    .card-image img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        object-fit: cover;
    }

    .card-tag {
        font-size: 1.2rem;
        padding: 6px 14px;
        border-radius: 20px;
    }

    .card h3 {
        font-size: 1.4rem;
        margin: 10px 0;
    }

    .card p {
        font-size: 0.9rem;
        line-height: 1.4;
    }

    .card-button {
        padding: 10px 18px;
        font-size: 1rem;
        border-radius: 20px;
        gap: 8px;
    }

    .card-button-outline {
        padding: 8px 14px;
        font-size: 0.9rem;
        border-radius: 18px;
        gap: 6px;
    }

    .support-badge {
        font-size: 0.9rem;
        padding: 6px 12px;
        border-radius: 15px;
        margin-bottom: 12px;
    }

    .card-overlay {
        padding: 15px;
    }
}

        </style>
    </section>
    <?php
}
?>
