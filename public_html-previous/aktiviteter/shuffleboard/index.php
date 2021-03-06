<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Shuffleboard";
    $imageURL = "/bilder/aktiviteter/nordic.jpg";
	
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
            <h1 class="page-title">Shuffleboard</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li><a href="/aktiviteter/">Aktiviteter</a></li>
              <li>Shuffleboard</li>
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
                          src="/bilder/aktiviteter/nordic.jpg"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown absoluteTitle"
                            style="font-size: 2.5rem; color: #fff"
                          >
                            SHUFFLEBOARD
                          </h2>
                        </div>
                      </div>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2; padding-top: 2rem"
                      >
                        Vi rekommenderar max 8 personer per bord och vi har 3st
                        Shuffleboards som f??ljer dem officiella reglerna och ??r
                        av fullstorlek (22 foot).
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        <span style="color: #02aab0; font-weight: bold"
                          >Drop-in pris:</span
                        >: 85 kr/timme/person.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        <span style="color: #02aab0; font-weight: bold"
                          >Priser vid bokning</span
                        >: 350kr/timme/bord.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        Bokning g??r att g??ra p?? telefon p?? 031 - 19 19 19 eller
                        via mejl p??
                        <span><a href="">Info@NordicSportsbar.se</a></span>
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        Varmt v??lkomna!
                      </p>

                      <h3 class="wow pixFadeDown thin">
                        OFFICIELLA SPELREGLER
                      </h3>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        Varje lags m??l ??r att samla p?? sig 15 po??ng f??re
                        motst??ndarlaget.
                      </p>

                      <ul class="shuffle-list wow pixFadeDown">
                        <li>
                          Dela upp er i tv?? lag och st??ll er p?? ett av bordets
                          tv?? kortsidor.
                        </li>
                        <li>
                          Utse vilket lag som b??rjar genom att spela ??ver en
                          puck till motsatt sida. Laget som kommer n??rmst
                          kortsidan b??rjar
                        </li>
                        <li>
                          Ta tillbaka de tv?? puckarna och nollst??ll po??ngtavlan
                        </li>
                        <li>
                          Laget som b??rjar sl??r nu ??ver en puck fr??n ena
                          kortsidan till den andra och f??rs??ker att komma s??
                          n??ra den andra kortsidan som m??jligt.
                        </li>
                        <li>
                          N??r pucken stannat g??r det andra laget likadant och
                          det ??r fullt till??tet att sl?? ut det andra lagets
                          puck(ar).
                        </li>
                        <li>
                          Upprepa detta tills det inte finns n??gra puckar kvar
                          p?? kortsidan som ni st??r p??.
                        </li>
                        <li>
                          R??kna nu po??ngen. Observera att endast puckarna som ??r
                          f??rbi motst??ndarens b??sta puck ??r po??nggivande (allts??
                          ??r det endast ett lag som f??r po??ng varje g??ng) och
                          puckarna som st??r p?? linjen alltid tillh??r den l??gre
                          po??ngzonen och om den h??nger lite utanf??r den motsatta
                          kortsidan s?? r??knas detta som 5 po??ng.
                        </li>
                        <li>
                          Knappa in po??ngen med hj??lp av knapparna som finns
                          n??ra varje kortsida.
                        </li>
                        <li>
                          Laget som f??rst f??r 15 po??ng eller mer vinner spelet.
                        </li>
                      </ul>

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
                  $activity = "shuffleboard";
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
