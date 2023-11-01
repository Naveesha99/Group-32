// Function to calculate the total value for form2
function calculateTotal() {
    const costElements = document.querySelectorAll('.input-line.right-text label');
    let total = 0;

    costElements.forEach((element) => {
        const cost = parseFloat(element.textContent.replace('LKR ', ''));
        if (!isNaN(cost)) {
            total += cost;
        }
    });

    const totalValue1 = document.getElementById('totalValue1');
    totalValue1.textContent = 'LKR ' + total.toFixed(2);

    const totalValue2 = document.getElementById('totalValue2');
    totalValue2.textContent = 'LKR ' + total.toFixed(2);
}

// Calculate the initial total value
calculateTotal();
