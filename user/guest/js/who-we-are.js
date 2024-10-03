// Elements used for handling loader and content visibility
const whoWeAreLoader = document.querySelector('.who-we-are-loader');
const whoWeAreContent = document.querySelector('.who-we-are-content');

if (document.readyState === 'loading') {
    // Document is still loading
    if (whoWeAreLoader) whoWeAreLoader.classList.add('active');
    if (whoWeAreContent) whoWeAreContent.classList.remove('active');
}

document.addEventListener("DOMContentLoaded", function() {

    
    // Document is already loaded, so execute the function after a 5-second delay
    setTimeout(() => {
        if (whoWeAreLoader) whoWeAreLoader.classList.remove('active');
        if (whoWeAreContent) whoWeAreContent.classList.add('active');
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
        });
    }, {
        threshold: 0.1 // Adjust as needed for when the animation should trigger
    });
    
    const animate = document.querySelectorAll('.animate');
    animate.forEach((el) => observerOnScroll.observe(el));



    // animate elements on scroll
    const observerOnScrollLeft = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active'); // Ensure 'appear' animation runs when in view
            }
            else{
                entry.target.classList.remove('active');
            }
        });
    }, {
        threshold: 0.1 // Adjust as needed for when the animation should trigger
    });
    
    const animateLeft = document.querySelectorAll('.left');
    animateLeft.forEach((el) => observerOnScrollLeft.observe(el));



    // animate elements on scroll
    const observerOnScrollRight = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active'); // Ensure 'appear' animation runs when in view
            }
            else{
                entry.target.classList.remove('active');
            }
        });
    }, {
        threshold: 0.1 // Adjust as needed for when the animation should trigger
    });
    
    const animateRight = document.querySelectorAll('.right');
    animateRight.forEach((el) => observerOnScrollRight.observe(el));














    // disable link that I am on the current page
    var whoWeAre = document.getElementById('whoWeAre');
    whoWeAre.classList.add('disabled-link'); // Add custom class to style as disabled
    whoWeAre.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action (navigation)
    });
    
});
