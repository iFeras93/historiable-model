<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - App Landing Page Template: Tailwind Toolbox</title>
    <meta name="description" content="">
    <meta name="keywords" content="">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
    <!--Replace with your tailwind.css once created-->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">


</head>

<!--style="font-family: 'Source Sans Pro', sans-serif;"-->
<body class="bg-gray-300 mx-3 my-8">

<div class="mx-3">
    @yield('content')
</div>


<!-- jQuery if you need it-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@yield('js')
</body>

</html>
