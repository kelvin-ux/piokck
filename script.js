const textElement = document.getElementById('animated-text');
const originalText = textElement.textContent;
const refreshRateText = 15000;
const refreshRateImage = 5000;

function restartAnimation() {
    textElement.classList.remove('animated-text');
    void textElement.offsetWidth;
    textElement.classList.add('animated-text');
}

setInterval(restartAnimation, refreshRateText); // 15 s delay

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

rightContent.style.backgroundImage = `url(${images[0]})`;

window.addEventListener('scroll', function() {
    const section1 = document.querySelector('.s1');
    const section2 = document.querySelector('.s2');
    const section3 = document.querySelector('.s3');
    const scrollPosition = window.scrollY + window.innerHeight / 2;

    if (scrollPosition < section2.offsetTop) {
        window.scrollTo({ top: section1.offsetTop, behavior: 'smooth' });
    } else if (scrollPosition < section3.offsetTop) {
        window.scrollTo({ top: section2.offsetTop, behavior: 'smooth' });
    } else {
        window.scrollTo({ top: section3.offsetTop, behavior: 'smooth' });
    }
});


document.addEventListener('DOMContentLoaded', () => {
    const loginButton = document.querySelector('.nav-right a[href="subsites/login.html"]');
    const popup = document.getElementById('login-popup');
    const closeButton = document.querySelector('.close-btn');

    loginButton.addEventListener('click', (e) => {
        e.preventDefault();
        document.body.classList.add('popup-open');
        popup.style.display = 'block';
    });

    closeButton.addEventListener('click', () => {
        document.body.classList.remove('popup-open');
        popup.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target === popup) {
            document.body.classList.remove('popup-open');
            popup.style.display = 'none';
        }
    });
});
