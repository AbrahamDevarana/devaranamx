<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailerRequest;
use App\Mail\DevaranaMail;
use App\Mail\ClientMail;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller
{
    public function contactoForm(MailerRequest $request){
        $data = $request->all();
        Mail::to($data['email'])->send(new ClientMail());
        Mail::to('abrahamalvarado@devarana.mx')->send(new DevaranaMail($data));
        return redirect('gracias')->with('success', 'Estamos felices de atenderte, nos comunicaremos contigo a la brevedad.');
    }
}
