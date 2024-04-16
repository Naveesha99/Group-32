const stars = document.querySelectorAll(".star");
const rating = document.getElementById("rating");
const reviewText = document.getElementById("review");
const submitBtn = document.getElementById("submit");
const reviewsContainer = document.getElementById("reviews");

stars.forEach((star) => {
    star.addEventListener("click", () => {
        const value = parseInt(star.getAttribute("data-value"));
        rating.innerText = value;

        document.getElementById("ratingValue").value = value;
        console.log(document.getElementById("ratingValue").value);
        // Remove all existing classes from stars
        stars.forEach((s) => s.classList.remove("one", 
                                                "two", 
                                                "three", 
                                                "four", 
                                                "five"));

        // Add the appropriate class to 
        // each star based on the selected star's value
        stars.forEach((s, index) => {
            if (index < value) {
                s.classList.add(getStarColorClass(value));
            }
        });

        // Remove "selected" class from all stars
        stars.forEach((s) => s.classList.remove("selected"));
        // Add "selected" class to the clicked star
        star.classList.add("selected");
    });

            // ratingInput.innerHTML = value;  //newly added line

});

// submitBtn.addEventListener("click", () => {
//     const review = reviewText.value;
//     const userRating = parseInt(rating.innerText);

//     if (!userRating || !review) {
//         alert(
//     "Please select a rating and provide a review before submitting."
//             );
//         return;
//     }

//     if (userRating > 0) {
//         const reviewElement = document.createElement("div");
//         reviewElement.classList.add("review");
//         reviewElement.innerHTML = 
//     `<p><strong>Rating: ${userRating}/5</strong></p><p>${review}</p>`;
//         // reviewsContainer.appendChild(reviewElement);

//         // Reset styles after submitting
//         reviewText.value = "";
//         rating.innerText = "0";
//         stars.forEach((s) => s.classList.remove("one", 
//                                                 "two", 
//                                                 "three", 
//                                                 "four", 
//                                                 "five", 
//                                                 "selected"));
//     }
// });

    function getStarColorClass(value) {
        // console.log("getstar bla bla");
        switch (value) {
            case 1:
                return "one";
            case 2:
                return "two";
            case 3:
                return "three";
            case 4:
                return "four";
            case 5:
                return "five";
            default:
                return "";
        }
    }

// // Add an event listener to each review button
// reviewButtons.forEach((button) => {
//     button.addEventListener("click", () => {
//         // Get the id of the row that the button belongs to
//         const rowId = button.getAttribute("data-row-id");

//         // Fetch the review text from the database
//         const review = getReviewFromDB(rowId);

//         // Update the reviewText value
//         reviewText.value = review;
//     });
// });