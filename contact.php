<?php
session_start();
require_once'helpers/security.php';
$errors=isset($_SESSION['errors'])?$_SESSION['errors']:[];
$fields=isset($_SESSION['fields'])?$_SESSION['fields']:[];
?>
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

    <a href="index.php" class="logo">Taxi Services & <br> Tour Bookings</a>

    <nav id="topnav">
        <ul>
            <li><a href="airportpickup_drop.php">Airport pickup & drop</a></li>
            <li><a href="delhi.php">Delhi</a></li>
            <li><a href="punjab.php">Punjab</a></li>
            <li><a href="rajasthan.php">Rajasthan</a></li>
            <li><a href="uttarpradesh.php">Uttarpradesh</a></li>
            <li><a href="mix.php">Mix Tours</a></li>
            <li><a href="uttrakhand.php">Uttarkhand</a></li>
            <li><a href="kashmir.php">Kashmir</a></li>
            <li><a href="himalayas.php">Himalayas</a></li>
            <li><a href="madhyapradesh.php">Madhyapradesh</a></li>
            <li><a href="goa.php">Goa</a></li>
            <li><a href="outsideIndia.php">Outside India</a></li>
            <li><a href="javascript:void(0);" class="icon" onclick="menuOnAndOff()">
                <i class="fa fa-bars"></i>
            </a></li>
        </ul>
    </nav>
</header>
<div id="message"></div>
<main>
    <h1>Do you have any questions or do you need any assistance, we are happy to help</h1>
        <div class="container">
                <div class="panel">
                    <?php if(!empty($errors)):?>
                    <div class="error">
                        <ul><li><?php echo implode('</li> <li>', $errors)?></li></ul>
                    </div>
                <?php endif; ?>
                </div>
        <form action="formcontact.php" method="post">
            <div id="contact">
            <h4>Contact us today, and get reply with in 24 hours!</h4>
            <fieldset>
                <label for="name" tabindex="1">Your Name *</label>
                <input type="text" name="name" autocomplete="off" tabindex="1" placeholder="Enter Name" <?php echo isset ($fields['name'])? 'value="'.e($fields['name']).'"':''?>>
            </fieldset>
            <fieldset>
                <label for="email" tabindex="2">Your Email address * </label>
                <input type="email" name="email" autocomplete="off" tabindex="2" placeholder="Enter Email"<?php echo isset ($fields['email'])? 'value="'.e($fields['email']).'"':''?>>
            </fieldset>
            <fieldset>
                <label for="tel" tabindex="3">Your Mobile No. * </label>
                <input type="tel" name="tel" autocomplete="off" tabindex="3"  placeholder="Enter Mobile No."<?php echo isset ($fields['tel'])? 'value="'.e($fields['tel']).'"':''?>>
            </fieldset>
                <fieldset>
                    <label for="options" tabindex="4"></label>
                    <div>
                        <select name="options[]" id="options" size="3" multiple>
                            <option value="request">Request</option>
                            <option value="feedback">Feedback</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </fieldset>
            <fieldset>
                <label for="message" >Your Message *</label>
                <textarea tabindex="5" rows="8" id="comment" name="message"<?php echo isset ($fields['message'])? e($fields['message']):''?>></textarea>
                <button name="submit" type="submit" id="contact-submit"  class="btn btn-primary">Submit</button>
            </fieldset>
            </div>
        </form>
        </div>
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
            <li><a href="about.php">About SwIndia Tours</a></li>
            <li><a href="feedback.php">Give us feedback & check customers feedback</a></li>
            <li><a href="contact.php">Contact us</a></li>
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
<script src="js/boot.js"></script>
<script src="js/form.js"></script>
</body>
</html>

<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>