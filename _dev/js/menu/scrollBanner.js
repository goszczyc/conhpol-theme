export default () => {
	const btn = document.querySelector(".title-banner__scroll");
	const banner = document.querySelector(".title-banner--scroll");

	if (btn && banner) {
		btn.addEventListener("click", (e) => {
			const bannerHeight = banner.offsetHeight;
			window.scrollTo(0, bannerHeight);
		});
	}
};