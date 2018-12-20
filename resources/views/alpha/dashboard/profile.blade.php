@extends('layout.public')
@section('content')
    <div class="row row-offcanvas row-offcanvas-left">
        <div id="scon" class="col-sm-2 col-md-3 sidebar-offcanvas" role="navigation">
            <div class="sidebar-nav">
                <ul class="nav">
                    <li class="home"><a href="/my/dashboard"><span class="badge"><span class="glyphicon glyphicon-home"></span></span> <span class="nav-label">My Dashboard</span></a></li>
                    <li><a href="/my/profile"><span class="badge"><span class="glyphicon glyphicon-cog"></span></span> <span class="nav-label">Profile &amp; Settings</span></a></li>
                    <li><a href="/my/connections"><span class="badge"><span class="glyphicon glyphicon-retweet"></span></span> <span class="nav-label">Conversations</span></a></li>
                    <li><a href="/my/groups"><span class="badge"><span class="glyphicon glyphicon-user"></span></span> <span class="nav-label">My Groups</span></a></li>
                    <li><a href="/questions/user/311557"><span class="badge"><span class="glyphicon glyphicon-question-sign"></span></span> <span class="nav-label">My Q &amp; A</span></a></li>
                </ul>
            </div>
        </div>
        <div id="pcon" class="col-sm-offset-4 col-md-9 col-md-offset-3 user-profile">
            <h1>Profile &amp; Settings</h1>
            <ul id="my-settings-tabs" class="nav nav-tabs top-buffer">
                <li><a id="my-settings-tab-user" href="#user" data-toggle="tab">Account Information</a></li>

                <li><a id="my-settings-tab-entrepreneur" href="#entrepreneur" data-toggle="tab">Entrepreneur Profile</a></li>
                <li><a id="my-settings-tab-mentor" href="#mentor" data-toggle="tab">Mentor Profile</a></li>

                <li><a id="my-settings-tab-contact" href="#contact" data-toggle="tab">Contact Settings</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="user">
                    <table class="info table table-condensed">
                        <tbody>
                        <tr>
                            <th class="public-data">Name</th>
                            <td><strong>Naman Verma</strong></td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td>
                                <strong>namanver@gmail.com</strong>
                                <br/><a href="/my/link_with_social" class="btn btn-xs btn-tertiary" style="margin: 10px 0;">Link to your social account</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><strong>******</strong></td>
                        </tr>
                        <tr>
                            <th>Language(s)</th>
                            <td><strong>
                                    English</strong></td>
                        </tr>
                        <tr>
                            <th class="public-data">Country of Residence</th>
                            <td><strong>United States</strong></td>
                        </tr>
                        <tr>
                            <th class="public-data">City</th>
                            <td><strong></strong></td>
                        </tr>
                        <tr>
                            <th class="public-data">State</th>
                            <td><strong>Select one</strong></td>
                        </tr>
                        <tr>
                            <th class="public-data">Postal Code</th>
                            <td><strong>[blank]</strong></td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td><strong>9778745475</strong></td>
                        </tr>
                        </tbody>
                    </table>

                    <a class="btn btn-primary btn-lg" href="/users/edit/311557" title="Edit">Edit</a>
                </div>

                <div class="tab-pane fade" id="entrepreneur">
                    <div class="table-responsive">
                        <p><a href="/members/user-profile/311557">View Your Profile</a></p>
                        <table class="info table table-condensed">
                            <tbody>
                            <tr class="">
                                <th class="public-data">Business Name</th>
                                <td><strong>[blank]</strong></td>
                            </tr>
                            <tr class="">
                                <th class="public-data">Business Website</th>
                                <td><strong>[blank]</strong></td>
                            </tr>
                            <tr class="">
                                <th class="public-data">What is your primary industry?</th>
                                <td><strong>
                                        Agriculture                                        </strong>
                                </td>
                            </tr>
                            <tr class="">
                                <th class="public-data">Desired Areas of Expertise</th>
                                <td><strong>
                                        <li>Accounting and Finance &raquo; Accounting</li><li>Human Resources &raquo; Staffing and Recruiting</li><li>Getting started &raquo; Getting Started</li>                                <tr>
                                <th class="public-data">Business Stage</th>
                                <td><strong>
                                        Pre-Launch</strong></td>
                            </tr>
                            <tr class="">
                                <th class="public-data">About my business</th>
                                <td><strong><p>Don't have content at the moment
                                            Don't have content at the moment
                                            Don't have content at the moment
                                            Don't have content at the moment
                                            Don't have...</p></strong></td>
                            </tr>
                            <tr class="">
                                <th class="public-data">I need help with</th>
                                <td><strong><p>Don't have content at the moment
                                            Don't have content at the moment
                                            Don't have content at the moment
                                            Don't have content at the moment
                                            Don't have...</p></strong></td>
                            </tr>
                            <tr>
                                <th class="public-data">Your Photo</th>
                                <td>
                                    <strong>[blank]</strong>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <a class="btn btn-primary btn-lg" href="/business_profiles/edit/311557" title="Edit">Edit</a>
                </div>
                <div class="tab-pane fade" id="mentor">

                    <div class="table-responsive">
                        <p><a href="/members/user-profile/311557">View Your Profile</a></p>
                        <table class="info table table-condensed">
                            <tbody>
                            <tr class="">
                                <th class="public-data">What is your primary industry?</th>
                                <td>
                                    <strong>
                                        Accounting and Tax Services                                        </strong>
                                </td>
                            </tr>
                            <tr class="">
                                <th class="public-data">Your Areas of Expertise</th>
                                <td><strong>
                                        <li>Accounting and Finance &raquo; Budgeting</li></strong></td>
                            </tr>
                            <tr class="">
                                <th class="public-data">Years of Ownership Exp.</th>
                                <td><strong>2</strong></td>
                            </tr>
                            <tr class="">
                                <th class="public-data">Years of Management Exp.</th>
                                <td><strong>9</strong></td>
                            </tr>
                            <tr class="">
                                <th class="public-data">Please share your professional experience and accomplishments.</th>
                                <td><strong><p>I have played multiple roles in my career. Started from an individual as a trainee.
                                            I have played multiple roles in my career. Started from an...</p></strong></td>
                            </tr>
                            <tr class="">
                                <th class="public-data">How I Can Help</th>
                                <td><strong><p>I have played multiple roles in my career. Started from an individual as a trainee.
                                            I have played multiple roles in my career. Started from an...</p></strong></td>
                            </tr>
                            <tr>
                                <th class="public-data">Your Photo</th>
                                <td>
                                    <strong>[blank]</strong>
                                </td>
                            </tr>
                            <tr>
                                <th class="public-data">Website</th>
                                <td><strong>[blank]</strong></td>
                            </tr>
                            <tr class="">
                                <th class="public-data">Country Experience</th>
                                <td><strong>
                                        United States<br/>                                        </strong></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <a class="btn btn-primary btn-lg" href="/expert_profiles/edit/311557" title="Edit">Edit</a>
                </div>
                <div class="tab-pane fade" id="contact">
                    <table class="info table table-condensed">
                        <tbody>
                        <tr>
                            <td colspan="2"><h4>I am open to receiving &hellip;</h4></td>
                        </tr>
                        <tr>
                            <th>Digest - fresh mentors</th>
                            <td><strong>Weekly</strong></td>
                        </tr>
                        <tr>
                            <th>Messages from entrepreneurs</th>
                            <td><strong>Anyone</strong></td>
                        </tr>
                        <tr>
                            <th>Digest - fresh mentoring requests</th>
                            <td><strong>Monthly</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Share my public mentor profile with trusted partner sites</strong></td>
                            <td><strong>yes</strong></td>
                        </tr>
                        <tr>
                            <th>Monthly email newsletter</th>
                            <td><strong>yes</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Match Emails</strong></td>
                            <td><strong>yes</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2"><h4>I would like to be notified when</h4></td>
                        </tr>
                        <tr>
                            <th>New answers are posted to my questions</th>
                            <td><strong>yes</strong></td>
                        </tr>
                        <tr>
                            <th>New announcements are posted in my groups</th>
                            <td><strong>yes</strong></td>
                        </tr>
                        <tr>
                            <th>New discussions are created in my groups</th>
                            <td><strong>yes</strong></td>
                        </tr>
                        <tr>
                            <th>New comments are made on discussions I started</th>
                            <td><strong>yes</strong></td>
                        </tr>
                        <tr>
                            <th>New comments are made on discussions I commented on</th>
                            <td><strong>yes</strong></td>
                        </tr>
                        <tr>
                            <th>New comments are made on discussions in my groups</th>
                            <td><strong>Every Comment</strong></td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-primary btn-lg" href="/users/contactprefs/311557" title="Edit">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <script language="javascript">
        jQuery(document).ready(function () {
            if (jQuery('#my-settings-tab-user').length != 0) {
                jQuery('#my-settings-tab-user').tab('show');
            } else {
                jQuery('#my-settings-tab-user').tab('show');
            }
        });
    </script>
@stop