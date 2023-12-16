

function verifyInternationalPhoneNumber() {
    const phoneNumber = document.getElementById('tel')
    // Regular expressions for common international phone number formats
    const regexArray = [
        /^\+\d{1,3}\s?\d{1,14}$/g,      // Format: +123 45678901234
        /^\d{6,14}$/g                    // Format: 12345678901234
    ];

    for (const regex of regexArray) {
        if (regex.test(phoneNumber)) {
            console.log('International phone number is valid:', phoneNumber);
            return true;
        }
    }

    console.log('Invalid international phone number:', phoneNumber);
    return false;
}

// Example usage:
const internationalPhoneNumber = '+44 20 7930 3000'; // Buckingham Palace in the United Kingdom

verifyInternationalPhoneNumber(internationalPhoneNumber);
function menuOnAndOff() {
    var x = document.getElementById('topnav');
    if (x.className === 'responsive') {
        x.classList.remove('responsive');
    } else {
        x.className = 'responsive';
    }
}
// Validation of form
var isFormValid;

function validateQuality() {
    var messageQuality = document.getElementById('message-quality');
    var quality1 = document.getElementById('choiceawesome');
    var quality2 = document.getElementById('choicegood');
    var quality3 = document.getElementById('choiceokay1');
    var quality4 = document.getElementById('choicepoor');

    if (!(quality1.checked || quality2.checked || quality3.checked || quality4.checked)) {
        messageQuality.innerHTML = 'Please answer the question.';
        isFormValid = false;
    } else {
        messageQuality.innerHTML = '';
    }
}

function validateView() {
    var messageView = document.getElementById('message-view');
    var view1 = document.getElementById('choicefair');
    var view2 = document.getElementById('choiceokay2');
    var view3 = document.getElementById('choiceexpensive');

    if (!(view1.checked || view2.checked || view3.checked)) {
        messageView.innerHTML = 'Please answer the question.';
        isFormValid = false;
    } else {
        messageView.innerHTML = '';
    }
}

function validateName() {
    var messageName = document.getElementById('message-name');
    var inputName = document.getElementById('name');

    if (inputName.value == '') {
        messageName.innerHTML = 'Please enter your name.';
        isFormValid = false;
    } else {
        messageName.innerHTML = '';
    }
}

function validateEmail() {
    var messageEmail = document.getElementById('message-email');
    var inputEmail = document.getElementById('email');
    var emailPattern = RegExp('^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$');

    if (inputEmail.value == '') {
        messageEmail.innerHTML = 'Please enter your email';
        isFormValid = false;
    } else if (!(emailPattern.test(inputEmail.value))) {
        messageEmail.innerHTML = 'Please enter a correct email';
        isFormValid = false;
    } else {
        messageEmail.innerHTML = '';
    }
}

function validateFeedback() {
    var messageFeedback = document.getElementById('message-feedback');
    var inputFeedback = document.getElementById('feedback');

    if (inputFeedback.value == '') {
        messageFeedback.innerHTML = 'Please enter a feedback';
        isFormValid = false;
    } else if (inputFeedback.value.length <= 50) {
        messageFeedback.innerHTML = 'Please write more than 50 characters';
        isFormValid = false;
    } else {
        messageFeedback.innerHTML = '';
    }
}

function validateDemand() {
    let messageDemand = document.getElementsByClassName('message-demand');
    let inputDemand = document.getElementById('demand');

    if (inputDemand.value == '') {
        messageDemand.innerHTML = 'Please enter your questions';
        isFormValid = false;
    } else if (inputDemand.value.length <= 50) {
        messageDemand.innerHTML = 'Please write more than 50 characters';
        isFormValid = false;
    } else {
        messageDemand.innerHTML = '';
    }
}

function validateOptions(){
    let messageDemand = document.getElementsByClassName('message-demand');
    let options = document.getElementById('options'.value);

    if (options.value = ''){
            messageDemand.innerHTML = 'Please add your options you can select more than one'
        }
    else {
            messageDemand.innerHTML = '';
        }
}

// Submit button wird per default deaktiviert.
var submit = document.getElementsById('submit');
submit.disabled = true;

// Alle Felder werden nacheinander validiert und dann entsprechend der submit button aktiviert (oder deaktiviert)
function validateForm() {
    isFormValid = true;

    validateName();
    validateEmail();
    verifyInternationalPhoneNumber();
    validateDemand();
    validateOptions();

    if (isFormValid) {
        submit.disabled = false;
    } else {
        submit.disabled = true;

    }
}

// Alle input und textarea Felder erhalten je einen "Listener" auf keyup (Tastatur loslassen) und change (wenn sich was ändert)
const inputFields = document.querySelectorAll('input, textarea');
inputFields.forEach(function (element) {
    element.addEventListener('change', validateForm);
    element.addEventListener('keyup', validateForm);
});

