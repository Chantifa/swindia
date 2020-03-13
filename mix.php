<?php include('formtours.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SwIndia Tours – Taxi Services and Tour Bookings</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-29354477-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-29354477-2', { 'optimize_id': 'GTM-NVK5K9R'});
    </script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-34038602-2"></script>
    <!-- Google AdSense wurde hier hinzugefügt-->
    <script data-ad-client="ca-pub-1468017671046742" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-34038602-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-34038602-2');
    </script>

</head>
<body>

<div id="topbar">  <img src="img/logo.png" class="img_logo" alt="SwIndiaTours" width="300" /></div>

<header>

    <a href="index.html" class="logo">Taxi Services & <br> Tour Bookings</a>

    <nav id="topnav">
        <ul>
            <li><a href="airportpickup_drop.html">Airport pickup & drop</a></li>
            <li><a href="delhi.html">Delhi</a></li>
            <li><a href="punjab.html">Punjab</a></li>
            <li><a href="rajasthan.html">Rajasthan</a></li>
            <li><a href="uttarpradesh.html">Uttarpradesh</a></li>
            <li><a href="mix.html">Mix Tours</a></li>
            <li><a href="uttrakhand.html">Uttarkhand</a></li>
            <li><a href="kashmir.html">Kashmir</a></li>
            <li><a href="himalayas.html">Himalayas</a></li>
            <li><a href="madhyapradesh.html">Madhyapradesh</a></li>
            <li><a href="goa.html">Goa</a></li>
            <li><a href="outsideIndia.html">Outside India</a></li>
            <li><a href="javascript:void(0);" class="icon" onclick="menuOnAndOff()">
                    <i class="fa fa-bars"></i>
                </a></li>
        </ul>
    </nav>
</header>

<main>
    <div id="message"></div>
    <h1>Mix Tours</h1>
    <h2 style="alignment: center">get some ideas of some mixed tours <br> (most booked tours)</h2>
    <ul class="article-mix" id="mix">
        <li>
            <form action="https://formsubmit.co/info@swindiatours.com" method="POST">
                <label style="font-size: 1.5em">Please enter your contact information</label>
                <div id="message-view"></div>
                <label for="name">Your name</label>
                <input name="name" id="name" required>
                <div id="message-name"></div>
                <label for="mobile">mobile</label>
                <input type="tel" id="mobile" name="mobile" placeholder="+91-98-992-933-13-8"
                       pattern="[\+]\d{1,2}[\(]\d{2,3}[\)]\d{2,3,4,5,6}[\-]\d{1,2,3,4,5,6}" required>
                <div id="message-mobile"></div>
                <label for="email">Your e-mail address</label>
                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" required>
                <div id="message-email"></div>
                <label for="demand">please submit your demand to get a proper offer</label>
                <div>
                    <select name="options" id="options" size="4" multiple required>
                        <option value="Golden_Triangle">Golden Triangle</option>
                        <option value="Delhi_Jaipur_Pushkar">Delhi, Jaipur, Pushkar</option>
                        <option value="Delhi_Haridwar_Rishikesh">Delhi, Haridwar, Rishikesh</option>
                        <option value="Adventure">Adventure & Safari</option>
                    </select>
                    <p class="price">price depend on the request</p>
                </div>
                <textarea cols="50" id="demand" name="demand" required></textarea>
                <div id="message-demand"></div>
                <input onclick="validateDemand()" type="submit" value="Send-request" id="submitDemand">
                <div id="message-submit"></div>
            </form>
        </li>
        <li>
            <h1>Golden <br> Triangle</h1>
            <h3>
                <a href="delhi.html"> Delhi, </a> <img src="img/delhi.png" alt="Delhi Mix Tour" width="300">
            </h3>
            <h3>
                <a href="uttarpradesh.html"> Agra, </a> <img src="img/Taj_Mahal.png" alt="Taj-Mahal" width="300">
            </h3>
            <h3>
                <a href="rajasthan.html">Jaipur</a> <img src="img/pink_palace_jaipur.png" alt="Jaipur" width="300">
            </h3>
        </li>
        <li>
            <h1>Delhi, Jaipur, Pushkar</h1>
            <h3>
                <a href="delhi.html"> Delhi, </a> <img src="img/humayun-tomb.png" alt="Delhi Mix Tour" width="300">
            </h3>
            <h3>
                <a href="rajasthan.html"> Jaipur, </a> <img src="img/Jaipur.png" alt="Jaipur" width="300">
            </h3>
            <h3>
                <a href="rajasthan.html">Pushkar</a> <img src="img/pushkar.png" alt="Pushkar" width="300">
            </h3>
        </li>
        <li>
            <h1>Delhi, Haridwar, Rishikesh</h1>
            <h3>
                <a href="delhi.html"> Delhi, </a> <img src="img/india_gate.png" alt="Delhi Mix Tour" width="300">
            </h3>
            <h3>
                <a href="uttrakhand.html"> Haridwar, </a> <img src="img/Har-ki-Pauri,_Haridwar.png" alt="Haridwar" width="300">
            </h3>
            <h3>
                <a href="uttrakhand.html">Rishikesh</a> <img src="img/Ramjhula.png" alt="Rishikesh" width="300">
            </h3>
        </li>
        <li>
            <h1>Adventure</h1>
            <img src="img/Corbett_National_Park.png" alt="Corbet National Park" width="300">
            <h3>
                <a href="uttrakhand.html"> wild jungle safari</a> <img src="img/Bengal-Tiger_Corbett.png" alt="Bengali Tiger" width="300">
            </h3>
            <h3>
                with chance to see tigers
            </h3>
            <img src="img/Bubo_flavipes.png" alt="Bubo Flavipes" width="300">
            </h3>
            <h3>
                and many many more wild animals!
                <img src="img/Spotted_deers.png" alt="Deers" width="300">
            </h3>
        </li>
    </ul>
</main>
<footer>
    <div id="opening-hours">
        <h3>Booking</h3>
        <p>24/24</p>
        <p>365/365</p>
        <p>we respond to your booking in 24 hours</p>

    </div>
    <div>
        <lo>
            <li><a href="about.html">About SwIndia Tours</a></li>
            <li><a href="feedback.html">Give us feedback & check customers feedback</a></li>
            <li><a href="contact.html">Contact us</a></li>
        </lo>
    </div>
    <div id="quote">
        <blockquote>
            An experience I will never forget, so lovely people and let you feel that you are a part of the country. I got the real taste of India.
            Definitely I will come back again. SwIndia Tours took care about everything, thank you so much.
        </blockquote>
        <cite>– Hanna (Sweden)</cite>
    </div>

    <div id="address">
        <h3>Address:</h3>
        <p>SwIndia Tours</p>
        <p>9818 Street No 8, Multani Dhanda, Pahar Ganj</p>
        <p>New Delhi, 110055, India</p>
        <p><a href="mailto:info@swindiatours.com">info@swindiatours.com</a></p>
        <p>+91 98 99293313</p>
    </div>
    <div>
        Copyright Ⓒ 2019 SwIndia Tours. All Right Reserved
    </div>
</footer>
<script src="js/bookings.js"></script>
<script src="js/ajax.js"></script>
</body>
</html>

