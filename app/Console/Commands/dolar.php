<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class dolar extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doviz:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Döviz bilgi kaydetme';

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
        DB::table('dolars')->insert(['alis'=>$json['items'][0]['TP_DK_USD_A'],'satis'=>$json['items'][0]['TP_DK_USD_S']]);

        DB::table('euros')->insert(['alis'=>$json['items'][0]['TP_DK_EUR_A'],'satis'=>$json['items'][0]['TP_DK_EUR_S']]);

        DB::table('isvicfranks')->insert(['alis'=>$json['items'][0]['TP_DK_CHF_A'],'satis'=>$json['items'][0]['TP_DK_CHF_S']]);

        DB::table('sterlins')->insert(['alis'=>$json['items'][0]['TP_DK_GBP_A'],'satis'=>$json['items'][0]['TP_DK_GBP_S']]);

        DB::table('yens')->insert(['alis'=>$json['items'][0]['TP_DK_JPY_A'],'satis'=>$json['items'][0]['TP_DK_JPY_S']]);

        DB::table('kuveytdinars')->insert(['alis'=>$json['items'][0]['TP_DK_KWD_A'],'satis'=>$json['items'][0]['TP_DK_KWD_S']]);

        DB::table('norveckrons')->insert(['alis'=>$json['items'][0]['TP_DK_NOK_A'],'satis'=>$json['items'][0]['TP_DK_NOK_S']]);

        DB::table('rubles')->insert(['alis'=>$json['items'][0]['TP_DK_RUB_A_YTL'],'satis'=>$json['items'][0]['TP_DK_RUB_S_YTL']]);

        DB::table('kanadadolars')->insert(['alis'=>$json['items'][0]['TP_DK_CAD_A_YTL'],'satis'=>$json['items'][0]['TP_DK_CAD_S_YTL']]);

        DB::table('suudiriyals')->insert(['alis'=>$json['items'][0]['TP_DK_SAR_A_YTL'],'satis'=>$json['items'][0]['TP_DK_SAR_S_YTL']]);

        DB::table('bulgarlevas')->insert(['alis'=>$json['items'][0]['TP_DK_BGN_A_YTL'],'satis'=>$json['items'][0]['TP_DK_BGN_S_YTL']]);

        DB::table('yuans')->insert(['alis'=>$json['items'][0]['TP_DK_CNY_A_YTL'],'satis'=>$json['items'][0]['TP_DK_CNY_S_YTL']]);

        DB::table('manats')->insert(['alis'=>$json['items'][0]['TP_DK_AZN_A_YTL'],'satis'=>$json['items'][0]['TP_DK_AZN_S_YTL']]);

        DB::table('guneykorewons')->insert(['alis'=>$json['items'][0]['TP_DK_KRW_A_YTL'],'satis'=>$json['items'][0]['TP_DK_KRW_S_YTL']]);







    }
}
