
const emailInput = document.querySelector('.registerr input[name="emailR"]');
const PasswordInput = document.querySelector('.registerr input[name="passwordR"]');
const confirmedPasswordInput = document.querySelector('.registerr input[name="confirmpasswordR"]');

function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function arePasswordsSame(password, confirmedPassword) {
    return password === confirmedPassword;
}

function markValidation(element, condition) {
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

function validateEmail() {
    setTimeout(function () {
            markValidation(emailInput, isEmail(emailInput.value));
        },
        1000
    );
}

function validatePassword() {

       if(PasswordInput.value!==confirmedPasswordInput) {
           markValidation(confirmedPasswordInput,false);
       }

}

emailInput.addEventListener('keyup', validateEmail);
//confirmedPasswordInput.addEventListener('keyup', validatePassword);