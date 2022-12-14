<html lang="en" xmlns:th="http://www.thymeleaf.org"
      xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout"
      layout:decorator="layout/main_fluid.html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white">
                <div class="card-body p-5 text-center" style="background-color: #415d7e;">
                    @if(session('status'))
                        {{ session('status') }}
                    @endif
                    <form action="{{ route('user.create') }}" method="post">
                        @csrf
                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                            <div class="form-outline form-white mb-4">
                                <input type="text" name="name" id="typeFullName" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX">UserName</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" />
                                <label class="form-label" for="typeEmailX">E-mail</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX">Password</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" name="confirm_password" id="typePasswordX1" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX">Repeat your password</label>
                            </div>


                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>
                        </div>
                    </form>

                    <div>
                        <p class="mb-0">Do you already have an account? <a href="{{ route('auth') }}" class="text-white-50 fw-bold">Log In</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
