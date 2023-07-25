<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VideogameMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public function __construct()
    {
        //
    }

    public function build(){
        $nombre = "EDGAR";
        return $this->view('mails.videogame',['nombre'=>$nombre]);
    }

    
}
