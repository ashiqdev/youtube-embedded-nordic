<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        $headerTitle = "Gamezone";
	
        require_once("../../inc/header.php"); 
     ?>
  </head>
  <body>
    <div class="main_contant" style="overflow-x: hidden; overflow-y: auto">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php require_once("../../inc/navbar.php"); ?>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">GAMEZONE</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li>GAMEZONE</li>
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

      <!--=========================-->
      <!--=         About         =-->
      <!--=========================-->
      <section class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="about-content">
                <div class="section-title">
                  <h3 class="sub-title wow pixFadeUp">Spelavdelning</h3>
                </div>
                <!-- /.section-title -->

                <p class="description wow pixFadeUp" data-wow-delay="0.2s">
				  När du är hos oss kan du närsomhelst hoppa över till spelavdelningen där du hittar bland annat:
                </p>

                <ul class="wow pixFadeUp" data-wow-delay="0.2s">
                  <li>Basket</li>
                  <li>Airhockey</li>
                  <li>Boxboll</li>
                  <li>Sparkboll</li>
                  <li>Gripklo</li>
                </ul>

                <p class="wow pixFadeUp" data-wow-delay="0.2s">
                  Nu har vi även <a href="/vr/">Playstation och VR</a>.
                </p>
              </div>
              <!-- /.about-content -->
            </div>
            <!-- /.col-lg-7 -->

            <div class="col-lg-5">
              <div class="about-thumb wow pixFadeRight" data-wow-delay="0.2s">
                <img
                  style="height: auto"
                  src="/bilder/game.jpg"
                  alt="about"
                />
              </div>
              <!-- /.about-thumb -->
            </div>
            <!-- /.col-lg-5 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.about -->
      <?php require_once("../../inc/footer.php"); ?>
    </div>
  </body>
</html>
