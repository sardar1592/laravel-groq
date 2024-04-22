<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GroqClient;

class ChatController extends Controller
{

    protected GroqClient $GroqClient;

    public function __construct(GroqClient $GroqClient)
    {
        $this->GroqClient = $GroqClient;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $response = $this->GroqClient->chat($request);

        //return response in json

        return $response;
    }
}
