<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="topnav.css">
    <link rel="stylesheet" type="text/css" href="headline.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
    var prevScrollPos = window.pageYOffset;
    
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollPos > currentScrollPos) {
            document.getElementById("myTopnav").style.top = "0";
        } else {
            document.getElementById("myTopnav").style.top = "-100px";
        }
        prevScrollPos = currentScrollPos;
    }
</script>

</head>
<body>
    <div class="topnav-container">
        <div class="topnav" id="myTopnav"><!--TOPNAV START-->
            <div id="logoname"><img src="logo/MobileGitz.png"></div>
            <a href="index.php" class="active">Home</a>
            <a href="#contact">Contact</a>
            <a href="signup.php" class="signupbutton" style="float: right;" title="Sign Up/Login">
                <i class="fa fa-user" style="font-size: 30px;"></i></a>
            
            <!--<a href="javascript:void(0);">      Icon this will be
              <i class="fa fa-bars"> </i>
            </a>-->
        </div>
        </div>

<div class="front-page-container"><!--CONTAINER START-->

    <div class="column small"><!--COLUMN SMALL START-->
        <table class="phone-finder" cellpadding="" cellspacing="0">
            <tr>
                <th colspan="5"><i fa fa-phone> </i>Phone Finder</th>
            </tr>
            <tr>
                <td><a target="_blank" href="https://www.samsung.com/ph/smartphones/all-smartphones/">Samsung</a></td>
                <td><a target="_blank" href="https://www.apple.com/ph/iphone/">Apple</a></td>
                <td><a target="_blank" href="https://www.motorola.com/smartphones">Motorola</a></td>
                <td><a target="_blank" href="https://www.vivo.com/ph/products">Vivo</a></td>
                <td><a target="_blank" href="https://www.realme.com/ph/">RealMe</a></td>
            </tr>
            <tr>
                <td><a target="_blank" href="https://electronics.sony.com/c/mobile">Sony</a></td>
                <td><a target="_blank" href="https://www.mi.com/ph/phone/poco/poco-list/">POCO</a></td>
                <td><a target="_blank" href="https://www.acer.com/ph-en">Acer</a></td>
                <td><a target="_blank" href="https://consumer.huawei.com/ph/phones/">Huawei</a></td>
                <td><a target="_blank" href="https://www.asus.com/mobile-handhelds/phones/all-series/">Asus</a></td>
            </tr>
            <tr>
                <td><a target="_blank" href="https://mshop.iqoo.com/in/products/phone">IQOO</a></td>
                <td><a target="_blank" href="https://www.mi.com/ph/phone/">Xiaomi</a></td>
                <td><a target="_blank" href="https://www.lg.com/ph/mobile-phones">LG</a></td>
                <td><a target="_blank" href="https://store.google.com/us/?hl=en-US&regionRedirect=true">Google</a></td>
                <td><a target="_blank" href="https://www.hihonor.com/ph/phones/l">Honor</a></td>
            </tr>
            <tr>
                <td><a target="_blank" href="https://www.nokia.com/phones/en_ph">Nokia</a></td>
                <td><a target="_blank" href="https://www.oppo.com/en/smartphones/">Oppo</a></td>
                <td><a target="_blank" href="https://www.oneplus.com/ph">OnePlus</a></td>
                <td><a target="_blank" href="https://ztedevices.com">ZTE</a></td>
                <td><a target="_blank" href="https://www.htc.com/eu/smartphones/">HTC</a></td>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th class="allbrands" colspan="2" style="font-size: 20px;padding: 5px;">
                    <a href="allbrands.html">All Brands</a></th>
            </tr>
        </table>

            <!--COLUMN SMALL NEWS-->
        <a href="targetPhone.html">
        <div class="front-news-container-small">
            <img src="images/PocoC65.jpg" alt="Phone News Image">
            <div class="front-news-inside-text">Poco C65 is here with Helio G85, 6.74" 90Hz display</div>
        </div></a>

        <a href="targetPhone.html">
        <div class="front-news-container-small">
            <img src="images/SamsungGalaxyS23Ultravs.GooglePixel8Pro.jpg" alt="Phone News Image">
            <div class="front-news-inside-text">Samsung Galaxy S23 Ultra vs. Google Pixel 8 Pro</div>
        </div></a>
        
        <a href="targetPhone.html">
        <div class="front-news-container-small">
            <img src="images/vivoWatch3.jpg" alt="Phone News Image">
            <div class="front-news-inside-text">Vivo Watch 3 official teasers showcase design</div>
        </div></a>
        
        <a href="targetPhone.html">
        <div class="front-news-container-small">
            <img src="images/samsung_brings_stable_one_ui_6_update_to_malaysia.jpg" alt="Phone News Image">
            <div class="front-news-inside-text">Samsung bring stable One UI 6 update to Malaysia</div>
        </div></a>
        
        <div class="top-list xm1"> <!--=======================EXPERIMENTAL TABLE STYLE=======================-->
            <h4 class="section-heading">TOP 10 BY POPULARITY</h4>
                <table class="top-phones" cellspacing="0">
                <thead>
                    <tr>
                        <th id="th1a" scope="col"> </th>
                        <th id="th1b" scope="col">Device</th>
                        <!--<th id="th1c" scope="col"> </th>-->
                        <th scope="col"> </th>
                    </tr>
                </thead>

                <tbody>
                    <tr> </tr>
                <tr>
                    <td headers="th1a">1.</td>
                    <th headers="th1b">
                        <a href="targetPhone.html"><nobr>Apple iPhone 13 series</nobr></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                    <tr></tr>
                <tr>
                    <td headers="th1a">2.</td>
                    <th headers="th1b">
                        <a href="targetPhone.html"><nobr>Samsung Galaxy S21 series</nobr></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">3.</td>
                    <th headers="th1b">
                        <a href="targetPhone.html"><nobr>Google Pixel 6</nobr></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">4.</td>
                    <th headers="th1b">
                        <a href="targetPhone.html"><nobr>OnePlus 9 series</nobr></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">5.</td>
                    <th headers="th1b">
                        <a href="targetPhone.html"><nobr>Xiaomi Mi 11</nobr></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">6.</td>
                    <th headers="th1b">
                        <a href="targetPhone.html"><nobr>Huawei P40 and Mate 40 series</nobr></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">7.</td>
                    <th headers="th1b">
                        <a href="targetPhone.html"><nobr>Sony Xperia 1 III</nobr></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">8.</td>
                    <th headers="th1b">
                        <a href="targetPhone.html"><nobr>Oppo Find X3 Pro</nobr></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">9.</td>
                    <th headers="th1b">
                        <a href="targetPhone.html"><nobr>Vivo X60 Pro+</nobr></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">10.</td>
                    <th headers="th1b">
                        <a href="targetPhone.html"><nobr>Realme GT</nobr></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                </tbody>
                
            </table>
        </div><!--=======================END EXPERIMENTAL TABLE STYLE=======================-->

        <div class="top-list xm1"> <!--=======================EXPERIMENTAL TABLE STYLE=======================-->
            <h4 class="section-heading">BEST PHONES FOR 2023</h4>
                <table class="top-phones" cellspacing="0">
                <thead>
                    <tr>
                        <th id="th1a" scope="col"> </th>
                        <th id="th1b" scope="col">Device</th>
                        <th id="th1c" scope="col"> </th>
                        <th scope="col"> </th>
                    </tr>
                </thead>

                <tbody>
                    <tr> </tr>
                <tr>
                    <td headers="th1a">-</td>
                    <th headers="th1b">
                        <a href="targetPhone.html">
                            <nobr>Apple iPhone 15 Pro Max</nobr>
                            <p>Most Powerful iPhone</p></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                    <tr></tr>
                <tr>
                    <td headers="th1a">-</td>
                    <th headers="th1b">
                        <a href="targetPhone.html">
                            <nobr>Samsung Galaxy S23 Ultra</nobr>
                            <p>Best for Artists and Photographers</p></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">-</td>
                    <th headers="th1b">
                        <a href="targetPhone.html">
                            <nobr>Samsung Galaxy Z Fold 5</nobr>
                            <p>Best Folding Phone</p></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">-</td>
                    <th headers="th1b">
                        <a href="targetPhone.html">
                            <nobr>Google Pixel 8</nobr>
                            <p>Best Android Phone for Most People</p></a></th>
                        </nobr></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">-</td>
                    <th headers="th1b">
                        <a href="targetPhone.html">
                            <nobr>Samsung Galaxy A14 5G</nobr>
                            <p>Best Phone Under $200</p></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">-</td>
                    <th headers="th1b">
                        <a href="targetPhone.html">
                            <nobr>Apple iPhone 15</nobr>
                            <p>Best iPhone for Most People</p></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">-</td>
                    <th headers="th1b">
                        <a href="targetPhone.html">
                            <nobr>Motorola Razr+</nobr>
                            <p>Best Flip Phone</p></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">-</td>
                    <th headers="th1b">
                        <a href="targetPhone.html">
                            <nobr>Motorola ThinkPhone</nobr>
                            <p>Best Android for Professionals</p></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a">-</td>
                    <th headers="th1b">
                        <a href="targetPhone.html">
                            <nobr>Nokia 2780 Flip</nobr>
                            <p>Best Voice Phone</p></a></th>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td headers="th1a"></td>
                    <th headers="th1b">
                        <a href="https://www.pcmag.com/picks/the-best-phones" target="_blank">
                            <nobr style="color: red;">Source</nobr>
                    <td headers="th1c"> </td>
                    <td> </td>
                </tr>
                </tbody>
            </table>
        </div><!--=======================END EXPERIMENTAL TABLE STYLE=======================-->

    </div><!--COLUMN SMALL END-->

    <div class="column large"><!--COLUMN LARGE START-->

        <div class="headline-container">
            <div class="headline-container top"></div>
            <img src="images/mobilePhoneBackground.jpg" alt="Phone News Image">
            <div class="headline-container-inside-text">Mobile Gitz</div>
            <div class="headline-container bottom"></div>
        </div>

        <a href="reviews/articleiPhone7plusreview.html">
        <div class="front-news-container">
            <img src="images/iphone7plus.png" alt="Phone News Image">
            <div class="front-news-inside-text">iPhone 7 plus review</div>
        </div></a>

        <a href="targetPhone.html">
        <div class="front-news-container">
            <img src="images/NokiaN86.jpg" alt="Phone News Image">
            <div class="front-news-inside-text">Flashback: the Nokia N86 8MP was the last of the great Symbian slidersFlashback: the Nokia N86 8MP was the last of the great Symbian sliders</div>
        </div></a>

       <!--SMALLER NEWS START-->

        <div class="newsDesc-container"> <!--newsDesc-container-->
            <h1><a href="signup.html">Sign Up/Log In <i class="fa fa-arrow-right"><i class="fa fa-user"> </i> </i></a></h1>

        <table id="news">
            <tr class="newsDesc">
                <th><a href="targetPhone.html">
                <img src="images/iPHONE_14_PHO.png">
                <h2>Apple iPhone 14 Pro review: early adopter island
                    <p>The Dynamic Island is a potentially good idea that’s waiting for the next step</p></h2></a></th>
            </tr>
            <tr><th></th></tr>
            <tr class="newsDesc">
                <th><a href="targetPhone.html">
                <img src="images/samsungGalaxyS23FE.png">
                <h2>Samsung Galaxy S23 FE review: parts bin revisited
                    <p>There’s nothing wrong with the Galaxy S23 FE, but it feels like an uninspired collection of surplus components rather than one for the fans.</p></h2></a></th>
            </tr>
            <tr><th></th></tr>
            <tr class="newsDesc">
                <th><a href="targetPhone.html">
                <img src="images/oneplusopen.png">
                <h2>OnePlus Open review: right size, wrong price
                    <p>The OnePlus Open finds a happy medium between the Pixel Fold and Galaxy Z Fold 5 size-wise, but it’s too close in price to the incumbent foldables.</p></h2></a></th>
            </tr>
            <tr><th></th></tr>
            <tr class="newsDesc">
                <th><a href="targetPhone.html">
                <img src="images/googlepixel8.png">
                <h2>Pixel 8 and 8 Pro review: in Google we trust?
                    <p>These might just be the Pixel phones we’ve been waiting for, but it all depends on how much trust you’re willing to put into Google.</p></h2></a></th>
            </tr>
            <tr class="newsDesc">
                <th><a href="targetPhone.html">
                <img src="images/Apple_iPhone_15_Pro_lineup_Action_button_230912.png">
                <h2>The Action Button is the most significant new iPhone feature in years
                    <p>A little button that you can program to do virtually anything you want unlocks a lot of possibilities for the computer that’s with you the most often.</p></h2></a></th>
            </tr>
            <tr class="newsDesc">
                <th><a href="targetPhone.html">
                <img src="images/motorolamotostvlus5g.png">
                <h2>Motorola Moto G Stylus 5G (2023) review: welcome to bloatware hell
                    <p>Oh, the apps you’ll uninstall.</p></h2></a></th>
            </tr>
            <tr class="newsDesc">
                <th><a href="targetPhone.html">
                <img src="images/nothingphone2.png">
                <h2>Nothing Phone 2 review: the vibes abide
                    <p>Form, function, and a good midrange phone.</p></h2></a></th>
            </tr>
            <tr class="newsDesc">
                <th><a href="targetPhone.html">
                <img src="images/pixelfold.png">
                <h2>The Pixel Fold shows how far ahead Samsung’s folding phones are
                    <p></p></h2></a></th>
            </tr>
            <tr class="newsDesc">
                <th><a href="targetPhone.html">
                <img src="images/motorolarazr.png">
                <h2>Motorola Razr Plus review: the right moves
                    <p>The Razr Plus is a much better phone than the preceding models. It’s a little fiddly, but for the right kind of person, it presents a rewarding experience.</p></h2></a></th>
            </tr>
            <tr class="newsDesc">
                <th><a href="targetPhone.html">
                <img src="images/oneplusnord.png">
                <h2>OnePlus Nord N30 5G review: midrange performance, budget phone problems
                    <p>The Nord N30 is a $300 phone that performs like a $500 phone, but it’s held back by a mediocre camera system — and last year’s Pixel 6A hovering over its shoulder.</p></h2></a></th>
            </tr>            <tr class="newsDesc">
                <th><a href="targetPhone.html">
                <img src="images/appleiphone14.png">
                <h2>Apple iPhone 14 Plus review: a big deal
                    <p>Excellent battery life and a large display make the 14 Plus upgrade-worthy</p></h2></a></th>
            </tr>
            <tr>
                <th><a href="moreStories.html" class="morestories">More Stories</a></th>
            </tr>
        </table>
        </div><!--newsDesc-container-->
        </div><!--COLUMN BELLOW END-->
    </div><!--COLUMN LARGE END-->

</div>

<footer id="contact">
    <p>&copy; 2023. All rights reserved.</p>
    <table class="footer-info">
        <tr>
            <th><h3>Creators</h3></th>
            <th></th>
            <th><h3>Contact Us</h3></th>
            <th></th>
            <th><h3>Follow Us</h3></th>
            <th></th>
            <th>  
                <button id="randomButton">Fun Button</button>

                <script>
                  const websites = [
                    'https://puginarug.com/', 'https://alwaysjudgeabookbyitscover.com/', 'https://weirdorconfusing.com/', 
                    'https://longdogechallenge.com/', 'https://checkbox.toys/scale/', 'https://optical.toys/', 
                    'https://cursoreffects.com/', 'https://onesquareminesweeper.com/', 'http://doughnutkitten.com/',
                    'https://mondrianandme.com/'
                  ];
              
                  document.getElementById('randomButton').addEventListener('click', function() {
                    const randomIndex = Math.floor(Math.random() * websites.length);
                    
                    const randomURL = websites[randomIndex];
                    
                    window.location.href = randomURL;   
                  });
                </script>
            </th>
        </tr>
        <tr>
            <td>Eric Godwin Jose</a></td>
            <td></td>
            <td>
                <i class="fa fa-phone"> </i> 09123456789<br>
                <i class="fa fa-envelope"> </i> rsomeone223@gmail.com
            </td>
            <td></td>
            <td><a href="target.html" target="_black"><i class="fa fa-facebook" style="font-size: 30px;"> </i> Facebook</a></td>
            <td></td>
        </tr>
        <tr>
            <td>Re Ambatang</a></td>
            <td></td>
            <td><i class="fa fa-phone"> </i> 09123456789</td>
            <td></td>
            <td><a href="target.html" target="_black"><i class="fa fa-facebook" style="font-size: 30px;"> </i> Facebook</a></td>
            <td></td>
        </tr>
    </table>
</footer>

</body>
</html>
