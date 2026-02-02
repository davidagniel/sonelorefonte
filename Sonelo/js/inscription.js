/* === TOGGLE PASSWORD === */
    function togglePassword(id, btn) {
        const input = document.getElementById(id);
        const icon = btn.querySelector("i");
        if(input.type === "password"){
            input.type = "text";
            icon.className = "bi bi-eye-slash";
        }else{
            input.type = "password";
            icon.className = "bi bi-eye";
        }
    }
    $(document).ready(function () {
  const pwdRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{12,}$/;
    const telRegex = /^(06|07)[0-9]{8}$/;

    let emailValid = false;

    /* ================= EMAIL LIVE CHECK ================= */
    $("#email").on("blur", function () {
        const email = $(this).val();
        if (!email) return;

        $.ajax({
            url: "php/check-email.php",
            method: "POST",
            dataType: "json",
            data: { email: email },
            success: function (res) {
                if (res.exists) {
                    $("#email").addClass("is-invalid").removeClass("is-valid");
                    $("#emailFeedback").text("Email déjà utilisé");
                    emailValid = false;
                } else {
                    $("#email").removeClass("is-invalid").addClass("is-valid");
                    $("#emailFeedback").text("");
                    emailValid = true;
                }
            }
        });
    });

    /* ================= PASSWORD STRENGTH ================= */
    $("#password").on("input", function () {
        if (!pwdRegex.test(this.value)) {
            $(this).addClass("is-invalid").removeClass("is-valid");
            $("#passwordFeedback").text(
                "12 caractères min, majuscule, minuscule, chiffre et caractère spécial"
            );
        } else {
            $(this).removeClass("is-invalid").addClass("is-valid");
            $("#passwordFeedback").text("");
        }
    });

    /* ================= CONFIRM PASSWORD ================= */
    $("#password_confirm").on("input", function () {
        if (this.value !== $("#password").val()) {
            $(this).addClass("is-invalid").removeClass("is-valid");
            $("#confirmFeedback").text("Les mots de passe ne correspondent pas");
        } else {
            $(this).removeClass("is-invalid").addClass("is-valid");
            $("#confirmFeedback").text("");
        }
    });

    /* ================= TELEPHONE ================= */
    $("#telephone").on("input", function () {
        this.value = this.value.replace(/\D/g, "");

        if (!telRegex.test(this.value)) {
            $(this).addClass("is-invalid").removeClass("is-valid");
            $("#telFeedback").text("Numéro invalide (06 ou 07 + 8 chiffres)");
        } else {
            $(this).removeClass("is-invalid").addClass("is-valid");
            $("#telFeedback").text("");
        }
    });

    /* ================= SUBMIT AJAX ================= */
    $("#registerForm").on("submit", function (e) {
        e.preventDefault();

        if (!emailValid ||
            $(".is-invalid").length > 0) {
            alert("Veuillez corriger les erreurs");
            return;
        }

        const formData = new FormData(this);

        $.ajax({
            url: "php/inscription.php",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (res) {
                if (res.success) {
                    alert("Compte créé avec succès 🎉");
                    $("#registerForm")[0].reset();
                    $(".is-valid").removeClass("is-valid");
                } else {
                    alert(res.message);
                }
            },
            error: function () {
                alert("Erreur serveur");
            }
        });
    });

});




