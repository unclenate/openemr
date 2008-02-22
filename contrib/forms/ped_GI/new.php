<?php

// file new.php for pediatric EMESIS evaluation

// presents a blank form for evaluating pediatric FEVER

// this file made by andres@paglayan.com on 2004-09-23

// input designed by Lowell Gordon, MD lgordon@whssf.org

// to max the billing complexity coding



include_once("../../globals.php");

include_once("../../../library/api.inc");

formHeader("Pediatric GI Evaluation");



?>

<html><head>
<? html_header_show();?>

<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">

</head>

<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>



<!--REM note that every input method has the same name as a valid column, this will make things easier in save.php -->



<br>

<form method='post' action="<?echo $rootdir;?>/forms/ped_GI/save.php?mode=new" name='ped_GI' >



<!-- the form goes here -->

<?php

	$obj=array(); // just to avoid undeclared var warning

	include ('form.php'); // to use a single file for both, empty and editing

?>

<!-- the form ends here -->



<!--REM note our nifty jscript submit -->

<a href="javascript:top.restoreSession();document.ped_GI.submit();" class="link_submit">[Save]</a>

<br>



<a href="<?php echo $GLOBALS['form_exit_url']; ?>" class="link" onclick="top.restoreSession()">[Don't Save]</a>

</form>



<?php

formFooter();

?>

