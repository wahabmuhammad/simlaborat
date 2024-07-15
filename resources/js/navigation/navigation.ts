import "../bootstrap";

const menuButton = document.querySelector("#menu-button");
const mobileNavigation = document.querySelector("#mobile-navigation");
const dataList = document.querySelector("section#data-list");

menuButton?.addEventListener("mouseup", function (Event: Event) {
	mobileNavigation?.classList.toggle("hidden");
	mobileNavigation?.classList.toggle("flex");
});

dataList?.addEventListener("mouseup", function (Event: Event) {
	if (Event.target === null) return;

	const target: HTMLElement = Event.target as HTMLElement;
    const targetparent: HTMLElement = target.parentElement as HTMLElement
    const closestSection = targetparent.closest("section.data")

    console.log(closestSection)
    // Target is not null and is a button to expand details, null mitigation at it's finest XD
	if (targetparent != null && closestSection != null && targetparent.classList.contains("expandDetails"))
		closestSection.querySelector("div.details")?.classList.toggle("hidden");

});
