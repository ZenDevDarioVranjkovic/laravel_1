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

/*
            $.getJSON('/ticketapi', function(data) {
                console.log(data);
            });
*/

            //Function get day


        // Function that renders the list items from our records

        function ulWriter(rowIndex, record, columns, cellWriter) {
            var cssClass = "col-xs-4", li;
            var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            var dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var fulldate = new Date(Date.parse(record.DisplayDate));
            var hour = fulldate.toLocaleString('en-US', { hour: 'numeric',minute:'numeric', hour12: true });
            var monthName = monthNames[fulldate.getMonth()];
            var day = fulldate.getDate();
            var dayName = dayNames [fulldate.getDay()];
            if (rowIndex % 3 === 0) { cssClass += ' first'; }
            li = '<li class="">' +
                ' <div class="date"><span>' + dayName  + '</span><strong>' +  monthName + ' ' + day + '</strong><small>' +  hour + '</small></div>' +
                ' <div class="tickets"><h4>' + record.Name + '</h4><p>' +  record.Venue + ' , ' + record.StateProvince + '</p><a href="" class="button">' +  'Tickets' + '</a></div>' +
                '</li>';
            return li;
        }

        function getapi(url){
            $.getJSON(url, function(data) {
                var events = data;
                    $('#ul-dynatable-events').dynatable({
                        table: {
                            bodyRowSelector: 'li'
                        },
                        dataset: {
                            perPageDefault: 10,
                            perPageOptions: [10, 20, 30],
                            records: events
                        },
                        writers: {
                            _rowWriter: ulWriter
                        },
                        params: {
                            records: 'events'
                        },
                        features: {
                            search: false
                        },
                        inputs: {
                            perPagePlacement: 'after',
                            perPageText: 'Show ',
                        }
                    });
                 });
        };

            $.urlParam = function(name){
                var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                return results[1] || 0;
            }
            var test = $.urlParam('search');
            if(test == ''){
                getapi('/ticketapi/');
            }
            else{
                getapi('/ticketapi/search-events/'+test);
            }
        });

    </script>




</head>
<body id="search" class="v1">

@include('partials.ticketoffice-header')

    @yield('content')

@include('partials.ticketoffice-footer')

</body>
</html>