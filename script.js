const textElement = document.getElementById('animated-text');
const originalText = textElement.textContent;
const refreshRateText = 15000;
const refreshRateImage = 5000;

function restartAnimation() {
    textElement.classList.remove('animated-text');
    void textElement.offsetWidth;
    textElement.classList.add('animated-text');
}

setInterval(restartAnimation, refreshRateText); // 15 s delay to rewrite #first

// Background image carousel
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

setInterval(changeBackgroundImage, refreshRateImage); 

rightContent.style.backgroundImage = `url(${images[0]})`;
