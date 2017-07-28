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
    public function getApi()
    {
        $ticketapi = new Ticketapi();
        $todayDate = date("Y.m.d");
        $result = $ticketapi->getEvents(array ('beginDate' => $todayDate));
        return $result;
    }
    public function getSearchEvents()
    {
        $ticketapi = new Ticketapi();
        $searchTerms = 'Test';
        $result = $ticketapi->searchEvents(array ('searchTerms' => $searchTerms));
        return view('ticketapi.index',['result' => $result]);
    }

}
