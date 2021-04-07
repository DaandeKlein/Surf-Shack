<?php include 'sendmail.php'; ?>
<!DOCTYPE html>

<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Surf Shack</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<header>
    <div id="logo">
        <img src="logo.png" alt="het logo">
    </div>
    <div class="menu">
        <nav>
            <ul>
                <li><a href="index.php" class="nav">Home</a></li>
                <li><a href="contact.php" class="nav">Contact</a></li>
                <li><a href="surfboarden.php" class="nav">Surfboarden</a></li>
                <li><a href="itemshop.php" class="nav">Item Shop</a></li>
                <li><a href="surflessen.php" class="nav">Surflessen</a></li>
                <li><a href="surfticket.php" class="nav">Surfticket</a></li>
                <li><a href="info.php" class="nav">Info</a></li>

            </ul>
            <div id="winkelwagen">
                <a href="winkelwagen.php" id="winkelwagen"><img src="winkelwagen.png" alt="winkelwagen"></a>
            </div>
        </nav>
    </div>

</header>
<body>
<br><br><br><br><br><br><br>
<!--alert messages start-->
<?php echo $alert; ?>
<!--alert messages end-->

<!--contact section start-->
<div class="contact-section">
    <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Address, City, Country</div>
        <div><i class="fas fa-envelope"></i>contact@email.com</div>
        <div><i class="fas fa-phone"></i>+00 0000 000 000</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
    </div>
    <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
            <input type="text" name="name" class="text-box" placeholder="Your Name" required>
            <input type="email" name="email" class="text-box" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
    </div>
</div>
<!--contact section end-->

<script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</body>


</html>