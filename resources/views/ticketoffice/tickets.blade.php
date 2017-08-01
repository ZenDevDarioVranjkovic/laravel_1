@extends('layouts.ticketoffice-tickets')

@section('content')

    <!-- Start Main Content -->
    <main id="content">

        <section class="row-1">
            <h3><span>Fleet Foxes Tickets</span> - ACL Live Moody Theater</h3>
            <small>Oct 3, 2017 — 7:30 PM — Chicago, IL</small>
        </section>

        <section class="row-2">

            <div style="height: 100%; width: 100%">
                <script src="http://mapwidget2-beta.seatics.com/mobile/js?eventId=2758221&websiteConfigId=24124"></script>
                <script>
                    Seatics.config.buyButtonContentHtml = '<button style="height:20px; background-color:green;" class="venueticket-list-checkout-trigger-js">Buy</button>';
                    Seatics.config.skipPrecheckout = true;
                </script>
            </div>

            <!--
            <form method="POST" action="">
                <fieldset id="filter">
                    <h5>Filter</h5>

                    <div class="fields clear">

                        <div class="field">
                            <label>Quantity</label>
                            <select name="quantity">
                                <option value="Any">Any</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>

                        <div class="field">
                            <label>Price</label>
                            <span class="min">
                                <small>Min $</small>
                                <input type="text" name="minprice">
                            </span>
                            <span class="min">
                                <small>Max $</small>
                                <input type="text" name="minprice">
                            </span>
                        </div>
                    </div>

                    <div class="fields clear">
                        <div class="field">
                            <label>Sort By</label>
                            <select name="quantity">
                                <option value="Row - Ascending">Row - Ascending</option>
                                <option value="Row - Descending">Row - Descending</option>
                                <option value="Section - Ascending">Section - Ascending</option>
                                <option value="Section - Descending">Section - Descending</option>
                                <option value="Price - Low to High">Price - Low to High</option>
                                <option value="Price - High to Low">Price - High to Low</option>
                            </select>
                        </div>

                        <div class="field" id="show-etickets">
                            <input type="checkbox" name="showetickets">
                            <label>Show e-tickets first</label>
                        </div>
                    </div>

                </fieldset>

                <fieldset id="tickets">
                    <ul>
                        <li class="clear">
                            <div class="meta">
                                <h6>PIT</h6>
                                <small>Row AAA</small>
                                <p>Expected ship date: 10/01/17</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>
                        <li class="clear">
                            <div class="meta">
                                <h6>MEZZANINE BOX W</h6>
                                <small>Row W1</small>
                                <p>Expected ship date: 10/01/17</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>

                        <li class="clear">
                            <div class="meta">
                                <h6>MAIN FLOOR 4R</h6>
                                <small>Row W1</small>
                                <p>Instant Download!</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>
                        <li class="clear">
                            <div class="meta">
                                <h6>PIT</h6>
                                <small>Row AAA</small>
                                <p>Expected ship date: 10/01/17</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>
                        <li class="clear">
                            <div class="meta">
                                <h6>MEZZANINE BOX W</h6>
                                <small>Row W1</small>
                                <p>Expected ship date: 10/01/17</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>

                        <li class="clear">
                            <div class="meta">
                                <h6>MAIN FLOOR 4R</h6>
                                <small>Row W1</small>
                                <p>Instant Download!</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>
                        <li class="clear">
                            <div class="meta">
                                <h6>PIT</h6>
                                <small>Row AAA</small>
                                <p>Expected ship date: 10/01/17</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>
                        <li class="clear">
                            <div class="meta">
                                <h6>MEZZANINE BOX W</h6>
                                <small>Row W1</small>
                                <p>Expected ship date: 10/01/17</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>

                        <li class="clear">
                            <div class="meta">
                                <h6>MAIN FLOOR 4R</h6>
                                <small>Row W1</small>
                                <p>Instant Download!</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>
                        <li class="clear">
                            <div class="meta">
                                <h6>PIT</h6>
                                <small>Row AAA</small>
                                <p>Expected ship date: 10/01/17</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>
                        <li class="clear">
                            <div class="meta">
                                <h6>MEZZANINE BOX W</h6>
                                <small>Row W1</small>
                                <p>Expected ship date: 10/01/17</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>

                        <li class="clear">
                            <div class="meta">
                                <h6>MAIN FLOOR 4R</h6>
                                <small>Row W1</small>
                                <p>Instant Download!</p>
                            </div>
                            <div class="fields">
                                <div class="field">
                                    <label>Quantity</label>
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <span>
                                        <strong class="price">$401.00</strong>
                                        <small>ea</small>
                                    </span>
                                    <button name="buy" value="$401.00">Buy</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </fieldset>
            </form>

                    -->
        </section>
    </main>
    <!-- End Main Content -->

@endsection