<?php
/**
 * MadukTV - Header
 */
include('hearthseek/user_profile.php');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="cleartype" content="on">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="theme-color" content="#415058">
		<link rel="profile" href="http://gmpg.org/xfn/11">



		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<!-- Pingback -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!-- End: Pingback -->
		<?php endif; ?>

		<!-- Favicon -->
		<link rel="shortcut icon" href="uktv.com.br/wp-content/uploads/2014/07/fav.png">
		<!-- End: Favicon -->

		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" >
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mega-site-navigation.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,500,600,700" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/hearthseek/ultimosCadstradosCarousel/slick.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/hearthseek/ultimosCadstradosCarousel/slick-theme.css">
		<style type="text/css">
			.section-search{
	height: 400px;
	background: #fff url(http://marduktv.com.br/wp-content/uploads/2017/09/background-hearthseek-section-search3.jpg) no-repeat;
	background-position: 0% 8%;
   	 background-size: cover;
   	 transition: all 0.2s ease-in-out;
   	 display: table;
   	     border-bottom: 5px solid #37474f;
}

.search-localizacao{
	outline: 0;
    background: white;
    border: 0;
    width: 250px;
    padding: 10px;
    color: gray;
    border-radius:4px;
    -webkit-box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
    box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
}

.search-button{
	cursor: pointer;
    display: inline-block;
    outline: 0;
    border: 0;
    background-color: #009688;
    color: white;
    padding: 10px;
    text-transform: inherit;
    font-weight: 900;
    border-radius:4px;
    -webkit-box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
    box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
}

.searchform{
    display: table-cell;
    vertical-align: middle;
    text-align: center !important;
}

#map {
        height: 600px;
        width: 100%;
}

input[type=range] {
  -webkit-appearance: none;
  margin: 18px 0;
      width: 100%;

}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  animate: 0.2s;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: #3071a9;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]::-webkit-slider-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -14px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #367ebd;
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  animate: 0.2s;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: #3071a9;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]::-moz-range-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  animate: 0.2s;
  background: transparent;
  border-color: transparent;
  border-width: 16px 0;
  color: transparent;
}
input[type=range]::-ms-fill-lower {
  background: #2a6495;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-fill-upper {
  background: #3071a9;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
}
input[type=range]:focus::-ms-fill-lower {
  background: #3071a9;
}
input[type=range]:focus::-ms-fill-upper {
  background: #367ebd;
}



/*checkbox*/
input[type=checkbox] {
display:none;
}
 
input[type=checkbox] + label
{
/*background: url(http://overseek.org/wp-content/uploads/2015/04/garrosh-150x150.png);*/
height: 100px;
width: 100px;
display:inline-block;
padding: 0 0 0 0px;
}
input[type=checkbox]:checked + label
{
//background: #0080FF;
border: 5px solid #1ace04;
height: 100px;
width: 100px;
display:inline-block;
padding: 0 0 0 0px;
}

#jaina + label{
	background: url('http://marduktv.com.br/wp-content/themes/mktv2016/img/heroes/jaina.png');
	background-size: 105%;

}

#rexxar + label{
	background: url('http://marduktv.com.br/wp-content/themes/mktv2016/img/heroes/rexxar.png');
	background-size: 105%;
}

#uther + label{
	background: url('http://marduktv.com.br/wp-content/themes/mktv2016/img/heroes/uther.png');
	background-size: 105%;
}

#garrosh + label{
	background: url('http://marduktv.com.br/wp-content/themes/mktv2016/img/heroes/garrosh.png');
	background-size: 105%;
}

#malfurion + label{
	background: url('http://marduktv.com.br/wp-content/themes/mktv2016/img/heroes/malfurion.png');
	background-size: 105%;
}

#guldan + label{
	background: url('http://marduktv.com.br/wp-content/themes/mktv2016/img/heroes/guldan.png');
	background-size: 105%;
}

#thrall + label{
	background: url('http://marduktv.com.br/wp-content/themes/mktv2016/img/heroes/thrall.png');
	background-size: 105%;
}

#anduin + label{
	background: url('http://marduktv.com.br/wp-content/themes/mktv2016/img/heroes/anduin.png');
	background-size: 105%;
}

#valeera + label{
	background: url('http://marduktv.com.br/wp-content/themes/mktv2016/img/heroes/valeera.png');
	background-size: 105%;
}

.slick-track{
	/*width: 100% !important;*/
}


.list-inline{
	width: 100% !important;
}

.form-group select{
	display: block;
    width: 100%;
    font-size: 24px;
    line-height: 1.42857;
    color: rgb(85, 85, 85);
    background-color: rgb(255, 255, 255);
    background-image: none;
    box-shadow: rgba(0, 0, 0, 0.075) 0px 1px 1px inset;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(204, 204, 204);
    border-image: initial;
    border-radius: 4px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    padding: 0px 40px;
    height: 80px;

}

.slick-slide img {
    display: inline-block !important;
}

.thumbnail {
	display: inline !important; 
}

.bg__lastusers{
	background: #0082c2;
	border-radius: 4px;
}

.list-inline{
	margin-left: 0px !important; 
}

.footer__classes li:last-child{

	    padding: 0;
}

.dropdown-toggle{
	cursor: pointer;
    display: inline-block;
    outline: 0;
    border: 0;
    background-color: #37474f;
    color: white;
    padding: 10px;
    text-transform: inherit;
    font-weight: 900;
    border-radius: 4px;
    -webkit-box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
    box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
}

.dropdown-menu {
	position: absolute;
    top: 60%;
    left: 25%;
    z-index: 1000;
    display: none;
    /* float: left; */
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
    box-shadow: -1px 12px 9px 0px rgba(0,0,0,0.75);
padding: 20px;



  left: 50%;
  right: auto;
  text-align: center;
  transform: translate(-50%, 0);
}


/*.modal {
  text-align: center;
  padding: 0!important;
}

.modal:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  margin-right: -4px;
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}

.modal-sm {
    width: 500px !important;
}*/

.heroesProfile{
	    border-radius: 4px;
    width: 60px;
    margin: 10px;
        border: 2px solid #487bbe;
}

div[class*=' _ibani_'] > div {
    width: 220px !important;
}

.playerMoreInfo {
    float: right;
    position: relative;
    right: 29px;
    z-index: 999;
    top: -7px;
}

.playerInfo {
    position: relative;
    top: 0px;
    left: 5px;
}

.fontNamePlayer {
    color: #00486b;
    font-weight: bold;
}

.namePLayer {
    left: -12px;
    top: 18px;
    position: relative;
    font-size: 15px;
    display: block;
}

.infoPLayer {
    left: -12px;
    top: 18px;
    position: relative;
    font-size: 12px;
    display: block;
}
.fontInfoPlayer {
    color: #fff;
    font-style: italic;
    font-weight: bold;
}

#btn-profile{
	    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #487BBE;
    width: 120px;
    text-align: center;
    font-style: italic;
    color: #fff;
    position: absolute;
    top: -1px;
    right: -10px;
    padding: 3px 8px 3px 8px;
    color: #fff;
    text-decoration: none;
    border: 0px;
}

#logo-hearthseek-mktv{

	    z-index: 9999;
    position: relative;
    /*left: -85px;*/
    top: -35px;
}

#top-donates{
  right: -160px;

}

.top-donates{
  right: 0 !important;
}

.header__buttons > li:first-child{
  margin-right: -18px !important;
}

.placeholder
{
  color: #aaa;
}
input::-moz-placeholder {
  color: red;
  font-style: italic;
}
</style>



<script defer

      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgNOjrq9ODbJANpzVy__fgZxK1KObT4Y0&libraries=places,geometry&amp;region=BR&amp;language=pt_BR&amp;sansor=false&amp;ver=2.6.2">

</script>





<script>

<?php include 'maps.php'; ?>

</script>


<script type="text/javascript">
	function btn_profile_inMap(id_user){
		$(document).ready(function(){

		  $('#userProfile').modal('show');

		                        $.ajax({

		                            url: '/wp-content/themes/mktv2016/hearthseek/user_profile.php',
		                            method: 'post',
		                            data: {id:id_user},
		                            success: function(data){



		                                $('#userProfile').html(data);


		                             }

		                        });

		});


		}

		function btn_profile_outMap(id_user){
		$(document).ready(function(){


		                        $.ajax({

		                            url: '/wp-content/themes/mktv2016/hearthseek/user_profile.php',
		                            method: 'post',
		                            data: {id:id_user},
		                            success: function(data){



		                                $('#userProfile').html(data);



		                             }

		                        });

		});


		}


</script>


<!-- infowindow customizado -->
    <script>
      var script = '<script src="<?php echo get_template_directory_uri(); ?>/hearthseek/js/infobubble';
      if (document.location.search.indexOf('compiled') !== -1) {
        script += '-compiled';
      }
      script += '.js"><' + '/script>';
      document.write(script);
    </script>

    <style>

      #styles, #add-tab {
        float: left;
        margin-top: 10px;
        width: 400px;
      }
      #styles label,
      #add-tab label {
        display: inline-block;
        width: 130px;
      }
      .phoney {
        background: -webkit-gradient(linear,left top,left bottom,color-stop(0, rgb(112,112,112)),color-stop(0.51, rgb(94,94,94)),color-stop(0.52, rgb(57,57,57)));
        background: -moz-linear-gradient(center top,rgb(112,112,112) 0%,rgb(94,94,94) 51%,rgb(57,57,57) 52%);
      }

      .phoneytab {
        text-shadow: 0 -1px 0 #000;
        color: #fff;
        font-family: Helvetica Neue, Helvetica, arial;
        font-size: 18px;
        background: rgb(112,112,112) !important;
      }
    </style>
		
		<?php 
			if( get_post_type() === 'deck' && $postId = get_the_ID() ){
				$url = get_field( 'term-classe-image-single', 'classes_' . get_term_by( 'slug', strtolower( get_post_meta( $postId, '_playerclass', TRUE ) ), 'classes' )->term_id );
			}
			echo  '<meta property="og:image" content="' . $url . '">';
		?>
		<!-- End: CSS -->

		<!-- Javascript -->
		<script>
			var 
				base     = '<?php echo get_template_directory_uri(); ?>', 
				base_url = '<?php echo get_bloginfo( "wpurl" ); ?>'
			;
		</script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
		<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-574de0328e7125d9"></script>

		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/ie8-responsive-file-warning.js"></script>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- End: Javascript -->	

		<!-- Google Analytics -->
		<script type='text/javascript'>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-51009105-1', 'auto');
			ga('send', 'pageview');
		</script>
		<!-- End: Google Analytics -->

		<!-- Google Tag -->
		<!--script type='text/javascript'>
			var googletag = googletag || {};
			googletag.cmd = googletag.cmd || [];
			(function() {
				var gads = document.createElement('script');
				gads.async = true;
				gads.type = 'text/javascript';
				var useSSL = 'https:' == document.location.protocol;
				gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
				var node = document.getElementsByTagName('script')[0];
				node.parentNode.insertBefore(gads, node);
			})();
			
			googletag.cmd.push(function() {
				googletag.defineSlot('/26991949/content-banner-top', [600, 300], 'div-gpt-ad-1462545205493-0').addService(googletag.pubads());
				googletag.defineSlot('/26991949/halfbanner-right-mid', [300, 600], 'div-gpt-ad-1462545205493-1').addService(googletag.pubads());
				googletag.defineSlot('/26991949/mktv-top', [[970, 90], [728, 90]], 'div-gpt-ad-1462545205493-2').addService(googletag.pubads());
				googletag.defineSlot('/26991949/retangulo-right-top', [300, 250], 'div-gpt-ad-1462545205493-3').addService(googletag.pubads());

				googletag.pubads().enableSingleRequest();
				googletag.enableServices();
			});
		</script-->
		<script type='text/javascript'>
			var googletag = googletag || {};
				googletag.cmd = googletag.cmd || [];
			(function() {
				var gads = document.createElement('script');
				gads.async = true;
				gads.type = 'text/javascript';
				var useSSL = 'https:' == document.location.protocol;
				gads.src = (useSSL ? 'https:' : 'http:') +
				'//www.googletagservices.com/tag/js/gpt.js';
				var node = document.getElementsByTagName('script')[0];
				node.parentNode.insertBefore(gads, node);
			})();
		</script>

		<script type='text/javascript'>
			googletag.cmd.push(function() {
				googletag.defineSlot('/26991949/retangulo-content', [300, 250], 'div-gpt-ad-1466525189552-0').addService(googletag.pubads());
				googletag.defineSlot('/26991949/retangulo-right-top', [300, 250], 'div-gpt-ad-1466525189552-1').addService(googletag.pubads());
				googletag.defineSlot('/26991949/mktv-top', [[970, 90], [728, 90]], 'div-gpt-ad-1466525189552-2').addService(googletag.pubads());
				googletag.defineSlot('/26991949/halfbanner-right-mid', [300, 600], 'div-gpt-ad-1466525189552-3').addService(googletag.pubads());
				googletag.pubads().enableSingleRequest();
				googletag.enableServices();
			});
		</script>
		<!-- End: Google Tag -->

		<?php wp_head(); ?>
		<?php
			$curUser = wp_get_current_user();
			$curRole =  $curUser->roles;
			if (count($curRole) == 0 && $curUser->ID > 0)
				echo "<style>#wpadminbar{display:none;}body{margin-top: -32px;}</style>";
			//else
			//	echo "<!--" . print_r($curUser, true) . "-->";
				
		?>



		<!-- ADSENSE GOOGLE -->
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
		    google_ad_client: "ca-pub-2260391343159555",
		    enable_page_level_ads: true
		  });
		</script>
	</head>

	<body <?php body_class(); ?>>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/hearthseek/ultimosCadstradosCarousel/slick.min.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=312083818896506";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<div id="fb-root"></div>
		
		<!-- Menu -->
		<div class="navbar navbar-inverse visible-lg">
			<div class="container">	
				<div class="navbar-header">
			        <a class="navbar-brand" href="#">Portais MKTV</a>
				</div>
				<?php
				wp_nav_menu(array(
					'menu'       => 'MKTV2016 - Redes',
					'container'  => FALSE,
					'menu_class' => 'nav navbar-nav'
				));
				?>
				<ul class="nav navbar-nav pull-right navbar-sociais">
					<li class="navbar-text">Redes sociais:</li>
					<li><a href="https://www.facebook.com/hearthseek/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<!--<li><a href="https://www.instagram.com/mktv_hs/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="http://twitter.com/equipemktv" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
				</ul>
		   </div>			
		</div>
		<!-- End: Menu -->

		<!-- Submenu -->
		<header class="main__header">
			<div class="container">
				<a class="main__logo" href="<?php echo get_bloginfo( 'url' ); ?>/hearthseek">
					<img class="img-responsive" id="logo-hearthseek-mktv" src="<?php echo get_template_directory_uri(); ?>/img/logo-hearthseek-mktv.png" alt="Logo-Hearthseek">
				</a>
				<!--<a class="main__logo" href="<?php echo get_bloginfo( 'url' ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
				</a> -->

				
				<nav class="nav__site">
					<?php
						wp_nav_menu(array(
							'menu'       => 'MKTV2016 - Institucional',
							'container'  => FALSE,
							'menu_id'    => 'primary__nav',
							'menu_class' => 'primary__nav is__fixed'
						));

						$user = 'Login';
						if( is_user_logged_in() ){
							$loggedUser =  wp_get_current_user();
							$user = $loggedUser->user_login;
						}
					?>
				</nav>
				<ul class="header__buttons">
					<li class="<?php echo is_user_logged_in() ? 'login' : ''; ?>">
						<a class="<?php echo is_user_logged_in() ? 'logged' : 'nav__login';?>" href="<?php echo is_user_logged_in() ? 'javascript:;' : '#login';?>"><i class="fa fa-user" aria-hidden="true"></i> <span class="hidden-xs"><?php echo $user;?></span></a>
						<?php if ( is_user_logged_in() ) : ?>
							

							

						<ul>
							<li><a href="<?php echo home_url(); ?>/decks-autor/autor/<?php echo wp_get_current_user()->ID; ?>"><i class="fa fa-bar-chart hidden-sm hidden-xs" aria-hidden="true"></i> MEUS DECKS</a></li>

              <li id="deletar-conta"><a href="<?php echo get_template_directory_uri(); ?>/hearthseek/deletarConta.php"><i class="fa fa-trash-o" aria-hidden="true"></i> DELETAR CONTA</a></li>
              <script type="text/javascript">
                $('#deletar-conta').click(function(){
  

                alert('Esperamos que volte em breve! =)');
                });



              </script>

							

							<li><a href="<?php echo wp_logout_url( home_url('/hearthseek') ); ?>"><i class="fa fa-times" aria-hidden="true"></i> SAIR</a></li>
						</ul>
						
					</li>

					<li>
						<a class="nav__register <?php echo $class; ?> nav__criar btn btn-orange" href="#"><!--<i class="fa fa-pencil-square-o" aria-hidden="true"></i>--> MEUS DADOS</a>
					</li>
					<?php endif; ?>

					<!--<li>
						<a class="search__trigger" href="#search"><span></span></a>
					</li>-->

					<li class="hidden-xs hidden-sm">

						<?php 
						$class = '';
						if ( !is_user_logged_in() ) {
							$class = 'nav__must_login';
						}
						?>
						<a class="<?php echo $class; ?> nav__criar btn btn-orange" href="#" style="background: transparent;" data-toggle="modal" data-target="#msgHearthseek"> Como se Cadastrar</a>
					</li>
					<li>
						<a class="nav__trigger hidden-sm hidden-xs" href="#primary__nav"><span></span></a>
					</li>
				</ul>
			</div>
		</header>

    <div class="hidden-xs hidden-sm" id="legend" style="z-index: 1;
    color: #fff;
    position: absolute;
    left: 0px;
    top: 700px;
    padding: 10px;
    background-color: rgba(55,71,79, 0.6);
    text-align: center;
    font-style: italic;
    border-radius: 0px 4px 4px 0px;"><div><img src="http://www.marduktv.com.br/wp-content/uploads/2017/09/marker-player-mktv.png"><br> Jogadores</div></div>

    <div class="hidden-xs hidden-sm" id="adsense-right" style="z-index: 1;
    color: #fff;
    position: absolute;
    right: 0px;
    top: 516px;
    padding: 10px;
    text-align: center;
    font-style: italic;"><div><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- vertical 120 x 600 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:600px"
     data-ad-client="ca-pub-2260391343159555"
     data-ad-slot="2345935005"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div></div>

<div  id="top-donates" class="hidden-xs hidden-sm" style="top:45%;position: fixed; z-index: 99999;border-radius: 4px 0px 0px 4px">
    <div id="btn-top-donates" style="    top: -58px;position:relative;padding: 10px;display: inline-block;background: #e65100;border-radius: 4px 0px 0px 4px;   margin: -4px;">
      <img style="width: 24px" src="<?php echo get_template_directory_uri(); ?>/img/ranking-donate-icon.png">
    </div>
    
    <div id="div-top-donates" style="border-radius: 0px 0px 0px 4px;padding: 10px;display: inline-block; width: 160px; height: 75px;background: #e65100;">
      <h4>TOP DONATES<h4>
      <p style="color: #fff;font-size: 13px;"><span style="color: #0082c2">1º </span>Egon Braun <span style="font-size: 10px;float: right;">R$150,00</span></p>
      <p style="color: #fff;font-size: 13px;"><span style="color: #0082c2">2º </span>Paulo Sacramento <span style="font-size: 10px;float: right;">R$50,00</span></p>
     <!-- <hr style="    margin-top: 10px; margin-bottom: 10px;">
      <p style="color: #fff;font-size: 13px;"><span style="color: #0082c2">2º </span>Fulanp <span style="font-size: 10px;float: right;">R$000,00</span></p>
      <hr style="    margin-top: 10px; margin-bottom: 10px;">
      <p style="color: #fff;font-size: 13px;"><span style="color: #0082c2">3º </span>Fulanp <span style="font-size: 10px;float: right;">R$000,00</span></p> -->
    </div>
</div>

<script type="text/javascript">
  $('#btn-top-donates').click(function(){
      if($('#top-donates').hasClass("top-donates")){
        $('#top-donates').removeClass("top-donates");
      }else{
        $('#top-donates').addClass("top-donates");
      }
  });

</script>
		<!-- End: Submenu -->
