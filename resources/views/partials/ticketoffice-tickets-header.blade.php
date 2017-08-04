<!-- Start Header -->
<header id="header" class="clear">
    <div class="left">

        <a href="" id="logo">Ticket<span>Office</span></a>

        <form method="POST" action="">
            <span class="fa fa-search"></span>
            <input type="text" name="search" placeholder="Search by team, artist or event">
        </form>

    </div>

    <ul id="menu" class="right">
        <li><a href="{{ route('ticketoffice.sport') }}">Sports</a></li>
        <li><a href="">Concerts</a></li>
        <li><a href="">Theater</a></li>
    </ul>
</header>
<!-- End Header -->