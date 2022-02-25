let showLoginButton = document.querySelector('.show-login');

let newNode = document.createElement('div');

newNode.class = 'nav-text';
newNode.innerHTML = 'Hello, someone!';

showLoginButton.parentNode.replaceChild(newNode, showLoginButton);