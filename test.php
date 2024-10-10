<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaboration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #teamMembersInputs {
            display: none; /* Hide team member inputs initially */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Collaboration Form</h2>
    <form id="collaborationForm">
        <!-- Yes/No Question -->
        <div class="form-group">
            <label>Do you want to avail your idea for other users to collaborate with you?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="collaboration" id="collabYes" value="yes" required>
                <label class="form-check-label" for="collabYes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="collaboration" id="collabNo" value="no">
                <label class="form-check-label" for="collabNo">No</label>
            </div>
        </div>

        <!-- Individual or Team -->
        <div class="form-group">
            <label>Is this work individual or a team?</label>
            <select class="form-control" id="workType" required>
                <option value="">Select...</option>
                <option value="individual">Individual</option>
                <option value="team">Team</option>
            </select>
        </div>

        <!-- Team Members Input -->
        <div class="form-group" id="teamMembersDropdown" style="display: none;">
            <label>Number of team members:</label>
            <select class="form-control" id="numberOfMembers">
                <option value="">Select...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        
        <div class="form-group" id="teamMembersInputs"></div>

        <!-- Kenha Staff Question -->
        <div class="form-group">
            <label>Are you a Kenha staff?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kenhaStaff" id="kenhaYes" value="yes" required>
                <label class="form-check-label" for="kenhaYes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kenhaStaff" id="kenhaNo" value="no">
                <label class="form-check-label" for="kenhaNo">No</label>
            </div>
        </div>

        <!-- Email Input -->
        <div class="form-group" id="workEmailGroup">
            <label for="workEmail">Work Email:</label>
            <input type="email" class="form-control" id="workEmail" required>
        </div>
        
        <div class="form-group" id="personalEmailGroup" style="display: none;">
            <label for="personalEmail">Personal Email:</label>
            <input type="email" class="form-control" id="personalEmail">
        </div>

        <!-- Designation Dropdown -->
        <div class="form-group">
            <label for="designation">Designation:</label>
            <select class="form-control" id="designation" required>
                <option value="">Select...</option>
                <option value="manager">Manager</option>
                <option value="engineer">Engineer</option>
                <option value="analyst">Analyst</option>
                <option value="staff">Staff</option>
                <option value="other">Other</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
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
        $('#numberOfMembers').change(function() {
            const numberOfMembers = parseInt($(this).val());
            $('#teamMembersInputs').empty(); // Clear previous inputs
            if (numberOfMembers) {
                for (let i = 1; i <= numberOfMembers; i++) {
                    $('#teamMembersInputs').append(`
                        <div class="form-group">
                            <label for="member${i}">Team Member ${i} Name:</label>
                            <input type="text" class="form-control" id="member${i}" required>
                        </div>
                    `);
                }
                $('#teamMembersInputs').show(); // Show team member inputs
            } else {
                $('#teamMembersInputs').hide(); // Hide if no valid selection
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
    });
</script>

</body>
</html>
