// import getGeoTags from "./getGeoTags";
import getTags from "./getTags";

export default (map, markers) => {
	const searchForm = document.querySelector(".map__search-form");

	if (!searchForm) return;


	searchForm.addEventListener("submit", (e) => {
		e.preventDefault();
		map.removeLayer(markers);
		markers.clearLayers();
		let filters = [],
			regions = [];
		const filtersElements = document.querySelectorAll(
			'[name="filter"]:checked'
		);
		const regionsInput = document.querySelector("#region").value;
		if (regionsInput) {
			regions = regionsInput.toLowerCase().split(/[,\s]+/);
		}
		if (filtersElements) {
			let i = 0;
			filtersElements.forEach((filter) => {
				filters[i] = filter.value;
				i++;
			});
		}

		const ajaxData = new FormData();
		ajaxData.append("action", "getLocations");
		ajaxData.append("filters", JSON.stringify(filters));
		ajaxData.append("regions", JSON.stringify(regions));
		getTags(ajaxData, map, markers);
	});
};
