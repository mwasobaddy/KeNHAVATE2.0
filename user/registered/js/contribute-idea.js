// Elements used for handling loader and content visibility
const contributeIdeaLoader = document.querySelector('.contribute-idea-loader');
const contributeIdeaContent = document.querySelector('.contribute-idea-content');

if (document.readyState === 'loading') {
    // Document is still loading
    if (contributeIdeaLoader) contributeIdeaLoader.classList.add('active');
    if (contributeIdeaContent) contributeIdeaContent.classList.remove('active');
}

document.addEventListener("DOMContentLoaded", function() {

    
    // Document is already loaded, so execute the function after a 5-second delay
    setTimeout(() => {
        if (contributeIdeaLoader) contributeIdeaLoader.classList.remove('active');
        if (contributeIdeaContent) contributeIdeaContent.classList.add('active');
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
    



















    
    // Show team member dropdown based on work type
    $('#workType').change(function() {
        if ($(this).val() === 'team') {
            $('#teamMembersDropdown').show();
        } else {
            $('#teamMembersDropdown').hide();
            $('#teamMembersInputs').empty().hide(); // Clear team member inputs
        }
    });

    // Show inputs for number of team members
    $('#teamMembersInputsHeader').hide(); // Hide if no valid selection
    $('#numberOfMembers').change(function() {
        const numberOfMembers = parseInt($(this).val());
        $('#teamMembersInputs').empty(); // Clear previous inputs
        if (numberOfMembers) {
            for (let i = 1; i <= numberOfMembers; i++) {
                $('#teamMembersInputs').append(`
                    <div class="form-group mb-3">
                        <label for="member${i}">Team Member ${i} Email:</label>
                        <input type="email" class="form-control" id="member${i}" required>
                    </div>
                `);
            }
            $('#teamMembersInputs').show(); // Show team member inputs
            $('#teamMembersInputsHeader').show(); // Hide if no valid selection
        } else {
            $('#teamMembersInputs').hide(); // Hide if no valid selection
            $('#teamMembersInputsHeader').hide(); // Hide if no valid selection
        }
    });

    // Show/Hide personal email based on Kenha staff
    $('input[name="kenhaStaff"]').change(function() {
        if ($('#kenhaNo').is(':checked')) {
            $('#workEmailGroup').hide();
            $('#personalEmailGroup').show();
        } else {
            $('#workEmailGroup').show();
            $('#personalEmailGroup').hide();
        }
    });


















    function updateCharacterCount(inputId, maxCount, countId) {
        const inputField = document.getElementById(inputId);
        const characterCountSpan = document.getElementById(countId);
        
        // Get the value of the input
        const text = inputField.value;
        
        // Count characters excluding spaces
        const characterCount = text.replace(/\s/g, '').length;
        const remainingCharacters = maxCount - characterCount;
        
        // Update the count display
        characterCountSpan.textContent = Math.max(remainingCharacters, 0);
        
        // If we've exceeded the limit, trim the input
        if (remainingCharacters < 0) {
            let trimmedText = '';
            let count = 0;
            for (let char of text) {
                if (!/\s/.test(char)) {
                    if (count >= maxCount) break;
                    count++;
                }
                trimmedText += char;
            }
            inputField.value = trimmedText;
        }
    }
    // Expose the function to the global scope
    window.updateCharacterCount = updateCharacterCount;
    
});
