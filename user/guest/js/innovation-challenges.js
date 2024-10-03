// Elements used for handling loader and content visibility
const innovationChallengesLoader = document.querySelector('.innovation-challenges-loader');
const innovationChallengesContent = document.querySelector('.innovation-challenges-content');

if (document.readyState === 'loading') {
    // Document is still loading
    if (innovationChallengesLoader) innovationChallengesLoader.classList.add('active');
    if (innovationChallengesContent) innovationChallengesContent.classList.remove('active');
}

document.addEventListener("DOMContentLoaded", function() {

    
    // Document is already loaded, so execute the function after a 5-second delay
    setTimeout(() => {
        if (innovationChallengesLoader) innovationChallengesLoader.classList.remove('active');
        if (innovationChallengesContent) innovationChallengesContent.classList.add('active');
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













    // disable link that I am on the current page
    var innovationChallenges = document.getElementById('innovationChallenges');
    innovationChallenges.classList.add('disabled-link'); // Add custom class to style as disabled
    innovationChallenges.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action (navigation)
    });





























    const challengesGrid = document.getElementById('challenges-grid');
    const pagination = document.getElementById('pagination');
    const statusFilter = document.getElementById('status-filter');
    
    let currentPage = 1;
    let currentStatus = '';



    // Function to display a message when no challenges are available
    function displayNoChallengesMessage() {
        challengesGrid.innerHTML = '<p>No challenges available at the moment.</p>';
    }
    
    // Function to load challenges
    function loadChallenges(page) {
        fetch(`/KeNHAVATE/fetch-data?action=getChallenges&page=${page}`)
        .then(response => response.json())
        .then(data => {
            // Check if challenges array is empty
        
            if (data.challenges.length === 0) {
                // Display a message indicating no challenges are available
                displayNoChallengesMessage();
            } else {
                // Display the challenges and pagination
                displayChallenges(data.challenges);
            }
            displayPagination(data.totalPages, data.currentPage);
    
        })
        .catch(error => console.error('Error:', error));
    }
    
    // Function to filter challenges based on status
    function filterChallenges(challenges) {
        // Get current time
        const now = moment();
    
        return challenges.filter(challenge => {
            // Parse the deadline using Moment.js
            const deadline = moment(challenge.deadline, 'ddd, MMMM D, YYYY - h:mm A');
    
            // Determine the status based on the deadline
            let status;
            if (now.isBefore(deadline)) {
                status = 'active';
            } else {
                status = 'expired';
            }
    
            // Check if the challenge matches the current status filter
            return currentStatus === '' || status === currentStatus;
        });
    }
    
    // Function to display challenges
    function displayChallenges(challenges) {
        // Clear the existing grid content
        challengesGrid.innerHTML = '';
    
        // Filter challenges based on status
        const filteredChallenges = filterChallenges(challenges);
    
        // Iterate over each challenge
        filteredChallenges.forEach(challenge => {
            // Create the challenge card with the appropriate status
            const card = createChallengeCard(challenge);
            challengesGrid.appendChild(card);
        });
    }
    
    // Function to create challenge card
    function createChallengeCard(challenge) {
        const deadline = moment(challenge.deadline, 'ddd, MMMM D, YYYY - h:mm A');
        const now = moment();
        let status;
        if (now.isBefore(deadline)) {
            status = 'active';
        } else {
            status = 'expired';
        }
    
        const card = document.createElement('div');
        card.className = 'col-md-6 col-lg-4 mb-4';
    
        card.innerHTML = `
            <div class="card h-100">
                <div class="card-body p-0 d-flex flex-column">
                    <h5 class="card-title">${escapeHTML(challenge.title)}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Uploaded: ${escapeHTML(challenge.day_uploaded)}
                    </h6>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Deadline: ${escapeHTML(challenge.deadline)}
                    </h6>
                    <p class="card-text" style="flex: 1;">${escapeHTML(challenge.description)}</p>
                    <span class="badge ${getStatusClass(status)}" style="width: fit-content;">
                        ${capitalizeFirstLetter(escapeHTML(status))}
                    </span>
                </div>
            </div>
        `;
    
        return card;
    }
    
    // Function to display pagination
    function displayPagination(totalPages, currentPage) {
        pagination.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            const link = document.createElement('a');
            link.href = '#';
            link.textContent = i;
            if (i === currentPage) {
                link.className = 'active';
            }
            link.addEventListener('click', (e) => {
                e.preventDefault();
                currentPage = i;
                loadChallenges(currentPage);
            });
            pagination.appendChild(link);
        }
    }
    
    // Event listener for status filter
    statusFilter.addEventListener('change', function() {
        currentStatus = this.value;
        loadChallenges(currentPage);
    });
    
    // Helper functions
    function escapeHTML(str) {
        if (typeof str !== 'string') {
            return '';
        }
        return str.replace(/[&<>"']/g, function(match) {
            return {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#39;'
            }[match];
        });
    }
    
    function getStatusClass(status) {
        switch (status) {
            case 'expired': return 'status-expired';
            case 'active': return 'status-active';
            case 'ongoing': return 'status-ongoing';
            default: return '';
        }
    }
    
    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }
    
    // Initial load
    loadChallenges(currentPage);

    // Set an interval to load challenges every 3 minutes (180,000 milliseconds)
    setInterval(() => {
        loadChallenges(currentPage);
    }, 180000); // 3 minutes
    
    
});
