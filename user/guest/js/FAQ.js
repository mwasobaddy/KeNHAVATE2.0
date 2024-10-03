// FAQ toggle logic
document.querySelectorAll('.faq h4').forEach(item => {
    item.addEventListener('click', () => {
        const faq = item.parentElement;
        faq.classList.toggle('open');
    });
});




// Elements used for handling loader and content visibility
const faqLoader = document.querySelector('.faq-loader');
const faqContent = document.querySelector('.faq-content');

if (document.readyState === 'loading') {
    // Document is still loading
    if (faqLoader) faqLoader.classList.add('active');
    if (faqContent) faqContent.classList.remove('active');
}

document.addEventListener("DOMContentLoaded", function() {

    
    // Document is already loaded, so execute the function after a 5-second delay
    setTimeout(() => {
        if (faqLoader) faqLoader.classList.remove('active');
        if (faqContent) faqContent.classList.add('active');
    }, 5000); // 5000 milliseconds = 5 seconds
    
    
    
    // toggle searchbar on and off
    const searchToggleMobile = document.getElementById('searchToggleMobile');
    const searchToggleDesktop = document.getElementById('searchToggleDesktop');
    const searchForm = document.getElementById('searchForm');

    function toggleSearchForm() {
        if (searchForm.classList.contains('invisable')) {
            searchForm.classList.remove('invisable');
            searchForm.classList.add('visable');
        } else {
            searchForm.classList.remove('visable');
            searchForm.classList.add('invisable');
        }
    }

    if (searchToggleMobile) {
        searchToggleMobile.addEventListener('click', toggleSearchForm);
    }
    
    if (searchToggleDesktop) {
        searchToggleDesktop.addEventListener('click', toggleSearchForm);
    }














    // animate elements on scroll
    const observerOnScroll = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('disappear');
                entry.target.classList.add('appear'); // Ensure 'appear' animation runs when in view
            }
            else{
                entry.target.classList.add('disappear');
                entry.target.classList.remove('appear');
            }
        });
    }, {
        threshold: 0.1 // Adjust as needed for when the animation should trigger
    });
    
    const animate = document.querySelectorAll('.animate');
    animate.forEach((el) => observerOnScroll.observe(el));














    // disable link that I am on the current page
    var faq = document.getElementById('faq');
    faq.classList.add('disabled-link'); // Add custom class to style as disabled
    faq.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action (navigation)
    });
    
});
