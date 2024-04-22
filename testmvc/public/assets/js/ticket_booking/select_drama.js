
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

