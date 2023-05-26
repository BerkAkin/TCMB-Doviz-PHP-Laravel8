<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class kripto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kripto:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kripto Kayıt';

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
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
       
        ),
        ));
        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        DB::table('etherums')->insert(['alis'=>$response["data"][1]['buying'],'satis'=>$response["data"][1]['selling']]);
        DB::table('bitcoins')->insert(['alis'=>$response["data"][0]['buying'],'satis'=>$response["data"][0]['selling']]);
        DB::table('trons')->insert(['alis'=>$response["data"][5]['buying'],'satis'=>$response["data"][5]['selling']]);
        DB::table('dogecoins')->insert(['alis'=>$response["data"][4]['buying'],'satis'=>$response["data"][4]['selling']]);
        DB::table('etherumclassics')->insert(['alis'=>$response["data"][6]['buying'],'satis'=>$response["data"][6]['selling']]);
        DB::table('dashs')->insert(['alis'=>$response["data"][3]['buying'],'satis'=>$response["data"][3]['selling']]);
        DB::table('litecoins')->insert(['alis'=>$response["data"][2]['buying'],'satis'=>$response["data"][2]['selling']]);
        DB::table('tethers')->insert(['alis'=>$response["data"][7]['buying'],'satis'=>$response["data"][7]['selling']]);

    }
}
