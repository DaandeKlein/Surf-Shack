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
                padding-top: 140px;
            }
        </style>
        <script type="text/javascript">
            $(function () {
                $('.fadein img:gt(0)').hide();
                setInterval(function () {
                    $('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');
                }, 2000);
            });
        </script>
    </head>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" class="nav">Home</a></li>
                <li><a href="#" class="nav">Contact</a></li>
                <li><a href="#" class="nav">Surfboarden</a></li>
                <li><a href="#" class="nav">Item Shop</a></li>
                <li><a href="#" class="nav">Surflessen</a></li>
                <li><a href="#" class="nav">Surfticket</a></li>
                <li><a href="#" class="nav">Info</a></li>
                <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" id="winkelwagen" target="blank_"><img src="winkelwagen.png" alt="winkelwagen" height="40px" width="40px" class="nav"> </a></li>
            </ul>
        </nav>
    </header>
<body>
    <p id="overons">Welkom bij Surf Shack.<br />Op onze website is er van alles te doen.<br />U kunt hier surfboarden bestellen,<br /> surflessen volgen en nog veel meer</p>
    <p id="bericht"> Bericht van de dag: </p>
</body>
</html>