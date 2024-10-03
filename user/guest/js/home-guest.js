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

    
    /*

    
    const eventSource = new EventSource("/KENHAVATE/server-sent-events");

    //sse for updating the carousel when an admin posts a challenge
    eventSource.onmessage = function(event) {
        const challenges = JSON.parse(event.data);
        updateCarousel(challenges);
    };

    */

    //function to get date and format it
    function parseDeadline(deadlineStr) {
        const formattedDateStr = moment(deadlineStr, "ddd, MMMM DD, YYYY - hh:mm A").toDate();
        return formattedDateStr;
    }

    //function to update carousel on load and when there a new challenge
    function updateCarousel(challenges) {
        

        const carouselInner = document.querySelector('#carouselExampleDark .carousel-inner');
        const carouselIndicators = document.querySelector('#carouselExampleDark .carousel-indicators');

        // Clear existing items and indicators
        carouselInner.innerHTML = '';
        carouselIndicators.innerHTML = '';

        challenges.forEach((challenge, index) => {
            // Create carousel item

            const deadlineDate = parseDeadline(challenge.deadline);
            const now = new Date();

            const status = now > deadlineDate ? "passed" : "active";
            const statusText = status === "active" ? "<i class='bi bi-circle-fill'></i> Active" : "<i class='bi bi-circle-fill'></i> Expired";

            const itemDiv = document.createElement('div');
            itemDiv.className = `carousel-item ${index === 0 ? 'active' : ''}`;

            // Add content to the carousel item
            itemDiv.innerHTML = `
                <div class="card">
                    <div class="d-flex" style="height: 260px;">
                        <img src="image-library-KeNHA/challenge.jpg" class="card-img-top card-image" style="object-fit: cover" alt="Challenge Image">
                    </div>
                    <div class="card-body">
                        <strong class="justify-content-end d-flex text-${status === "active" ? "success" : "danger"}" style="gap: 6px;"> ${statusText}</strong>
                        <h5 class="card-title d-flex justify-content-center align-items-center" style="height: fit-content; gap: 6px;"><i class="fas fa-trophy"></i> ${challenge.title}</h5>
                        <p class="card-text"><i class="fas fa-info-circle"></i> Challenge Description: ${challenge.description}</p>
                        
                        <div class="mt-3 d-flex flex-column align-items-center" style="gap: 6px;">
                            <p class="btn btn-danger mb-0"><i class="bi bi-exclamation-triangle-fill"></i> login to download</p>
                            <a  class="btn btn-primary"><i class="fas fa-download"></i>Challenge Guidelines</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                        <div class="col-md-6">
                            <p class="text-${status === "active" ? "success" : "danger"}"><i class="fas fa-calendar-day"></i> <strong>Day Challenge Started:</strong> ${challenge.day_uploaded}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-${status === "active" ? "success" : "danger"}"><i class="fas fa-calendar-alt"></i> <strong>Day Challenge Expected to End:</strong> ${challenge.deadline}</p>
                        </div>
                        </div>
                    </div>
                </div>
            `;

            // Add the item to the carousel
            carouselInner.appendChild(itemDiv);

            // Create and add the indicator
            const indicator = document.createElement('button');
            indicator.type = "button";
            indicator.dataset.bsTarget = "#carouselExampleDark";
            indicator.dataset.bsSlideTo = index;
            indicator.className = `${index === 0 ? 'active' : ''}`;
            indicator.ariaCurrent = index === 0 ? "true" : null;
            indicator.ariaLabel = `Slide ${index + 1}`;

            carouselIndicators.appendChild(indicator);
        });
    }













    // animate count on scroll from the database
    const stats = document.querySelectorAll('.stat-number');

    const observerOptions = {
        threshold: 0.5
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const targetElement = entry.target;
            const targetValue = parseInt(targetElement.getAttribute('data-target'));
            
            if (entry.isIntersecting) {
                animateValue(targetElement, 0, targetValue, 2000);
            } else {
                // Reset value to 0 when not visible
                targetElement.innerHTML = '0';
            }
        });
    }, observerOptions);
    
    stats.forEach(stat => observer.observe(stat));
    
    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }














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














    // disable link that I am on the current page
    var home = document.getElementById('home');
    home.classList.add('disabled-link'); // Add custom class to style as disabled
    home.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action (navigation)
    });
    
    
});
