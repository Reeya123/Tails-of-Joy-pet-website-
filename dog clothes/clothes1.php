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
    <link rel="stylesheet" type="text/css" href="\Mini_project/style1.css" />
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
              <a href="\Mini_project/index.php">
                <i class="fa fa-home" aria-hidden="true"></i>
                <p>Home</p>
              </a>
            </li>
            <li class="Home">
              <a href="\Mini_project/postad.php">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <p>Post Add</p>
              </a>
            </li>
            <li class="Home">
              <a href="\Mini_project/dogsupplies.php">
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
                <li><a href="\Mini_project/index.php?logout='1'">logout</a></li>
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
                <li><a href="\Mini_project/login.php">Login</a></li>
                <li><a href="\Mini_project/register.php">Register</a></li>
              </ul>
            </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>
    <br />

    <img src="clothes1.png" width="300" height="250" align="centre" />
    <h3>Rs.999</h3>
    <p>
      Pawsindia dog/cat tanks are the perfect addition to your dog wardrobes
      this summer. These ganjis are great for everyday use as well as occasion
      wear. Extremely easy to wear these dog ganjis have a velcro attachment on
      side for an effortless dressing experience. The velcro also allows the dog
      ganjis to remain a comfortable fit for dogs throughout the day. Helps in
      controlling shedding and helping with skin burns and other skin related
      issues. Dog ganjis help keep the skin issues disinfected. Extremely
      breathable and pet for the scorching heat this summer in India, these are
      made out of 100% cotton. Human grade stitching on the dog tanks help pet
      owners get full use out of the products as this will last in your pets
      wardrobe forever. Can be hands washed or machines washed. Amazing quality
      prints which last forever. Pawsindia dog ganjis are great for short coat
      and long coat dogs both. Launching all over prints for dogs for the first
      time in India, let your dog rock pawsindia ganjis in style.
    </p>
    <br />
    <h2>Features</h2>
    <ol>
      <li>Velcro on the side for easy wearing</li>
      <li>100% cotton</li>
      <li>Human grade stitching</li>

      <li>Machine wash/hand wash suitable for cats as well</li>
      <li>Regular fit</li>
    </ol>

    <form action="/Mini_project\buy.php">
      <button value="Buy now"> Buy Now</button>
    </form><br><br>

    <h3>Reviews(3)</h3>
    <br />
    <p><b> sushant goyal;</b></p>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitat
    </p>
    <br />
    <p><b>ridhima pandit;</b></p>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolorexsjuuwq;pppbxg t getbx x magna
      aliqua. Ut enim ad minim veniam, quis nostrud exercitat
    </p>
    <br />
    <p><b> kim .B; </b></p>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dhsfjghdbhsbgxolore magna aliqua. Ut enim
      ad minim veniam, quis nostrud exercitat
    </p>

    <br /><br />
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
