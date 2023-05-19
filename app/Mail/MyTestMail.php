<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $dolar;
    public $euro;
    public $sterlin;
    public $yen;
    public $kanadadolar;
    public $yuan;
    public $ruble;
    public $won;
    public $suudiriyal;
    public $manat;
    public $frank;
    public $dinar;
    public $norveckron;
    public $leva;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dolar ,$euro, $sterlin, $yen,$kanadadolar,$yuan,$ruble,$won,$suudiriyal,$manat,$frank,$dinar,$norveckron,$leva)
    {
        $this->dolar = $dolar;
        $this->euro = $euro;
        $this->sterlin = $sterlin;
        $this->yen = $yen;
        $this->kanadadolar = $kanadadolar;
        $this->yuan = $yuan;
        $this->ruble = $ruble;
        $this->won = $won;
        $this->suudiriyal = $suudiriyal;
        $this->manat = $manat;
        $this->frank = $frank;
        $this->dinar = $dinar;
        $this->norveckron = $norveckron;
        $this->leva = $leva;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Güncel Döviz - Altın - Kripto')
                    ->view('emails.Mail',[
                        'dolar'=>$this->dolar,
                        'euro'=>$this->euro,
                        'won'=>$this->won,
                        'sterlin'=>$this->sterlin,
                        'yen'=>$this->yen,
                        'kanadadolar'=>$this->kanadadolar,
                        'yuan'=>$this->yuan,
                        'ruble'=>$this->ruble,
                        'suudiriyal'=>$this->suudiriyal,
                        'manat'=>$this->manat,
                        'frank'=>$this->frank,
                        'dinar'=>$this->dinar,
                        'norveckron'=>$this->norveckron,
                        'leva'=>$this->leva,
                    ]
                );
    }
}
