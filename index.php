<?php
if ($_SERVER['REQUEST_URI'] == '/index.php' || strpos($_SERVER['REQUEST_URI'], '/index.php?') === 0) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /");
    exit();
}
$seo_title = 'Reddy Anna Book & ID | Official Website';
$seo_desc = 'Explore Reddy Anna Book information, account details, sports and casino content. Check the latest information on our official website.';
$seo_keywords = 'Reddy Anna Book, Reddy Anna, Reddyanna, Reddy Anna Login, Reddy Anna Book Login, Reddy Anna Club, Reddy Anna Betting, Reddy Anna Online Book Id, Reddy Anna ID, Reddy Anna Book ID, Reddy Anna Online Book, Reddy Anna Book Number, Anna Reddy Book, Reddy Anna Online Book Number, Reddy Anna Bookie, Reddybook.club, Reddy Anna Club, Reddy Anna Pro, Reddy Anna App, reddy anna online, ready anna, anna reddy, anna reddy book, reddy anna website, reddyanna book, reddy anna booking, reddyannaofficial, reddy anna contact number, Reddybook';
$seo_url = 'https://reddyannabook.example.com/';
include 'header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg">
        <img src="<?php echo isset($base_path) ? $base_path : ''; ?>assets/hero_banner.png" alt="Hero Background">
    </div>
    <div class="hero-content container">
        <h1 class="hero-title">Experience the Ultimate <br><span class="text-gradient">Betting Platform</span></h1>
        <p class="hero-subtitle">Live Sports, Thrilling Casino Games, and Instant Withdrawals.</p>
        <div class="hero-cta">
            <a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer"
                class="btn btn-primary btn-large glowing-btn">GET REDDY ANNA BOOK ID</a>
            <a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer"
                class="btn btn-secondary btn-large">View Live Odds</a>
        </div>
    </div>
</section>

<!-- Promo Banners & Live Matches -->
<div class="promo-live-section container">
    <div class="promo-grid">
        <a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer" class="promo-card">
            <img src="<?php echo isset($base_path) ? $base_path : ''; ?>assets/promo_fun_games.png" alt="Fun Games">
        </a>
        <a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer" class="promo-card">
            <img src="<?php echo isset($base_path) ? $base_path : ''; ?>assets/promo_color_prediction.png"
                alt="Color Prediction">
        </a>
        <a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer" class="promo-card">
            <img src="<?php echo isset($base_path) ? $base_path : ''; ?>assets/promo_aviator.png" alt="Aviator">
        </a>
        <a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer" class="promo-card">
            <img src="<?php echo isset($base_path) ? $base_path : ''; ?>assets/promo_evoplay.png" alt="Evoplay">
        </a>
    </div>

    <div class="contact-banner">
        <p>If you do not have an account please contact <a href="https://wa.me/917044211394" target="_blank"
                rel="noopener noreferrer" class="whatsapp-icon-link"><i class="fa-brands fa-whatsapp"></i></a></p>
    </div>

    <div class="home-live-matches">
        <div class="odds-tabs">
            <button class="tab-btn active-tab">Cricket</button>
            <button class="tab-btn">Live</button>
            <button class="tab-btn">Signup</button>
        </div>
        <div class="odds-header-row">
            <div class="odds-col-match"></div>
            <div class="odds-col-1">1</div>
            <div class="odds-col-x">X</div>
            <div class="odds-col-2">2</div>
        </div>
        <div class="odds-match-row">
            <div class="odds-col-match">
                <span class="match-time">28-02-2025 01:30 PM</span>
                <strong>BRISBANE HEAT T10 VS SYDNEY SIXERS T10</strong>
                <span class="match-status"><span class="live-dot"></span> BM</span>
            </div>
            <div class="odds-col-1">
                <div class="back-box">-</div>
                <div class="lay-box">-</div>
            </div>
            <div class="odds-col-x">
                <div class="back-box">-</div>
                <div class="lay-box">-</div>
            </div>
            <div class="odds-col-2" style="position:relative;">
                <div class="back-box">-</div>
                <div class="lay-box">-</div>
            </div>
        </div>
        <div class="odds-match-row">
            <div class="odds-col-match">
                <span class="match-time">28-02-2025 02:30 PM</span>
                <strong>SOUTH AFRICA T10 VS NEW ZEALAND T10</strong>
                <span class="match-status"><span class="live-dot"></span> BM</span>
            </div>
            <div class="odds-col-1">
                <div class="back-box">-</div>
                <div class="lay-box">-</div>
            </div>
            <div class="odds-col-x">
                <div class="back-box">-</div>
                <div class="lay-box">-</div>
            </div>
            <div class="odds-col-2">
                <div class="back-box">-</div>
                <div class="lay-box">-</div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<main class="main-content container">

    <!-- Categories -->
    <section class="categories-section">
        <h2 class="section-title">Explore Categories</h2>
        <div class="category-grid">
            <div class="category-card">
                <div class="cat-icon"><i class="fa-solid fa-baseball-bat-ball"></i></div>
                <h3>Cricket</h3>
                <p>Live matches & odds</p>
            </div>
            <div class="category-card">
                <div class="cat-icon"><i class="fa-solid fa-futbol"></i></div>
                <h3>Football</h3>
                <p>Top leagues available</p>
            </div>
            <div class="category-card">
                <div class="cat-icon"><i class="fa-solid fa-table-tennis-paddle-ball"></i></div>
                <h3>Tennis</h3>
                <p>Grand slams live</p>
            </div>
            <div class="category-card">
                <div class="cat-icon"><i class="fa-solid fa-dice-d20"></i></div>
                <h3>Live Casino</h3>
                <p>Roulette, Poker & more</p>
            </div>
        </div>
    </section>

    <!-- What Is Reddy Anna Book ID Section -->
    <section class="info-section">
        <div class="info-flex-container">
            <div class="info-text-content">
                <h2 class="gold-heading">What Is Reddy Anna Book ID?</h2>

                <p class="info-text">
                    A <a href="https://reddyannaofficialss.com/" class="gold-text" style="text-decoration: none;"
                        target="_blank">ReddyAnnaBook ID</a> acts as your digital key to access all betting
                    and gaming features on the platform. Through your ID, you can place bets, deposit funds,
                    withdraw winnings, and explore exclusive bonus offers.
                </p>

                <p class="info-text">
                    Verified IDs also ensure you play on a secure and legal platform. The verification process adds
                    an extra layer of trust, so every bettor can experience transparency, fair play, and complete
                    data protection while enjoying the action.
                </p>

                <div class="info-action">
                    <a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer"
                        class="whatsapp-glow-btn">
                        <i class="fa-brands fa-whatsapp"></i> Get Reddy Anna ID
                    </a>
                </div>
            </div>

            <div class="info-image-container">
                <img src="<?php echo isset($base_path) ? $base_path : ''; ?>assets/seo_image.png"
                    alt="What Is Reddy Anna Book ID" class="info-image-border">
            </div>
        </div>
        </div>
    </section>

    <!-- Features Grid Section -->
    <section class="features-grid-section">
        <div class="features-header">
            <h2 class="gold-heading" style="font-size:28px;">Why Reddy Anna Book Is the Best Choice for Online
                Betting</h2>
            <p class="features-subtitle" style="max-width: 900px; margin: 0 auto; line-height: 1.8; color: #ccc;">
                Welcome to <strong><a href="https://reddyannaofficialss.com/" class="gold-text"
                        style="text-decoration: none;" target="_blank">Reddy Anna Book</a></strong>, India's most
                trusted and rapidly growing online betting
                exchange. Whether you are a hardcore cricket fan looking for live match odds or a casino enthusiast
                seeking the thrill of live dealer games, we have got you covered. We pride ourselves on offering a
                seamless, secure, and highly rewarding betting experience. With cutting-edge technology, instant
                transactions, and round-the-clock customer support, we ensure that every player gets the VIP
                treatment they deserve. Discover why thousands of punters choose <a
                    href="https://reddyannaofficialss.com/" class="gold-text" style="text-decoration: none;"
                    target="_blank">Reddy Anna Book</a> as their primary
                platform for winning big:</p>
        </div>

        <div class="cards-grid">
            <div class="feature-card">
                <div class="card-icon">
                    <i class="fa-solid fa-bolt" style="color:#fcb900;"></i>
                </div>
                <h3 style="color:#fcb900; font-size: 18px; margin-bottom:10px;">Lightning Fast IDs</h3>
                <p style="font-size: 14px; color: #ccc;">Experience instant ID generation without any delays. Start
                    placing your bets in under 2 minutes with our automated system.</p>
            </div>
            <div class="feature-card">
                <div class="card-icon">
                    <i class="fa-solid fa-shield-halved" style="color:#00d084;"></i>
                </div>
                <h3 style="color:#00d084; font-size: 18px; margin-bottom:10px;">100% Secure & Trusted</h3>
                <p style="font-size: 14px; color: #ccc;">Your data and funds are protected with bank-grade
                    encryption. We guarantee a safe and transparent betting environment.</p>
            </div>
            <div class="feature-card">
                <div class="card-icon">
                    <i class="fa-solid fa-hand-holding-dollar" style="color:#ffcc00;"></i>
                </div>
                <h3 style="color:#ffcc00; font-size: 18px; margin-bottom:10px;">Instant Withdrawals</h3>
                <p style="font-size: 14px; color: #ccc;">Say goodbye to waiting. We offer 24/7 automated withdrawal
                    services directly to your bank account via UPI or IMPS.</p>
            </div>
            <div class="feature-card">
                <div class="card-icon">
                    <i class="fa-solid fa-arrow-trend-up" style="color:#4a90e2;"></i>
                </div>
                <h3 style="color:#4a90e2; font-size: 18px; margin-bottom:10px;">Best Market Odds</h3>
                <p style="font-size: 14px; color: #ccc;">We provide the most competitive odds and lowest margins in
                    the industry for Cricket, Football, and live casino games.</p>
            </div>
            <div class="feature-card">
                <div class="card-icon">
                    <i class="fa-solid fa-gift" style="color:#fcb900;"></i>
                </div>
                <h3 style="color:#fcb900; font-size: 18px; margin-bottom:10px;">Massive Bonuses</h3>
                <p style="font-size: 14px; color: #ccc;">New users receive an exclusive welcome bonus on their first
                    deposit, plus ongoing cashback offers and loyalty rewards.</p>
            </div>
            <div class="feature-card">
                <div class="card-icon">
                    <i class="fa-solid fa-headset" style="color:#00d084;"></i>
                </div>
                <h3 style="color:#00d084; font-size: 18px; margin-bottom:10px;">24/7 Expert Support</h3>
                <p style="font-size: 14px; color: #ccc;">Our dedicated support team is available round the clock on
                    WhatsApp and Live Chat to assist you with any queries instantly.</p>
            </div>
        </div>

        <div class="features-footer">
            <p>With your <a href="https://reddyannaofficialss.com/" class="gold-text" style="text-decoration: none;"
                    target="_blank">ReddyAnnaBook ID</a>, you get access to premium features, personalized betting
                offers, and
                guaranteed payouts. It's a platform built for winners who value security and excitement.</p>
            <div class="features-action">
                <a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer" class="neon-border-btn"
                    style="text-decoration: none; display: inline-block;">Ready to Bet? Start Here!</a>
            </div>
        </div>
    </section>
    <!-- How to Create ID Section -->
    <section class="steps-section">
        <div class="steps-header">
            <h2 class="section-title" style="justify-content: center;">How to Get Your Betting ID</h2>
            <p>Start your betting journey in 3 simple steps</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-number">1</div>
                <div class="step-icon"><i class="fa-brands fa-whatsapp"></i></div>
                <h3>Message Us</h3>
                <p>Click on the WhatsApp button to message our 24/7 customer support team.</p>
            </div>
            <div class="step-card">
                <div class="step-number">2</div>
                <div class="step-icon"><i class="fa-solid fa-id-card"></i></div>
                <h3>Get Your ID</h3>
                <p>Deposit your preferred amount and receive your unique Reddy Anna ID instantly.</p>
            </div>
            <div class="step-card">
                <div class="step-number">3</div>
                <div class="step-icon"><i class="fa-solid fa-gamepad"></i></div>
                <h3>Start Playing</h3>
                <p>Log in, explore live sports or casino games, and start winning big!</p>
            </div>
        </div>
    </section>

    <!-- Premium Casino Section -->
    <section class="casino-section">
        <div class="casino-card-premium">
            <div class="casino-info">
                <h2>Live Dealer Casino</h2>
                <p>Experience the thrill of a real casino from your home. Play Blackjack, Roulette, Baccarat, and
                    more with our live dealers 24/7.</p>
                <a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer"
                    class="btn btn-primary glowing-btn">Play Now</a>
            </div>
            <div class="casino-graphic">
                <img src="<?php echo isset($base_path) ? $base_path : ''; ?>assets/live_casino.png"
                    alt="Live Dealer Casino">
            </div>
        </div>
    </section>

    <!-- Security Measures Section -->
    <section class="security-section"
        style="background: #2a2c31; padding: 60px 40px; margin-top: 80px; border-radius: 12px;">
        <div class="container">
            <div class="security-header" style="text-align: center; margin-bottom: 40px;">
                <h2 class="gold-heading" style="font-size: 26px; margin-bottom: 20px;">Major Security Measures
                    Implemented by Reddy Anna Book</h2>
                <p style="color: #fff; max-width: 900px; margin: 0 auto; line-height: 1.8; font-size: 15px;">
                    Security is one of the most important considerations on <a href="https://reddyannaofficialss.com/"
                        class="gold-text" style="text-decoration: none;" target="_blank">Reddy Anna Book</a> so that the
                    user can
                    make bets, play and handle funds without any form of insecurity. The platform implements modern
                    technologies and comprehensive measures to guard accounts, transactions, and personal
                    information.</p>
                <h3 class="gold-heading" style="font-size: 20px; margin-top: 35px;">Types of Security Measures</h3>
            </div>

            <div class="security-grid">
                <div class="security-card">
                    <div class="sec-icon"><i class="fa-solid fa-lock" style="color: #fcb900;"></i></div>
                    <div class="sec-content">
                        <h4>SSL Encryption:</h4>
                        <p>All user data, including deposits, withdrawals, and personal details, are protected with
                            256-bit SSL encryption, preventing unauthorized access.</p>
                    </div>
                </div>
                <div class="security-card">
                    <div class="sec-icon">
                        <i class="fa-solid fa-fingerprint" style="color: #4a90e2; font-size: 30px;"></i>
                        <i class="fa-solid fa-triangle-exclamation"
                            style="color: #fcb900; font-size: 14px; position: absolute; margin-left: -10px; margin-top: 15px;"></i>
                    </div>
                    <div class="sec-content">
                        <h4>Two-Factor Authentication (2FA)</h4>
                        <p>Adds an extra layer of security by requiring a verification code via SMS or email during
                            login or withdrawals.</p>
                    </div>
                </div>
                <div class="security-card">
                    <div class="sec-icon"><i class="fa-solid fa-money-check-dollar" style="color: #00d084;"></i>
                    </div>
                    <div class="sec-content">
                        <h4>Secure Payment Gateways</h4>
                        <p>All deposits and withdrawals are processed through trusted and verified payment channels,
                            ensuring safe transactions.</p>
                    </div>
                </div>
                <div class="security-card">
                    <div class="sec-icon">
                        <i class="fa-solid fa-file" style="color: #4a90e2; font-size: 30px;"></i>
                        <i class="fa-solid fa-shield"
                            style="color: #fcb900; font-size: 14px; position: absolute; margin-left: -10px; margin-top: 15px;"></i>
                    </div>
                    <div class="sec-content">
                        <h4>Data Privacy Protocols</h4>
                        <p>User information is stored securely, complying with privacy standards and never shared
                            with third parties.</p>
                    </div>
                </div>
                <div class="security-card">
                    <div class="sec-icon"><i class="fa-solid fa-shield-halved" style="color: #00d084;"></i></div>
                    <div class="sec-content">
                        <h4>Regular Security Audits</h4>
                        <p>The platform undergoes frequent internal and external audits to identify and fix
                            vulnerabilities.</p>
                    </div>
                </div>
                <div class="security-card">
                    <div class="sec-icon">
                        <i class="fa-solid fa-shield" style="color: #ff4d4d; font-size: 30px;"></i>
                        <i class="fa-solid fa-xmark"
                            style="color: #fff; font-size: 16px; position: absolute; margin-left: -20px; margin-top: 7px;"></i>
                    </div>
                    <div class="sec-content">
                        <h4>Account Monitoring & Alerts</h4>
                        <p>Suspicious activity triggers instant alerts helping users prevent fraud or unauthorized
                            access.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="faq-section" style="margin-top: 80px;">
        <h2 class="section-title" style="justify-content: center;">Frequently Asked Questions</h2>
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">What is Reddy Anna Book? <i class="fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Reddy Anna Book is India's most trusted online platform for sports betting and live casino
                        games, offering a secure and seamless gaming experience.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How do I get my Reddy Anna ID? <i
                        class="fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Getting your ID is simple! Just click the 'Message Us' WhatsApp button, send us a text, and
                        our support team will generate your ID instantly.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Is it safe to bet on Reddy Anna Book? <i
                        class="fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Yes, absolutely. We use the highest level of SSL encryption to protect your data, and all
                        transactions are 100% secure.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">What is the minimum deposit amount? <i
                        class="fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>The minimum deposit amount is very low, making it accessible for everyone. Please check with
                        our WhatsApp support for the latest deposit limits.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How fast are the withdrawals? <i
                        class="fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>We offer instant 24/7 withdrawals. Once you place a withdrawal request, the money reflects in
                        your bank account almost immediately.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do you offer a welcome bonus? <i
                        class="fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Yes, all new users are eligible for a 100% welcome bonus on their first deposit. Terms and
                        conditions apply.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Which sports can I bet on? <i
                        class="fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>You can bet on a wide variety of sports including Cricket (IPL, World Cup), Football, Tennis,
                        Basketball, and many more live events.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Are live casino games available 24/7? <i
                        class="fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Yes, our live dealer casino is open 24/7. You can enjoy Roulette, Blackjack, Baccarat, and
                        Poker anytime, anywhere.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Is my personal information secure? <i
                        class="fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>Your privacy is our priority. We do not share your personal or financial information with any
                        third parties.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">What do I do if I forget my password? <i
                        class="fa-solid fa-chevron-down"></i></button>
                <div class="faq-answer">
                    <p>If you forget your password, simply contact our 24/7 WhatsApp support team, and they will
                        assist you in resetting it securely.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Blogs Section -->
    <section class="blogs-section" style="margin-top: 80px; margin-bottom: 80px;">
        <h2 class="section-title" style="justify-content: center;">Recent Blogs & Betting Tips</h2>
        <div class="blogs-grid">
            <div class="blog-card">
                <div class="blog-img"
                    style="background-image: url('https://images.unsplash.com/photo-1540747913346-19e32dc3e97e?q=80&w=600&auto=format&fit=crop');">
                </div>
                <div class="blog-content">
                    <span class="blog-date">August 15, 2026</span>
                    <h3>Top 5 Tips for IPL Betting Success</h3>
                    <p>Discover the best strategies and insights to maximize your winnings during the upcoming IPL
                        season.</p>
                    <a href="blog.html#ipl-tips" class="blog-read-more">Read More <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog-img"
                    style="background-image: url('<?php echo isset($base_path) ? $base_path : ''; ?>assets/football_blog.png');">
                </div>
                <div class="blog-content">
                    <span class="blog-date">August 12, 2026</span>
                    <h3>Understanding Football Asian Handicap</h3>
                    <p>New to football betting? Learn how Asian Handicap works and why it offers some of the best
                        value for punters.</p>
                    <a href="blog.html#asian-handicap" class="blog-read-more">Read More <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog-img"
                    style="background-image: url('https://images.unsplash.com/photo-1596838132731-3301c3fd4317?q=80&w=600&auto=format&fit=crop');">
                </div>
                <div class="blog-content">
                    <span class="blog-date">August 10, 2026</span>
                    <h3>How to Win Big at Live Roulette</h3>
                    <p>Explore proven betting systems and bankroll management techniques for our Live Dealer
                        Roulette tables.</p>
                    <a href="blog.html#roulette-tips" class="blog-read-more">Read More <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>