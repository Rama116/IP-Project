<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myaccount</title>
    <link rel="stylesheet" href="../css/farmern.css">

    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="whole">
        
       
        <nav class="main1">
            <div class="soc">
                <a href="https://www.instagram.com/ramazz_zz?igsh=OG5xZWdjZWlhemxj"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://x.com/Rama85315599?t=N0rHjJhgJs5EZE5Rp06v3g&s=08 "><i class="fa-brands fa-twitter"></i></a>
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
               <td><div class="image">
                    <img src="../assets/farmerlogo.webp" alt="Logo">
                </div></td>
                <td width="10px"></td>
                <td><li><a href="main1.php">Cashews</a></li>
                <li><a href="drygrape.php">Dry grapes</a></li>
                <li><a href="whole3.php">Whole spices</a></li>
                <li><a href="almonds.php">Almonds</a></li>
                <li><a href="Walnuts.php">Walnuts</a></li>
                <select class="sel" name="nuts" id="one" onchange="window.location.href=this.value;">
                    <option class="ek" value="ek">Nuts & Dry Druits</option>
                    <option class="dho" value="pista.php">Pistachios</option>
                    <option class="theen" value="seedsandnut.php">Seeds and nuts</option>
                    <option class="char" value="drieffruit.php">Dried Frutis</option>
                </select>
                <li><a href="dates.php">Dates</a></li>
                <li><a href="admin_panel.php">admin</a></li>
                <i class="fa-solid fa-magnifying-glass"></i></td>
            </ul>
            </tr>
            </table>
        </nav>
    </div><hr>
    
    
    <div class="nigga" style="background-color: #f5f5f5; height: 100px;">
        <span style="display: flex;">
       
        <h2 style="padding-left: 20px;" >My account</h2>
        <h2 style="margin-left: 80%;"><i class="fa-solid fa-house"><a href="farmer.php"><span style="font-weight: normal; font-size: small; font-family: sans-serif;"> > My account</span></a> </i></h2>
        </span>
    </div>
     
    <br>
    <h1 style="font-size: 60px; padding-left: 670px;">
        Login
    </h1>
    <!-- <div class="logg">
        <label>Username or Email</label>
        <br>
        <input type="text" name="user" style="width: 300px; height: 30px;"  >
        <br>
        <label>Password</label>
        <br>    
        <input type="password" name="user" style="width: 300px; height: 30px;">
        <br>
        <input type="submit" name="su1b" class="sub">
    </div> -->
    <form action="backlog.php" method="post">
    <div class="wrapper" style="border: 0.5px solid rgb(119, 110, 110);width: 30%; display: flex;flex-direction: column;margin-bottom: 5%;height: 300px; justify-content: center;align-items: center;margin-left: 530px;">
        <div class="user">
            <label>UserName or Email address</label>
            <br>
            <input type="text" name="username" placeholder="username" style="width: 250px; height: 30px;" required>
            <i class='bx bxs-user'></i>
        </div><br>
        
        <div class="user">
            <label>Password</label><br>
           <input type="password" name="password" placeholder="password" style="width: 250px; height: 30px;" required>
           <i class='bx bxs-lock-alt'></i>
        </div><br><br>
        <div class="check">
           <label><input type="checkbox" name="remember">Remember Me?</label>
            <a href="register.php">Register Here</a>
        </div><br>
        <button type="submit" class="bn" style="background-color: rgb(40, 166, 215); width: 80px; height: 30px; border-radius: 8px; color: white;">LOG IN</button>
    </div>
</form>


    <footer >
        <table class="foot">
            <tr class="head">
                <td>About Us</td>
                <td>Contact Us</td>
                <td>Registered</td>
                <td>Please Share This</td>
            </tr>
            <tr class="head2">
                <td>Farmernuts.com  is an Whole market for nuts ,Spices,Dry fruits which is powered by SPROUT SPRING LLP</td>
                <td>SPROUT SPRIN
                    G LLP D No . 39, Nehru Nagar, Maniakarampalayam, Ganapathy, Coimbatore -641006 Mobile - 7200885017</td>
                <td class="image"><img height="100px" width="100px
                    " src="../assets/india.webp"></td>
                <td><i class="fa-brands fa-facebook"></i></td>
                 <!-- <td><i class="fa-brands fa-instagram"></i></td>
                <td><i class="fa-brands fa-twitter"></i></td>  -->
            </tr>
        </table>
        </footer>
</body>
</html>
