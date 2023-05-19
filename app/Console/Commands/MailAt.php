<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use Http;
use \App\Mail\MyTestMail;
use App\Models\Abone;

class MailAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:yolla';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mail Yollama';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $bugun = date("d-m-Y");
        $api= env('TCMB_API_URL_BAS'). $bugun . env('TCMB_API_URL_ORTA') .$bugun. env('TCMB_API_URL_BIT') . "GrQ2NfJumB";
        $response = Http::get($api);
        $json= $response->json();

        $dolar = $json['items'][0]['TP_DK_USD_S'];
        $euro = $json['items'][0]['TP_DK_EUR_S'];
        $sterlin = $json['items'][0]['TP_DK_GBP_S'];
        $yen = $json['items'][0]['TP_DK_JPY_S'];
        $kanadadolar = $json['items'][0]['TP_DK_CAD_S_YTL'];
        $yuan = $json['items'][0]['TP_DK_CNY_S_YTL'];
        $ruble = $json['items'][0]['TP_DK_RUB_S_YTL'];
        $won = $json['items'][0]['TP_DK_KRW_S_YTL'];
        $suudiriyal = $json['items'][0]['TP_DK_SAR_S_YTL'];
        $manat = $json['items'][0]['TP_DK_AZN_S_YTL'];
        $frank = $json['items'][0]['TP_DK_CHF_S'];
        $dinar = $json['items'][0]['TP_DK_KWD_S'];
        $norveckron = $json['items'][0]['TP_DK_NOK_S'];
        $leva = $json['items'][0]['TP_DK_BGN_S_YTL'];


        $abones = Abone::all();
        if ($abones->count() > 0) {
        foreach ($abones as $user) {
            Mail::to($user->mail)->send(new MyTestMail($dolar ,$euro, $sterlin, $yen,$kanadadolar,$yuan,$ruble,$won,$suudiriyal,$manat,$frank,$dinar,$norveckron,$leva));
        }
        }

        return 0;
    }
}
