<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="../css/farmern.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="whole">
        <nav class="main1">
            <div class="soc">
                <a href="https://www.instagram.com/ramazz_zz?igsh=OG5xZWdjZWlhemxj"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://x.com/Rama85315599?t=N0rHjJhgJs5EZE5Rp06v3g&s=08"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.facebook.com/share/YGfmTcs24ttTNUUB/?mibextid=qi2Omg"><i class="fa-brands fa-facebook"></i></a>
            </div>
            <ul class="first">
                <li class="one1"><a href="farmer.php">Home</a></li>
                <li class="two2"><a href="login.php">My account</a></li>
                <li class="three3"><a href="Walnuts.php">Checkout</a></li>
                <li class="four4"><a href="cart2.php">Cart</a></li>
                <li class="five5"><a href="main1.php">Shop</a></li>
            </ul>
        </nav>
    </div>
    <hr>
    <div class="whole2">
        <nav class="main2">
            <table>
                <tr>
                    <ul class="second">
                        <td>
                            <div class="image">
                                <img src="../assets/farmerlogo.webp" alt="Logo">
                            </div>
                        </td>
                        <td width="10px"></td>
                        <td>
                            <li><a href="main1.php">Cashews</a></li>
                            <li><a href="drygrape.php">Dry grapes</a></li>
                            <li><a href="whole3.php">Whole spices</a></li>
                            <li><a href="almonds.php">Almonds</a></li>
                            <li><a href="Walnuts.php">Walnuts</a></li>
                            <select class="sel" name="nuts" id="one" onchange="window.location.href=this.value;">
                                <option class="ek" value="ek">Nuts & Dry Fruits</option>
                                <option class="dho" value="pista.php">Pistachios</option>
                                <option class="theen" value="seedsandnut.php">Seeds and nuts</option>
                                <option class="char" value="driedfruit.php">Dried Fruits</option>
                            </select>
                            <li><a href="dates.php">Dates</a></li>
                            <li><a href="#">Order Online</a></li>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </td>
                    </ul>
                </tr>
            </table>
        </nav>
    </div>
    <hr>
    <div class="nigga" style="background-color: #f5f5f5; height: 100px;">
        <span style="display: flex;">
            <h2 style="padding-left: 20px;">Register</h2>
            <h2 style="margin-left: 80%;">
                <i class="fa-solid fa-house"><a href="login.php"><span style="font-weight: normal; font-size: small; font-family: sans-serif;"> > to Login</span></a></i>
            </h2>
        </span>
    </div>
    <br>
    <h1 style="font-size: 60px; padding-left: 600px;">Register</h1>
    <form action="registerdata.php" method="post">
        <div class="wrapper" style="border: 0.5px solid rgb(119, 110, 110);width: 30%; display: flex;flex-direction: column;margin-bottom: 5%;height: 400px; justify-content: center;align-items: center;margin-left: 530px;">
            <div class="user">
                <label>Username</label>
                <br>
                <input type="text" name="username" placeholder="username" style="width: 250px; height: 30px;" required>
                <i class='bx bxs-user'></i>
            </div>
            <br>
            <div class="user">
                <label>Email Address</label>
                <br>
                <input type="email" name="email" placeholder="email" style="width: 250px; height: 30px;" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <br>
            <div class="user">
                <label>Password</label>
                <br>
                <input type="password" name="password" placeholder="password" style="width: 250px; height: 30px;" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <p><a href="login.php"> Back to Login</a></p>
            <!-- <br> -->
            <button type="submit" class="bn" style="background-color: rgb(40, 166, 215); width: 80px; height: 30px; border-radius: 8px; color: white;">REGISTER</button>
        </div>
    </form>
    <footer>
        <table class="foot">
            <tr class="head">
                <td>About Us</td>
                <td>Contact Us</td>
                <td>Registered</td>
                <td>Please Share This</td>
            </tr>
            <tr class="head2">
                <td>Farmernuts.com is a wholesale market for nuts, spices, dry fruits powered by SPROUT SPRING LLP</td>
                <td>SPROUT SPRING LLP, D No. 39, Nehru Nagar, Maniakarampalayam, Ganapathy, Coimbatore - 641006 Mobile - 7200885017</td>
                <td class="image"><img height="100px" width="100px" src="../assets/india.webp"></td>
                <td><i class="fa-brands fa-facebook"></i></td>
            </tr>
        </table>
    </footer>
</body>
</html>
