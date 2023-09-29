// let's get all required elements

const form = document.querySelector("form");
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest(); // creating new xml object
    xhr.open("POST", "message.php", true); //sending post request to message.php file
    xhr.onload = ()=> { //once ajax loaded
        if (xhr.readyState == 4 && xhr.status == 200) {
            
        }
    }
}