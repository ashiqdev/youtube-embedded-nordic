async function main() {
  const itemContainer = document.querySelector('.item-container');
  const itemWrapper = document.querySelector('.item-wrapper');
  const icon = document.querySelector('.icon');
  let arr = [];

  await fetch('https://mocki.io/v1/087105fa-6d94-419a-a63e-47a4092ab900')
    .then((response) => response.json())
    .then((data) => (arr = data));

  console.log({ arr });

  function timeout(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
  }

  function addItemAnim(e, amount = 1) {
    e.classList.add('itemAnim');

    e.style.animationDuration = `${Math.round(4.5 * amount)}s`;
  }

  itemWrapper.addEventListener('animationstart', async () => {
    await timeout(arr.length > 200 ? 1000 : 500);
    icon.classList.add('active');
  });

  itemWrapper.addEventListener('animationend', async () => {
    itemWrapper.classList.remove('itemAnim');
    await timeout(100);
    icon.classList.remove('active');

    await timeout(2000);
    addItemAnim(itemWrapper, arr.length);
    await timeout(arr.length > 200 ? 1000 : 500);
    icon.classList.add('active');
  });

  // arr
  //   .map((_, i) => {
  //     const item = document.createElement('div');
  //     item.classList.add('item');
  //     item.innerHTML = 'Item';
  //     itemWrapper.append(item);
  //   })
  //   .join('');

  addItemAnim(itemWrapper, arr.length);

  const tomorrow = new Date(new Date());
  tomorrow.setDate(tomorrow.getDate() + 1);

  const third_day = new Date(new Date());
  third_day.setDate(third_day.getDate() + 2);

  const fourth_day = new Date(new Date());
  fourth_day.setDate(fourth_day.getDate() + 3);

  const fifth_day = new Date(new Date());
  fifth_day.setDate(fifth_day.getDate() + 4);

  const sixth_day = new Date(new Date());
  sixth_day.setDate(sixth_day.getDate() + 5);

  const seventh_day = new Date(new Date());
  seventh_day.setDate(seventh_day.getDate() + 6);

  const displayMaches = (matches, listContainer, titleDiv, titleString) => {
    titleDiv.style.backgroundColor = '#02aab0';
    titleDiv.innerHTML = `
    <span class="straight-me">
        ${titleString}
    </span>
    `;

    matches.map((game) => {
      const html = `
      <div class="sport__list ${game.swedish ? 'swbg' : ''}">
        
       <div class="sports-info">
          <div class="company-logo">
          <a href="#" class="sport-picture-wrapper"
            >
            <img class="sport-picture"   
            alt="sport picture"
            src="${
              game.sport === 'Fotboll'
                ? '/bilder/soccer.svg'
                : game.sport === 'Handboll'
                ? '/bilder/handball.svg'
                : game.sport === 'Ishockey'
                ? '/bilder/hockey.svg'
                : game.sport === 'Innebandy'
                ? '/bilder/floor.svg'
                : game.sport === 'Skidor'
                ? '/bilder/ski.svg'
                : game.sport === 'Snooker'
                ? '/bilder/snoker.svg'
                : game.sport === 'Basket'
                ? '/bilder/basket.svg'
                : game.sport === 'Tennis'
                ? '/bilder/tennis.svg'
                : game.sport === 'Golf'
                ? '/bilder/golf.svg'
                : game.sport === 'Amerikansk-fotboll'
                ? '/bilder/rugby.svg'
                : game.sport === 'Bandy'
                ? '/bilder/hockey.svg'
                : game.sport === 'Motorsport'
                ? '/bilder/moto.svg'
                : '/bilder/soccer.svg'
            }"
        />
          
          </a>
        </div>
        <div class="info">
          <h4 class="sports-title important-title">
            <a href="#">${game.name}</a>
            ${
              game.important
                ? `<span class="material-icons star-material">star</span>`
                : ''
            }

          </h4>
          <p class="designation">${
            new Date(game.date * 1000).getHours() < 10 ? '0' : ''
          }${new Date(game.date * 1000).getHours()}:${
        new Date(game.date * 1000).getMinutes() < 10 ? '0' : ''
      }${new Date(game.date * 1000).getMinutes()} - (${game.league})</p>
        </div>

       
      </div>

      ${
        game.live
          ? `
        <div class="sport-location">
          <span>live</span>
          <span class="card__icon"></span>
        </div>
        
        `
          : ''
      }

    

    

     
    </div>

         `;

      listContainer.insertAdjacentHTML('beforeend', html);
    });
  };

  const todaysMatchList = arr
    .filter(
      (item) => new Date(item.date * 1000).getDate() === new Date().getDate()
    )
    .reverse();

  const tomorrowsMatchList = arr
    .filter(
      (item) => new Date(item.date * 1000).getDate() === tomorrow.getDate()
    )
    .reverse();

  const thirddDaysMatchList = arr
    .filter(
      (item) => new Date(item.date * 1000).getDate() === third_day.getDate()
    )
    .reverse();

  const fourthDaysMatchList = arr
    .filter(
      (item) => new Date(item.date * 1000).getDate() === fourth_day.getDate()
    )
    .reverse();

  const fifthDaysMatchList = arr
    .filter(
      (item) => new Date(item.date * 1000).getDate() === fifth_day.getDate()
    )
    .reverse();

  const sixthDaysMatchList = arr
    .filter(
      (item) => new Date(item.date * 1000).getDate() === sixth_day.getDate()
    )
    .reverse();

  const seventhDaysMatchList = arr
    .filter(
      (item) => new Date(item.date * 1000).getDate() === seventh_day.getDate()
    )
    .reverse();

  console.log(todaysMatchList);
  console.log(tomorrowsMatchList);
  console.log(thirddDaysMatchList);
  console.log(fourthDaysMatchList);
  console.log(fifthDaysMatchList);
  console.log(sixthDaysMatchList);
  console.log(seventhDaysMatchList);

  // title strings
  const todayTitle = `${new Date().toLocaleDateString('default', {
    weekday: 'long',
  })},  ${new Date().getDate()}th of ${new Date().toLocaleDateString(
    'default',
    { month: 'long' }
  )}`;

  const secondDayTitle = `${tomorrow.toLocaleDateString('default', {
    weekday: 'long',
  })},  ${tomorrow.getDate()}th of ${tomorrow.toLocaleDateString('default', {
    month: 'long',
  })}`;

  const thirdDayTitle = `${third_day.toLocaleDateString('default', {
    weekday: 'long',
  })},  ${third_day.getDate()}th of ${third_day.toLocaleDateString('default', {
    month: 'long',
  })}`;

  const fourthDayTitle = `${fourth_day.toLocaleDateString('default', {
    weekday: 'long',
  })},  ${fourth_day.getDate()}th of ${fourth_day.toLocaleDateString(
    'default',
    { month: 'long' }
  )}`;

  const fifthDayTitle = `${fifth_day.toLocaleDateString('default', {
    weekday: 'long',
  })},  ${fifth_day.getDate()}th of ${fifth_day.toLocaleDateString('default', {
    month: 'long',
  })}`;

  const sixthDayTitle = `${sixth_day.toLocaleDateString('default', {
    weekday: 'long',
  })},  ${sixth_day.getDate()}th of ${sixth_day.toLocaleDateString('default', {
    month: 'long',
  })}`;

  const seventhDayTitle = `${seventh_day.toLocaleDateString('default', {
    weekday: 'long',
  })},  ${seventh_day.getDate()}th of ${seventh_day.toLocaleDateString(
    'default',
    { month: 'long' }
  )}`;

  displayMaches(
    todaysMatchList,
    document.querySelector('.todays-list-container'),
    document.querySelector('.todays-title'),
    todayTitle
  );

  displayMaches(
    tomorrowsMatchList,
    document.querySelector('.tomorrows-list-container'),
    document.querySelector('.tomorrows-title'),
    secondDayTitle
  );

  displayMaches(
    thirddDaysMatchList,
    document.querySelector('.thirdDay-list-container'),
    document.querySelector('.thirdDay-title'),
    thirdDayTitle
  );

  displayMaches(
    fourthDaysMatchList,
    document.querySelector('.fourthDay-list-container'),
    document.querySelector('.fourthDay-title'),
    fourthDayTitle
  );

  displayMaches(
    fifthDaysMatchList,
    document.querySelector('.fifthDay-list-container'),
    document.querySelector('.fifthDay-title'),
    fifthDayTitle
  );

  displayMaches(
    sixthDaysMatchList,
    document.querySelector('.sixthDay-list-container'),
    document.querySelector('.sixthDay-title'),
    sixthDayTitle
  );

  displayMaches(
    seventhDaysMatchList,
    document.querySelector('.seventhDay-list-container'),
    document.querySelector('.seventhDay-title'),
    seventhDayTitle
  );
}

document.onload = main();
