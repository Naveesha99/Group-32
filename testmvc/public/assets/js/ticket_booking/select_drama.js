//_______________________________________DESCRIPTION_____________________________________________________________
// let slideIndex = 0;

// function showSlides() {
//     let i;
//     const slides = document.getElementsByClassName("mySlides");
    
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }

//     slideIndex++;

//     if (slideIndex > slides.length) {
//         slideIndex = 1;
//     }

//     slides[slideIndex - 1].style.display = "block";

//     setTimeout(showSlides, 15000); // Change slide every 15 seconds (adjust as needed)
// }

// showSlides();




// ________________________SELECT BUTTON_______________________

document.addEventListener("DOMContentLoaded", function() {
    const components = document.querySelectorAll('.component');

    components.forEach(component => {
        component.addEventListener('click', function() {
            // Toggle 'clicked' class for all components
            components.forEach(comp => comp.classList.remove('clicked'));
            this.classList.toggle('clicked');

            // Toggle 'special' class for the clicked component
            this.classList.toggle('special');
        });
    });
});

// ____________________________________________________________  

