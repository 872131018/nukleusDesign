<!DOCTYPE html>
<html lang="en">
<head>
<?php /*
* Basic Page Needs
*/ ?>
<meta charset="utf-8">
<title>Your page title here :)</title>
<meta name="description" content="">
<meta name="author" content="">
<?php /*
* Mobile Specific Metas
*/ ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php /*
* Other Meta
*/ ?>
<meta charset='utf-8'>
<?php /*
* Font
*/ ?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:400,300,600">
<?php /*
* CSS
*/ ?>
<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>Skeleton-2.0.4/css/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>Skeleton-2.0.4/css/skeleton.css">
<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>glidejs-master/dist/css/glide.core.css">
<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>glidejs-master/dist/css/glide.theme.css">
<?php /*
* Page CSS
*/ ?>
<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>css/styles.css">
<?php /*
* Favicon
*/ ?>
<link rel="icon" type="image/png" href="<?php echo $base_url; ?>Skeleton-2.0.4/images/favicon.png">
</head>
<?php /*
* Primary Page Layout
*/ ?>
<body>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="six columns">
          <div><h4>Grounded Earth Designs.</h4></div>
          <div><h4>Welcome.</h4></div>
          <div>We are a Colorado apparel and design company specializing in quality products at a fair price.  We want to provide you with great gear as well as a positive attitude.</div>
        </div>
        <div class="six columns">
          <div class="sticker logo-sticker"></div>
        </div>
      </div>
      <div class="row">
        <div class="twelve columns">
          <div id="Glide" class="glide">
            <div class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<">prev</button>
                <button class="glide__arrow next" data-glide-dir=">">next</button>
            </div>
            <div class="glide__wrapper">
                <ul class="glide__track">
                    @foreach($mockups as $key => $value)
                      <li class='glide__slide'>
                        <img src='{{ $base_url }}images/mockups/{{ $value }}'/>
                      </li>
                    @endforeach
                </ul>
            </div>
            <div class="glide__bullets"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="twelve coulmns">
          <div><h4>Want to join the mailing list?</h4></div>
          <div>
            <form>
              <input type="email" name="email" placeholder="Email right here!">
              <input type="text" name="name" placeholder="Full name please!">
              <input type="text" name="city" placeholder="Your city here!">
              <input type="text" name="state" placeholder="State goes here!">
              <input class="button" type="button" value="Sign Up" data-delegate="signup">
            </form>
          </div>
        </div>
      </diV>
      <div class="row">
        <div class="twelve columns">
          <div id="Glide" class="glide">
            <div class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<">prev</button>
                <button class="glide__arrow next" data-glide-dir=">">next</button>
            </div>
            <div class="glide__wrapper">
                <ul class="glide__track">
                    @foreach($designs as $key => $value)
                      <li class='glide__slide'>
                        <img src='{{ $base_url }}images/designs/{{ $value }}'/>
                      </li>
                    @endforeach
                </ul>
            </div>
            <div class="glide__bullets"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="twelve columns">
          <div><h4>Have an idea?</h4></div>
          <div><h4>We can help you create it!</h4></div>
          <div>We are dedicated to getting you the creative design you have always wanted.</div>
        </div>
      </div>
    </div>
  </div>
  <?php /*
	* Must load the external sources first
	*/ ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<?php /*
	* Then load the internal sources second
	*/ ?>
  <script type="text/javascript" src="<?php echo $base_url; ?>stickerjs-master/sticker.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url; ?>glidejs-master/dist/glide.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url; ?>js/validateSignup.js"></script>
	<?php /*
	* Load the driver for execution
	*/ ?>
	<script type="text/javascript" src="<?php echo $base_url; ?>js/indexDriver.js"></script>
</body>
</html>