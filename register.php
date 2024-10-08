<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginreg.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts/header.js"></script>
    <script src="scripts/reglog.js"></script>
    <title>Register</title>
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
          <input type="text" name="search" id="search" placeholder="&#128270; Search Movies, Theatres ..." />
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
      <center><img id="profilepic" src="/html-experiment-project/images/profile pic.jpg"></center>
      </div>
      <center><a href="reglog.php">Login/Register</a>
        <a href="#">Payment History</a>
        <center>
    </div>
    <div class="cart">
      <div class="cart-head">
          <h1>Cart</h1>
      </div>
      <div class="cart-list">
          <div class= "movie">
              <div class="moviename">
                  <p>Godzilla vs King Kong</p>
              </div>
              <div class="calculate">
                  <div id="numbercal">
                      <button id="sub">-</button>
                      <span id="count">2</span>
                      <!-- <input type="number" id="count" value="2"> -->
                      <button id="add">+</button>
                  </div >
                  <div id="movietot">
                      <span>Rs.</span>
                      <span class="movieprice">800</span>
                  </div>
              </div>
          </div>
          <div class= "movie">
              <div class="moviename">
                  <p>Mank</p>
              </div>
              <div class="calculate">
                  <div id="numbercal">
                      <button id="sub">-</button>
                      <span id="count">1</span>
                      <button id="add">+</button>
                  </div >
                  <div id="movietot">
                      <span>Rs.</span>
                      <span class="movieprice">500</span>
                  </div>
              </div>
          </div>
          <div class= "movie">
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
          </div>
      </div>
      <div class="total-amt">
          <div id="totalsum">
              <span id="totalspan">Total:</span>
              <span id="totalprice">Rs.</span>
              <span id="totalprice" class="total-price-value">2000</span>
          </div>
          <div>
              <button id="checkout">Checkout</button>
          </div>
      </div>
  </div>
  </header>
    <content>
        <div id="loginbkgrd1">
            <div id="register">
                <div><h2 id="loginheader">REGISTER</h2></div>
                <form action='backend/register.php' method=post>
                <div><input type="text" name="Name" id="fullname" class="essentials1" oninput="validateInput(this)" pattern="^[a-zA-Z -]+$" placeholder="Full Name" required></div>
                <div><input type="email" name="Email" id="email" class="essentials1" oninput="validateInput(this)" pattern='[\w._]+@[\w_.]+(\.{1}[a-zA-Z]+){1}' placeholder="Email" required></div>
                <div><input type="text" name="Ph.Number" id="number" class="essentials1" oninput="validateInput(this)" pattern='^(\+91|0)?\d{10}$' placeholder="Phone No." required></div>
                <div class="essentials1">
                    <div class="legend1">Gender</div>
                    <label for="male">male</label>
                        <input type="radio" name="gender" id="male" value="male" required>
                        <label for="F">female</label>
                        <input type="radio" name="gender" id="female" value="female">
                        <label for="other">other</label>
                        <input type="radio" name="gender" id="other" value="other">
                </div>
                <div><input type="date" name="dob" class="essentials1" onInput="validateAge(this)" required></div>
                <div><input type="text" name="username" id="username" class="essentials1" oninput="validateInput(this)" pattern="^[a-zA-Z][\w.]+$" placeholder="Username" required></div>
                <div><input type="password" name="password" minlength="6" id="password" class="essentials1" placeholder="Password" required></div>
                <div><button type="submit" id="loginbutton" class="button1"> SignUp</button></div>
                </form>
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
      <li>+919254336743  <i class="fa fa-phone"></i></li>
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
  <center><h4>OUR VISION</h4></center>
<center><p>offering a wide range of theater and movie selection in various regions in India at one click!!</p></center>
</div>
</footer>

</body>
</html>