<section class="logins">
        <div class="logins__form-box">
            <div class="logins__button-box">
                <div id="btn"></div>
                <button type="button" class="logins__toggle-btn" onclick="login()">Log-In</button>
                <button type="button" class="logins__toggle-btn" onclick="register()">Register</button>
            </div>
        
        <form action="login" method="POST" id ="login" class="logins__input-group" enctype="multipart/form-data">
            <input type="email" class="logins__input-field" name="e-mail" id="email" placeholder="User Id" required>
            <input type="password" class="logins__input-field" name="password" id="password" placeholder="Enter Password" required>
            <input type="checkbox" class="logins__checkbox" name="check-box" id="check-box"><span>Remember Password</span>
            <button type="submit" name="login" class="logins__submit-btn">Login-in</button>
        </form>
        <form action="registration" method="POST" id="register" name="registration" class="logins__input-group"  enctype="multipart/form-data">
        <input type="text" class="logins__input-field" name="u_name" id="u_name" placeholder="User Name" required>
            <input type="email" class="logins__input-field" name="u_e-mail" id="email" placeholder="User Id" required>
            <input type="password" class="logins__input-field" name="password" id="password" placeholder="Enter Password" required>
            <input type="password" class="logins__input-field" name="re_password" id="password" placeholder="Confirm Password" required>
            <input type="checkbox" class="logins__checkbox" name="check-box" id="check-box"><span>Accept all terms and conditions</span>
            <button type="submit" class="logins__submit-btn" name="registration">Register</button>
        </form>
        </div>
    
</section>