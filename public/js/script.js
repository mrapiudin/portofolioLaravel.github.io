const navbar = document.querySelector('.navbar');
const burgerButton = document.querySelector('#burger');
let burgerActive = false;

// Fungsi untuk menangani klik pada burger button
const toggleNavbar = () => {
    navbar.classList.toggle('active');
    burgerActive = !burgerActive;
};

// Menambahkan event listener untuk burger button
burgerButton.onclick = () => {
    toggleNavbar();
};

// Menambahkan event listener untuk menutup burger menu saat klik di luar elemen burger
document.addEventListener('click', (event) => {
    const isClickInsideNavbar = navbar.contains(event.target);
    const isClickOnBurger = burgerButton.contains(event.target);

    // Menutup burger menu jika diklik di luar elemen burger dan burger sedang aktif
    if (!isClickInsideNavbar && !isClickOnBurger && burgerActive) {
        toggleNavbar();
    }
});

// Opsional: Menambahkan event listener untuk menutup burger menu saat tekan tombol Escape
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && burgerActive) {
        toggleNavbar();
    }
});
