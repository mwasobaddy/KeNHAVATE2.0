// Elements used for handling loader and content visibility
const signinLoader = document.querySelector('.signin-loader');
const signinContent = document.querySelector('.signin-content');
    
function validateInput(input) {
    // Remove non-digit characters
    input.value = input.value.replace(/\D/g, '');
}

if (document.readyState === 'loading') {
    // Document is still loading
    if (signinLoader) signinLoader.classList.add('active');
    if (signinContent) signinContent.classList.remove('active');
}

document.addEventListener('DOMContentLoaded', function() {
    const emailSection = document.querySelector('.email-section');
    const otpSection = document.querySelector('.OTP-section');
    const emailInput = document.getElementById('email');
    const emailDisplay = document.getElementById('emailDisplay');
    const sendOtpButton = document.getElementById('sendOtpButton');
    const verifyOtpButton = document.getElementById('verifyOtpButton');
    const backEmailSection = document.getElementById('backEmailSection');
    const resendButton = document.getElementById('resendButton');
    const timerDisplay = document.getElementById('timer');
    const errorMsg = document.getElementById('errorMsg');
    const successMsg = document.getElementById('successMsg');
    const otpInputs = document.querySelectorAll('.otp-input');

    
    // Document is already loaded, so execute the function after a 5-second delay
    setTimeout(() => {
        if (signinLoader) signinLoader.classList.remove('active');
        if (signinContent) signinContent.classList.add('active');
    }, 5000); // 5000 milliseconds = 5 seconds

    let timeLeft = 55;
    let timerId;
    let messageTimerId;

    function startTimer() {
        clearInterval(timerId);
        timeLeft = 55;
        resendButton.style.display = 'none';
        timerId = setInterval(() => {
            if (timeLeft <= 0) {
                clearInterval(timerId);
                timerDisplay.textContent = "Did not recieve OTP?";
                resendButton.style.display = 'inline-block';
            } else {
                timerDisplay.textContent = `Resend OTP in: ${timeLeft} seconds`;
                timeLeft--;
            }
        }, 1000);
    }

    function displayMessage(element, message, duration = 5000) {
        clearTimeout(messageTimerId);
        element.textContent = message;
        element.classList.add('active');
        messageTimerId = setTimeout(() => {
            element.textContent = '';
            element.classList.remove('active');
        }, duration);
    }
    
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        
        if (parts.length === 2) {
            return parts.pop().split(';').shift();
        }
        return null;
    }

    function deleteCookie(name) {
        document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/`;
        document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/; domain=${window.location.hostname}`;
    }

    function clearCookies() {
        deleteCookie('OTPCode');
        deleteCookie('accountType');
        deleteCookie('accountStatus');
    }

    function sendOTP() {

        if (signinLoader) signinLoader.classList.add('active');

        sendOtpButton.disabled = true; // Disable the button
        sendOtpButton.innerHTML = `fetching OTP...`; // Change the button content

        const email = emailInput.value;
        
        if (email && emailInput.checkValidity()) {
            
            $.ajax({
                url: '/KeNHAVATE/fetch-data?action=checkEmail&email=' + encodeURIComponent(email),
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (data.error) {

                        if (signinLoader) signinLoader.classList.remove('active');

                        displayMessage(errorMsg, data.error);

                        sendOtpButton.disabled = false; // Disable the button
                        sendOtpButton.innerHTML = `<i class="bi bi-send"></i> send OTP `; // Change the button content
                        
                        return;
                    }
    
                    var totalRows = data.total; // Total number of rows found

                    if (totalRows === 1) {

                        if (signinLoader) signinLoader.classList.remove('active');

                        otpSection.classList.add('active');
                        emailSection.classList.remove('active');
                        emailDisplay.textContent = email;
                        startTimer();
                        displayMessage(successMsg, `An OTP has been sent to ${email}. Please check your email to proceed.`);

                        sendOtpButton.disabled = false; // Disable the button
                        sendOtpButton.innerHTML = `<i class="bi bi-send"></i> send OTP `; // Change the button content

                        return;
                    }

                    else if (totalRows === 0){

                        if (signinLoader) signinLoader.classList.remove('active');

                        displayMessage(errorMsg, 'Wrong email address!');

                        sendOtpButton.disabled = false; // Disable the button
                        sendOtpButton.innerHTML = `<i class="bi bi-send"></i> send OTP `; // Change the button content

                        return;
                    }
                },
                error: function(xhr, status, error) {
                    
                    if (signinLoader) signinLoader.classList.remove('active');

                    console.error('AJAX Error:', status, error);
                    displayMessage(errorMsg, 'An error occurred while checking the email');

                    sendOtpButton.disabled = false; // Disable the button
                    sendOtpButton.innerHTML = `<i class="bi bi-send"></i> send OTP `; // Change the button content

                    return;
                }
            });
        } 
        else {

            if (signinLoader) signinLoader.classList.remove('active');

            displayMessage(errorMsg, 'Please enter a valid email address');

            sendOtpButton.disabled = false; // Disable the button
            sendOtpButton.innerHTML = `<i class="bi bi-send"></i> send OTP `; // Change the button content

            return;
        }
    }

    function resendOTP() {

        timerDisplay.textContent = `Resending OTP...`;
        resendButton.style.display = 'none';
        const email = emailInput.value;
        
        if (email && emailInput.checkValidity()) {
            
            $.ajax({
                url: '/KeNHAVATE/fetch-data?action=checkEmail&email=' + encodeURIComponent(email),
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (data.error) {
                        displayMessage(errorMsg, data.error);
                        return;
                    }
    
                    var totalRows = data.total; // Total number of rows found
                    
                    if (totalRows === 1) {
                        otpSection.classList.add('active');
                        emailSection.classList.remove('active');
                        emailDisplay.textContent = email;
                        startTimer();
                        displayMessage(successMsg, `An OTP has been resent to ${email}. Please check your email to proceed.`);

                        return;
                    }

                    else if (totalRows === 0){
                        displayMessage(errorMsg, 'Wrong email address!');

                        return;
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    displayMessage(errorMsg, 'An error occurred while checking the email');

                    return;
                }
            });
        } else {
            displayMessage(errorMsg, 'Please enter a valid email address');
            
            return;
        }
    }

    function verifyOTP(e) {
        e.preventDefault();
        const enteredOTP = Array.from(otpInputs).map(input => input.value).join('');
        if (enteredOTP.length === 6) {
            
            const cookieCodeOTP = getCookie('OTPCode');
            const cookieAccountType = getCookie('accountType');
            const cookieAccountStatus = getCookie('accountStatus');

            $.ajax({
                url: '/KeNHAVATE/fetch-data?action=encryptInputOTP&inputOTP=' + encodeURIComponent(enteredOTP),
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(cookieCodeOTP);
                    if (data.error) {
                        displayMessage(errorMsg, data.error);
                        return;
                    }
                    
                    if (data === cookieCodeOTP) {
                        console.log(cookieCodeOTP);
                        if (cookieAccountStatus === 'active') {
                            if (cookieAccountType === 'user' || cookieAccountType === 'staff') {
                                clearCookies() 
                                if (signinLoader) signinLoader.classList.add('active');
                                setTimeout(() => {
                                    window.location.href = '/KeNHAVATE/terms-and-conditions'; // Adjust the URL as needed
                                    signinLoader.classList.remove('active');
                                }, 5000); // 5000 milliseconds = 5 seconds
                                return;
                            }
                            else if (cookieAccountType === 'deputy director') {
                                console.log(cookieAccountType);
                                
                                return;
                            }
                            else if (cookieAccountType === 'subject matter expert') {
                                console.log(cookieAccountType);
                                
                                return;
                            }
                            else if (cookieAccountType === 'super admin') {
                                console.log(cookieAccountType);
                                
                                return;
                            }
                            else {
                                displayMessage(errorMsg, 'You account has a problem. Kindly contact us for fixing!');

                                return;
                            }
                        }
                        else if (cookieAccountStatus === 'suspended') {
                            console.log(cookieAccountStatus);

                            return;
                            
                        }
                        else if (cookieAccountStatus === 'banned') {
                            console.log(cookieAccountStatus);

                            return;
                            
                        }
                        else {
                            displayMessage(errorMsg, 'You account has a problem. Kindly contact us for fixing!');

                            return;
                        }
                    }
                    else {
                        displayMessage(errorMsg, 'The OTP you entered does not match or has expired!');

                        return;
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    displayMessage(errorMsg, 'An error occurred while checking the email');

                    return;
                }
            });
        } else {
            displayMessage(errorMsg, 'Please enter a valid 6-digit OTP');
            
            return;
        }
    }

    function backToEmailSection(){
        otpSection.classList.remove('active');
        emailSection.classList.add('active');
    }

    sendOtpButton.addEventListener('click', sendOTP);
    resendButton.addEventListener('click', resendOTP);
    verifyOtpButton.addEventListener('click', verifyOTP);
    backEmailSection.addEventListener('click', backToEmailSection);

    // Auto-focus next input in OTP field
    otpInputs.forEach((input, index) => {
        input.addEventListener('input', function(e) {
            // Allow only numbers
            this.value = this.value.replace(/[^0-9]/g, '');

            // Allow only one digit
            if (this.value.length > 1) {
                this.value = this.value.slice(0, 1);
            }

            if (this.value.length === 1) {
                if (index < otpInputs.length - 1) {
                    otpInputs[index + 1].focus();
                }
            }
        });

        input.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && !this.value && index > 0) {
                otpInputs[index - 1].focus();
            }
        });

        input.addEventListener('paste', function(e) {
            e.preventDefault();
            const pastedData = e.clipboardData.getData('text').slice(0, 6);
            if (/^\d+$/.test(pastedData)) {
                for (let i = 0; i < pastedData.length && i < otpInputs.length; i++) {
                    otpInputs[i].value = pastedData[i];
                }
                if (pastedData.length === 6) {
                    verifyOtpButton.focus();
                } else {
                    otpInputs[Math.min(pastedData.length, 5)].focus();
                }
            }
        });
    });
    
});