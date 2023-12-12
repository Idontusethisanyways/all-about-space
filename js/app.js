window.addEventListener('scroll', e => {
    document.body.style.cssText = `--scrollTop: ${this.scrollY}px`
})

ScrollReveal({
    //reset: true,
    distance: '60px',
    duration: 2500,
    delay: 400
});

ScrollReveal().reveal('.main-title, .sec-03 .image, .sec-04 .image, .sec-05 .image, .sec-06 .image, .sec-07 .image, .sec-08 .image, .sec-09 .image', { delay: 200, origin: 'left' });
ScrollReveal().reveal('.sec-01 .image, .info', { delay: 300, origin: 'bottom' });
ScrollReveal().reveal('.text-box', { delay: 200, origin: 'right' });
ScrollReveal().reveal('.sec-02 .image', { delay: 200, origin: 'top' });
ScrollReveal().reveal('.info2, .info3, .info4, .info5, .info6, .info7, .info8', { delay: 200, origin: 'right' });