
<?php
require 'config.php';
$Paymentid = $_GET['id'];

$sql = "SELECT * FROM Payment WHERE paymentid='$Paymentid'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();

    $Nameoncard =$row["nameoncard"];
    $cardnumber =$row["creditcardnumber"];
    $expmonth =$row["expmonth"];
    $cvv =$row["cvv"];
    $expyear =$row["expyear"];
}

$conn->close();
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pay Update form</title>
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
        <link rel = "stylesheet" href = "css/paymentupdate.css">
        <link rel = "stylesheet" href = "css/update.css">
        <!--payment card photos-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>


        <!-- header -->
        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>Update Payment</h1>
                    <p> Feel free to explore the various options available to customize your experience and make the most out of our platform.</p>
                </div>
               
            </div>
        </header>
        <!-- header -->

        <!-- featured section -->
        
        <!-- end of featured section -->
        <!-- package section -->
        <section id = "package" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    
                    <h3 class = "lg-title">Change your Payment method</h3>
                </div>
                <form id="demo" action="sumbitpaymentupdate.php" method="POST">
                    <div class="container1">
                      <h1>Change Payment method</h1>
                      <p>Please fill in this form to Change Payment method.</p>
                      <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
<input type="hidden" value="<?php echo $Paymentid; ?>"name="id">            
<input type="text" value="<?php echo $Nameoncard; ?>" placeholder="zayn malik" name="cardname">
<label for="ccnum">Credit card number</label>
<input type="text" value="<?php echo $cardnumber; ?>" placeholder="1111-2222-3333-4444" name="cardnumber">
<label for="expmonth">Exp Month</label>
<input type="text" value="<?php echo $expmonth; ?>" name="expmonth" placeholder="August">

            <div class="row">
             
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" value="<?php echo $cvv ="cvv";?>"name="cvv" placeholder="352"; >
              </div>
              <div class="col-50">
              <label for="expyear">Exp Year</label>
              <input type="text" value="<?php echo $expyear="expyear";?>" name="expyear" placeholder="2020">
            </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Agree to terms and conditions
        </label>
        <input type="submit" value="Update" class="btn">
        </form>
   

    


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
                    <p class = "text">Thank you for choosing our tour guide services. Explore Sri Lanka with our knowledgeable guides, and experience the wonders of this enchanting island through personalized itineraries, insider tips, and unforgettable memories. Happy travels</p>
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