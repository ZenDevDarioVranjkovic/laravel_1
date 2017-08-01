<!doctype html>
<html lang="en">
<head>
    <title>Ticket Office</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" charset="UTF-8" />

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">


    <!-- Links -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css">

    <!-- Script -->
    <script type="text/javascript"></script>


    <script type="text/javascript" src="http://maps.seatics.com/mapsupport_0103PP_tn.js">


    </script>
    <script type="text/javascript" src="http://maps.seatics.com/swfobject_tn.js"></script>
    <script type="text/javascript" src="http://maps.seatics.com/maincontrol_0103PP_tn.js"></script>
    <link rel="Stylesheet" type="text/css" href="http://maps.seatics.com/mapsupport_0103PP_tn.css" />
    <script src="http://maps.seatics.com/mapTestData_0103_tn.js" type="text/javascript"></script>
    <!-- script with parameters to pass to mainControl. -->
    <script type="text/javascript">
        var webParms = {
            vfsEnable: 'hold',
            showStdSectionNames: true,
            swfMapURL: "http://maps.seatics.com/FenwayPark_RedSox_2008-11-03 2010-09-01 1736Sample_tn.swf",
            staticMapURL: "http://maps.seatics.com/FenwayPark_RedSox_2008-11-03 2010-09-01 1736Sample_tn.gif",
            mapShellURL: "http://maps.seatics.com/MapShell_0102_tn.swf"
        };
        $(document).ready(function() {
            ssc.loadTgList(ticGrps, webParms);
            ssc.sortTgList('price', 'asc'); // sort the list (before it's displayed!) in order of increasing price
            // sample override buyTickets function to show info that is available  when user clicks "Buy"
            ssc.EH.buyTickets = function(buyObj) {
                var t = "";
                var coParms = "";
                for (var x in buyObj) {
                    t += String.fromCharCode(10) + x + ':' + buyObj[x];
                }
                coParms = 'e=' + buyObj.tgSds + '&treq=' + buyObj.buyQty + '&wcid=' + "<websiteID>" + '&SessionId=' + '<session id>' + '&ah=' + buyObj.actionHistory;
                if (buyObj.mid) {
                    coParms += '&mid=' + buyObj.mid;
                }
                alert("This replaces checkout  for this demo page. Buy Object properties:" + t + String.fromCharCode(10) + 'Partial Checkout string:' + coParms)
            }
        });

    </script>

</head>

<body id="ticket" class="v1">
@include('partials.ticketoffice-tickets-header')

@yield('content')

@include('partials.ticketoffice-footer')

</body>
</html>