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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li><a href="uttrakhand.php">Uttarkhand.</a></li>
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

<main>
    <div class="panel">
        <?php if(!empty($errors)):?>
            <div class="error">
                <ul><li><?php echo implode('</li> <li>', $errors)?></li></ul>
            </div>
        <?php endif; ?>
    </div>
    <div id="statistic"></div>
    <h1>Tell us what you think</h1>
    <div class="form">
        <form action="https://formsubmit.co/info@swindiatours.com" method="POST">
            <label>How did you like your trip?</label>
            <fieldset>
                <input type="radio" name="quality" value="awesome" id="choiceawesome">
                <label for="choiceawesome">awesome</label>
                <input type="radio" name="quality" value="good" id="choicegood">
                <label for="choicegood">good</label>
                <input type="radio" name="quality" value="okay" id="choiceokay1">
                <label for="choiceokay1">okay</label>
                <input type="radio" name="quality" value="poor" id="choicepoor">
                <label for="choicepoor">poor</label>
            </fieldset>
            <div id="message-quality"></div>
            <label>What do you think about prizes?</label>
            <fieldset>
                <input type="radio" name="view" value="fair" id="choicefair">
                <label for="choicefair">fair</label>
                <input type="radio" name="view" value="okay" id="choiceokay2">
                <label for="choiceokay2">okay</label>
                <input type="radio" name="view" value="expensive" id="choiceexpensive">
                <label for="choiceexpensive">expensive</label>
            </fieldset>
            <label>What do you think about the service & kindness?</label>
            <fieldset>
                <input type="radio" name="quality" value="awesome" id="choiceawesome1">
                <label for="choiceawesome1">awesome</label>
                <input type="radio" name="quality" value="good" id="choicegood1">
                <label for="choicegood1">good</label>
                <input type="radio" name="quality" value="okay" id="choiceokay3">
                <label for="choiceokay3">okay</label>
                <input type="radio" name="quality" value="poor" id="choicepoor1">
                <label for="choicepoor1">poor</label>
            </fieldset>
            <div id="message-view"></div>
            <label for="name">Your name?</label>
            <input name="name" id="name" required>
            <div id="message-name"></div>
            <label for="email">Your e-mail address?</label>
            <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" required>
            <div id="message-email"></div>
            <label for="feedback">Please tell us how was your trip in a few words?</label>
            <textarea cols="50" id="feedback" name="feedback" required></textarea>
            <div id="message-feedback"></div>
            <input onclick="postFeedback()" type="submit" value="Send" id="submitfeedback">
            <div id="message-submit"></div>
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
<script src="js/form.js"></script>
</body>
</html>
<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>

