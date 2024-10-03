// Elements used for handling loader and content visibility
const signupLoader = document.querySelector('.signup-loader');
const signupContent = document.querySelector('.signup-content');

if (document.readyState === 'loading') {
    // Document is still loading
    if (signupLoader) signupLoader.classList.add('active');
    if (signupContent) signupContent.classList.remove('active');
}

document.addEventListener('DOMContentLoaded', function() {
    const directorateSelect = document.getElementById('directorate');
    const departmentSelect = document.getElementById('department');

    
    // Document is already loaded, so execute the function after a 5-second delay
    setTimeout(() => {
        if (signupLoader) signupLoader.classList.remove('active');
        if (signupContent) signupContent.classList.add('active');
    }, 5000); // 5000 milliseconds = 5 seconds

    // Department options grouped by directorate
    const departments = {
        'PRC': [
            { value: 'RI&KM', text: 'Research, Innovation & Knowledge Management' },
            { value: 'QA', text: 'Quality Assurance' },
            { value: 'PRM', text: 'Planning & Road Management' },
            { value: 'SBP', text: 'Strategy, Budget & Planning' },
            { value: 'ERM&BPR', text: 'ERM & BPR' },
            { value: 'CC', text: 'Corporate Communications' }
        ],
        'HDS': [
            { value: 'HS', text: 'Highway Safety' },
            { value: 'HDET', text: 'Highway Design & Engineer Training' },
            { value: 'SD', text: 'Structure Design' },
            { value: 'ESS', text: 'Environment & Social Safeguard' },
            { value: 'Surv', text: 'Survey' }
        ],
        'Development': [
            { value: 'C&IS', text: 'Construction & in-house Supervision' },
            { value: 'WBDP', text: 'World Bank Development Projects' },
            { value: 'EDP', text: 'Europe Development Projects' },
            { value: 'AFDBDP', text: 'AFDB Development Projects' },
            { value: 'ADP', text: 'Asia Development Projects' },
            { value: 'SC', text: 'Structures Constructions' },
            { value: 'PR', text: 'Project Reporting' }
        ],
        'Maintenance': [
            { value: 'CM', text: 'Corridor Maintenance' },
            { value: 'RO', text: 'Region Offices' },
            { value: 'ALC', text: 'Axle Load Control' },
            { value: 'BM', text: 'Bridge Maintenance' },
            { value: 'RRCS', text: 'Road Reserve Control Section' }
        ],
        'PPP': [
            { value: 'PPPP', text: 'PPP Preparatory' },
            { value: 'PPPC', text: 'PPP Constructions' },
            { value: 'PPPO&M', text: 'PPP Operations & Maintenance' }
        ],
        'CS': [
            { value: 'F&A', text: 'Finance & Accounts' },
            { value: 'HRM', text: 'HR Management' },
            { value: 'ADMIN', text: 'Admin' },
            { value: 'ICT', text: 'Information, Communication & Technology' }
        ],
        'CS&LS': [
            {value: 'DCS&LS', text: 'Directorate of Corporation Secretary & Legal Services'}
        ],
        'AS': [
            {value: 'DAS', text: 'Directorate of Audit Services'}
        ]
    };

    function updateDepartmentOptions(directorate) {
        const options = departments[directorate] || [];

        // Clear existing options
        departmentSelect.innerHTML = '<option value="" disabled selected>Select your department</option>';

        // Populate new options
        options.forEach(dept => {
            const option = document.createElement('option');
            option.value = dept.value;
            option.textContent = dept.text;
            departmentSelect.appendChild(option);
        });
    }

    directorateSelect.addEventListener('change', function() {
        updateDepartmentOptions(directorateSelect.value);
    });

    












    const personalSection = document.querySelector('.personal-section');
    const professionalSection = document.querySelector('.professional-section');
    const firstNameInput = document.getElementById('first-name');
    const otherNamesInput = document.getElementById('other-names');
    const emailInput = document.getElementById('email');
    const mobileNumberInput = document.getElementById('mobile-number');
    const genderInput = document.getElementById('gender');


    const designationInput = document.getElementById('designation');
    const directorateInput = document.getElementById('directorate');
    const departmentInput = document.getElementById('department');
    
    const submitPersonalButton = document.getElementById('submitPersonalButton');
    const backPersonalDetails = document.getElementById('backPersonalDetails');
    const submitProfessionalButton = document.getElementById('submitProfessionalButton');
    const errorMsg = document.getElementById('errorMsg');
    const successMsg = document.getElementById('successMsg');

    let messageTimerId;


    function isValidName(name) {
        // Regular expression for names (2 to 50 letters and spaces)
        const namePattern = /^[a-zA-Z\s]{2,50}$/;
        return namePattern.test(name);
    }
    
    function isValidEmail(email) {
        // Regular expression for validating email format
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }
    
    function isValidKeNHAEmail(email) {
        // Regular expression to check if email ends with '@kenha.co.ke'
        const emailPattern = /@kenha\.co\.ke$/;
        return emailPattern.test(email);
    }
    
    function isValidMobileNumber(number) {
        // Regular expression for 10-digit mobile number
        const numberPattern = /^[0-9]{10}$/;
        return numberPattern.test(number);
    }





    function displayMessage(element, message, duration = 8000) {
        clearTimeout(messageTimerId);
        element.textContent = message;
        element.classList.add('active');
        messageTimerId = setTimeout(() => {
            element.textContent = '';
            element.classList.remove('active');
        }, duration);
    }

    function sendPersonalDetails() {

        if (signupLoader) signupLoader.classList.add('active');

        const firstName = firstNameInput.value.trim();
        const otherNames = otherNamesInput.value.trim();
        const email = emailInput.value.trim();
        const mobileNumber = mobileNumberInput.value.trim();
        const gender = genderInput.value;

        const accountType = 'user';
        const accountStatus = 'active';
        
        var directorate = 'Non-Staff';
        var department = 'Non-Staff';
        var designation = 'Non-Staff';

        const lastLogin = 'N/A';
        
        // Collect all error messages
        let errorMessages = [];
        
        if (!isValidName(firstName)) {
            errorMessages.push('Please enter a valid first name (2-50 characters, letters only)');
        }
        
        if (otherNames && !isValidName(otherNames)) {
            errorMessages.push('Please enter valid other names (2-50 characters, letters only)');
        }
        
        if (!isValidEmail(email)) {
            errorMessages.push('Please enter a valid email address');
        }
        
        if (!isValidMobileNumber(mobileNumber)) {
            errorMessages.push('Please enter a valid 10-digit mobile number');
        }
        
        if (!gender) {
            errorMessages.push('Please select a gender');
        }
        
        // If there are any errors, display them all and return
        if (errorMessages.length > 0) {

            if (signupLoader) signupLoader.classList.remove('active');

            displayMessage(errorMsg, errorMessages.join('<br>'));
            return;
        }
        else{

            if (email.toLowerCase().includes('@kenha.co.ke')) {
                
                if (signupLoader) signupLoader.classList.remove('active');
                
                personalSection.classList.remove('active'); 
                professionalSection.classList.add('active');

                return;
            
            }
            else {

                $.ajax({
                    url: '/KeNHAVATE/post-data?action=signUp',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        firstName: firstName,
                        otherNames: otherNames,
                        email: email,
                        mobileNumber: mobileNumber,
                        gender: gender,
                        accountType: accountType,
                        accountStatus: accountStatus,
                        directorate: directorate,
                        department: department,
                        designation: designation,
                        lastLogin: lastLogin
                    },
                    success: function(response) {
                        if (response.success) {
                
                            if (signupLoader) signupLoader.classList.add('active');

                            // Redirect after 10 seconds
                            setTimeout(function() {
                                personalSection.classList.add('active'); 
                                professionalSection.classList.remove('active');

                                window.location.href = '/KeNHAVATE/auth/user-signin'; // Adjust the URL as needed
                
                                if (signupLoader) signupLoader.classList.remove('active');
                            }, 10000); // 10000 milliseconds = 10 seconds

                            return;
                        }
                        else {
                
                            if (signupLoader) signupLoader.classList.remove('active');

                            displayMessage(errorMsg, response.message || 'An error occurred while processing your request');

                            return;
                        }
                    },
                    error: function(xhr, status, error) {
                        
                        if (signupLoader) signupLoader.classList.remove('active');

                        console.error('AJAX Error:', status, error);
                        console.error('Response Text:', xhr.responseText);  
                        displayMessage(errorMsg, 'An error occurred while submitting your information');

                        return;
                    }
                });
            }
        }
    }

    function sendProfessionalDetails() {
                
        if (signupLoader) signupLoader.classList.add('active');

        const firstName = firstNameInput.value.trim();
        const otherNames = otherNamesInput.value.trim();
        const email = emailInput.value.trim();
        const mobileNumber = mobileNumberInput.value.trim();
        const gender = genderInput.value;
        const directorate = directorateInput.value;
        const department = departmentInput.value;
        const designation = designationInput.value;

        const accountType = 'staff';
        const accountStatus = 'active';
        

        const lastLogin = 'N/A';
        
        // Collect all error messages
        let errorMessages = [];
        
        if (!isValidName(firstName)) {
            errorMessages.push('Please enter a valid first name (2-50 characters, letters only)');
        }
        
        if (otherNames && !isValidName(otherNames)) {
            errorMessages.push('Please enter valid other names (2-50 characters, letters only)');
        }
        
        if (!isValidEmail(email)) {
            errorMessages.push('Please enter a valid email address');
        }
        
        if (!isValidKeNHAEmail(email)) {
            errorMessages.push('Please enter a valid kenha email address');
        }
        
        if (!isValidMobileNumber(mobileNumber)) {
            errorMessages.push('Please enter a valid 10-digit mobile number');
        }
        
        if (!gender) {
            errorMessages.push('Please select a gender');
        }
        
        // If there are any errors, display them all and return
        if (errorMessages.length > 0) {
                
            if (signupLoader) signupLoader.classList.remove('active');

            displayMessage(errorMsg, errorMessages.join('<br>'));
            return;
        }
        else{
            $.ajax({
                url: '/KeNHAVATE/post-data?action=signUp',
                type: 'POST',
                dataType: 'json',
                data: {
                    firstName: firstName,
                    otherNames: otherNames,
                    email: email,
                    mobileNumber: mobileNumber,
                    gender: gender,
                    accountType: accountType,
                    accountStatus: accountStatus,
                    directorate: directorate,
                    department: department,
                    designation: designation,
                    lastLogin: lastLogin
                },
                success: function(response) {
                    if (response.success) {
                
                        if (signupLoader) signupLoader.classList.add('active');
                        
                        // Redirect after 10 seconds
                        setTimeout(function() {
                            personalSection.classList.add('active'); 
                            professionalSection.classList.remove('active');
                            
                            window.location.href = '/KeNHAVATE/auth/user-signin'; // Adjust the URL as needed
                
                            if (signupLoader) signupLoader.classList.remove('active');
                        }, 10000); // 10000 milliseconds = 10 seconds

                        return;
                    }
                    else {
                        
                        if (signupLoader) signupLoader.classList.remove('active');

                        displayMessage(errorMsg, response.message || 'An error occurred while processing your request');

                        return;
                    }
                },
                error: function(xhr, status, error) {
                
                    if (signupLoader) signupLoader.classList.remove('active');

                    console.error('AJAX Error:', status, error);
                    console.error('Response Text:', xhr.responseText);  
                    displayMessage(errorMsg, 'An error occurred while submitting your information');

                    return;
                }
            });
        }
    }

    function backToPersonalDetails(){
        personalSection.classList.add('active'); 
        professionalSection.classList.remove('active');
    }
    


    submitPersonalButton.addEventListener('click', sendPersonalDetails);
    submitProfessionalButton.addEventListener('click', sendProfessionalDetails);
    backPersonalDetails.addEventListener('click', backToPersonalDetails);
});
