<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/welcome">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/informacion2">Información 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/informacion3">Información 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informacion4">Información 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/frameworks">Frameworks</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="flex-center position-ref full-height">


        <div class="content">
            <div class="title m-b-md">
                Frameworks
            </div>
            <div class="container">
                <div class="row">
                    <div class="col order-first">
                        <h2> FRONTEND</h2><br>
                        <div class="links">
                            <a href="https://reactjs.org">REACT</a>
                            <div class="w-100"></div>
                            <a href="https://angular.io">ANGULAR</a>
                            <div class="w-100"></div>
                            <a href="https://vuejs.org">VUEJS</a>
                            <div class="w-100"></div>
                            <a href="https://jquery.com">JQUERY</a>
                            <div class="w-100"></div>
                            <a href="https://ember.com">EMBERJS</a>
                            <div class="w-100"></div>
                            <a href="https://backbonejs.org">BACKBONEJS</a>
                            <div class="w-100"></div>

                        </div>
                    </div>
                    <div class="col order-last">
                        <h2> BACKEND</h2><br>
                        <div class="links">
                            <a href="https://github.com/django/django">DJANGO</a>
                            <div class="w-100"></div>
                            <a href="https://laravel.com/">LARAVEL</a>
                            <div class="w-100"></div>
                            <a href="https://rubyonrails.org/">RUBY ON RAILS</a>
                            <div class="w-100"></div>
                            <a href="https://expressjs.com/">EXPRESSJS</a>
                            <div class="w-100"></div>
                            <a href="https://cakephp.org/">CAKE PHP</a>
                            <div class="w-100"></div>
                            <a href="https://www.fullstackpython.com/flask.html">FLASK</a>
                            <div class="w-100"></div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>

</html>
