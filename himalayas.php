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
    <h1>Himalayas</h1>
    <ul class="article" id="himalyas">
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
                <select name="options" id="options" size="5" multiple required >
                    <option value="Manali">Manali</option>
                    <option value="Shimla">Shimla</option>
                    <option value="Dharamsala">Dharamsala</option>
                    <option value="Dalhousie">Dalhousi</option>
                    <option value="Naina Devi">Naina Devi</option>
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
        <img src="img/HP/Hadimba_Devi_Temple,_Manali.png" alt="Manali" width="300" />
        <h2>Manali</h2>
        <small>
            <a href="https://en.wikipedia.org/wiki/Manali,_Himachal_Pradesh">Manali is a resort town nestled in the mountains of the Indian state of Himachal Pradesh near the northern end of the Kullu Valley in the Beas River Valley.
It is located in the Kullu district, about 270 km north of the state capital, Shimla, 309
                km north east of Chandigarh and 544 km northeast of Delhi, the national capital.
The small town, with a population of 8,096,[1] is the beginning of an ancient trade route to Ladakh and from there over the Karakoram Pass on to Yarkand and Khotan in the Tarim Basin.
It is a popular tourist destination and serves as the gateway to Lahaul and Spiti district as well as Leh.</a>
        </small>
    </li>
    <li>
        <img src="img\HP\Shimla.png" alt="Shimla" width="300" />
        <h2>Shimla</h2>
        <small>
            <a href="https://en.wikipedia.org/wiki/Shimla">Shimla, also known as Simla, is the capital and the
                largest city of the Indian state of Himachal Pradesh. In 1864, Shimla was declared as the summer
                capital of British India, succeeding Murree, northeast of Rawalpindi. After independence,
                the city became the capital of Punjab and was later made the capital of Himachal Pradesh.
It is the principal commercial, cultural and educational centre of the state</a>
        </small>
    </li>
    <li>
        <img src="img/HP/dharamsala.png" alt="Shrinagar"width="300" />
        <h2>Dharamsala</h2>
        <small ><a href="https://en.wikipedia.org/wiki/Dharamshala">Dharamshala (also spelled Dharamsala) is the district headquarters of Kangra district in India.
It was formerly known as Bhagsu.
The Dalai Lama's residence and the headquarters of the Central Tibetan Administration (the Tibetan government in exile) are in Dharamshala.</a>
        </small>
    </li>
    <li>
        <img src="img/HP/Dalhousie.png" alt="Dalhousie" width="300" />
        <h2>Dalhousie</h2>
        <small ><a href="https://en.wikipedia.org/wiki/Gulmarg"/>Dalhousie is a hill station in Chamba district,
            in the northern Indian state of Himachal Pradesh. It is situated on 5 hills and has an elevation of 1,970 metres above sea level.
            Dalhousie Town was named after The Earl of Dalhousie, who was the British Governor-General in India while establishing this place as a summer retreat</a>
        </small>
    </li>
    <li>
        <img src="img/HP/naina_devi.png" alt="Naina Devi"width="300" />
        <h2>Naina Devi</h2>
        <small>
            <a href="https://en.wikipedia.org/wiki/Naina_Devi"/>The Temple of Shri Naina Devi Ji is situated on a hilltop,
            base of which also has samadhi of bhagat Jatt Jeona Morh, in the Bilaspur District, Himachal Pradesh, India.
            The temple is connected with National Highway No. 21. The temple at the top of the hill can be reached via road
            (that curves round the hill up to a certain point) and then by concrete steps (that finally reach the top).
             There is also a cable car facility that moves pilgrims from the base of the hill all the way to the top.</a>
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