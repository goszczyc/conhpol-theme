const showFilters = () => {
  const filtersBtn = document.querySelector('#filters-btn')
  const filtersContainer = document.querySelector('.map__search-filters')
  if(!filtersBtn) return

  filtersBtn.addEventListener('click', (e)=> {
    e.preventDefault()
    filtersContainer.classList.toggle('map__search-filters--active')
  })
}

export default showFilters