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


// _______________________________AUTO UPDATE DATE__________________________________________________________________

function generateDates() {
        const carousel = document.getElementById('dateCarousel');
        const currentDate = new Date();

        for (let i = 0; i < 7; i++) {
            const date = new Date(currentDate);
            date.setDate(currentDate.getDate() + i);

            const dayName = date.toLocaleDateString('en-US', { weekday: 'short' });
            const dateNumber = date.getDate();

            const component = document.createElement('div');
            component.classList.add('component');
            component.textContent = `${dayName} ${dateNumber}`;

            // Add an event listener to update the hidden input on click
            component.addEventListener('click', function ()
            {
                document.getElementById('selectedDate').value = date.toISOString().split('T')[0];
            });

            carousel.appendChild(component);
        }
    }

    generateDates();


// ________________________SELECT BUTTON_______________________

const clsList = document.querySelectorAll('.component');

clsList.forEach(cls=>{
    cls.addEventListener('click', ()=> {
        document.querySelector('.special')?.classList.remove('special');
        cls.classList.add('special');
    });
});
// ____________________________________________________________  