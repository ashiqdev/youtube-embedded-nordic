<!DOCTYPE html>
<html lang="en">
  <head>
	<?php 
	
	$headerTitle = "Matcher som vi visar - Nordic Sportsbar";
	
	require_once("../../inc/header.php");  
	
	?>
  </head>
  <body style="">
    <div class="main_content" style="overflow-x: hidden">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php
    $page="sport"; 
    require_once("../../inc/navbar.php"); 
    ?>


      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">Matcher som visas</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li>Sport</li>
            </ul>
          </div>
          <!-- /.page-title-wrapper -->
        </div>
        <!-- /.container -->

        <svg
          class="circle"
          data-parallax='{"x" : -200}'
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          width="950px"
          height="950px"
        >
          <path
            fill-rule="evenodd"
            stroke="rgb(6, 78, 59)"
            stroke-width="100px"
            stroke-linecap="butt"
            stroke-linejoin="miter"
            opacity="0.051"
            fill="none"
            d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z"
          />
        </svg>
      </section>
      <!-- /.page-banner -->
      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="">
        <!-- <div class="">
          <div style="position: relative; z-index: 2" class="">
            <div class="row align-items-center">
              <div class="container" style="margin-top: 50px">
                <iframe
                  class="iframe2"
                  src="https://www.tvmatchen.nu/widget/61a73b3b178d4?heading=TV-matcher&border_color=blue&autoscroll=1"
                  frameborder="0"
                ></iframe>
              </div>
            </div>
          </div>
        </div> -->
        
        <div class="sportlist wow pixFadeDown">
          <div class="container">
            

            <div class="sports wow pixFadeDown">
              <!-- today -->
              <div class="today">
                
                <div class="title-wrapper" style="text-align: center;">

                  <div class="todays-title title-with-date">
                    
                  </div>
                </div>

                <div class="todays-list-container">
                  <!-- todays matches -->

                  <!-- /todays-matches -->
                </div>

              
              </div>
              <!-- /today -->

              <!-- tomorrow -->
              <div class="tomorrow">
                
                <div class="title-wrapper">
                  <div class="tomorrows-title title-with-date">
                    
                  </div>
                </div>
               

                <div class="tomorrows-list-container">

                  <!-- tomorrows matches -->
                  
                  <!-- /tomorrows-matches -->
                </div>

              
              </div>
              <!-- /tomorrow -->


                <!-- 3rd day -->
                <div class="third-day">
                
                  <div class="title-wrapper">

                    <div class="thirdDay-title title-with-date">
                     
                    </div>
                  </div>

                  <div class="thirdDay-list-container">
                      <!-- thirdDay matches -->
                      <!-- /thirdDay-matches -->
                  </div>
  
                
  
                
                </div>
                <!-- /thirdDay -->

                 <!-- 4th day -->
                 <div class="fourth-day">

                  <div class="title-wrapper">
                    
                    <div class="fourthDay-title title-with-date">
                    
                    </div>
                  </div>
                 

                  <div class="fourthDay-list-container">

                    <!-- fourthDay matches -->
                    
                    <!-- /fourthDay-matches -->
                  </div>
  
  
                
                </div>
                <!-- /4th-day-->


                <!-- 5th day -->
                <div class="fifth-day">

                  <div class="title-wrapper">
                    
                    <div class="fifthDay-title title-with-date">
                      
                    </div>
                  </div>
                

                  <div class="fifthDay-list-container">
                    
                    <!-- fifthDay matches -->
                    
                    <!-- /fifth-matches -->
                  </div>
  
  
                
                </div>
                <!-- /5th-day-->


                <!-- 6th day -->
                <div class="fifth-day">

                  <div class="title-wrapper">
                    
                    <div class="sixthDay-title title-with-date">
                      
                    </div>
                  </div>

                  <div class="sixthDay-list-container">

                    <!-- sixthDay matches -->
                    
                    <!-- /sixth-matches -->
                  </div>
                
  
  
                
                </div>
                <!-- /6th-day-->



                 <!-- 7th day -->
                 <div class="fifth-day">

                  <div class="title-wrapper">
                    
                    <div class="seventhDay-title title-with-date">
                      
                    </div>
                  </div>
                
  
                  <div class="seventhDay-list-container">

                    <!-- seventhDay matches -->
                  
                    <!-- /seventh-matches -->
                  </div>
  
                
                </div>
                <!-- /7th-day-->


           </div>
          </div>
        </div>

        <!-- /.container -->
      </section>
      <!-- /.banner banner-one -->
			<?php require_once("../../inc/footer.php"); ?>
  </body>
</html>