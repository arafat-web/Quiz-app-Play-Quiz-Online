
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quizzy - Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/nv9zuc0lfdy6f2dqpbokjbvbqqbtsynetmcbhwwrs2c0t7no/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
    <link rel="stylesheet" href="{{asset('admin')}}/assets/style.css">
</head>

<body>
<section>
    <div class="container-fluid py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">
                        <h4 class="card-title text-center text-uppercase fw-bold">
                            Login to Dashboard
                        </h4>
                        <p class="mt-2 text-center">Please enter your Email and Password!</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('login')}}" method="post" class="add-form">
                            @csrf
                            <div class="mb-4 mt-3">
                                <label for="email">Enter Email</label>
                                <input type="email" name="email" placeholder="Enter your Email"
                                       class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label for="password">Enter Password</label>
                                <input type="password" placeholder="Enter your Password" name="password"
                                       class="form-control" required>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button name="submit" type="submit" class="btn btn-primary px-4 me-4">Login</button>
                                <button type="reset" class="btn btn-secondary px-4">Reset</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p>
                            <sup>&copy;</sup> <a href="http://arafat.click">Arafat Hossain Ar</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>
