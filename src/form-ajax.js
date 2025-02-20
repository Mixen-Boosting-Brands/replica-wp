"use strict";
window.addEventListener("load", function () {
    // Get the messages div.
    var formMessages = $("#form-messages");

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName("needs-validation");
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
            "submit",
            function (event) {
                event.preventDefault();

                if (form.checkValidity() === false) {
                    event.stopPropagation();
                    form.classList.add("was-validated");
                    return;
                }

                // Create FormData object to handle file uploads and form data
                var formData = new FormData(form);

                // Submit the form using AJAX
                $.ajax({
                    type: "POST",
                    url: $(form).attr("action"),
                    data: formData,
                    processData: false, // Don't process the data
                    contentType: false, // Don't set content type
                    cache: false, // Don't cache
                    beforeSend: function () {
                        // Show loading indicator
                        $("#hold-on-a-sec").addClass("is-loading");
                    },
                    success: function (response) {
                        // Handle success
                        $(form).removeClass("was-validated");
                        $(formMessages).removeClass("error");
                        $(formMessages).addClass("success");

                        // Set the message text
                        $(formMessages).text(response);
                        console.log(response);

                        // Clear the form after 5 seconds
                        setTimeout(function () {
                            $(formMessages).remove();

                            // Clear all form fields
                            $("#nombre").val("");
                            $("#correo").val("");
                            $("#telefono").val("");
                            $("#idioma-nativo").val("");
                            $("#idioma-meta").val("");
                            $("#userfile").val("");
                            $("#fecha-entrega").val("");
                            $("#comentarios").val("");

                            // Reset file input
                            form.reset();
                        }, 5000);
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        $("#hold-on-a-sec").removeClass("is-loading");
                        $(formMessages).removeClass("success");
                        $(formMessages).addClass("error");

                        // Set error message
                        if (xhr.responseText) {
                            $(formMessages).text(xhr.responseText);
                        } else {
                            $(formMessages).text(
                                "Lo sentimos, ha ocurrido un error. Por favor, inténtelo de nuevo."
                            );
                        }

                        console.error("Error:", status, error);

                        // Clear form after 5 seconds
                        setTimeout(function () {
                            $(formMessages).remove();
                            form.reset();
                        }, 5000);
                    },
                    complete: function () {
                        // Hide loading indicator
                        $("#hold-on-a-sec").removeClass("is-loading");
                    },
                });
            },
            false
        );
    });
});
