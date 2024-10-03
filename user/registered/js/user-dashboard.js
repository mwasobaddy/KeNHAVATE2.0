// Elements used for handling loader and content visibility
const homeLoader = document.querySelector('.home-loader');
const homeContent = document.querySelector('.home-content');

if (document.readyState === 'loading') {
    // Document is still loading
    if (homeLoader) homeLoader.classList.add('active');
    if (homeContent) homeContent.classList.remove('active');
}

document.addEventListener("DOMContentLoaded", function() {

    
    // Document is already loaded, so execute the function after a 5-second delay
    setTimeout(() => {
        if (homeLoader) homeLoader.classList.remove('active');
        if (homeContent) homeContent.classList.add('active');
    }, 5000); // 5000 milliseconds = 5 seconds
    


    













    // show and hide side bar
    const sidebar = document.getElementById('sidebar');
    const toggleBtns = document.querySelectorAll('[id^="sidebarToggle"]');

    toggleBtns.forEach(toggleBtn => {
        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });
    });

    // Close sidebar when clicking outside of it
    document.addEventListener('click', function(event) {
        const isClickInsideSidebar = sidebar.contains(event.target);
        const isClickOnToggleBtn = Array.from(toggleBtns).some(btn => btn.contains(event.target));

        if (!isClickInsideSidebar && !isClickOnToggleBtn && sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
        }
    });
    


    













    // search pages 
    $('input[name="search"]').on('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Prevent the default action

            const query = $(this).val().toLowerCase(); // Get the search input value

            // Perform AJAX request to PHP script
            $.ajax({
                url: 'search.php', // Your PHP search script
                type: 'POST',
                data: { query: query },
                success: function(data) {
                    // Redirect to the found page if there's a valid URL in the response
                    if (data) {
                        window.location.href = data; // Redirect to the found URL
                    } else {
                        alert("No results found.");
                    }
                },
                error: function() {
                    alert('An error has occurred.');
                }
            });
        }
    });
    


    













    /* disable link that I am on the current page
    var home = document.getElementById('home');
    home.classList.add('disabled-link'); // Add custom class to style as disabled
    home.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action (navigation)
    });*/
    


    













    
    


    













    //show submissions tips
    const tips = [
        {
            title: "Be Specific",
            content: "Clearly define the problem your idea solves and how it solves it. The more specific you are, the easier it is for others to understand and evaluate your idea."
        },
        {
            title: "Consider Feasibility",
            content: "Think about how your idea could be implemented. Consider potential challenges and how they might be overcome. This shows that you've thought your idea through."
        },
        {
            title: "Highlight the Impact",
            content: "Explain the potential benefits of your idea. How will it improve processes, save resources, or create value? Quantify the impact if possible."
        },
        {
            title: "Use Clear Language",
            content: "Avoid jargon and complicated terms. Present your idea in a way that anyone can understand, regardless of their background or expertise."
        },
        {
            title: "Embrace Feedback",
            content: "Be open to constructive criticism. Use feedback to refine and improve your ideas. Sometimes, the best ideas come from collaborative efforts."
        }
    ];

    let currentTipIndex = 0;

    function updateTip() {
        const tipCard = document.getElementById('tipCard');
        tipCard.classList.add('fade-out');

        setTimeout(() => {
            const tipTitle = document.getElementById('tipTitle');
            const tipContent = document.getElementById('tipContent');

            currentTipIndex = (currentTipIndex + 1) % tips.length;
            tipTitle.textContent = tips[currentTipIndex].title;
            tipContent.textContent = tips[currentTipIndex].content;

            tipCard.classList.remove('fade-out');
        }, 500);
    }

    // Initial tip display
    updateTip();

    // Rotate tips every 10 seconds
    setInterval(updateTip, 10000);
    


    













    // pagination swiper.js
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 10000,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
    });
    
    
});
