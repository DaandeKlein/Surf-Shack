<!DOCTYPE html>

<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Surf Shack</title>
        <link rel="stylesheet" href="index.css">
        <style>
            p {
                color: white;
                font-size: 28px;
                text-align: left;
                padding-left: 70px;
            }
            #overons {
                padding-top: 30px;
            }
            #bericht {
                padding-top: 0px;
            }
            .mySlides {
                display:none;
                padding-left: 850px;
                margin-top: -170px;
            }
        </style>
    </head>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" class="nav">Home</a></li>
                <li><a href="contact.php" class="nav">Contact</a></li>
                <li><a href="surfboarden.php" class="nav">Surfboarden</a></li>
                <li><a href="itemshop.php" class="nav">Item Shop</a></li>
                <li><a href="surflessen.php" class="nav">Surflessen</a></li>
                <li><a href="surfticket.php" class="nav">Surfticket</a></li>
                <li><a href="info.php" class="nav">Info</a></li>
                <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" id="winkelwagen" target="blank_"><img src="winkelwagen.png" alt="winkelwagen" height="40px" width="40px" class="nav"> </a></li>
            </ul>
        </nav>
    </header>
<body>
        <p id="overons">Welkom bij Surf Shack.<br />Op onze website is er van alles te doen.<br />U kunt hier surfboarden bestellen,<br /> surflessen volgen en nog veel meer</p>

            <div class="w3-content w3-section" style="max-width:500px">
                <img class="mySlides" src="surfboard1.jpg" style="width:100%">
                <img class="mySlides" src="surfboard2.jpg" style="width:100%">
            </div>
        <?php
        // bericht van de dag generator
        $random = rand(0,4);
        $berichten = array ("test1", "test2", "test3", "test4", "test5");
        echo "<p id='bericht'> Bericht van de dag: $berichten[$random] </p>";

        ?>
        <script>
            // java script voor de plaatjes
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 4000); // veranderd plaatje elke 4 seconden
            }
        </script>

</body>
</html>