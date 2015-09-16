<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Action-Packed Calendar! | The Deck On Fountainview</title>
    <meta name="description" content="We pride ourselves to be the true neighborhood local bar and the best sports bar in the Galleria Area with tasty food with one of Houston&#039;s best happy hours. #1 spot for Crawfish."/>
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
                <a href="/"><img data-interchange="[/img/logo/logo.png, (default)], [/img/logo/logo@2x.png, (retina)]">
                <noscript><img src="/img/logo/logo.png" alt="The Deck On Fountainview"></noscript></a>
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
                    <li class="active"><a href="#">EVENTS</a></li>
                    <li><a href="/menu-m">FOOD + DRINK</a></li>
                    <li><a href="/location">LOCATION</a></li>
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
                    <!--[if lt IE 9]>
                        <a href="/"><img src="/img/logo/logo.png" alt="The Deck On Fountainview"></a>
                    <![endif]-->
                    <!--[if gte IE 9]>
                        <!-->
                        <a href="/"><img data-interchange="[/img/logo/logo.png, (default)], [/img/logo/logo@2x.png, (retina)]">
                        <noscript><img src="/img/logo/logo.png" alt="The Deck On Fountainview"></noscript></a>
                        <!--
                    <![endif]-->
                    </div>
                    <nav class="small-12 large-9 columns">
                        <ul>
                            <li id="first"><a href="/" class="home">HOME</a></li>
                            <li><a href="#" class="events active">EVENTS</a></li>
                            <li><a href="/menu" class="menu">FOOD + DRINK</a></li>
                            <li id="last"><a href="/location" class="location">LOCATION</a></li>
                        </ul>
                    </nav>
                </div>
        </section>
    </div>
</header>

<main>

<section id="golf-tourney-info">
    <h1>Deck Open Entry Form</h1>
    <h2>October 16, 2015</h2>
    <ul class="tabs" id="golf-tourney-form" data-tab>
        <li class="tab-title active medium-4 medium-offset-1 large-3 large-offset-3 columns"><a href="#individual" class="button">Individual</a></li>
        <li class="tab-title medium-4 medium-offset-2 large-3  large-offset-0 columns end"><a href="#team" class="button">Team</a></li>
    </ul>
    <div class="tabs-content">
        <div class="content active" id="individual">
            <h2>Individual</h2>
            <form action="/php/sendcontact-individual" enctype="multipart/form-data" method="post">
                <div class="row">
                    <div class="medium-8 large-5 columns">
                        <label>Name
                            <input type="text" name="name" id="name" >
                        </label>
                    </div>
                    <div class="medium-4 large-3 columns">
                        <label>Phone
                            <input type="text" name="phone" id="phone">
                        </label>
                    </div>
                    <div class="small-6 large-2 columns">
                        <label>Handicap
                            <input type="text" name="handicap" id="handicap">
                        </label>
                    </div>
                    <div class="small-6 large-2 columns">
                        <label>Club
                            <input type="text" name="club" id="club">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-8 large-5 columns">
                        <label>Address
                            <input type="text" name="address" id="address">
                        </label>
                    </div>
                    <div class="medium-4 large-3 columns">
                        <label>City
                            <input type="text" name="city" id="city">
                        </label>
                    </div>
                    <div class="small-6 large-2 columns">
                        <label>State
                            <input type="text" name="state" id="state">
                        </label>
                    </div>
                    <div class="small-6 large-2 columns">
                        <label>Zip
                            <input type="text" name="zip" id="zip">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns" id="submit-row">
                        <button type="submit" name="submit" id="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="content" id="team">
            <form action="/php/sendcontact-team" enctype="multipart/form-data" method="post">
                <div class="row">
                    <h2>Team Captain</h2>
                </div>
                <div class="row">
                    <div class="medium-8 large-5 columns">
                        <label>Name
                            <input type="text" name="captain-name" id="captain-name" >
                        </label>
                    </div>
                    <div class="medium-4 large-3 columns">
                        <label>Phone
                            <input type="text" name="captain-phone" id="captain-phone">
                        </label>
                    </div>
                    <div class="small-6 large-2 columns">
                        <label>Handicap
                            <input type="text" name="captain-handicap" id="captain-handicap">
                        </label>
                    </div>
                    <div class="small-6 large-2 columns">
                        <label>Club
                            <input type="text" name="captain-club" id="captain-club">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-8 large-5 columns">
                        <label>Address
                            <input type="text" name="captain-address" id="captain-address">
                        </label>
                    </div>
                    <div class="medium-4 large-3 columns">
                        <label>City
                            <input type="text" name="captain-city" id="captain-city">
                        </label>
                    </div>
                    <div class="small-6 large-2 columns">
                        <label>State
                            <input type="text" name="captain-state" id="captain-state">
                        </label>
                    </div>
                    <div class="small-6 large-2 columns">
                        <label>Zip
                            <input type="text" name="captain-zip" id="captain-zip">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <h2>Player 2</h2>
                </div>
                <div class="row">
                    <div class="medium-6 medium-offset-1 columns">
                        <label>Name
                            <input type="text" name="p2-name" id="p2-name">
                        </label>
                    </div>
                    <div class="small-6 medium-2 columns">
                        <label>Handicap
                            <input type="text" name="p2-handicap" id="p2-handicap">
                        </label>
                    </div>
                    <div class="small-6 medium-2 columns end">
                        <label>Club
                            <input type="text" name="p2-club" id="p2-club">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <h2>Player 3</h2>
                </div>
                <div class="row">
                    <div class="medium-6 medium-offset-1 columns">
                        <label>Name
                            <input type="text" name="p3-name" id="p3-name">
                        </label>
                    </div>
                    <div class="small-6 medium-2 columns">
                        <label>Handicap
                            <input type="text" name="p3-handicap" id="p3-handicap">
                        </label>
                    </div>
                    <div class="small-6 medium-2 columns end">
                        <label>Club
                            <input type="text" name="p3-club" id="p3-club">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns" id="submit-row">
                        <button type="submit" name="submit" id="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section id="calendar">
    <div class="row">
        <h1>Events Calendar</h1>
        <div class="small-12 medium-11 small-centered columns" id="iframe-container">
            <div class="show-for-small-only">
                <iframe src="https://www.google.com/calendar/embed?title=The%20Deck%20On%20Fountainview%20Calendar&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=thedeckonfountainview.com_1h35jscj3hd7lae7k5slnkole8%40group.calendar.google.com&amp;color=%23711616&amp;src=thedeckonfountainview.com_6vmnidb46rajludsbg7ll0sblc%40group.calendar.google.com&amp;color=%23182C57&amp;src=marketing%40thedeckonfountainview.com&amp;color=%23AB8B00&amp;src=nps0nce2jspnikfids01819r9g8tf3re%40import.calendar.google.com&amp;color=%232952A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23333333&amp;src=mlb_18_%2548ouston%2B%2541stros%23sports%40group.v.calendar.google.com&amp;color=%23711616&amp;src=na%257e_superliga_5726_%2548ouston%2B%2544ynamo%23sports%40group.v.calendar.google.com&amp;color=%23853104&amp;src=nba_10_%2548ouston%2B%2552ockets%23sports%40group.v.calendar.google.com&amp;color=%23B1440E&amp;src=nfl_34_%2548ouston%2B%2554exans%23sports%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FChicago" style="border: 3px solid #5EBDDF;" height="400" width="88%" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="show-for-medium-up">
                <iframe src="https://www.google.com/calendar/embed?title=The%20Deck%20On%20Fountainview%20Calendar&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=thedeckonfountainview.com_1h35jscj3hd7lae7k5slnkole8%40group.calendar.google.com&amp;color=%23711616&amp;src=thedeckonfountainview.com_6vmnidb46rajludsbg7ll0sblc%40group.calendar.google.com&amp;color=%23182C57&amp;src=marketing%40thedeckonfountainview.com&amp;color=%23AB8B00&amp;src=nps0nce2jspnikfids01819r9g8tf3re%40import.calendar.google.com&amp;color=%232952A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23333333&amp;src=mlb_18_%2548ouston%2B%2541stros%23sports%40group.v.calendar.google.com&amp;color=%23711616&amp;src=na%257e_superliga_5726_%2548ouston%2B%2544ynamo%23sports%40group.v.calendar.google.com&amp;color=%23853104&amp;src=nba_10_%2548ouston%2B%2552ockets%23sports%40group.v.calendar.google.com&amp;color=%23B1440E&amp;src=nfl_34_%2548ouston%2B%2554exans%23sports%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FChicago" style="border: 3px solid #5EBDDF;" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
    <div class="row">
        <h2>Reserve The Deck for your next event!</h2>
        <h3>Call us at <a href="tel:713-914-9990">713-914-9990</a> for more info.</h3>
    </div>
</section>




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
        </div>
    </section>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--[if lt IE 9]>
    <script src="/js/rem-min.js" type="text/javascript"></script>
<![endif]-->
<script src="<?php autoVer('/js/foundation-min.js'); ?>"></script>

</body>
</html>

