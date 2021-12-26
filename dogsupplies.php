<?php 
 session_start();
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['sess_user']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tails of joy</title>
    <link rel="stylesheet" type="text/css" href="dogsupplies.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <div class="HeaderBox">
        <div style="padding-left: 5px; float: left"><h2>TAILS OF JOY</h2></div>
        <div class="titlebar">
          <ul>
          <li class="Home">
              <a href="petad.php">
                <i class="fa fa-paw" aria-hidden="true"></i>
                <p>Pet Add</p>
              </a>
            </li>
            <li class="Home">
              <a href="index.php">
                <i class="fa fa-home" aria-hidden="true"></i>
                <p>Home</p>
              </a>
            </li>
            <li class="Home">
              <a href="postad.php">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <p>Post Add</p>
              </a>
            </li>
            <!--<li class="Home">
              <a href="#">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <p>Cart</p>
              </a>
            </li>-->

            <?php if(isset($_SESSION['sess_user'])) :?>
            <li class="Home">
              <a href="#">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <p><?php echo $_SESSION['sess_user'];?></p>
              </a>
              <ul>
                <li><a href="index.php?logout='1'">logout</a></li>
              </ul>
            </li>
            <?php endif ?>

            <?php if(!isset($_SESSION['sess_user'])): ?>
            <li class="Home">
              <a href="#">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <p>Sign up</p>
              </a>
              <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
              </ul>
            </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>
    <div style="padding-top: 80px; background: white;" align="center">
      <h1><font color="#8123ec">Our Collections</font></h1>
      <div class="line1" align="center" style="padding-top: 50px">
        <a href="dog food\dogfood.php">
          <figure>
            <img src="food.PNG" alt="" height="220px" width="220px" />
            <figcaption>Food</figcaption>
          </figure>
        </a>
        <a href="dog clothes\dogclothes.php">
          <figure>
            <img src="clothes.PNG" alt="" alt="" height="220px" width="220px" />
            <figcaption>Clothes</figcaption>
          </figure>
        </a>
      </div>
      <br /><br />
      <div class="line2" align="center">
        <a href="dog bed\dogbed.php">
          <figure>
            <img src="beds.PNG" alt="" height="220px" width="220px" />
            <figcaption>Beds</figcaption>
          </figure>
        </a>
      </div>
    </div>
    <br><br>
    <footer>
      <div class="main-content">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
            <p>
              Tails of joy is your one-stop online pet supply store, where you
              can find high-quality pet supplies, which helps your pet at every
              life-stage. Tails of joy will help you choose the most appropriate
              dog food, supplements, treats, toys, dog accessories. Not only
              that but also for cats, guinea pigs, rabbits, hamsters, turtles,
              birds & aquatic animals.
            </p>
            <div class="social">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="cenetr box">
          <h2>Customer Care</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Kurla, Mumbai</span>
            </div>
            <div class="Phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+91-7658760980</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">TailsOfJoy@gamil.com</span>
            </div>
          </div>
        </div>
        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required />
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" cols="25" required></textarea>
              </div>
              <div class="btn">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
