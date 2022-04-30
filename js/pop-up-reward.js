var Alert = new CustomAlert();

function CustomAlert() {
    this.render = function(event) {
        //Show Modal
        const popUpBox = event.previousElementSibling;
        popUpBox.style.display = "block";
        //Close Modal
    }

    //closes the modals by using closest element
    this.ok = function(event) {
        event.closest('#popUpBox').style.display = "none";
        event.closest('#popUpOverlay').style.display = "none";
    }
}