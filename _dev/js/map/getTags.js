import fetch_init from "../fetch";
import addTagsToMap from "./addTagsToMap";
import addShopsToContainer from "./addShopsToContainer";
export default async (data, map, markers) => {
	try {
		const tags = await fetch_init(data);
		const resultsContainer = document.querySelector(".map__search-shops");
		const numOfShops = document.querySelector("#num-of-results");
		numOfShops.innerText = tags.length;
		addTagsToMap(tags, map, markers)
		addShopsToContainer(tags, resultsContainer);
	} catch (error) {
		console.log(error);
		return error;
	}
}