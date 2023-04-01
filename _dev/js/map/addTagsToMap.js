import 'leaflet.markercluster' 
// import 'leaflet.markercluster/dist/MarkerCluster.css'
// import 'leaflet.markercluster/dist/MarkerCluster.Default.css';

export default (tags, map, markers) => {
	let long = tags == undefined ? tags[0].coordinates.longitude : 50.0619474;
	let latt = tags == undefined ? tags[0].coordinates.lattitude : 19.9368564;
	map.setView([long, latt])
	tags.forEach((tag) => {
		let theIcon = L.icon({
			iconUrl: tag.icon,
			iconSize: [28],
			iconAnchor: [14, 28],
		});

		let marker = L.marker(
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
		markers.addLayer(marker)
	});

	return markers.addTo(map);
}