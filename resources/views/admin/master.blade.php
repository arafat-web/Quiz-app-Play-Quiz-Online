<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('admin')}}/assets/bootstrap.min.css" rel="stylesheet">
    <script src="{{asset('admin')}}/assets/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('admin')}}/assets/style.css">
    <script src="{{asset('admin')}}/assets/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
</head>

<body id="body-pd">
@include('admin.include.header')
@include('admin.include.sidebar')
<!--Container Main start-->
<main>
@yield('content')
</main>
@include('admin.include.footer')
<script src="{{asset('admin')}}/assets/script.js"></script>
</body>

</html>
