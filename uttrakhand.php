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
    <h1>Uttrakhand</h1>
    <ul class="article">
        <li>
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
                            <select name="options[]" id="options" size="13" multiple>
                                <option value="Haridwar">Haridwar</option>
                                <option value="Rishikesh">Rishikesh</option>
                                <option value="Char Dham Yatra">Char Dham Yatra</option>
                                <option value="Badrinath Temple, Auli">Badrinath Temple, Auli village</option>
                                <option value="Kedarnath temple">Kedarnath Temple</option>
                                <option value="Gangotri">Gangotri</option>
                                <option value="Yamnotri">Yamnotri</option>
                                <option value="Dehradun">Dehradun</option>
                                <option value="Sehastra Dhara">Sehastra Dhara</option>
                                <option value="Mansoori">Mansoori</option>
                                <option value="Dhanaulti">Dhanaulti</option>
                                <option value="Nainital, Ranikhet, Kausani">Nainital, Ranikhet, Kausani</option>
                                <option value="Almoda">Almoda</option>
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
            <img src="img/haridwar.png" alt="Haridwar" width="300" />
            <h2>Haridwar</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Haridwar"> An important and religious city of Hindu at the Ganges river</a>
            </small>
        </li>
        <li>
            <img src="img/rishikesh.png" alt="Rishikesh"width="300" />
            <h2>Rishikesh</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Rishikesh"> World yoga and meditation center river rafting in Ganges river. Laxman Jhula,Ram Jhula.</a>
            </small>
        </li>
        <li>
            <img src="img/badrinathTempleAuli.png" alt="Char Dham Yatra, Badrinath Temple"width="300" />
            <h2>Char Dham Yatra, Badrinath Temple</h2>
            <small ><a href="https://en.wikipedia.org/wiki/Char_Dham">Badrinath temple, dedicated to Lord Vishnu, is one of the sacred Char Dham in Uttarakhand, in far northern India. These four ancient Hindu temples are regarded as the spiritual sources of four holy rivers</a>
            </small>
        </li>
        <li>
            <img src="img/Auli_hill_station.png" alt="Auli Village" width="300" />
            <h2>Auli Village </h2>
            <small ><a href="https://en.wikipedia.org/wiki/Auli,_India"/>The last village of India before China on the mountain.</a>
            </small>
        </li>
        <li>
            <img src="img/kedarnath_temple.png" alt="Kedarnath Temple"width="300" />
            <h2>Kedarnath Temple</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Kedarnath_Temple"/> Kedarnath Temple is a Hindu temple (shrine) dedicated to Lord Shiva.
                Located on the Garhwal Himalayan range near the Mandakini river, Kedarnath is located in the state of Uttarakhand, India. Due to extreme weather conditions, the temple is open to the general public only between the months of April (Akshaya Tritriya) and November (Kartik Purnima, the autumn full moon). During the winters, the vigrahas (deities) from Kedarnath temple are carried down to Ukhimath and where the deity is worshiped for the next six months. Kedarnath is seen as a homogenous form of Lord Shiva, the 'Lord of Kedar Khand', the historical name of the region</a>
            </small>
        </li>
        <li>
            <img src="img/gangotri.png" alt="Gangotri" width="300" />
            <h2>Gangotri</h2>
            <small ><a href="https://en.wikipedia.org/wiki/Gangotri">Gangotri is a town and a Nagar Panchayat (municipality) in Uttarkashi district in the state of Uttarakhand, India. It is a Hindu pilgrim town on the banks of the river Bhagirathi and origin of River Ganges. It is on the Greater Himalayan Range, at a height of 3,100 metres (10,200 ft). According to popular Hindu legend, it was here that Goddess Ganga descended when Lord Shiva released the mighty river from the locks of his hair.</a></small>
        </li>
        <li>
            <img src="img/yamunotri.png" alt="Yamnotri"width="300" />
            <h2>Yamnotri</h2>
            <small ><a href="https://en.wikipedia.org/wiki/Yamunotri">Yamunotri is the source of the Yamuna River and the seat of the Goddess Yamuna in Hinduism. It is situated at an altitude of 3,293 metres (10,804 ft) in the Garhwal Himalayas and located approximately 30 kilometers (19 mi) North of Uttarkashi, the headquarters of the Uttarkashi district in the Garhwal Division of Uttarakhand, India. It is one of the four sites in India's Chhota Char Dham pilgrimage. The sacred shrine of Yamunotri, source of the river Yamuna, is the westernmost shrine in the Garhwal Himalayas, perched atop a flank of Bandar Poonch Parvat. The chief attraction at Yamunotri is the temple devoted to the Goddess Yamuna and the holy thermal springs at Janki Chatti (7 km. Away)</a></small>
        </li>
        <li>
            <img src="img/dehradun.png" alt="Dehradun" width="300" />
            <h2>Dehradun</h2>
            <small ><a href="https://en.wikipedia.org/wiki/Dehradun">Dehradun, also spelled Dehra Dun, is the interim capital of Uttarakhand, a state in India. Located in the Garhwal region, it lies 236 kilometres (147 mi) north of India's capital New Delhi and 168 kilometres (104 mi) from Chandigarh. It is one of the "Counter Magnets" of the National Capital Region (NCR) being developed as an alternative centre of growth to help ease the migration and population explosion in the Delhi metropolitan area and to establish a smart city at Dehradun</a></small>
        </li>
        <li>
            <img src="img/sahasradhara.png" alt="Sahasradhara"width="300" />
            <h2>Sahasradhara</h2>
            <small ><a href="https://en.wikipedia.org/wiki/Sahasradhara">Sahasradhara, meaning thousand fold spring, is one of the most popular tourist destinations located in Dehradun in Uttrakhand state of India</a></small>
        </li>
        <li>
            <img src="img/mussorie.png" alt="Mussoorie"width="300" />
            <h2>Mussoorie</h2>
            <small ><a href="https://en.wikipedia.org/wiki/Mussoorie">Mussoorie is a hill station and a municipal board in the Dehradun District of the Indian state of Uttarakhand. It is about 35 kilometres (22 mi) from the state capital of Dehradun and 290 km (180 mi) north of the national capital of New Delhi. The hill station is in the foothills of the Garhwal Himalayan range. The adjoining town of Landour, which includes a military cantonment, is considered part of 'greater Mussoorie', as are the townships of Barlowganj and Jharipani
                </a></small>
        </li>
        <li>
            <img src="img/dhanaulti.png" alt="Dhanaulti"width="300" />
            <h2>Dhanaulti</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Dhanaulti">Dhanaulti is a hill station situated in the foothills of the Garhwal Himalayan range located 24 km (15 mi) from the hill station of Mussoorie</a>
            </small>
        </li>
        <li>
            <img src="img/ranikhet.png" alt="Nainital, Ranikhet, Kausani"width="300" />
            <h2>Nainital, Ranikhet, Kausani</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Ranikhet">Hill stations that are nestled in the lap of mighty Himalayas and also make you witness magnificent lakes and temples.</a>
            </small>
        </li>
        <li>
            <img src="img/almora.png" alt="Almora"width="300" />
            <h2>Almora</h2>
            <small>
                <a href="https://en.wikipedia.org/wiki/Almora">Almora has a population of 35,513. Nestled within higher peaks of the Himalaya, Almora enjoys a year-round mild temperate climat.</a>
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