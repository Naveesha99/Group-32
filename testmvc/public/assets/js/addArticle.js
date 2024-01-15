function categoryChanged() {
    var categoryDropdown = document.getElementById("category");
    var otherCategoryDiv = document.getElementById("otherCategoryDiv");
    var otherCategoryInput = document.getElementById("otherCategory");

    if (categoryDropdown.value === "Other") {
        otherCategoryDiv.style.display = "block";
        otherCategoryInput.setAttribute("required", "required");
    } else {
        otherCategoryDiv.style.display = "none";
        otherCategoryInput.removeAttribute("required");
    }
}
