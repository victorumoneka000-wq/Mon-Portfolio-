<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Messages;

class ContactController extends Controller


{
public function store (Request $request)
 {
     Message:: create([
        'nom' => $request->nom,
        'email' => $request->email,
        'message' => $request-> message
            ]);
    return "<h1>votre message a ete enregistrer<h1/>";

 }

 public function index ()
{
    $messages = Message :: all();
    return view ('messages', compact('messages'));
}


    public function destroy($id)
    
    {
        $message = Message::find($id);
        if ($message) {
            $message->delete();
        }

        return redirect('/messages');
    
}


}