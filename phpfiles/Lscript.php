
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

            $('#loginForm').on('submit', function(e) {
                e.preventDefault();
                $('.error-msg').text('').css('color', '#d9534f');
                
                let email = $('#email').val().trim();
                let password = $('#password').val().trim();
                let isValid = true;

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
                }

                if (isValid) {
                    $('#formError').text('Login successful! Redirecting to dashboard...').css('color', '#28a745');
                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 1500);
                }
            });
        });
    </script>