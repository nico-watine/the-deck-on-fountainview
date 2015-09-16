<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>We've Got Good Eats &amp; Cold Drinks! | The Deck On Fountainview</title>
    <meta name="description" content="We pride ourselves to be the true neighborhood local bar and the best sports bar in the Galleria Area with tasty food with one of Houston&#039;s best happy hours. #1 spot for Crawfish."/>
    <link rel="canonical" href="http://thedeckonfountainview.com/" />
    <link type="text/plain" rel="author" href="/humans.txt" />

    <link rel="stylesheet" href="<?php autoVer('/css/app.css'); ?>"/>

    <script src="/bower_components/foundation/js/vendor/modernizr.js"></script>
</head>
<body>

<ul class="tabs" id="tab-form" data-tab>
  <li class="tab-title active"><a href="#individual">Individual</a></li>
  <li class="tab-title"><a href="#team">Team</a></li>
</ul>
<div class="tabs-content">
  <div class="content active" id="individual">
    <form>
      <div class="row">
        <div class="large-5 columns">
          <label>Name
            <input type="text"/>
          </label>
        </div>
        <div class="large-3 columns">
          <label>Phone
            <input type="text"/>
          </label>
        </div>
        <div class="large-2 columns">
          <label>Handicap
            <input type="text"/>
          </label>
        </div>
        <div class="large-2 columns">
          <label>Club
            <input type="text"/>
          </label>
        </div>
      </div>
      <div class="row">
        <div class="large-5 columns">
          <label>Address
            <input type="text"/>
          </label>
        </div>
        <div class="large-3 columns">
          <label>City
            <input type="text"/>
          </label>
        </div>
        <div class="large-2 columns">
          <label>State
            <input type="text"/>
          </label>
        </div>
        <div class="large-2 columns">
          <label>Zip
            <input type="text"/>
          </label>
        </div>
      </div>
    </form>
  </div>
  <div class="content" id="team">
    <p>This is the second panel of the basic tab example. This is the second panel of the basic tab example.</p>
  </div>
</div>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php autoVer('/js/foundation-min.js'); ?>"></script>

</body>
</html>