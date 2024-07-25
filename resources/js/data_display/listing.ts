const dataList = document.querySelector("section#DataList");
const theData = dataList?.querySelectorAll("aside#dataTrigger");
const nameFilter = document
	.querySelector("#NameFilter")
	?.querySelector("input");

const checkedFilter = document.querySelector("#CheckedFilter")
let checkedStatus = 0

let currentPage = 0
let dataOnPage = []

// Initial filter
// Hide data based on initial checked status
if(theData) filterByCheckedStatus(theData, checkedStatus)



// Filter data by name
nameFilter?.addEventListener("change", function (Event: Event) {
	if (!theData) return;

	if (!nameFilter.value) return resetFilter(theData);
	if (theData) return filterByName(theData, nameFilter.value);
});

// Filter data by checked status
checkedFilter?.addEventListener("mouseup", function(Event:Event){
    if (!theData) return;

    if(!Event.target) return
    const target = Event?.target as HTMLDataElement
    const parentChilds = target.parentElement?.querySelectorAll("data")

    if(parentChilds && parentChilds?.length != 0) {
        parentChilds.forEach(element => {
            element.classList.toggle("text-gray-900")
            element.classList.toggle("text-gray-500")
        });
    }




    checkedStatus = parseInt(target.value)

    filterByCheckedStatus(theData, checkedStatus)
})



dataList?.addEventListener("mouseup", function (Event: Event) {
	if (Event.target === null) return;

	const target: HTMLElement = Event.target as HTMLElement;
	const targetparent: HTMLElement = target.parentElement as HTMLElement;
	const closestSection = targetparent.closest("section#data");

	// Target is not null and is a button to expand details, null mitigation at it's finest XD
	if (
		targetparent != null &&
		closestSection != null &&
		targetparent.classList.contains("expandDetails")
	)
		return closestSection
			.querySelector("div.details")
			?.classList.toggle("hidden");
});

// Functions go here
function resetFilter(elements: NodeListOf<Element>) {
	if (!elements) return;

	elements.forEach((element) => {
		if (!element) return;
		const parentElement = element.parentElement as HTMLElement;
		if (parentElement.classList.contains("hidden"))
			return parentElement.classList.remove("hidden");
	});
}

function filterByName(elements: NodeListOf<Element>, value: string) {
	if (!elements) return;

	elements.forEach((element) => {
		if (!element) return;

		const data = element.querySelector("data#name") as HTMLDataElement;
		const name = data.value.toLocaleLowerCase();

		if (name.startsWith(value.toLowerCase())) {
			element.parentElement?.classList.remove("hidden");
		} else {
			element.parentElement?.classList.add("hidden");
		}
	});
}

function filterByCheckedStatus(elements: NodeListOf<Element>, value: number) {
	if (!elements) return;

	elements.forEach((element) => {
		if (!element) return;

		const data = element.querySelector("data#checked") as HTMLDataElement;

        if(typeof(data.value) === "number") throw `Error Data value type: ${typeof(data.value)}`
		const dataValue = parseInt(data.value);

		if (dataValue === value) {
			element.parentElement?.classList.remove("hidden");
		} else {
			element.parentElement?.classList.add("hidden");
		}
	});
}
