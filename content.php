<?php
	if(isset($_GET['c']))
		$content_code = $_GET['c'];
	else
		$content_code = 'am';
		
	if($content_code == 'am')
	{
		$content_title='About Me - Sejal Vora';
		$content_file = 'inc/about_me.php';
	}
	else if($content_code == 'fim')
	{
		$content_title='Food is medicine - Sejal Vora';
		$content_file = 'inc/food_is_medicine.php';
	}
	else if($content_code == 'anp')
	{
		$content_title='About naturopathy - Sejal Vora';
		$content_file = 'inc/about_naturopathy.php';
	}
	else if($content_code == 'hoh')
	{
		$content_title='Holistic healings - Sejal Vora';
		$content_file = 'inc/holistic_healings.php';
	}
	else if($content_code == 'foi')
	{
		$content_title='for individuals - Sejal Vora';
		$content_file = 'inc/for_individuals.php';
	}
	else if($content_code == 'foc')
	{
		$content_title='for corporates - Sejal Vora';
		$content_file = 'inc/for_corporates.php';
	}
	else if($content_code == 'cnm')
	{
		$content_title='contact me - Sejal Vora';
		$content_file = 'inc/contact_me.php';
	}
	else if($content_code == 'bmp')
	{
		$content_title='brain mapping - Sejal Vora';
		$content_file = 'inc/brain_mapping.php';
	}
	else if($content_code == 'mda')
	{
		$content_title='Media - Sejal Vora';
		$content_file = 'inc/media.php';
	}
	else
	{
		header('Location: http://www.sejalvora.com');
		die('');
	}	
?>

<!DOCTYPE HTML>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>

<?php
	echo("<title>${content_title}</title>");
?>
	<link rel="stylesheet" href="styles/stylesheet.css" type="text/css" charset="utf-8" />
	<link rel="stylesheet" href="styles/stylesheet2.css" type="text/css" charset="utf-8" />
	<link rel="stylesheet" href="styles/styles.css.php" type="text/css" charset="utf-8" />
	<script language="javascript">
		var popupWindow = null;
		function centeredPopup(url,winName,w,h,scroll){
		LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
		TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
		settings =
		'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
		popupWindow = window.open(url,winName,settings)
		}
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30215911-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
	require('inc/top.php');
?>
	<div style="padding-left:10%;padding-right:10%;"><div style="border-top:2px ridge #ccc;height:5px;overflow:hidden">&#160;</div></div>	
<!--	<div style="padding-left:30px;padding-right:30px;"> -->
<?php
		if(file_exists($content_file))
			require($content_file);
?>
<!--	</div>  -->
</body>
</html>