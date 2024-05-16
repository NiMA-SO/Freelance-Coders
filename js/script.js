/*!
 * Minify by http://www.MinifyWeb.com/
 */


function showMoraba() {
    document.getElementById("moraba").style.transform = "translateX(70px)";
    document.getElementById("login").style.color = "blue";
}

function hideMoraba() {
    document.getElementById('moraba').style.transform = "translateX(-70px)";
    document.getElementById("login").style.color = "#ffffff";
}

function showMoraba1() {
    document.getElementById("moraba1").style.transform = "translateX(-135px)";
    document.getElementById("reg").style.color = "blue";
}

function hideMoraba1() {
    document.getElementById('moraba1').style.transform = "translateX(70px)";
    document.getElementById("reg").style.color = "#ffffff";
}

var $ = document;

const home = $.querySelector('#Home');
const learn = $.querySelector('#learn');
const contact = $.querySelector('#contact');
const about = $.querySelector('#about');
const search = $.querySelector('#search');
const menu = $.querySelector('#list-menu');
const icon = $.querySelector('#list-icon');
var bool = true;

learn.addEventListener('mouseenter', () => {
    if (bool) {
        menu.style.display = 'block';
        learn.classList.remove('fa-solid', 'fa-graduation-cap');
        learn.innerHTML = 'Learn ';
        bool = false;
    }
});

learn.addEventListener('mouseleave', () => {
    if (!bool) {
        menu.style.display = 'none';
        learn.innerHTML = '';
        learn.classList.add('fa-solid', 'fa-graduation-cap');
        bool = true;
    }
});

menu.addEventListener('mouseenter', () => {
    if (bool) {
        menu.style.display = 'block';
        learn.classList.remove('fa-solid', 'fa-graduation-cap');
        learn.innerHTML = 'Learn ';
        bool = false;
    }
});

menu.addEventListener('mouseleave', () => {
    if (!bool) {
        menu.style.display = 'none';
        learn.innerHTML = '';
        learn.classList.add('fa-solid', 'fa-graduation-cap');
        bool = true;
    }
});

home.addEventListener('mouseenter', () => {
    if (bool) {
        home.classList.remove('fa-solid', 'fa-house');
        home.innerHTML = 'Home ';
        bool = false;
    }
});

home.addEventListener('mouseleave', () => {
    if (!bool) {
        home.innerHTML = '';
        home.classList.add('fa-solid', 'fa-house');
        bool = true;
    }
});

contact.addEventListener('mouseenter', () => {
    if (bool) {
        contact.classList.remove('fa-solid', 'fa-id-card');
        contact.innerHTML = 'Contact us';
        bool = false;
    }
});

contact.addEventListener('mouseleave', () => {
    if (!bool) {
        contact.innerHTML = '';
        contact.classList.add('fa-solid', 'fa-id-card');
        bool = true;
    }
});

about.addEventListener('mouseenter', () => {
    if (bool) {
        about.classList.remove('fa-solid', 'fa-person-circle-exclamation');
        about.innerHTML = 'About us';
        bool = false;
    }
});

about.addEventListener('mouseleave', () => {
    if (!bool) {
        about.innerHTML = '';
        about.classList.add('fa-solid', 'fa-person-circle-exclamation');
        bool = true;
    }
});

search.addEventListener('mouseenter', () => {
    if (bool) {
        search.classList.remove('fa-brands', 'fa-searchengin');
        search.innerHTML = 'Search';
        bool = false;
    }
});

search.addEventListener('mouseleave', () => {
    if (!bool) {
        search.innerHTML = '';
        search.classList.add('fa-brands', 'fa-searchengin');
        bool = true;
    }
});

const homeSection = $.getElementById('section-1');
const learnSection = $.getElementById('section-2');
const contactSection = $.getElementById('section-3');
const aboutSection = $.getElementById('section-4');
var homeBool = true,
    learnBool = false,
    contactBool = false,
    aboutBool = false,
    searchBool = false;

const afterList = $.getElementById('after-list');

home.addEventListener('click', () => {
    homeBool = true;
    afterList.style.boxShadow = " 0 -30px 50px 20px #6f73f7";
    home.style.color = '#45d4ff';
    home.style.textShadow = '0 0 20px white';
    homeSection.style.display = "block";

    if (contactBool == true) {
        afterList.style.left = '5%';
        contact.style.color = 'white';
        contact.style.textShadow = 'none';
        contactSection.style.display = "none";
        contactBool = false;
    }

    if (learnBool == true) {
        afterList.style.left = '5%';
        learn.style.color = 'white';
        learn.style.textShadow = 'none';
        learnSection.style.display = "none";
        learnBool = false;
    }

    if (aboutBool == true) {
        afterList.style.left = '5%';
        about.style.color = 'white';
        about.style.textShadow = 'none';
        aboutSection.style.display = "none";
        aboutBool = false;
    } else {
        homeBool = true;
    }
});

learn.addEventListener('click', () => {
    learnBool = true;
    afterList.style.boxShadow = " 0 -30px 50px 20px rgb(0, 255, 0)";
    learn.style.color = '#92ffa5';
    learn.style.textShadow = '0 0 20px white';
    learnSection.style.display = "block";

    if (homeBool == true) {
        afterList.style.left = '25%';
        home.style.color = 'white';
        home.style.textShadow = 'none';
        homeSection.style.display = "none";
        homeBool = false;
    }

    if (contactBool == true) {
        afterList.style.left = '25%';
        contact.style.color = 'white';
        contact.style.textShadow = 'none';
        contactSection.style.display = "none";
        contactBool = false;
    }

    if (aboutBool == true) {
        afterList.style.left = '25%';
        about.style.color = 'white';
        about.style.textShadow = 'none';
        aboutSection.style.display = "none";
        aboutBool = false;
    } else {
        learnBool = true;
    }
});

contact.addEventListener('click', () => {
    contactBool = true;
    afterList.style.boxShadow = "0 -30px 30px 10px rgb(251, 255, 0)";
    contact.style.color = 'rgb(251, 255, 0)';
    contact.style.textShadow = '0 0 20px white';
    contactSection.style.display = "block";

    if (homeBool == true) {
        afterList.style.left = '45%';
        home.style.color = 'white';
        home.style.textShadow = 'none';
        homeSection.style.display = "none";
        homeBool = false;
    }

    if (learnBool == true) {
        afterList.style.left = '45%';
        learn.style.color = 'white';
        learn.style.textShadow = 'none';
        learnSection.style.display = "none";
        learnBool = false;
    }

    if (aboutBool == true) {
        afterList.style.left = '45%';
        about.style.color = 'white';
        about.style.textShadow = 'none';
        aboutSection.style.display = "none";
        aboutBool = false;
    } else {
        contactBool = true;
    }
});

about.addEventListener('click', () => {
    aboutBool = true;
    afterList.style.boxShadow = " 0 -30px 50px 20px #ff21a5";
    about.style.color = '#f78dcc';
    about.style.textShadow = '0 0 20px white';
    aboutSection.style.display = "block";

    if (homeBool == true) {
        afterList.style.left = '65%';
        home.style.color = 'white';
        home.style.textShadow = 'none';
        homeSection.style.display = "none";
        homeBool = false;
    }

    if (learnBool == true) {
        afterList.style.left = '65%';
        learn.style.color = 'white';
        learn.style.textShadow = 'none';
        learnSection.style.display = "none";
        learnBool = false;
    }

    if (contactBool == true) {
        afterList.style.left = '65%';
        contact.style.color = 'white';
        contact.style.textShadow = 'none';
        contactSection.style.display = "none";
        contactBool = false;
    } else {
        aboutBool = true;
    }
});

const sideBar = $.querySelector('#side-bar-btn');
const sideBarLine1 = $.querySelector('#side-bar-btn-line1');
const sideBarLine = $.querySelector('#side-bar-btn-line');
const sideBarLine2 = $.querySelector('#side-bar-btn-line2');
const menuList = $.querySelector('#list-ul');

sideBar.addEventListener('click', () => {
    if (bool) {
        sideBarLine.style.transform = 'translateX(-100px)';
        sideBarLine.style.backgroundColor = 'transparent';
        sideBarLine1.style.transform = 'rotate(-46deg)';
        sideBarLine1.style.top = '17px';
        sideBarLine2.style.transform = 'rotate(46deg)';
        sideBarLine2.style.bottom = '16px';
        menuList.style.height = "590px";
        menuList.style.top = "100%";
        menuList.style.borderBottomLeftRadius = "60px";
        menuList.style.borderBottomRightRadius = "60px";
        bool = false;
    } else {
        sideBarLine.style.transform = 'translateX(0px)';
        sideBarLine.style.backgroundColor = 'white';
        sideBarLine1.style.transform = 'rotate(0deg)';
        sideBarLine1.style.top = '0px';
        sideBarLine2.style.transform = 'rotate(0deg)';
        sideBarLine2.style.bottom = '0px';
        menuList.style.borderBottomLeftRadius = "0px";
        menuList.style.borderBottomRightRadius = "0px";
        menuList.style.height = "0px";
        bool = true;
    }
});

const loginBtn = $.querySelector('#login');
const loginBtnMobile = $.querySelector('#login-mobile');
const loginContainer = $.querySelector('#Login-Container');
const closeLogin = $.querySelector('strong .loginClose');

loginBtn.addEventListener('click', () => {
    loginContainer.style.display = 'block';
});

loginBtnMobile.addEventListener('click', () => {
    loginContainer.style.display = 'block';
});

window.addEventListener('click', (e) => {
    if (e.target == loginContainer) {
        loginContainer.style.display = 'none';
    }
});

closeLogin.addEventListener('click', () => {
    loginContainer.style.display = 'none';
});

const loginSubmit = $.querySelector('#login-submit');
const loginUser = $.querySelector('#loginUser');
const loginPass = $.querySelector('#loginPass');
const loginMessage = $.querySelector('#loginMessage');
const loginForm = $.querySelector('#Login form');

loginSubmit.addEventListener('click', () => {
    if (loginUser.value != '' && loginPass.value != '') {
        if (loginPass.value.length > 20 || loginPass.value.length < 5) {
            loginMessage.style.color = 'red';
            loginMessage.innerHTML = 'The password must be between 5 and 20';
        } else {
            loginMessage.style.color = 'green';
            loginMessage.innerHTML = 'waiting for the server ...';
            setInterval(() => {
                loginForm.submit();
            }, 3000);
        }
    } else if (loginUser.value == '' || loginPass.value == '') {
        loginMessage.style.color = 'red';
        loginMessage.innerHTML = 'All fields must be filled';
    }
});

const regBtn = $.querySelector('#reg');
const regBtnMobile = $.querySelector('#reg-mobile');
const regContainer = $.querySelector('#Register-Container');
const closeRegister = $.querySelector('strong .registerClose');

regBtn.addEventListener('click', () => {
    regContainer.style.display = 'block';
});

regBtnMobile.addEventListener('click', () => {
    regContainer.style.display = 'block';
});

window.addEventListener('click', (e) => {
    if (e.target == regContainer) {
        regContainer.style.display = 'none';
    }
});

closeRegister.addEventListener('click', () => {
    regContainer.style.display = 'none';
});

const regSubmit = $.querySelector('#register-submit');
const registerName = $.querySelector('#registerName');
const registerUser = $.querySelector('#registerUser');
const registerPass = $.querySelector('#registerPass');
const registerRePass = $.querySelector('#registerRePass');
const RegisterMessage = $.querySelector('#RegisterMessage');
const RegisterForm = $.querySelector('#Register form');

regSubmit.addEventListener('click', () => {
    if (registerName.value != '' && registerUser.value != '' && registerPass.value != '' && registerRePass.value != '') {
        if (registerPass.value.length > 20 || registerPass.value.length < 5 || registerRePass.value.length > 20 || registerRePass.value.length < 5) {
            RegisterMessage.style.color = 'red';
            RegisterMessage.innerHTML = 'The password must be between 5 and 20';
        } else if (registerPass.value == registerRePass.value) {
            RegisterMessage.style.color = 'green';
            RegisterMessage.innerHTML = 'Register was successful ...';
            setInterval(() => {
                RegisterForm.submit();
            },3000)
        } else if (registerPass.value != registerRePass.value) {
            RegisterMessage.style.color = 'red';
            RegisterMessage.innerHTML = 'Passwords are not the same';
        }
    } else if (registerName.value == '' || registerUser.value == '' || registerPass.value == '' || registerRePass.value == '') {
        RegisterMessage.style.color = 'red';
        RegisterMessage.innerHTML = 'All fields must be filled';
    }
});

const slider = document.querySelector('.slider');

function activate(e) {
    const items = document.querySelectorAll('.item');

    if (e.target.matches('.next')) {
        const clonedItem = items[0].cloneNode(true);
        slider.appendChild(clonedItem);
        slider.removeChild(items[0]);
    }

    if (e.target.matches('.prev')) {
        const clonedItem = items[items.length - 1].cloneNode(true);
        slider.prepend(clonedItem);
        slider.removeChild(items[items.length - 1]);
    }
}

document.addEventListener('click', activate, false);

const buySpans = document.querySelectorAll('.buy-span');
const buyIcon = document.querySelectorAll('.buy-icon');

function expandSpan(index) {
    buySpans[index].style.width = '20%';
    buyIcon[index].style.display = 'inline';
}

function shrinkSpan(index) {
    buySpans[index].style.width = '70%';
    buyIcon[index].style.display = 'none';
}

document.addEventListener("DOMContentLoaded", function() {
    const scrollAnimation = document.querySelector("#courses");
    let animationActive = false;
    const scrollhelp = document.querySelector("#help");
    let helpActive = false;

    window.addEventListener("scroll", function() {
        const scrollPosition = window.scrollY;
        const windowHeight = window.innerHeight;
        const fullHeight = document.documentElement.scrollHeight;
        const scrollPercentage = (scrollPosition / (fullHeight - windowHeight)) * 100;

        if (scrollPercentage >= 37 && !animationActive) {
            scrollAnimation.style.animation = "courses 1s linear 1 forwards";
            animationActive = true;
        } else if (scrollPercentage < 37 && animationActive) {
            scrollAnimation.style.animation = "none";
            animationActive = false;
        }

        if (scrollPercentage >= 75 && !helpActive) {
            scrollhelp.style.animation = "courses 1s linear 1 forwards";
            helpActive = true;
        } else if (scrollPercentage < 75 && helpActive) {
            scrollhelp.style.animation = "none";
            helpActive = false;
        }
    });
    let price = document.querySelectorAll('.price').innerHTML;
});



