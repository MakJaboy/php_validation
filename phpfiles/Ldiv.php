<div class="container">
        <h1 class="brand-title">Cafetrack</h1>
        <p class="brand-subtitle">Inventory Management System</p>
        <form id="loginForm">
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
            <small class="error-msg" id="formError"></small>
            <button type="submit" class="btn">Login to Dashboard</button>
        </form>
        <p class="link-text">Don't have an account? <a href="register.php">Register here</a></p>
    </div>