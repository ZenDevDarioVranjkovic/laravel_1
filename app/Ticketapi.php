<?php

namespace  App;
use SoapClient;

DEFINE('WSDL', 'http://tnwebservices-test.ticketnetwork.com/TNWebService/v3.1/WSDL/tnwebservicestringinputs.xml');

/*
DEFINE('WSDL', 'http://tnwebservices-test.ticketnetwork.com/TNWebService/v3.1/WSDL/tnwebservicestringinputs.xml');
*/
DEFINE('WEB_CONF_ID', 24124); // make sure you change this to your config id
DEFINE('HIGH_INVENTORY_PERFORMERS_LENGTH', 5);
DEFINE('HIGH_SALES_PERFORMERS_LENGTH', 5);

DEFINE('DEFAULT_COL_SORT', 'Date');

DEFINE('TICKET_PAGINATION', ''); // empty string for no pagination, else u can use this to separate ticket group
//results into pages


// Category ID Numbers
//parent category
DEFINE('SPORTS', 1);
DEFINE('CONCERTS', 2);
DEFINE('THEATER', 3);
DEFINE('OTHER', 4);

//child category
DEFINE('JAZZ_AND_BLUES', 21);
DEFINE('ALTERNATIVE', 22);
DEFINE('COUNTRY_AND_FOLK', 23);
DEFINE('COMEDY', 24);
DEFINE('TENNIS', 27);
DEFINE('OFF_BROADWAY', 32);
DEFINE('OTHER_CHILD1', 33);
DEFINE('LAS_VEGAS_SHOWS', 34);
DEFINE('LAS_VEGAS', 35);
DEFINE('RAP_AND_HIP_HOP', 36);
DEFINE('OTHER_CHILD2', 37);
DEFINE('MUSICALS_AND_PLAYS', 38);
DEFINE('WRESTLING', 39);
DEFINE('OTHER_CHILD3', 41);
DEFINE('CHRISTIAN_RELIGIOUS', 43);
DEFINE('RYTHM_AND_BLUES_AND_SOUL', 45);
DEFINE('BLUEGRASS', 46);
DEFINE('VOLLEYBALL', 47);
DEFINE('NEW_AGE_AND_SPIRITUAL', 48);
DEFINE('CLASSICAL', 49);
DEFINE('BOXING', 50);
DEFINE('SKATING', 52);
DEFINE('RODEO', 53);
DEFINE('CHILDREN_AND_FAMILY_SHOWS', 55);
DEFINE('WORLD', 57);
DEFINE('FAIRS_AND_FESTIVALS', 58);
DEFINE('CIRCUS', 59);
DEFINE('BALLET', 60);
DEFINE('HARD_ROCK_AND_METAL', 61);
DEFINE('POP_AND_ROCK', 62);
DEFINE('BASEBALL', 63);
DEFINE('FOOTBALL', 65);
DEFINE('BASKETBALL', 66);
DEFINE('GOLF', 67);
DEFINE('HOCKEY', 68);
DEFINE('RACING', 69);
DEFINE('BROADWAY', 70);
DEFINE('SOCCER', 71);
DEFINE('MAGIC_SHOWS', 72);
DEFINE('LATIN', 73);
DEFINE('OTHER_CHILD4', 74);
DEFINE('OPERA', 75);
DEFINE('LACROSSE', 76);
DEFINE('RUGBY', 77);

//grandchild category
DEFINE('MLB_PRO_GRANDCHILD', 16);
DEFINE('COLLEGE_GRANDCHILD', 17);
DEFINE('PGA_PRO_GRANDCHILD', 18);
DEFINE('NHL_PRO_GRANDCHILD', 19);
DEFINE('AUTO_GRANDCHILD', 20);
DEFINE('MOTORCYCLE_GRANDCHILD', 21);
DEFINE('MLS_PRO_GRANDCHILD', 22);
DEFINE('USPTA_PRO_GRANDCHILD', 24);
DEFINE('OTHER_GRANDCHILD1', 25);
DEFINE('WWE_PRO_GRANDCHILD', 26);
DEFINE('MINORS_AAA_GRANDCHILD', 27);
DEFINE('WORLD_CUP_GRANDCHILD', 28);
DEFINE('OTHER_GRANDCHILD2', 29);
DEFINE('NBA_PRO_GRANDCHILD', 30);
DEFINE('WNBA_PRO_GRANDCHILD', 31);
DEFINE('NFL_PRO_GRANDCHILD', 32);
DEFINE('ICE_FIGURE_SKATING_GRANDCHILD', 33);
DEFINE('ICE_SHOW_GRANDCHILD', 34);
DEFINE('HORSE_GRANDCHILD', 35);
DEFINE('CFL_GRANDCHILD', 36);
DEFINE('FRONTIER_LEAGUE_GRANDCHILD', 37);
DEFINE('NLL_GRANDCHILD', 38);
DEFINE('IHL_GRANDCHILD', 39);
DEFINE('AHL_GRANDCHILD', 40);
DEFINE('ECHL_GRANDCHILD', 41);


class Ticketapi
{
    /*
    public function  getTest(){
        $test = 1234;
        return $test;
    }
    */

    function getEvents2($param)
    {
        $param['websiteConfigID'] = WEB_CONF_ID;
        $client = new SoapClient(WSDL);
        $result = $client->__soapCall('GetEvents', array('parameters' => $param));

        $result = $result->GetEventsResult->Event;
        //$json = json_encode( (array)$result );

        echo json_encode($result);
    }

    function getEvents($param) {
        $param['websiteConfigID'] = WEB_CONF_ID;

        $parametersExist = false;
        $paramkeys = array_keys($param);

        for($a = 1; $a<count($param); $a++) {
            if($param[$paramkeys[$a]]) {
                $parametersExist = true;
                break;
            }
        }

        if($parametersExist) {
            $client = new SoapClient(WSDL);

            $result = $client->__soapCall('GetEvents', array('parameters' => $param));

            if (is_soap_fault($result))
            {
                echo '<h2>Fault</h2><pre>';
                print_r($result);
                echo '</pre>';
            }

            unset($client);
            if (empty($result)) return "empty result";
            else {
                // print_r($result); //If you want an example array uncomment this and use event id 203518 for a single result

                // event will have an array with a count of events if the result is multiple, else event will go directly to the one
                //	result event

                /*
                Example events array:

                $result['GetEventsStringInputsResult']['Event'] =>

                Array ( [ID] => 664146 [Name] => Hannah Montana [Date] => 2008-01-03T19:00:00 [DisplayDate] => 01/03/2008 7:00PM [Venue] => Quicken Loans Arena (formerly Gund Arena) [City] => Cleveland [StateProvince] => OH [ParentCategoryID] => 2 [ChildCategoryID] => 62 [GrandchildCategoryID] => 25 [MapURL] => http://www.indux.com/map/gundArena_basketball.gif [VenueID] => 253 [StateProvinceID] => 36 [VenueConfigurationID] => 0 [Clicks] => 0 [IsWomensEvent] => false )

                ID													Event ID
                Name												Event Name
                Date												Date Time
                DisplayDate									Date Time but Formatted for easy copy and paste
                Venue												Hartford Civic Center, Madison Square Garden etc.
                City												New York, Cleveland, etc.
                StateProvince								CT, VT, MA for example
                ParentCategoryID						ID, useful for other ws calls
                ChildCategoryID							ID, useful for other ws calls
                GrandchildCategoryID				ID, useful for other ws calls
                MapURL											Image location of the Map
                VenueID											Venue ID, for use in other ws calls
                StateProvinceID							State Province ID, for use in other ws calls
                VenueConfigurationID				Each Venue has "n" configurations, stage, arena, etc.
                Clicks											Deprecated
                IsWomensEvent								really useful for college basketball teams for example, where theres a mens and a womens

                */

                $returnString = '';
                if(isset($result->GetEventsStringInputsResult)) {
                    if(is_array($result->GetEventsStringInputsResult->Event)) {
                        for($i = 0; $i < count($result->GetEventsStringInputsResult->Event); $i++) {
                            $returnString .= '<div class="resultsSection">';
                            $returnString .= resultsTable($result->GetEventsStringInputsResult->Event[$i]);
                            $returnString .= '</div>';
                        }
                    } else {
                        $returnString .= '<div class="resultsSection">';
                        $returnString .= resultsTable($result->GetEventsStringInputsResult->Event);
                        $returnString .= '</div>';
                    }
                }
                else {
                    $returnString .= '<div class="resultsSection">';
                    $returnString .= 'There were no matches';
                    $returnString .= '</div>';
                }

                return $returnString;

            }

        } else { // no parameters

            return 'Please specify some search terms.';

        }

    }

}