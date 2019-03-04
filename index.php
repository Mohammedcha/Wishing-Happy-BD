<?php require_once ("config.php");?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo "$page_name" ;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />

	<meta name="description" content="<?php echo $sharing_description ; ?>">
	<meta name="keywords" content="<?php echo $sharing_name ; ?>">
	<meta name="author" content="<?php echo $sharing_url ; ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">		
	<meta name="google" value="notranslate">
	<meta name="robots" content="index, follow">
	<meta name="distribution" content="web">

	<meta property="og:url"                content="<?php echo $sharing_url ; ?>" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="<?php echo $sharing_name ; ?>" />
	<meta property="og:description"        content="<?php echo $sharing_description ; ?>" />
	<meta property="fb:app_id"              content="<?php echo $fb_app_id;?>" />
	<meta property="og:image" content="assets/cardoo.png" />

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="assets/favico.png" />
	<link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">

	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $tracking ;?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', '<?php echo $tracking ;?>');
		</script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "<?php echo "$ads_validation" ;?>",
			enable_page_level_ads: true
		});
	</script>
</head>
<body>
	<div id="confetti"></div>
<div class="container">

	<div class="subcontainer">

		<center>
			<?php if (empty ($small_ads_id)) { } else {?>
				<ins 
					class="adsbygoogle"
					style="display:inline-block;min-width:100%;max-width:970px;width:100%;height:90px"
					data-ad-client="<?php echo $small_ads_id ; ?>"
					data-ad-slot="<?php echo $small_ads_slot ; ?>">
				</ins>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>	 
			<?php } ?>	
			<img class="animation_med" width="90%" src="assets/am.png" />
			<h2><?php echo "$happy_from" ;?></h2>
				<h1 class="naming"><?php if (empty ($name)) { echo "Name Here"; } else { echo $name; }?></h1>
			<h3><?php echo "$happy_message" ;?></h3>

			<?php if (empty ($name)) {  } else { ?>
				<img width="100%" src="assets/separator.png" />
				<img class="animation_med" width="90%" src="assets/happy.png" />
				<img class="animation_med" width="90%" src="assets/hb.png" />
			<?php } ?>	

			<?php if (empty ($big_ads_id)) { } else {?>			
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins 
					class="adsbygoogle" 
					style="display:block" 
					data-ad-client="<?php echo $big_ads_id ; ?>" 
					data-ad-slot="<?php echo $big_ads_slot ; ?>" 
					data-ad-format="auto" 
					data-full-width-responsive="true">
				</ins>
				<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>			
			<?php } ?>			
			

			<?php if (empty ($name)) {  } else { ?>
				<div class="share" >
					<div class="shareb whatsapp" >
						<a
						data-action="share/whatsapp/share"
							href="whatsapp://send?text=
								<?php echo $sharing_message;?>%0A
								<?php echo $sharing_invite;?>%0A
									👇👇👇👇👇👇%0A
								<?php echo $sharing_url;?>/index.php?name=<?php echo $name;?>%0A
								<?php echo $sharing_advice;?>%0A
									👇👇👇👇👇👇%0A
								<?php echo $sharing_url;?>
							">
							<i class="fab fa-whatsapp"></i>
								<span> Share Via Whatsapp </span>
							<i class="fab fa-whatsapp"></i>
						</a>
					</div>
					<div class="shareb facebook" >
						<a target="_blank" href="http://m.facebook.com/sharer.php?u=<?php echo $sharing_url;?>">
							<i class="fab fa-facebook"></i>
								<span> Share Via Facebook </span> 
							<i class="fab fa-facebook"></i>
						</a>
					</div>
				</div>	

			<?php } ?>
	
		
			<img width="100%" src="assets/separator.png" />
			<form method="get" action="index.php">
				<div class="name_input">
				<p><?php echo "$aid_creat" ;?></p>
					<input class="" autocomplete="off" type="name" required="" maxlength="50" name="name" placeholder="Name Here">
					<button class="btn" type="submit"><i class="fas fa-check-circle"></i> Create Now </button>
				</div>
			</form>
			
		
			<?php if (empty ($big_ads_id)) { } else {?>			
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins 
					class="adsbygoogle" 
					style="display:block" 
					data-ad-client="<?php echo $big_ads_id ; ?>" 
					data-ad-slot="<?php echo $big_ads_slot ; ?>" 
					data-ad-format="auto" 
					data-full-width-responsive="true">
				</ins>
				<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>			
			<?php } ?>				
		</center>
	</div>
</div>






<?php if ($finger == 0 ) { } else { ?>

<?php if (empty ($name)) {  } else { ?>

<div id="snackbar">Please place your finger on scanner</div>

	<div class="fingerprint-wrap">
		<div class="fingerprint-col">
		
			<p class="finger_p" >
				<h1><?php echo $name; ?> </h1>
				<?php echo $text_finger1 ; ?><br><br>
				<?php echo $text_finger2 ; ?>
			</p>

			<div class="finger_med" >
				<img src="assets/fingerprint.png" class="fingerprint" id="fingerprint" style="margin-top:10px;">
				<img src="assets/fingerprint1.gif" class="fingerprint-anim" style="display: none;">
			</div>
			
		</div>
	</div>
<?php } ?>	
	
<?php } ?>	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/Techhutiyapa.js"></script>

<script type="text/javascript">
    var divMouseDown;

    function cAlert() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
    jQuery(document).bind( "mouseup touchstart", function(e){
      if(e.target.className!="fingerprint"){
        cAlert();
        return;
      }
      window.oncontextmenu = function(event) {
         event.preventDefault();
         event.stopPropagation();
         return false;
      };
        jQuery('.fingerprint').attr('src','assets/fingerprint1.gif');
          divMouseDown = setTimeout(function() { 
            jQuery('.fingerprint-wrap').remove();
             jQuery('body').css('max-height','inherit');
              jQuery('#snackbar').remove();
          }, 500);  
    });
    jQuery(document).bind( "mouseup touchend", function(e){
      if(e.target.className!="fingerprint"){
        return;
      }
      jQuery('.fingerprint').attr('src','assets/fingerprint.png');
       if (divMouseDown) {
        clearTimeout(divMouseDown);
       }
    });
</script>


</body>
</html>