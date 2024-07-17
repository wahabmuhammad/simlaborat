import "../bootstrap";

const menuButton = document.querySelector("#menu-button");
const mobileNavigation = document.querySelector("#mobile-navigation");

menuButton?.addEventListener("mouseup", function (Event: Event) {
	mobileNavigation?.classList.toggle("hidden");
	mobileNavigation?.classList.toggle("flex");
});
