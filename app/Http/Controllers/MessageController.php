<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userMessage;

class MessageController extends Controller
{
    //

    public function sendMessage(Request $req){
    $validate=$req->validate([
        'name' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'number' => 'required|string|max:15',
            'Assigen' => 'nullable|string|max:255',
            'remark' => 'nullable|string|max:255',
            'branch_id' => 'required|string|max:255',
            'status' => 'nullable|boolean',
    ]);

    $res=userMessage::create($validate);
    return $res;


    }
}
