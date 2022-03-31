let showLoginButton = document.querySelector('.show-login');
let loginPopup = document.querySelector('.login-popup');
let closeButton = loginPopup.querySelector('.close-button');

showLoginButton.style.visibility = 'visible';
showLoginButton.style.opacity = 1;
loginPopup.style.visibility = 'hidden';
loginPopup.style.opacity = 0;

function show_element(element) {
    element.style.visibility = 'hidden';
    element.style.opacity = 0; //opacity is needed for the css transition animation to work
}

function hide_element(element) {
    element.style.visibility = 'visible';
    element.style.opacity = 1;
}

// a function to change the opacity of an element on mouse hover
function add_opace_on_hover(element, valueOnHover, valueOffHover) {
    element.addEventListener('mouseenter', function () {
        element.style.opacity = valueOnHover;
    })

    element.addEventListener('mouseleave', function () {
        element.style.opacity = valueOffHover;
    })
}

showLoginButton.addEventListener('click', function () {
    show_element(showLoginButton);
    show_element(loginPopup);
})

closeButton.addEventListener('click', function () {
    hide_element(showLoginButton);
    hide_element(loginPopup);
})

add_opace_on_hover(showLoginButton, 0.5, 1)