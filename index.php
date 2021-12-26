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
    <link rel="stylesheet" type="text/css" href="style1.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <div class="HeaderBox">
        <div style="padding-left: 5px; float: left; color: black;"><h2>TAILS OF JOY</h2></div>
        <div class="titlebar">
          <ul>
          <li class="Home">
              <a href="petad.php">
                <i class="fa fa-paw" aria-hidden="true"></i>
                <p>Pet Add</p>
              </a>
            </li>
            <li class="Home">
              <a href="postad.php">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <p>Post Add</p>
              </a>
            </li>
            <li class="Home">
              <a href="dogsupplies.php">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <p>Pet Supplies</p>
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
    <a href="dogsupplies.php">
    <img src="homead1.png" width="100%" />
            </a>
    <br /><br />

    <div align="center" style="color: #003300; font-weight: 300">
      <h2>Adoption ads</h2>
      <br />
      <p>Discover top-rated adoption ads</p>

      <br /><br />
    </div>
    <div class="slide-container">
      <span id="slider-image-1"></span>
      <span id="slider-image-2"></span>
      <span id="slider-image-3"></span>
      <div class="image-container">
        <img src="AddCat.png" class="slider-image" />
        <img
          src="ADDrabbit.png"
          class="slider-image"
          style="padding-left: 5px; padding-right: 5px"
        />
        <img
          src="AddDog.png"
          class="slider-image"
          style="padding-left: 5px; padding-right: 5px"
        />
        <img
          src="Rabbiit2.png"
          class="slider-image"
          style="padding-left: 5px; padding-right: 5px"
        />
      </div>
      <div class="button-container">
        <a href="#slider-image-1" class="slider-button"></a>
        <a href="#slider-image-2" class="slider-button"></a>
      </div>
    </div>


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