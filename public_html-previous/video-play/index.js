async function main() {
  const itemContainer = document.querySelector('.item-container');
  const itemWrapper = document.querySelector('.item-wrapper');
  const icon = document.querySelector('.icon');
  let arr = [];

  await fetch('https://mocki.io/v1/deb1d2ea-aaa6-4511-9e8f-dca37c35c7f4')
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


  const displayMaches = (matches, listContainer, titleDiv, titleString) => {
    titleDiv.style.backgroundColor = '#02aab0';
    titleDiv.innerHTML = `
    <span class="straight-me">
        ${titleString}
    </span>
    `;

    matches.map(game => {
      const html = `
      <div class="sport__list ${game.swedish ? 'swbg' : ''}">
        
       <div class="sports-info">
          <div class="company-logo">
          <a href="#" class="sport-picture-wrapper"
            >
            <img class="sport-picture"   
            alt="sport picture"
            src="${game.sport === 'Fotboll' ? '/bilder/soccer.svg': game.sport === 'Handboll' ? '/bilder/handball.svg' : game.sport === 'Ishockey' ? '/bilder/hockey.svg' : game.sport === 'Innebandy' ? '/bilder/floor.svg' : game.sport === 'Skidor' ? '/bilder/ski.svg' : game.sport === 'Snooker' ? '/bilder/snoker.svg' : game.sport === 'Basket' ? '/bilder/basket.svg' : game.sport === 'Tennis' ? '/bilder/tennis.svg' : game.sport === 'Golf' ? '/bilder/golf.svg' :  game.sport === 'Amerikansk-fotboll' ? '/bilder/rugby.svg' : game.sport === 'Bandy' ? '/bilder/hockey.svg' : game.sport === 'Motorsport' ? '/bilder/moto.svg' :'/bilder/soccer.svg'}"
        />
          
          </a>
        </div>
        <div class="info">
          <h4 class="sports-title important-title">
            <a href="#">${game.name}</a>
            ${game.important ? `<span class="material-icons star-material">star</span>` : ''}

          </h4>
          <p class="designation">${new Date(game.date * 1000).getHours() < 10 ? '0': ''}${new Date(game.date * 1000).getHours()}:${new Date(game.date * 1000).getMinutes() < 10 ? '0' : ''}${new Date(game.date * 1000).getMinutes()} - (${game.league})</p>
        </div>

       
      </div>

      ${game.live ? (
        `
        <div class="sport-location">
          <span>live</span>
          <span class="card__icon"></span>
        </div>
        
        `
      ) : ''}

    

    

     
    </div>

         `;

      
      
      listContainer.insertAdjacentHTML('beforeend', html);
    })
  }

  const todaysMatchList = arr.filter(
    (item) => new Date(item.date * 1000).getDate() === new Date().getDate()
  ).reverse();

  const tomorrowsMatchList = arr.filter(
    (item) => new Date(item.date * 1000).getDate() === new Date().getDate() + 1
  ).reverse();

  const thirddDaysMatchList = arr.filter(
    (item) => new Date(item.date * 1000).getDate() === new Date().getDate() + 2
  ).reverse();


 const fourthDaysMatchList = arr.filter(
    (item) => new Date(item.date * 1000).getDate() === new Date().getDate() + 3
  ).reverse();

  const fifthDaysMatchList = arr.filter(
    (item) => new Date(item.date * 1000).getDate() === new Date().getDate() + 4
  ).reverse();

  const sixthDaysMatchList = arr.filter(
    (item) => new Date(item.date * 1000).getDate() === new Date().getDate() + 5
  ).reverse();

  const seventhDaysMatchList = arr.filter(
    (item) => new Date(item.date * 1000).getDate() === new Date().getDate() + 6
  ).reverse();


  console.log(todaysMatchList);
  console.log(tomorrowsMatchList)
  console.log(thirddDaysMatchList)
  console.log(fourthDaysMatchList)
  console.log(fifthDaysMatchList)
  console.log(sixthDaysMatchList)
  console.log(seventhDaysMatchList)


   // title strings
   const todayTitle = `${new Date().toLocaleDateString('default', {weekday: 'long'})},  ${new Date().getDate()}th of ${new Date().toLocaleDateString(
    'default',
    { month: 'long' }
  )}`;

  const secondDayTitle = `${new Date().toLocaleDateString('default', {weekday: 'long'})},  ${new Date().getDate()+1}th of ${new Date().toLocaleDateString(
    'default',
    { month: 'long' }
  )}`;


  const thirdDayTitle = `${new Date().toLocaleDateString('default', {weekday: 'long'})},  ${new Date().getDate()+2}th of ${new Date().toLocaleDateString(
    'default',
    { month: 'long' }
  )}`;



  const fourthDayTitle = `${new Date().toLocaleDateString('default', {weekday: 'long'})},  ${new Date().getDate()+3}th of ${new Date().toLocaleDateString(
    'default',
    { month: 'long' }
  )}`;


  const fifthDayTitle = `${new Date().toLocaleDateString('default', {weekday: 'long'})},  ${new Date().getDate()+4}th of ${new Date().toLocaleDateString(
    'default',
    { month: 'long' }
  )}`;

  const sixthDayTitle = `${new Date().toLocaleDateString('default', {weekday: 'long'})},  ${new Date().getDate()+5}th of ${new Date().toLocaleDateString(
    'default',
    { month: 'long' }
  )}`;


  const seventhDayTitle = `${new Date().toLocaleDateString('default', {weekday: 'long'})},  ${new Date().getDate()+6}th of ${new Date().toLocaleDateString(
    'default',
    { month: 'long' }
  )}`;


  displayMaches(todaysMatchList, document.querySelector('.todays-list-container'), document.querySelector('.todays-title'), todayTitle);

  displayMaches(tomorrowsMatchList, document.querySelector('.tomorrows-list-container'), document.querySelector('.tomorrows-title'), secondDayTitle);
  
  displayMaches(thirddDaysMatchList, document.querySelector('.thirdDay-list-container'), document.querySelector('.thirdDay-title'), thirdDayTitle);

  displayMaches(fourthDaysMatchList, document.querySelector('.fourthDay-list-container'), document.querySelector('.fourthDay-title'), fourthDayTitle);

  displayMaches(fifthDaysMatchList, document.querySelector('.fifthDay-list-container'), document.querySelector('.fifthDay-title'), fifthDayTitle);

  displayMaches(sixthDaysMatchList, document.querySelector('.sixthDay-list-container'), document.querySelector('.sixthDay-title'), sixthDayTitle);

  displayMaches(seventhDaysMatchList, document.querySelector('.seventhDay-list-container'), document.querySelector('.seventhDay-title'), seventhDayTitle);





}


document.onload = main();
