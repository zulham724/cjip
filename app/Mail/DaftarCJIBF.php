<?php

namespace App\Mail;

use Barryvdh\DomPDF\Facade as PDF;
use http\Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DaftarCJIBF extends Mailable
{
    use Queueable, SerializesModels;

    public $send;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($send)
    {
        $this->send = $send;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd(base64_encode($this->send));
        //$attach = PDF::loadView('attach', ['send' => $this->send])->setPaper('letter','portrait');
        return $this->from('cjibf.jateng@gmail.com')
            ->subject('Thank You For Joining Us')
            ->view('maileclipse::templates.attachment')
            ->text('maileclipse::templates.attachment_plain_text')
            /*->attachData($attach->output(), 'CJIBF.pdf', [
                'mime' => 'application/pdf',
            ])*/
            ->with('data', $this->send);
        //dd($this->send);


    }
}
