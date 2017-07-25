@extends('layouts.ticketoffice')

@section('content')

    <!-- Start Main Content -->
    <main id="content">
        <section class="row-1">
            <div class="inner clear">
                <h2><span>Fleet Foxes Tickets</span> - ACL Live Moody Theater</h2>
            </div>
        </section>
        <section class="row-2">
            <div class="inner clear">
                <div id="results">

                    <header class="clear">
                        <div id="number">32 Events</div>

                        <div id="location"><strong><i class="fa fa-map-marker"></i>Location:</strong> <strong>Austin (TX)</strong> <small id="change">Change Location</small></div>

                        <div id="showfilter" onclick="showfilter(this)"><strong><i class="fa fa-sliders"></i> Filters</strong></div>

                    </header>

                    <table id="my-ajax-table">
                        <thead>
                        <th>ChildCategoryID</th>
                        <th>Some Other Attribute</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                    <div id="filters" class="clear">

                        <div class="filter dates">
                            <h5>By Dates</h5>
                            <ul>
                                <li><a href="" class="default">All Dates</a></li>
                                <li><a href="">July</a></li>
                                <li><a href="">August</a></li>
                                <li><a href="">September</a></li>
                                <li><a href="">October</a></li>
                            </ul>
                        </div>

                        <div class="filter cities">
                            <h5>By Cities</h5>
                            <ul>
                                <li><a href="" class="default">All Cities</a></li>
                                <li><a href="">Austin</a></li>
                                <li><a href="">Brooklyn</a></li>
                                <li><a href="">Chicago</a></li>
                                <li><a href="">Columbia</a></li>
                                <li><a href="">Dallas</a></li>
                            </ul>
                        </div>

                        <div class="filter days">
                            <h5>By Days</h5>
                            <ul>
                                <li><a href="" class="default">All Days</a></li>
                                <li><a href="">Weekdays</a></li>
                                <li><a href="">Weekends</a></li>
                            </ul>
                        </div>

                        <span id="hidefilter" onclick="hidefilter(this)">Hide Filters</span>
                    </div>


                    <div id="items" class="clear">

                        <ul class="clear">
                            <li>
                                <div class="date">
                                    <span>Thursday</span>
                                    <strong>JUL 27</strong>
                                    <small>7:00 PM</small>
                                </div>
                                <div class="tickets">
                                    <h4>Fleet Foxes</h4>
                                    <p>Austin City Limits Live at The Moody Theater - Austin, TX</p>

                                    <a href="" class="button">Tickets</a>
                                </div>
                            </li>

                            <li>
                                <div class="date">
                                    <span>Thursday</span>
                                    <strong>JUL 27</strong>
                                    <small>7:00 PM</small>
                                </div>
                                <div class="tickets">
                                    <h4>Fleet Foxes</h4>
                                    <p>Austin City Limits Live at The Moody Theater - Austin, TX</p>

                                    <a href="" class="button">Tickets</a>
                                </div>
                            </li>

                            <li>
                                <div class="date">
                                    <span>Thursday</span>
                                    <strong>JUL 27</strong>
                                    <small>7:00 PM</small>
                                </div>
                                <div class="tickets">
                                    <h4>Fleet Foxes</h4>
                                    <p>Austin City Limits Live at The Moody Theater - Austin, TX</p>

                                    <a href="" class="button">Tickets</a>
                                </div>
                            </li>

                            <li>
                                <div class="date">
                                    <span>Thursday</span>
                                    <strong>JUL 27</strong>
                                    <small>7:00 PM</small>
                                </div>
                                <div class="tickets">
                                    <h4>Fleet Foxes</h4>
                                    <p>Austin City Limits Live at The Moody Theater - Austin, TX</p>

                                    <a href="" class="button">Tickets</a>
                                </div>
                            </li>

                            <li>
                                <div class="date">
                                    <span>Thursday</span>
                                    <strong>JUL 27</strong>
                                    <small>7:00 PM</small>
                                </div>
                                <div class="tickets">
                                    <h4>Fleet Foxes</h4>
                                    <p>Austin City Limits Live at The Moody Theater - Austin, TX</p>

                                    <a href="" class="button">Tickets</a>
                                </div>
                            </li>

                            <li>
                                <div class="date">
                                    <span>Thursday</span>
                                    <strong>JUL 27</strong>
                                    <small>7:00 PM</small>
                                </div>
                                <div class="tickets">
                                    <h4>Fleet Foxes</h4>
                                    <p>Austin City Limits Live at The Moody Theater - Austin, TX</p>

                                    <a href="" class="button">Tickets</a>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <nav id="page" class="clear">
                        <div id="pagination">
                            <a class="current" href="">1</a>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a class="next" href="">Next</a>
                            <a class="last" href="">Last</a>
                        </div>
                        <div id="show">
                            <span>Show</span>
                            <select name="show">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                            <span>Events</span>
                        </div>
                    </nav>
                </div>

                <div id="sidebar">
                    <aside id="info">
                        <h3>Ticket Information</h3>
                        <p>Give in to your folk rock inclinations and book Fleet Foxes tickets for less at VividSeats.com. Armed with multi-part harmonies and songwriting reminiscent of the late sixties, Fleet Foxes have created a stir within the indie rock music world and beyond. The Seattle, WA band's live concerts have been saluted as revelations of acoustic-based music.</p>

                        <p>You can still see Robin Pecknold and the gang harmonize in person with Fleet Foxes concert tickets on sale. Vivid Seats' service professionals have been lauded over and over again for their ability to help customers experience the live music they love for fair prices. <a href="">Read More</a></p>
                    </aside>

                    <aside id="history">
                        <h3>Band History</h3>
                        <div class="meta">
                            <p><strong>Founded:</strong> Seattle, Washington</p>
                            <p><strong>Main Songwriter:</strong> Robin Pecknold</p>
                            <p><strong>Major Influences:</strong> Crosby, Stills, Nash, and Young, Peter, Paul, & Mary, The Byrds</p>
                            <p><strong>Popular Songs:</strong> "White Winter Hymnal," "Mykonos," "Grown Ocean"</p>
                            <p><strong>Critical Honors:</strong> Billboard.com Critic's Choice Album of the Year, Uncut Music Award</p>
                        </div>
                    </aside>

                    <aside id="guarantee">
                        <h3>Guarantee</h3>
                        <p>100% Buyer Guarantee. Tickets are authentic and will arrive before event.</p>
                    </aside>
                </div>


            </div>
        </section>
    </main>
    <!-- End Main Content -->

@endsection