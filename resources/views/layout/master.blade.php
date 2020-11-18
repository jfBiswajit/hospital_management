<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('page_title')</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading" style="border-bottom: 2px solid green">
                <a href="{{ url('/') }}" style="text-decoration: none">
                  <div class="font-weight-bold text-uppercase text-success">Newlife hospital</div>
                </a>
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ url('doctor_registration') }}"
                    class="list-group-item list-group-item-action bg-light">Doctor Registration</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Patient Registration</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Appoinment</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Patient Record</a>
            </div>
        </div>

        <div id="page-content-wrapper">
          @yield('body')
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
