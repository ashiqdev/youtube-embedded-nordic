<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Barnkalas";
	$metaDescription = "Fira barnkalaset hos oss med ett grymt paket där ni har popcorn, läsk, burgare, glass och bowling för 179:-/barn.";
    $imageURL = "/bilder/aktiviteter/4.jpg";
    
    require_once("../../../inc/header.php"); 
  ?>
  </head>
  <body>
    <div class="main_contant" style="overflow-x: hidden; overflow-y: auto">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php 
      $page="activity";
      require_once("../../../inc/navbar.php"); 
      ?>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">Barnkalas</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li><a href="/aktiviteter/">Aktiviteter</a></li>
              <li>Barnkalas</li>
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
      <section class="faqs">
        <div class="container">
          <div class="tabs-wrapper">
<?php require_once("../../../inc/dropdown.php"); ?>
            <div style="padding-top: 4rem">
              <div class="container" style="padding-left: 0">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="about-content" style="padding-right: 0">
                      <!-- /.section-title -->

                      <div
                        class="sec-image-container wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="background: black; overflow: hidden"
                      >
                        <img
                          src="/bilder/aktiviteter/barnkalas.png"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.2s"
                            style="font-size: 3.5rem; color: #fff"
                          >
                            Barnkalas
                          </h2>
                        </div>
                      </div>

                      <h3
                        style="padding-top: 2rem"
                        class="wow pixFadeDown thin"
                        data-wow-delay="0.2s"
                      >
                      Ta chansen och ge barnen ett roligt kalas!
                      </h3>

                      <p
                        class="description wow pixFadeDown thin"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
						Från 6 år:
						
						<ul>
						
							<li>Popcorn och läsk</li>
							<li>Burgare med fries och dressing vid sidan</li>
							<li>Glass</li>
							<li>1h bowling</li>
							<li>Totalt: 179:-/barn</li>
						
						</ul>
						
						                      <p
                        class="description wow pixFadeDown thin"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >

						Kalasen går att boka lördagar och söndagar kl. 12.00 - 14.00 för minst 8 personer.
						Vill ni ha skräddarsydda paket så hör av er till oss så tar vi fram ett förslag som passar er.
</p>

						                      <p
                        class="description wow pixFadeDown thin"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
					  
						Inbjudningskort finns att hämta här: <a href="/aktiviteter/barnkalas/inbjudningskort.pdf">Inbjudningskort</a>
					  
					  </p>
					  
                      <p
                        class="description wow pixFadeDown thin"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
						Avbokning skall ske minst 2 dagar innan bokat kalas. Om avbokning sker senare debiteras en avgift på 500 kr.
                      </p>
					  
                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
                      Varmt välkomna att boka på: 031 - 19 19 19 eller mejl Info@NordicSportsbar.se
                      </p>

                      <a
                        style="padding: 5px 25px"
                        data-wow-delay="0.2s"
                        class="btn-grad wow pixFadeUp"
                        href="/aktiviteter/"
                      >
                        Tillbaka till aktiviteter
                      </a>

                      <!-- /.singiture -->
                    </div>
                    <!-- /.about-content -->
                  </div>
                  <!-- /.col-lg-8 -->
                  
                  <!-- activity-tab -->
                  <?php
                  $activity = "barnkalas";
                  require_once("../../../inc/tab.php"); 
                  ?>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container -->
            </div>
          </div>
          <!-- /.tabs-wrapper -->
        </div>
        <!-- /.container -->
      </section>

      <?php require_once("../../../inc/footer.php"); ?>
    </div>
  </body>
</html>
