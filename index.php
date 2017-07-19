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
                    <h1><a  href="index.html">Net <span>Banking</span></a></h1>
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
                                    <h3>Get reliable help with your credit card processing needs</h3>
                                    <p>Donec tellus metus, ornare et mollis ut, maximus id nisi. Quisque scelerisque accumsan sem nec ullamcorper. Cras sed purus eget augue egestas commodo. Sed erat magna, pharetra aliquet mattis mollis, maximus eget lacus. </p>
                                </div>
                            </li>
                            <li>
                                <div class="agileits-banner-info">
                                    <h3>Accept Credit Cards On Your Smartphone Today!</h3>
                                    <p>Sed erat magna, pharetra aliquet mattis mollis, maximus eget lacus. Donec tellus metus, ornare et mollis ut, maximus id nisi. Quisque scelerisque accumsan sem nec ullamcorper. Cras sed purus eget augue egestas commodo. </p>
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
            <p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae </p>
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
                <h4>Sed tincidunt lorem </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis, eget placerat mauris sed lectus tellus
                    <span> Fusce eu semper lacus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia.</span></p>
                <ul>
                    <li><span class="glyphicon glyphicon-share-alt"></span> Duis aute irure dolor in reprehenderit voluptate </li>
                    <li><span class="glyphicon glyphicon-share-alt"></span> Excepteur sint occaecat cupidatat non proident</li>
                    <li><span class="glyphicon glyphicon-share-alt"></span> Sunt in culpa qui officia deserunt mollit </li>
                    <li><span class="glyphicon glyphicon-share-alt"></span> Duis aute irure dolor in reprehenderit voluptate </li>
                    <li><span class="glyphicon glyphicon-share-alt"></span> Excepteur sint occaecat cupidatat non proident</li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->
<!-- services -->
<div class="services" id="services">
    <div class="container">
        <div class="w3-welcome-heading">
            <h3>Our services</h3>
        </div>
        <div class="agileits-services-grids">
            <div class="col-md-8 agileits-services-left">
                <h4>Services Overview</h4>
                <div class="agileits-services-text">
                    <p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                </div>
                <div class="credit-grids">
                    <h5>Credit Cards:</h5>
                    <div class="credit-grid-left">
                        <div class="credit-grid">
                            <img src="images/c2.jpg" alt="" />
                            <h6>Visa</h6>
                            <p>Nam libero tempore cum soluta nobis est</p>
                        </div>
                        <div class="credit-grid">
                            <img src="images/c3.jpg" alt="" />
                            <h6>MasterCard</h6>
                            <p>Nam libero tempore cum soluta nobis est</p>
                        </div>
                        <div class="credit-grid">
                            <img src="images/c4.jpg" alt="" />
                            <h6>MasterCard</h6>
                            <p>Nam libero tempore cum soluta nobis est</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="credit-grids debit-grids">
                    <h5>Debit Cards:</h5>
                    <div class="debit-grids-text">
                        <p>Morbi nec justo ut ex rhoncus luctus. Duis id ex egestas, tempus lorem sed, porta urna. Duis sodales eleifend laoreet. Vestibulum luctus venenatis massa, in vulputate mi porta ac.</p>
                    </div>
                    <div class="w3-services-grids">
                        <div class="col-md-4 w3l-services-grid">
                            <div class="w3ls-services-img">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div class="agileits-services-info">
                                <h4>Praesent tempor</h4>
                            </div>
                        </div>
                        <div class="col-md-4 w3l-services-grid">
                            <div class="w3ls-services-img">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                            </div>
                            <div class="agileits-services-info">
                                <h4>Praesent tempor</h4>
                            </div>
                        </div>
                        <div class="col-md-4 w3l-services-grid">
                            <div class="w3ls-services-img">
                                <i class="fa fa-line-chart" aria-hidden="true"></i>
                            </div>
                            <div class="agileits-services-info">
                                <h4>Praesent tempor</h4>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 agileits-services-right">
                <h4>Marketing Services</h4>
                <div class="services-two-grids">
                    <div class="agileinfo-services-right">
                        <img src="images/10.jpg" alt="" />
                        <h6>Maecenas sollicitudin eros lectus, a rutrum nisi vulputate quis. Proin tempus, lectus vitae gravida suscipit</h6>
                    </div>
                    <!-- date -->
                    <div id="design" class="date">
                        <div id="cycler">
                            <div class="date-text">
                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i> Lorem ipsum dolor sit amet,</a>
                            </div>
                            <div class="date-text">
                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i> Cras vestibulum dapibus <span class="blinking"><img src="images/new.png" alt="" /></span></a>
                            </div>
                            <div class="date-text">
                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i> Fusce id molestie mauris</a>
                            </div>
                            <div class="date-text">
                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i> Aliquam vulputate arcu enim <span class="blinking"><img src="images/new.png" alt="" /></span></a>
                            </div>
                            <div class="date-text">
                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i> Donec ac turpis aliquet</a>
                            </div>
                            <div class="date-text">
                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-right" aria-hidden="true"></i> Morbi nec justo ut ex rhoncus luctus</a>
                            </div>
                        </div>
                        <script>
                            function blinker() {
                                $('.blinking').fadeOut(500);
                                $('.blinking').fadeIn(500);
                            }
                            setInterval(blinker, 1000);
                        </script>
                        <script>
                            function cycle($item, $cycler){
                                setTimeout(cycle, 2000, $item.next(), $cycler);

                                $item.slideUp(1000,function(){
                                    $item.appendTo($cycler).show();
                                });
                            }
                            cycle($('#cycler div:first'),  $('#cycler'));
                        </script>
                    </div>
                    <!-- //date -->
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->
<div class="map-grid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1859251.8642025779!2d-76.08274894689792!3d40.06224332601239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0fb959e00409f%3A0x2cd27b07f83f6d8d!2sNew+Jersey%2C+USA!5e0!3m2!1sen!2sin!4v1474436926209" style="border:0" allowfullscreen></iframe>
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
                        <li>+1 234 567 8901</li>
                        <li>+1 234 567 8902</li>
                    </ul>
                </div>
                <div class="agileits-w3layouts-address-top">
                    <h5>Address</h5>
                    <ul>
                        <li>123 Fourth Avenue,</li>
                        <li>lacinia eros 98104,</li>
                        <li>New Jersey,</li>
                        <li>United States.</li>
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
