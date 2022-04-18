function scrollToTop() {
    window.scrollTo(0, 0);
}

function scrollToHighlight() {
    const id = 'highlight';
    const yOffset = -70; 
    const element = document.getElementById(id);
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({top: y, behavior: 'smooth'});
}

function scrollToProjects() {
    const id = 'projects';
    const yOffset = -100; 
    const element = document.getElementById(id);
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({top: y, behavior: 'smooth'});
}

function scrollToAbout() {
    const id = 'about';
    const yOffset = -70; 
    const element = document.getElementById(id);
    const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({top: y, behavior: 'smooth'});
}