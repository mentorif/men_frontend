<div class="register-form">
    <div class="col-xs-12">
        <form autocomplete="off" enctype="multipart/form-data" class="" id="new-user" method="post" action="/user/register-manual">
            {{ csrf_field() }}
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div id="social-login" class="">
                            <h3>Sign up using your social account</h3>
                            <div id="janrainEngageEmbed"></div>
                            <script type="text/javascript">
                                // (function () {
                                //     if (typeof window.janrain !== 'object')
                                //         window.janrain = {};
                                //     if (typeof window.janrain.settings !== 'object')
                                //         window.janrain.settings = {};
                                //
                                //     /* _______________ can edit below this line _______________ */
                                //
                                //     janrain.settings.tokenUrl = 'https://www.micromentor.org/register/social_start';
                                //     janrain.settings.type = 'embed';
                                //     janrain.settings.appId = 'mllaliaflneknieknmld';
                                //     janrain.settings.appUrl = 'https://micromentor.rpxnow.com';
                                //     janrain.settings.providers = ["facebook", "linkedin", "googleplus"];
                                //     janrain.settings.providersPerPage = '3';
                                //     janrain.settings.format = 'one column';
                                //     janrain.settings.actionText = ' ';
                                //     janrain.settings.showAttribution = false;
                                //     janrain.settings.fontColor = '#333';
                                //     janrain.settings.fontFamily = 'arial';
                                //     janrain.settings.backgroundColor = '#ffffff';
                                //     janrain.settings.width = '320';
                                //     janrain.settings.borderColor = 'transparent';
                                //     janrain.settings.borderRadius = '5';
                                //     janrain.settings.buttonBorderColor = '#CCCCCC';
                                //     janrain.settings.buttonBorderRadius = '5';
                                //     janrain.settings.buttonBackgroundStyle = 'gray';
                                //     janrain.settings.language = 'en';
                                //     janrain.settings.linkClass = 'janrainEngage';
                                //
                                //     /* _______________ can edit above this line _______________ */
                                //
                                //     function isReady() {
                                //         janrain.ready = true;
                                //     }
                                //     ;
                                //     if (document.addEventListener) {
                                //         document.addEventListener("DOMContentLoaded", isReady, false);
                                //     } else {
                                //         window.attachEvent('onload', isReady);
                                //     }
                                //
                                //     var e = document.createElement('script');
                                //     e.type = 'text/javascript';
                                //     e.id = 'janrainAuthWidget';
                                //
                                //     if (document.location.protocol === 'https:') {
                                //         e.src = 'https://rpxnow.com/js/lib/micromentor/engage.js';
                                //     } else {
                                //         e.src = 'http://widget-cdn.rpxnow.com/js/lib/micromentor/engage.js';
                                //     }
                                //
                                //     var s = document.getElementsByTagName('script')[0];
                                //     s.parentNode.insertBefore(e, s);
                                // })();
                            </script>
                        </div>
                        <hr/>
                        <h3>Or create an account below</h3>
                        <?php $inputs = Session::get('inputs'); $errors = Session::get('errors'); ?>
                        @if(!empty($errors))
                        <div class="errorinfo alert alert-danger">
                            <h4><span class="glyphicon glyphicon-exclamation-sign"></span> There was a problem with your submission.</h4>
                            <p>Errors have been <em>indicated</em> below.</p>
                        </div>
                        @endif
                        <div class="col-sm-6 name-first @if(!empty($errors['first_name'])) {{"alert alert-danger"}} @endif">
                            <div class="form-group ">
                                <label for="UserFirstName"></label>
                                <input name="data[User][first_name]" type="text" class="form-control" placeholder="First Name" maxlength="50" value="{{ $inputs['data']['User']['first_name'] }}" id="UserFirstName" />
                                @if(!empty($errors['first_name']))
                                    @foreach($errors['first_name'] as $error)
                                        <div class="error-message">{{$error}}</div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6 name-last">
                            <div class="form-group @if(!empty($errors['first_name'])) {{"alert alert-danger"}} @endif">
                                <label for="UserLastName"></label>
                                <input name="data[User][last_name]" type="text" class="form-control" placeholder="Last Name" maxlength="50" value="{{ $inputs['data']['User']['last_name'] }}" id="UserLastName" />
                                @if(!empty($errors['last_name']))
                                    @foreach($errors['last_name'] as $error)
                                        <div class="error-message">{{$error}}</div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="form-group @if(!empty($errors['email'])) {{"alert alert-danger"}} @endif">
                            <label for="UserEmail"></label>
                            <input name="data[User][email]" type="email" class="form-control" placeholder="Email Address" maxlength="255" value="{{ $inputs['data']['User']['email'] }}" id="UserEmail" />
                            @if(!empty($errors['email']))
                                @foreach($errors['email'] as $error)
                                    <div class="error-message">{{$error}}</div>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group @if(!empty($errors['inpwd'])) {{"alert alert-danger"}} @endif">
                            <label for="UserInpwd"></label>
                            <input type="password" name="data[User][inpwd]" class="form-control" placeholder="Password" value="" id="UserInpwd" />
                            @if(!empty($errors['inpwd']))
                                @foreach($errors['inpwd'] as $error)
                                    <div class="error-message">{{$error}}</div>
                                @endforeach
                            @endif
                            <span class="help-block"><em>Passwords must have a minimum of 8 characters and contain at least one capital letter, one lower case letter, one special character, and one number</em></span>
                        </div>
                        <div class="form-group @if(!empty($errors['confirmPwd'])) {{"alert alert-danger"}} @endif">
                            <label for="UserConfirmPwd"></label>
                            <input type="password" name="data[User][confirmPwd]" class="form-control" placeholder="Confirm Password" value="" id="UserConfirmPwd" />
                            @if(!empty($errors['confirmPwd']))
                                @foreach($errors['confirmPwd'] as $error)
                                    <div class="error-message">{{$error}}</div>
                                @endforeach
                            @endif
                        </div>
                        <div  id="register-types">
                            <div class="row @if(!empty($errors['register_type'])) {{"alert alert-danger"}} @endif">
                                <div class="col-sm-6 text-center">
                                    <div class="form-group radio-group">
                                        <input type="hidden" name="data[User][register_type]" id="UserRegisterType_" value="" />
                                        <div class='radio'>
                                            <label for="UserRegisterTypeMentee">
                                                <input type="radio" name="data[User][register_type]" id="UserRegisterTypeMentee" class="" format="" value="mentee" @if(!empty($inputs['data']['User']['register_type']) && $inputs['data']['User']['register_type'] == 'mentee') {{"checked='checked'"}} @endif  />Find a mentor
                                            </label>
                                        </div>
                                        <span class="help-block"><em>I am looking for a mentor to help build my business.</em></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <div class="form-group">
                                        <div class='radio'>
                                            <label for="UserRegisterTypeMentor">
                                                <input type="radio" name="data[User][register_type]" id="UserRegisterTypeMentor" class="" format="" value="mentor" @if(!empty($inputs['data']['User']['register_type']) && $inputs['data']['User']['register_type'] == 'mentor') {{"checked='checked'"}} @endif />Be a mentor
                                            </label>
                                        </div>
                                        <span class="help-block"><em>I'd like to volunteer my time to help business owners succeed.</em></span>
                                    </div>
                                </div>
                                @if(!empty($errors['register_type']))
                                    @foreach($errors['register_type'] as $error)
                                        <div class="col-sm-12><div class="error-message">{{$error}}</div></div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="checkbox @if(!empty($errors['confirmation'])) {{"alert alert-danger"}} @endif">
                                <label class="control-label">
                                    <input type="checkbox" name="data[User][confirmation]" label="&lt;small&gt;I have read and accept the &lt;a href=&quot;/mentor/privacy-policy&quot; target=&quot;_blank&quot;&gt;Privacy Policy&lt;/a&gt;&lt;/small&gt;&amp;#65279;&lt;acronym title=&quot;Required Field&quot;&gt;*&lt;/acronym&gt;" error="you must agree to our terms of use, code of conduct, and privacy policy" type="checkbox" value="1" id="UserConfirmation"
                                    @if(!empty($inputs['data']['User']['confirmation']) && $inputs['data']['User']['confirmation'] == 1) {{"checked='checked'"}} @endif />
                                    <small>I have read and accept the <a href="/privacy-policy" target="_blank">Privacy Policy</a></small>&#65279;<acronym title="Required Field">*</acronym>
                                </label>
                            </div>
                            <div class="clearfix top-buffer bottom-buffer">
                                <div class="pull-left"><input class="btn btn-primary btn-lg" type="submit" value="Submit" /></div>
                            </div>
                            <small>
                                By creating an account you agree to MicroMentor's <a href="/terms-of-use" target="_blank">Terms of Use</a>
                                and <a href="/code-of-conduct" target="_blank">Code of Conduct</a>. You can change your communication
                                preferences at any time using the "Contact Settings" in your profile.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>