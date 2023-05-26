<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;

use Illuminate\Console\Command;

class altin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'altin:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Altın kayıt';

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
        CURLOPT_URL => CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
        
        ),
        ));
        $response2 = curl_exec($curl);

        curl_close($curl);
        $response2 = json_decode($response2, true);
        DB::table('onss')->insert(['alis'=>$response2["data"][0]['buying'],'satis'=>$response2["data"][0]['selling']]);
        DB::table('grams')->insert(['alis'=>$response2["data"][1]['buying'],'satis'=>$response2["data"][1]['selling']]);
        DB::table('ceyreks')->insert(['alis'=>$response2["data"][2]['buying'],'satis'=>$response2["data"][2]['selling']]);
        DB::table('yarims')->insert(['alis'=>$response2["data"][3]['buying'],'satis'=>$response2["data"][3]['selling']]);
        DB::table('tams')->insert(['alis'=>$response2["data"][4]['buying'],'satis'=>$response2["data"][4]['selling']]);
        DB::table('cumhuriyets')->insert(['alis'=>$response2["data"][5]['buying'],'satis'=>$response2["data"][5]['selling']]);
        DB::table('atas')->insert(['alis'=>$response2["data"][6]['buying'],'satis'=>$response2["data"][6]['selling']]);
        DB::table('ondorts')->insert(['alis'=>$response2["data"][7]['buying'],'satis'=>$response2["data"][7]['selling']]);
        DB::table('onsekizaltins')->insert(['alis'=>$response2["data"][8]['buying'],'satis'=>$response2["data"][8]['selling']]);
        DB::table('yirmiikibileziks')->insert(['alis'=>$response2["data"][9]['buying'],'satis'=>$response2["data"][9]['selling']]);
        DB::table('gumuss')->insert(['alis'=>$response2["data"][10]['buying'],'satis'=>$response2["data"][10]['selling']]);

    }
}
