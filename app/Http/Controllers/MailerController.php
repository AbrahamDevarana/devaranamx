<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailerRequest;

class MailerController extends Controller
{
    public function contactoForm(MailerRequest $request){ 
        $request->validated();
        
    }

    public function integracionForm(MailerRequest $request){
        $request->validated();
    }

}
