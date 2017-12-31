<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Breakeven 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130509

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
  include_once("include/header.php");
?>

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
            <?php 
              include_once("include/menu.php");
            ?>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="content">
                    <?php 
                    include_once("include/sectionHome.php");
                    ?>
		</div>
		<!-- end #content -->
		<div id="sidebar">
		    <?php 
                    include_once("include/sectionRight.php");
                    ?>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
	<div id="featured-content">
	            <?php 
                    include_once("include/sectionPart2.php");
                    ?>
	</div>
</div>
<div id="footer">
     <?php 
        include_once("include/footer.php");
        ?>
</div>
<!-- end #footer -->
</body>
</html>
