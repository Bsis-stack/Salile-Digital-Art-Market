
document.getElementById("logF").addEventListener("submit", function(event) {

    event.preventDefault();

    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    let formData = new FormData();

    formData.append("action", "check_login");
    formData.append("username", username);
    formData.append("password", password);

    fetch("index.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {

        if (data.success) {
            window.location.href = "index.php?action=home";
        } else {
            document.getElementById("res").textContent =
                "Invalid username or password";
        }

    })
    .catch(error => {

        document.getElementById("res").textContent =
            "Login error. Please try again.";

    });

});
