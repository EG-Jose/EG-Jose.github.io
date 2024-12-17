// Container
document.addEventListener("DOMContentLoaded", function () {
    const loginContainer = document.getElementById('login-container');
    const signupContainer = document.getElementById('signup-container');

    const buttonsContainer = document.getElementById('buttons-container');
    buttonsContainer.addEventListener('click', (event) => {
        if (event.target.classList.contains('toggle-button')) {
            const formType = event.target.getAttribute('data-form');
            toggleForm(formType);
        }
    });

    function toggleForm(formType) {
        switch (formType) {
            case 'signup':
                fadeIn(signupContainer);
                fadeOutAndHide(loginContainer);
                break;
            case 'login':
            default:
                fadeIn(loginContainer);
                fadeOutAndHide(signupContainer);
                break;
        }
    }

    function fadeIn(element) {
        element.classList.add('fade-in-animation');
        element.style.display = 'block';
    }

    function fadeOutAndHide(element) {
        element.classList.remove('fade-in-animation');
        element.style.display = 'none';
    }

    toggleForm('login');

    document.forms.forEach(form => form.reset());

    window.onload = resetForms;
});

// Phone Number
document.addEventListener("DOMContentLoaded", function() {
    const phoneInput = document.getElementById('phone');

    phoneInput.addEventListener('input', function(e) {
        let x = e.target.value.replace(/\D/g, '');
        let formatted = x;
        if (x.length > 4 && x.length <= 7) {
            formatted = x.substring(0, 4) + '-' + x.substring(4);
        } else if (x.length > 7) {
            formatted = x.substring(0, 4) + '-' + x.substring(4, 7) + '-' + x.substring(7);
        }
        e.target.value = formatted;
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const homeCont = document.querySelector('.home-cont');
    const logSignToggle = document.querySelector('.logsign-toggle');

    logSignToggle.addEventListener('click', function(event) {
        event.preventDefault();
        homeCont.style.display = 'block';
        logSignToggle.style.display = 'none';
    });
});