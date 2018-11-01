@extends('layout.public')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div id="pcon" class="col-sm-8">
                <h1>About Your Venture</h1>
                <p>
                    Here is where you tell us about your business, social enterprise, or nonprofit. We use the term
                    "venture" to refer to all types of businesses and organizations.
                </p>
                <p>
                    Remember, the more details you include about your venture, the more likely you are to connect with
                    the mentors on Mentorif!
                </p>
                <div class="panel">
                    <div class="panel-body">
                        <form enctype="multipart/form-data" autocomplete="off" class="public" method="post" action="/account/mentee-venture">
                            {{csrf_field()}}
                            <div class="form-group @if($errors->has('business_type')) {{' alert alert-danger'}} @endif radio-group">
                                <fieldset>
                                    <legend>What type of venture or idea for a venture do you have?&#65279;<acronym
                                                title="Required Field">*</acronym></legend>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessType1For-profit">
                                            <input type="radio" name="data[BusinessProfile][business_type]" id="BusinessProfileBusinessType1For-profit" class=""
                                                   style="margin-bottom:-8px" value="profitable" @if('profitable' == old('data.BusinessProfile.business_type') || 'profitable' == array_get($data,'business_details.type','')) {{'checked="checked"'}} @endif />For-profit venture</label>
                                    </div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessType2Nonprofit">
                                            <input type="radio" name="data[BusinessProfile][business_type]" id="BusinessProfileBusinessType2Nonprofit" class=""
                                                    style="margin-bottom:-8px" value="nonprofitable" @if('nonprofitable' == old('data.BusinessProfile.business_type') || 'nonprofitable' == array_get($data,'business_details.type','')) {{'checked="checked"'}} @endif />Nonprofit
                                            organization</label></div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessType3Social-enterprise">
                                            <input  type="radio" name="data[BusinessProfile][business_type]" id="BusinessProfileBusinessType3Social-enterprise" class=""
                                                    style="margin-bottom:-8px" value="social" @if('social' == old('data.BusinessProfile.business_type') || 'social' == array_get($data,'business_details.type','')) {{'checked="checked"'}} @endif />Social
                                            enterprise, (a venture that uses profits to fulfill a social or
                                            environmental mission)</label></div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessType4Unsure">
                                            <input type="radio" name="data[BusinessProfile][business_type]" id="BusinessProfileBusinessType4Unsure" class=""
                                                    style="margin-bottom:-8px" value="unsure" @if('unsure' == old('data.BusinessProfile.business_type') || 'unsure' == array_get($data,'business_details.type','')) {{'checked="checked"'}} @endif />Unsure</label></div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessTypeOther">
                                            <input type="radio" name="data[BusinessProfile][business_type]" id="BusinessProfileBusinessTypeOther" class=""
                                                   style="margin-bottom:-8px" value="other" @if('other' == old('data.BusinessProfile.business_type') || 'other' == array_get($data,'business_details.type','')) {{'checked="checked"'}} @endif />Other</label>
                                    </div>
                                </fieldset>
                                @if($errors->has('business_type'))
                                    <div class="error-message">
                                        @foreach($errors->get('business_type') as $err)
                                            {{$err}}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group business_type_other hidden @if($errors->has('business_type_other')) {{' alert alert-danger'}} @endif ">
                                <label for="BusinessProfileBusinessTypeOther">If 'Other', please write in a type&#65279;<acronym
                                            title="Required Field">*</acronym></label>
                                <input name="data[BusinessProfile][business_type_other]" type="text" class="form-control" maxlength="20" value="{{old('data.BusinessProfile.business_type_other') ? : array_get($data,'business_details.type_other','')}}" id="BusinessProfileBusinessTypeOther"/>
                                @if($errors->has('business_type_other'))
                                    <div class="error-message">
                                        @foreach($errors->get('business_type_other') as $err)
                                            {{$err}}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group form_group">
                                <label for="BusinessProfileBusinessName">What is the
                                    name of your venture?<br/><em>Leave blank if your venture does not currently have a
                                        name</em>
                                </label>
                                <input name="data[BusinessProfile][business_name]" type="text" class="form-control" maxlength="100" value="{{old('data.BusinessProfile.business_name') ? : array_get($data,'business_details.name','') }}" id="BusinessProfileBusinessName"/>
                            </div>
                            <div class="form-group @if($errors->has('business_stage')) {{' alert alert-danger'}} @endif radio-group">
                                <fieldset>
                                    <legend>What stage best describes your venture?&#65279;<acronym
                                                title="Required Field">*</acronym></legend>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessStage0Idea">
                                            <input
                                                    type="radio" name="data[BusinessProfile][business_stage]"
                                                    id="BusinessProfileBusinessStage0Idea" class=""
                                                    style="margin-bottom:-8px" value="idea" @if('idea' == old('data.BusinessProfile.business_stage') || 'idea' == array_get($data,'business_details.stage','')) {{'checked="checked"'}} @endif />My venture is at the idea
                                            stage – it does not yet have a working prototype or customers and is not
                                            operational.</label>
                                    </div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessStage1Operational"><input
                                                    type="radio" name="data[BusinessProfile][business_stage]"
                                                    id="BusinessProfileBusinessStage1Operational" class=""
                                                    style="margin-bottom:-8px" value="operational" @if('operational' == old('data.BusinessProfile.business_stage') || 'operational' == array_get($data,'business_details.stage','')) {{'checked="checked"'}} @endif />My venture is
                                            operational, but does not yet have any earned revenue. (Earned revenue
                                            results from selling a product or service).</label>
                                    </div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessStage2Revenue"><input
                                                    type="radio" name="data[BusinessProfile][business_stage]"
                                                    id="BusinessProfileBusinessStage2Revenue" class=""
                                                    style="margin-bottom:-8px" value="revenue" @if('revenue' == old('data.BusinessProfile.business_stage') || 'revenue' == array_get($data,'business_details.stage','')) {{'checked="checked"'}} @endif />My venture has
                                            customers and is earning revenue, but is not yet profitable. (A venture is
                                            not profitable when its earned revenue is less than its expenses).</label>
                                    </div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessStage3Profitable"><input
                                                    type="radio" name="data[BusinessProfile][business_stage]"
                                                    id="BusinessProfileBusinessStage3Profitable" class=""
                                                    style="margin-bottom:-8px" value="profitable" @if('profitable' == old('data.BusinessProfile.business_stage') || 'profitable' == array_get($data,'business_details.stage','')) {{'checked="checked"'}} @endif />My venture is
                                            operating at scale and is profitable. (Scale occurs when a venture is able
                                            to operate in volume discounts to clients or from suppliers. A venture is
                                            profitable when its earned revenue is greater than its expenses).</label>
                                    </div>
                                    <div class='radio'>
                                        <label for="BusinessProfileBusinessStageOther"><input
                                                    type="radio" name="data[BusinessProfile][business_stage]"
                                                    id="BusinessProfileBusinessStageOther" class=""
                                                    style="margin-bottom:-8px" value="other" @if('other' == old('data.BusinessProfile.business_stage') || 'other' == array_get($data,'business_details.stage','')) {{'checked="checked"'}} @endif />Other</label>
                                    </div>
                                </fieldset>
                                @if($errors->has('business_stage'))
                                    <div class="error-message">
                                        @foreach($errors->get('business_stage') as $err)
                                            {{$err}}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group form_group business_stage_other hidden @if($errors->has('business_stage_other')) {{' alert alert-danger'}} @endif "><label
                                        for="BusinessProfileBusinessStageOther">If 'Other', please write in a
                                    stage</label><input name="data[BusinessProfile][business_stage_other]" type="text"
                                                        class="form-control" maxlength="20" value="{{old('data.BusinessProfile.business_stage_other') ? : array_get($data,'business_details.stage_other','') }}"
                                                        id="BusinessProfileBusinessStageOther"/>
                                @if($errors->has('business_stage_other'))
                                    <div class="error-message">
                                        @foreach($errors->get('business_stage_other') as $err)
                                            {{$err}}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div id="launch-date-wrapper" class="@if('idea' == old('data.BusinessProfile.business_stage')) {{'hidden'}} @endif
                            @if($errors->has('business_launch_month') || $errors->has('business_launch_year')) {{' alert alert-danger'}} @endif">
                                <label>When did you start your venture?&#65279;<acronym title="Required Field">*</acronym></label>
                                <div class="form-group">
                                    <select name="data[BusinessProfile][launch_date_month]"  class="form-control" style="margin-bottom:-8px" id="BusinessProfileLaunchDateMonth">
                                        <option value="" @if(empty(old('data.BusinessProfile.launch_date_month'))) {{'selected="selected"'}} @endif >-- Month --</option>
                                        <option value="1" @if('1' == old('data.BusinessProfile.launch_date_month') || '1' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >January</option>
                                        <option value="2" @if('2' == old('data.BusinessProfile.launch_date_month') || '2' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >February</option>
                                        <option value="3" @if('3' == old('data.BusinessProfile.launch_date_month') || '3' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >March</option>
                                        <option value="4" @if('4' == old('data.BusinessProfile.launch_date_month') || '4' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >April</option>
                                        <option value="5" @if('5' == old('data.BusinessProfile.launch_date_month') || '5' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >May</option>
                                        <option value="6" @if('6' == old('data.BusinessProfile.launch_date_month') || '6' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >June</option>
                                        <option value="7" @if('7' == old('data.BusinessProfile.launch_date_month') || '7' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >July</option>
                                        <option value="8" @if('8' == old('data.BusinessProfile.launch_date_month') || '8' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >August</option>
                                        <option value="9" @if('9' == old('data.BusinessProfile.launch_date_month') || '9' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >September</option>
                                        <option value="10" @if('10' == old('data.BusinessProfile.launch_date_month') || '10' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >October</option>
                                        <option value="11" @if('11' == old('data.BusinessProfile.launch_date_month') || '11' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >November</option>
                                        <option value="12" @if('12' == old('data.BusinessProfile.launch_date_month') || '12' == array_get($data,'business_details.launch_month','')) {{'selected="selected"'}} @endif >December</option>
                                    </select>
                                    @if($errors->has('business_launch_month'))
                                        <div class="error-message">
                                            @foreach($errors->get('business_launch_month') as $err)
                                                {{$err}}
                                            @endforeach
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <select name="data[BusinessProfile][launch_date_year]" class="form-control" id="BusinessProfileLaunchDateYear">
                                        <option value="">-- Year --</option>
                                        @for($i = date('Y'); $i >= date('Y')-100; $i-- )
                                            <option value="{{$i}}" @if($i == old('data.BusinessProfile.launch_date_year') || $i == array_get($data,'business_details.launch_year','')) {{'selected="selected"'}} @endif >{{$i}}</option>
                                        @endfor
                                    </select>
                                    @if($errors->has('business_launch_year'))
                                        <div class="error-message">
                                            @foreach($errors->get('business_launch_year') as $err)
                                                {{$err}}
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group form_group @if($errors->has('business_industry')) {{' alert alert-danger'}} @endif">
                                <label for="BusinessProfileIndustryId">What is the industry that best discribes your venture?&#65279;<acronym title="Required Field">*</acronym></label>
                                <select name="data[BusinessProfile][industry_id]" class="form-control" id="BusinessProfileIndustryId">
                                    <option value="" @if(empty(old('data.BusinessProfile.industry_id'))) {{'selected="selected"'}} @endif>- Select one -</option>
                                    @foreach(array_get($data,'industries',[]) as $industry)
                                        <option value="{{array_get($industry,'id','')}}" @if(array_get($industry,'id') == old('data.BusinessProfile.industry_id') || array_get($industry,'id') == array_get($data,'business_details.industry_id','')) {{'selected="selected"'}} @endif >{{array_get($industry,'name','')}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('business_industry'))
                                    <div class="error-message">
                                        @foreach($errors->get('business_industry') as $err)
                                            {{$err}}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('business_description')) {{' alert alert-danger'}} @endif">
                                <label for="BusinessProfileBusinessOffers">Please provide a
                                    description of your venture for potential mentors to see.&#65279;<acronym
                                            title="Required Field">*</acronym> <em class="hidden-80"> (<span
                                                class="limit">1000</span> characters left)</em><br><em>Include your
                                        motivations, what actions you’ve taken up until now, and your future goals in
                                        150 or more words.</em></label>
                                <textarea name="data[BusinessProfile][business_offers]" cols="30" rows="4" class="form-control" placeholder="Good responses tend to range between 300 and 1,000 characters"
                                        id="BusinessProfileBusinessOffers">{{old('data.BusinessProfile.business_offers') ? : array_get($data,'business_details.description','') }}</textarea>
                                @if($errors->has('business_description'))
                                    <div class="error-message">
                                        @foreach($errors->get('business_description') as $err)
                                            {{$err}}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('business_functional_area')) {{' alert alert-danger'}} @endif">
                                <label for="BusinessProfileSelectedFunctionalAreas">Please select the 3 areas of expertise that would be most helpful to your venture right now.&#65279;<acronym
                                            title="Required Field">*</acronym></label>
                                <input type="hidden" name="data[BusinessProfile][SelectedFunctionalAreas]" value=""/>
                                <select name="data[BusinessProfile][SelectedFunctionalAreas][]" class="form-control"
                                        multiple="multiple" data-placeholder="- Select up to 3 -"
                                        id="BusinessProfileSelectedFunctionalAreas">
                                    <option value="">- Select up to 3 -</option>
                                    <?php $old = (!empty(old('data.BusinessProfile.SelectedFunctionalAreas',[])) && is_array(old('data.BusinessProfile.SelectedFunctionalAreas'))) ? old('data.BusinessProfile.SelectedFunctionalAreas') : [];
                                    $func_areas = [];
                                    foreach(array_get($data,'business_details.business_function_area',[]) as $area) {
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
                                @if($errors->has('business_functional_area'))
                                    <div class="error-message">
                                        @foreach($errors->get('business_functional_area') as $err)
                                            {{$err}}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group @if($errors->has('business_offer')) {{' alert alert-danger'}} @endif">
                                <label for="BusinessProfileBusinessRequest">Please provide a description of how a mentor could help you develop your venture.&#65279;<acronym
                                            title="Required Field">*</acronym> <em class="hidden-80"> (<span
                                                class="limit">1000</span> characters left)</em><br><em>Include the
                                        current challenges you are facing and specific areas of your venture that you
                                        need help with in 150 or more words.</em></label>
                                <textarea name="data[BusinessProfile][business_request]" cols="30" rows="4" class="form-control" id="BusinessProfileBusinessRequest">{{old('data.BusinessProfile.business_request') ? : array_get($data,'business_details.request','')}}</textarea>
                                @if($errors->has('business_offer'))
                                    <div class="error-message">
                                        @foreach($errors->get('business_offer') as $err)
                                            {{$err}}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group public @if($errors->has('business_country')) {{' alert alert-danger'}} @endif">
                                <label for="UserCountryId" class="bold">Please tell us where your venture is based.&#65279;<acronym title="Required Field">*</acronym></label>
                                <select name="data[User][country_id]" class="form-control" id="UserCountryId">
                                    <option value="">- Select one -</option>
                                    @foreach(array_get($data,'countries',[]) as $country)
                                        <option value="{{array_get($country,'id','')}}" data-dial-code="{{array_get($country,'dial_code','')}}"
                                        @if(array_get($country,'id') == old('data.User.country_id') || array_get($country,'id') == array_get($data,'business_details.business_address.country_id','')) {{'selected="selected"'}} @endif >{{array_get($country,'name','')}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('business_country'))
                                    <div class="error-message">
                                        @foreach($errors->get('business_country') as $err)
                                            {{$err}}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="city-state-zip">
                                <div class="col-md-6 city">
                                    <div class="form-group public @if($errors->has('business_city')) {{' alert alert-danger'}} @endif">
                                        <label for="UserCity">City</label>
                                        <input name="data[User][city]" type="text" class="form-control" id="UserCity" maxlength="50" value="{{old('data.User.city') ? : array_get($data,'business_details.business_address.city','')}}"/>
                                        @if($errors->has('business_city'))
                                            <div class="error-message">
                                                @foreach($errors->get('business_city') as $err)
                                                    {{$err}}
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group stateus @if($errors->has('business_state')) {{' alert alert-danger'}} @endif">
                                        <label for="UserState">Region<acronym title="Shows in your public profile" class="public">&nbsp;</acronym></label>
                                        <select name="data[User][state]" class="form-control" id="UserState"></select>
                                        @if($errors->has('business_state'))
                                            <div class="error-message">
                                                @foreach($errors->get('business_state') as $err)
                                                    {{$err}}
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3 hidden">
                                    <div class="form-group  stateother">
                                        <label for="UserStateOther">State/Region/Department (if applicable)<acronym title="Shows in your public profile" class="public">&nbsp;</acronym></label>
                                        <input name="data[User][state]" type="text" class="form-control" id="UserStateOther" maxlength="50" value=""/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 zip">
                                        <div class="form-group  public @if($errors->has('business_pincode')) {{' alert alert-danger'}} @endif">
                                            <label for="UserPostalCode">Postal Code</label>
                                            <input name="data[User][postal_code]" type="text" class="form-control" id="UserPostalCode" maxlength="10" value="{{old('data.User.postal_code') ? : array_get($data,'business_details.business_address.pincode','')}}"/>
                                            @if($errors->has('business_pincode'))
                                                <div class="error-message">
                                                    @foreach($errors->get('business_pincode') as $err)
                                                        {{$err}}
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div id="website-wrapper" class="form-group ">
                                    <label>Please provide all the website addresses where you promote your business.</label>
                                    <div class="website-question">
                                        <div class="BusinessProfileWebsite1 @if($errors->has('business_website.0.url') || $errors->has('business_website.0.type')) {{' alert alert-danger '}} @endif">
                                            <div class="form-group">
                                                <input name="data[BusinessProfile][Website][1][url]" type="text" class="form-control" placeholder="http(s)://www.yoursite.com" value="{{old('data.BusinessProfile.Website.1.url') ? : urldecode(array_get($data,'business_details.business_promotion_address.0.url',''))}}"
                                                        id="BusinessProfileWebsite1Url"/>
                                                @if($errors->has('business_website.0.url'))
                                                    <div class="error-message">
                                                        @foreach($errors->get('business_website.0.url') as $err)
                                                            {{$err}}
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <select name="data[BusinessProfile][Website][1][type]" class="form-control" style="margin-bottom: -8px;" id="BusinessProfileWebsite1Type">
                                                    <option value="">Select a website type</option>
                                                    <option value="active_website" @if('active_website' == old('data.BusinessProfile.Website.1.type') || 'active_website' == array_get($data,'business_details.business_promotion_address.0.type','')) {{'selected="selected"'}} @endif>My venture&#039;s active website address</option>
                                                    <option value="linkedin" @if('linkedin' == old('data.BusinessProfile.Website.1.type') || 'linkedin' == array_get($data,'business_details.business_promotion_address.0.type','')) {{'selected="selected"'}} @endif>Linkedin</option>
                                                    <option value="facebook" @if('facebook' == old('data.BusinessProfile.Website.1.type') || 'facebook' == array_get($data,'business_details.business_promotion_address.0.type','')) {{'selected="selected"'}} @endif>Facebook</option>
                                                    <option value="twitter" @if('twitter' == old('data.BusinessProfile.Website.1.type') || 'twitter' == array_get($data,'business_details.business_promotion_address.0.type','')) {{'selected="selected"'}} @endif>Twitter</option>
                                                    <option value="other" @if('other' == old('data.BusinessProfile.Website.1.type') || 'other' == array_get($data,'business_details.business_promotion_address.0.type','')) {{'selected="selected"'}} @endif>Other</option>
                                                </select>
                                                @if($errors->has('business_website.0.type'))
                                                    <div class="error-message">
                                                        @foreach($errors->get('business_website.0.type') as $err)
                                                            {{$err}}
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class=" @if($errors->has('business_website.1.url') || $errors->has('business_website.1.type')) {{' alert alert-danger'}} @endif @if((empty(old('data.BusinessProfile.Website.2.url')) && empty(old('data.BusinessProfile.Website.2.type'))) && empty(array_get($data,'business_details.business_promotion_address.1',[]))) {{'hidden'}} @endif">
                                            <div class="form-group">
                                                <input name="data[BusinessProfile][Website][2][url]" type="text" class="form-control" placeholder="http(s)://www.yoursite.com" value="{{old('data.BusinessProfile.Website.2.url') ? : urldecode(array_get($data,'business_details.business_promotion_address.1.url',''))}}" id="BusinessProfileWebsite2Url"/>
                                                @if($errors->has('business_website.1.url'))
                                                    <div class="error-message">
                                                        @foreach($errors->get('business_website.1.url') as $err)
                                                            {{$err}}
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group"><select
                                                        name="data[BusinessProfile][Website][2][type]"
                                                        class="form-control" style="margin-bottom: -8px;"
                                                        id="BusinessProfileWebsite2Type">
                                                    <option value="">Select a website type</option>
                                                    <option value="active_website" @if('active_website' == old('data.BusinessProfile.Website.2.type') || 'active_website' == array_get($data,'business_details.business_promotion_address.1.type','')) {{'selected="selected"'}} @endif>My venture&#039;s active website address</option>
                                                    <option value="linkedin" @if('linkedin' == old('data.BusinessProfile.Website.2.type') || 'linkedin' == array_get($data,'business_details.business_promotion_address.1.type','')) {{'selected="selected"'}} @endif>Linkedin</option>
                                                    <option value="facebook" @if('facebook' == old('data.BusinessProfile.Website.2.type') || 'facebook' == array_get($data,'business_details.business_promotion_address.1.type','')) {{'selected="selected"'}} @endif>Facebook</option>
                                                    <option value="twitter" @if('twitter' == old('data.BusinessProfile.Website.2.type') || 'twitter' == array_get($data,'business_details.business_promotion_address.1.type','')) {{'selected="selected"'}} @endif>Twitter</option>
                                                    <option value="other" @if('other' == old('data.BusinessProfile.Website.2.type') || 'other' == array_get($data,'business_details.business_promotion_address.1.type','')) {{'selected="selected"'}} @endif>Other</option>
                                                </select>
                                                @if($errors->has('business_website.1.type'))
                                                    <div class="error-message">
                                                        @foreach($errors->get('business_website.1.type') as $err)
                                                            {{$err}}
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                            <a class="delete-website">delete</a></div>
                                        <div class="@if($errors->has('business_website.2.url') || $errors->has('business_website.2.type')) {{' alert alert-danger'}} @endif @if((empty(old('data.BusinessProfile.Website.3.url')) && empty(old('data.BusinessProfile.Website.3.type'))) && empty(array_get($data,'business_details.business_promotion_address.2',[]))) {{'hidden'}} @endif">
                                            <div class="form-group"><input
                                                        name="data[BusinessProfile][Website][3][url]" type="text"
                                                        class="form-control" placeholder="http(s)://www.yoursite.com" value="{{old('data.BusinessProfile.Website.3.url') ? : urldecode(array_get($data,'business_details.business_promotion_address.2.url',''))}}"
                                                        id="BusinessProfileWebsite3Url"/>
                                                @if($errors->has('business_website.2.url'))
                                                    <div class="error-message">
                                                        @foreach($errors->get('business_website.2.url') as $err)
                                                            {{$err}}
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group"><select
                                                        name="data[BusinessProfile][Website][3][type]"
                                                        class="form-control" style="margin-bottom: -8px;"
                                                        id="BusinessProfileWebsite3Type">
                                                    <option value="">Select a website type</option>
                                                    <option value="active_website" @if('active_website' == old('data.BusinessProfile.Website.3.type') || 'active_website' == array_get($data,'business_details.business_promotion_address.2.type','')) {{'selected="selected"'}} @endif>My venture&#039;s active website address</option>
                                                    <option value="linkedin" @if('linkedin' == old('data.BusinessProfile.Website.3.type') || 'linkedin' == array_get($data,'business_details.business_promotion_address.2.type','')) {{'selected="selected"'}} @endif>Linkedin</option>
                                                    <option value="facebook" @if('facebook' == old('data.BusinessProfile.Website.3.type') || 'facebook' == array_get($data,'business_details.business_promotion_address.2.type','')) {{'selected="selected"'}} @endif>Facebook</option>
                                                    <option value="twitter" @if('twitter' == old('data.BusinessProfile.Website.3.type') || 'twitter' == array_get($data,'business_details.business_promotion_address.2.type','')) {{'selected="selected"'}} @endif>Twitter</option>
                                                    <option value="other" @if('other' == old('data.BusinessProfile.Website.3.type') || 'other' == array_get($data,'business_details.business_promotion_address.2.type','')) {{'selected="selected"'}} @endif>Other</option>
                                                </select>
                                                @if($errors->has('business_website.2.type'))
                                                    <div class="error-message">
                                                        @foreach($errors->get('business_website.2.type') as $err)
                                                            {{$err}}
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                            <a class="delete-website">delete</a>
                                        </div>
                                        <div class="@if($errors->has('business_website.3.url') || $errors->has('business_website.3.type')) {{' alert alert-danger'}} @endif @if((empty(old('data.BusinessProfile.Website.4.url')) && empty(old('data.BusinessProfile.Website.4.type'))) && empty(array_get($data,'business_details.business_promotion_address.3',[]))) {{'hidden'}} @endif">
                                            <div class="form-group"><input
                                                        name="data[BusinessProfile][Website][4][url]" type="text"
                                                        class="form-control" placeholder="http(s)://www.yoursite.com" value="{{old('data.BusinessProfile.Website.4.url') ? : urldecode(array_get($data,'business_details.business_promotion_address.3.url',''))}}"
                                                        id="BusinessProfileWebsite4Url"/>
                                                @if($errors->has('business_website.3.url'))
                                                    <div class="error-message">
                                                        @foreach($errors->get('business_website.3.url') as $err)
                                                            {{$err}}
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group"><select
                                                        name="data[BusinessProfile][Website][4][type]"
                                                        class="form-control" style="margin-bottom: -8px;"
                                                        id="BusinessProfileWebsite4Type">
                                                    <option value="">Select a website type</option>
                                                    <option value="active_website" @if('active_website' == old('data.BusinessProfile.Website.4.type') || 'active_website' == array_get($data,'business_details.business_promotion_address.3.type','')) {{'selected="selected"'}} @endif>My venture&#039;s active website address</option>
                                                    <option value="linkedin" @if('linkedin' == old('data.BusinessProfile.Website.4.type') || 'linkedin' == array_get($data,'business_details.business_promotion_address.3.type','')) {{'selected="selected"'}} @endif>Linkedin</option>
                                                    <option value="facebook" @if('facebook' == old('data.BusinessProfile.Website.4.type') || 'facebook' == array_get($data,'business_details.business_promotion_address.3.type','')) {{'selected="selected"'}} @endif>Facebook</option>
                                                    <option value="twitter" @if('twitter' == old('data.BusinessProfile.Website.4.type') || 'twitter' == array_get($data,'business_details.business_promotion_address.3.type','')) {{'selected="selected"'}} @endif>Twitter</option>
                                                    <option value="other" @if('other' == old('data.BusinessProfile.Website.4.type') || 'other' == array_get($data,'business_details.business_promotion_address.3.type','')) {{'selected="selected"'}} @endif>Other</option>
                                                </select>
                                                @if($errors->has('business_website.3.type'))
                                                    <div class="error-message">
                                                        @foreach($errors->get('business_website.3.type') as $err)
                                                            {{$err}}
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                            <a class="delete-website">delete</a>
                                        </div>
                                        <div class="@if($errors->has('business_website.4.url') || $errors->has('business_website.4.type')) {{' alert alert-danger'}} @endif @if((empty(old('data.BusinessProfile.Website.5.url')) && empty(old('data.BusinessProfile.Website.5.type'))) && empty(array_get($data,'business_details.business_promotion_address.4',[]))) {{'hidden'}} @endif">
                                            <div class="form-group"><input
                                                        name="data[BusinessProfile][Website][5][url]" type="text"
                                                        class="form-control" placeholder="http(s)://www.yoursite.com" value="{{old('data.BusinessProfile.Website.5.url') ? : urldecode(array_get($data,'business_details.business_promotion_address.4.url',''))}}"
                                                        id="BusinessProfileWebsite5Url"/>
                                                @if($errors->has('business_website.4.url'))
                                                    <div class="error-message">
                                                        @foreach($errors->get('business_website.4.url') as $err)
                                                            {{$err}}
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group"><select
                                                        name="data[BusinessProfile][Website][5][type]"
                                                        class="form-control" style="margin-bottom: -8px;"
                                                        id="BusinessProfileWebsite5Type">
                                                    <option value="">Select a website type</option>
                                                    <option value="active_website" @if('active_website' == old('data.BusinessProfile.Website.5.type') || 'active_website' == array_get($data,'business_details.business_promotion_address.4.type','')) {{'selected="selected"'}} @endif>My venture&#039;s active website address</option>
                                                    <option value="linkedin" @if('linkedin' == old('data.BusinessProfile.Website.5.type') || 'linkedin' == array_get($data,'business_details.business_promotion_address.4.type','')) {{'selected="selected"'}} @endif>Linkedin</option>
                                                    <option value="facebook" @if('facebook' == old('data.BusinessProfile.Website.5.type') || 'facebook' == array_get($data,'business_details.business_promotion_address.4.type','')) {{'selected="selected"'}} @endif>Facebook</option>
                                                    <option value="twitter" @if('twitter' == old('data.BusinessProfile.Website.5.type') || 'twitter' == array_get($data,'business_details.business_promotion_address.4.type','')) {{'selected="selected"'}} @endif>Twitter</option>
                                                    <option value="other" @if('other' == old('data.BusinessProfile.Website.5.type') || 'other' == array_get($data,'business_details.business_promotion_address.4.type','')) {{'selected="selected"'}} @endif>Other</option>
                                                </select>
                                                @if($errors->has('business_website.4.type'))
                                                    <div class="error-message">
                                                        @foreach($errors->get('business_website.4.type') as $err)
                                                            {{$err}}
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                            <a class="delete-website">delete</a>
                                        </div>
                                        <br>
                                        <div class="add-website-text">
                                            <span class="glyphicon glyphicon-plus" id="add-website"></span> Add website
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="data[BusinessProfile][baseline_survey]" value="1" id="BusinessProfileBaselineSurvey"/>
                                <div class="pull-left"><input class="btn btn-primary btn-lg" type="submit" value="Save and Continue"/></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <script type="text/javascript">
                var regionLabels = {
                    "1": "State",
                    "3": "State",
                    "90": "Department",
                    "219": "Governorate",
                    "0": "Region"
                };

                jQuery(function ($) {
                    //if page is loaded with data
                    // if ($('input[name*=business_stage][type=radio]')[0] && $('input[name*=business_stage][type=radio]')[0].checked) {
                    //     $('#launch-date-wrapper').slideUp('fast').addClass("hidden");
                    //     $('.business_stage_other').addClass('hidden');
                    // } else if ($('input[name*=business_stage][type=radio]')[4] && $('input[name*=business_stage][type=radio]')[4].checked) {
                    //     $('.business_stage_other').removeClass('hidden');
                    //     $('#launch-date-wrapper').slideDown('fast').removeClass('hidden');
                    // } else {
                    //     $('.business_stage_other').addClass('hidden');
                    //     $('#launch-date-wrapper').slideDown('fast').removeClass('hidden');
                    // }
                    //on change
                    $('input[name*=business_stage][type=radio]').change(function () {
                        if ($(this).val() == 'idea' && $(this).is(':checked')) {
                            $('#launch-date-wrapper').slideUp('fast').addClass("hidden");
                            $('.business_stage_other').addClass('hidden');
                        } else if ($(this).val() == 'other' && $(this).is(':checked')) {
                            $('#launch-date-wrapper').slideDown('fast').removeClass('hidden');
                            $('.business_stage_other').removeClass('hidden');
                        } else if ($(this).is(':checked')) {
                            $('#launch-date-wrapper').slideDown('fast').removeClass('hidden');
                            $('.business_stage_other').addClass('hidden');
                        }
                    }).change();

                    $('input[name*=business_type][type=radio]').change(function () {
                        if ($(this).val() == 'other' && $(this).is(':checked')) {
                            $('.business_type_other').removeClass('hidden');
                        } else {
                            $('.business_type_other').addClass('hidden');

                        }
                    }).change();
                    $('input#UserInvite').change(function () {
                        var hideFields = [
                            '#UserCountryId',
                            '#UserCity',
                            '#UserEsdCounty',
                            '#UserState',
                            '#UserStateOther',
                            '#UserPostalCode',
                            '#UserPhone'
                        ];
                        if ($(this).prop('checked')) {
                            $(hideFields.join(",")).val('');
                            // after clearing out values above, put back values if default state is set
                            $('#UserCountryId').val(1);
                            $('#UserState').val("");
                            $(hideFields.join(",")).closest("div").hide();
                            $("hr.hide-on-invite").hide();
                        } else {
                            $(hideFields.join(",")).closest("div").show();
                            $("hr.hide-on-invite").show();
                            $(".stateother").hide(); // have to hide this again because of the multiple-field showing above
                        }
                    }).change();

                    $('#UserCountryId').chosen({
                        width: "100%"
                    });
                    $('#UserCountryId').change(function () {
                        var chosenCountryId = $(this).val();
                        //$('#UserPhone').val('+' + country_codes[chosenCountryId] + ' - ' + $('#UserPhone').val());
                    });
                    $('#BusinessProfileSelectedFunctionalAreas').chosen({
                        width: "100%",
                        max_selected_options: 3
                    });
                    $('#BusinessProfileIndustryId, #UserLanguageId').chosen({
                        width: "100%"
                    });
                    var initialState = "{{old('data.User.state') ? : array_get($data,'business_details.business_address.state_id','')}}";
                    var phoneNumber = $('#UserPhone').val();
                    if ($('#UserCountryId').length > 0) {
                        $('#UserCountryId').change(function () {
                            var chosenCountryId = $(this).val();
                            var country_code = $(this).data('dial-code');
                            //var number = $('#UserPhone').val();
                            //$('#UserPhone').val('+' + country_code + ' - ' + phoneNumber);
                            if (typeof chosenCountryId != 'undefined' && chosenCountryId != '') {
                                $.ajax({
                                    url: "/country-region",
                                    type: 'GET',
                                    dataType: 'JSON',
                                    async: true,
                                    data: {cid:chosenCountryId},
                                    success: function(ret) {
                                        if (1004 == parseInt(ret.code) && typeof ret.data !== 'undefined') {
                                            $('#UserState').html($("<option></option>").attr("value",'').text("Select an option"))
                                            $.each(ret.data, function(key, value){
                                                $('#UserState').append($("<option></option>").attr("value",value.id).text(value.name));
                                            });
                                            $("#UserState").find('option[value="' + initialState + '"]').attr('selected', 'selected').end()
                                                .trigger('chosen:updated');
                                            $(".stateus").removeClass('hide');
                                            $(".stateother").addClass('hide').find("input").val('').attr("disabled", "disabled");
                                        } else {
                                            $(".stateus").addClass('hide').find("input").attr("disabled", "disabled");
                                            $('#UserPostalCode').closest('div').hide();
                                        }
                                    }
                                });
                            }
                            // $.ajax({
                            //     url: "country-region" + chosenCountryId,
                            // })
                            //     .done(function (data) {
                            //         if (data.length) {
                            //             $('#UserState')
                            //                 .html(data)
                            //                 .find('option[value="' + initialState + '"]').attr('selected', 'selected').end()
                            //                 .trigger('chosen:updated');
                            //             $(".stateus").removeClass('hide')
                            //
                            //             $(".stateother").addClass('hide').find("input").val('').attr("disabled", "disabled");
                            //             if (!$('input#UserInvite').prop('checked')) {
                            //                 $(".stateus").removeClass('hide')
                            //                     .find('label').text(regionLabels[chosenCountryId] || regionLabels[0]).end()
                            //                     .find("input").removeAttr("disabled");
                            //                 $('#UserPostalCode').closest('div').show();
                            //             }
                            //
                            //         } else {
                            //             $(".stateus").addClass('hide').find("input").attr("disabled", "disabled");
                            //             $('#UserPostalCode').closest('div').hide();
                            //             if (!$('input#UserInvite').prop('checked')) {
                            //                 $(".stateother").removeClass('hide')
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
                        // $.ajax({
                        //     url: "/country-region",
                        //     type: 'GET',
                        //     dataType: 'JSON',
                        //     async: true,
                        //     data: {cid:chosenCountryId},
                        //     success: function(ret) {
                        //         if (ret.code == 'success') {
                        //             return_da = ret.data;
                        //         } else {
                        //             console.log(ret.message);
                        //         }
                        //     }
                        // });
                        // var chosenCountryId = 1;
                        // $.ajax({
                        //     url: "/country-region/" + chosenCountryId,
                        // })
                        //     .done(function (data) {
                        //         if (data.length) {
                        //             $('#UserState')
                        //                 .html(data)
                        //                 .find('option[value="' + initialState + '"]').attr('selected', 'selected').end()
                        //                 .trigger('chosen:updated');
                        //             $(".stateus").removeClass('hide')
                        //
                        //             $(".stateother").addClass('hide').find("input").val('').attr("disabled", "disabled");
                        //             if (!$('input#UserInvite').prop('checked')) {
                        //                 $(".stateus").removeClass('hide')
                        //                     .find('label').text(regionLabels[chosenCountryId] || regionLabels[0]).end()
                        //                     .find("input").removeAttr("disabled");
                        //                 $('#UserPostalCode').closest('div').show();
                        //             }
                        //
                        //         } else {
                        //             $(".stateus").addClass('hide').find("input").attr("disabled", "disabled");
                        //             $('#UserPostalCode').closest('div').hide();
                        //             if (!$('input#UserInvite').prop('checked')) {
                        //                 $(".stateother").removeClass('hide')
                        //                     .find('label').text(regionLabels[chosenCountryId] || regionLabels[0]).end()
                        //                     .find("input").removeAttr("disabled").val('');
                        //             }
                        //         }
                        //
                        //         initialState = '';
                        //     });
                    }

                    $('select[name*=state]').chosen({
                        width: "100%"
                    });


                    $('#BusinessProfileBusinessOffers')
                        .keyup(function () {
                            limitChars('BusinessProfileBusinessOffers', 1000);
                        })
                        .keyup();
                    $('#BusinessProfileBusinessRequest')
                        .keyup(function () {
                            limitChars('BusinessProfileBusinessRequest', 1000);
                        })
                        .keyup();
                    $('#add-website').on('click', function () {
                        var websiteCount = $('.website-question').children('.website').length;
                        if (websiteCount < 5) {
                            $('.website-question').children().each(function () {
                                if ($(this).hasClass('hidden')) {
                                    $(this).addClass('website');
                                    $(this).removeClass('hidden');
                                    return false;
                                }
                            });
                        }
                    });
                    $(document).on('click', 'a.delete-website', function () {
                        var className = $(this).parent().attr('class');
                        $('#' + className + "Url").val('');
                        $('#' + className + "Type").val('');
                        $(this.parentElement).addClass('hidden');
                        $(this.parentElement).removeClass('website');
                    });
                });
            </script>
        </div>
@stop