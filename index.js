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

function add_opace_on_hover(element, valueOnHover, valueOffHover) {
    element.addEventListener('mouseenter', function() {
        element.style.opacity = valueOnHover;
    })
    
    element.addEventListener('mouseleave', function() {
        element.style.opacity = valueOffHover;
    })
}

showLoginButton.addEventListener('click', function() {
    show_hide_element(showLoginButton);
    show_hide_element(loginPopup);
})

closeButton.addEventListener('click', function() {
    show_hide_element(showLoginButton);
    show_hide_element(loginPopup);
})

add_opace_on_hover(showLoginButton, 0.5, 1)

let buyButton = document.querySelector('.buy-button')

add_opace_on_hover(buyButton, 0.5, 1)