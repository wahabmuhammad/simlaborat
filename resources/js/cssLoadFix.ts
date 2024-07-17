let FF_FOUC_FIX;
// Helper function
let domReady = (func) => {
	document.readyState === "interactive" || document.readyState === "complete"
		? func()
		: document.addEventListener("DOMContentLoaded", func);
};

domReady(() => {
	// Display body when DOM is loaded
	document.body.classList.toggle("hidden")
});
