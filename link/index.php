<?php
/*
 * PHP Auto Zip Creator v1.0
 * https://github.com/isaumya/php-auto-zip-creator
 *
 * Copyright 2013, Saumya Majumder
 * http://www8.isaumya.com
 *
 * Licensed under the GPL license v3:
 * http://www.gnu.org/licenses/gpl.html
 */
	if(isset($_REQUEST['generatelink']))
	{
		$dir = base64_encode($_REQUEST['ddir']);
		$fn = base64_encode($_REQUEST['fname']);
		$out = 'http://downloads.isaumya.com/zip.php?dr='.$dir.'&fn='.$fn;
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Auto ZIP Creator &bull; Download Link Generator &middot; Saumya Majumder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background: url("./img/pattern/p1.png") repeat scroll 0 0 #F6F6F6;
      }

      .form-signin {
        max-width: 40%;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        margin-top: 10%;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 15px;
           -moz-border-radius: 15px;
                border-radius: 15px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .stage {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          min-width: 900px;
          height: 100%;
          overflow: hidden;
          z-index: -999;
      }
    .far-clouds { background: transparent url(./img/far-clouds.png) 305px 102px repeat-x; }
    .near-clouds { background: transparent url(./img/near-clouds.png) 305px 162px repeat-x; }
    .upperContainer{
          
          top: 0;
          left: 0;
          z-index: 201;
      }
      .alert {
        max-width: 50%;
        margin-right: auto;
        margin-left: auto;
      }
	  .fontChange {
		  font-family: 'Amaranth', sans-serif;  
	  }
	  .fontSize {
		  font-size: 1.3em;  
	  }

    </style>
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le Cloud Start -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js" type="text/javascript"></script>
    <script src="./js/jquery.spritely-0.6.js" type="text/javascript"></script>
    <script type="text/javascript">
          jQuery.noConflict()(function($) {
            $(document).ready(function() {
                $('#far-clouds').pan({fps: 30, speed: 0.7, dir: 'left', depth: 30});
                $('#near-clouds').pan({fps: 30, speed: 1, dir: 'left', depth: 70});
                
                
            });
          });    
    </script>
    <!-- Le Cloud End -->

    <!-- Fav and touch icons -->
    
    <link rel="apple-touch-icon" sizes="114x114" href="./img/ico/apple-touch-icon-114.png">
      <link rel="apple-touch-icon" sizes="72x72" href="./img/ico/apple-touch-icon-72.png">
                    <link rel="apple-touch-icon" href="./img/ico/apple-touch-icon-57.png">
                                   <link rel="shortcut icon" href="./img/ico/favicon.png">
  </head>

  <body>

    <div class="container">
      <div id="far-clouds" class=" far-clouds stage "></div>
      <div id="near-clouds" class=" near-clouds stage "></div>
      <div class="upperContainer">
      <form class="form-signin" name="generateLink" action="./index.php" method="post">
          <h2 class="form-signin-heading">File Download Link generator</h2>
          <label>Download Directory</label>
          <input type="text" name="ddir" class="input-block-level" placeholder="Download Directory" required>
          <label>ZIP File Name</label>
          <input type="text" name="fname" class="input-block-level" placeholder="ZIP File Name" required>
          <label>Link for Share</label>
          <input type="text" name="lfs" class="input-block-level" placeholder="Link after Generation" value="<?php echo $out; ?>" disabled>
          <button class="btn btn-large btn-primary" id="gl" data-loading-text="Generating Download Link..." name="generatelink" type="submit">Generate Download Link</button>
          
        </form>
        </div>
    </div> <!-- /container -->
    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!--<script src="./js/bootstrap-transition.js"></script>
    <script src="./js/bootstrap-alert.js"></script>
    <script src="./js/bootstrap-modal.js"></script>
    <script src="./js/bootstrap-dropdown.js"></script>
    <script src="./js/bootstrap-scrollspy.js"></script>
    <script src="./js/bootstrap-tab.js"></script>-->
    <script src="./js/bootstrap-tooltip.js"></script>
    <script src="./js/bootstrap-popover.js"></script>
    <!--<script src="./js/bootstrap-button.js"></script>
    <script src="./js/bootstrap-collapse.js"></script>
    <script src="./js/bootstrap-carousel.js"></script>
    <script src="./js/bootstrap-typeahead.js"></script>-->
    <script type="text/javascript">
			$(function() {
				$('#uft').popover();
			});
			$(function() {
					$('#gl')
					  .click(function () {
						var btn = $(this)
						btn.button('loading')
						setTimeout(function () {
						  btn.button('reset')
						}, 3000)
					  })
				});
			
			
	</script>

  </body>
</html>
