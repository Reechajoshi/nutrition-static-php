<?php
	$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	$isIE = (strpos($ua,"msie")!==false);
		
	header('Content-Type: text/css');
?>

body {
	padding-left: 10px;
	padding-top: 10px;
	padding-right: 0px;
	padding-bottom: 25px;
	margin: 0px;
}

#fix {
	position: absolute;
	width: 100%;
	height: 100%;
}

div.gcp
{
	overflow: hidden;
	text-align: left;
	white-space: nowrap;
	width:100%;
	padding: 0px;
	clear:right;
}

div.gc
{
	overflow: hidden;
	text-align: left;
	white-space: nowrap;
	width:100%;
	padding: 0px;
	clear:right;
}

div.gc-rel
{
	overflow: hidden;
	text-align: left;
	white-space: nowrap;
	padding: 0px;
	position:relative;
}

div.gsc
{
	float:left;
	text-align: left;
	white-space: nowrap;
	margin: 0px;
	overflow: hidden;
}

div.txt
{
	font-weight: 400;
	//font-family: 'Browallia New', 'cordia new', 'times new roman';
	font-family: 'BrowalliaNewRegular','times new roman';
	font-size: 1.3em; color: #3C3C39; text-align: justify;
	//font-size:1.3em
}

div.txt-wbel
{
	padding-bottom: 10px;
}

a.landing-page {
	font-family:'RMTyperighterRegular'; font-size: 48px; color: #242323; text-decoration:none;
}

div.atop
{
	font-family:'RMTyperighterRegular'; font-size: 32px; color: #242323; text-decoration:none; font-weight: 400;
}

a.atop:link, a.atop:visited, a.atop:active {
	font-family:'RMTyperighterRegular'; font-size: 32px; color: #242323; text-decoration:none; font-weight: 400;
}

a.atop:hover {
<?php
	if($isIE)
		echo('font-weight: 700;');
	else
		echo('text-decoration:underline; font-weight: 400;');
?>
}
/* 
a:link,a:visited,a:active
{
font-weight: 400;
font-family: 'BrowalliaNewRegular','times new roman';
}
*/
.gtxt-box-title
{
	border-bottom: 1px solid #242323;
	margin: 5px;
	padding-top: 3px;
	padding-bottom: 3px;
	color: #242323;
	background-color: #fff;
	font-weight : bold;
	
/*	font-family: 'Times New Roman','Lucida Sans Unicode',Verdana,'Arial';
    font-size: 14pt;
    font-weight: 400;
*/
	font-family: 'RMTyperighterRegular';
    font-size: 41px;
    font-weight: 500;
    white-space: nowrap;

}

.round-box-shadow
{
	-moz-box-shadow:    3px 3px 3px 3px #ccc;
	-webkit-box-shadow: 3px 3px 3px 3px #ccc;
	box-shadow:3px 3px 3px 3px #ccc;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	 padding: 2px; 
	// margin: 5px; 
}
/*
.round-box-shadow
{
	-moz-box-shadow:    1px 1px 1px 1px #ccc;
	-webkit-box-shadow: 1px 1px 1px 1px #ccc;
	box-shadow:         1px 1px 1px 1px #ccc;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
}
*/
.prod-side-bar
{
	margin: 2px;
	padding-right: 10px;
	float: left;
	text-align: left;
	white-space: nowrap;
	z-index:11;
}
div.gc-wrap
{
	text-align: left;
	white-space: normal;
}
.active-link {
	font-family: 'RMTyperighterRegular';
    font-size: 44px;
    font-weight:bold;
	color: #242323;	
}

/* 
ul.dis{
padding:0;
}
*/

li.li2{
list-style-image: url(/images/radio8.png);
padding-bottom:20px;
}
li.li3{
list-style-image: url(/images/radio8.png);
padding-bottom:5px;
}

ul.nb{
margin:0;
padding:0;
}

a img{
border:0; /*IE fix */
}
div.tst{
padding-top:20px;
padding-bottom:5px;
background-color:#fff;
margin-bottom:10px;
width :100%;
}
div.tst_am{
//color :#551C1C;
color : #551C1C;
}

div.tst_fm{
//color :#a52a2a;
color : #551C1C;
}

div.tst_an{
//color :#551C1C;
color : #551C1C;
}


div.tst_hh{
//color :#551C1C;
color : #551C1C;
}

div.tst_fi{
//color :#a52a2a;
color : #551C1C;
}
div.tst_fc{
//color :#551C1C;
color : #551C1C;
}

A:LINK    {Text-Decoration: none;color:#3C3C39;}
A:VISITED {Text-Decoration: none;color:#3C3C39;}
A:HOVER   {Color: #000;}

.rounded-corners {
    behavior: url(/css/border-radius.htc);
    border-radius: 20px;
}