document.addEventListener("DOMContentLoaded", function () {

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Login Validation
    const loginForm = document.getElementById("loginForm");

    if (loginForm) {

        loginForm.addEventListener("submit", function (e) {

            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value.trim();

            if (email === "") {
                alert("الرجاء إدخال البريد الإلكتروني");
                e.preventDefault();
                return;
            }

            if (!emailPattern.test(email)) {
                alert("الرجاء إدخال بريد إلكتروني صحيح");
                e.preventDefault();
                return;
            }

            if (password === "") {
                alert("الرجاء إدخال كلمة المرور");
                e.preventDefault();
                return;
            }

            if (password.length < 6) {
                alert("كلمة المرور يجب أن تكون 6 أحرف على الأقل");
                e.preventDefault();
                return;
            }

        });

    }


    // Register Validation
    const registerForm = document.getElementById("registerForm");

    if (registerForm) {

        registerForm.addEventListener("submit", function (e) {

            const username = document.getElementById("username").value.trim();
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value.trim();
            const confirmPassword = document.getElementById("confirm_password").value.trim();

            if (username === "") {
                alert("الرجاء إدخال اسم المستخدم");
                e.preventDefault();
                return;
            }

            if (username.length < 3) {
                alert("اسم المستخدم يجب أن يكون 3 أحرف على الأقل");
                e.preventDefault();
                return;
            }

            if (email === "") {
                alert("الرجاء إدخال البريد الإلكتروني");
                e.preventDefault();
                return;
            }

            if (!emailPattern.test(email)) {
                alert("الرجاء إدخال بريد إلكتروني صحيح");
                e.preventDefault();
                return;
            }

            if (password === "") {
                alert("الرجاء إدخال كلمة المرور");
                e.preventDefault();
                return;
            }

            if (password.length < 6) {
                alert("كلمة المرور يجب أن تكون 6 أحرف على الأقل");
                e.preventDefault();
                return;
            }

            if (confirmPassword === "") {
                alert("الرجاء تأكيد كلمة المرور");
                e.preventDefault();
                return;
            }

            if (password !== confirmPassword) {
                alert("كلمة المرور وتأكيد كلمة المرور غير متطابقتين");
                e.preventDefault();
                return;
            }

        });

    }

});