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
    <h1>Kashmir</h1>
    <ul class="article" id="kashmir">
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
                            <select name="options[]" id="options" size="5" multiple>
                                <option value="Jammu">Jammu</option>
                                <option value="Vaishno Devi">Vaishno Devi</option>
                                <option value="Shrinagar">Shrinagar / Dale Lake </option>
                                <option value="Gulmarg">Gulmarg</option>
                                <option value="Udhampur">Udhampur</option>
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
            <img src="img/jammu.png" alt="Jammu" width="300" />
            <h2>Jammu</h2>
            <small>
                <a href=https://en.wikipedia.org/wiki/Jammu">Located in Jammu and Kashmir state of India, Jammu region is known for its enchanting mountainscape.
                    This place is primarily known for Vaishno Devi Temple, which holds important religious significance for Hindus. But that is not all it offers in terms of attractions, this list of best places to visit in Jammu will let you know all the options you have and must be in your bucket list
                    if you are planning an escape to this part of Heaven on Earth!</a>
            </small>
        </li>
        <li>
            <img src="img/vaishnodevi-jammu.png" alt="Vaishno Devi"width="300" />
            <h2>Vaishno Devi</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Vaishno_Devi">Vaishno Devi Temple is among the most visited Hindu shrines in the world,
                    millions of pilgrims visit this temple each year. The temple is dedicated to Goddess Mahalakshmi and as per the belief whatever you wish for here gets granted.
                    The cave-styled temple is located at an altitude of 5200 ft above sea level, so people have to trek to the top from a point.
                    Other than walking you can also opt for helicopter services, pony ride or palanquin to reach Vaishno Devi Temple, one of the best places to visit in Jammu.</a>
            </small>
        </li>
        <li>
            <img src="img/Dalelake.png" alt="Shrinagar"width="300" />
            <h2>Shrinagar / Dale Lake </h2>
            <small ><a href="https://en.wikipedia.org/wiki/Dal_Lake">Dal is a lake in Srinagar, the summer capital of Jammu and Kashmir, India.
                    The urban lake, which is the second largest in the state,
                    is integral to tourism and recreation in Kashmir and is named the " Lake of Flowers"</a>
            </small>
        </li>
        <li>
            <img src="img/gulmarg.png" alt="Gulmarg" width="300" />
            <h2>Gulmarg</h2>
            <small ><a href="https://en.wikipedia.org/wiki/Gulmarg"/>Gulmarg is a town, a hill station, a popular skiing destination and a notified area committee in the Baramulla district of the Indian state of Jammu and Kashmir.</a>
            </small>
        </li>
        <li>
            <img src="img/udhampur1.png" alt="Udhampur"width="300" />
            <h2>Udhampur</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Udhampur"/> Udhampur is a district and a municipal committee in Udhampur District in the Indian state of Jammu and Kashmir.
                Named after Raja Udham Singh, it serves as the district capital and the Northern Command headquarters of the Indian Army.
                A Forward Base Support Unit (FBSU) of the Indian Air Force is also stationed here.
                Udhampur is used by the Armed Forces as a transit point between Jammu and Srinagar when travelling by road on National Highway 1A.</a>
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

    <div id="address"><img src="../../AppData/Local/Temp/jammu.jpg"/>
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



