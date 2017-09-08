<!DOCTYPE html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Jugg Support</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/JuggLogo.png" />
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    </head>
    <body>

        <header id="showcase">

            <div class="heading">
                <img src="img/JuggLogo.png" alt="App Logo" id="app"> 
                <h1>Help Center</h1>
            </div>

            <div class="search-box-wrapper">
                
                <input type="text" class="search-box-input">
                <button class="search-box-button"><i class="fa fa-search" aria-hidden="true"></i></button>

            </div>

            
        </header>

        <div class="card-container">
            <div class="card-border">
                <section class="card">
                    <div class="card-heading">
                        <i class="fa fa-user fa-4x" aria-hidden="true"></i>
                        <h1>Using Jugg</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et odio tincidunt, suscipit tellus id, molestie ipsum. 
                        </p>
                    </div>
                    <div class="card-footer">
                        <section>More</section>
                    </div>
                </section>

            </div>

            <div class="card-border">

                <section class="card">
                    <div class="card-heading">
                        <i class="fa fa-lock fa-4x" aria-hidden="true"></i>
                        <h1>Terms & Policies</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et odio tincidunt, suscipit tellus id, molestie ipsum. 
                        </p>
                    </div>
                    <div class="card-footer">
                        <section>More</section>
                    </div>

                </section>

            </div>

            <div class="card-border">
                <section class="card">
                    <div class="card-heading">
                        <i class="fa fa-question fa-4x" aria-hidden="true"></i>
                        <h1>FAQ</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et odio tincidunt, suscipit tellus id, molestie ipsum. 
                        </p>
                    </div>
                    <div class="card-footer">
                        <section>More</section>
                    </div>

                </section>

            </div>
            
        </div>

        <div class="social">
            <div class="social-heading">
                <h1>Follow @JuggApp for News and Updates!</h1>
            </div>
            <div class="social-container">
                <a class="twitter-timeline" data-width="600" data-height="500" href="https://twitter.com/JuggApp">Tweets by JuggApp</a> 
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
      
        <div class="contact">
            <div class="contact-heading">
                <h1>Have a question? Get in Touch!</h1>
            </div>
            <div class="contact-container">
                <div class="form">
                    <form method="post" action="#">
                    
                        <div class="form-name">
                            <input type="text" placeholder="Enter Your Name" name="name" id="name" required>
                        </div>

                        <div class="form-email">
                            <input type="email" placeholder="Enter Your Email" name="email" id="email" required>
                        </div>

                        <div class="form-phone">
                            <input type="tel" placeholder="Enter Your Phone Number" name="phone" id="phone">
                        </div>

                        <div class="form-company">
                            <input type="text" placeholder="Enter Your Company" name="company" id="company">
                        </div>

                        <div class="form-comment">
                            <textarea name="comment" required></textarea>
                        </div>

                    </form>
                </div>

            </div>
        </div>

        <footer>
            <div class="footer-social">
                <ul>
                    <a href="https://instagram.com/juggapp" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/juggapp" target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
                    <a href="https://facebook.com/juggapp" target="_blank"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
                </ul>
            </div>

            <div class="footer-content">
                <h1>&copy; <?php echo date("Y"); ?> Jugg App</h1>
                <h1><a href="privacy.pdf" target="_blank">Privacy Policy</a></h1>
                <h1><a href="JuggTerms.pdf" target="_blank">Terms and Conditions</a></h1>
                <h1><a href="disclaimer.pdf" target="_blank">Disclaimer</a></h1>
                <h1><a href="https://icons8.com" target="_blank">Extras</a></h1>
            </div>
        </footer>
       
        
    </body>
</html>