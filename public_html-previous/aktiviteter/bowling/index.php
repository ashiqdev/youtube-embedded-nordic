<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Bowling";
    $imageURL = "/bilder/aktiviteter/bowlingbanor.jpg";
	
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
            <h1 class="page-title">Bowling</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li><a href="/aktiviteter/">Aktiviteter</a></li>
              <li>Bowling</li>
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
                      <div
                        class="sec-image-container wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="background: black; overflow: hidden"
                      >
                        <img
                          src="/bilder/nordic.jpg"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            style="font-size: 3.5rem; color: #fff"
                          >
                            Bowling
                          </h2>
                        </div>
                      </div>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2; padding-top: 2rem"
                      >
                        Hos oss hittar du 6 moderna bowlingbanor med
                        discobowling och r??rliga ljuseffekter.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        Vi har ??ven st??d f??r r??nnstaket (bumpers) som
                        automatiskt f??lls upp f??r barnen och ned f??r er vuxna s??
                        ni f??r en j??mn match mot barnen. Vi har ??ven
                        bowlingramper vid banorna som man kan anv??nda f??r att
                        rulla ned kloten och dessa passar deltagare som inte har
                        m??jlighet att lyfta och kasta kloten.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        Vi rekommenderar max 4 spelare per bana. Mer information
                        samt priser g??r att hitta nedan, varmt v??lkomna!
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        Skohyra ing??r i priset och 1 bowlingtimme hos oss ??r 58
                        minuter (2 minuter p?? och av tid).
                      </p>

                      <h3 class="wow pixFadeDown thin">PRISER</h3>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2; margin-bottom: 5px"
                      >
                        S??ndag - M??ndag:
                        <span style="font-weight: bold; color: #02aab0"
                          >200:-/bana/timme</span
                        >
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2; margin-bottom: 5px"
                      >
                        Tisdag - Torsdag:
                        <span style="font-weight: bold; color: #02aab0"
                          >320:-/bana/timme</span
                        >
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        Fredag - L??rdag:
                        <span style="color: #02aab0; font-weight: bold"
                          >390:-/bana/timme</span
                        >
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        Pokal g??r att best??lla segraren f??r 99:-.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        Ett bra tips ??r att komma 10-15 minuter innan er bokade
                        tid s?? ni hinner knappa in era namn och byta skor innan
                        ni b??rjar bowla.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
                        Hj??rtligt v??lkomna och m?? b??sta spelare vinna!
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
                  $activity = "bowling";
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
