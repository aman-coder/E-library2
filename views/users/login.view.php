<section class="logins">
        <div class="logins__form-box">
            <div class="logins__button-box">
                <div id="btn"></div>
                <button type="button" class="login__toggle-btn" onclick="login()">Log-In</button>
                <button type="button" class="login__toggle-btn" onclick="register()">Register</button>
            </div>
        
        <form action="" id ="login" class="logins__input-group">
            <input type="email" class="login__input-field" name="e-mail" id="email" placeholder="User Id" required>
            <input type="password" class="login__input-field" name="password" id="password" placeholder="Enter Password" required>
            <input type="checkbox" class="login__checkbox" name="check-box" id="check-box"><span>Remember Password</span>
            <button type="submit" class="login__submit-btn">Login-in</button>
        </form>
        <form action="" id="register" class="logins__input-group">
        <input type="text" class="login__input-field" name="name" id="u_name" placeholder="User Name" required>
            <input type="email" class="login__input-field" name="e-mail" id="email" placeholder="User Id" required>
            <input type="password" class="login__input-field" name="password" id="password" placeholder="Enter Password" required>
            <input type="password" class="login__input-field" name="password" id="password" placeholder="Confirm Password" required>
            <input type="checkbox" class="login__checkbox" name="check-box" id="check-box"><span>Accept all terms and conditions</span>
            <button type="submit" class="login__submit-btn">Register</button>
        </form>
        </div>
    
</section>