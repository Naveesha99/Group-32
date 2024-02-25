document.addEventListener("DOMContentLoaded", function () {
    const cardsSection = document.querySelector(".container .content .cards");
  
    window.addEventListener("scroll", function () {
      // Get the scroll position
      const scrollPosition = window.scrollY;
  
      // Set the threshold where you want the cards to disappear
      const threshold = 100;
  
      // Check if the scroll position is beyond the threshold
      if (scrollPosition > threshold) {
        cardsSection.classList.add("hidden");
      } else {
        cardsSection.classList.remove("hidden");
      }
    });
  });
  