<?php
if (!isset($base_path)) {
    $base_path = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
// Default SEO values if not provided by the page
$page_title = isset($seo_title) ? $seo_title : 'REDDY ANNA BOOK - Premium Sports & Casino Betting';
$page_description = isset($seo_desc) ? $seo_desc : 'Join the ultimate sports and casino platform. Live odds, premium gaming, and instant betting access.';
$page_keywords = isset($seo_keywords) ? $seo_keywords : 'Reddy Anna Book, Reddy Anna, Reddyanna, Reddy Anna Login, Reddy Anna Book Login, Reddy Anna Club, Reddy Anna Betting, Reddy Anna Online Book Id, Reddy Anna ID, Reddy Anna Book ID, Reddy Anna Online Book, Reddy Anna Book Number, Anna Reddy Book, Reddy Anna Online Book Number, Reddy Anna Bookie, Reddybook.club, Reddy Anna Club, Reddy Anna Pro, Reddy Anna App, reddy anna online, ready anna, anna reddy, anna reddy book, reddy anna website, reddyanna book, reddy anna booking, reddyannaofficial, reddy anna contact number, Reddybook';
$page_url = isset($seo_url) ? $seo_url : 'https://reddyannabook.example.com';
?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta name="google-site-verification" content="o5LE6m1roBVTzrNvv43ziDZAJ8m2TUpL5XWoflNNtqg" />
    
    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($page_url); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="<?php echo $base_path; ?>assets/seo_image.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo htmlspecialchars($page_url); ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="twitter:image" content="<?php echo $base_path; ?>assets/seo_image.png">
    
    <!-- Canonical Link -->
    <link rel="canonical" href="<?php echo htmlspecialchars($page_url); ?>" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $base_path; ?>style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $base_path; ?>assets/favicon.png">

    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://reddyannaofficialss.com/#organization",
          "name": "Reddy Anna Book",
          "url": "https://reddyannaofficialss.com/",
          "logo": {
            "@type": "ImageObject",
            "url": "https://reddyannaofficialss.com/assets/logo.png"
          },
          "description": "India's most trusted and rapidly growing online betting exchange."
        },
        {
          "@type": "WebSite",
          "@id": "https://reddyannaofficialss.com/#website",
          "url": "https://reddyannaofficialss.com/",
          "name": "Reddy Anna Book",
          "publisher": {
            "@id": "https://reddyannaofficialss.com/#organization"
          }
        },
        {
          "@type": "WebPage",
          "@id": "<?php echo htmlspecialchars($page_url); ?>#webpage",
          "url": "<?php echo htmlspecialchars($page_url); ?>",
          "name": "<?php echo htmlspecialchars($page_title); ?>",
          "isPartOf": {
            "@id": "https://reddyannaofficialss.com/#website"
          },
          "description": "<?php echo htmlspecialchars($page_description); ?>"
        }
      ]
    }
    </script>
</head>

<body>

    <!-- Top Notification Bar -->
    <div class="top-bar">
        <marquee behavior="scroll" direction="left" scrollamount="6">
            🎉 Welcome to REDDY ANNA BOOK! Get 100% Welcome Bonus on your first deposit! 🏏 Live Cricket Betting is now
            Open! 🎰 Join our Live Casino Tournaments today!
        </marquee>
    </div>

    <!-- Header / Navbar -->
    <header class="header">
        <div class="container header-container">
            <a href="<?php echo $base_path; ?>index.php" class="logo">
                <img src="<?php echo $base_path; ?>assets/logo.jpeg" alt="REDDY ANNA BOOK Logo" class="logo-img">
            </a>

            <nav class="nav-menu">
                <ul class="nav-links">
                    <li><a href="<?php echo $base_path; ?>index.php" class="active"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><a href="<?php echo $base_path; ?>blog/index.php"><i class="fa-solid fa-blog"></i> Blog</a></li>
                    <li><a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-headset"></i> Support</a></li>
                </ul>
            </nav>

            <div class="auth-buttons" style="display: flex; gap: 10px; align-items: center;">
                <a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="padding: 10px 20px; font-size: 14px;">Login</a>
                <a href="https://wa.me/917044211394" target="_blank" rel="noopener noreferrer" class="btn btn-primary glowing-btn" style="padding: 10px 20px; font-size: 14px;">Signup</a>
                <button class="mobile-menu-btn"><i class="fa-solid fa-bars"></i></button>
            </div>
        </div>
    </header>
