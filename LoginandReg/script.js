function showPage(pageId) {
    document.querySelectorAll('.container')
        .forEach(div => div.classList.add('hidden'));
    document.getElementById(pageId).classList.remove('hidden');
}

window.addEventListener('hashchange', () => {
    showPage(location.hash.replace('#', '') || 'home');
});

showPage('home');

function loginValidate() {
    const user = loginUser.value;
    const pass = loginPass.value;

    if (user === "" || pass === "") {
        loginError.textContent = "All fields are required";
        return;
    }
    loginError.textContent = "Login successful";
}

function registerValidate() {
    if (!regUser.value || !regEmail.value ||
        !regPass.value || !regConfirm.value) {
        regError.textContent = "All fields are required";
        return;
    }

    if (regPass.value !== regConfirm.value) {
        regError.textContent = "Passwords do not match";
        return;
    }

    regError.textContent = "Registration successful";
}
