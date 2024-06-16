document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get the username and password from the form
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    
    // Check the credentials
    if (username === 'Nanda' && password === '12345') {
        // Redirect to the admin dashboard
        window.location.href = 'admin_dashboard.html';
    } else {
        // Show an error message
        alert('Invalid username or password');
    }
});
