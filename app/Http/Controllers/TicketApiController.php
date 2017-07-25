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
    public function getIndex()
    {
        $ticketapi = new Ticketapi();
        $result = $ticketapi->getEvents(array ('beginDate' => '07.25.2017'));
        return view('ticketapi.index',['ticketapi' => $result]);
    }
}
