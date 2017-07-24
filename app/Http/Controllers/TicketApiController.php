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
    public function getIndex(Storage $session)
    {
        $ticketapi = new Ticketapi();
        $ticketapis = $ticketapi->getTickets($session);
        return view('ticketapi.index',['ticketapis' => $ticketapis]);
    }
}
