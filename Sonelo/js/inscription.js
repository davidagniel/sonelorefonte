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

    /* === VALIDATION JS === */
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{12,}$/;
    const phoneRegex = /^(06|07)[0-9]{8}$/;

    const password = $("#password");
    const passwordConfirm = $("#passwordConfirm");
    const phone = $("#telephone");
    const email = $("#email");

    /* Mot de passe */
    password.on("input", function() {
        if(!passwordRegex.test(this.value)){
            $(this).addClass("is-invalid").removeClass("is-valid");
        }else{
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
        passwordConfirm.trigger("input");
    });

    /* Confirmation */
    passwordConfirm.on("input", function() {
        if(this.value !== password.val() || this.value === ""){
            $(this).addClass("is-invalid").removeClass("is-valid");
        }else{
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });

    /* Téléphone */
    phone.on("input", function(){
        if(this.value && !phoneRegex.test(this.value)){
            $(this).addClass("is-invalid").removeClass("is-valid");
        }else{
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });

    /* Email existant via AJAX */
    let emailTimeout = null;
    email.on("input", function(){
        clearTimeout(emailTimeout);
        const val = this.value;
        if(!val.includes("@")) return;

        emailTimeout = setTimeout(() => {
            $.post("php/check-email.php", {email: val}, function(res){
                if(res.exists){
                    email.addClass("is-invalid").removeClass("is-valid");
                }else{
                    email.removeClass("is-invalid").addClass("is-valid");
                }
            },"json");
        }, 500);
    });

    /* Submit */
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

 




