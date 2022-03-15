<!DOCTYPE html>
<html lang="en">
  <head>
	<?php 
	
	$headerTitle = "Sidan hittades inte";
	$metaDescription = "Denna sidan hittades tyvärr inte, du kan alltid återvända till förstasidan eller kontakta oss vid frågor.";
	
	require_once("../../inc/header.php");  
	
	?>
  </head>
  <body style="">
    <div class="main_content" style="overflow-x: hidden">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php
    $page=""; 
    require_once("../../inc/navbar.php"); 
    ?>
 

      <!--==========================-->
      <!--=        Error        =-->
      <!--==========================-->
      <section class="error_area">
            
            <div class="container flex">
                <div class="error_contain text-center">
                    <div class="b_text">
                        <h1 class="f_p w_color f_700">404</h1>
                    </div>
                    <h2 class="f_p f_400 w_color f_size_40">Sidan hittades tyvärr inte</h2>
                    <p class="w_color f_400">Ledsen, men det verkar som att sidan du sökte inte längre finns kvar.<br> Du kan alltid <a href="mailto: Info@NordicSportsbar.se">mejla oss</a> eller återvända till förstasidan.</p>
                    <a href="/" class="about_btn btn_hover mt_40">Tillbaka till förstasidan</a>
                </div>
            </div>
        </section>
      

      
      <!-- /.banner banner-one -->
			<?php require_once("../../inc/footer.php"); ?>
  </body>
</html>
