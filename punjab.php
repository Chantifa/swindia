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
    <h1>Punjab</h1>
    <ul class="article" id="punjab">
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
                        <option value="Amritsar">Amritsar</option>
                        <option value="Golden Temple">Golden Temple</option>
                        <option value="Jallianwala Bagh">Jallianwala Bagh</option>
                        <option value="Wagah">Wagah Border Ceremony</option>
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
            <img src="img/amritsar.png" alt="Amritsar" width="300" />
            <h2>Amritsar</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Amritsar"> Amritsar historically also known as Rāmdāspur and colloquially as Ambarsar,
                    is a city in northwestern India which is the administrative headquarters of the Amritsar district and is located in the Majha region of the Indian state of Punjab.</a>
            </small>
        </li>
        <li>
            <img src="img/golden_temple.png" alt="Golden Temple" width="300" />
            <h2>Golden Temple</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Golden_Temple"> The Harmandir Sahib, also known as Darbar Sahib "Abode of God", "Exalted Holy Court", is a Gurdwara located in the city of Amritsar, Punjab, India.
                    It is the preeminent pilgrimage site of Sikhism.It is usually called the Golden Temple in English, because it is plated with gold.</a>
            </small>
        </li>
        <li>
            <img src="img/Jaliyalwalabagh.png" alt="Jallianwala Bagh" width="300" />
            <h2>Jallianwala Bagh</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Jallianwala_Bagh">Jallianwala Bagh is a public garden in Amritsar, and houses a memorial of national importance,
                    established in 1951 by the Government of India, to commemorate the massacre of peaceful celebrants including unarmed women and children by British occupying forces,
                    on the occasion of the Punjabi New Year (Baisakhi) on 13 April 1919 in the Jallianwala Bagh Massacre.</a>
            </small>
        </li>
        <li>
            <img src="img/Wagah_border_ceremony.png" alt="Wagah" width="300" />
            <h2>Wagah Border Ceremony</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Wagah"> Wagah is a village and union council located in the Wahga Zone of Lahore, Punjab, Pakistan.
                    The town is famous for the Wagah border ceremony and also serves as a goods transit terminal and a railway station between Pakistan and India.
                    Wagah is situated 600 metres west of the border and lies on the historic Grand Trunk Road between Lahore and Amritsar in India.
                    The border is located 24 kilometres (15 mi) from Lahore and 32 kilometres (20 mi) from Amritsar.
                    It is also 3 kilometres (1.9 mi) from the bordering village of Attari.</a>
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


