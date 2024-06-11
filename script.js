const textElement = document.getElementById('animated-text');
const originalText = textElement ? textElement.textContent : '';
const refreshRateText = 15000;
const refreshRateImage = 5000;

function restartAnimation() {
    if (textElement) {
        textElement.classList.remove('animated-text');
        void textElement.offsetWidth;
        textElement.classList.add('animated-text');
    }
}

if (textElement) {
    setInterval(restartAnimation, refreshRateText); // 15 s delay
}

const images = [
    'images/poi1.jpg',
    'images/poi2.jpg',
    'images/poi3.jpg'
];
let currentIndex = 0;
const rightContent = document.querySelector('.right-content');

function changeBackgroundImage() {
    currentIndex = (currentIndex + 1) % images.length;
    rightContent.style.backgroundImage = `url(${images[currentIndex]})`;
}

setInterval(changeBackgroundImage, refreshRateImage); //5 sek delay

if (rightContent) {
    rightContent.style.backgroundImage = `url(${images[0]})`;
}

document.addEventListener("DOMContentLoaded", function() {
    const loginBtn = document.getElementById("login-btn");
    const registerBtn = document.getElementById("register-btn");
    const loginPopup = document.getElementById("login-popup");
    const registerPopup = document.getElementById("register-popup");
    const errorPopup = document.getElementById("error-popup");
    const closeLogin = document.getElementById("close-login");
    const closeRegister = document.getElementById("close-register");
    const closeError = document.getElementById("close-error");

    if (loginBtn) {
        loginBtn.addEventListener("click", function() {
            loginPopup.style.display = "block";
            document.body.classList.add("popup-open");
        });
    }

    if (registerBtn) {
        registerBtn.addEventListener("click", function() {
            registerPopup.style.display = "block";
            document.body.classList.add("popup-open");
        });
    }

    if (closeLogin) {
        closeLogin.addEventListener("click", function() {
            loginPopup.style.display = "none";
            document.body.classList.remove("popup-open");
        });
    }

    if (closeRegister) {
        closeRegister.addEventListener("click", function() {
            registerPopup.style.display = "none";
            document.body.classList.remove("popup-open");
        });
    }

    if (closeError) {
        closeError.addEventListener("click", function() {
            errorPopup.style.display = "none";
            document.body.classList.remove("popup-open");
        });
    }

    window.addEventListener("click", function(event) {
        if (event.target == loginPopup) {
            loginPopup.style.display = "none";
            document.body.classList.remove("popup-open");
        }
        if (event.target == registerPopup) {
            registerPopup.style.display = "none";
            document.body.classList.remove("popup-open");
        }
        if (event.target == errorPopup) {
            errorPopup.style.display = "none";
            document.body.classList.remove("popup-open");
        }
    });

    const methodItems = document.querySelectorAll('.method-item');
    const popups = document.querySelectorAll('.popup');
    const closeBtns = document.querySelectorAll('.close-btn');

    methodItems.forEach(function(item) {
        item.addEventListener('click', function() {
            const method = this.getAttribute('data-method');
            document.getElementById(method).style.display = 'block';
            document.body.classList.add('popup-open');
        });
    });

    closeBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            this.parentElement.parentElement.style.display = 'none';
            document.body.classList.remove('popup-open');
        });
    });

    window.addEventListener('click', function(event) {
        popups.forEach(function(popup) {
            if (event.target == popup) {
                popup.style.display = 'none';
                document.body.classList.remove('popup-open');
            }
        });
    });
});

document.getElementById('loginBtn').addEventListener('click', function() {
    document.getElementById('loginPopup').style.display = 'block';
});

document.getElementById('registerBtn').addEventListener('click', function() {
    document.getElementById('registerPopup').style.display = 'block';
});

window.onclick = function(event) {
    const loginPopup = document.getElementById('loginPopup');
    const registerPopup = document.getElementById('registerPopup');
    const errorPopup = document.getElementById("errorPopup");

    if (event.target == loginPopup) {
        loginPopup.style.display = "none";
    }
    if (event.target == registerPopup) {
        registerPopup.style.display = "none";
    }
    if (event.target == errorPopup) {
        errorPopup.style.display = "none";
    }
};

document.querySelectorAll('.close-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
        this.closest('.popup').style.display = 'none';
        document.body.classList.remove('popup-open');
    });
});

window.addEventListener('click', function(event) {
    document.querySelectorAll('.popup').forEach(function(popup) {
        if (event.target == popup) {
            popup.style.display = 'none';
            document.body.classList.remove('popup-open');
        }
    });
});
