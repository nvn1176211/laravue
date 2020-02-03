<!DOCTYPE html>
<html>

<head>
    <base href="{{ asset('') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NVN Center</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css?v{{time()}}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" id="app">



    </div>
    <!-- ./wrapper -->

    
    <script src="js/app.js?v{{time()}}"></script>
    
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
  

        })
    </script>
</body>

</html>