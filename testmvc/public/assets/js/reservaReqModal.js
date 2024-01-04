function popup(id){
    document.getElementById('modal').style.display='block';
}

function closeConfirmation() {
    // Add logic to handle "OK" button click
    // For now, let's just close the confirmation popup
    document.querySelector('.modal').style.display = 'none';
    window.location.href = 'reservaHall1.html';
}