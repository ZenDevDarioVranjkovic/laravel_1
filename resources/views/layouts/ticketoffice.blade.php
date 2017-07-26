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

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.dynatable.js"></script>

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

        $( document ).ready(function() {




        });

        // Function that renders the list items from our records
        function ulWriter(rowIndex, record, columns, cellWriter) {
            var cssClass = "col-xs-4", li;
            if (rowIndex % 3 === 0) { cssClass += ' first'; }
            li = '<li class="' + cssClass + '"><div class="thumbnail"><div class="thumbnail-image">' + record.City + '</div><div class="caption">' + record.MapURL + '</div></div></li>';
            return li;
        }


        $.getJSON('/ticketapi', function(data) {
            console.log(data[0].City);
            var dinos = data;

        $('#ul-example').dynatable({
            table: {
                bodyRowSelector: 'li'
            },
            dataset: {
                perPageDefault: 10,
                perPageOptions: [10, 20, 30],
                records: dinos
            },
            writers: {
                _rowWriter: ulWriter
            },
            params: {
                records: 'dinosaurs'
            }
        });

        });

    </script>




</head>
<body id="search" class="v1">

@include('partials.ticketoffice-header')

    @yield('content')

@include('partials.ticketoffice-footer')

</body>
</html>