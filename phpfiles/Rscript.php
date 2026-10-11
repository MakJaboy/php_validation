
    <script>
        $(document).ready(function() {
            $('.toggle-password').on('click', function() {
                let targetId = $(this).data('target');
                let input = $('#' + targetId);
                if (input.attr('type') === 'password') {
                    input.attr('type', 'text');
                    $(this).text('Hide');
                } else {
                    input.attr('type', 'password');
                    $(this).text('Show');
                }
            });

            $('#registerForm').on('submit', function(e) {
                e.preventDefault();
                $('.error-msg').text('').css('color', '#d9534f');
                
                let fullName = $('#fullName').val().trim();
                let email = $('#email').val().trim();
                let password = $('#password').val().trim();
                let confirmPassword = $('#confirmPassword').val().trim();
                let isValid = true;

                if (fullName === '') {
                    $('#fullNameError').text('Full name is required.');
                    isValid = false;
                }

                if (email === '') {
                    $('#emailError').text('Email is required.');
                    isValid = false;
                } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    $('#emailError').text('Please enter a valid email address.');
                    isValid = false;
                }

                if (password === '') {
                    $('#passwordError').text('Password is required.');
                    isValid = false;
                } else if (password.length < 6) {
                    $('#passwordError').text('Password must be at least 6 characters.');
                    isValid = false;
                }

                if (confirmPassword === '') {
                    $('#confirmPasswordError').text('Please confirm your password.');
                    isValid = false;
                } else if (password !== confirmPassword) {
                    $('#confirmPasswordError').text('Passwords do not match.');
                    isValid = false;
                }

                if (isValid) {
                    $('#formError').text('Registration successful! Redirecting to login...').css('color', '#28a745');
                    setTimeout(function() {
                        window.location.href = 'login.php';
                    }, 1500);
                }
            });
        });
    </script>