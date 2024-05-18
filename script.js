const textElement = document.getElementById('animated-text');
    const originalText = textElement.textContent;

    function restartAnimation() {
        textElement.classList.remove('animated-text');
        void textElement.offsetWidth; 
        textElement.classList.add('animated-text');
    }

    setInterval(restartAnimation, 10000); // 10 s delay to rewrite #first