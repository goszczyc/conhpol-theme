export default (tags, map) => {
	let i = 0;
	let objects = [];
	let markers = [];
	map.setView([20, 20])
	tags.forEach((tag) => {
		let theIcon = L.icon({
			iconUrl: tag.icon,

			iconSize: [28],
			iconAnchor: [14, 28],
		});
		markers[i] = L.marker(
			[tag.coordinates.longitude, tag.coordinates.lattitude],
			{ icon: theIcon }
		).bindPopup(
			`
			<div style="max-height: 350px; overflow-y:auto">
			<div>
				<img style="width:100%;height:auto" src="${tag.thumbnail}" style="display:block;">
			</div>
			<div class="map__popup-name">
				<h3>${tag.name}</h3>
				<h4>${tag.type}</h4>
			</div>
			<div class="map__popup-text">
				${tag.data.address}
			</div>
			<div class="map__popup-text">
				${tag.data.phone}
			</div>
			<div class="map__popup-text">${tag.data.email}</div>
			<div class="map__popup-text map__popup-text--av">${tag.avModels}</div>
			<div class="map__popup-text map__popup-text--gm">${tag.gMapLink}</div>
			</div>
				`,
			{
				maxWidth: 300,
			}
		);
		const object = document.createElement("DIV");
		object.setAttribute("class", "map__search-shop");
		object.innerHTML = `
	  <img src="${tag.icon}" class="map__search-shop-icon" alt="">
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

		objects.push(object);
		i++;
	});

	return {
		markers: markers,
		objects: objects
	}
}