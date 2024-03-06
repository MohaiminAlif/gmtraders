const tiltElement = document.getElementById('tilt-element');

document.addEventListener('mousemove', (e) => {
    const x = (window.innerWidth / 2 - e.pageX) / 5;
    const y = (window.innerHeight / 2 - e.pageY) / 5;

    tiltElement.style.transform = `rotateX(${y}deg) rotateY(${x}deg)`;
});

// Reset the tilt when the mouse leaves the element
tiltElement.addEventListener('mouseleave', () => {
    tiltElement.style.transform = 'rotateX(0) rotateY(0)';
});
