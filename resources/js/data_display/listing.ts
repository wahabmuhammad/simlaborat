const dataTable = document.querySelector("div#DataTable")
const dataList = dataTable?.querySelector("section#DataList");
const originalData = dataList?.querySelectorAll("aside#dataTrigger");

const topPageIndicator = dataTable?.querySelector("div#TopPageIndicator")
const topPageTotalPage = topPageIndicator?.querySelector("span#TotalPage")
const topPageCurrentPage = topPageIndicator?.querySelector("input#CurrentPage") as HTMLInputElement

const dataPerPageIndicator = dataTable?.querySelector("div#DataPerPage")?.querySelector("input") as HTMLInputElement

const nameFilter = document
	.querySelector("#NameFilter")
	?.querySelector("input");



const checkedFilter = document.querySelector("#CheckedFilter");

const regex = /[A-Za-z]+/i;

let currentPage = 0;
let checkedStatus = 2;

let queueElemets: Element[] = originalData ? [...originalData] : [];
let dataOnPage: Element[][] = [];

// If the indicator value is null or undefined
let dataPerPage: number = parseInt(dataPerPageIndicator.value) ? parseInt(dataPerPageIndicator.value) : 30




// Initial filter
// Hide data based on initial checked status
if (originalData) {
	filterByCheckedStatus(originalData, checkedStatus);
    dataOnPage = updatePreviewedData(queueElemets)

    // console.log(dataOnPage[currentPage])
    previewOnPage(dataOnPage, currentPage)
    if(topPageTotalPage) topPageTotalPage.textContent = (dataOnPage.length).toString();
    topPageCurrentPage.value = (currentPage + 1).toString()
}


dataPerPageIndicator.addEventListener("change", function(Event){

    if(parseInt(dataPerPageIndicator.value) <= 0 || dataPerPageIndicator.value === "" || regex.test(dataPerPageIndicator.value)) dataPerPageIndicator.value = "1"

    dataPerPage = parseInt(dataPerPageIndicator.value)

    if(!originalData) return

    filterByCheckedStatus(originalData, checkedStatus);
    dataOnPage = updatePreviewedData(queueElemets, dataPerPage)

    // console.log(dataOnPage[currentPage])
    previewOnPage(dataOnPage, currentPage)
    if(topPageTotalPage) topPageTotalPage.textContent = (dataOnPage.length).toString();
    topPageCurrentPage.value = (currentPage + 1).toString()
})



// Filter data by name
nameFilter?.addEventListener("keyup", function (Event: Event) {
	if (!originalData) return;

	if (!nameFilter.value) {
		resetFilter(originalData);
		dataOnPage = updatePreviewedData(queueElemets, dataPerPage);
	}
	if (originalData) {
		filterByName(originalData, nameFilter.value);
        dataOnPage = updatePreviewedData(queueElemets, dataPerPage);
	}

    previewOnPage(dataOnPage, currentPage)
    if(topPageTotalPage) topPageTotalPage.textContent = (dataOnPage.length).toString();
    topPageCurrentPage.value = (currentPage + 1).toString()
});


// Filter data by checked status
checkedFilter?.addEventListener("mouseup", function (Event: Event) {
	if (!originalData) return;

	if (!Event.target) return;
	const target = Event?.target as HTMLDataElement;
	const parentChilds = target.parentElement?.querySelectorAll("data");

	if (parentChilds && parentChilds?.length != 0) {
		parentChilds.forEach((element) => {
            if(element === target) {
                element.classList.add("text-gray-900")
                element.classList.remove("text-gray-500")
                return
            } else {
                element.classList.add("text-gray-500")
                element.classList.remove("text-gray-900")
                return
            }
		});
	}

	checkedStatus = parseInt(target.value);
	filterByCheckedStatus(originalData, checkedStatus);

    // Update after each trigger
	dataOnPage = updatePreviewedData(queueElemets, dataPerPage);
    previewOnPage(dataOnPage, currentPage)
    if(topPageTotalPage) topPageTotalPage.textContent = (dataOnPage.length).toString();
});


topPageIndicator?.addEventListener("mouseup", function(Event:Event) {
    if(!Event.target) return
    const target = Event.target as HTMLElement
    const parent = target.parentElement
    const parentId = parent?.id != null ? parent.id : ""

    if(parentId.toLocaleLowerCase() === "decrease" && currentPage != 0) currentPage -= 1
    if(parentId.toLocaleLowerCase() === "increase" && currentPage < dataOnPage.length - 1) currentPage += 1

    topPageCurrentPage.value = (currentPage + 1).toString()

	dataOnPage = updatePreviewedData(queueElemets, dataPerPage);
    previewOnPage(dataOnPage, currentPage)
})

topPageCurrentPage.addEventListener("change", function(Event){
    if(regex.test(topPageCurrentPage.value) || topPageCurrentPage.value === "") topPageCurrentPage.value = "1";

    currentPage = parseInt(topPageCurrentPage.value) - 1
    console.log(currentPage)

	dataOnPage = updatePreviewedData(queueElemets, dataPerPage);
    previewOnPage(dataOnPage, currentPage)
})



// Hide details elements
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

// Todo add page to data table!
function previewOnPage(datas: Element[][], pageNumber: number){
    datas.forEach((elements, index) => {
        if(index === pageNumber) return
        elements.forEach(element => {
            if(element.parentElement?.classList.contains("hidden")) return
            element.parentElement?.classList.add("hidden")
        });
    });
}


function updatePreviewedData(datas: Element[], dataPerPage:number = 30) {
	datas.forEach((element) => {
		if (element.parentElement?.classList.contains("queueHide")) {
			element.parentElement?.classList.add("hidden");
		} else {
			element.parentElement?.classList.remove("hidden");
		}
	});

    return splitData(datas, dataPerPage)
}


function splitData(elements: Element[], dataPerPage: number) {
	if (!elements) return [];

	let pageIndex = 0;
	let currentDataIndex = 0;
	const datas = [...elements].filter((element)=>{
        if(!element.parentElement?.classList.contains("hidden"))
            return element
    });
    const totalData = datas.length;

	let splitedData: Element[][] = [];

	for (let count = 0; count < totalData / dataPerPage; count++) {
		splitedData[pageIndex] = datas.slice(
			currentDataIndex,
			currentDataIndex + dataPerPage,
		);
		currentDataIndex += dataPerPage;
		pageIndex += 1;
	}

	return splitedData;
}

// These functions use Original Data
function resetFilter(elements: NodeListOf<Element>) {
	if (!elements) return;

	elements.forEach((element) => {
		if (!element) return;

		const parentElement = element.parentElement as HTMLElement;
		if (parentElement.classList.contains("queueHide"))
			return parentElement.classList.remove("queueHide");
	});
}

function filterByName(elements: NodeListOf<Element>, value: string) {
	if (!elements) return;

	elements.forEach((element) => {
		if (!element) return;

		const data = element.querySelector("data#name") as HTMLDataElement;
		const name = data.value.toLocaleLowerCase();

		if (name.match(value.toLocaleLowerCase())) {
			element.parentElement?.classList.remove("queueHide");
		} else {
			element.parentElement?.classList.add("queueHide");
		}
	});
}

function filterByCheckedStatus(elements: NodeListOf<Element>, value: number) {
	if (!elements) return;

	if (value === 2) return resetFilter(elements);

	elements.forEach((element) => {
		if (!element) return;

		const data = element.querySelector("data#checked") as HTMLDataElement;

		if (typeof data.value === "number")
			throw `Error Data value type: ${typeof data.value}`;
		const dataValue = parseInt(data.value);

		if (dataValue === value) {
			element.parentElement?.classList.remove("queueHide");
		} else {
			element.parentElement?.classList.add("queueHide");
		}
	});
}
