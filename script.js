// let's get all required elements

const form = document.querySelector("form");
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting
    statusTxt.style.color = "rgb(57, 226, 114)";
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest(); // creating new xml object
    xhr.open("POST", "message.php", true); //sending post request to message.php file
    xhr.onload = ()=> { //once ajax loaded
        if (xhr.readyState == 4 && xhr.status == 200) { //if ajax response status is 200 & ready status is 4 means there is no error
            let response = xhr.response; //storing ajax response in a response varaible
            //if response is an error like enter valid email address hen we'll change status color to red  else reset the form
           if (response.indexOf("Email and password field are required!") != -1 || response.indexOf("Enter a valid email address!") || response.indexOf("Sorry, failed to send your message!")) {
                statusTxt.style.color = "red";
           }else{
                form.reset();
                setTimeout(() => {
                    statusTxt.style.display = "none";
                }, 3000); //hide the statusTxt under 3 seconds if the message is sent
           }
            statusTxt.innerText = response;
        }
    }
    let formData = new FormData(); //creating new FormData obj. This obj is used to send form Data
    xhr.send(formData); //sending form data
}