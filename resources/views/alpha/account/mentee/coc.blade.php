@extends('layout.public')
@section('content')
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div id="pcon" class="col-sm-8">
            <h1>Community Expectations</h1>

            <div class="panel">
                <div class="panel-body">
                    <style>.column-left{ float: left; width: 50%;
                        }
                        .column-right{ float: left; width: 50%; }
                        .column-center{ display: inline-block;
                            width: 50%; }</style>

                    <p>Mentors are volunteering their time to help you. In return, we ask that you follow our community expectations.</p>
                    <div class="container">
                        <div class="column-left" style="padding-right:15px;"><h4>A detailed profile</h4>Please write a good description of your business and problems you seek to solve. Vague or short profiles may be hidden from search.</div>
                        <div class="column-center" ><h4>Follow through </h4></div>You should be currently dedicating time and effort to your business, and able to follow through with commitments made in mentoring conversations<br><br>
                        <div class="column-right" style="padding-right:15px;"><h4>No soliciting </h4>Mentors are here to provide support and guidance, not to connect you to financing, investors, or customers.</div>
                        <div class="column-right" style="padding-right:15px;"><h4>Drive the process</h4>You should be the one to send the first message and drive the mentoring conversation. Mentors expect you to respond to their messages and show up to meetings on time, (or communicate about absences in advance).</div>
                    </div>
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
        <div class="col-sm-2">
        </div>
    </div>
@stop