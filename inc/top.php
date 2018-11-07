<div style='text-align:center; width:100%;'>
	<table align=center width=100% border=0 cellpadding=0 cellspacing=2>
		<tr><td width=40% align=left>	
			<div style='padding-left:25%;'><a style='text-decoration:none;' href='/'><img src='images/sv_mini.jpg' width='300px;'></a></div>
		</td><td align=center>
			<div class=gc style="overflow:hidden;">
<?php
	if($content_code=='am')
		echo('<div class=gc-rel style="left:40%;top:-3px;"><span class="atop active-link">about me</span></div>');
	else
		echo('<div class=gc-rel style="left:40%;top:-3px;"><a class=atop href="content.php?c=am" target=_self>about me</a></div>');
	
	if($content_code=='fim')
		echo('<div class=gc-rel style="left:30%;top:4px;"><span class="atop active-link">food is medicine</span></div>');
	else
		echo('<div class=gc-rel style="left:30%;top:4px;"><a class=atop href="content.php?c=fim" target=_self>food is medicine</a></div>');
		
	if($content_code=='anp')
		echo('<div class=gc-rel style="left:45%;top:8px;"><span class="atop active-link">about naturotherapy</span></div>');
	else
		echo('<div class=gc-rel style="left:45%;top:8px;"><a class=atop href="content.php?c=anp" target=_self>about naturotherapy</a></div>');
	if($content_code=='hoh')
		echo('<div class=gc-rel style="left:67%;top:12px;"><span class="atop active-link">holistic healing</span></div>');
	else
		echo('<div class=gc-rel style="left:67%;top:12px;"><a class=atop href="content.php?c=hoh" target=_self>holistic healing</a></div>');
	if($content_code=='foi')
		echo('<div class=gc-rel style="left:37%;top:8px;"><span class="atop active-link">for individuals</span></div>');
	else
		echo('<div class=gc-rel style="left:37%;top:8px;"><a class=atop href="content.php?c=foi" target=_self>for individuals</a></div>');
	if($content_code=='foc')
		echo('<div class=gc-rel style="left:23%;top:14px;"><span class="atop active-link">for corporates</span></div>');
	else
		echo('<div class=gc-rel style="left:23%;top:14px;"><a class=atop href="content.php?c=foc" target=_self>for corporates</a></div>');
	if($content_code=='mda')
		echo('<div class=gc-rel style="left:45%;top:4px;"><span class="atop active-link">media</span></div>');
	else
		echo('<div class=gc-rel style="left:45%;top:10px;"><a class=atop href="content.php?c=mda" target=_self>media</a></div>');
	if($content_code=='bmp')
		echo('<div class=gc-rel style="left:55%;top:4px;"><span class="atop active-link">brain mapping</span></div>');
	else
		echo('<div class=gc-rel style="left:55%;top:4px;"><a class=atop href="content.php?c=bmp" target=_self>brain mapping</a></div>');
	
	/*
	if($content_code=='am')
		echo('<div class=gc-rel style="left:40%;top:-3px;"><span class="atop active-link">about me</span></div>');
	else
		echo('<div class=gc-rel style="left:40%;top:-3px;"><a class=atop href="content.php?c=am" target=_self>about me</a></div>');
	
	if($content_code=='fim')
		echo('<div class=gc-rel style="left:30%;top:4px;"><span class="atop active-link">food is medicine</span></div>');
	else
		echo('<div class=gc-rel style="left:30%;top:4px;"><a class=atop href="content.php?c=fim" target=_self>food is medicine</a></div>');
		
	if($content_code=='anp')
		echo('<div class=gc-rel style="left:45%;top:8px;"><span class="atop active-link">about naturotherapy</span></div>');
	else
		echo('<div class=gc-rel style="left:45%;top:8px;"><a class=atop href="content.php?c=anp" target=_self>about naturotherapy</a></div>');
	if($content_code=='hoh')
		echo('<div class=gc-rel style="left:67%;top:12px;"><span class="atop active-link">holistic healing</span></div>');
	else
		echo('<div class=gc-rel style="left:67%;top:12px;"><a class=atop href="content.php?c=hoh" target=_self>holistic healing</a></div>');
	if($content_code=='foi')
		echo('<div class=gc-rel style="left:37%;top:8px;"><span class="atop active-link">for individuals</span></div>');
	else
		echo('<div class=gc-rel style="left:37%;top:8px;"><a class=atop href="content.php?c=foi" target=_self>for individuals</a></div>');
	if($content_code=='foc')
		echo('<div class=gc-rel style="left:23%;top:14px;"><span class="atop active-link">for corporates</span></div>');
	else
		echo('<div class=gc-rel style="left:23%;top:14px;"><a class=atop href="content.php?c=foc" target=_self>for corporates</a></div>');
	if($content_code=='mda')
		echo('<div class=gc-rel style="left:55%;top:4px;"><span class="atop active-link">media</span></div>');
	else
		echo('<div class=gc-rel style="left:55%;top:4px;"><a class=atop href="content.php?c=mda" target=_self>media</a></div>');
	if($content_code=='mda')
		echo('<div class=gc-rel style="left:55%;top:4px;"><span class="atop active-link">media</span></div>');
	else
		echo('<div class=gc-rel style="left:55%;top:4px;"><a class=atop href="content.php?c=mda" target=_self>media</a></div>');	*/
	?>
	<div class=gc-rel style='left:70%;top:4px;'><a class=atop href="http://blog.sejalvora.com/category/articles-on-health/ " onclick="centeredPopup(this.href,'myWindow','600','300','yes');return false">my blog</a></div>
	<?
	if($content_code=='cnm')
		echo('<div class=gc-rel style="left:45%;top:2px;"><span class="atop active-link">contact me</span></div>');
	else
		echo('<div class=gc-rel style="left:45%;top:2px;"><a class=atop href="content.php?c=cnm" target=_self>contact me</a></div>');
	?>
</div>
		</td></tr>
	</table>
</div>
<br>