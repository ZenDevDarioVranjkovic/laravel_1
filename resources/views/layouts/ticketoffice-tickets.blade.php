<!doctype html>
<html lang="en">
<head>
    <title>Ticket Office</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" charset="UTF-8" />

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">


    <!-- Links -->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/styles.css">

    <!-- Script -->
    <script type="text/javascript"></script>

</head>

<body id="ticket" class="v1">
@include('partials.ticketoffice-tickets-header')

@yield('content')

@include('partials.ticketoffice-footer')

</body>
</html>