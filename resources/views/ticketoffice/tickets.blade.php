@extends('layouts.ticketoffice-tickets')

@section('content')

    <!-- Start Main Content -->
    <main id="content">

        <section class="row-1">
            <h3><span>Fleet Foxes Tickets</span> - ACL Live Moody Theater</h3>
            <small>Oct 3, 2017 — 7:30 PM — Chicago, IL</small>
        </section>

        <section class="row-2">

            <!-- Begin main enclosing table -->
            <table border="0" cellspacing="0" cellpadding="0" width="1000px">
                <tr>
                    <td>
                        <p align="center">Sample Seatics Venue Maps "Default" Ticket List page -- Build 0103.0.0</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:1000px">
                        <div id="ssc_listAndMapDiv"></div>
                    </td>
                </tr>

                <!-- The following message, combo box and button provide a way to try different map/list options easily without any coding. This MUST NOT BE INCLUDED IN ANY REAL WEB PAGES -->
                <tr>
                    <td align="center"> Select an item from the list and click the "Send" button to try out different map options</td>
                </tr>

                <tr>
                    <td align="center">
                        <input type="button" value="Send List this Option ==>" onclick="eval($('#listActions').val())" />
                        <select size="1" id="listActions">
                            <option value="alert('actionHistory='+ssc.actionHistory);" selected="selected">Display Action History</option>
                            <option value="ssc.setOptions({showTGsNotOnMap:'merged'})">TGs not on map: MERGED IN LIST</option>
                            <option value="ssc.setOptions({showTGsNotOnMap:'bottom'})">TGs not on map: AT BOTTOM OF LIST</option>
                            <option value="ssc.setOptions({showTGsNotOnMap:'hidden'})">TGs not on map: HIDDEN</option>
                            <option value="ssc.setOptions({showTGsInNotSelectedSections:true})">TGs in UN-selected sections on map: SHOW</option>
                            <option value="ssc.setOptions({showTGsInNotSelectedSections:false})">TGs in UN-selected sections on map:HIDE</option>
                            <option value="ssc.setOptions({showListGroupHeaders:true})">Top list content descriptor: SHOW</option>
                            <option value="ssc.setOptions({showListGroupHeaders:false})">Top list content descriptor: HIDE</option>
                            <option value="ssc.setOptions({showDynamicMap:1})">Show Dynamic Map</option>
                            <option value="ssc.setOptions({showDynamicMap:0})">Show Static Map</option>
                            <option value="ssc.setOptions({showStdSectionNames:false})">Standard Section names: Disable</option>  <option value="ssc.setOptions({showStdSectionNames:true})">Standard Section names: Enable</option> <option value="ssc.setOptions({addlListFilters:[]})">Addl List Filters: []</option>
                            <option value="ssc.setOptions({addlListFilters:['parking']})">Addl List Filters: [parking]</option>
                            <option value="ssc.setOptions({addlListFilters:['packages']})">Addl List Filters: [packages]</option>
                            <option value="ssc.setOptions({addlListFilters:['parking', 'packages']})">Addl List Filters: [parking,packages]</option>
                            <option value="ssc.setOptions({showNotesAs:'turndown'})">showNotesAs: Turndown - default</option>
                            <option value="ssc.setOptions({showNotesAs:'text'})">showNotesAs: Text in Ticket Group</option>
                            <option value="ssc.setOptions({vfsEnable:'hold'})">VFS Enable: Hold</option>
                            <option value="ssc.setOptions({vfsEnable:'click'})">VFS Enable: Click</option>
                            <option value="ssc.setOptions({vfsEnable:0})">VFS Disable</option>
                            <option value="ssc.setOptions({sectionNotInListColor:'AAFFAA'})">sectionNotInList Color=LtGreen</option>
                            <option value="ssc.setOptions({sectionNotInListColor:'FFFFFF'})">sectionNotInList Color=White</option>
                        </select>
                    </td>
                </tr>
            </table>

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