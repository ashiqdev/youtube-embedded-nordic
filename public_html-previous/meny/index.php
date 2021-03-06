<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $headerTitle = "Meny";
	
    require_once("../../inc/header.php"); 
  ?>
</head>
<body>
<div class="main_contant" style="overflow-x: hidden; overflow-y: auto">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php
    $page="meny"; 
    require_once("../../inc/navbar.php"); 
    ?>

       <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">Meny</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li>Meny</li>
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
            <div class="col-lg-12">
              <div class="text-center">
                <h3
                  class="d-inline-block mx-auto"
                  data-wow-delay="0.2s"
                  style="
                    font-size: 3rem;
                    letter-spacing: 5px;
                    text-align: center;
                    background: #02aab0;
                    color: #fff;
                    padding: 10px 20px;
                    width: auto;
                    margin-bottom: 0px;
                  "
                >
                  SNACKS
                  <span
                    class="material-icons"
                    style="font-size: 3rem; vertical-align: middle"
                  >
                    local_pizza
                  </span>
                  STARTERS
                </h3>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="text-center mt-4 mb-4 wow pixFadeDown">
                <div class="d-inline-block star-header text-center">
                  <h3
                    class="text-center d-inline-block"
                    style="margin-bottom: 0px; padding: 10px 20px"
                  >
                    <span class="material-icons"> star </span>
                    CHICKEN WINGS

                    <span class="material-icons"> star </span>
                  </h3>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-card" style="margin-top: 2rem">
                <h3
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                >
                  CLASSIC BUFFALO
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  V??ra klassiska friterade kycklingvingar som ??r marinerade med
                  buffalos??s.
                  <br />
                  Serveras med blue cheese-s??s och selleri.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">5 wings 99</div>
                  <div class="menu-information">10 wings 149</div>
                  <div class="menu-information">15 wings 179</div>
                </div>
              </div>
            </div>
            <div class="offset-lg-1 col-lg-5 col-md-6 mobile-align">
              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  GARLIC & PARMESAN
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Kycklingvingar marinerade i en blandning av vitl??k & parmesan
                  <br />
                  -s??s och serveras givetvis med selleri vid sidan.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">5 wings 99</div>
                  <div class="menu-information">10 wings 149</div>
                  <div class="menu-information">15 wings 179</div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 mobile-align">
              <div class="text-lg-center">
                <div class="d-inline-block mx-auto">
                  <div class="menu-card text-left">
                    <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                      FLAMIN??? HOT
                    </h3>
                    <p
                      class="menu-description wow pixFadeDown"
                      data-wow-delay="0.2s"
                    >
                      V??r extra starka version av buffalos??sen d??r
                      kycklingvingarna vilas i blandningen f??re
                      <br />
                      servering. Kommer med blue cheese dip och selleri vid
                      sidan.
                    </p>

                    <div
                      class="menu-info-container wow pixFadeDown"
                      data-wow-delay="0.2s"
                    >
                      <div class="menu-information">5 wings 99</div>
                      <div class="menu-information">10 wings 149</div>
                      <div class="menu-information">15 wings 179</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div
                class="text-center mb-4 wow pixFadeDown"
                style="margin-top: 130px"
              >
                <div class="d-inline-block star-header text-center">
                  <h3
                    class="text-center d-inline-block"
                    style="margin-bottom: 0px; padding: 10px 20px"
                  >
                    <span class="material-icons"> star </span>
                    WARMUPS

                    <span class="material-icons"> star </span>
                  </h3>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  HALLOUMI STICKS
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Friterade och honungst??ckta halloumisticks serverade
                  <br />
                  med en sk??l av nachos och lime vid sidan.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">79</div>
                </div>
              </div>
            </div>

            <div class="offset-lg-1 col-lg-5 col-md-6 mobile-align">
              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  SNACK BOWL
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  V??r sk??l med snacks som best??r av en h??rlig blandning av v??ra
                  f??rr??tter. Kommer med aioli och chilimajonn??s vid sidan.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">LITEN 79</div>
                  <div class="menu-information">MELLAN 139</div>
                  <div class="menu-information">STOR 179</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  GARLIC BREAD
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Vitl??ksbr??d gjorda av v??r alldeles egna sm??lta
                  <br />
                  vitl??k &amp; ostkr??m, toppad med olivolja och serveras med aioli vid sidan.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">FOUR SLICES 39</div>
                  <div class="menu-information">EIGHT SLICES 69</div>
                </div>
              </div>
            </div>

            <div class="offset-lg-1 col-lg-5 col-md-6 mobile-align">
              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  TACOS
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Romansallad, pico de gallo, picklad l??k, chili eller
                  vegansk majonn??s,
                  <br />
                  toppas med pulled beef eller oumph.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">DOUBLE TACO 129</div>
                  <div class="menu-information">TRIPLE TACO 149</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div
                class="menu-img-container wow pixFadeRight mt-5"
                data-wow-delay="0.2s"
              >
                <img
                  src="/bilder/menu/buffalo.jpg"
                  alt="classic-buffalo-wings"
                  class="menu-img"
                />

                <p class="menu-image-caption">Classic buffalo wings</p>
              </div>
            </div>

            <div class="offset-lg-1 col-lg-5 col-md-6 mobile-align">
              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  NACHOS (GLUTENFRI)
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Hemgjorda nachochips baserade p?? majstortillas,
                  <br />
                  serveras med f??rsk guacamole och gr??ddfil vid sidan.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">ENKEL 69 </div>
                  <div class="menu-information">MED OST 89</div>
                  <div class="menu-information">
                    MED OST OCH &amp; PULLED BEEF 109
                  </div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  CHICKEN QUESADILLAS
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Grillad och t??rnad kyckling med pico de gallo och ost
                  som ??r sm??lt mellan
                  <br />
                  tortilla skivor. Serveras med guacamole och gr??ddfil vid
                  sidan.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">139</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div
                class="menu-img-container wow pixFadeRight mt-5"
                data-wow-delay="0.2s"
              >
                <img
                  src="/bilder/menu/nachos.jpg"
                  alt="nachos med pulled beef"
                  class="menu-img"
                />

                <p class="menu-image-caption">nachos med pulled beef</p>
              </div>
            </div>

            <div class="offset-lg-1 col-lg-5 col-md-6 mobile-align">
              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  OUMPH QUESADILLAS
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Ett uts??kt alternativ till v??r kyckling-quesadillas med
                  stekt oumph och vegansk ost ist??llet.
                  <br />
                  Serveras med guacamole och vegansk majonn??s vid sidan.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">139</div>
                </div>
              </div>

              <div
                class="menu-card wow pixFadeDown add-out"
                data-wow-delay="0.2s"
                style="
                  background: #d1fae5;
                  padding: 1rem;
                  margin-top: 2rem;
                  border-radius: 0px;
                  text-align: center;
                "
              >
                <h3 class="menu-title">MINI SNACKS</h3>
                <ul style="list-style: none; padding: 0; font-size: 20px">
                  <li class="mb-2">
                    CRISPY ONION RINGS
                    <span class="ml-4" style="color: #2d9b87">4 pcs | 29</span>
                  </li>
                  <li class="mb-2">
                    JALAPE??O POPPERS
                    <span class="ml-4" style="color: #2d9b87">4 pcs | 29</span>
                  </li>

                  <li>
                    MOZZARELLA STICKS
                    <span class="ml-4" style="color: #2d9b87">4 pcs | 29</span>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-12">
              <p
                class="text-center wow pixFadeDown thin text-center"
                data-wow-delay="0.2s"
                style="padding-top: 5rem; font-size: 20px; line-height: 1.5"
              >
                Fr??ga g??rna oss i personalen g??llande allergier & justeringar
              </p>
            </div>

            <!-- BURGERS -->
            <div class="col-lg-12">
              <div class="text-center mt-180">
                <h3
                  class="wow pixFadeDown d-inline-block mx-auto"
                  data-wow-delay="0.2s"
                  style="
                    font-size: 3rem;
                    letter-spacing: 5px;
                    text-align: center;
                    background: #02aab0;
                    color: #fff;
                    padding: 10px 20px;
                    width: auto;
                    margin-bottom: 0px;
                  "
                >
                  BURGERS
                </h3>
              </div>
            </div>

            <div class="col-lg-12 text-center mb-5">
              <p
                class="wow pixFadeDown d-inline-block mx-auto thin"
                data-wow-delay="0.2s"
                style="
                  font-size: 1.3rem;

                  text-align: center;
                  padding: 12px 20px;
                  width: auto;
                  margin-bottom: 0px;
                  margin-top: 20px;
                  background: #d1fae5;
                "
              >
                V??ra burgare ??r serverade med krispiga och skalade
                <br />
                fries och v??r hemlagade coleslaw
              </p>
            </div>

            <div class="col-lg-6">
              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  CLASSIC CHEDDAR BURGER
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  V??r klassiska burgare som kommer med sm??lt cheddarost, picklad
                  saltgurka, krispig sallad,
                  <br />
                  friterad & r?? silverl??k och v??r alldeles egna
                  hamburgerdressing.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">165</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  JALAPE??O & BACON BURGER
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  En burgare med hetta som kommer med jalapenos, cheddarost,
                  chilimajonn??s, silverl??k,
                  <br />
                  bacon och krispig sallad.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">175</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  THE ONE POUND BURGER
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Dubbel varianten av v??r Cheddarburgare med tv?? k??ttbitar
                  ist??llet f??r en,
                  <br />
                  dubbla cheddar skivor, bacon och chilimajonn??s.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">225</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  VEGAN CHEESEBURGER
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Sojabaserad Oumph burgare med vegansk majonn??s, picklad l??k,
                  <br />
                  serveras i ett veganskt br??d och picklad slaw.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">165</div>
                </div>
              </div>
            </div>

            <div class="offset-lg-1 col-lg-5 col-md-6 mobile-align">
              <div
                class="d-inline-block wow pixFadeDown"
                data-wow-delay="0.4s"

                style="background: #d1fae5; width: 50%; padding: 10px 20px"
              >
                <div class="menu-img-container mx-auto" style="width: 50%">
                  <img src="/bilder/menu/beef.svg" alt="beef" />
                </div>

                <p class="thin mt-1 text-center">100% N??TK??TT</p>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  TRUFFLE BURGER
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  V??r cheddarburgare med en tvist av tryffel.
                  <br />
                  Kommer med tryffelmajonn??s och picklad l??k
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">175</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  BBQ BURGER
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  En variant av v??r cheddarburgare med bacon och
                  <br />
                  v??r alldeles egna BBQ s??s.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">175</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  CRISPY CHICKEN BURGER
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  V??r krispiga kycklingfil?? burgare med picklad slaw, majonn??s,
                  sallad och tomat. Kycklingen kan bytas ut mot halloumi.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">MILD 165 </div>
                  <div class="menu-information">STARK 165 </div>
                  <div class="menu-information">HALLOUMI 165</div>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <p
                class="text-center wow pixFadeDown thin text-center"
                data-wow-delay="0.2s"
                style="padding-top: 5rem; font-size: 20px; line-height: 1.5"
              >
                Alla burgare kan serveras med glutenfritt och laktosfritt br??d
              </p>
            </div>

            <div class="col-lg-6">
              <div
                class="menu-img-container wow pixFadeRight mt-5"
                data-wow-delay="0.2s"
              >
                <img
                  src="/bilder/menu/pound-burger.jpg"
                  alt="the one pound burger"
                  class="menu-img"
                />

                <p class="menu-image-caption text-uppercase">
                  The One Pound Burger
                </p>
              </div>

              <div
                class="menu-img-container wow pixFadeRight mt-5"
                data-wow-delay="0.2s"
              >
                <img
                  src="/bilder/menu/jalapeno.jpg"
                  alt="jalapeno & bacon burger"
                  class="menu-img"
                />

                <p class="menu-image-caption text-uppercase">
                  JALAPENO & BACON BURGER
                </p>
              </div>
            </div>

            <div class="offset-lg-1 col-lg-5 col-md-6 text-center mobile-align">
              <div
                class="menu-card wow pixFadeDown add-out"
                data-wow-delay="0.2s"
                style="
                  background: #d1fae5;
                  padding: 1rem;
                  margin-top: 2rem;
                  border-radius: 0px;
                  text-align: center;
                "
              >
                <h3 class="menu-title">UPGRADES</h3>
                <ul style="list-style: none; padding: 0; font-size: 20px">
                  <li class="mb-2">
                    ADD BACON
                    <span class="ml-4" style="color: #2d9b87">+19</span>
                  </li>
                  <li class="mb-2">
                    CHEESE FRIES
                    <span class="ml-4" style="color: #2d9b87"
                      >+19</span
                    >
                  </li>

                  <li class="">
                    SWEET POTATOE FRIES
                    <span class="ml-1" style="color: #2d9b87"
                      >+19</span
                    >
                  </li>
                </ul>

                <h3 class="menu-title">DIP SAUCES</h3>
                <div class="row">
                  <div class="col-lg-6">
                    <p>AIOLI</p>
                    <p>BEARNAISE</p>
                    <p>CHILIMAJONN??S</p>
                    <p>TRYFFELMAJONN??S</p>
                    <p>CHEDDAR</p>
                    <p>VEGANSK MAJONN??S</p>
                    <p>CAESAR DRESSING</p>
                  </div>
                  <div class="col-lg-6">
                    <p>BLUE CHEESE</p>
                    <p>VITL??K & PARMESAN</p>
                    <p>BUFFALOS??S</p>
                    <p>HAMBURGARDRESSING</p>
                    <p>GUACAMOLE</p>
                    <p>GR??DDFIL</p>
                    <p>MAJONN??S</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <p
                class="text-center wow pixFadeDown thin text-center"
                data-wow-delay="0.2s"
                style="padding-top: 5rem; font-size: 20px; line-height: 1.5"
              >
                Fr??ga g??rna oss i personalen g??llande allergier & justeringar
              </p>
            </div>
          </div>

          <!-- MAIN COURSES -->

          <div class="col-lg-12">
            <div class="text-center mt-180">
              <h3
                class="wow pixFadeDown d-inline-block mx-auto"
                data-wow-delay="0.2s"
                style="
                  font-size: 3rem;
                  letter-spacing: 5px;
                  text-align: center;
                  background: #02aab0;
                  color: #fff;
                  padding: 10px 20px;
                  width: auto;
                  margin-bottom: 0px;
                "
              >
                HUVUDR??TTER
              </h3>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  GRILLED STEAK
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Grillad Oxfil?? eller Entrec??te med r??dvinss??s. Serverad
                  med v??r hemlagade b??arnaise,
                  <br />
                  tomatsallad och pommes frites.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">OXFIL?? (200g) 299</div>
                  <div class="menu-information">ENTREC??TE (220g) 279</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  PEPPER STEAK
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Grillad oxfil?? med v??r hemgjorda peppars??s. Serveras med
                  b??arnaise,
                  <br />
                  tomatsallad och pommes frites.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">OXFIL?? (200g) 299</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  BBQ RIBS
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  V??ra baby back ribs som ??r glaserad med din favorits??s.
                  <br />
                  Garnerad med jalape??os, f??rsk gr??sl??k, koriander och serveras med pommes.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">BBQ SAUCE 209 </div>
                  <div class="menu-information">BUFFALO SAUCE 209</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  SUPER SAMPLER
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  V??r tr??bricka med BBQ-revben, BBQ-kyckling, pulled beef,
                  <br />
                  l??kringar, coleslaw och pommes.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">249</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  CAESAR SALAD
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Romansallad, tomat, hemgjorda krutonger, parmesanost,
                  <br />
                  ceasar dressing och serveras med ditt val av k??tt.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information text-uppercase">
                    GRILLAD KYCKLING OCH BACON
                  </div>
                  <div class="menu-information">LAX 195 </div>
                  <div class="menu-information">OUMPH 175</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  CLASSIC FISH & CHIPS
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  V??r krispigt panerade torskfil?? som ??r toppad med persilja och
                  <br />
                  serveras med grilad citron, pommes och tartars??s vid sidan.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">179</div>
                </div>
              </div>
			  
			  <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  CLUB SANDWICH
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Grillad kycklingfil??, bacon, pico de gallo, romansallad mellan
                  tv?? levainbr??d med majonn??s och guacamole. <br />
				  Serveras med krispiga pommes och tryffelmajonn??s vid sidan.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">175</div>
                </div>
              </div>
			  
            </div>

            <div class="offset-lg-1 col-lg-5 col-md-6 mobile-align">
              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  PASTA ALFREDO
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Pasta med kr??mig vitl??kssmak, tomater,
                  <br />
                  persilja och ditt val av k??tt.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information text-uppercase">
                    Kyckling 209 
                  </div>
                  <div class="menu-information text-uppercase">Lax 219 </div>
                  <div class="menu-information text-uppercase">Oxfil?? 229</div>
                </div>
              </div>

              <div
                class="menu-img-container wow pixFadeRight mt-5"
                data-wow-delay="0.2s"
              >
                <img
                  src="/bilder/menu/pasta.jpg"
                  alt="pasta alfredo"
                  class="menu-img"
                />
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  STEAK & BLUE CHEESE
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  En fr??sch sallad med f??rska cocktailtomater,
                  isbergssallad, b??nor, persilja, picklad
                  <br />
                  l??k, salladsmix, och grillad ryggbiff.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">249</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  BBQ CHICKEN
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  V??r grillade och glaserade BBQ-kyckling som serveras med
                  <br />
                  tomatsallad & mos eller pommes.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">219</div>
                </div>
              </div>

              <div class="menu-card">
                <h3 class="menu-title wow pixFade" data-wow-delay="0.2s">
                  SWEET SALMON
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Grillad lax som serveras med ??rtbaserad sm??r, tomatsallad<br />
				  picklad l??k och s??tpotatismos.
                </p>

                <div
                  class="menu-info-container wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  <div class="menu-information">175</div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 box">
              <div
                class="menu-img-container wow pixFadeRight mt-5"
                data-wow-delay="0.2s"
              >
                <img
                  src="/bilder/menu/steak-blue-cheese.jpg"
                  alt="STEAK & BLUE CHEESE"
                  class="menu-img"
                />
              </div>
            </div>

            <div class="col-lg-6 box">
              <div
                class="menu-img-container wow pixFadeRight mt-5"
                data-wow-delay="0.2s"
              >
                <img
                  src="/bilder/menu/super-sampler.jpg"
                  alt="super sampler"
                  class="menu-img"
                />
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <p
              class="text-center wow pixFadeDown thin text-center"
              data-wow-delay="0.2s"
              style="padding-top: 5rem; font-size: 20px; line-height: 1.5"
            >
              Fr??ga g??rna oss i personalen g??llande allergier & justeringar
            </p>
          </div>

          <!-- DESSERTS -->
          <div class="col-lg-12">
            <div class="text-center mt-180">
              <h3
                class="wow pixFadeDown d-inline-block mx-auto"
                data-wow-delay="0.2s"
                style="
                  font-size: 3rem;
                  letter-spacing: 5px;
                  text-align: center;
                  background: #02aab0;
                  color: #fff;
                  padding: 10px 20px;
                  width: auto;
                  margin-bottom: 0px;
                "
              >
                DESSERTS
              </h3>

              <div class="menu-card" style="margin-top: 2rem">
                <h3
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                >
                  CLASSIC SUNDAE
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Fyra stora skopor av glass som ??r toppat med marshmallows,
                  <br />
                  choklad, choklads??s och vispgr??dde.
                </p>

                <p
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                  style="margin-top: -10px"
                >
                  69
                </p>

                <h3
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                >
                  <span
                    style="margin-top: -20px; font-size: 50px"
                    class="material-icons"
                  >
                    star
                  </span>
                </h3>
              </div>

              <div class="menu-card" style="margin-top: 2rem">
                <h3
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                >
                  MEXICAN FRIED ICE CREAM
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  Friterad glassboll t??ckt med digestive, toppat med
                  karamells??s,
                  <br />
                  vispgr??dde och k??rsb??r. En uts??kt favorit
                </p>

                <p
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                  style="margin-top: -10px"
                >
                  109
                </p>

                <h3
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                >
                  <span
                    style="margin-top: -20px; font-size: 50px"
                    class="material-icons"
                  >
                    star
                  </span>
                </h3>
              </div>

              <div class="menu-card" style="margin-top: 2rem">
                <h3
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                >
                  APPLE CRUMBLE & VANILLA
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  V??r hemgjorda ??pple smulade paj med f??rska skivade ??pplen,
                  <br />
                  serverad med vailjs??s och skopa av vaniljglass vid sidan.
                </p>

                <p
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                  style="margin-top: -10px"
                >
                  89
                </p>

                <h3
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                >
                  <span
                    style="margin-top: -20px; font-size: 50px"
                    class="material-icons"
                  >
                    star
                  </span>
                </h3>
              </div>

              <div class="menu-card" style="margin-top: 2rem">
                <h3
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                >
                  BAKED BROWNIE
                </h3>
                <p
                  class="menu-description wow pixFadeDown"
                  data-wow-delay="0.2s"
                >
                  V??r f??rsiktigt v??rmda brownie toppat med krossade n??tter
                  <br />
                  Serveras med glass och vispgr??dde vid sidan.
                </p>

                <p
                  class="menu-title wow pixFadeDown thin"
                  data-wow-delay="0.2s"
                  style="margin-top: -10px"
                >
                  89
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <p
              class="text-center wow pixFadeDown thin text-center"
              data-wow-delay="0.2s"
              style="padding-top: 5rem; font-size: 20px; line-height: 1.5"
            >
              Fr??ga g??rna oss i personalen g??llande allergier & justeringar
            </p>
          </div>
        </div>
        <!-- /.row -->

        <!-- /.container -->
      </section>

      <?php require_once("../../inc/footer.php"); ?>


</div>
</body>
</html>