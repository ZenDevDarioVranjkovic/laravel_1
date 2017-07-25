<!doctype html>
<html lang="en">
<head>

    <title>Ticket Office</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" charset="UTF-8" />

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Links -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css">

    <!-- Script -->
    <script type="text/javascript">

        function showfilter( t ) {

            t.className = 'show';

            document.getElementById('filters').style.display = 'block';
        }

        function hidefilter( t ) {

            document.getElementById('showfilter').className = '';
            document.getElementById('filters').style.display = 'none';
        }

        <!-- Get api -->

        /*
        $.getJSON('/ticketapi', function(data) {
            data2 = JSON.parse(data);

            console.log(data2);
            $('#test123').html('<p>' + data2.GetEventsResult.Event[0].City + '</p>');
        });
        /*

         */

    </script>

</head>
<body id="search" class="v1">
@include('partials.ticketoffice-header')

    @yield('content')

@include('partials.ticketoffice-footer')

</body>
</html>