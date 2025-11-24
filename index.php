<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectiqHub - Women's Fashion & Clothing Store</title>
    <meta name="description" content="Discover trendy women's clothing at ConnectiqHub. From casual wear to elegant dresses, find your perfect style. Click here to continue exploring our collection of fashionable apparel for modern women.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .header-nav-x7k9 {
            background: #2c3e50;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-container-m4p2 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo-brand-q8w5 {
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-r3t7 {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-menu-r3t7 a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-menu-r3t7 a:hover {
            color: #3498db;
        }

        .hero-section-b9n1 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 120px 20px 80px;
            margin-top: 70px;
        }

        .hero-content-f5j8 {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title-l2v6 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero-subtitle-k4s9 {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .cta-button-z7x3 {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }

        .cta-button-z7x3:hover {
            background: #c0392b;
        }

        .about-section-d8h4 {
            padding: 80px 20px;
            background: #f8f9fa;
        }

        .container-p6m2 {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title-w9q1 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: #2c3e50;
        }

        .about-grid-n5t8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .about-card-j3r7 {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        .card-icon-u8y4 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #3498db;
        }

        .collections-section-a2v9 {
            padding: 80px 20px;
            background: white;
        }

        .collections-grid-h7k3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .collection-item-s4f6 {
            position: relative;
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .collection-item-s4f6:hover {
            transform: translateY(-5px);
        }

        .collection-bg-e9r2 {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .collection-overlay-m1x8 {
            background: rgba(0,0,0,0.5);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }

        .history-section-c6b5 {
            padding: 80px 20px;
            background: linear-gradient(45deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .timeline-container-v3n7 {
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item-q9w4 {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            margin: 20px 0;
            border-radius: 15px;
            border-left: 5px solid #fff;
        }

        .timeline-year-i5t2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .features-section-x8j6 {
            padding: 80px 20px;
            background: #ecf0f1;
        }

        .features-grid-l4p9 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .feature-box-r7s3 {
            background: white;
            padding: 40px 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .reviews-section-k2m8 {
            padding: 80px 20px;
            background: #34495e;
            color: white;
        }

        .reviews-grid-f6n4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .review-card-y9h1 {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
        }

        .reviewer-name-t5w7 {
            font-weight: bold;
            margin-top: 15px;
            color: #3498db;
        }

        .stars-rating-u3q6 {
            color: #f39c12;
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .sustainability-section-g8v2 {
            padding: 80px 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .sustainability-content-o4j9 {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .footer-main-z1x5 {
            background: #2c3e50;
            color: white;
            padding: 50px 20px 20px;
        }

        .footer-grid-b7k4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 30px;
        }

        .footer-section-n8p3 h3 {
            margin-bottom: 20px;
            color: #3498db;
        }

        .footer-section-n8p3 p, .footer-section-n8p3 a {
            color: #bdc3c7;
            text-decoration: none;
            line-height: 1.8;
        }

        .footer-section-n8p3 a:hover {
            color: white;
        }

        .phone-link-m5r8 {
            color: #3498db !important;
            font-weight: bold;
        }

        .footer-bottom-q2w6 {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #34495e;
            color: #95a5a6;
        }

        .modal-overlay-h9j2 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-v6k8 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 40px;
            border-radius: 15px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-s3f7 {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 2rem;
            cursor: pointer;
            color: #e74c3c;
        }

        .size-guide-section-p8n5 {
            padding: 80px 20px;
            background: #f8f9fa;
        }

        .size-table-d4m1 {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .size-table-d4m1 th, .size-table-d4m1 td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ecf0f1;
        }

        .size-table-d4m1 th {
            background: #3498db;
            color: white;
        }

        @media (max-width: 768px) {
            .nav-menu-r3t7 {
                flex-direction: column;
                gap: 15px;
            }
            
            .hero-title-l2v6 {
                font-size: 2rem;
            }
            
            .nav-container-m4p2 {
                flex-direction: column;
                gap: 20px;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
	
</head>
<body>

    <header class="header-nav-x7k9">
        <nav class="nav-container-m4p2">
            <a href="#home" class="logo-brand-q8w5">ConnectiqHub</a>
            <ul class="nav-menu-r3t7">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#collections">Collections</a></li>
                <li><a href="#history">Our Story</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#sustainability">Sustainability</a></li>
                <li><a href="#size-guide">Size Guide</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero-section-b9n1">
        <div class="hero-content-f5j8">
            <h1 class="hero-title-l2v6">Welcome to ConnectiqHub</h1>
            <p class="hero-subtitle-k4s9">Your destination for trendy and comfortable women's fashion. Discover styles that express your unique personality and make every day special.</p>
            <a href="#collections" class="cta-button-z7x3">Click Here to Continue Shopping</a>
        </div>
    </section>

    <section id="about" class="about-section-d8h4">
        <div class="container-p6m2">
            <h2 class="section-title-w9q1">About ConnectiqHub</h2>
            <div class="about-grid-n5t8">
                <div class="about-card-j3r7">
                    <div class="card-icon-u8y4">👗</div>
                    <h3>Fashion Forward</h3>
                    <p>We curate the latest trends in women's fashion, bringing you styles that are both contemporary and timeless. Our team travels the world to find unique pieces that will make you stand out.</p>
                </div>
                <div class="about-card-j3r7">
                    <div class="card-icon-u8y4">🌟</div>
                    <h3>Quality First</h3>
                    <p>Every piece in our collection is carefully selected for its quality, comfort, and style. We believe that great fashion should feel as good as it looks.</p>
                </div>
                <div class="about-card-j3r7">
                    <div class="card-icon-u8y4">💝</div>
                    <h3>Customer Love</h3>
                    <p>Our customers are at the heart of everything we do. We're committed to providing exceptional service and helping you find pieces that make you feel confident and beautiful.</p>
                </div>
            </div>
            <div style="text-align: center;">
                <a href="#collections" class="cta-button-z7x3">Click Here to Continue Exploring</a>
            </div>
        </div>
    </section>

    <section id="collections" class="collections-section-a2v9">
        <div class="container-p6m2">
            <h2 class="section-title-w9q1">Our Collections</h2>
            <div class="collections-grid-h7k3">
                <div class="collection-item-s4f6">
                    <div class="collection-bg-e9r2" style="background-image: url('https://images.pexels.com/photos/1536619/pexels-photo-1536619.jpeg');">
                        <div class="collection-overlay-m1x8">
                            <h3>Casual Wear</h3>
                            <p>Comfortable everyday styles</p>
                        </div>
                    </div>
                </div>
                <div class="collection-item-s4f6">
                    <div class="collection-bg-e9r2" style="background-image: url('https://images.pexels.com/photos/1926769/pexels-photo-1926769.jpeg');">
                        <div class="collection-overlay-m1x8">
                            <h3>Work Attire</h3>
                            <p>Professional and polished</p>
                        </div>
                    </div>
                </div>
                <div class="collection-item-s4f6">
                    <div class="collection-bg-e9r2" style="background-image: url('https://images.pexels.com/photos/1040945/pexels-photo-1040945.jpeg');">
                        <div class="collection-overlay-m1x8">
                            <h3>Evening Wear</h3>
                            <p>Elegant pieces for special occasions</p>
                        </div>
                    </div>
                </div>
                <div class="collection-item-s4f6">
                    <div class="collection-bg-e9r2" style="background-image: url('https://images.pexels.com/photos/1381556/pexels-photo-1381556.jpeg');">
                        <div class="collection-overlay-m1x8">
                            <h3>Seasonal Favorites</h3>
                            <p>Trending styles for every season</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-section-c6b5">
        <div class="container-p6m2">
            <h2 class="section-title-w9q1">Our Journey</h2>
            <div class="timeline-container-v3n7">
                <div class="timeline-item-q9w4">
                    <div class="timeline-year-i5t2">2018</div>
                    <p>ConnectiqHub was founded with a simple mission: to make fashionable women's clothing accessible to everyone. Starting as a small online boutique, we focused on curating unique pieces from emerging designers.</p>
                </div>
                <div class="timeline-item-q9w4">
                    <div class="timeline-year-i5t2">2019</div>
                    <p>We expanded our collection to include workwear and casual pieces, responding to our customers' needs for versatile wardrobe options. Our customer base grew to over 10,000 satisfied shoppers.</p>
                </div>
                <div class="timeline-item-q9w4">
                    <div class="timeline-year-i5t2">2021</div>
                    <p>During the pandemic, we pivoted to focus on comfortable yet stylish pieces perfect for working from home. We also launched our sustainability initiative, partnering with eco-conscious brands.</p>
                </div>
                <div class="timeline-item-q9w4">
                    <div class="timeline-year-i5t2">2024</div>
                    <p>Today, ConnectiqHub serves thousands of women worldwide, offering a carefully curated selection of clothing that celebrates individuality and style. We continue to grow while maintaining our commitment to quality and customer satisfaction.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features-section-x8j6">
        <div class="container-p6m2">
            <h2 class="section-title-w9q1">Why Choose ConnectiqHub</h2>
            <div class="features-grid-l4p9">
                <div class="feature-box-r7s3">
                    <h3>🚚 Fast Shipping</h3>
                    <p>Get your orders delivered quickly with our expedited shipping options. Most orders ship within 24 hours.</p>
                </div>
                <div class="feature-box-r7s3">
                    <h3>🔄 Easy Returns</h3>
                    <p>Not satisfied? Return items within 30 days for a full refund. No questions asked, hassle-free process.</p>
                </div>
                <div class="feature-box-r7s3">
                    <h3>👥 Personal Styling</h3>
                    <p>Get personalized style recommendations from our fashion experts. Book a free consultation today.</p>
                </div>
                <div class="feature-box-r7s3">
                    <h3>🌍 Global Shipping</h3>
                    <p>We ship worldwide! Bringing the latest fashion trends to women everywhere, no matter where you are.</p>
                </div>
                <div class="feature-box-r7s3">
                    <h3>💳 Secure Payment</h3>
                    <p>Shop with confidence using our secure payment system. We accept all major credit cards and digital payments.</p>
                </div>
                <div class="feature-box-r7s3">
                    <h3>📱 Mobile App</h3>
                    <p>Shop on the go with our mobile app. Get exclusive app-only deals and early access to new collections.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="#reviews" class="cta-button-z7x3">Click Here to Continue Reading Reviews</a>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-k2m8">
        <div class="container-p6m2">
            <h2 class="section-title-w9q1">What Our Customers Say</h2>
            <div class="reviews-grid-f6n4">
                <div class="review-card-y9h1">
                    <div class="stars-rating-u3q6">⭐⭐⭐⭐⭐</div>
                    <p>"I absolutely love shopping at ConnectiqHub! The quality is amazing and the styles are always on-trend. I've received so many compliments on my outfits."</p>
                    <div class="reviewer-name-t5w7">- Sarah Johnson</div>
                </div>
                <div class="review-card-y9h1">
                    <div class="stars-rating-u3q6">⭐⭐⭐⭐⭐</div>
                    <p>"Fast shipping and excellent customer service. When I had an issue with sizing, they resolved it immediately. Will definitely shop here again!"</p>
                    <div class="reviewer-name-t5w7">- Maria Rodriguez</div>
                </div>
                <div class="review-card-y9h1">
                    <div class="stars-rating-u3q6">⭐⭐⭐⭐⭐</div>
                    <p>"The variety of styles is incredible. Whether I need something for work or a night out, I can always find the perfect piece here."</p>
                    <div class="reviewer-name-t5w7">- Emily Chen</div>
                </div>
                <div class="review-card-y9h1">
                    <div class="stars-rating-u3q6">⭐⭐⭐⭐⭐</div>
                    <p>"ConnectiqHub has become my go-to for all my fashion needs. The clothes are comfortable, stylish, and reasonably priced. Highly recommend!"</p>
                    <div class="reviewer-name-t5w7">- Jessica Williams</div>
                </div>
                <div class="review-card-y9h1">
                    <div class="stars-rating-u3q6">⭐⭐⭐⭐⭐</div>
                    <p>"I love how they stay current with fashion trends while still offering classic pieces. My wardrobe has never looked better!"</p>
                    <div class="reviewer-name-t5w7">- Amanda Davis</div>
                </div>
                <div class="review-card-y9h1">
                    <div class="stars-rating-u3q6">⭐⭐⭐⭐⭐</div>
                    <p>"The personal styling service is fantastic! They helped me find pieces that really suit my body type and lifestyle. Game changer!"</p>
                    <div class="reviewer-name-t5w7">- Rachel Thompson</div>
                </div>
            </div>
        </div>
    </section>

    <section id="sustainability" class="sustainability-section-g8v2">
        <div class="container-p6m2">
            <div class="sustainability-content-o4j9">
                <h2 class="section-title-w9q1">Our Commitment to Sustainability</h2>
                <p style="font-size: 1.2rem; margin-bottom: 30px;">At ConnectiqHub, we believe fashion should be beautiful inside and out. That's why we're committed to sustainable practices that protect our planet while delivering the styles you love.</p>
                <div style="text-align: left; max-width: 600px; margin: 0 auto;">
                    <h3 style="margin: 30px 0 15px;">🌱 Eco-Friendly Materials</h3>
                    <p>We partner with suppliers who use organic cotton, recycled fabrics, and sustainable materials in their production processes.</p>
                    
                    <h3 style="margin: 30px 0 15px;">♻️ Circular Fashion</h3>
                    <p>Our clothing exchange program allows customers to trade in gently used items for store credit, giving clothes a second life.</p>
                    
                    <h3 style="margin: 30px 0 15px;">📦 Minimal Packaging</h3>
                    <p>We use biodegradable packaging materials and minimize waste in our shipping processes.</p>
                    
                    <h3 style="margin: 30px 0 15px;">🤝 Ethical Production</h3>
                    <p>All our partner manufacturers adhere to fair labor practices and provide safe working conditions for their employees.</p>
                </div>
                <div style="margin-top: 40px;">
                    <a href="#size-guide" class="cta-button-z7x3">Click Here to Continue to Size Guide</a>
                </div>
            </div>
        </div>
    </section>

    <section id="size-guide" class="size-guide-section-p8n5">
        <div class="container-p6m2">
            <h2 class="section-title-w9q1">Size Guide</h2>
            <p style="text-align: center; margin-bottom: 30px; font-size: 1.1rem;">Find your perfect fit with our comprehensive size guide. All measurements are in inches.</p>
            
            <table class="size-table-d4m1">
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Bust</th>
                        <th>Waist</th>
                        <th>Hips</th>
                        <th>Length</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>XS</strong></td>
                        <td>32-34</td>
                        <td>24-26</td>
                        <td>34-36</td>
                        <td>26-27</td>
                    </tr>
                    <tr>
                        <td><strong>S</strong></td>
                        <td>34-36</td>
                        <td>26-28</td>
                        <td>36-38</td>
                        <td>27-28</td>
                    </tr>
                    <tr>
                        <td><strong>M</strong></td>
                        <td>36-38</td>
                        <td>28-30</td>
                        <td>38-40</td>
                        <td>28-29</td>
                    </tr>
                    <tr>
                        <td><strong>L</strong></td>
                        <td>38-40</td>
                        <td>30-32</td>
                        <td>40-42</td>
                        <td>29-30</td>
                    </tr>
                    <tr>
                        <td><strong>XL</strong></td>
                        <td>40-42</td>
                        <td>32-34</td>
                        <td>42-44</td>
                        <td>30-31</td>
                    </tr>
                    <tr>
                        <td><strong>XXL</strong></td>
                        <td>42-44</td>
                        <td>34-36</td>
                        <td>44-46</td>
                        <td>31-32</td>
                    </tr>
                </tbody>
            </table>
            
            <div style="background: white; padding: 30px; border-radius: 10px; margin-top: 30px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                <h3 style="color: #2c3e50; margin-bottom: 20px;">Measuring Tips</h3>
                <ul style="line-height: 2; color: #555;">
                    <li><strong>Bust:</strong> Measure around the fullest part of your chest</li>
                    <li><strong>Waist:</strong> Measure around your natural waistline</li>
                    <li><strong>Hips:</strong> Measure around the fullest part of your hips</li>
                    <li><strong>Length:</strong> Measure from shoulder to desired hem length</li>
                </ul>
                <p style="margin-top: 20px; font-style: italic; color: #666;">Still unsure about sizing? Contact our customer service team for personalized assistance!</p>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer-main-z1x5">
        <div class="container-p6m2">
            <div class="footer-grid-b7k4">
                <div class="footer-section-n8p3">
                    <h3>Contact Information</h3>
                    <p>📍 Address: 1247 Fashion Avenue, Style District, NY 10001</p>
                    <p>📧 Email: hello@connectiqhub.com</p>
                    <p>📞 Phone: <a href="tel:+15551234567" class="phone-link-m5r8">+1 (555) 123-4567</a></p>
                    <p>🕒 Hours: Mon-Fri 9AM-6PM EST</p>
                </div>
                <div class="footer-section-n8p3">
                    <h3>Customer Service</h3>
                    <p><a href="#" onclick="showModal('terms')">Terms of Service</a></p>
                    <p><a href="#" onclick="showModal('privacy')">Privacy Policy</a></p>
                    <p><a href="#">Shipping Information</a></p>
                    <p><a href="#">Return Policy</a></p>
                    <p><a href="#">Size Exchange</a></p>
                </div>
                <div class="footer-section-n8p3">
                    <h3>About ConnectiqHub</h3>
                    <p>Founded in 2018, ConnectiqHub has been dedicated to bringing you the latest in women's fashion. We believe every woman deserves to feel confident and beautiful in what she wears.</p>
                </div>
                <div class="footer-section-n8p3">
                    <h3>Follow Us</h3>
                    <p>Stay connected for the latest updates, style tips, and exclusive offers!</p>
                    <p>📱 Instagram: @connectiqhub</p>
                    <p>📘 Facebook: ConnectiqHub Fashion</p>
			                    <p>🐦 Twitter: @connectiqhub</p>
                    <p>📌 Pinterest: ConnectiqHub Style</p>
                </div>
            </div>
            <div class="footer-bottom-q2w6">
                <p>© 2024 ConnectiqHub. All rights reserved. | Designed with ❤️ for fashion lovers everywhere</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-h9j2">
        <div class="modal-content-v6k8">
            <span class="modal-close-s3f7" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Information We Collect</h3>
            <p>At ConnectiqHub, we collect information you provide directly to us, such as when you create an account, make a purchase, or contact us for support. This may include your name, email address, phone number, shipping address, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Process and fulfill your orders</li>
                <li>Communicate with you about your purchases</li>
                <li>Send you marketing communications (with your consent)</li>
                <li>Improve our website and services</li>
                <li>Comply with legal obligations</li>
            </ul>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted service providers who assist us in operating our website and conducting our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of marketing communications at any time by following the unsubscribe instructions in our emails.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at privacy@connectiqhub.com or call <a href="tel:+15551234567" class="phone-link-m5r8">+1 (555) 123-4567</a>.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-h9j2">
        <div class="modal-content-v6k8">
            <span class="modal-close-s3f7" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using the ConnectiqHub website, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
            
            <h3>Products and Services</h3>
            <p>ConnectiqHub provides an online platform for purchasing women's clothing and accessories. All product descriptions, images, and information are provided for general information purposes only.</p>
            
            <h3>Orders and Payment</h3>
            <p>When you place an order, you are making an offer to purchase the products. We reserve the right to accept or decline your order for any reason. Payment must be received before we process your order.</p>
            
            <h3>Shipping and Delivery</h3>
            <p>We will make every effort to deliver products within the estimated timeframe. However, delivery times are estimates and not guaranteed. Risk of loss and title for products pass to you upon delivery to the carrier.</p>
            
            <h3>Returns and Exchanges</h3>
            <p>We accept returns within 30 days of purchase for unworn items in original condition with tags attached. Return shipping costs are the responsibility of the customer unless the item was defective or incorrectly shipped.</p>
            
            <h3>Intellectual Property</h3>
            <p>All content on this website, including text, graphics, logos, images, and software, is the property of ConnectiqHub and is protected by copyright and other intellectual property laws.</p>
            
            <h3>Limitation of Liability</h3>
            <p>ConnectiqHub shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our products or services.</p>
            
            <h3>Governing Law</h3>
            <p>These terms shall be governed by and construed in accordance with the laws of New York State, without regard to its conflict of law provisions.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these Terms of Service, please contact us at legal@connectiqhub.com or call <a href="tel:+15551234567" class="phone-link-m5r8">+1 (555) 123-4567</a>.</p>
        </div>
    </div>

    <script>
        // Modal functionality
        function showModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-h9j2')) {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some interactive elements
        document.querySelectorAll('.collection-item-s4f6').forEach(item => {
            item.addEventListener('click', function() {
                alert('Explore this collection! Contact us for more details about these styles.');
            });
        });

        // Add click tracking for CTA buttons
        document.querySelectorAll('.cta-button-z7x3').forEach(button => {
            button.addEventListener('click', function(e) {
                // This would typically send analytics data
                console.log('CTA clicked:', this.textContent);
            });
        });

        // Simple form validation for contact
        function validateContact() {
            // This would handle contact form validation
            return true;
        }

        // Newsletter signup functionality
        function subscribeNewsletter(email) {
            if (email && email.includes('@')) {
                alert('Thank you for subscribing to our newsletter!');
                return true;
            }
            alert('Please enter a valid email address.');
            return false;
        }

        // Size guide calculator
        function calculateSize(bust, waist, hips) {
            // Simple size calculation logic
            if (bust <= 34 && waist <= 26 && hips <= 36) return 'XS';
            if (bust <= 36 && waist <= 28 && hips <= 38) return 'S';
            if (bust <= 38 && waist <= 30 && hips <= 40) return 'M';
            if (bust <= 40 && waist <= 32 && hips <= 42) return 'L';
            if (bust <= 42 && waist <= 34 && hips <= 44) return 'XL';
            return 'XXL';
        }

        // Add loading animation for images
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.addEventListener('load', function() {
                    this.style.opacity = '1';
                });
            });
        });

        // Mobile menu toggle (if needed)
        function toggleMobileMenu() {
            const menu = document.querySelector('.nav-menu-r3t7');
            menu.classList.toggle('mobile-active');
        }

        // Search functionality placeholder
        function searchProducts(query) {
            console.log('Searching for:', query);
            // This would implement actual search functionality
        }

        // Wishlist functionality
        function addToWishlist(productId) {
            console.log('Added to wishlist:', productId);
            alert('Item added to your wishlist!');
        }

        // Shopping cart functionality
        function addToCart(productId, size, quantity = 1) {
            console.log('Added to cart:', productId, size, quantity);
            alert('Item added to your shopping cart!');
        }

        // Color/size selection
        function selectOption(type, value) {
            console.log('Selected', type + ':', value);
            // Update UI to show selected option
        }

        // Product comparison
        function compareProducts(productIds) {
            console.log('Comparing products:', productIds);
            // This would show product comparison
        }

        // Recently viewed products
        function trackProductView(productId) {
            let recentlyViewed = JSON.parse(localStorage.getItem('recentlyViewed') || '[]');
            if (!recentlyViewed.includes(productId)) {
                recentlyViewed.unshift(productId);
                recentlyViewed = recentlyViewed.slice(0, 10); // Keep only last 10
                localStorage.setItem('recentlyViewed', JSON.stringify(recentlyViewed));
            }
        }

        // Style quiz functionality
        function startStyleQuiz() {
            alert('Our style quiz will help you discover your perfect look! Contact us to get started.');
        }

        // Virtual try-on
        function startVirtualTryOn() {
            alert('Virtual try-on feature coming soon! Sign up for our newsletter to be notified.');
        }

        // Social sharing
        function shareProduct(platform, productUrl) {
            const shareUrls = {
                facebook: `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(productUrl)}`,
                twitter: `https://twitter.com/intent/tweet?url=${encodeURIComponent(productUrl)}`,
                pinterest: `https://pinterest.com/pin/create/button/?url=${encodeURIComponent(productUrl)}`
            };
            
            if (shareUrls[platform]) {
                window.open(shareUrls[platform], '_blank', 'width=600,height=400');
            }
        }

        // Gift card functionality
        function purchaseGiftCard(amount) {
            console.log('Gift card purchase:', amount);
            alert('Gift card functionality - contact us for gift card purchases!');
        }

        // Loyalty program
        function checkLoyaltyPoints(customerId) {
            console.log('Checking loyalty points for:', customerId);
            // This would check customer loyalty points
        }

        // Live chat simulation
        function startLiveChat() {
            alert('Live chat is currently offline. Please email us at hello@connectiqhub.com or call +1 (555) 123-4567');
        }

        // Appointment booking
        function bookStylingAppointment() {
            alert('Book your personal styling appointment! Call us at +1 (555) 123-4567 to schedule.');
        }

        // Inventory notifications
        function notifyWhenAvailable(productId, email) {
            console.log('Notify when available:', productId, email);
            alert('We\'ll notify you when this item is back in stock!');
        }

        // Size exchange request
        function requestSizeExchange(orderId, newSize) {
            console.log('Size exchange request:', orderId, newSize);
            alert('Size exchange request submitted! We\'ll contact you within 24 hours.');
        }

        // Bulk order inquiry
        function inquireBulkOrder() {
            alert('For bulk orders, please contact us at wholesale@connectiqhub.com or call +1 (555) 123-4567');
        }

        // Accessibility features
        function toggleHighContrast() {
            document.body.classList.toggle('high-contrast');
        }

        function increaseFontSize() {
            document.body.style.fontSize = (parseFloat(getComputedStyle(document.body).fontSize) + 2) + 'px';
        }

        function decreaseFontSize() {
            document.body.style.fontSize = (parseFloat(getComputedStyle(document.body).fontSize) - 2) + 'px';
        }

        // Error handling
        window.addEventListener('error', function(e) {
            console.log('Error caught:', e.error);
            // This would typically send error reports to analytics
        });

        // Performance monitoring
        window.addEventListener('load', function() {
            const loadTime = performance.now();
            console.log('Page loaded in:', loadTime, 'ms');
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
	
</body>
</html>


