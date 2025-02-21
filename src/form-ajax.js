"use strict";
window.addEventListener(
    "load",
    function () {
        // Get the messages div.
        var formMessages = $("#form-messages");

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName("needs-validation");
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener(
                "submit",
                function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add("was-validated");

                    if (form.checkValidity() === true) {
                        event.preventDefault();

                        // To reset the appearance of the form
                        form.classList.remove("was-validated");

                        // Submit the form using AJAX
                        $.ajax({
                            type: $(form).attr("method"),
                            url: $(form).attr("action"),
                            data: new FormData(form),
                            processData: false,
                            contentType: false,
                            beforeSend: function () {
                                // Let's show a message to the user
                                $("#hold-on-a-sec").addClass("is-loading");
                            },
                            success: function (response) {
                                // Parse the JSON response if it's a string
                                const result =
                                    typeof response === "string"
                                        ? JSON.parse(response)
                                        : response;

                                // Make sure that the formMessages div has the 'success' class.
                                $(form).removeClass("was-validated");
                                $(formMessages).removeClass("error");
                                $(formMessages).addClass("success");

                                // Set the message text.
                                $(formMessages).text(result.message);

                                setTimeout(function () {
                                    $(formMessages).remove();

                                    // Clear the form.
                                    $("#nombre").val("");
                                    $("#telefono").val("");
                                    $("#correo").val("");
                                    $("#idioma-nativo").val("");
                                    $("#idioma-meta").val("");
                                    $("#userfile").val("");
                                    $("#fecha-entrega").val("");
                                    $("#comentarios").val("");
                                }, 5000);
                            },
                            error: function (xhr, status, error) {
                                // Make sure that the formMessages div has the 'error' class.
                                $("#hold-on-a-sec").removeClass("is-loading");
                                $(formMessages).removeClass("success");
                                $(formMessages).addClass("error");

                                // Parse the JSON response if it's a string
                                let errorMessage;
                                try {
                                    const result =
                                        typeof xhr.responseText === "string"
                                            ? JSON.parse(xhr.responseText)
                                            : xhr.responseText;
                                    errorMessage = result.message;
                                } catch (e) {
                                    errorMessage =
                                        "Lo sentimos, ha ocurrido un error. Por favor, inténtelo de nuevo.";
                                }

                                // Set the message text.
                                $(formMessages).text(errorMessage);

                                setTimeout(function () {
                                    $(formMessages).remove();
                                }, 5000);
                            },
                            complete: function () {
                                $("#hold-on-a-sec").removeClass("is-loading");
                            },
                        });
                    }
                },
                false
            );
        });
    },
    false
);
