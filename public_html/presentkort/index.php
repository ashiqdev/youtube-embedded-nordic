<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Presentkort";
	
    require_once("../../inc/header.php"); 
  ?>
  </head>
  <body>
    <div class="main_contant" style="overflow-x: hidden; overflow-y: auto">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php
    $page="presentkort"; 
    require_once("../../inc/navbar.php"); 
    ?>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">Presentkort</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li>Presentkort</li>
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
      <!--=         Cards         =-->
      <!--=========================-->
      <section class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center">
               
                <h3
                  class="d-inline-block resp mx-auto light"
                  data-wow-delay="0.2s"
                  style="
                    font-size: 3rem;
                    letter-spacing: 5px;
                    text-align: center;
                    background: #02aab0;
                    color: #fff;
                    padding: 15px 30px;
                    width: auto;
                    margin-bottom: 0px;
                  "
                >
                  <span
                    class="material-icons"
                    style="
                      font-size: 3rem;
                      vertical-align: middle;
                      margin-top: -10px;
                    "
                  >
                    account_balance_wallet
                  </span>
                  Kontrollera Saldo
                </h3>
                
                <div
                  class="balance-search-form-wrapper wow pixFadeDown"
                  data-wow-delay="0.7s"
                  style="padding-top: 80px;"
                >
                  <form action="#" class="job-search-form">
                    <div class="balance-form-inner">
                      <input type="text" placeholder="keyword"  class="input-balance"/>
                      <button type="submit">Check Balance</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-12 wow pixFadeDown" data-wow-delay="0.8s">
              <div class="text-center">
                <h3
                  class="d-inline-block resp mx-auto light"
                  data-wow-delay="0.2s"
                  style="
                    font-size: 3rem;
                    letter-spacing: 5px;
                    text-align: center;
                    background: #02aab0;
                    color: #fff;
                    padding: 15px 30px;
                    width: auto;
                    margin-bottom: 0px;
                  "
                >
                  <span
                    class="material-icons"
                    style="
                      font-size: 3rem;
                      vertical-align: middle;
                      margin-top: -10px;
                    "
                  >
                    card_giftcard
                  </span>
                  Utvalda Presentkort
                </h3>
              </div>
            </div>
          </div>

          <!-- cards grid -->
          <div class="col-lg-12" style="padding-top: 120px">
            <div id="pix-tabs-content" class="gift-board-tabs-content">
              <div id="" class="content">
                <div class="row">
                  <!-- 1 -->
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="gift gift__color--one">
                      <div class="gift__logo">
                        <div class="logo-container">
                          <a href="#"
                            ><img src="/bilder/presentkort/12.png" alt="brand"
                          /></a>
                        </div>
                      </div>

                      <div class="gift__description">
                        <h3 class="gift__title">
                          <a href="#">SuperPresentkortet</a>
                        </h3>
                        <p class="gift__info light">
                          SuperPresentkortet ger mottagaren fritt val bland alla
                          presentkort
                        </p>
                      </div>

                      <div class="gift__sallery">
                        <div class="sallery-info">
                          <h5 class="sallery light">Fran 50kr</h5>
                        </div>
                      </div>
                    </div>
                    <!-- /.gift-->
                  </div>
                  <!-- /.col-lg-3 col-md-6 col-sm-6 -->

                  <!-- 2 -->
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="gift">
                      <div class="gift__logo">
                        <div class="logo-container">
                          <a href="#"
                            ><img src="/bilder/presentkort/13.png"" alt="brand"
                            /></a
                          >
                        </div>
                      </div>

                      <div class="gift__description">
                        <h3 class="gift__title">
                          <a href="#">Åhléns Presentkort</a>
                        </h3>
                        <p class="gift__info light">
                          Ett presentkort med allt inom mode, hem, skönhet och
                          media.
                        </p>
                      </div>
                      <div class="gift__sallery">
                        <div class="sallery-info">
                          <h5 class="sallery light">Fran 50kr</h5>
                        </div>
                      </div>
                    </div>
                    <!-- /.gift -->
                  </div>
                  <!-- /.col-lg-3 col-md-6 col-sm-6 -->

                  <!-- 3 -->
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="gift gift__color--two">
                      <div class="gift__logo">
                        <div class="logo-container">
                          <a href="#"
                            ><img src="/bilder/presentkort/14.png"" alt="brand"
                            /></a
                          >
                        </div>
                      </div>

                      <div class="gift__description">
                        <h3 class="gift__title">
                          <a href="#">IKEA Presenkort</a>
                        </h3>
                        <p class="gift__info light">
                          Den perfekta presenten för alla som älskar möbler,
                          inredning och dekor.
                        </p>
                      </div>
                      <div class="gift__sallery">
                        <div class="sallery-info">
                          <h5 class="sallery light">Fran 50kr</h5>
                        </div>
                      </div>
                    </div>
                    <!-- /gift -->
                  </div>
                  <!-- /.col-lg-3 col-md-6 col-sm-6 -->

                  <!-- 4 -->
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="gift gift__color--three">
                      <div class="gift__logo">
                        <div class="logo-container">
                          <a href="#"
                            ><img src="/bilder/presentkort/15.png"" alt="brand"
                            /></a
                          >
                        </div>
                      </div>

                      <div class="gift__description">
                        <h3 class="gift__title">
                          <a href="#">H&M Presentkort</a>
                        </h3>
                        <p class="gift__info light">
                          Shopping som passar alla stilar och personligheter
                        </p>
                      </div>
                      <div class="gift__sallery">
                        <div class="sallery-info">
                          <h5 class="sallery light">Fran 50kr</h5>
                        </div>
                      </div>
                    </div>
                    <!-- /.gift -->
                  </div>
                  <!-- /.col-lg-3 col-md-6 col-sm-6 -->

                  <!-- 5 -->
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="gift gift__color--one">
                      <div class="gift__logo">
                        <div class="logo-container">
                          <a href="#"
                            ><img src="/bilder/presentkort/12.png" alt="brand"
                          /></a>
                        </div>
                      </div>

                      <div class="gift__description">
                        <h3 class="gift__title">
                          <a href="#">SuperPresentkortet</a>
                        </h3>
                        <p class="gift__info light">
                          SuperPresentkortet ger mottagaren fritt val bland alla
                          presentkort
                        </p>
                      </div>

                      <div class="gift__sallery">
                        <div class="sallery-info">
                          <h5 class="sallery light">Fran 50kr</h5>
                        </div>
                      </div>
                    </div>
                    <!-- /.gift-->
                  </div>
                  <!-- /.col-lg-3 col-md-6 col-sm-6 -->

                  <!-- 6 -->
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="gift">
                      <div class="gift__logo">
                        <div class="logo-container">
                          <a href="#"
                            ><img src="/bilder/presentkort/13.png"" alt="brand"
                            /></a
                          >
                        </div>
                      </div>

                      <div class="gift__description">
                        <h3 class="gift__title">
                          <a href="#">Åhléns Presentkort</a>
                        </h3>
                        <p class="gift__info light">
                          Ett presentkort med allt inom mode, hem, skönhet och
                          media.
                        </p>
                      </div>
                      <div class="gift__sallery">
                        <div class="sallery-info">
                          <h5 class="sallery light">Fran 50kr</h5>
                        </div>
                      </div>
                    </div>
                    <!-- /.gift -->
                  </div>
                  <!-- /.col-lg-3 col-md-6 col-sm-6 -->

                  <!-- 7 -->
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="gift gift__color--two">
                      <div class="gift__logo">
                        <div class="logo-container">
                          <a href="#"
                            ><img src="/bilder/presentkort/14.png"" alt="brand"
                            /></a
                          >
                        </div>
                      </div>

                      <div class="gift__description">
                        <h3 class="gift__title">
                          <a href="#">IKEA Presenkort</a>
                        </h3>
                        <p class="gift__info light">
                          Den perfekta presenten för alla som älskar möbler,
                          inredning och dekor.
                        </p>
                      </div>
                      <div class="gift__sallery">
                        <div class="sallery-info">
                          <h5 class="sallery light">Fran 50kr</h5>
                        </div>
                      </div>
                    </div>
                    <!-- /gift -->
                  </div>
                  <!-- /.col-lg-3 col-md-6 col-sm-6 -->

                  <!-- 8 -->
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="gift gift__color--three">
                      <div class="gift__logo">
                        <div class="logo-container">
                          <a href="#"
                            ><img src="/bilder/presentkort/15.png"" alt="brand"
                            /></a
                          >
                        </div>
                      </div>

                      <div class="gift__description">
                        <h3 class="gift__title">
                          <a href="#">H&M Presentkort</a>
                        </h3>
                        <p class="gift__info light">
                          Shopping som passar alla stilar och personligheter
                        </p>
                      </div>
                      <div class="gift__sallery">
                        <div class="sallery-info">
                          <h5 class="sallery light">Fran 50kr</h5>
                        </div>
                      </div>
                    </div>
                    <!-- /.gift -->
                  </div>
                  <!-- /.col-lg-3 col-md-6 col-sm-6 -->
                </div>
                <!-- /.row -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php require_once("../../inc/footer.php"); ?>
    </div>
  </body>
</html>
