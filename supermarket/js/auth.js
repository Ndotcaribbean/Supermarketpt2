// Authentication and Form Validation Script

document.addEventListener('DOMContentLoaded', function() {
    // Signup Form Validation
    const signupForm = document.querySelector('form[method="post"]');
    if (signupForm) {
        signupForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Get form inputs
            const username = document.getElementById('username');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirm-password');
            
            // Validation flags
            let isValid = true;
            
            // Clear previous error messages
            clearErrors();
            
            // Username validation
            if (username && username.value.trim() === '') {
                displayError(username, 'Username cannot be empty');
                isValid = false;
            } else if (username && username.value.length < 3) {
                displayError(username, 'Username must be at least 3 characters long');
                isValid = false;
            }
            
            // Email validation
            if (email && email.value.trim() === '') {
                displayError(email, 'Email cannot be empty');
                isValid = false;
            } else if (email && !isValidEmail(email.value)) {
                displayError(email, 'Please enter a valid email address');
                isValid = false;
            }
            
            // Password validation
            if (password && password.value.trim() === '') {
                displayError(password, 'Password cannot be empty');
                isValid = false;
            } else if (password && password.value.length < 8) {
                displayError(password, 'Password must be at least 8 characters long');
                isValid = false;
            }
            
            // Confirm password validation
            if (confirmPassword && (confirmPassword.value !== password.value)) {
                displayError(confirmPassword, 'Passwords do not match');
                isValid = false;
            }
            
            // If all validations pass, proceed with form submission
            if (isValid) {
                // Simulate form submission (replace with actual backend logic)
                handleFormSubmission(signupForm);
            }
        });
    }
    
    // Login Form Validation
    const loginForm = document.querySelector('form[method="post"]');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Get form inputs
            const username = document.getElementById('username');
            const password = document.getElementById('password');
            
            // Validation flags
            let isValid = true;
            
            // Clear previous error messages
            clearErrors();
            
            // Username validation
            if (username.value.trim() === '') {
                displayError(username, 'Username or email cannot be empty');
                isValid = false;
            }
            
            // Password validation
            if (password.value.trim() === '') {
                displayError(password, 'Password cannot be empty');
                isValid = false;
            }
            
            // If all validations pass, proceed with form submission
            if (isValid) {
                // Simulate form submission (replace with actual backend logic)
                handleFormSubmission(loginForm);
            }
        });
    }
    
    // Helper function to display error messages
    function displayError(inputElement, message) {
        // Create error message element
        const errorMsg = document.createElement('div');
        errorMsg.className = 'error-message';
        errorMsg.style.color = 'red';
        errorMsg.style.fontSize = '0.8em';
        errorMsg.style.marginTop = '5px';
        errorMsg.textContent = message;
        
        // Insert error message after the input
        inputElement.parentNode.insertBefore(errorMsg, inputElement.nextSibling);
        
        // Highlight input field
        inputElement.style.borderColor = 'red';
    }
    
    // Helper function to clear previous error messages
    function clearErrors() {
        // Remove all existing error messages
        const existingErrors = document.querySelectorAll('.error-message');
        existingErrors.forEach(error => error.remove());
        
        // Reset input field styles
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.style.borderColor = '';
        });
    }
    
    // Email validation helper function
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Form submission handler (simulated)
    function handleFormSubmission(form) {
        // In a real-world scenario, this would send data to a backend
        console.log('Form submitted:', form);
        
        // Simulate successful submission
        alert('Submission successful! (Note: This is a simulation)');
        
        // Optional: Redirect to another page
        // window.location.href = 'dashboard.html';
    }
    
    // Forgot Password Link Handler
    const forgotPasswordLink = document.querySelector('.forgot-password a');
    if (forgotPasswordLink) {
        forgotPasswordLink.addEventListener('click', function(event) {
            event.preventDefault();
            alert('Password reset functionality will be implemented in a future update.');
        });
    }
});