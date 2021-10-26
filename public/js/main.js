/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

/*SCROLL HOME*/
sr.reveal('.info-text',{delay: 200}); 
sr.reveal('.header-text',{delay: 400}); 
sr.reveal('.image-about',{ interval: 200}); 