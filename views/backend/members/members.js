function validateForm() {
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    var email = document.getElementById("email").value;
    var confirm_email = document.getElementById("confirm_email").value;

    if (password !== confirm_password) {
        alert("Les mots de passe ne correspondent pas.");
        document.getElementById("submitBtn").disabled = true;
        return false;
    }

    if (email !== confirm_email) {
        alert("Les adresses email ne correspondent pas.");
        document.getElementById("submitBtn").disabled = true;
        return false;
    }

    document.getElementById("submitBtn").disabled = false;
    return true;
}

function togglePassword(inputId) {
    var input = document.getElementById(inputId);
    if (input.type === "password") {
        input.type = "text";
    } else {
        input.type = "password";
    }
}

function enableSubmitButton() {
    document.getElementById("submitBtn").disabled = false;
}