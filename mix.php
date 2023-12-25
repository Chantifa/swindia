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

<main>
    <div class="panel">
        <?php if(!empty($errors)):?>
            <div class="error">
                <ul><li><?php echo implode('</li> <li>', $errors)?></li></ul>
            </div>
        <?php endif; ?>
    </div>
    <div id="message"></div>
    <h1>Mix Tours</h1>
    <h2 style="alignment: center">get some ideas of some mixed tours <br> (most booked tours)</h2>
    <ul class="article-mix" id="mix">
        <li>
            <form action="formcontact.php" method="post">
                <fieldset id="contact">
                    <label style="font-size: 1.5em">Please enter your contact information</label>
                    <fieldset>
                        <label for="name" tabindex="1">Your Name *</label>
                        <input id="name" type="text" name="name" autocomplete="off" tabindex="1" placeholder="Enter Name" <?php echo isset ($fields['name'])? 'value="'.e($fields['name']).'"':''?>>
                        <div id="message-name"></div>
                    </fieldset>
                    <fieldset>
                        <label for="email" tabindex="2">Your Email address * </label>
                        <input id="email" type="email" name="email" autocomplete="off" tabindex="2" placeholder="Enter Email"<?php echo isset ($fields['email'])? 'value="'.e($fields['email']).'"':''?>>
                        <div id="message-email"></div>
                    </fieldset>
                    <fieldset>
                        <label for="tel-message" tabindex="3">Your Mobile No. * </label>
                        <input id=tel type="tel" name="tel" autocomplete="off" tabindex="3"  placeholder="Enter Mobile No."<?php echo isset ($fields['tel'])? 'value="'.e($fields['tel']).'"':''?>>
                        <div id="tel-message"></div>
                    </fieldset>
                    <fieldset>
                        <label for="options" tabindex="4">please submit your demand to get a proper offer</label>
                        <div>
                            <select name="options[]" id="options" size="4" multiple>
                                <option value="Golden_Triangle">Golden Triangle</option>
                                <option value="Delhi_Jaipur_Pushkar">Delhi, Jaipur, Pushkar</option>
                                <option value="Delhi_Haridwar_Rishikesh">Delhi, Haridwar, Rishikesh</option>
                                <option value="Adventure">Adventure & Safari</option>
                            </select>
                            <p class="price">price depend on the request</p>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="message" >Your Message *</label>
                        <textarea tabindex="5" rows="8" id="comment" name="message"<?php echo isset ($fields['message'])? e($fields['message']):''?>></textarea>
                        <div id="message-demand"></div>
                        <button for="submit" name="submit" type="submit" id="contactSubmit"  class="btn btn-primary">Submit</button>
                    </fieldset>
                </fieldset>
            </form>
        </li>
        <li>
            <h1>Golden <br> Triangle</h1>
            <h3>
                <a href="delhi.php"> Delhi, </a> <img src="img/delhi.png" alt="Delhi Mix Tour" width="300">
            </h3>
            <h3>
                <a href="uttarpradesh.php"> Agra, </a> <img src="img/Taj_Mahal.png" alt="Taj-Mahal" width="300">
            </h3>
            <h3>
                <a href="rajasthan.php">Jaipur</a> <img src="img/pink_palace_jaipur.png" alt="Jaipur" width="300">
            </h3>
        </li>
        <li>
            <h1>Delhi, Jaipur, Pushkar</h1>
            <h3>
                <a href="delhi.php"> Delhi, </a> <img src="img/humayun-tomb.png" alt="Delhi Mix Tour" width="300">
            </h3>
            <h3>
                <a href="rajasthan.php"> Jaipur, </a> <img src="img/Jaipur.png" alt="Jaipur" width="300">
            </h3>
            <h3>
                <a href="rajasthan.php">Pushkar</a> <img src="img/pushkar.png" alt="Pushkar" width="300">
            </h3>
        </li>
        <li>
            <h1>Delhi, Haridwar, Rishikesh</h1>
            <h3>
                <a href="delhi.php"> Delhi, </a> <img src="img/india_gate.png" alt="Delhi Mix Tour" width="300">
            </h3>
            <h3>
                <a href="uttrakhand.php"> Haridwar, </a> <img src="img/Har-ki-Pauri,_Haridwar.png" alt="Haridwar" width="300">
            </h3>
            <h3>
                <a href="uttrakhand.php">Rishikesh</a> <img src="img/Ramjhula.png" alt="Rishikesh" width="300">
            </h3>
        </li>
        <li>
            <h1>Adventure</h1>
            <img src="img/Corbett_National_Park.png" alt="Corbet National Park" width="300">
            <h3>
                <a href="uttrakhand.php"> wild jungle safari</a> <img src="img/Bengal-Tiger_Corbett.png" alt="Bengali Tiger" width="300">
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

