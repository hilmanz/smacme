<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include("meta.php");?>
</head>

<body>
	<div id="gradient-top">
    <div id="gradient-bottom">
	<div id="bghead">
    	<div id="bgfoot">
        	<div id="wrapper">
            	<?php include("header.php");?>
                <div id="container">
                	<?php 
					if($_GET['menu']=='features'){
						include("features.php");
					}else if($_GET['menu']=='why-smac'){ 
						include("why-smac.php");
                    }else if($_GET['menu']=='products'){ 
						include("products.php");
                    }else if($_GET['menu']=='contact'){ 
						include("contact.php");
                    }else if($_GET['menu']=='kol'){ 
						include("kol.php");
                    }else if($_GET['menu']=='keyword-analysis'){ 
						include("keyword-analysis.php");
                    }else if($_GET['menu']=='live-track'){ 
						include("live-track.php");
                    }else if($_GET['menu']=='sentiment-analysis'){ 
						include("sentiment-analysis.php");
                    }else if($_GET['menu']=='autoresponders'){ 
						include("autoresponders.php");
                    }else if($_GET['menu']=='supporting-features'){ 
						include("supporting-features.php");
                    }else if($_GET['menu']=='register'){ 
						include("register.php");
                    }else{ 
						include("home.php");
                    }?>
                </div><!-- #container -->
            	<?php include("footer.php");?>
            </div><!-- #wrapper -->
        </div><!-- #bgfoot -->
    </div><!-- #bghead -->
    </div><!-- #gradient-bottom -->
    </div><!-- #gradient-top -->
</body>
</html>