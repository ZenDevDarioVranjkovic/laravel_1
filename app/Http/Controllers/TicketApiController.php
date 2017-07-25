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
        $api = new Ticketapi();
        $ticketapi = $api->getTickets(array ('beginDate' => '04.24.2017'));
        return view('ticketapi.index',['ticketapi' => $ticketapi]);
    }
}
