@extends('layout.public')
@section('content')
    <div class="row">
        <div class="col-sm-2"></div>
        <div id="pcon" class="col-sm-8">
            <h1>Complete Your Profile</h1>
            <div class="panel">
                <div class="panel-body">
                    <h4 class="bottom-buffer">
                        Hi Naman! Welcome to the Mentorif Community. </h4>
                    <p class="bottom-buffer">
                        Mentorif is a nonprofit organization that provides free mentoring services to entrepreneurs
                        who
                        need help the most. In order for you to effectively connect with a mentor, we ask that you take
                        at least 15 minutes to answer
                        the following questions thoughtfully. </p>
                    <p class="bottom-buffer">
                        We have found that the more complete your answers are, the more likely you are to connect with
                        mentors on Mentorif! </p>
                    <p class="bottom-buffer">
                        Let's get started! <a data-toggle="modal" data-target="#myModal" class="click">
                            Check Out an Example Profile </a>

                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog sample-prof">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
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
                                                                    <img class="profile-pic img-circle"
                                                                         src="/portals/mm/img/entrepreneur-profile-example-photo.jpg"/>
                                                                </div>
                                                                <div class="media-body example-prof">
                                                                    <p class="user-name">Vincent Rojas</p>
                                                                    <p class="user-info">
                                                                        <small><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>San Diego, CA,
                                                                            United States
                                                                        </small>
                                                                        <br>
                                                                        <small><span class="glyphicon glyphicon-tag" title="Industry"></span>Health and Wellness</small>
                                                                    </p>
                                                                </div>
                                                                <br>
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
                                                                    What I Need Help With
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-7">
                                                                            <p>
                                                                            <p>We are at a crossroads in our business. We got over the startup hump, but now face a new
                                                                                set of challenges. Our costs are greater, our operations are more complicated, and the
                                                                                old systems are not scaling with the business. We also have new competitors that are
                                                                                replicating our unique model, creating pressure to stay on our toes.</p>
                                                                            <p>An ideal mentor will have built a similar business themselves, so they can share stories
                                                                                about what they did when faced with similar challenges. We\'d like to do some strategic
                                                                                planning so we can take our game to the next level. This may include taking a hard look
                                                                                at our operational and financial plan, and making suggestions for improvement.</p>
                                                                            <p>We need is someone who will help us discover what is limiting growth, so we can build our
                                                                                membership and add new locations.</p></p>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="expertise-list">
                                                                                <ul class="list-unstyled">
                                                                                    <li class="clearfix">
                                                                                        <strong>Expertise Requested</strong>
                                                                                        <ul id="expertiseList">
                                                                                            <li>Accounting and Finance&nbsp;&raquo; Financial Planning</li>
                                                                                            <li>Management&nbsp;&raquo; Growth and Development</li>
                                                                                            <li>Management&nbsp;&raquo; Business Strategy</li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <hr>
                                                                                    <li>
                                                                                        <strong>Experience</strong>
                                                                                    </li>
                                                                                    <li>Business Started: April 2005</li>
                                                                                    <li>
                                                                                        Languages Spoken: English, Spanish
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="panel panel-default pos-relative">
                                                                <div class="ribbon ribbon-panel">In Business Since 2005</div>

                                                                <div class="panel-heading">
                                                                    About My Business
                                                                </div>
                                                                <div class="panel-body">
                                                                    <h4>Adapt Fitness</h4>

                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <a href="http://www.adaptfitness.com" target="_blank"><span
                                                                                        class="glyphicon glyphicon-globe"></span>http://www.adaptfitness.com</a></li>
                                                                        <li>
                                                                            <p>
                                                                            <p>Adapt Fitness is a gym and wellness center in San Diego, California. We take a holistic
                                                                                approach to fitness, and help our clients be their best. We believe in a personalized
                                                                                approach to fitness, and meet with all new members to learn about their history and
                                                                                goals. We create individualized plans that integrate fitness and nutrition, and follow
                                                                                members on their journey to ensure the succeed. In addition to our physical space, we
                                                                                lead activities in the local area to get our members out and active in the real
                                                                                world.</p>
                                                                            <p>I started this business because I am passionate about the power of a healthy lifestyle.
                                                                                My own path was fraught with trial and error. Over time, I started to help people around
                                                                                me get fit and avoid the mistakes I did. The personal training business that I started
                                                                                in my apartment blossomed into a boutique fitness center with four coaches. We now have
                                                                                a foothold in the market, but want so much more.</p></p>
                                                                        </li>

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
                            </div>
                        </div>
                    </p>
                    <form id="TermsForm" method="post" action="account/mentee-terms">
                        {{csrf_field()}}
                        <div class="pull-left"><input class="btn btn-primary" type="submit" value="Continue" /></div>
                        @if(!empty($errors->has('errs')))
                            <div class="row errorinfo alert alert-danger">
                                @foreach($errors->get('errs') as $error)
                                    <h4><span class="glyphicon glyphicon-exclamation-sign"></span> {{$error}}</h4>
                                @endforeach
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
@stop