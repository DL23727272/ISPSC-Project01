function Login() {
    var username = $("#username").val().trim();
    var password = $("#userPassword").val().trim();

    if (username === "" || password === "") {
        Swal.fire({
            icon: "warning",
            title: "Missing Fields",
            text: "Please fill in both fields.",
            timer: 2000,
            showConfirmButton: false
        });
        return;
    }

    $.ajax({
        type: "POST",
        url: "backend/loginProcess.php",
        data: { userLoginName: username, userLoginPassword: password },
        dataType: "json",
        success: function(response) {
            if (response.status === "success") {

              sessionStorage.setItem("userID", response.userID);
              sessionStorage.setItem("username", response.username);
              sessionStorage.setItem("userType", response.type);
              
                Swal.fire({
                    icon: "success",
                    title: "Login Successful!",
                    text: "Redirecting...",
                    timer: 2000,
                    showConfirmButton: false
                });

                setTimeout(function() {
                  if (response.type === 'admin') {
                      window.location.href = 'admin.php'; 
                  } else {
                      window.location.href = 'index.php'; 
                  }
                }, 2000);
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Login Failed",
                    text: response.message,
                    timer: 2000,
                    showConfirmButton: false
                });
            }
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error: ", xhr.responseText);
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Something went wrong. Please try again.",
                timer: 2000,
                showConfirmButton: false
            });
        }
    });
}



function Signup() {
    var username = $("#signupUsername").val().trim();
    var password = $("#signupPassword").val().trim();
    var confirmPassword = $("#confirmPassword").val().trim();

    if (username === "" || password === "" || confirmPassword === "") {
        Swal.fire("Missing Fields", "Please fill in all fields.", "warning");
        return;
    }

    if (password.length < 8) {
        Swal.fire("Weak Password", "Password must be at least 8 characters long.", "error");
        return;
    }

    if (password !== confirmPassword) {
        Swal.fire("Passwords Do Not Match", "Please confirm your password correctly.", "error");
        return;
    }

    $.ajax({
        type: "POST",
        url: "backend/signupProcess.php",
        data: {
            signupUsername: username, 
            signupPassword: password  
        },
        dataType: "json",
        success: function(response) {
            Swal.fire(response.message, "", response.status === "success" ? "success" : "error");
            if (response.status === "success") {
                setTimeout(() => { window.location.href = "index.php"; }, 2000);
            }
        },
        error: function(xhr) {
            console.error("AJAX Error:", xhr.responseText);
            Swal.fire("Error", "Something went wrong. Please try again.", "error");
        }
    });
}