@extends('layout.public')
@section('content')
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div id="pcon" class="col-sm-8">
            <ol id="breadcrumbs-wizard" class="breadcrumb-wizard top-buffer clearfix">
                <li class="arrow not-complete"><div>Get started</div></li>
                <li class="arrow complete"><div><a href="/register/business">Complete your profile</a></div></li>
                <li class="last"><div>Send someone a message!</div></li>
            </ol>
            <h1>Complete your mentor profile</h1>
            <p>Thank you for volunteering your time as a business mentor! You are going to provide an invaluable service to entrepreneurs, and have a great experience. To get started, complete your profile to showcase your experience and how you would like to help. Then we will send you on your way to connect you with interesting opportunities to contribute!</p>
            <form enctype="multipart/form-data" autocomplete="off" class="public" method="post" action="/account/mentor-profile">
                {{csrf_field()}}
                <div class="panel">
                    <div class="panel-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Check Out an Example Profile</button>
                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog sample-prof">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Example Profile</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row top-buffer">
                                            <div class="col-xs-12 public-profile">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <div class="profile-card">
                                                            <div class="row panel-footer clearfix media">
                                                                <div class="pull-left">
                                                                    <img class="profile-pic img-circle" src="/portals/mm/img/mentor-profile-example-photo.jpg" />
                                                                </div>
                                                                <div class="media-body example-prof">
                                                                    <p class="user-name">Maria Santos</p>
                                                                    <p><small><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>San Francisco, CA, United States</small><br>
                                                                        <small><span class="glyphicon glyphicon-tag" title="Industry"></span>Web and Technology</small></p>
                                                                    <div class="pull-left">
                                                                        <div class="badges">
                                                                            <table>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>Recent Activity</td>
                                                                                    <td>
                                                                                        <a href="/learn-more/badges" target="_blank" class="badge badge-offers-1" data-toggle="tooltip" data-container="body" title="" data-original-title="Has been active in the last 12 months"></a>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div><br>
                                                            </div>

                                                            <div class="row">
                                                                <div class="btn-group btn-group-justified bottom-buffer col-sm-9">
                                                                    <div class="row">
                                                                        <div class="col-xs-8 col-sm-6">

                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-6">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-10 col-md-offset-1">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    How I Can Help        </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-7">
                                                                            <p><p>All great successes started with a great plan. My sweet spot is business strategy - I am excited by new challenges and interesting business ideas. I would like to help another startup get off the ground. </p>
                                                                            <p>I prefer mentoring connections where the entrepreneur has already started to develop their business idea, and is open to honest feedback. I can provide a strategic framework to guide the conversation, and act as a sounding board for your ideas. </p></p>
                                                                            <h4>My Professional Experience</h4>
                                                                            <p><p>Eight years ago, I left my role as a marketing coordinator at a large technology corporation to work on my own idea. I founded ShopConverter, a digital agency with a specialization in e-commerce website design. On this journey, I've worn every hat in the company - rolling up my sleeves to deliver the service, securing investment capital, and building a thriving team. I've learned many of my lessons the hard way, so you don't have to.</p>
                                                                            <p>My philosophy is relentlessly customer-driven - I believe that the best thing you can do is understand what your customers want, and work hard to make them extremely happy with the results. It is this experience that I would like to bring as a mentor.</p></p>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="expertise-list">
                                                                                <ul class="list-unstyled">
                                                                                    <li class="clearfix">
                                                                                        <strong>Expertise</strong>
                                                                                        <ul id="expertiseList">
                                                                                            <li>Accounting and Finance&nbsp;&raquo; Financial Planning</li><li>Human Resources&nbsp;&raquo; Employee Management</li><li>Management&nbsp;&raquo; Growth and Development</li><li>Management&nbsp;&raquo; Leadership</li><li>Management&nbsp;&raquo; Planning and Goal Setting</li><li>Management&nbsp;&raquo; Business Strategy</li><li>Operations&nbsp;&raquo; Process Improvement</li>        </ul>
                                                                                    </li>
                                                                                    <hr>
                                                                                    <li>
                                                                                        <strong>Experience</strong>
                                                                                    </li>
                                                                                    <li>Ownership Experience                    : 8 yrs</li>
                                                                                    <li>Management Experience: 13 yrs</li>
                                                                                    <li>Languages Spoken:
                                                                                        English, Spanish        </li>
                                                                                    <li>Country Experience:
                                                                                        United States</li>
                                                                                    <hr>
                                                                                    <li><a href="https://www.linkedin.com/pub/maría-santos/51/3494/1b1" target="_blank" >https://www.linkedin.com/pub/maría-santos/51/3494/1b1</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>      </div>
                                </div>
                            </div>
                        </div>

                        <p>* Required Field</p>
                        <h3>Tell us about your professional experience</h3>
                        <div class="form-group @if($errors->has('mentor_selected_expertises')) {{' alert alert-danger'}} @endif">
                            <label for="ExpertProfileSelectedExpertises">Which areas of expertise would you like to share as a mentor?&#65279;<acronym title="Required Field">*</acronym></label>
                            <input type="hidden" name="data[ExpertProfile][selected_expertises]" value="" />
                            <select name="data[ExpertProfile][selected_expertises][]" class="form-control" multiple="multiple" data-placeholder="Select up to 7" id="ExpertProfileSelectedExpertises">
                                <option value=""></option>
                                <?php $old = (!empty(old('data.ExpertProfile.selected_expertises',[])) && is_array(old('data.ExpertProfile.selected_expertises'))) ? old('data.ExpertProfile.selected_expertises') : [];
                                $func_areas = [];
                                foreach(array_get($data,'mentor_details.function_area',[]) as $area) {
                                    $func_areas[] = array_get($area,'fa_id');
                                }
                                ?>
                                @foreach(array_get($data,'functional_areas',[]) as $functional_area)
                                    @if (!empty(array_get($functional_area,'functionalarea',[])))
                                        <optgroup label="{{array_get($functional_area,'name','')}}">
                                            @foreach(array_get($functional_area,'functionalarea',[]) as $area)
                                                <option value="{{array_get($area,'id','')}}" @if(in_array(array_get($area,'id'),$old) || in_array(array_get($area,'id'),$func_areas)) {{'selected="selected"'}} @endif >{{array_get($area,'name','')}}</option>
                                            @endforeach
                                        </optgroup>
                                    @endif
                                @endforeach
                            </select>
                            @if($errors->has('mentor_selected_expertises'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_selected_expertises') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_industry_id')) {{' alert alert-danger'}} @endif">
                            <label for="ExpertProfileIndustryId">What is your primary industry?&#65279;<acronym title="Required Field">*</acronym></label>
                            <select name="data[ExpertProfile][industry_id]" class="chosen-select" data-placeholder="Select one" id="ExpertProfileIndustryId">
                                <option value="" @if(empty(old('data.ExpertProfile.industry_id'))) {{'selected="selected"'}} @endif>- Select one -</option>
                                @foreach(array_get($data,'industries',[]) as $industry)
                                    <option value="{{array_get($industry,'id','')}}" @if(array_get($industry,'id') == old('data.ExpertProfile.industry_id') || array_get($industry,'id') == array_get($data,'mentor_details.industry_id','')) {{'selected="selected"'}} @endif >{{array_get($industry,'name','')}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('mentor_industry_id'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_industry_id') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_professional_bio')) {{' alert alert-danger'}} @endif">
                            <label for="ExpertProfileProfessionalBio">Describe your professional background&#65279;<acronym title="Required Field">*</acronym>
                                <em class="hidden-80"> (<span class="limit">1000</span> characters left)</em><br>
                                <em>What roles have you played in your career and how did you contribute? What experiences would you like to share in a mentoring connection? What accomplishments are you proud of?</em>
                            </label>
                            <textarea name="data[ExpertProfile][professional_bio]" cols="30" rows="4" class="form-control" placeholder="Good responses tend to range between 300 and 1,000 characters" id="ExpertProfileProfessionalBio" >{{old('data.ExpertProfile.professional_bio') ? : array_get($data,'mentor_details.professional_bio','')}}</textarea>
                            @if($errors->has('mentor_professional_bio'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_professional_bio') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_entrepreneur_pitch')) {{' alert alert-danger'}} @endif">
                            <label for="ExpertProfileEntrepreneurPitch">How would you like to help entrepreneurs?﻿&#65279;<acronym title="Required Field">*</acronym>
                                <em class="hidden-80"> (<span class="limit">1000</span> characters left)</em><br>
                                <em>What types of business problems interest you? What activities do you prefer when advising others? In what ways do you think you can provide the most value?</em>
                            </label>
                            <textarea name="data[ExpertProfile][entrepreneur_pitch]" cols="30" rows="4" class="form-control" id="ExpertProfileEntrepreneurPitch" >{{old('data.ExpertProfile.entrepreneur_pitch') ? : array_get($data,'mentor_details.entrepreneur_pitch','')}}</textarea>
                            @if($errors->has('entrepreneur_pitch'))
                                <div class="error-message">
                                    @foreach($errors->get('entrepreneur_pitch') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_mentoring_stages')) {{' alert alert-danger'}} @endif">
                            <label for="ExpertProfileMentoringStages">What stage(s) of the entrepreneur's business do you prefer helping?﻿&#65279;<acronym title="Required Field">*</acronym> <br>
                                <em>**Check all that apply</em>
                            </label>
                            <div class="checkbox">
                                <label for="ExpertProfileMentoringStages1">
                                    <input type="checkbox" name="data[ExpertProfile][mentoring_stages][]" value="concept" id="ExpertProfileMentoringStages1" @if(in_array('concept',array_get($data,'mentor_details.preference',[]))) {{'checked="checked"'}} @endif />Concept
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="ExpertProfileMentoringStages2">
                                    <input type="checkbox" name="data[ExpertProfile][mentoring_stages][]" value="startup" id="ExpertProfileMentoringStages2" @if(in_array('startup',array_get($data,'mentor_details.preference',[]))) {{'checked="checked"'}} @endif/>Startup
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="ExpertProfileMentoringStages4">
                                    <input type="checkbox" name="data[ExpertProfile][mentoring_stages][]" value="existing" id="ExpertProfileMentoringStages4" @if(in_array('existing',array_get($data,'mentor_details.preference',[]))) {{'checked="checked"'}} @endif/>Existing
                                </label>
                            </div>
                            @if($errors->has('mentor_mentoring_stages'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_mentoring_stages') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_years_management')) {{' alert alert-danger'}} @endif">
                            <label for="ExpertProfileYearsManagement">How many years of business management experience do you have?&#65279;<acronym title="Required Field">*</acronym></label>
                            <input name="data[ExpertProfile][years_management]" type="text" class="form-control" style="width:75px;" maxlength="3" value="{{old('data.ExpertProfile.years_management') ? : array_get($data,'mentor_details.years_management','')}}" id="ExpertProfileYearsManagement" />
                            @if($errors->has('mentor_years_management'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_years_management') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_years_ownership')) {{' alert alert-danger'}} @endif">
                            <label for="ExpertProfileYearsOwnership">How many years of ownership experience do you have?&#65279;<acronym title="Required Field">*</acronym></label>
                            <input name="data[ExpertProfile][years_ownership]" type="text" class="form-control" style="width:75px;" maxlength="3" value="{{old('data.ExpertProfile.years_ownership') ? : array_get($data,'mentor_details.years_ownership','')}}" id="ExpertProfileYearsOwnership" />
                            @if($errors->has('mentor_years_ownership'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_years_ownership') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <?php $old = (!empty(old('data.ExpertProfile.country_expertise_id',[])) && is_array(old('data.ExpertProfile.country_expertise_id'))) ? old('data.ExpertProfile.country_expertise_id') : [];
                        $coun_exp = [];
                        foreach(array_get($data,'mentor_details.country_experience',[]) as $c_exp) {
                            $coun_exp[] = array_get($c_exp,'country_id');
                        }
                        ?>
                        <div class="form-group @if($errors->has('mentor_country_expertise_id')) {{' alert alert-danger'}} @endif">
                            <label for="ExpertProfileCountryExpertiseId">In which countries do you have professional business experience?&#65279;<acronym title="Required Field">*</acronym></label>
                            <input type="hidden" name="data[ExpertProfile][country_expertise_id]" value="" />
                            <select name="data[ExpertProfile][country_expertise_id][]" class="form-control" size="10" multiple="multiple" data-placeholder="Select up to 10" id="ExpertProfileCountryExpertiseId">
                                @foreach(array_get($data,'countries',[]) as $country)
                                    <option value="{{array_get($country,'id','')}}" data-dial-code="{{array_get($country,'dial_code','')}}"
                                    @if(in_array(array_get($country,'id'),$old) || in_array(array_get($country,'id'),$coun_exp)) {{'selected="selected"'}} @endif >{{array_get($country,'name','')}}</option>

                                @endforeach
                                <option value="242">Decline to state</option>
                            </select>
                            @if($errors->has('mentor_country_expertise_id'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_country_expertise_id') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <h3>Your profile information</h3>
                        <div class="form-group @if($errors->has('mentor_photo_upload')) {{' alert alert-danger'}} @endif">
                            <label for="UserPhotoUpload">Share a nice image of yourself<br/>
                                <em>Profiles with photos are much more likely to find a match. You may use a photo of yourself or your business.</em>
                            </label>
                            <input type="file" name="data[User][photo_upload]" class="form-control" size="60" value="" id="UserPhotoUpload" accept="image/png,image/jpeg"/>
                            <span class="help-block"><em>JPEG and PNG files only -- 2MB limit</em></span>
                            @if($errors->has('mentor_photo_upload'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_photo_upload') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_website_url')) {{' alert alert-danger'}} @endif">
                            <label for="ExpertProfileWebsiteUrl">Website</label>
                            <input name="data[ExpertProfile][website_url]" type="text" class="form-control" maxlength="500" value="{{old('data.ExpertProfile.website_url') ? : array_get($data,'mentor_details.website','')}}" id="ExpertProfileWebsiteUrl" />
                            <span class="help-block"><em>This could be your website, or alternately the address of your portfolio, professional bio, blog, or LinkedIn profile.</em></span>
                            @if($errors->has('mentor_website_url'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_website_url') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_business_name')) {{' alert alert-danger'}} @endif">
                            <label for="ExpertProfileBusinessName">Your company</label>
                            <input name="data[ExpertProfile][business_name]" type="text" class="form-control" style="width:300px;" maxlength="100" value="{{old('data.ExpertProfile.business_name') ? : array_get($data,'mentor_details.company','')}}" id="ExpertProfileBusinessName" />
                            @if($errors->has('mentor_business_name'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_business_name') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_title')) {{' alert alert-danger'}} @endif">
                            <label for="ExpertProfileTitle">Your role at this company</label>
                            <input name="data[ExpertProfile][title]" type="text" class="form-control" style="width:300px;" maxlength="50" value="{{old('data.ExpertProfile.title') ? : array_get($data,'mentor_details.role','')}}" id="ExpertProfileTitle" />
                            @if($errors->has('mentor_title'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_title') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_language_id')) {{' alert alert-danger'}} @endif">
                            <label for="UserLanguageId">In which languages do you have business proficiency?&#65279;<acronym title="Required Field">*</acronym></label>
                            <select name="data[User][language_id][]" class="form-control" multiple="multiple" data-placeholer="Select" id="UserLanguageId">
                                <option value="en" @if('en' == old('data.User.language_id') || array_key_exists('en', array_get($data,'mentor_details.personalinfo.spoken_lang',[])) || empty(array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>English</option>
                                <option value="ar" @if('ar' == old('data.User.language_id') || array_key_exists('ar', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Arabic</option>
                                <option value="bn" @if('bn' == old('data.User.language_id') || array_key_exists('bn', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Bengali</option>
                                <option value="fr" @if('fr' == old('data.User.language_id') || array_key_exists('fr', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>French</option>
                                <option value="de" @if('de' == old('data.User.language_id') || array_key_exists('de', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>German</option>
                                <option value="ht" @if('ht' == old('data.User.language_id') || array_key_exists('ht', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Haitian Creole</option>
                                <option value="hi" @if('hi' == old('data.User.language_id') || array_key_exists('hi', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Hindi</option>
                                <option value="id" @if('id' == old('data.User.language_id') || array_key_exists('id', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Indonesian/Malay</option>
                                <option value="ja" @if('ja' == old('data.User.language_id') || array_key_exists('ja', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Japanese</option>
                                <option value="ko" @if('ko' == old('data.User.language_id') || array_key_exists('ko', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Korean</option>
                                <option value="pt" @if('pt' == old('data.User.language_id') || array_key_exists('pt', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Portuguese</option>
                                <option value="ru" @if('ru' == old('data.User.language_id') || array_key_exists('ru', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Russian</option>
                                <option value="sk" @if('sk' == old('data.User.language_id') || array_key_exists('sk', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Slovak</option>
                                <option value="es" @if('es' == old('data.User.language_id') || array_key_exists('es', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Spanish</option>
                                <option value="tl" @if('tl' == old('data.User.language_id') || array_key_exists('tl', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Tagalog</option>
                                <option value="th" @if('th' == old('data.User.language_id') || array_key_exists('th', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Thai</option>
                                <option value="vi" @if('vi' == old('data.User.language_id') || array_key_exists('vi', array_get($data,'mentor_details.personalinfo.spoken_lang',[]))) {{'selected="selected"'}} @endif>Vietnamese</option>
                            </select>
                            @if($errors->has('mentor_language_id'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_language_id') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group  public @if($errors->has('mentor_country_id')) {{' alert alert-danger'}} @endif">
                            <label for="UserCountryId">Country of Residence&#65279;<acronym title="Required Field">*</acronym></label>
                            <input type="hidden" name="data[User][country_dial_code]" id="UserCountryDialCode" value="{{old('data.User.country_dial_code') ? : array_get($data,'mentor_details.personalinfo.m_dial_code','')}}" />
                            <select name="data[User][country_id]" class="form-control" id="UserCountryId">
                                <option value="">Select a Country</option>
                                @foreach(array_get($data,'countries',[]) as $country)
                                    <option value="{{array_get($country,'id','')}}" data-dial-code="{{array_get($country,'dial_code','')}}"
                                    @if(array_get($country,'id') == old('data.User.country_id') || array_get($country,'id') == array_get($data,'mentor_details.personalinfo.country','X')) {{'selected="selected"'}} @endif >{{array_get($country,'name','')}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('mentor_country_id'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_country_id') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group  stateus @if($errors->has('mentor_state')) {{' alert alert-danger'}} @endif">
                            <label for="UserState">Region/State<acronym title="Shows in your public profile" class="public">&nbsp;</acronym></label>
                            <select name="data[User][state]" class="form-control" id="UserState">
                                <option value="">Select a Region/State</option>
                            </select>
                            @if($errors->has('mentor_state'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_state') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group  public @if($errors->has('mentor_city')) {{' alert alert-danger'}} @endif">
                            <label for="UserCity">City</label>
                            <select name="data[User][city]" class="form-control" id="UserCity">
                                <option value="">Select a City</option>
                            </select>
                            @if($errors->has('mentor_city'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_city') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group  public @if($errors->has('mentor_postal_code')) {{' alert alert-danger'}} @endif">
                            <label for="UserPostalCode">Postal Code</label>
                            <input name="data[User][postal_code]" type="text" class="form-control" id="UserPostalCode" maxlength="20" value="{{old('data.User.postal_code') ? : array_get($data,'mentor_details.personalinfo.pincode','')}}" />
                            @if($errors->has('mentor_postal_code'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_postal_code') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_phone')) {{' alert alert-danger'}} @endif">
                            <label for="UserPhone">Phone Number&#65279;<acronym title="Required Field">*</acronym></label>
                            <input name="data[User][phone]" type="text" class="form-control" id="UserPhone" maxlength="50" value="{{old('data.User.phone') ? : array_get($data,'mentor_details.personalinfo.phone_mobile','')}}" />
                            <span class="help-block"><em>1234567890</em></span>
                            @if($errors->has('mentor_phone'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_phone') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div id="ethnicity-wrapper" class=" @if($errors->has('mentor_ethnicity')) {{' alert alert-danger'}} @endif">
                            <div class="form-group ">
                                <label for="UserEthnicityId">Ethnicity</label>
                                <select name="data[User][ethnicity]" class="form-control" id="UserEthnicity">
                                    <option value="decline" @if('decline' == old('data.User.ethnicity') || 'decline' == array_get($data,'mentor_details.personalinfo.ethnicity','') || empty(old('data.User.ethnicity'))) {{'selected="selected"'}} @endif>Decline to state</option>
                                    <option value="african-american" @if('african-american' == old('data.User.ethnicity') || 'african-american' == array_get($data,'mentor_details.personalinfo.ethnicity','')) {{'selected="selected"'}} @endif>African American</option>
                                    <option value="afro-caribbean"  @if('afro-caribbean' == old('data.User.ethnicity') || 'afro-caribbean' == array_get($data,'mentor_details.personalinfo.ethnicity','')) {{'selected="selected"'}} @endif>Afro-Caribbean</option>
                                    <option value="american-indian|alaskan-native"  @if('american-indian|alaskan-native' == old('data.User.ethnicity') || 'american-indian|alaskan-native' == array_get($data,'mentor_details.personalinfo.ethnicity','')) {{'selected="selected"'}} @endif>American Indian/Alaskan Native</option>
                                    <option value="asian"  @if('asian' == old('data.User.ethnicity') || 'asian' == array_get($data,'mentor_details.personalinfo.ethnicity','')) {{'selected="selected"'}} @endif>Asian</option>
                                    <option value="caucasian"  @if('caucasian' == old('data.User.ethnicity') || 'caucasian' == array_get($data,'mentor_details.personalinfo.ethnicity','')) {{'selected="selected"'}} @endif>Caucasian</option>
                                    <option value="latino|hispanic"  @if('latino|hispanic' == old('data.User.ethnicity') || 'latino|hispanic' == array_get($data,'mentor_details.personalinfo.ethnicity','')) {{'selected="selected"'}} @endif>Latino/Hispanic</option>
                                    <option value="multiple-ethnicities" @if('multiple-ethnicities' == old('data.User.ethnicity') || 'multiple-ethnicities' == array_get($data,'mentor_details.personalinfo.ethnicity','')) {{'selected="selected"'}} @endif>Multiple Ethnicities</option>
                                    <option value="native-hawaiian|pacific-islander" @if('native-hawaiian|pacific-islander' == old('data.User.ethnicity') || 'native-hawaiian|pacific-islander' == array_get($data,'mentor_details.personalinfo.ethnicity','')) {{'selected="selected"'}} @endif>Native Hawaiian/Pacific Islander</option>
                                </select>
                            </div>
                            @if($errors->has('mentor_ethnicity'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_ethnicity') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <script type="text/javascript">
                            var regionLabels = {"1":"State","3":"State","90":"Department","219":"Governorate","0":"Region"};
                            jQuery(function ($) {
                                jQuery('#UserCountryId').chosen({
                                    width: "100%"
                                });

                                var initialState = "{{old('data.User.state') ? : array_get($data,'mentor_details.personalinfo.state','')}}";
                                var initialCity = "{{old('data.User.city') ? : array_get($data,'mentor_details.personalinfo.city','')}}";

                                if(jQuery('#UserCountryId').length > 0) {
                                    jQuery('#UserCountryId').change(function () {
                                        var chosenCountryId = $(this).val();
                                        var country_code = $(this).data('dial-code');
                                        //var number = $('#UserPhone').val();
                                        //$('#UserPhone').val('+' + country_code + ' - ' + phoneNumber);
                                        if (typeof chosenCountryId != 'undefined' && chosenCountryId != '') {
                                            jQuery.ajax({
                                                url: "/country-region",
                                                type: 'GET',
                                                dataType: 'JSON',
                                                async: true,
                                                data: {cid:chosenCountryId},
                                                success: function(ret) {
                                                    if (1004 == parseInt(ret.code) && typeof ret.data !== 'undefined') {
                                                        $('#UserState').html($("<option></option>").attr("value",'').text("Select a Region/State"))
                                                        $.each(ret.data, function(key, value){
                                                            $('#UserState').append($("<option></option>").attr("value",value.id).text(value.name));
                                                        });
                                                        $("#UserState").find('option[value="' + initialState + '"]').attr('selected', 'selected').end()
                                                            .trigger('chosen:updated');
                                                        $(".stateus").removeClass('hide');
                                                        //$(".stateother").addClass('hide').find("input").val('').attr("disabled", "disabled");
                                                        $("#UserCountryDialCode").val(country_code);
                                                        $('#UserCity').html($("<option></option>").attr("value",'').text("Select a City"));
                                                    } else {
                                                        $('#UserState').html($("<option></option>").attr("value",'').text("Select a Region/State"));
                                                        $('#UserCity').html($("<option></option>").attr("value",'').text("Select a City"));
                                                        $("#UserCountryDialCode").val('');
                                                    }
                                                }
                                            });
                                        }
                                        // var chosenCountryId = jQuery(this).val();
                                        // jQuery.ajax({
                                        //     url: "/users/getCountryRegions/" + chosenCountryId,
                                        // })
                                        //     .done(function (data) {
                                        //         if (data.length) {
                                        //             jQuery('#UserState')
                                        //                 .html(data)
                                        //                 .find('option[value="'+initialState+'"]').attr('selected', 'selected').end()
                                        //                 .trigger('chosen:updated');
                                        //             jQuery(".stateus").removeClass('hide')
                                        //
                                        //             jQuery(".stateother").addClass('hide').find("input").val('').attr("disabled", "disabled");
                                        //             if (!jQuery('input#UserInvite').prop('checked')) {
                                        //                 jQuery(".stateus").removeClass('hide')
                                        //                     .find('label').text(regionLabels[chosenCountryId] || regionLabels[0]).end()
                                        //                     .find("input").removeAttr("disabled");
                                        //                 jQuery('#UserPostalCode').closest('div').show();
                                        //             }
                                        //
                                        //         } else {
                                        //             jQuery(".stateus").addClass('hide').find("input").attr("disabled", "disabled");
                                        //             jQuery('#UserPostalCode').closest('div').hide();
                                        //             if (!jQuery('input#UserInvite').prop('checked')) {
                                        //                 jQuery(".stateother").removeClass('hide')
                                        //                     .find('label').text(regionLabels[chosenCountryId] || regionLabels[0]).end()
                                        //                     .find("input").removeAttr("disabled").val('');
                                        //             }
                                        //         }
                                        //
                                        //         initialState = '';
                                        //     });
                                    }).change();
                                } else {
                                    // var chosenCountryId = 1;
                                    // jQuery.ajax({
                                    //     url: "/users/getCountryRegions/" + chosenCountryId,
                                    // })
                                    //     .done(function (data) {
                                    //         if (data.length) {
                                    //             jQuery('#UserState')
                                    //                 .html(data)
                                    //                 .find('option[value="'+initialState+'"]').attr('selected', 'selected').end()
                                    //                 .trigger('chosen:updated');
                                    //             jQuery(".stateus").removeClass('hide')
                                    //
                                    //             jQuery(".stateother").addClass('hide').find("input").val('').attr("disabled", "disabled");
                                    //             if (!jQuery('input#UserInvite').prop('checked')) {
                                    //                 jQuery(".stateus").removeClass('hide')
                                    //                     .find('label').text(regionLabels[chosenCountryId] || regionLabels[0]).end()
                                    //                     .find("input").removeAttr("disabled");
                                    //                 jQuery('#UserPostalCode').closest('div').show();
                                    //             }
                                    //
                                    //         } else {
                                    //             jQuery(".stateus").addClass('hide').find("input").attr("disabled", "disabled");
                                    //             jQuery('#UserPostalCode').closest('div').hide();
                                    //             if (!jQuery('input#UserInvite').prop('checked')) {
                                    //                 jQuery(".stateother").removeClass('hide')
                                    //                     .find('label').text(regionLabels[chosenCountryId] || regionLabels[0]).end()
                                    //                     .find("input").removeAttr("disabled").val('');
                                    //             }
                                    //         }
                                    //
                                    //         initialState = '';
                                    //     });
                                }
                                if(jQuery('#UserState').length > 0) {
                                    jQuery('#UserState').change(function () {
                                        var chosenStateId = $(this).val();
                                        var chosenCountryId = $("#UserCountryId").val();
                                        if (typeof chosenStateId != 'undefined' && chosenStateId != '') {
                                            jQuery.ajax({
                                                url: "/state-city",
                                                type: 'GET',
                                                dataType: 'JSON',
                                                async: true,
                                                data: {cid: chosenCountryId, sid: chosenStateId},
                                                success: function (ret) {
                                                    if (1004 == parseInt(ret.code) && typeof ret.data !== 'undefined') {
                                                        $('#UserCity').html($("<option></option>").attr("value", '').text("Select a City"))
                                                        $.each(ret.data, function (key, value) {
                                                            $('#UserCity').append($("<option></option>").attr("value", value.id).text(value.name));
                                                        });
                                                        $("#UserCity").find('option[value="' + initialCity + '"]').attr('selected', 'selected').end()
                                                            .trigger('chosen:updated');
                                                    } else {
                                                        $('#UserCity').html($("<option></option>").attr("value", '').text("Select a City")).trigger('chosen:updated');
                                                    }
                                                }
                                            });
                                        }
                                    }).change();
                                }

                                // jQuery('input#UserInvite').change(function () {
                                //     var hideFields = [
                                //         '#UserCountryId',
                                //         '#UserCity',
                                //         '#UserEsdCounty',
                                //         '#UserState',
                                //         '#UserStateOther',
                                //         '#UserPostalCode',
                                //         '#UserPhone'
                                //     ];
                                //     if (jQuery(this).prop('checked')) {
                                //         jQuery(hideFields.join(",")).val('');
                                //         // after clearing out values above, put back values if default state is set
                                //         jQuery('#UserCountryId').val(1);
                                //         jQuery('#UserState').val("");
                                //         jQuery(hideFields.join(",")).closest("div").hide();
                                //         jQuery("hr.hide-on-invite").hide();
                                //     } else {
                                //         jQuery(hideFields.join(",")).closest("div").show();
                                //         jQuery("hr.hide-on-invite").show();
                                //         jQuery(".stateother").hide(); // have to hide this again because of the multiple-field showing above
                                //     }
                                // }).change();
                            });
                        </script>
                        <p>The below questions are completely optional and confidential. No one outside of Mentorif will see this information.</p>
                        <div class="form-group  radio-group @if($errors->has('mentor_gender')) {{' alert alert-danger'}} @endif">
                            <fieldset><legend>Gender</legend>
                                <div class='radio'>
                                    <label for="UserGenderM">
                                        <input type="radio" name="data[User][gender]" id="UserGenderM" class="" value="M" @if('M' == array_get($data,'mentor_details.personalinfo.gender','X')) {{'checked="checked"'}} @endif  />Male
                                    </label>
                                </div>
                                <div class='radio'>
                                    <label for="UserGenderF">
                                        <input type="radio" name="data[User][gender]" id="UserGenderF" class="" value="F" @if('F' == array_get($data,'mentor_details.personalinfo.gender','X')) {{'checked="checked"'}} @endif  />Female
                                    </label>
                                </div>
                                <div class='radio'>
                                    <label for="UserGenderO">
                                        <input type="radio" name="data[User][gender]" id="UserGenderO" class="" value="O" @if('O' == array_get($data,'mentor_details.personalinfo.gender','X')) {{'checked="checked"'}} @endif  />Other
                                    </label>
                                </div>
                                <div class='radio'>
                                    <label for="UserGenderX">
                                        <input type="radio" name="data[User][gender]" id="UserGenderX" class="" value="X" @if('X' == array_get($data,'mentor_details.personalinfo.gender','X')) {{'checked="checked"'}} @endif  />I'd prefer not to share</label>
                                </div>
                            </fieldset>
                            @if($errors->has('mentor_gender'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_gender') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="form-group @if($errors->has('mentor_birth_year')) {{' alert alert-danger'}} @endif">
                            <label for="UserBirthYear">Birth Year</label>
                            <select name="data[User][birth_year]" class="form-control" id="UserBirthYear">
                                <option value="">I&#039;d prefer not to share</option>
                                @for($i = date('Y')-13; $i >= date('Y')-113; $i--)
                                    <option value="{{$i}}" @if($i == old('data.User.birth_year') || $i == array_get($data,'mentor_details.personalinfo.birth_year','')) {{'selected="selected"'}} @endif>{{$i}}</option>
                                @endfor
                            </select>
                            @if($errors->has('mentor_birth_year'))
                                <div class="error-message">
                                    @foreach($errors->get('mentor_birth_year') as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="clearfix">
                            <div class="pull-left"><input class="btn btn-primary btn-lg" type="submit" value="Save and continue" /></div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        /* chosen select setup */
                        jQuery('#ExpertProfileIndustryId').chosen({
                            width: "100%"
                        });

                        jQuery('#UserLanguageId').chosen({
                            width: "100%"
                        });

                        jQuery('#ExpertProfileSelectedExpertises').chosen({
                            max_selected_options: 7,
                            width: "100%"
                        });
                        jQuery('#ExpertProfileCountryExpertiseId').chosen({
                            max_selected_options: 10,
                            width: "100%"
                        });

                        jQuery('#ExpertProfileProfessionalBio')
                            .keyup(function(){ limitChars('ExpertProfileProfessionalBio', 1000); })
                            .keyup();

                        jQuery('#ExpertProfileEntrepreneurPitch')
                            .keyup(function(){ limitChars('ExpertProfileEntrepreneurPitch', 1000); })
                            .keyup();

                        jQuery('#UserPhotoUpload').change(function(){
                            if(this.files[0].size > 5242880) {
                                jQuery(this).parent().addClass('alert').addClass('alert-danger');
                                jQuery('#UserPhotoUpload').after('<div class="error-message large-photo">Photo is too large</div>');
                            }
                            if(this.files[0].size < 5242880 && jQuery(this).parent().hasClass('alert')) {
                                jQuery(this).parent().removeClass('alert').removeClass('alert-danger');
                                jQuery('.large-photo').remove();
                            }
                        });
                        // jQuery('select[name*=country_id]').change(function(){
                        //     if (jQuery(this).val() == '1'){
                        //         jQuery('#ethnicity-wrapper').slideDown('fast');
                        //     } else {
                        //         jQuery('#ethnicity-wrapper').slideUp('fast');
                        //     }
                        // });
                    });
                </script>
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>
@stop