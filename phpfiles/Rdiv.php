<div class="container">
        <h1 class="brand-title">Cafetrack</h1>
        <p class="brand-subtitle">Create Staff Account</p>
        <form id="registerForm">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName">
                <small class="error-msg" id="fullNameError"></small>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email">
                <small class="error-msg" id="emailError"></small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password">
                    <button type="button" class="toggle-password" data-target="password">Show</button>
                </div>
                <small class="error-msg" id="passwordError"></small>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <div class="password-wrapper">
                    <input type="password" id="confirmPassword">
                    <button type="button" class="toggle-password" data-target="confirmPassword">Show</button>
                </div>
                <small class="error-msg" id="confirmPasswordError"></small>
            </div>
            <small class="error-msg" id="formError"></small>
            <button type="submit" class="btn">Register Account</button>
        </form>
        <p class="link-text">Already have an account? <a href="login.php">Login here</a></p>
    </div>