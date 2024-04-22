<?php 

namespace App\Services;

use Illuminate\Http\Request;
use LucianoTonet\GroqPHP\Groq;

class GroqClient {

  public function chat(Request $request) {

      $groq = new Groq(config('groq.api_key'));

      $chatCompletion = $groq->chat()->completions()->create([
        'model'    => config('groq.model'),
        'messages' => [
          [
            'role'    => config('groq.default_role'),
            'content' => $request->question,
          ],
        ], 
      ]);

      // $response = json_encode($chatCompletion['choices'][0]['message']['content']);

      return response()->json([


        'answer' => $chatCompletion['choices'][0]['message']['content']

      ]);

  }




}
