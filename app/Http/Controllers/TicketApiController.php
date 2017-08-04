<?php
namespace App\Http\Controllers;
use App\Ticketapi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TicketApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEvents()
    {
        $ticketapi = new Ticketapi();
        $todayDate = date("Y.m.d");
        $result = $ticketapi->getEvents(array ('beginDate' => $todayDate));
        return $result;
    }
    public function searchEvents($searchTerms)
    {
        $ticketapi = new Ticketapi();
        $result = $ticketapi->searchEvents(array ('searchTerms' => $searchTerms));
        return $result;
    }
    public function sportEvents()
    {
        $ticketapi = new Ticketapi();
        $todayDate = date("Y.m.d");
        $result = $ticketapi->getEvents(array ('parentCategoryID' => 1));
        return $result;
    }

}
