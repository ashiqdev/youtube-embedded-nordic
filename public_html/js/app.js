var wow = new WOW({
  boxClass: 'wow',
  animateClass: 'animated',
  offset: -200,
  mobile: true,
  live: !0,
  scrollContainer: null,
});
wow.init();
var DEMOSIGNS = DEMOSIGNS || {};
(DEMOSIGNS.initialize = {
  init: function () {
    DEMOSIGNS.initialize.sectionBackground(),
      DEMOSIGNS.initialize.swiperSlider();
  },
  sectionBackground: function () {
    $('[data-bg-image]').each(function () {
      var t = $(this).data('bg-image');
      $(this).css({ backgroundImage: 'url(' + t + ')' });
    });
  },
  swiperSlider: function () {
    $('.swiper-container').each(function () {
      var t = $(this),
        n = ($(this).attr('id'), $(this).data('perpage') || 1),
        e = $(this).data('loop') || !0,
        i = $(this).data('speed') || 700,
        d = $(this).data('autoplay') || 5e3,
        a = $(this).data('slidegroup') || 1,
        o = $(this).data('space') || 0,
        r = $(this).data('effect'),
        c = $(this).data('direction') || 'horizontal',
        l = $(this).data('breakpoints');
      new Swiper(t, {
        autoHeight: !0,
        height: 500,
        slidesPerView: n,
        spaceBetween: o,
        slidesPerGroup: a,
        loop: e,
        speed: i,
        effect: r,
        direction: c,
        breakpoints: l,
        watchSlidesVisibility: !0,
        slideVisibleClass: 'swiper-slide-visible',
        autoplay: { delay: d, disableOnInteraction: !1 },
        pagination: { el: '.swiper-pagination', clickable: !0 },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    });
  },
}),
  (DEMOSIGNS.documentOnReady = {
    init: function () {
      DEMOSIGNS.initialize.init();
    },
  }),
  $(document).ready(function () {
    $('#testme').show();
  }),
  $(document).ready(function () {
    $('.button-cta').click(function () {
      $('#myModal').hide(),
        $('#myModal2').hide(),
        $('#myModal3').hide(),
        $('.cross').show(),
        $('.holder').show(),
        $('#cut').show(),
        $('iframe').show();
    });
  }),
  $('#my-overlay').click(function (t) {
    console.log('paisi');
  });

$('.cross-bar').click(function (t) {
  // $('.modal-backdrop.fade.show').hide(),
  // $('.iframe').hide(),
  // $('.cross').hide(),
  $('#myModal .close').click(),
    $('#myModal2 .close').click(),
    $('#myModal3 .close').click(),
    Swal.fire({
      title: 'Är du klar med bokningen?',
      text: 'Dubbelkolla gärna så att din bokning är klar innan du stänger fönstret. 😊',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Avbryt',
      confirmButtonText: 'Stäng fönstret',
    }).then((result) => {
      if (result.isConfirmed) {
        $('.holder').hide();
      } else {
        document.getElementById('my-overlay').style.display = 'block';
        console.log('close me');
      }
    });

  document.getElementById('my-overlay').style.display = 'block';

  document.getElementById('my-overlay').style.display = 'none';

  // $('#cut').hide();
});

function launchBookingIframe() {
  $('#bookIframe').attr(
    'src',
    'https://cloud.caspeco.se/public/webBooking?isWebBooking=true&system=se_olemon&unitId=13&lang=sv-SE&height=auto&inIFrame=true&sectionIds=&advanced=true'
  );
}

$(document).ready(function () {
  if (window.location.hash == '#boka-online') {
    $('#btn-cta').click();
    launchBookingIframe();
    document.getElementById('my-overlay').style.display = 'block';
  }
});

$('#btn-cta').click(function () {
  launchBookingIframe();
});

// sport lists
// sport lists
const formatAndDisplayMatches = (mainArray) => {
  const todaysMatchList = mainArray
    .filter(
      (item) => new Date(item.date * 1000).getDate() === new Date().getDate()
    )
    .reverse();

  const tomorrowsMatchList = mainArray
    .filter(
      (item) =>
        new Date(item.date * 1000).getDate() === new Date().getDate() + 1
    )
    .reverse();

  const thirddDaysMatchList = mainArray
    .filter(
      (item) =>
        new Date(item.date * 1000).getDate() === new Date().getDate() + 2
    )
    .reverse();

  const fourthDaysMatchList = mainArray
    .filter(
      (item) =>
        new Date(item.date * 1000).getDate() === new Date().getDate() + 3
    )
    .reverse();

  const fifthDaysMatchList = mainArray
    .filter(
      (item) =>
        new Date(item.date * 1000).getDate() === new Date().getDate() + 4
    )
    .reverse();

  const sixthDaysMatchList = mainArray
    .filter(
      (item) =>
        new Date(item.date * 1000).getDate() === new Date().getDate() + 5
    )
    .reverse();

  const seventhDaysMatchList = mainArray
    .filter(
      (item) =>
        new Date(item.date * 1000).getDate() === new Date().getDate() + 6
    )
    .reverse();

  // title string
  const todayTitle = `${new Date().toLocaleDateString("default", {
    weekday: "long",
  })},  ${new Date().getDate()}th of ${new Date().toLocaleDateString(
    "default",
    { month: "long" }
  )}`;

  const secondDayTitle = `${new Date().toLocaleDateString("default", {
    weekday: "long",
  })},  ${new Date().getDate() + 1}th of ${new Date().toLocaleDateString(
    "default",
    { month: "long" }
  )}`;

  const thirdDayTitle = `${new Date().toLocaleDateString("default", {
    weekday: "long",
  })},  ${new Date().getDate() + 2}th of ${new Date().toLocaleDateString(
    "default",
    { month: "long" }
  )}`;

  const fourthDayTitle = `${new Date().toLocaleDateString("default", {
    weekday: "long",
  })},  ${new Date().getDate() + 3}th of ${new Date().toLocaleDateString(
    "default",
    { month: "long" }
  )}`;

  const fifthDayTitle = `${new Date().toLocaleDateString("default", {
    weekday: "long",
  })},  ${new Date().getDate() + 4}th of ${new Date().toLocaleDateString(
    "default",
    { month: "long" }
  )}`;

  const sixthDayTitle = `${new Date().toLocaleDateString("default", {
    weekday: "long",
  })},  ${new Date().getDate() + 5}th of ${new Date().toLocaleDateString(
    "default",
    { month: "long" }
  )}`;

  const seventhDayTitle = `${new Date().toLocaleDateString("default", {
    weekday: "long",
  })},  ${new Date().getDate() + 6}th of ${new Date().toLocaleDateString(
    "default",
    { month: "long" }
  )}`;

  // console.log({todayTitle});
  // console.log({secondDayTitle})
  // console.log({thirdDayTitle})
  // console.log({fourthDayTitle})
  // console.log({fifthDayTitle})
  // console.log({sixthDayTitle})
  // console.log({seventhDayTitle});

  displayMatches(
    todaysMatchList,
    document.querySelector(".todays-list-container"),
    document.querySelector(".todays-title"),
    todayTitle
  );

  displayMatches(
    tomorrowsMatchList,
    document.querySelector(".tomorrows-list-container"),
    document.querySelector(".tomorrows-title"),
    secondDayTitle
  );

  displayMatches(
    thirddDaysMatchList,
    document.querySelector(".thirdDay-list-container"),
    document.querySelector(".thirdDay-title"),
    thirdDayTitle
  );

  displayMatches(
    fourthDaysMatchList,
    document.querySelector(".fourthDay-list-container"),
    document.querySelector(".fourthDay-title"),
    fourthDayTitle
  );

  displayMatches(
    fifthDaysMatchList,
    document.querySelector(".fifthDay-list-container"),
    document.querySelector(".fifthDay-title"),
    fifthDayTitle
  );

  displayMatches(
    sixthDaysMatchList,
    document.querySelector(".sixthDay-list-container"),
    document.querySelector(".sixthDay-title"),
    sixthDayTitle
  );

  displayMatches(
    seventhDaysMatchList,
    document.querySelector(".seventhDay-list-container"),
    document.querySelector(".seventhDay-title"),
    seventhDayTitle
  );

  function displayMatches(matches, container, titleDiv, titleString) {
    titleDiv.style.backgroundColor = "#02aab0";
    titleDiv.innerHTML = `
    <span class="straight-me">
        ${titleString}
    </span>
    `;

    matches.map((game) => {
      const html = `
      <div class="sport__list ${game.swedish ? 'swbg' : ''}">
      
      
      
      <div class="blue-yellow">
      
      </div>
      
      
      <div class="only-yellow">
      
      </div>

      <div class="transparent">
      
      </div>
      
     


      

     


      <div class="sports-info">
      <div class="company-logo">
      <a href="#"
      ><img class="sport-picture"   
        alt="sport picture"
        src="${
          game.sport === "Fotboll"
            ? "/bilder/soccer.svg"
            : game.sport === "Handboll"
            ? "/bilder/handball.svg"
            : game.sport === "Ishockey"
            ? "/bilder/hockey.svg"
            : game.sport === "Innebandy"
            ? "/bilder/floor.svg"
            : game.sport === "Skidor"
            ? "/bilder/ski.svg"
            : game.sport === "Snooker"
            ? "/bilder/snoker.svg"
            : game.sport === "Basket"
            ? "/bilder/basket.svg"
            : game.sport === "Tennis"
            ? "/bilder/tennis.svg"
            : game.sport === "Golf"
            ? "/bilder/golf.svg"
            : game.sport === "Amerikansk-fotboll"
            ? "/bilder/rugby.svg"
            : game.sport === 'Motorsport' ? '/bilder/moto.svg'
            : "/bilder/soccer.svg"
        }"
    /></a>
      </div>

      <div class="info">
      <div>
      <h4 class="sports-title important-title">
        <a href="#">${game.name} </a>
        ${game.important ? `<span class="material-icons star-material">star</span>` : ''}
        
      </h4>
      
      </div>
      <p class="designation">${
        new Date(game.date * 1000).getHours() < 10 ? "0" : ""
      }${new Date(game.date * 1000).getHours()}:${
    new Date(game.date * 1000).getMinutes() < 10 ? "0" : ""
  }${new Date(game.date * 1000).getMinutes()} - (${game.league})</p>
    </div>
    </div>
        
       
        
       
    
    
    
     
    </div>
         `;

      container.insertAdjacentHTML("beforeend", html);

     
    });
  }
};

// fetch(
//   "https://mocki.io/v1/fef84371-b3eb-4290-9e72-cce41632a270"
// )
//   .then((response) => response.json())
//   .then((data) => formatAndDisplayMatches(data));


