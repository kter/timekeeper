<nav class="navbar navbar-default" style="background-color: #FFFFFF;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img alt="出勤！仕事人" src="/img/logo.png" style="height: 20px;">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbarEexample2">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">menuA</a></li>
                <li><a href="#">menuB</a></li>
                <li><a href="#">menuC</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth2::logged_in())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth2::current_user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                                <li><form method="post" name="form1" action="logout"><input name="_method" type="hidden" value="DELETE">{{ csrf_field() }}<a href="javascript:form1.submit()"><i class="fa fa-btn fa-sign-out"></i>Logout</a></form></li>

                       </ul>
                    </li>
                @else
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>