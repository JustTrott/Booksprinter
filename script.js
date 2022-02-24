let showLoginButton = document.querySelector('.show-login');
let loginPopup = document.querySelector('.login-popup');
let closeButton = loginPopup.querySelector('.close-button');

showLoginButton.style.visibility = 'visible';
showLoginButton.style.opacity = 1;
loginPopup.style.visibility = 'hidden';
loginPopup.style.opacity = 0;

function show_hide_element(element) {
    if (element.style.visibility == 'visible') {
        element.style.visibility = 'hidden';
        element.style.opacity = 0;
    }
    else {
        element.style.visibility = 'visible';
        element.style.opacity = 1;
    }
}

showLoginButton.addEventListener('click', function() {
    show_hide_element(showLoginButton);
    show_hide_element(loginPopup);
})

closeButton.addEventListener('click', function() {
    show_hide_element(showLoginButton);
    show_hide_element(loginPopup);
})

showLoginButton.addEventListener('mouseenter', function() {
    showLoginButton.style.opacity = 0.5;
})

showLoginButton.addEventListener('mouseleave', function() {
    showLoginButton.style.opacity = 1;
})