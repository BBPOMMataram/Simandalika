// Menambahkan event listener untuk scroll
window.addEventListener('scroll', function () {
    const sections = document.querySelectorAll('.content-section');
    const sidebarLinks = document.querySelectorAll('.sidebar-link');

    let currentSection = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        if (window.scrollY >= sectionTop - 50) {
            currentSection = section.getAttribute('id');
        }
    });

    sidebarLinks.forEach(link => {
        link.parentElement.classList.remove('active');
        if (link.getAttribute('href').includes(currentSection)) {
            link.parentElement.classList.add('active');
        }
    });
});