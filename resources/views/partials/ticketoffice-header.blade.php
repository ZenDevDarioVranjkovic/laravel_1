<!-- Start Header -->
<header id="header" class="clear">
    <div class="inner">
        <div class="left">

            <a href="" id="logo">Ticket<span>Office</span></a>

            <form method="GET" action="/search-events">
                <span class="fa fa-search"></span>
                <input type="text" name="search" placeholder="Search by team, artist or event">
            </form>

        </div>

        <ul id="menu" class="right">
            <li><a href="{{ route('ticketoffice.sport') }}">Sports</a></li>
            <li><a href="{{ route('ticketoffice.concert') }}">Concerts</a></li>
            <li><a href="{{ route('ticketoffice.theater') }}">Theater</a></li>
        </ul>
    </div>
</header>
<!-- End Header -->