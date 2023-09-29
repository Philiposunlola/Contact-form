// let's get all required elements

const form = document.querySelector("form");
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting
    statusTxt.style.display = "block";
}