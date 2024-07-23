const dataList = document.querySelector("section#data-list");

dataList?.addEventListener("mouseup", function (Event: Event) {
	if (Event.target === null) return;

	const target: HTMLElement = Event.target as HTMLElement;
    const targetparent: HTMLElement = target.parentElement as HTMLElement
    const closestSection = targetparent.closest("section.data")

    console.log(target)

    // Target is not null and is a button to expand details, null mitigation at it's finest XD
	if (targetparent != null && closestSection != null && targetparent.classList.contains("expandDetails"))
		return closestSection.querySelector("div.details")?.classList.toggle("hidden");

});
