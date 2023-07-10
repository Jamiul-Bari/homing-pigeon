<?php

namespace App\Http\Controllers;

use App\Events\ChatMessageEvent;
use Illuminate\Http\Request;

class ChatMessageController extends Controller {
    /**
     * @param Request $request
     */
    public function index( Request $request ) {
        event( new ChatMessageEvent( $request->message ) );
    }
}
