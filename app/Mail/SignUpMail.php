<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\users_guide;
use Illuminate\Queue\SerializesModels;

class SignUpMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $priceQuote =   users_guide::where("name", "Like", "%" ."Price Quote". "%")->get();
        $vNineForm =   users_guide::where("name", "Like", "%" ."W-9 Form". "%")->get();
        
        return $this->subject('4N6 Fanatics - Thank you for your membership form')
        ->view('emails.checkPOmail')
        ->attach("public/images/" . $priceQuote[0]->image, ['as' => 'PriceQuote.pdf'])
        ->attach("public/images/" . $vNineForm[0]->image, ['as' => 'W9Form.pdf']);


    }
}
