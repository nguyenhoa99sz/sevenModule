<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-17">
    <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>Sign In</h1><br>
                <form>
                    <input type="text" name="user" placeholder="Username">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" name="login" class="login loginmodal-submit" value="Login" style="background: #FF9A0C;">
                </form>

                <div class="login-help" style="text-align: center;">
                    <a href="#">Register</a> - <a href="#">Forgot Password</a>
                </div>
                <div class="create" style="text-align: center;">
                    <span>Don’t Have an Account? <a href="#">Create</a></span><br>
                </div>
                <div class="section-or">
                    <b></b>
                    <span class="or">OR</span>
                    <b></b>
                </div>
                <div class="create-new">
                    <a href="#" class="ocialfb"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="#" class="ocialGoogle"><i class="fa fa-google-plus"></i> Google</a><br>
                    <a href="#" class="ociaLink"><i class="fa fa-linkedin"></i> Linkedlln</a>
                    <a href="#" class="ocialTwitter"><i class="fa fa-twitter"></i> Twitter</a>
                </div>

            </div>
        </div>
    </div>

</div>