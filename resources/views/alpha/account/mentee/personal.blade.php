@extends('layout.public')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div id="pcon" class="col-sm-8">
                <h1>About You</h1>
                <p>
                    Answers from this section are kept confidential and will not be shared on your public profile.            <br>
                    <a data-toggle="modal" data-target="#micromentorMissionModal">Why do we need to know this?</a>
                </p>
                <div class="panel">
                    <div class="panel-body">
                        <form enctype="multipart/form-data" autocomplete="off" class="public" method="post" action="/account/mentee-personal">
                            {{csrf_field()}}
                            <div class="about-you-questions">
                                <div class="form-group form_group @if($errors->has('birth_country_id')) {{' alert alert-danger'}} @endif ">
                                    <label for="UserBirthCountryId" class="bold">What country were you born in?&#65279;<acronym title="Required Field">*</acronym></label>
                                    <select name="data[User][birth_country_id]" class="form-control" id="UserBirthCountryId">
                                        @foreach($countries as $country)
                                            <option value="{{array_get($country,'id','')}}" data-dial-code="{{array_get($country,'dial_code','')}}"
                                            @if(array_get($country,'id','') === old('data.User.birth_country_id') || array_get($country,'id','') == array_get($personal_data,'birth_country_id') || (empty(old('data.User.birth_country_id')) && 'IN' == array_get($country,'code',''))) {{'selected="selected"'}} @endif >{{array_get($country,'name','')}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('birth_country_id'))
                                        <div class="error-message">
                                            @foreach($errors->get('birth_country_id') as $err)
                                                {{$err}}
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group @if($errors->has('spoken_lang')) {{' alert alert-danger'}} @endif">
                                    <label for="UserLanguageId">Which of the following languages do you speak fluently?&#65279;<acronym title="Required Field">*</acronym></label>
                                    <select name="data[User][spoken_language][]" class="form-control" multiple="multiple" id="UserLanguageId">
                                        <option value="en" @if('en' == old('data.User.birth_country_id') || in_array('en', array_get($personal_data,'spoken_lang',[])) || empty(old('data.User.birth_country_id'))) {{'selected="selected"'}} @endif>English</option>
                                        <option value="ar" @if('ar' == old('data.User.birth_country_id') || in_array('ar', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Arabic</option>
                                        <option value="bn" @if('bn' == old('data.User.birth_country_id') || in_array('bn', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Bengali</option>
                                        <option value="fr" @if('fr' == old('data.User.birth_country_id') || in_array('fr', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>French</option>
                                        <option value="de" @if('de' == old('data.User.birth_country_id') || in_array('de', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>German</option>
                                        <option value="ht" @if('ht' == old('data.User.birth_country_id') || in_array('ht', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Haitian Creole</option>
                                        <option value="hi" @if('hi' == old('data.User.birth_country_id') || in_array('hi', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Hindi</option>
                                        <option value="id" @if('id' == old('data.User.birth_country_id') || in_array('id', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Indonesian/Malay</option>
                                        <option value="ja" @if('ja' == old('data.User.birth_country_id') || in_array('ja', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Japanese</option>
                                        <option value="ko" @if('ko' == old('data.User.birth_country_id') || in_array('ko', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Korean</option>
                                        <option value="pt" @if('pt' == old('data.User.birth_country_id') || in_array('pt', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Portuguese</option>
                                        <option value="ru" @if('ru' == old('data.User.birth_country_id') || in_array('ru', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Russian</option>
                                        <option value="sk" @if('sk' == old('data.User.birth_country_id') || in_array('sk', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Slovak</option>
                                        <option value="es" @if('es' == old('data.User.birth_country_id') || in_array('es', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Spanish</option>
                                        <option value="tl" @if('tl' == old('data.User.birth_country_id') || in_array('tl', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Tagalog</option>
                                        <option value="th" @if('th' == old('data.User.birth_country_id') || in_array('th', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Thai</option>
                                        <option value="vi" @if('vi' == old('data.User.birth_country_id') || in_array('vi', array_get($personal_data,'spoken_lang',[]))) {{'selected="selected"'}} @endif>Vietnamese</option>
                                    </select>
                                    @if($errors->has('spoken_lang'))
                                        <div class="error-message">
                                            @foreach($errors->get('spoken_lang') as $err)
                                                {{$err}}
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="mobile-phone-number">
                                    <div class="row form-group @if($errors->has('phone_mobile')) {{' alert alert-danger'}} @endif ">
                                        <div class="col-sm-3">
                                            <label for="UserMobilePhone">Country Code&#65279;<acronym title="Required Field">*</acronym></label>
                                            <select name="data[User][m_dial_code]" class="form-control" id="UserMobileDialCode">
                                                @foreach($countries as $country)
                                                    <option value="{{array_get($country,'dial_code','')}}"
                                                    @if(array_get($country,'dial_code') == old('data.User.m_dial_code') || array_get($country,'dial_code') === array_get($personal_data,'m_dial_code')) {{'selected="selected"'}} @endif >{{array_get($country,'code','').'(+'.array_get($country,'dial_code','').')'}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('m_dial_code'))
                                                <div class="error-message">
                                                    @foreach($errors->get('m_dial_code') as $err)
                                                        {{$err}}
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-sm-9">
                                            <label for="UserMobilePhone">Mobile phone number using numbers only.&#65279;<acronym title="Required Field">*</acronym></label>
                                            <input name="data[User][phone_mobile]" type="text" class="form-control" id="UserMobilePhone" placeholder="1234567890" maxlength="50" value="{{old('data.User.phone_mobile') ? : array_get($personal_data,'phone_mobile','')}}" />
                                            @if($errors->has('phone_mobile'))
                                                <div class="error-message">
                                                    @foreach($errors->get('phone_mobile') as $err)
                                                        {{$err}}
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="landline-phone-number">
                                    <div class="form-group ">
                                        <label for="UserPhone">Please select your country code then enter your phone number using numbers only, not separated by dashes or spaces.  [landline]</label>
                                        <input name="data[User][phone_landline]" type="text" class="form-control" id="UserPhone" placeholder="+99 123-456-7890" maxlength="50" value="{{old('data.User.phone_landline') ? : array_get($personal_data,'phone_landline','')}}" />
                                        @if($errors->has('phone_landline'))
                                            <div class="error-message">
                                                @foreach($errors->get('phone_landline') as $err)
                                                    {{$err}}
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label for="UserContactMethod">For important notifications only, would you prefer to be contacted by:&#65279;<acronym title="Required Field">*</acronym></label>--}}
                                    {{--<input type="hidden" name="data[User][contact_method]" value="" />--}}
                                    {{--<div class="checkbox"><label for="UserContactMethod1"><input type="checkbox" name="data[User][contact_method][]" value="1" id="UserContactMethod1" />Email</label></div>--}}
                                    {{--<div class="checkbox"><label for="UserContactMethod2"><input type="checkbox" name="data[User][contact_method][]" value="2" id="UserContactMethod2" />SMS or Text Message</label></div>--}}
                                    {{--<div class="checkbox"><label for="UserContactMethod4"><input type="checkbox" name="data[User][contact_method][]" value="4" id="UserContactMethod4" />Voice Call</label></div>--}}
                                {{--</div>--}}
                                <div class="form-group @if($errors->has('birth_year')) {{' alert alert-danger'}} @endif "><label for="UserBirthYear">What year were you born in?&#65279;<acronym title="Required Field">*</acronym></label>
                                    <select name="data[User][birth_year]" class="form-control" id="UserBirthYear">
                                        <option value="0" @if(empty(old('data.User.birth_country_id'))) {{'selected="selected"'}} @endif>I prefer not to share</option>
                                        @for($i = date('Y')-13; $i >= date('Y')-113; $i--)
                                            <option value="{{$i}}" @if($i == old('data.User.birth_year') || $i == array_get($personal_data,'birth_year','')) {{'selected="selected"'}} @endif>{{$i}}</option>
                                        @endfor
                                    </select>
                                    @if($errors->has('birth_year'))
                                        <div class="error-message">
                                            @foreach($errors->get('birth_year') as $err)
                                                {{$err}}
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group @if($errors->has('gender')) {{' alert alert-danger'}} @endif  radio-group">
                                    <fieldset><legend>Please select your gender&#65279;<acronym title="Required Field">*</acronym></legend>
                                        <div class='radio'>
                                            <label for="UserGenderM"><input type="radio" name="data[User][gender]" id="UserGenderM" class="" value="M" @if('M' == old('data.User.gender') || 'M' == array_get($personal_data,'gender','') || empty(old('data.User.gender'))) {{'checked="checked"'}} @endif />Male</label>
                                        </div>
                                        <div class='radio'>
                                            <label for="UserGenderF"><input type="radio" name="data[User][gender]" id="UserGenderF" class="" value="F" @if('F' == old('data.User.gender') || 'F' == array_get($personal_data,'gender','') ) {{'checked="checked"'}} @endif />Female</label>
                                        </div>
                                        <div class='radio'>
                                            <label for="UserGenderO"><input type="radio" name="data[User][gender]" id="UserGenderO" class="" value="O" @if('O' == old('data.User.gender') || 'O' == array_get($personal_data,'gender','') ) {{'checked="checked"'}} @endif />Other</label>
                                        </div>
                                        <div class='radio'>
                                            <label for="UserGenderX"><input type="radio" name="data[User][gender]" id="UserGenderX" class="" value="X" @if('X' == old('data.User.gender')  || 'X' == array_get($personal_data,'gender','')  || empty(old('data.User.gender'))) {{'checked="checked"'}} @endif  />I prefer not to share</label>
                                        </div>
                                    </fieldset>
                                    @if($errors->has('gender'))
                                        <div class="error-message">
                                            @foreach($errors->get('gender') as $err)
                                                {{$err}}
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div id="ethnicity-wrapper">
                                    <div class="form-group ">
                                        <label for="UserEthnicityId">Please select your ethnicity</label>
                                        <select name="data[User][ethnicity]" class="form-control" id="UserEthnicityId">
                                            <option value="decline" @if('decline' == old('data.User.ethnicity') || 'decline' == array_get($personal_data,'ethnicity','') || empty(old('data.User.ethnicity'))) {{'selected="selected"'}} @endif>Decline to state</option>
                                            <option value="african-american" @if('african-american' == old('data.User.ethnicity') || 'african-american' == array_get($personal_data,'ethnicity','')) {{'selected="selected"'}} @endif>African American</option>
                                            <option value="afro-caribbean"  @if('afro-caribbean' == old('data.User.ethnicity') || 'afro-caribbean' == array_get($personal_data,'ethnicity','')) {{'selected="selected"'}} @endif>Afro-Caribbean</option>
                                            <option value="american-indian|alaskan-native"  @if('american-indian|alaskan-native' == old('data.User.ethnicity') || 'american-indian|alaskan-native' == array_get($personal_data,'ethnicity','')) {{'selected="selected"'}} @endif>American Indian/Alaskan Native</option>
                                            <option value="asian"  @if('asian' == old('data.User.ethnicity') || 'asian' == array_get($personal_data,'ethnicity','')) {{'selected="selected"'}} @endif>Asian</option>
                                            <option value="caucasian"  @if('caucasian' == old('data.User.ethnicity') || 'caucasian' == array_get($personal_data,'ethnicity','')) {{'selected="selected"'}} @endif>Caucasian</option>
                                            <option value="latino|hispanic"  @if('latino|hispanic' == old('data.User.ethnicity') || 'latino|hispanic' == array_get($personal_data,'ethnicity','')) {{'selected="selected"'}} @endif>Latino/Hispanic</option>
                                            <option value="multiple-ethnicities" @if('multiple-ethnicities' == old('data.User.ethnicity') || 'multiple-ethnicities' == array_get($personal_data,'ethnicity','')) {{'selected="selected"'}} @endif>Multiple Ethnicities</option>
                                            <option value="native-hawaiian|pacific-islander" @if('native-hawaiian|pacific-islander' == old('data.User.ethnicity') || 'native-hawaiian|pacific-islander' == array_get($personal_data,'ethnicity','')) {{'selected="selected"'}} @endif>Native Hawaiian/Pacific Islander</option>
                                        </select>
                                        @if($errors->has('ethnicity'))
                                            <div class="error-message">
                                                @foreach($errors->get('ethnicity') as $err)
                                                    {{$err}}
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="UserEducationLevel">Please select the highest level of education you have completed</label>
                                    <select name="data[User][education_level]" class="form-control" id="UserEducationLevel">
                                        <option value="" @if(empty(old('data.User.education_level')) || empty(array_get($personal_data,'education_level',''))) {{'selected="selected"'}} @endif>Select education level</option>
                                        <option value="elementary" @if('elementary' == old('data.User.education_level') || 'elementary' == array_get($personal_data,'education_level','')) {{'selected="selected"'}} @endif>Primary - Elementary School</option>
                                        <option value="middle" @if('middle' == old('data.User.education_level') || 'middle' == array_get($personal_data,'education_level','')) {{'selected="selected"'}} @endif>Secondary - Middle School or Junior High</option>
                                        <option value="secondary" @if('secondary' == old('data.User.education_level') || 'secondary' == array_get($personal_data,'education_level','')) {{'selected="selected"'}} @endif>Secondary - High School</option>
                                        <option value="postsecondary" @if('postsecondary' == old('data.User.education_level') || 'postsecondary' == array_get($personal_data,'education_level','')) {{'selected="selected"'}} @endif>Post-Secondary - Technical or Vocational Degree</option>
                                        <option value="bachelor" @if('bachelor' == old('data.User.education_level') || 'bachelor' == array_get($personal_data,'education_level','')) {{'selected="selected"'}} @endif>Undergraduate - Bachelor’s Degree</option>
                                        <option value="master" @if('master' == old('data.User.education_level') || 'master' == array_get($personal_data,'education_level','')) {{'selected="selected"'}} @endif>Postgraduate - Master’s Degree/Honors Degree/J.D.</option>
                                        <option value="doctor" @if('doctor' == old('data.User.education_level') || 'doctor' == array_get($personal_data,'education_level','')) {{'selected="selected"'}} @endif>Doctorate - PhD</option>
                                    </select>
                                    @if($errors->has('education_level'))
                                        <div class="error-message">
                                            @foreach($errors->get('education_level') as $err)
                                                {{$err}}
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group  radio-group">
                                    <fieldset><legend>Do you intend to connect with a mentor on MicroMentor?</legend>
                                        <input type="hidden" name="data[User][intent_to_connect]" id="UserIntentToConnect_" value="" />
                                        <div class='radio'>
                                            <label for="BusinessProfileIntentToConnect1">
                                                <input type="radio" name="data[User][intent_to_connect]" id="UserIntentToConnect1" class="" value="Y" @if('Y' == old('data.User.intent_to_connect') || 'Y' == array_get($personal_data,'intent_to_connect','') || empty(old('data.User.intent_to_connect'))) {{'checked="checked"'}} @endif  />Yes
                                            </label>
                                        </div>
                                        <div class='radio'>
                                            <label for="BusinessProfileIntentToConnect0">
                                                <input type="radio" name="data[User][intent_to_connect]" id="UserIntentToConnect0" class="" value="N" @if('N' == old('data.User.intent_to_connect') || 'N' == array_get($personal_data,'intent_to_connect','')) {{'checked="checked"'}} @endif />No
                                            </label>
                                        </div>
                                        <div class='radio'>
                                            <label for="BusinessProfileIntentToConnect2">
                                                <input type="radio" name="data[User][intent_to_connect]" id="UserIntentToConnect2" class="" value="NS" @if('NS' == old('data.User.intent_to_connect') || 'NS' == array_get($personal_data,'intent_to_connect','')) {{'checked="checked"'}} @endif />Not sure yet
                                            </label>
                                        </div>
                                    </fieldset>
                                    @if($errors->has('intent_to_connect'))
                                        <div class="error-message">
                                            @foreach($errors->get('intent_to_connect') as $err)
                                                {{$err}}
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="pull-left"><input class="btn btn-primary btn-lg" type="submit" value="Save and Continue" /></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="modal fade" id="micromentorMissionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Mentorif's Mission</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Mentorif strive to create a better world through empowering entrepreneurs around the world with access to
                            mentoring from business professionals who share our vision.
                        </p>
                        <p>
                            In order for Mentorif to demonstrate our impact around the world, to match you with an appropriate
                            mentor, and to improve our services for a diverse group of entrepreneurs, we will ask you to provide
                            details about your background and the business venture you are involved in.                </p>
                        <p>
                            We value your privacy and protect all of the information you share with us in accordance with our
                            <a href="/mentor/privacy-policy">privacy policy</a>.                </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            jQuery(function($){
                var phoneNumber = $('#UserPhone').val();
                var mobileNumber = $('#UserMobilePhone').val();

                $('#UserCountryId').chosen({
                    width: "100%"
                });
                $('#UserMobileDialCode').chosen({
                    width: "100%"
                });

                $('#UserLanguageId').chosen({
                    width: "100%"
                });
                $("#UserMobileDialCode").find('option[value="91"]').attr('selected', 'selected').end()
                    .trigger('chosen:updated');

                $('#UserBirthCountryId').change(function() {
                    $('#UserPhone').val('');$('#UserMobilePhone').val('');
                    if ($('#UserBirthCountryId').val() != ''){
                        var code = $(this).children('option:selected').data('dialCode');
                        if (typeof code !== 'undefined' && code != '') {
                            $("#UserMobileDialCode").val('').end().trigger('chosen:updated');
                            $("#UserMobileDialCode").find('option[value="' + code + '"]').attr('selected', 'selected').end()
                                .trigger('chosen:updated');
                        } else {
                            $("#UserMobileDialCode").find('option[value="91"]').attr('selected', 'selected').end()
                                .trigger('chosen:updated');

                        }
                        $('#ethnicity-wrapper').slideUp('fast');
                    } else {
                        $("#UserMobileDialCode").find('option[value="91"]').attr('selected', 'selected').end()
                            .trigger('chosen:updated');

                        $('#ethnicity-wrapper').slideDown('fast');
                    }
                });
            });
        </script>
    </div>
@stop