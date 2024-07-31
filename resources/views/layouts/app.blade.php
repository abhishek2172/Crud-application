<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" </head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            background-color: #333;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            text-align: center;
            background-color: #1a1a1a;
        }

        #sidebar ul.components {
            padding: 0;
        }

        #sidebar ul li {
            padding: 15px;
        }

        #sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }
    </style>

<body>
    <header>
        <!-- place navbar here -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="dash" class="text-decoration-none">
                    <h3>Dashboard</h3>
                </a>
            </div>
            <ul class="list-unstyled components">
                <li><a href="categories">Category</a></li>
                <li><a href="items">Items</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center align-items-center g-2 mt-5">
                <div class="col-2"></div>
                <div class="col-7">
                    @yield('content')
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