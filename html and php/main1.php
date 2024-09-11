<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashew supplies</title>
    <link rel="stylesheet" href="../css/main01.css">

   

    
    
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
                <li><a href="#">Order Online</a></li>
                <i class="fa-solid fa-magnifying-glass"></i></td>
            </ul>
            </tr>
            </table>
        </nav>
    </div><hr>
    
    
    <div class="nigga" style="background-color: #f5f5f5; height: 100px;">
        <span style="display: flex;">
       
        <h2 style="padding-left: 20px;" >Cashew's</h2>
        <h2 style="margin-left: 80%;"><i class="fa-solid fa-house"><a href="farmer.php"><span style="font-weight: normal; font-size: small; font-family: sans-serif;"> > Products > Cashews</span></a> </i></h2>
        </span>
    </div>
     
    <br>    
    <br>
    <br>
    <div class="cont" style="position: relative;padding-left: 50px;">
        <h3 style="width: 40%;font-family: sans-serif;">Cashews-suppliers-in-Coimbatore</h3>
        <br>
        <hr>
        <select name="sorting" class="orderby">
            <option value="def" selected="selected">Default Sorting</option>
            <option value="pop">Sort by Popularity</option>
            <option value="lat">Sort by Latest</option>
            <option value="ltoh">Sort by price:Low to High</option>
            <option value="htol">Sort by price:High to Low</option>
        </select>
        <br>
        <br>
        <br>
        <hr>
        <div class="card" style="display: flex; justify-content: space-between;">
            <div class="cash" style=" width: 20%;">
           <form action="almondcart.php" method="POST">
                <img src="../assets/cashewnuts.webp" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Cashew's Combo Pack</p>
                <p style="font-weight: bold; width: 100%;">Cashew Kernals (Premium)250g</p>
                <p style="color: rgb(47, 154, 23); font-size: 18x; width: 100%;">₹25</p>
                <input type="hidden" name="product_id" value="8">
                <input type="hidden" name="product_name" value="Cahsew Combo Pack">
                <input type="hidden" name="product_price" value="30.00">
                <button type="submit" class="bn">Add to Cart</button>
            </form>
            </div>
            <div class="cash" style="width: 20%;">
                <form action="almondcart.php" method="POST">
                <img src="../assets/cashewnuts.webp" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Cashew's Combo Pack</p>
                <p style="font-weight: bold; width: 100%;">Cashew Kernals (Premium)1Kg</p>
                <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;">₹140</p>
                <input type="hidden" name="product_id" value="9">
                <input type="hidden" name="product_name" value="Cahsew Combo Kernal Pack">
                <input type="hidden" name="product_price" value="140.00">
                <button class="bn">Add to Cart</button>
            </form>
            </div>
            <div class="cash" style="width: 20%;">
                <img src="../assets/cashewnuts.webp" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Cashew's Combo Pack</p>
                <p style="font-weight: bold; width: 100%;">Cashew Kernals (Split)1Kg</p>
                <p style="color:rgb(47, 154, 23); font-size: 18px; width: 100%;">$35</p>
                <button class="bn">Add to Cart</button>
            </div>
            <div class="cash" style="width: 20%;">
                <img src="../assets/cash2.webp" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Cashew's Combo Pack</p>
                <p style="font-weight: bold; width: 100%;">Cashew Kernals (W320)1Kg</p>
                <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;">$40</p>
                <button class="bn">Add to Cart</button>
            </div>
            
        </div>
        <br>
        <br>
        <div class="card" style="display: flex; justify-content: space-between;">
            <div class="cash" style="width: 20%;">
                <img src="../assets/caa.webp" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Cashew's Combo Pack</p>
                <p style="font-weight: bold; width: 100%;">Cashew Kernals (W320) 250g</p>
                <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;">$8</p>
                <button class="bn">Add to Cart</button>
            </div>
            <div class="cash" style="width: 20%;">
                <img src="../assets/chilli.webp" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Cashew's Combo Pack</p>
                <p style="font-weight: bold; width: 100%;">Chilli Cashew,250g</p>
                <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;">$14</p>
                <button class="bn">Add to Cart</button>
            </div>
            <div class="cash" style="width: 20%;">
                <img src="../assets/pepper.webp" style="width: 100%;">
                <p style="font-style: italic; color: gray; width: 100%;">Cashew's Combo Pack</p>
                <p style="font-weight: bold; width: 100%;">Pepper Cashew,250g</p>
                <p style="color: rgb(47, 154, 23); font-size:18px; width: 100%;">$17</p>
                <button class="bn">Add to Cart</button>
            </div>
            <div class="cash" style="width: 20%;">
               
                <p style="font-style: italic; color: gray; width: 100%;"></p>
                <p style="font-weight: bold; width: 100%;"></p>
                <p style="color: rgb(47, 154, 23); font-size: 18px; width: 100%;"></p>
                <!-- <button class="bn">Add to Cart</button> -->
            </div>
            
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    
    
    <footer >
        <table class="foot">
            <tr class="head">
                <td>About Us</td>
                <td>Contact Us</td>
                <td>Registered</td>
                <!-- <td>Please Share This</td> -->
            </tr>
            <tr class="head2">
                <td>Farmernuts.com  is an Whole market for nuts ,Spices,Dry fruits which is powered by SPROUT SPRING LLP</td>
                <td>SPROUT SPRIN
                    G LLP D No . 39, Nehru Nagar, Maniakarampalayam, Ganapathy, Coimbatore -641006 Mobile - 7200885017</td>
                <td class="image"><img height="100px" width="100px
                    " src="../assets/india.webp"></td>
                <!-- <td><i class="fa-brands fa-facebook"></i></td> -->
                 <!-- <td><i class="fa-brands fa-instagram"></i></td>
                <td><i class="fa-brands fa-twitter"></i></td>  -->
            </tr>
        </table>
        </footer>


      
</body>
</html>
