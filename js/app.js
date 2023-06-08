$(document).ready(function() {
    $('#form').submit(function(e) {
        e.preventDefault();

        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var confirmPassword = $('#confirmPassword').val();

        if (email.indexOf("@") === -1) {
            $('#errorMessage').text('Некоректний email!').show();
            return;
        } else if (password !== confirmPassword) {
            $('#errorMessage').text('Паролі не співпадають').show();
            return;
        }

        var data = {
            firstname: firstname,
            lastname: lastname,
            email: email,
            password: password,
            confirmPassword: confirmPassword
        };

        $.ajax({
            url: 'mainFile.php',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#successMessage').text(response.message).show();
                    $('#form').hide();
                    $('#errorMessage').hide();
                } else {
                    $('#errorMessage').text(response.message).show();
                    $('#successMessage').hide();
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
                $('#errorMessage').text('Помилка при відправці запиту').show();
                $('#successMessage').hide();
            }
        });
    });
});
