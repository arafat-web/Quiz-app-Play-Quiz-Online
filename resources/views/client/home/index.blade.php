@extends('client.master')

@section('title')
    Quiz App
@endsection

@section('src')
    <!-- Bootstrap core CSS -->
    <link href="{{asset('client')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('client')}}/css/style.css" rel="stylesheet">

    <!-- animation stylesheet -->
    <link href="{{asset('client')}}/css/animate.css" rel="stylesheet">
@endsection

@section('content')
    <div id="mySidenav" class="sidenav hide-sidenav">
        <a href="javascript:void(0)" class="closebtn " onclick="closeNav()">&times;</a>
        <a href="{{route('categories')}}"><i class="fa fa-th-large text-white mr-3"></i>Category</a>
        <a href="{{route('categories')}}"><i class="fa fa-question text-white mr-3"></i>Play Quiz</a>
        <a href="{{route('randomQuiz')}}"><i class="fa fa-random text-white mr-3"></i>Random Quiz</a>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <span class="menu" id="hide-menu" onclick="openNav()"><img src="{{asset('client')}}/images/menu.png"/></span>
            <a id="hide-logo" class="mr-auto mt-4" href="{{route('index')}}"><img src="{{asset('client')}}/images/logo.png"
                                                                 class="d-none d-sm-none d-md-block"/></a>
            <ul class="nav" id="nav-hide">
                <li class="nav-item">
                    <a class="nav-link animated wow pulse slow infinite" href="{{route('categories')}}"><i
                            class="fa fa-th-large text-white mr-3"></i><b>Category</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link animated wow tada slow infinite" href="{{route('categories')}}"><i
                            class="fa fa-question text-white mr-3"></i><b>Play Quiz</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link animated wow swing slow infinite" href="{{route('randomQuiz')}}"><i
                            class="fa fa-random text-white mr-3"></i><b>Random Quiz</b></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <h1 class="color-blue mt-5 animated wow fadeInDown delay-0-1s">Quiz</h1>
                <p class="animated wow fadeInDown delay-0-2s">Check out our online computer programming quizzes to
                    enhance your knowledge, learn new things or prepare for an upcoming test. Made up of well-researched
                    and interesting quiz questions, each and every quiz here can test your awareness and grasp of the
                    subject.</p>
                <a href="{{route('categories')}}">
                    <button class="gradientBtn anim animated wow pulse fast infinite">Play Quiz</button>
                </a>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <img src="{{asset('client')}}/images/right-img.png" class="img-fluid animated wow pulse slow infinite"/>
            </div>
        </div>
        <div class="float-left ml-5">
            <img src="{{asset('client')}}/images/bottom-img.png" class="img-fluid animated wow swing slower infinite"/>
        </div>
    </div>

    <footer class="fixed-bottom mt-5 m-bg">
        <p class="color-blue ml-5"><small>Copyright &copy; Arafat Hossain Ar 2023</small></p>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('client')}}/js/jquery.min.js"></script>
    <script src="{{asset('client')}}/js/bootstrap.bundle.min.js"></script>

    <!-- Left Side Bar -->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.cssText = "width:270px; border-right: 10px solid #fff; box-shadow: 1px 8px 8px 8px rgba(73,21,155,0.3); -webkit-box-shadow: 1px 8px 8px 8px rgba(73,21,155,0.3);  -moz-box-shadow: 1px 8px 8px 8px rgba(73,21,155,0.3);";
            var element = document.getElementById("mySidenav");
            element.classList.add("animated wow bounceInLeft slow");

        }

        function closeNav() {
            document.getElementById("mySidenav").style.cssText = "width:0; border:none; box-shadow: none;";
        }
    </script>
    <!-- right click off -->
    <script type="text/javascript">
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
@endsection
