<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Here's Our Location | The Deck On Fountainview</title>
    <meta name="description" content="Come join us at The Deck, grab a drink and cheer on your favorite sports teams!"/>
    <link type="text/plain" rel="author" href="/humans.txt" />

    <link rel="stylesheet" href="<?php autoVer('/css/app.css'); ?>"/>

    <script src="/bower_components/foundation/js/vendor/modernizr.js"></script>
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
        <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-55459011-4', 'auto');
      ga('send', 'pageview');

    </script>
</head>

<body>

<header>
    <section class="show-for-small-only" id="mobile-header">
        <section id="mobile-contact">
                <div class="row">
                    <div class="small-12 columns">
                        <a href="tel:713-914-9990"><p>713-914-9990</p></a>
                    </div>
                    <div class="small-12 columns">
                        <a href="https://goo.gl/maps/0v7MM" target="_blank"><p>6002 Fairdale Lane Houston, TX 77057</p></a>
                    </div>
                </div>
        </section>
        <div class="row">
            <div class="small-12 columns">
                <a href="/"><img src="/img/logo/logo@2x.png" alt="The Deck On Fountainview Logo"></a>
            </div>
        </div>
        <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
                  <h1><a href="/"></a></h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section">
                <ul class="right">
                    <li><a href="/">HOME</a></li>
                    <li><a href="/events">EVENTS</a></li>
                    <li><a href="/menu-m">FOOD + DRINK</a></li>
                    <li class="active"><a href="#">LOCATION</a></li>
                </ul>
            </section>
        </nav>
    </section>

    <div class="show-for-medium-up">
        <section id="mini-header">
                <div class="row">
                    <div class="small-12 medium-4 columns">
                        <p class="phone">713-914-9990</p>
                    </div>
                    <div class="small-12 medium-6 large-4 columns">
                        <a href="https://goo.gl/maps/0v7MM" target="_blank"><p class="address">6002 Fairdale Lane Houston, TX 77057</p></a>
                    </div>
                </div>
        </section>
        <section id="main-header">
                <div class="row">
                    <div class="small-12 medium-12 large-3 columns" id="logo">
                        <a href="/"><img src="/img/logo/logo@2x.png" alt="The Deck On Fountainview Logo"></a>
                    </div>
                    <nav class="small-12 large-9 columns">
                        <ul>
                            <li id="first"><a href="/" class="home">HOME</a></li>
                            <li><a href="/events" class="events">EVENTS</a></li>
                            <li><a href="/menu" class="menu">FOOD + DRINK</a></li>
                            <li id="last"><a href="#" class="location active">LOCATION</a></li>
                        </ul>
                    </nav>
                </div>
        </section>
    </div>
</header>

<main>
    <section id="contact-info">
        <div class="row">
            <div class="small-12 columns">
                <h1>Come On Over - The Game’s Almost Started!</h1>
            </div>
        </div>
        <div class="row">
            <div class="medium-6 columns">
                <h3>Here's Where We're Located</h3>
                <p>6002 Fairdale Ln <br> Houston, TX 77057</p>
            </div>
            <div class="medium-6 columns">
                <h3>Have A Question? Get In Touch</h3>
                <p>713-914-9990 <br> <a href="mailto:thedeckonfountainview@gmail.com">thedeckonfountainview@gmail.com</a></p>
            </div>
        </div>
        <div class="row">
            <div class="small-12 medium-8 medium-centered columns">
                <div class="blue-hr"></div>
            </div>
        </div>
        <div class="blue-container">
            <div class="row">
                <div class="small-12 medium-centered columns">
                    <h2>See You Soon!</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="gmap">
        <div class="overlay hide-for-touch" onClick="style.pointerEvents='none'"></div>
        <div class="iframe-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6929.0560483414265!2d-95.485206!3d29.733428!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x650c137e7d6f5b63!2sThe+Deck+on+Fountainview+Bar+%26+Grill!5e0!3m2!1sen!2sus!4v1418956029154" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
    <div class="bar-pano">
        <img src="/img/location/pano.jpg" alt="The Deck On Fountainview">
    </div>
</main>

<footer>
    <section id="sharing">
        <div class="row">
            <div class="medium-7 columns end">
                <ul class="social-icons">
                    <li><a href="https://twitter.com/thedeckonfvbar" target="_blank"><img src="/img/footer/sharing/twitter.png" alt="Twitter"></a></li>
                    <li><a href="https://www.facebook.com/pages/The-Deck-on-Fountain-View/202592176425413" target="_blank"><img src="/img/footer/sharing/facebook.png" alt="Facebook"></a></li>
                    <li><a href="https://plus.google.com/102338744518122429425/posts" target="_blank"><img src="/img/footer/sharing/google.png" alt="Google+"></a></li>
                    <li><a href="http://www.yelp.com/biz/the-deck-on-fountainview-houston" target="_blank"><img src="/img/footer/sharing/yelp.png" alt="Yelp"></a></li>
                    <li><a href="https://foursquare.com/v/the-deck-on-fountainview-houston-tx/4d799f97b39b2c0f8f9ae690" target="_blank"><img src="/img/footer/sharing/foursquare.png" alt="FourSquare"></a></li>
                    <li class="last"><a href="http://instagram.com/thedeckonfountainview" target="_blank"><img src="/img/footer/sharing/instagram.png" alt="Instagram"></a></li>
                </ul>
            </div>
            <div class="medium-5 columns">
                <p class="credit">
                    <a href="http://studioncreations.com" target="_blank">A <span>STUDIO N</span> CREATION</a>
                </p>
            </div>
        </div>
    </section>
</footer>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery/1-11-3/jquery-min.js"><\/script>')</script>
<!--[if lt IE 9]>
    <script src="/js/rem-min.js" type="text/javascript"></script>
<![endif]-->
<script src="<?php autoVer('/js/foundation-min.js'); ?>"></script>

</body>
</html>