<footer class="contacts_wrap scheme_original">
    <div class="contacts_wrap_inner">
        <div class="content_wrap">
            <div class="logo">
                <a href="index.html">
                    <img src="images/logo_footer.png" class="logo_footer" alt="" width="95" height="90">
                </a>
            </div>
            <div class="contacts_address">
                <div class="about_company">
                    We process it with our heart until it arrives in the hands of consumers who are satisfied with our coffee products.
                    - FOUNDER
                </div>
                <address class="address_right">
                    Phone: 888-456-7890<br>
                    Fax: 889-098-7654
                </address>
                <address class="address_left">
                    Chicago, IL 60606<br>
                    123, New Lenox
                </address>
            </div>
            <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_medium">
                <div class="sc_socials_item">
                    <a href="#" target="_blank" class="social_icons social_twitter">
                        <span class="icon-twitter"></span>
                    </a>
                </div>
                <div class="sc_socials_item">
                    <a href="#" target="_blank" class="social_icons social_facebook">
                        <span class="icon-facebook"></span>
                    </a>
                </div>
                <div class="sc_socials_item">
                    <a href="#" target="_blank" class="social_icons social_gplus">
                        <span class="icon-gplus"></span>
                    </a>
                </div>
                <div class="sc_socials_item">
                    <a href="#" target="_blank" class="social_icons social_linkedin">
                        <span class="icon-linkedin"></span>
                    </a>
                </div>
                <div class="sc_socials_item">
                    <a href="#" target="_blank" class="social_icons social_skype">
                        <span class="icon-skype"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
{{-- <div class="copyright_wrap copyright_style_text  scheme_original">
    <div class="copyright_wrap_inner">
        <div class="content_wrap">
            <div class="copyright_text">
                <a href="#">ThemeRex</a> ?? 2015 All Rights Reserved
                <a href="#">Terms of Use</a> and
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
</div> --}}
</div>
</div>
<div id="popup_registration" class="popup_wrap popup_registration bg_tint_light">
<a href="#" class="popup_close"></a>
<div class="form_wrap">
<form name="registration_form" method="post" class="popup_form registration_form">
    <input type="hidden" name="redirect_to" value="#" />
    <div class="form_left">
        <div class="popup_form_field login_field iconed_field icon-user">
            <input type="text" id="registration_username" name="registration_username" value="" placeholder="User name (login)">
        </div>
        <div class="popup_form_field email_field iconed_field icon-mail">
            <input type="text" id="registration_email" name="registration_email" value="" placeholder="E-mail">
        </div>
        <div class="popup_form_field agree_field">
            <input type="checkbox" value="agree" id="registration_agree" name="registration_agree">
            <label for="registration_agree">I agree with</label>
            <a href="#">Terms &amp; Conditions</a>
        </div>
        <div class="popup_form_field submit_field">
            <input type="submit" class="submit_button" value="Sign Up">
        </div>
    </div>
    <div class="form_right">
        <div class="popup_form_field password_field iconed_field icon-lock">
            <input type="password" id="registration_pwd" name="registration_pwd" value="" placeholder="Password">
        </div>
        <div class="popup_form_field password_field iconed_field icon-lock">
            <input type="password" id="registration_pwd2" name="registration_pwd2" value="" placeholder="Confirm Password">
        </div>
        <div class="popup_form_field description_field">Minimum 6 characters</div>
    </div>
</form>
<div class="result message_block"></div>
</div>
</div>
<div id="popup_login" class="popup_wrap popup_login bg_tint_light">
<a href="#" class="popup_close"></a>
<div class="form_wrap">
<div class="form_left">
    <form action="#" method="post" name="login_form" class="popup_form login_form">
        <input type="hidden" name="redirect_to" value="#">
        <div class="popup_form_field login_field iconed_field icon-user">
            <input type="text" id="log" name="log" value="" placeholder="Login or Email">
        </div>
        <div class="popup_form_field password_field iconed_field icon-lock">
            <input type="password" id="password" name="pwd" value="" placeholder="Password">
        </div>
        <div class="popup_form_field remember_field">
            <a href="#" class="forgot_password">Forgot password?</a>
            <input type="checkbox" value="forever" id="rememberme" name="rememberme">
            <label for="rememberme">Remember me</label>
        </div>
        <div class="popup_form_field submit_field">
            <input type="submit" class="submit_button" value="Login">
        </div>
    </form>
</div>
<div class="form_right">
    <div class="login_socials_title">You can login using your social profile</div>
    {{-- <div class="login_socials_list">
        <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
            <div class="sc_socials_item">
                <a href="#" target="_blank" class="social_icons social_facebook">
                    <span class="icon-facebook"></span>
                </a>
            </div>
            <div class="sc_socials_item">
                <a href="#" target="_blank" class="social_icons social_twitter">
                    <span class="icon-twitter"></span>
                </a>
            </div>
            <div class="sc_socials_item">
                <a href="#" target="_blank" class="social_icons social_gplus">
                    <span class="icon-gplus"></span>
                </a>
            </div>
        </div>
    </div> --}}
    <div class="login_socials_problem"><a href="#">Problem with login?</a></div>
    <div class="result message_block"></div>
</div>
</div>
</div>

<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
<div class="custom_html_section"></div>

<script type='text/javascript' src="{{asset('js/vendor/jquery/jquery.js')}}"></script>
<script type='text/javascript' src="{{asset('js/vendor/jquery/jquery-migrate.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/custom/custom.js')}}"></script>
<script type='text/javascript' src="{{asset('js/vendor/esg/jquery.themepunch.tools.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/vendor/revslider/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/revslider/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/revslider/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vendor/revslider/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/vendor/modernizr.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/vendor/ui/core.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/vendor/superfish.js')}}"></script>
<script type='text/javascript' src="{{asset('js/custom/jquery.slidemenu.js')}}"></script>
<script type='text/javascript' src="{{asset('js/custom/core.utils.js')}}"></script>
<script type='text/javascript' src="{{asset('js/custom/core.init.js')}}"></script>
<script type='text/javascript' src="{{asset('js/custom/init.js')}}"></script>
<script type='text/javascript' src="{{asset('js/custom/embed.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/custom/shortcodes.js')}}"></script>
<script type='text/javascript' src="{{asset('js/custom/core.messages.js')}}"></script>
<script type='text/javascript' src="{{asset('js/vendor/comp/comp_front.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/vendor/isotope.pkgd.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/vendor/jquery.hoverdir.js')}}"></script>

</body>

</html>