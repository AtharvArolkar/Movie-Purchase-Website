<?php

session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/tophits.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="scripts/header.js"></script>
  <title>BookMyMovie-Top Hits</title>
</head>

<body>
  <header>
    <div class="navbar1">
      <span>
        <select id="location">
          <optgroup>
            <option id="mum">Mumbai</option>
            <option id="pan">Panjim</option>
            <option id="del">Delhi</option>
            <option id="ban">Banglore</option>
            <option id="pun">Pune</option>
          </optgroup>
        </select>
      </span>
      <h1 id="sitename">BookMyMovie</h1>
      <span>
        <div>
          <input type="text" name="search" list="txtHint" id="search" onkeyup="ajaxFunction(this.value)" placeholder="&#128270; Search Movies, Theatres ..." />
          <datalist id="txtHint" >
          </datalist>
        </div>
      </span>
    </div>
    <div>
      <nav class="navbar2">
        <span><a href="index.php">Home</a></span>
        <span><a href="TopHits.php">Top Hits</a></span>
        <span id="cart-button"><i class="fa fa-shopping-cart"></i><span id="cart-item-total">0</span></span>
        <span id="threelines"><i class="fa fa-user-circle"></i></span>
      </nav>
    </div>
    <div class="sidenavbar">
      <div id="profilediv">
      <center><img id="profilepic" src="/./images/profile pic.jpg"></center>
      </div>
      <?php
      if(isset($_SESSION['username'])){
        echo '<center><a href="reglog.php">'.$_SESSION["username"].'</a>';
        echo '<a href="http://localhost:8080/bookmymovie/payment_history.jsp?username='.$_SESSION["user"].'">Payment History</a><center>';
        echo '<a href="/backend/logout.php">Logout</a>';
      }
      else{
      echo '<center><a href="reglog.php">Login/Register</a>';
      echo '<a href="#">Payment History</a><center>';
    }
      ?>
    </div>
    <div class="cart">
      <div class="cart-head">
          <h1>Cart</h1>
      </div>
      <div class="cart-list">



          <!-- <div class= "movie">
              <div class="moviename">
                  <p>Hamilton</p>
              </div>
              <div class="calculate">
                  <div id="numbercal">
                      <button id="sub">-</button>
                      <span id="count">1</span>
                      <button id="add">+</button>
                  </div >
                  <div id="movietot">
                      <span>Rs.</span>
                      <span class="movieprice">600</span>
                  </div>
              </div>
          </div> -->
      </div>
      <div class="total-amt">
          <div id="totalsum">
              <span id="totalspan">Total:</span>
              <span id="totalprice">Rs.</span>
              <span id="totalprice" class="total-price-value">0</span>
          </div>
          <div>
         <?php
          if(isset($_SESSION['user'])){
            $username = $_SESSION['user'];
            echo '<button class="checkout" id="checkout" onclick="submitorder(\''.$username.'\')" >Checkout</button>';
          }
          else{
            echo '<button class="checkout" id="checkout" onclick="submitorder(null)" >Checkout</button>';
          }
          ?>
              
          </div>
      </div>
  </div>
  </header>
  <content>
    <div class="hits">
      <div id="hittitle">Weekly Hits</div>
      <div class="posterNname">
        <div class="weeklyhits">
          <div class="hitgallery">
            <a href="images/hit1.jpg">
              <img src="images/hit1.jpg">
              <!-- <a href="#" id="hitname">Godzilla vs king kong</a> -->
            </a>
          </div>
          <div class="hitgallery">
            <a href="images/hit2.jpg">
              <img src="images/hit2.jpg">
            </a>
          </div>
          <div class="hitgallery">
            <a href="images/hit3.jpg">
              <img src="images/hit3.jpg">
            </a>
          </div>
          <div class="hitgallery">
            <a href="images/hit4.jpg">
              <img src="images/hit4.jpg">
            </a>
          </div>
          <div class="hitgallery">
            <a href="images/hit5.jpg">
              <img src="images/hit5.jpg">
            </a>
          </div>
          <div class="hitgallery">
            <a href="images/hit6.jpg">
              <img src="images/hit6.jpg">
            </a>
          </div>
          <div class="hitgallery">
            <a href="images/hit7.jpg">
              <img src="images/hit7.jpg">
            </a>
          </div>
        </div>
        <div class="movienames">
          <span><a href="#" id="hitname">Godzilla vs king kong</a></span>
          <span><a href="#" id="hitname">Mumbai Sanga</a></span>
          <span><a href="#" id="hitname">The Preist</a> </span>
          <span><a href="#" id="hitname">Tom & Jerry</a> </span>
          <span><a href="#" id="hitname">Monstrer Hunter</a> </span>
          <span><a href="#" id="hitname">Raya and the Last Dragon</a></span>
          <span><a href="#" id="hitname">Tenet</a> </span>
        </div>
        <div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Godzilla vs king kong',300)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Mumbai Sanga',150)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('The Preist',140)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Tom & Jerry',200)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Monstrer Hunter',150)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Raya and the Last Dragon',250)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
            <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Tenet',300)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
        

           





        </div>
      </div>
    </div>

    <div class="hits">
      <div id="hittitle">Monthly Hits</div>
      <div class="posterNname">
        <div class="weeklyhits">
          <div class="hitgallery">
            <a href="images/hit1.jpg">
              <img src="images/hit1.jpg">
            </a>
          </div>
          <div class="hitgallery">
            <a href="images/hit4.jpg">
              <img src="images/hit4.jpg">
            </a>
          </div>
          <div class="hitgallery">
            <a href="images/hit5.jpg">
              <img src="images/hit5.jpg">
            </a>
          </div>
          <div class="hitgallery">
            <a href="images/hit6.jpg">
              <img src="images/hit6.jpg">
            </a>
          </div>
          <div class="hitgallery">
            <a href="images/hit7.jpg">
              <img src="images/hit7.jpg">
            </a>
          </div>
          <div class="hitgallery">
            <a href="images/hit2.jpg">
              <img src="images/hit2.jpg">
            </a>
          </div>
        </div>
        <div class="movienames">
          <span><a href="#" id="hitname">Godzilla vs king kong</a></span>
          <span><a href="#" id="hitname">Tom & Jerry</a> </span>
          <span><a href="#" id="hitname">Monstrer Hunter</a> </span>
          <span><a href="#" id="hitname">Raya and the Last Dragon</a></span>
          <span><a href="#" id="hitname">Tenet</a> </span>
          <span><a href="#" id="hitname">Mumbai Sanga</a></span>
        </div>
        <div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Godzilla vs king kong',300)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Tom & Jerry',200)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Monstrer Hunter',150)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Raya and the Last Dragon',250)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Tenet',300)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
          <div  class="cartButtonsholder"><button class="cartButton" onclick="addmov('Mumbai Sanga',150)">Add To Cart<i class="fa fa-shopping-cart"></i></button></div>
      </div>
    </div>

  </content>

  <footer>
    <div class="footer-container">
      <div class="footer-column">
        <h4 class="footer-list-header">About Pavilion</h4>
        <ul class="footer-list-top">
          <li><a href="#">GET TO KNOW US</a></li>
          <li><a href="#">PROMOS</a></li>
          <li><a href="#">EVENTS</a></li>
          <li><a href="#">privacy</a></li>
        </ul>
      </div>
      <div class="vl"></div>
      <div class="footer-column">
        <h4 class="footer-list-header">Help Me!</h4>
        <ul class="footer-list-top">
          <li>+919254336743 <i class="fa fa-phone"></i></li>
          <li><a href="#">bookmymovie@gmail.com <i class="fa fa-envelope"></i></a></li>
        </ul>
      </div>
      <div class="vl"></div>
      <div class="footer-column">
        <h4 class="footer-list-header">Connect with us</h4>
        <a href="facebook.com"><i class="fa fa-facebook"></i></a>
        <a href="twitter.com"><i class="fa fa-twitter"></i></a>
        <a href="instagram.com"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="footer-bottom">
      <center>
        <h4>OUR VISION</h4>
      </center>
      <center>
        <p>offering a wide range of theater and movie selection in various regions in India at one click!!</p>
      </center>
    </div>
  </footer>
</body>

</html>