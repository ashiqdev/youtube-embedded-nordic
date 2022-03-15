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
                        Shuffleboards som följer dem officiella reglerna och är
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
                        Bokning går att göra på telefon på 031 - 19 19 19 eller
                        via mejl på
                        <span><a href="">Info@NordicSportsbar.se</a></span>
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        Varmt välkomna!
                      </p>

                      <h3 class="wow pixFadeDown thin">
                        OFFICIELLA SPELREGLER
                      </h3>

                      <p
                        class="description wow pixFadeDown"
                        style="line-height: 2"
                      >
                        Varje lags mål är att samla på sig 15 poäng före
                        motståndarlaget.
                      </p>

                      <ul class="shuffle-list wow pixFadeDown">
                        <li>
                          Dela upp er i två lag och ställ er på ett av bordets
                          två kortsidor.
                        </li>
                        <li>
                          Utse vilket lag som börjar genom att spela över en
                          puck till motsatt sida. Laget som kommer närmst
                          kortsidan börjar
                        </li>
                        <li>
                          Ta tillbaka de två puckarna och nollställ poängtavlan
                        </li>
                        <li>
                          Laget som börjar slår nu över en puck från ena
                          kortsidan till den andra och försöker att komma så
                          nära den andra kortsidan som möjligt.
                        </li>
                        <li>
                          När pucken stannat gör det andra laget likadant och
                          det är fullt tillåtet att slå ut det andra lagets
                          puck(ar).
                        </li>
                        <li>
                          Upprepa detta tills det inte finns några puckar kvar
                          på kortsidan som ni står på.
                        </li>
                        <li>
                          Räkna nu poängen. Observera att endast puckarna som är
                          förbi motståndarens bästa puck är poänggivande (alltså
                          är det endast ett lag som får poäng varje gång) och
                          puckarna som står på linjen alltid tillhör den lägre
                          poängzonen och om den hänger lite utanför den motsatta
                          kortsidan så räknas detta som 5 poäng.
                        </li>
                        <li>
                          Knappa in poängen med hjälp av knapparna som finns
                          nära varje kortsida.
                        </li>
                        <li>
                          Laget som först får 15 poäng eller mer vinner spelet.
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
