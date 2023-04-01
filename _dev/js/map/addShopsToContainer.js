export default (tags, container) => {
	tags.forEach(tag => {
		const object = document.createElement("DIV");
		object.setAttribute("class", "map__search-shop");
		object.innerHTML = `
			<img src="${tag.icon}" class="map__search-shop-icon">
			<div class="map__search-shop-info">
				<h3 class="map__search-shop-name">${tag.name}</h3>
				<h4 class="map__search-shop-text map__search-shop-text--mb">${tag.type}</h4>
				<div class="map__search-shop-text">
				${tag.data.address}
				</div>
				<div>
				${tag.data.phone}
				</div>
				<div>
				${tag.data.email}
				</div>
				<div class="map__search-shop-text map__search-shop-text--mb map__search-shop-text--mt">
				${tag.data.openHours}
				</div>
			</div>`;

		container.append(object);
	});

}