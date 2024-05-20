<!DOCTYPE html>
<?php
require 'config.php';
$Bookingid = $_GET['id'];

$sql = "SELECT * FROM bookings WHERE id='$Bookingid'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    $fullname =$row["fullname"];
    $email =$row["email"];
    $age =$row["age"];
    $quantity =$row["quantity"];
    $package_type =$row["package_type"];
    $checking_date =$row["checking_date"]; 
    $checkout_date =$row["checkout_date"];
}

$conn->close();
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>booking updte form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">
        <link rel="stylesheet" href="css/update.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/booking.css">
    </head>
    <body>
        <!-- navbar  -->
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.html" class = "site-brand">
                    Green&nbsp;Leaf<span>&nbsp;Tours</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "index.html" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "gallery.html" class = "nav-link">Tours</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "package.html" class = "nav-link">Achievements</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "about.html" class = "nav-link">About Us</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "contact.html" class = "nav-link">Contact</a>
                        </li>
                          <li class = "nav-item">
                            <a href = "user dashboard.html" class = "nav-link">My Profile</a>
                        </li>
                          <li class = "nav-item">
                            <a href = "contact.html" class = "nav-link">Sign Up</a>
                        </li>
                          <li class = "nav-item">
                            <a href = "contact.html" class = "nav-link">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of navbar  -->

        <!-- header -->
        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>Update Your Booking</h1>
                    <p> Feel free to explore the various options available to customize your experience and make the most out of our platform.</p>
                </div>
               
            </div>
        </header>
        <!-- header -->

        <!-- featured section -->
        
        <!-- end of featured section -->
        <h2>Update Booking Form</h2>
        
        <div class="row">
  <div class="col-75">
    <div class="container3">
      <form action="connect.php" name="add_Booking" method="post">

        <div class="row">
          <div class="col-50">

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" value="<?php echo $fullname; ?>" id="fname" name="fullname" placeholder="John Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" value="<?php echo $email; ?>" id="email" name="email" placeholder="kk@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i>Age</label>
            <input type="text" value="<?php echo $age; ?>" id="adr" name="address" placeholder="54">
            <label for="city"><i class="fa fa-institution"></i>How many members?</label><br>
            <input type="text" value="<?php echo $quantity; ?>" id="city" name="member" placeholder="6">
            <label for="city"><i class="fa fa-institution"></i>Package Type</label><br>
            <input type="text" value="<?php echo $package_type; ?>" id="city" name="ptype" placeholder="Diamond/platinum/Gold/Crown">
            <label for="adr"><i class="fa fa-address-card-o"></i>Checking Date</label>
            <input type="text" value="<?php echo $checking_date; ?>" placeholder="Checking Date" class="form-control" name="checkdate" onfocus="(this.type='date')">
            <label for="adr"><i class="fa fa-address-card-o"></i>Checkout Date</label>
            <input type="text" value="<?php echo $checkout_date; ?>" placeholder="Checkout Date" class="form-control" name="checkoutdate" onfocus="(this.type='date')">
            <input type="submit" value="update booking" class="btn">

          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</form>
                 
       

        <!-- video section -->
        <section id = "video">
            <div class = "video-wrapper flex">
                <video loop>
                    <source src = "videos/video-section.mp4" type = "video/mp4">
                </video>
                <button type = "button" id = "play-btn">
                    <i class = "fas fa-play"></i>
                </button>
            </div>
        </section>
        <!-- end of video section -->

        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        Green Leaf<span> Tours</span>
                    </a>
                    <p class = "text">Thank you for choosing our tour guide services. Explore Sri Lanka with our knowledgeable guides, and experience the wonders of this enchanting island through personalized itineraries, insider tips, and unforgettable memories. Happy travels.</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "#">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "#">Sigiriya</a></li>
                        <li><a href = "#">Nine Arches Bridge</a></li>
                        <li><a href = "#">Galle Fort</a></li>
                        <li><a href = "#">Bentota Beach</a></li>
                        <li><a href = "#">Udawalawa National Park</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for Newsletter!</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            // play/pause video
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('click', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
    </body>
</html>