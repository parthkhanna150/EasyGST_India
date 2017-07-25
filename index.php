<?php
include 'header_files.php';
?>
<!-- banner -->
<div class="banner">
    <!--header-->
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a  href="index.php">Easy GST <span>India</span></a></h1>
                </div>
                <!--navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    include 'menu.php';
                    ?>
                    <div class="clearfix"> </div>
                </div>
            </nav>
        </div>
    </div>
    <!--//header-->
    <div class="w3layouts-banner-info">
        <div class="container">
            <div class="w3layouts-banner-slider">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider4">
                            <li>
                                <div class="agileits-banner-info">
                                    <h3>Take it Easy ;)</h3>
                                    <p>Easy GST India: Making accounting easy since 2017</p>
                                </div>
                            </li>
                            <li>
                                <div class="agileits-banner-info">
                                    <h3>Designed carefully for you!</h3>
                                    <p>Easy GST India: Making accounting easy since 2017</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <script src="js/responsiveslides.min.js"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager:true,
                                nav:false,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                    <!--banner Slider starts Here-->
                </div>
            </div>
        </div>
    </div>
    <div class="bounce animated">
        <a href="#welcome" class="scroll">
            <div class="mouse"></div>
        </a>
    </div>
</div>
<!-- //banner -->
<!-- welcome -->
<div class="welcome" id="welcome">
    <div class="container">
        <div class="w3-welcome-heading">
            <h2>Welcome</h2>
        </div>
        <div class="w3l-welcome-info">
            <div class="col-sm-6 welcome-grids">
                <div class="welcome-img">
                    <img src="images/4.jpg" class="img-responsive zoom-img" alt="">
                </div>
            </div>
            <div class="col-sm-6 welcome-grids">
                <div class="welcome-img">
                    <img src="images/6.jpg" class="img-responsive zoom-img" alt="">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3l-welcome-text">
            Make use of our secure software in your business!
        </div>
    </div>
</div>
<!-- //welcome -->
<!-- about -->
<div class="about" id="about">
    <div class="container">
        <div class="w3-welcome-heading">
            <h3>About Us</h3>
        </div>
        <div class="w3ls-about-grids">
            <div class="col-md-6 about-right">
                <img src="images/9.jpg" alt="">
            </div>
            <div class="col-md-6 about-left">
                <h4>I'm a budding develper</h4>
                <p>who has interest in accounting and finance
                    <span> therefore made this software to cater to people who're dissatisfied with their current methods to tackle this new issue.
                <ul>
                    <li><span class="glyphicon glyphicon-share-alt"></span> Flexible</li>
                    <li><span class="glyphicon glyphicon-share-alt"></span> Safe</li>
                    <li><span class="glyphicon glyphicon-share-alt"></span> 24x7</li>
                    <li><span class="glyphicon glyphicon-share-alt"></span> Automated</li>
                    <li><span class="glyphicon glyphicon-share-alt"></span> Secure</li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->
<div class="map-grid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.473846757005!2d-73.5843021847716!3d45.520669337695296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91bcd86077d57%3A0xfd2b13f6b147ebb!2s4320+Avenue+de+l&#39;H%C3%B4tel-de-Ville%2C+Montr%C3%A9al%2C+QC+H2W+2H4%2C+Canada!5e0!3m2!1sen!2sin!4v1500971436360" style="border:0" allowfullscreen></iframe>
</div>
<!-- //map -->
<!-- contact -->
<div class="contact" id="contact">
    <div class="container">
        <div class="w3-welcome-heading">
            <h3>Contact Us</h3>
        </div>
        <div class="agile-contact-grids">
            <div class="col-md-7 contact-form">
                <form action="#" method="post">
                    <input type="text" name="First Name" placeholder="First Name" required="">
                    <input type="text" class="email" name="Last Name" placeholder="Last Name" required="">
                    <input type="email" class="email" name="Email" placeholder="Email" required="">
                    <textarea name="Message" placeholder="Message" required=""></textarea>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="col-md-5 agileits-w3layouts-address">
                <div class="agileits-w3layouts-address-top">
                    <h5>Get in touch</h5>
                    <ul>
                        <li>+1 999 999 9999</li>
                        <li>+1 999 999 9999</li>
                    </ul>
                </div>
                <div class="agileits-w3layouts-address-top">
                    <h5>Address</h5>
                    <ul>
                        <li>0000 Avenue de Home Address,</li>
                        <li>Montreal,</li>
                        <li>Quebec,</li>
                        <li>Canada.</li>
                    </ul>
                </div>
                <div class="agileits-w3layouts-address-top">
                    <h5>Email</h5>
                    <ul>
                        <li><a href="mailto:info@example.com"> mail@example.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //contact -->
<?php
include 'footer.php';
?>
