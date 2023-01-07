@extends('client.master')

@section('title')
    Categories
@endsection

@section('src')
    <!-- Bootstrap core CSS -->
    <link href="{{asset('client')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('client')}}/css/style.css" rel="stylesheet">

    <!-- animation stylesheet -->
    <link href="{{asset('client')}}/css/animate.css" rel="stylesheet">

    <style>
        .noneton {
            outline: none;
            border: none;
            display: block;
            border: none;
            border-radius: 0;
            background-color: transparent;
            box-shadow: none;
            margin: 0;
            padding: 0;
        }

        .noneton:hover {
            outline: none;
            border: none;
        }

        .noneton:focus {
            outline: none;
            border: none;
        }
    </style>
@endsection

@section('content')

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="{{route('index')}}" class="h1"><i class="fa fa-angle-left color-dark"></i></a>
        </div>
    </nav>

    <!-- Category Content -->

    <div class="container">
        <div class="row">

            @foreach($categories as $cat)
                <div class="col-auto col-centered animated wow jackInTheBox slow">
                    <form action="{{route('quiz')}}" method="post">
                        @csrf
                        <input type="hidden" name="cat_id" value="{{$cat->id}}">
                        <button class="noneton">
                            <div class="box-part text-center shadow">
                                <img width="54px" height="54px" src="{{asset($cat->cat_img)}}"
                                     class="img-fluid mx-auto d-block animated wow {{$cat->cat_anim}} slow infinite"
                                     alt="{{$cat->cat_name}}">
                                <div class="title mt-4">
                                    <h4>{{$cat->cat_name}}</h4>
                                </div>
                            </div>
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <footer class="fixed-bottom mt-3 m-bg">
        <p class="color-blue ml-5"><small>Copyright &copy; Arafat Hossain Ar 2023</small></p>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('client')}}/js/jquery.min.js"></script>
    <script src="{{asset('client')}}/js/bootstrap.bundle.min.js"></script>

    <!-- single selectable category -->
    <script type="text/javascript">
        $('input[type="checkbox"]').on('change', function () {
            $('input[type="checkbox"]').not(this).prop('checked', false);
        });
    </script>
    <!--
    right click off -->
    <script type="text/javascript">
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>

@endsection
