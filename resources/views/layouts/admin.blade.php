<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/css/OverlayScrollbars.min.css'>
    <script
            src="https://kit.fontawesome.com/2828f7885a.js"
            integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
            crossorigin="anonymous"
    ></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
        <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

</head>
<body>

    @yield('content')

    @include('includes.headeradmin')

    @include('includes.sidebar')

    <script src='https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/js/OverlayScrollbars.min.js'></script>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
        //The first argument are the elements to which the plugin shall be initialized
        //The second argument has to be at least a empty object or a object with your desired options
        OverlayScrollbars(document.querySelectorAll("body"), { });
        });
        </script>
</body>
<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
  <script src="{{ asset('/js/app.js') }}"></script>
<script>
    tinymce.init({
        selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
        height : "350px"
    });
</script>

</html>
