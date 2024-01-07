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

<style>
</style>

</head>
<body>
    <div class="topnav-container">
    <div class="topnav" id="myTopnav"><!--TOPNAV START-->
        <div id="logoname"><img src="logo/MobileGitz.png"></div>
        <a href="index.php">Home</a>
        <!--<a href="signup.html" class="signupbutton" style="float: right;" title="Sign Up/Login">
            <i class="fa fa-user" style="font-size: 30px;"></i></a>-->
    </div>
    </div>

<div class="front-page-container">
    <div class="signupform-container">
        <table class="xm2 signupform" cellspacing="10px" action="signup-check.php" method="post">
            <tr>
                <th><h1>Sign Up</h1></th>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
            </tr>
            <tr>    
                <th class="signupth1a">First Name</th>
                <th class="openspacetable"></th>
                <th class="signupth1b">Last Name</th>
            </tr>
            <tr>
                <td>
                    <?php if (isset($_GET['firstName'])) { ?>
                        <input type="text" id="firstName" placeholder="" value="<?php echo $_GET['firstName']; ?>" required>
                    <?php } else { ?>
                        <input type="text" id="firstName" required>
                    <?php } ?>
                </td>
                <td class="openspacetable"></td>
                <td>
                    <?php if (isset($_GET['lastName'])) { ?>
                        <input type="text" id="lastName" placeholder="" value="<?php echo $_GET['lastName']; ?>" required>
                    <?php } else { ?>
                        <input type="text" id="lastName" required>
                    <?php } ?>
                </td>
            </tr>
            <tr><th style="padding-bottom: 20px;"></th></tr>
            <tr> 
                <th class="signupth1c">User Name</th>
                <th class="openspacetable"></th>
                <th class="signupth1d">Email</th>
            </tr>
            <tr>
                <td>
                    <?php if (isset($_GET['userName'])) { ?>
                        <input type="text" id="userName" placeholder="" value="<?php echo $_GET['userName']; ?>" required>
                    <?php } else { ?>
                        <input type="text" id="userName" required>
                    <?php } ?>
                </td>
                <td class="openspacetable"></td>
                <td>
                    <?php if (isset($_GET['email'])) { ?>
                        <input type="email" id="email" placeholder="" value="<?php echo $_GET['email']; ?>" required>
                    <?php } else { ?>
                        <input type="email" id="email" required>
                    <?php } ?>
                </td>
            </tr>
            <tr><th style="padding-bottom: 20px;"></th></tr>
            <tr>
                <th class="signupth1e">Password</th>
            </tr>
            <tr>
                <td>
                    <input type="password" id="pass" required>
                </td>               
                <td>
                    <input type="password" id="password_confirmation" name="password_confermation">
                </td>
                <td><button type="submit" value="Sign Up"></button></td>
            </tr>
        </table>
    </div>
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