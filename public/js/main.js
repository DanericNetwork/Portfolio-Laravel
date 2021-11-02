/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: false
});

/*SCROLL HOME*/
sr.reveal('.info-text',{delay: 200}); 
sr.reveal('.header-text',{delay: 400}); 
sr.reveal('.image-about',{interval: 200}); 

/*SCROLL ABOUT*/
sr.reveal('.text-about',{delay: 200}); 

// SCROLL PROJECT
sr.reveal('.project-description',{delay: 200});
sr.reveal('.project-desc',{delay: 300});
sr.reveal('.project-title',{delay: 400});
sr.reveal('.right-picture',{delay: 100, origin: 'right'});