@extends('layout.public')
@section('content')
    <div class="row top-buffer">
        <div id="pcon" class="col-xs-12 public-profile">
            <div class="row clearfix">
                <div class="col-md-8 col-md-offset-2">
                    <div class="bottom-buffer row">
                        <h1 class='col-md-12'>Do you like the way your profile looks?</h1>
                        <p class='col-md-12'>An attractive and detailed profile is critical to finding a valuable connection on Mentorif. This is what other users will see when considering sending you a message. Please take a look and make sure that others will clearly understand what to expect mentoring with you.</p>
                        <p class="col-md-6"><a href="/account/mentor-profile" class="btn btn-secondary go-back">Go back and edit profile</a></p>
                        <p class="col-md-6"><a href="/account/ready" class="btn btn-primary">I'm ready to connect with someone!</a>
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
                                </a>            </div>
                            <div class="media-body">
                                <p class="user-name">
                                    <a href="javascript:void(0)">{{array_get($data,'f_name','').' '.array_get($data,'l_name')}}</a>
                                </p>
                                <p class="user-info">
                                    <small>
                                        <span class="glyphicon glyphicon-map-marker"></span> {{array_get($data,'expertinfo.personalinfo.country_detail.name','')}}<br/>
                                    </small>
                                    <small>
                                        <span class="glyphicon glyphicon-tag" title="Industry"></span>{{array_get($data,'expertinfo.industry_detail.name','')}}<br/>
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
                            How I Can Help        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <p>{{array_get($data,'expertinfo.entrepreneur_pitch','')}}</p>
                                    <h4>My Professional Experience</h4>
                                    <p>{{array_get($data,'expertinfo.professional_bio','')}}</p>
                                </div>
                                <div class="col-sm-5">
                                    <div class="expertise-list">
                                        <ul class="list-unstyled">
                                            <li class="clearfix">
                                                <strong>Expertise</strong>
                                                <ul id="expertiseList">
                                                    @foreach(array_get($data,'expertinfo.function_area') as $func)
                                                        <li>{{array_get($func, 'functional_area.functionalareagroup.name')}}&nbsp;&raquo;&nbsp;{{array_get($func, 'functional_area.name')}}</li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <hr>
                                            <li>
                                                <strong>Experience</strong>
                                            </li>
                                            <li>Ownership Experience:&nbsp;{{array_get($data,'expertinfo.years_ownership', 0)}}&nbsp;yrs</li>
                                            <li>Management Experience:&nbsp;{{array_get($data,'expertinfo.years_management', 0)}}&nbsp;yrs</li>
                                            <li>Languages Spoken: &nbsp;{{implode(', ', array_get($data,'expertinfo.personalinfo.spoken_lang',[]))}}</li>
                                            <li>Country Experience:&nbsp;
                                            @foreach(array_get($data,'expertinfo.country_experience',[]) as $key => $exp)
                                                @if($key != 0)
                                                {{','}}
                                                @endif
                                                {{array_get($exp,'country_detail.name','')}}
                                             @endforeach
                                            </li>
                                            <hr>
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
@stop