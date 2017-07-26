<!doctype html>
<html lang="en">
<head>

    <title>Ticket Office</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" charset="UTF-8" />

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Links -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.dynatable.css">

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


    </script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.dynatable.js"></script>

    <script>



        $.getJSON('/ticketapi', function(data) {
            var json = JSON.parse(data);
             obj = json;
            console.log(obj);
        });


        $.getJSON('/ticketapi', function (response) {
            var json =  JSON.parse(response);
            $('#my-ajax-table').dynatable({
                dataset: {
                    records: json
                },
            });
        });

/*
        $('#my-ajax-table').dynatable({

            dataset: {
                ajax: true,
                ajaxUrl: '/ticketapi',
                ajaxOnLoad: true,
                records: []
            }
        });
*/
    </script>

</head>
<body id="search" class="v1">
@include('partials.ticketoffice-header')

    @yield('content')

@include('partials.ticketoffice-footer')

</body>
</html>