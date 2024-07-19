function faiz () {
    const pass = document.getElementById("user-password");
    if(pass.type === "password") {
        pass.type = "text";
    }
    else {
        pass.type = "password";
    }
}

function upperCase () {
    const show = document.getElementById("username");
    show.value = show.value.toUpperCase();
}