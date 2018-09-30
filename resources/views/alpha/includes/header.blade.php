<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                Mentorif&nbsp;
            </a>

            <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav ">
                @if(Auth::check())
                <li class="visible-xs visible-sm">
                    <a href="/my/dashboard">
                        <img class="profile-pic pull-left" src="/img/profile/default-profile-50.jpg?r=58" alt="Naman Verma" />Naman
                    </a>
                </li>
                @endif
                <li><a href="/people/search/entrepreneurs">Entrepreneurs</a></li>
                <li><a href="/people/search/mentors">Mentors</a></li>
                <li><a href="/questions">Ask & answer questions</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right @if(Auth::check()){{'navbar-public'}} @endif">
                @if(Auth::check())
                <li class="dropdown hidden-xs hidden-sm">
                    <a href="/my/dashboard" class="dropdown-toggle">
                        <img class="profile-pic pull-left" src="/img/profile/default-profile-50.jpg?r=334" alt="#" />Naman <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/my/profile">Profile & Settings</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
                <li class="visible-xs visible-sm"><a href="/my/profile">Profile & Settings</a></li>
                @else
                    <li><a href="/user/login">Log In</a></li>
                @endif
                <li id="mail"><a href="/my/connections" class="count"><span class="glyphicon glyphicon-envelope"></span><span id="inbox-count" class="count"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Blog</a></li>
                <li>
                    <a href="#"
                       target="_blank" class="btn donate-btn">
                        Donate                        </a>
                </li>
            </ul>
            <ul id="lang-picker" class="text-center list-inline"><li><a href="/home/changeLanguage/es">español</a></li><li><a href="/home/changeLanguage/fr">français</a></li></ul>                    </div><!--/.navbar-collapse -->
    </div>
</nav>