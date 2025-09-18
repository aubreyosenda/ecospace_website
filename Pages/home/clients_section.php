<?php 
function renderClientsSection() {
    $clients = [
        'client-1.png',
        'client-2.png', 
        'client-3.png',
        'client-4.png',
        'client-5.png',
        'client-6.png'
    ];
    ?>
    <section class="clients-section">
        <div class="clients-container">
            <h2>Our Clients</h2>
            <div class="clients-slider">
                <div class="clients-track">
                    <?php foreach($clients as $index => $client): ?>
                    <div class="client-logo">
                        <img src="../../assets/<?php echo $client; ?>" alt="Client <?php echo $index + 1; ?>" />
                    </div>
                    <?php endforeach; ?>
                    
                    <!-- Duplicate for infinite scroll effect -->
                    <?php foreach($clients as $index => $client): ?>
                    <div class="client-logo">
                        <img src="../../assets/<?php echo $client; ?>" alt="Client <?php echo $index + 1; ?>" />
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Navigation buttons at ends -->
                <button class="nav-btn prev-btn" onclick="scrollClients(-1)">←</button>
                <button class="nav-btn next-btn" onclick="scrollClients(1)">→</button>
            </div>
        </div>
        
        <style>
        .clients-section {
            padding: 80px 20px;
            /* background: #f8f9fa; */
            overflow: hidden;
        }
        
        .clients-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }
        
        .clients-container h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 60px;
        }
        
        .clients-slider {
            position: relative;
            overflow: hidden;
            margin-bottom: 40px;
        }
        
        .clients-track {
            display: flex;
            animation: scroll 30s linear infinite;
            gap: 30px;
            align-items: center;
        }
        
        .client-logo {
            flex: 0 0 auto;
            width: 210px;
            height: 112px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .client-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        /* Navigation buttons at ends */
        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            border: none;
            background: #22c55e;
            color: white;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            z-index: 2;
        }
        
        .prev-btn { left: 0; }
        .next-btn { right: 0; }
        
        .nav-btn:hover {
            background: #16a34a;
            transform: translateY(-50%) scale(1.1);
        }
        
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        
        .clients-track:hover {
            animation-play-state: paused;
        }
        
        @media (max-width: 768px) {
            .clients-container h2 {
                font-size: 2rem;
            }
            
            .client-logo {
                width: 168px;
                height: 84px;
            }
            
            .clients-track {
                gap: 24px;
            }
        }
        </style>
        
        <script>
        function scrollClients(direction) {
            const track = document.querySelector('.clients-track');
            const scrollAmount = 200;
            const currentTransform = track.style.transform || 'translateX(0px)';
            const currentX = parseInt(currentTransform.match(/-?\d+/)?.[0] || '0');
            const newX = currentX + (direction * -scrollAmount);
            
            track.style.transform = `translateX(${newX}px)`;
            
            // Reset animation
            track.style.animation = 'none';
            setTimeout(() => {
                track.style.animation = 'scroll 30s linear infinite';
            }, 100);
        }
        </script>
    </section>
    <?php
}
?>
