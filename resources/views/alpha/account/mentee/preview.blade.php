@extends('layout.public')
@section('content')
<div class="container">
    <div class="row top-buffer">
        <div id="pcon" class="col-xs-12 public-profile">
            <div class="row clearfix">
                <div class="col-md-8 col-md-offset-2">
                    <div class="bottom-buffer row ">
                        <h1 class='col-md-12'>Do you like the way your profile looks?</h1>
                        <p class='col-md-12'>An attractive and detailed profile is critical to finding a valuable connection on Mentorif. This is what other users will see when considering sending you a message. Please take a look and make sure that others will clearly understand what to expect mentoring with you.</p>
                        <p class="col-md-6">
                            <a href="/account/business-venture" class="btn btn-secondary go-back">Go back and edit profile</a>
                        </p>
                        <p class="col-md-6">
                            <a href="/account/ready" class="btn btn-primary">I'm ready to connect with someone!</a>
                            @if(!empty($errors->has('errs')))
                            <div class="errorinfo alert alert-danger">
                                @foreach($errors->get('errs') as $error)
                                    <h4><span class="glyphicon glyphicon-exclamation-sign"></span> {{$error}}</h4>
                                @endforeach
                            </div>
                            @endif
                        </p>
                    </div>
                    <div class="profile-card">
                        <div class="panel-footer clearfix media affinity-bar-container">
                            <div class="pull-left">
                                <a href="javascript:void(0)"
                                   title="View {{array_get($data,'f_name','').' '.array_get($data,'l_name')}}'s Profile">
                                    <img class="profile-pic img-circle" src="{{asset('storage').DIRECTORY_SEPARATOR.array_get($data,'profile_pic_path')}}" alt="{{array_get($data,'f_name','').' '.array_get($data,'l_name')}}" />
                                </a>
                            </div>
                            <div class="media-body">
                                <p class="user-name">
                                    <a href="javascript:void(0)">{{ucwords(array_get($data,'f_name','').' '.array_get($data,'l_name'))}}</a>
                                </p>
                                <p class="user-info">
                                    <small>
                                        <span class="glyphicon glyphicon-map-marker"></span> {{array_get($data,'businessinfo.business_address.state_detail.name','').', '.array_get($data,'businessinfo.business_address.country_detail.name','')}}<br/>
                                    </small>
                                    <small>
                                        <span class="glyphicon glyphicon-tag" title="Industry"></span>
                                        {{array_get($data,'businessinfo.industry_detail.name','')}}<br/>
                                    </small>
                                </p>
                                <div class="pull-left">
                                    <div class="badges">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>Recent Activity</td>
                                                <td>
                                                    {{--<a href="/learn-more/badges" target="_blank" class="badge badge-offers-1" data-toggle="tooltip" data-container="body" title="Has been active in the last 12 months"></a>--}}
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end .media-body -->
                        </div> <!-- end dashboard's .clearfix or footer_class or .affinity-bar -->
                    </div><br>
                </div>
                <!--            similar users panel-->
                <!--        end of similar users panel-->
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            What I Need Help With
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    {{array_get($data,'businessinfo.request','')}}
                                </div>
                                <div class="col-sm-5">
                                    <div class="expertise-list">
                                        <ul class="list-unstyled">
                                            <li class="clearfix">
                                                <strong>Expertise</strong>
                                                <ul id="expertiseList">
                                                    @foreach(array_get($data,'businessinfo.business_function_area') as $func)
                                                        <li>{{array_get($func, 'functional_area.functionalareagroup.name')}}&nbsp;&raquo;&nbsp;{{array_get($func, 'functional_area.name')}}</li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <hr>
                                            <li>
                                                <strong>Experience</strong>
                                            </li>
                                            <li>Business is {{('other' !== array_get($data,'businessinfo.stage')) ? array_get($data,'businessinfo.stage_txt') : array_get($data,'businessinfo.stage_other')}}</li>
                                            <li>Languages Spoken: {{implode(', ', array_get($data,'personalinfo.spoken_lang',[]))}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default pos-relative">
                        <div class="panel-heading">
                            About My Business</div>
                        <div class="panel-body">
                            <h4></h4>
                            <ul class="list-unstyled">
                                <li >
                                    {{array_get($data,'businessinfo.description','')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="flagDialog" tabindex="-1" role="dialog" aria-labelledby="flag-inappropriate-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="flag-inappropriate-title" class="modal-title">Flag Inappropriate Content</h4>
                </div>
                <div class="modal-body">
                    Flag Profile As:
                    <form id="form1118375272" onsubmit="event.returnValue = false; return false;" isModal="" buttonId="#submitFormFlag" method="post" action="/users/flag">
                        <fieldset style="display:none;"><input type="hidden" name="_method" value="POST" /></fieldset>
                        <input type="hidden" name="data[FlaggedItem][flagger_user_id]" value="311557" id="FlaggedItemFlaggerUserId" />
                        <input type="hidden" name="data[FlaggedItem][object_id]" value="311557" id="FlaggedItemObjectId" />
                        <input type="hidden" name="data[FlaggedItem][object_type]" value="User" id="FlaggedItemObjectType" />
                        <div class="form-group ">
                            <label for="FlaggedItemFlagCode"></label>
                            <select name="data[FlaggedItem][flag_code]" class="form-control" id="FlaggedItemFlagCode">
                                <option value="0">select a reason</option>
                                <option value="1">Objectionable content</option>
                                <option value="2">Off-topic</option>
                                <option value="3">Spam</option>
                                <option value="4">Other</option>
                            </select>
                        </div>
                        <p><em id="flagNote">Note: Your identity will not be shared with the person who posted this Profile.</em></p>
                    </form>
                    <script type="text/javascript">
                        //<![CDATA[
                        jQuery(function() { jQuery('#submitFormFlag').unbind('click').click(function(){
                            jQuery.ajax({
                                url: "/users/flag",
                                type: "post",
                                dataType: "html",
                                data: jQuery("#form1118375272").serialize(),
                                success: function(returnData){
                                    // if modal window, return contents only
                                    var retHtml = jQuery(returnData).find("> div.modal-dialog");
                                    if (retHtml.length == 0) {
                                        retHtml = returnData
                                    }
                                    jQuery("#flagDialog").html(retHtml);
                                }
                            });jQuery('#submitFormFlag').html('Please wait...');jQuery('#submitFormFlag').unbind('click');jQuery('#submitFormFlag').click(function(){return false;});return false;}); });
                        //]]>
                    </script>            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link pull-right" data-dismiss="modal">Cancel &raquo;</button>
                    <a id="submitFormFlag" class="btn btn-primary pull-left" href="#" title="Submit">Submit</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="referUserExpert" tabindex="-1" role="dialog" aria-labelledby="refer-user-expert-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="refer-user-expert-title" class="modal-title">Refer Member to a Colleague</h4>
                </div>
                <div class="modal-body">

                    <div class="alert alert-warning">Share this profile with a friend or colleague. We'll include a direct link to this person's profile along with your Personal Message. Thanks!</div>

                    <form id="form2005697684" onsubmit="event.returnValue = false; return false;" isModal="" buttonId="#submitFormUserRefer" method="post" action="/referrals/referUserToExpert"><fieldset style="display:none;"><input type="hidden" name="_method" value="POST" /></fieldset><p>* Required Field</p><input type="hidden" name="data[Referral][url]" value="/members/user-profile/311557" id="ReferralUrl" /><p><b>Your Name:</b> Naman Verma</p><p><b>Your Email:</b> namanver@gmail.com</p><div class="form-group "><label for="ReferralToName">To Name&#65279;<acronym title="Required Field">*</acronym></label><input name="data[Referral][to_name]" type="text" class="form-control" maxlength="20" value="" id="ReferralToName" /></div><div class="form-group "><label for="ReferralToEmail">To Email&#65279;<acronym title="Required Field">*</acronym></label><input name="data[Referral][to_email]" type="text" class="form-control" maxlength="50" value="" id="ReferralToEmail" /></div><div class="form-group "><label for="ReferUserMessage">Personal message &#65279;<acronym title="Required Field">*</acronym><em><em class="hidden-80"> (<span class="limit">1000</span> characters left)</em></em></label><textarea name="data[Referral][message]" cols="30" rows="5" class="form-control" id="ReferUserMessage" ></textarea></div></form><script type="text/javascript">
                        //<![CDATA[
                        jQuery(function() { jQuery('#submitFormUserRefer').unbind('click').click(function(){
                            jQuery.ajax({
                                url: "/referrals/referUserToExpert",
                                type: "post",
                                dataType: "html",
                                data: jQuery("#form2005697684").serialize(),
                                success: function(returnData){
                                    // if modal window, return contents only
                                    var retHtml = jQuery(returnData).find("> div.modal-dialog");
                                    if (retHtml.length == 0) {
                                        retHtml = returnData
                                    }
                                    jQuery("#referUserExpert").html(retHtml);
                                }
                            });jQuery('#submitFormUserRefer').html('Please wait...');jQuery('#submitFormUserRefer').unbind('click');jQuery('#submitFormUserRefer').click(function(){return false;});return false;}); });
                        //]]>
                    </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link pull-right" data-dismiss="modal">Cancel &raquo;</button>
                    <a id="submitFormUserRefer" class="btn btn-primary pull-left" href="#" title="Send">Send</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <script type="text/javascript">
        jQuery(function() {
            jQuery('#ReferUserMessage')
                .keyup(function(){ limitChars('ReferUserMessage', 1000); })
                .keyup();
        });
    </script>
    <div class="modal fade" id="askHelpDialog" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <span id="send-invitation-title">Send an invitation</span>
                </div>
                <div class="modal-body">
                    <p>You need to create a Mentoring Request before you can ask Naman Verma to be your mentor.</p><p><b><a href="/mentoring/post-request/mentor:311557">Create a Mentoring Request &raquo;</a></b></p>                        <button class="btn btn-primary btn-lg" data-dismiss="modal" title="Close Window">Close Window</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="requestIntroductionDialog" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <span id="request-introduction-title">Request an Introduction</span>
                </div>
                <div class="modal-body">
                    <p>You need to create a Mentoring Request before you can ask Naman Verma to be your mentor.</p><p><b><a href="/mentoring/post-request/mentor:311557">Create a Mentoring Request &raquo;</a></b></p>                        <button class="btn btn-primary btn-lg" data-dismiss="modal" title="Close Window">Close Window</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="loginAsDialog" tabindex="-1" role="dialog" aria-labelledby="login-as-user-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="login-as-user-title" class="modal-title">Login as another user</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to login as <b><span id="loginAsName"></span></b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link pull-right" data-dismiss="modal">Cancel &raquo;</button>
                    <a class="btn btn-primary pull-left" href="#" title="Continue">Continue</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var dddPeopleCardOptions = {
            ellipsis    : '... ',
            wrap        : 'word',
            watch: true,
            height      : "144px"
        };

        jQuery(document).ready(function() {

            jQuery(".wrapper").dotdotdot(dddPeopleCardOptions);
            jQuery(".badges a").tooltip();

            jQuery('a.loginAs').click(function() {
                var url = jQuery(this).attr('href'),
                    name = jQuery(this).attr('data-name');

                jQuery('#loginAsDialog')
                    .find('#loginAsName').text(name).end()
                    .find('a.btn-primary').attr('href', url).end()
                    .modal('show');

                return false;
            });


            var deactivateUser = function(id) {
                jQuery('#deactivate_' + id).button('loading');
                jQuery.ajax({
                    url: '/users/deactivate/' + id,
                    success: function() {
                        window.location.reload();
                    }
                });
            };

            // deactivate user link
            jQuery('a.deactivate').click(function() {
                confirm('Are you sure you want to <b>deactivate</b> this user?', handleDeactivate, jQuery(this));
                return false;
            });

            var handleDeactivate = function() {
                jQuery('#confirmDialog').modal('hide');
                disableLinks(this);
                var id = getElementId(this);
                deactivateUser(id);
            };


            // activate user link
            jQuery('a.activate').click(function() {
                confirm('Are you sure you want to <b>activate</b> this user?', handleActivate, jQuery(this));
                return false;
            });

            var handleActivate = function() {
                jQuery('#confirmDialog').modal('hide');
                var id = getElementId(this);
                jQuery('#activate_' + id).button('loading');
                jQuery.ajax({
                    url: '/users/activate/' + id,
                    success: function() {
                        window.location.reload();
                    }
                });
            };

            jQuery('span.userfilter-removefilter').click(function() {
                jQuery('#' + jQuery(this).attr('data-filtername')).val("");
                jQuery('#UsersFilterForm').submit();
            });


            var disableLinks = function(el) {
                jQuery('a', el.parents('div.panel')).each(function() {
                    jQuery(this)
                        .blur()
                        .unbind('click')
                        .click(function() {
                            jQuery(this).blur();
                            return false;
                        });
                });
            };

            var getElementId = function(el) {
                var id = el.attr('id');
                return id.substring(id.lastIndexOf('_') + 1);
            };


        });
    </script>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('[data-toggle="tooltip"]').tooltip();
            jQuery('.stop-conversation').css({'background-color': 'grey', 'border-color': '#545454'});
            jQuery('.read-more').click(function(){
                jQuery(this).prev().prev().removeClass('functionGroups');
                jQuery(this).parent().addClass('hidden');
                jQuery(this).parent().next().removeClass('hidden');
            });
            jQuery('.read-less').click(function(){
                jQuery(this).parent().addClass('hidden');
                jQuery('.userExpertise').addClass('functionGroups');
                jQuery(this).parent().prev().removeClass('hidden');
            });

        });
    </script>
</div>
@stop