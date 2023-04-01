export default () => {
  const showBtn = document.querySelector('.map__search-show-btn');
  const searchMenu = document.querySelector('.map__search');
  if(!showBtn) return;

  showBtn.addEventListener('click', e => {
    searchMenu.classList.toggle('map__search--active');
  })
}