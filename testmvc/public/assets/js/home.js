const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");

arrows.forEach((arrow, i) => {
  const itemNumber = movieLists[i].querySelectorAll("img").length;
  let clickCounter = 0;
  arrow.addEventListener("click", () => {
    const ratio = Math.floor(window.innerWidth / 270);
    clickCounter++;
    if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
      movieLists[i].style.transform = `translateX(${
        movieLists[i].computedStyleMap().get("transform")[0].x.value - 300
      }px)`;
    } else {
      movieLists[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });

  console.log(Math.floor(window.innerWidth / 270));
});

//TOGGLE

const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
  ".container,.movie-list-title,.navbar-container,.sidebar,.left-menu-icon,.toggle"
);

ball.addEventListener("click", () => {
  items.forEach((item) => {
    item.classList.toggle("active");
  });
  ball.classList.toggle("active");
});


//_____________________search bar_________________________
function search() {
  let filter = document.getElementById('find').value.toUpperCase();
  let items = document.querySelectorAll('.movie-list-item');

  // Find the position of the first visible item
  let firstVisibleItem = null;
  items.forEach(function(item) {
      let title = item.querySelector('.movie-list-title');
      let titleText = title.textContent.toUpperCase();

      if (titleText.includes(filter) && !firstVisibleItem) {
          firstVisibleItem = item;
      }
  });

  // Scroll to the position of the first visible item
  if (firstVisibleItem) {
      firstVisibleItem.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  // Filter the items based on the search filter
  items.forEach(function(item) {
      let title = item.querySelector('.movie-list-title');
      let titleText = title.textContent.toUpperCase();

      if (titleText.includes(filter)) {
          item.style.display = "";
      } else {
          item.style.display = "none";
      }
  });
}
