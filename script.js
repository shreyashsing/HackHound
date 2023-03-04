function validateLogin() {
    // Get username and password input fields
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
  
    // Check if username and password are valid
    if (username === "exampleUser" && password === "examplePassword") {
      // Redirect to home page or show success message
      window.location.href = "home.html";
    } else {
      // Show error message
      const errorMessage = document.getElementById("error-message");
      errorMessage.innerHTML = "Invalid username or password. Please try again.";
    }
  }
  