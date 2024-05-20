<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>booking details</title>
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
                    <h1> Your Booking Details</h1>
                    <p> Feel free to explore the various options available to customize your experience and make the most out of our platform.</p>
                </div>
               
            </div>
        </header>
        <!-- header -->

        <!-- featured section -->
        
      
                 
        <!-----Table-->
        <h1>Booking Details</h1>

<table class="customers">

  <tr>
    <th>fullname</th>
    <th>email/th>
    <th>age</th>
    <th>quntity</th>
    <th>package_type</th>
    <th>checking_date</th>
    <th>checkout_date/th>
  </tr>
  
  <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "online tour guide";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve records from the bookings table
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>fullname</th>
    <th>email</th>
    <th>age</th>
    <th>quntity</th>
    <th>package_type</th>
    <th>checking_date</th>
    <th>checkout_date</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["fullname"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>" . $row["quantity"] . "</td>";
        echo "<td>" . $row["package_type"] . "</td>";
        echo "<td>" . $row["checking_date"] . "</td>";
        echo "<td>" . $row["checkout_date"] . "</td>";
        echo "<td><a href='booking update form.php?id=" . $row["id"] . "'>Edit</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}

// Close the database connection
$conn->close();
?>
</table>

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