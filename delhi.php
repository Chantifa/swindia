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
    <h1>Delhi City Tour</h1>
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
                        <select name="options"  id="options" size="9" multiple required>
                            <option value="Laxmi Narayan Temple">Laxmi Narayan Temple </option>
                            <option value="India Gate">India Gate</option>
                            <option value="President house & parlament">President House & Parlament</option>
                            <option value="Qutub Minaar">Qutub Minaar</option>
                            <option value="Lotus Temple">Lotus Temple</option>
                            <option value="Humayun Tomb">Humayun Tomb</option>
                            <option value="Akshardham">Akshardham</option>
                            <option value="Red Fort">Red Fort</option>
                            <option value="Jama Masjid">Jama Mosq</option>
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
                <img src="img/Laxmi%20Narayan%20Temple.png" alt="Laxmi Narayan temple" width="300" />
                <h2>Laxmi Narayan temple</h2>
                <small>
                    <a href="https://en.wikipedia.org/wiki/Laxminarayan_Temple"> The Lakshmi Narayan Temple in Delhi situated in Connaught place is one of the famous Birla Temples in India. It was built in 1938 and dedicated to Lord Vishnu and goddess Lakshmi. The carvings and the ornate descriptions of many Indian deities respond to the interests of tourists in the Indian religions.
Janmashtami and Diwali are the two festivals that are elaborately celebrated</a>
                </small>
            </li>
            <li>
                <img src="img/india_gate.png" alt="India Gate"width="300" />
                <h2>India Gate</h2>
                <small>
                    <a href="https://en.wikipedia.org/wiki/India_Gate"/> At the centre of New Delhi stands the 42 m high India Gate, an "Arc-de-Triomphe" like archway in the middle of a crossroad. Almost similar to its French counterpart, it commemorates the 70,000 Indian soldiers who lost their lives fighting for the British Army during the World War I. The memorial bears the names of more than 13,516 British and Indian soldiers killed
                in the Northwestern Frontier in the Afghan war of 1919</a>
                </small>
            </li>
            <li>
                <img src="img/presidentHouseParlamentDelhi.png" alt="Rashtrapati Bhavan"width="300" />
                <h2>Rashtrapati Bhavan</h2>
                <small ><a href="https://en.wikipedia.org/wiki/Rashtrapati_Bhavan"> ashtrapati Bhavan, home to the President of the world’s largest democracy, is emblematic of Indian democracy and its secular, plural and inclusive traditions.
It was designed by Sir Edwin Lutyens and Herbert Baker and stands on a 330 acre estate</a>
                </small>
            </li>
            <li>
                <img src="img/qutabMinar.png" alt="Qutb Minaar" width="300" />
                <h2>Qutb Minar</h2>
                <small ><a href="https://en.wikipedia.org/wiki/Qutb_Minar"/> built in the early 13th century a few kilometres south of Delhi, the red sandstone tower of Qutb Minar is 72.5 m high, tapering from 2.75 m in diameter at its peak to 14.32 m at its base, and alternating angular and rounded flutings. The surrounding archaeological area contains funerary buildings, notably the magnificent Alai-Darwaza Gate, the masterpiece of Indo-Muslim art (built in 1311), and two mosques, including the Quwwatu'l-Islam,
                    the oldest in northern India, built of materials reused from some 20 Brahman temples.</a>
                </small>
            </li>
            <li>
                <img src="img/lotus-temple-new-delhi.png" alt="Lotus Temple"width="300" />
                <h2>Lotus Temple</h2>
                <small>
                    <a href="https://en.wikipedia.org/wiki/Lotus_Temple"/> The Lotus Temple, located in Delhi, India, is a Bahaí House of Worship that was dedicated in December 1986. Notable for its flowerlike shape, it has become a prominent attraction in the city. Like all Bahá'í Houses of Worship, the Lotus Temple is open to all,
                    regardless of religion or any other qualification. The building is composed of 27 free-standing marble-clad
                    "petals" arranged in clusters of three to form nine sides, with nine doors opening onto a central hall with a height of slightly
                    over 34.27metres and a capacity of 2500 people. The Lotus Temple has won numerous architectural awards and has been featured in many newspaper and magazine articles.</a>
                </small>
            </li>
            <li>
                <img src="img/humayun-tomb.png" alt="Humayun Tomb" width="300" />
                <h2>Humayun Tomb</h2>
                <small ><a href="https://en.wikipedia.org/wiki/Humayun%27s_Tomb">This tomb, built in 1570, is of particular cultural significance as it was the first garden-tomb on the Indian subcontinent.
It inspired several major architectural innovations, culminating in the construction of the Taj Mahal.</a></small>
            </li>
            <li>
                <img src="img/Akshardham.png" alt="Akshardham"width="300" />
                <h2>Akshardham</h2>
                <small ><a href="https://en.wikipedia.org/wiki/Akshardham_(Delhi)"> Akshardham complex is a Hindu temple and a spiritual campus located in New Delhi. The complex was constructed in 2005 in Noida Mor region of New Delhi. 70% of tourists who visit Delhi, visit this temple complex. Located on the banks of River Yamuna, this temple is a beautiful place for sightseeing,
                                                                                                                                                                                                                                                                                                                                                                                   exploring and pilgrimage.</a></small>
            </li>
            <li>
                <img src="img/delhi.png" alt="Red Fort" width="300" />
                <h2>Red Fort</h2>
                <small ><a href="https://en.wikipedia.org/wiki/Red_Fort"> The Red Fort is a historic fort in the city of Delhi in India. Every year on the Independence day of India (15 August), the Prime Minister hoists the Indian "tricolour flag"
                    at the main gate of the fort and delivers a nationally broadcast speech from its ramparts</a></small>
            </li>
            <li>
                <img src="img/jama-majid.png" alt="Jama Masjid"width="300" />
                <h2>Jama Masjid</h2>
                <small ><a href="https://en.wikipedia.org/wiki/Jama_Masjid,_Delhi"> A prominent landmark and one of the top tourist attractions in Delhi, Jama Masjid (Friday Mosque) is also the biggest and best-known mosque in India. It will transport you back to the time when Delhi was known as Shahjahanabad, the illustrious capital of the Mughal Empire, from 1638 until its fall in 1857.
                    Find out all you need to know about Delhi's Jama Masjid and how to visit it in this complete guide</a></small>
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