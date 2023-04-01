import { showSubMenu, setSubMenusHeight } from "./menu/menu";
import { mobileShowSubMenu, toggleMobileMenu } from "./menu/menu-mobile";
import scrollBanner from './menu/scrollBanner';
import historySlider from "./sliders";
import toggleOpportunityOverlay from "./opportunities";
import sendCites from "./checkCites";
import changeLogo from "./menu/menuChangeLogo";
import map_init from "./map/map_init";

document.addEventListener('DOMContentLoaded', e => {
	changeLogo();
	showSubMenu();
	setSubMenusHeight();
	historySlider();
	toggleOpportunityOverlay();
	sendCites();
	toggleMobileMenu();
	mobileShowSubMenu();
	scrollBanner();
	map_init();
})