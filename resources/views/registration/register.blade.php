<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->


    </header>
    <main>



        <div class="container">
            <div class="row justify-content-center align-items-center g-2 mt-5">
                <div class="col-2"></div>
                <div class="col border bg-light mt-5 p-3 rounded-4">
                    <div class="p-3 ">
                        <form action="/add" method="post">
                            <h1 class="text-center">Registration Page</h1>
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId"
                                    placeholder="name" />

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id=""
                                    aria-describedby="emailHelpId" placeholder="email" />

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id=""
                                    aria-describedby="passwordHelpId" placeholder="password" />

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="male" type="radio" name="gender" id="gender" />
                                <label class="form-check-label" for="gender"> Male </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="female" type="radio" name="gender" id="gender" />
                                <label class="form-check-label" for="">
                                    female
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <div class="mt-3">
                            <h5>Alredy have a account? <a href="login" class="text-decoration-none ">
                                    login
                                    here</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>

        </div>

        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>