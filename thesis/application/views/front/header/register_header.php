<li class="not-login">
    <a href="#Signup" class="btn btn-primary signup page-toggle">Sign Up</a>
</li>
<li class="dropdown not-login">
    <a href="#" class="btn btn-primary dropdown-toggle login" id="login-drop" data-toggle="dropdown">
        Member Login
    </a>
    <div class="dropdown-menu" role="menu" aria-labelledby="login-drop">
        <form class="form-inline" id="login-form-drop" role="menuitem">                    
            <p>Username<span style="margin-left: 44px;">Password</span></p>
            <div class="input-append">
                <input type="text" class="input-small email placeholder" id="front-username"> 
                <input type="password" class="input-small placeholder password" id="front-password"> 
                <input type="button" class="btn btn-primary login" value="Login" id="login-front">
            </div>
        </form>
        <span class="divider" role="menuitem"></span>
        <p class="text-error" id="login-error"></p>
        <small role="menuitem">Not a member? <a href="#" class="signup">Sign up now!</a></small>
        <small role="menuitem"><a href="#">Forgotten password?</a></small>
    </div>
</li>