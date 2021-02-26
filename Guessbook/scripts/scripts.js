document.getElementById("guestform").onsubmit = validate;

// Function below validates first, last name, email, & LinkedIn.
function validate() {
    // create flag variable (is the form a valid submission?)
    let isValid = true;

    //Clear all error messages
    let errors = document.getElementsByClassName("error_msg");
    for (let i = 0; i < errors.length; i++){
        errors[i].style.display = "none";
    }

    // Checks first name
    let firstName = document.getElementById("fname").value;
    // if text field (value) is empty
    if (firstName === "") {
        let error_fname = document.getElementById("error_fname");
        error_fname.style.display = "inline";
        isValid = false;
    }

    // Checks last name
    let lastName = document.getElementById("lname").value;
    // if text field (value) is empty
    if (lastName === "") {
        let error_lname = document.getElementById("error_lname");
        error_lname.style.display = "inline";
        isValid = false;
    }

    // Checks if email has @ or dot(.)
    let email = document.getElementById("email").value;
    if (validateEmail(email) === false && email !== "") {
        let input_email = document.getElementById("input_email");
        input_email.style.display = "inline";
        isValid = false;
    }

    // Checks if url has "http" and ends with ".com"
    let url = document.getElementById("url").value;
    if (validateUrl(url) === false && url !== "" && !url.includes(".com")) {
        let input_url = document.getElementById("input_url");
        input_url.style.display = "inline";
        isValid = false;
    }

    // Makes 'How did we meet?' required
    let met = document.getElementById('gather');
    if (met.value === "Choose") {
        let input_meet = document.getElementById("input_meet");
        input_meet.style.display = "inline";
        isValid = false;
        // 'other' is id value, but only when the user activates it. (So don't replace it)
    } else if (met.value === "Other" && other.value === "") {
        let input_meet = document.getElementById("input_meet");
        input_meet.style.display = "inline";
        isValid = false;
    }

    // Checks if Mailing list checkbox has been checked
    if (document.getElementById('add_mailling').checked) {
        let email = document.getElementById("email").value;
        if (email === "") {
            let check_email = document.getElementById("check_email");
            check_email.style.display = "inline";
            isValid = false;
        }
    }

    return isValid;
}

// Email validator
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

// URL validator
function validateUrl(url) {
    const res = url.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
    return (res !== null)
}

// Function below is for the "How did we meet" section,
function showTextbox(name) {
    if (name === 'Other') {
        document.getElementById('other_input').style.display = "block"
    } else {
        document.getElementById('other_input').style.display = "none"
    }
}

function hideTextbox() {
    document.getElementById("other_input").style.display = 'none';
}