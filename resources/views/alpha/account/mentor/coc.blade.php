@extends('layout.public')
@section('content')
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div id="pcon" class="col-sm-8">
            <h1>Mentor Expectations</h1>
            <div class="panel">
                <div class="panel-body">
                    <style>.column-left{ float: left; width: 50%;
                        }
                        .column-right{ float: left; width: 50%; }
                        .column-center{ display: inline-block;
                            width: 50%; }</style>

                    <p><b>Expectations of Mentors</b>
                        <br>We are so appreciative that you will be volunteering with us to help entrepreneurs succeed! Thank you for sharing your knowledge. Before we start, please review our expectations of our mentors.</p>
                    <div class="container">
                        <div style="padding-right:15px;">
                            <h4>No soliciting. </h4>
                            Mentoring is a non-monetary, supportive relationship, and should not be motivated by any financial reward. Mentors who attempt to sell services through our platform will be de-activated and, where necessary, legal action initiated.

                            <h4>Be proactive.</h4>
                            The quickest way to your next satisfying volunteer experience is to find an entrepreneur who interests you and start a conversation. Try to do this right after you complete your profile.

                            <h4>Be responsive.</h4>
                            This only works if you respond to messages from entrepreneurs, even to say you are unavailable. You are able to change your visibility in the list of available mentors at any time.

                            <h4>Share Your Knowledge. </h4>
                            While hands on entrepreneurial experience is invaluable and very welcome here, you can still have an impact on an entrepreneur even if if you don’t have experience as an entrepreneur yourself. Focus on what you’re good at and share your knowlege.
                        </div>
                    </div>
                    <br>
                    <p>So if we're on the same page, let's get you set up as a mentor! </p>

                    <form id="CodeOfConductForm" method="post" action="account/mentee-coc">
                        {{ csrf_field() }}
                        <div class="">
                            <div class="checkbox">
                                <label class="control-label">
                                    <input name="data[agree]" label="I agree to meet these expectations" value="1" id="Agree" type="checkbox">
                                    I agree to meet these expectations						</label>
                                @if(!empty($errors->has('data.agree')))
                                    <div class="errorinfo alert alert-danger">
                                        @foreach($errors->get('data.agree') as $error)
                                            <h4><span class="glyphicon glyphicon-exclamation-sign"></span> {{$error}}</h4>
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
@stop