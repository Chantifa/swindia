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
    <h1>Uttarpradesh</h1>
    <ul class="article">
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
                    <select name="options"  id="options" size="4" multiple required>
                        <option value="Agra">Agra </option>
                        <option value="Fatehpur Sikri">Fatehpur Sikri</option>
                        <option value="Varanasi">Varanasi</option>
                        <option value="Sarnath">Sarnath</option>
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
            <img src="img/agra.png" alt="Agra" width="300" />
            <h2>Taj Mahal, Agra fort, Handicraft , foundation of black Taj Mahal</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Taj_Mahal">An immense mausoleum of white marble, built in Agra between 1631 and 1648 by order of the Mughal emperor Shah Jahan in memory of his favourite wife, the Taj Mahal
                    is the jewel of Muslim art in India and one of the universally admired masterpieces of the world's heritage.</a>
            </small>
        </li>
        <li>
            <img src="img/Fatehput_Sikiri_Buland_Darwaza_gate.png" alt="Fatehpur Sikri"width="300" />
            <h2>Fatehpur Sikri</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Fatehpur_Sikri"/> it’s a beautiful Fort with the biggest door of the world</a>
            </small>
        </li>
        <li>
            <img src="img/Varanasi.png" alt="Varanasi"width="300" />
            <h2>Varanasi</h2>
            <small ><a href="https://en.wikipedia.org/wiki/Varanasi">Ancient Shiva Temple Vishvnath</a>
            </small>
        </li>
        <li>
            <img src="img/sarnath.png" alt="Sarnath" width="300" />
            <h2>Sarnath</h2>
            <small >
                <a href="https://en.wikipedia.org/wiki/Sarnath"/> Buddhist Temple and very special art silk production</a>
            </small>
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
