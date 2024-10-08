<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>BookMyMovie</title>
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="scripts/index.js"></script>
  <script src="scripts/header.js"></script>
</head>
<body class="body1">
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
        <span id="cart-button"><i class="fa fa-shopping-cart"></i></span>
        <span id="threelines"><i class="fa fa-user-circle"></i></span>
      </nav>
    </div>
    <div class="sidenavbar">
      <div id="profilediv">
        <center><img id="profilepic" src="./images/profile pic.jpg"></center>
      </div>
      <?php
      if(isset($_SESSION['username'])){
        echo '<center><a href="#">'.$_SESSION["username"].'</a>';
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
          
      </div>
      <div class="total-amt">
          <div id="totalsum">
              <span id="totalspan">Total:</span>
              <span id="totalprice">Rs.</span>
              <span id="totalprice" class="total-price-value">0</span>
          </div>
          <div>
              <button id="checkout">Checkout</button>
          </div>
      </div>
  </div>
  </header>
  <content>
    <div class="slider">
      <div class="slides">
        <!--slide images start-->
        <div class="slide first">
          <img src="images/poster1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/poster2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/poster3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="images/poster4.jpg" alt="">
        </div>
        <!--slide images end-->
        <div class="arrow">
          <a class="prev" onclick="prev()">&#10094;</a>
          <a class="next" onclick="next()">&#10095;</a>
        </div>
        <!--slider navigation start-->
        <div class="slider-nav">
        </div>
        <!--slider navigation end-->
      </div>
    </div>
    <div class="genres-container">
      <div class="genres-title">Genres</div>

      <div class="genre-gallery">
        <a target="_blank" href="images/genre1.jpg">
          <img src="images/genre1.jpg" alt="Fantasy" width="600" height="400" />
        </a>
      </div>

      <div class="genre-gallery">
        <a target="_blank" href="images/genre2.jpg">
          <img src="images/genre2.jpg" alt="Superhero" width="600" height="400" />
        </a>
      </div>

      <div class="genre-gallery">
        <a target="_blank" href="images/genre3.jpg">
          <img src="images/genre3.jpg" alt="Action" width="600" height="400" />
        </a>
      </div>

      <div class="genre-gallery">
        <a target="_blank" href="images/genre4.jpg">
          <img src="images/genre4.jpg" alt="Drama" width="600" height="400" />
        </a>
      </div>

      <div class="genre-gallery">
        <a target="_blank" href="images/genre5.jpg">
          <img src="images/genre5.jpg" alt="Mystery" width="600" height="400" />
        </a>
      </div>
      <div class="genre-gallery">
        <a target="_blank" href="images/genre6.jpg">
          <img src="images/genre6.jpg" alt="Comedy" width="600" height="400" />
        </a>
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
