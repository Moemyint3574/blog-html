document.addEventListener('DOMContentLoaded', () => {

    const menuBtn = document.querySelector(".hamburger");
    const sideMenu = document.querySelector(".gnav-sp");

    menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle('active');

        sideMenu.classList.toggle("active-menu");

        const isOpen = menuBtn.classList.contains('active');
        menuBtn.setAttribute('aria-expanded', isOpen);
        sideMenu.setAttribute('aria-hidden', !isOpen);

    });

    document.addEventListener('click', (e) => {
        if (!e.target.closest('.gnav-sp') && !e.target.closest('.hamburger') && sideMenu.classList.contains('active-menu')) {
            console.log("kkkk");
            menuBtn.classList.remove('active');
            sideMenu.classList.remove('active-menu');
            menuBtn.setAttribute('aria-expanded', false);
            sideMenu.setAttribute('aria-hidden', true);
        }
    });
});