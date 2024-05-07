<?php include('submit_contact.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - ZNN</title>
    <link rel="stylesheet" href="css/contact-style.css">
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/f8d427aa45.js" crossorigin="anonymous"></script>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20&display=swap" rel="stylesheet">
    

    <!--Custom Style <link rel="stylesheet" href="css/style.css">-->
    
    
</head>
<body>
    <header>
        <div class="logo">
            <h1 class="logo-text"><span>ZEAL</span> NEWS NETWORK</h1>

        </div>
        <i class="fa-solid fa-bars menu-toggle"></i>
        <ul class="nav">
        <li><a href="articles.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="spotlight.html">Spotlight</a></li>
            <!--li><a href="#">Sign Up</a></li>
        <li><a href="#">Login</a></li a-->
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    ZNN Company
                    
                </a>
                

            </li>

        </ul>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row col-md-6 col-md-offset-3">
                  <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                      <h1>We'd love to hear from you!</h1>
                    </div>
                    <div class="panel-body">
                      <form action="submit_contact.php" method="post">
                        <div class="form-group">
                          <label for="firstName">First Name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="firstName"
                            name="firstName"
                          />
                        </div>
                        <div class="form-group">
                          <label for="lastName">Last Name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="lastName"
                            name="lastName"
                          />
                        </div>
                    
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input
                            type="text"
                            class="form-control"
                            id="email"
                            name="email"
                          />
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                          />
                        </div>
                        <input type="submit" class="btn btn-primary" />
                      </form>
                    
                  </div>
                </div>
              </div>
             
          </div>
            <!--
            <h2>We'd love to hear from you!</h2>
            <form action="#" method="post">
                <label for="name">First Name:</label>
                <input type="text" id="First name" name="First name" required><br>
                <label for="name">Last Name:</label>
                <input type="text" id="Last name" name="Last name" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea><br>
                <button type="submit">Send Message</button>
            </form>

            -->
        </section>

      
        <section>
            <h2>Direct Contact</h2>
            <p>Phone: (123) 456-7890</p>
            <p>Email: info@znn.com</p>
        </section>

        <!-- Google Maps Embed -->
        <section>
            <h2>Find Us</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.153318427183!2d-76.61218948468976!3d39.29409497950933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c8035e48000001%3A0x932e7c1b8e83038a!2sTowson%20University!5e0!3m2!1sen!2sus!4v1604383192090!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>

        
        <section>
            <h2>Frequently Asked Questions</h2>
            <div class="faq">
                <p><strong>How do I subscribe to ZNN?</strong></p>
                <p>You can subscribe through the homepage by clicking the subscribe button.</p>

                <p><strong>Can I contribute articles to ZNN?</strong></p>
                <p>Yes, we welcome contributions from the Towson community. Please contact us for more details.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>
        Disclaimer some links are associate with other websites. All rights reserved to those linked sites.
    </p>
        <p>&copy; 2024 ZNN - All rights reserved. </p>
    </footer>
    
    <!-- JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--Slick Carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				
    
    <!-- Custom Script-->
    <script src="js/scripts.js"></script>
</body>
</html>
