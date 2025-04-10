// Function to highlight active navbar links on scroll
window.addEventListener('scroll', function () {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.navbar ul li a');

    sections.forEach((section, index) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        const scrollPosition = window.scrollY;

        if (scrollPosition >= sectionTop - 100 && scrollPosition < sectionTop + sectionHeight - 100) {
            navLinks[index].classList.add('active');
        } else {
            navLinks[index].classList.remove('active');
        }
    });
});

// Search Function
function searchPhotos() {
    const searchQuery = document.getElementById('search-bar').value.toLowerCase();
    const imageCards = document.querySelectorAll('.image-card');
    
    // Loop through each image card and hide it if it doesn't match the search query
    imageCards.forEach(card => {
        const photographer = card.querySelector('.image-info p').textContent.toLowerCase();
        if (photographer.includes(searchQuery)) {
            card.style.display = 'block'; // Show the card
        } else {
            card.style.display = 'none'; // Hide the card
        }
    });
}
