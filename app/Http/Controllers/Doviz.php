<?php

namespace App\Http\Controllers;

use App\Charts\dovizChart;
use Illuminate\Support\Facades\Http;

use App\Models\Dolar;
use App\Models\Euro;
use App\Models\IsvicreFrank;
use App\Models\Sterlin;
use App\Models\Yen;
use App\Models\KuveytDinar;
use App\Models\NorvecKron;
use App\Models\Ruble;
use App\Models\KanadaDolar;
use App\Models\SuudiRiyal;
use App\Models\BulgarLeva;
use App\Models\Yuan;
use App\Models\Manat;
use App\Models\GuneyKoreWon;
use App\Models\Ata;
use App\Models\Gram;
use App\Models\Ceyrek;
use App\Models\Yarim;
use App\Models\Tam;
use App\Models\Cumhuriyet;
use App\Models\Ondort;
use App\Models\Onsekizaltin;
use App\Models\Yirmiikibilezik;
use App\Models\Ons;
use App\Models\Gumus;
use App\Models\etherum;
use App\Models\etherumclassic;
use App\Models\bitcoin;
use App\Models\dogecoin;
use App\Models\litecoin;
use App\Models\tether;
use App\Models\dash;
use App\Models\tron;
use PhpParser\Node\Stmt\Return_;

class Doviz extends Controller
{


    private function degisimHesapla($eski, $yeni){
        $degisim = ($eski - $yeni) / $yeni * 100;
        return number_format((float)$degisim, 2, '.', '');
    }
    function grafikOlustur($tip, $tarih ,$tur){
        $tip2 = new dovizChart;
        $tip2->labels($tarih);
        switch($tur){
            case 'Gram':
                $tip2->dataset('Gram Altın', 'line', $tip)->color('rgb(251, 198, 0)');
                break;
            case 'Çeyrek':
                $tip2->dataset('Çeyrek Altın', 'line', $tip)->color('rgb(251, 198, 0)');
                break;
            case 'Yarım':
                $tip2->dataset('Yarım Altın', 'line', $tip)->color('rgb(251, 198, 0)');
                break;
            case 'Tam':
                $tip2->dataset('Tam Altın', 'line', $tip)->color('rgb(251, 198, 0)');
                break;
            case 'Ons':
                $tip2->dataset('Ons', 'line', $tip)->color('rgb(251, 198, 0)');
                break;
            case 'Ondort':
                $tip2->dataset('On Dört Ayar', 'line', $tip)->color('rgb(251, 198, 0)');
                break;
            case 'Onsekiz':
                $tip2->dataset('On Sekiz Ayar', 'line', $tip)->color('rgb(251, 198, 0)');
                break;
            case 'Yirmiki':
                $tip2->dataset('Yirmi İki Ayar', 'line', $tip)->color('rgb(251, 198, 0)');
                break;
            case 'Cumhuriyet':
                $tip2->dataset('Cumhuriyet Altını', 'line', $tip)->color('rgb(251, 198, 0)');
                break;
            case 'Ata':
                $tip2->dataset('Ata Altını', 'line', $tip)->color('rgb(251, 198, 0)');
                break;
            case 'Gumus':
                $tip2->dataset('Gümüş', 'line', $tip)->color('rgb(209, 209, 209))');
                break;
        }
        return $tip2;

    }



    function getCeyrekData(){
        $ceyrek = Ceyrek::all();
        $diziTarih = [];
        $diziCeyrek = [];
        for ($de = 0; $de < count($ceyrek); $de++) {
            if ($ceyrek[$de]["alis"] == null) {
                continue;
            } else {
                array_push($diziCeyrek, number_format((float)$ceyrek[$de]["satis"], 2, '.', ''));

            }
            if ($ceyrek[$de]["created_at"] == null) {
                continue;
            } else {
                array_push($diziTarih, substr($ceyrek[$de]["created_at"],0,11));
            }
        }
        return $this->grafikOlustur($diziCeyrek,$diziTarih,'Çeyrek');
    }
    function getGramData(){
        $gram = Gram::all();
        $diziTarih = [];
        $diziGram = [];
        for ($de = 0; $de < count($gram); $de++) {
            if ($gram[$de]["alis"] == null) {
                continue;
            } else {
                array_push($diziGram, number_format((float)$gram[$de]["satis"], 2, '.', ''));

            }
            if ($gram[$de]["created_at"] == null) {
                continue;
            } else {
                array_push($diziTarih, substr($gram[$de]["created_at"],0,11));
            }
        }
        return $this->grafikOlustur($diziGram,$diziTarih,'Gram');
    }
    function getOnsData(){
        $ons = Ons::all();
        $diziTarih = [];
        $diziOns = [];
        for ($de = 0; $de < count($ons); $de++) {
            if ($ons[$de]["alis"] == null) {
                continue;
            } else {
                array_push($diziOns, number_format((float)$ons[$de]["satis"], 2, '.', ''));

            }
            if ($ons[$de]["created_at"] == null) {
                continue;
            } else {
                array_push($diziTarih, substr($ons[$de]["created_at"],0,11));
            }
        }
        return $this->grafikOlustur($diziOns,$diziTarih,'Ons');


    }
    function getYarimData(){
        $yarim = Yarim::all();
        $diziTarih = [];
        $diziYarim = [];
        for ($de = 0; $de < count($yarim); $de++) {
            if ($yarim[$de]["alis"] == null) {
                continue;
            } else {
                array_push($diziYarim, number_format((float)$yarim[$de]["satis"], 2, '.', ''));

            }
            if ($yarim[$de]["created_at"] == null) {
                continue;
            } else {
                array_push($diziTarih, substr($yarim[$de]["created_at"],0,11));
            }
        }
        return $this->grafikOlustur($diziYarim,$diziTarih,'Yarım');


    }
    function getTamData(){
        $tam = Tam::all();
        $diziTarih = [];
        $diziTam = [];
        for ($de = 0; $de < count($tam); $de++) {
            if ($tam[$de]["alis"] == null) {
                continue;
            } else {
                array_push($diziTam, number_format((float)$tam[$de]["satis"], 2, '.', ''));

            }
            if ($tam[$de]["created_at"] == null) {
                continue;
            } else {
                array_push($diziTarih, substr($tam[$de]["created_at"],0,11));
            }
        }
        return $this->grafikOlustur($diziTam,$diziTarih,'Tam');


    }
    function getOnsekizData(){
        $onsekiz = Onsekizaltin::all();
        $diziTarih = [];
        $diziOnsekiz = [];
        for ($de = 0; $de < count($onsekiz); $de++) {
            if ($onsekiz[$de]["alis"] == null) {
                continue;
            } else {
                array_push($diziOnsekiz, number_format((float)$onsekiz[$de]["satis"], 2, '.', ''));

            }
            if ($onsekiz[$de]["created_at"] == null) {
                continue;
            } else {
                array_push($diziTarih, substr($onsekiz[$de]["created_at"],0,11));
            }
        }
        return $this->grafikOlustur($diziOnsekiz,$diziTarih,'Onsekiz');


    }
    function getCumhuriyetData(){
        $cumhuriyet = Cumhuriyet::all();
        $diziTarih = [];
        $diziCumhuriyet = [];
        for ($de = 0; $de < count($cumhuriyet); $de++) {
            if ($cumhuriyet[$de]["alis"] == null) {
                continue;
            } else {
                array_push($diziCumhuriyet, number_format((float)$cumhuriyet[$de]["satis"], 2, '.', ''));

            }
            if ($cumhuriyet[$de]["created_at"] == null) {
                continue;
            } else {
                array_push($diziTarih, substr($cumhuriyet[$de]["created_at"],0,11));
            }
        }
        return $this->grafikOlustur($diziCumhuriyet,$diziTarih,'Cumhuriyet');

    }
    function getOndortData(){
        $ondort = Ondort::all();
        $diziTarih = [];
        $diziOndort = [];
        for ($de = 0; $de < count($ondort); $de++) {
            if ($ondort[$de]["alis"] == null) {
                continue;
            } else {
                array_push($diziOndort, number_format((float)$ondort[$de]["satis"], 2, '.', ''));

            }
            if ($ondort[$de]["created_at"] == null) {
                continue;
            } else {
                array_push($diziTarih, substr($ondort[$de]["created_at"],0,11));
            }
        }
        return $this->grafikOlustur($diziOndort,$diziTarih,'Ondort');

    }
    function getGumusData(){
        $gumus = Gumus::all();
        $diziTarih = [];
        $diziGumus = [];
        for ($de = 0; $de < count($gumus); $de++) {
            if ($gumus[$de]["alis"] == null) {
                continue;
            } else {
                array_push($diziGumus, number_format((float)$gumus[$de]["satis"], 2, '.', ''));

            }
            if ($gumus[$de]["created_at"] == null) {
                continue;
            } else {
                array_push($diziTarih, substr($gumus[$de]["created_at"],0,11));
            }
        }
        return $this->grafikOlustur($diziGumus,$diziTarih,'Gumus');
    }
    function getAtaData(){
        $ata = Ata::all();
        $diziTarih = [];
        $diziAta = [];
        for ($de = 0; $de < count($ata); $de++) {
            if ($ata[$de]["alis"] == null) {
                continue;
            } else {
                array_push($diziAta, number_format((float)$ata[$de]["satis"], 2, '.', ''));

            }
            if ($ata[$de]["created_at"] == null) {
                continue;
            } else {
                array_push($diziTarih, substr($ata[$de]["created_at"],0,11));
            }
        }
        return $this->grafikOlustur($diziAta,$diziTarih,'Ata');

    }
    function getYirmiIkiData(){

        $yirmiIki = Yirmiikibilezik::all();
        $diziTarih = [];
        $diziYirmiIki = [];
        for ($de = 0; $de < count($yirmiIki); $de++) {
            if ($yirmiIki[$de]["alis"] == null) {
                continue;
            } else {
                array_push($diziYirmiIki, number_format((float)$yirmiIki[$de]["satis"], 2, '.', ''));
            }
            if ($yirmiIki[$de]["created_at"] == null) {
                continue;
            } else {
                array_push($diziTarih, substr($yirmiIki[$de]["created_at"],0,11));
            }
        }
        return $this->grafikOlustur($diziYirmiIki,$diziTarih,'Yirmiki');

    }


    function getData()
    {

        $gramchart = $this->getGramData();
        $yarimchart= $this->getYarimData();
        $tamchart= $this->getTamData();
        $onschart= $this->getOnsData();
        $cumhuriyetchart= $this->getCumhuriyetData();
        $ondortchart= $this->getOndortData();
        $onsekizchart= $this->getOnsekizData();
        $yirmiikichart= $this->getYirmiIkiData();
        $atachart= $this->getAtaData();
        $ceyrekchart= $this->getCeyrekData();
        $gumuschart= $this->getGumusData();



        $bugun = date("d-m-Y");


        $dolarK1 = Dolar::orderBy('created_at', 'DESC')->first();
        $dolarK2 = Dolar::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $euroK1 = Euro::orderBy('created_at', 'DESC')->first();
        $euroK2 = Euro::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $sterlinK1 = Sterlin::orderBy('created_at', 'DESC')->first();
        $sterlinK2 = Sterlin::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $isvicreFrankK1 = IsvicreFrank::orderBy('created_at', 'DESC')->first();
        $isvicreFrankK2 = IsvicreFrank::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $kanadaDolarK1 = KanadaDolar::orderBy('created_at', 'DESC')->first();
        $kanadaDolarK2 = KanadaDolar::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $kuveytDinarK1 = KuveytDinar::orderBy('created_at', 'DESC')->first();
        $kuveytDinarK2 = KuveytDinar::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $norvecKronK1 = NorvecKron::orderBy('created_at', 'DESC')->first();
        $norvecKronK2 = NorvecKron::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $suudiRiyalK1 = SuudiRiyal::orderBy('created_at', 'DESC')->first();
        $suudiRiyalK2 = SuudiRiyal::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $japonYenK1 = Yen::orderBy('created_at', 'DESC')->first();
        $japonYenK2 = Yen::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $bulgarLevaK1 = BulgarLeva::orderBy('created_at', 'DESC')->first();
        $bulgarLevaK2 = BulgarLeva::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $rusRubleK1 = Ruble::orderBy('created_at', 'DESC')->first();
        $rusRubleK2 = Ruble::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $cinYuanK1 = Yuan::orderBy('created_at', 'DESC')->first();
        $cinYuanK2 = Yuan::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $koreWonK1 = GuneyKoreWon::orderBy('created_at', 'DESC')->first();
        $koreWonK2 = GuneyKoreWon::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $azeriManatK1 = Manat::orderBy('created_at', 'DESC')->first();
        $azeriManatK2 = Manat::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();






        $onsK1 = Ons::orderBy('created_at', 'DESC')->first();
        $onsK2 = Ons::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $gramK1 = Gram::orderBy('created_at', 'DESC')->first();
        $gramK2 = Gram::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $ceyrekK1 = Ceyrek::orderBy('created_at', 'DESC')->first();
        $ceyrekK2 = Ceyrek::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $yarimK1 = Yarim::orderBy('created_at', 'DESC')->first();
        $yarimK2 = Yarim::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $tamK1 = Tam::orderBy('created_at', 'DESC')->first();
        $tamK2 = Tam::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $ataK1 = Ata::orderBy('created_at', 'DESC')->first();
        $ataK2 = Ata::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $cumhuriyetK1 = Cumhuriyet::orderBy('created_at', 'DESC')->first();
        $cumhuriyetK2 = Cumhuriyet::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $ondortK1 = Ondort::orderBy('created_at', 'DESC')->first();
        $ondortK2 = Ondort::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $onsekizK1 = Onsekizaltin::orderBy('created_at', 'DESC')->first();
        $onsekizK2 = Onsekizaltin::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $yirmikiK1 = Yirmiikibilezik::orderBy('created_at', 'DESC')->first();
        $yirmikiK2 = Yirmiikibilezik::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $gumusK1 = Gumus::orderBy('created_at', 'DESC')->first();
        $gumusK2 = Gumus::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();





        $tetherK1 = tether::orderBy('created_at', 'DESC')->first();
        $tetherK2 = tether::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $etherumK1 = etherum::orderBy('created_at', 'DESC')->first();
        $etherumK2 = etherum::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $etherumclassicK1 = etherumclassic::orderBy('created_at', 'DESC')->first();
        $etherumclassicK2 = etherumclassic::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $bitcoinK1 = bitcoin::orderBy('created_at', 'DESC')->first();
        $bitcoinK2 = bitcoin::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $litecoinK1 = litecoin::orderBy('created_at', 'DESC')->first();
        $litecoinK2 = litecoin::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $dogecoinK1 = dogecoin::orderBy('created_at', 'DESC')->first();
        $dogecoinK2 = dogecoin::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $dashK1 = dash::orderBy('created_at', 'DESC')->first();
        $dashK2 = dash::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

        $tronK1 = tron::orderBy('created_at', 'DESC')->first();
        $tronK2 = tron::orderBy('created_at', 'DESC')->skip(1)->take(1)->first();






        $dolarDegisimOrani = $this->degisimHesapla($dolarK1['satis'], $dolarK2['satis']);
        $euroDegisimOrani = $this->degisimHesapla($euroK1['satis'], $euroK2['satis']);
        $sterlinDegisimOrani = $this->degisimHesapla($sterlinK1['satis'], $sterlinK2['satis']);
        $isvicreFrankDegisimOrani = $this->degisimHesapla($isvicreFrankK1['satis'], $isvicreFrankK2['satis']);
        $kanadaDolarDegisimOrani = $this->degisimHesapla($kanadaDolarK1['satis'], $kanadaDolarK2['satis']);
        $kuveytDinarDegisimOrani = $this->degisimHesapla($kuveytDinarK1['satis'], $kuveytDinarK2['satis']);
        $norvecKronDegisimOrani = $this->degisimHesapla($norvecKronK1['satis'], $norvecKronK2['satis']);
        $suudiRiyalDegisimOrani = $this->degisimHesapla($suudiRiyalK1['satis'], $suudiRiyalK2['satis']);
        $japonYenDegisimOrani = $this->degisimHesapla($japonYenK1['satis'], $japonYenK2['satis']);
        $bulgarLevaDegisimOrani = $this->degisimHesapla($bulgarLevaK1['satis'], $bulgarLevaK2['satis']);
        $rusRubleDegisimOrani = $this->degisimHesapla($rusRubleK1['satis'], $rusRubleK2['satis']);
        $cinYuanDegisimOrani = $this->degisimHesapla($cinYuanK1['satis'], $cinYuanK2['satis']);
        $koreWonDegisimOrani = $this->degisimHesapla($koreWonK1['satis'], $koreWonK2['satis']);
        $azeriManatDegisimOrani = $this->degisimHesapla($azeriManatK1['satis'], $azeriManatK2['satis']);

        $onsDegisimOrani = $this->degisimHesapla($onsK1['satis'], $onsK2['satis']);
        $gramDegisimOrani = $this->degisimHesapla($gramK1['satis'], $gramK2['satis']);
        $ceyrekDegisimOrani = $this->degisimHesapla($ceyrekK1['satis'], $ceyrekK2['satis']);
        $yarimDegisimOrani = $this->degisimHesapla($yarimK1['satis'], $yarimK2['satis']);
        $tamDegisimOrani = $this->degisimHesapla($tamK1['satis'], $tamK2['satis']);
        $ataDegisimOrani = $this->degisimHesapla($ataK1['satis'], $ataK2['satis']);
        $cumhuriyetDegisimOrani = $this->degisimHesapla($cumhuriyetK1['satis'], $cumhuriyetK2['satis']);
        $ondortDegisimOrani = $this->degisimHesapla($ondortK1['satis'], $ondortK2['satis']);
        $onsekizDegisimOrani = $this->degisimHesapla($onsekizK1['satis'], $onsekizK2['satis']);
        $yirmikiDegisimOrani = $this->degisimHesapla($yirmikiK1['satis'], $yirmikiK2['satis']);
        $gumusDegisimOrani = $this->degisimHesapla($gumusK1['satis'], $gumusK2['satis']);



        $tetherDegisimOrani = $this->degisimHesapla($tetherK1['satis'], $tetherK2['satis']);
        $etherumDegisimOrani = $this->degisimHesapla($etherumK1['satis'], $etherumK2['satis']);
        $etherumclassicDegisimOrani = $this->degisimHesapla($etherumclassicK1['satis'], $etherumclassicK2['satis']);
        $bitcoinDegisimOrani = $this->degisimHesapla($bitcoinK1['satis'], $bitcoinK2['satis']);
        $litecoinDegisimOrani = $this->degisimHesapla($litecoinK1['satis'], $litecoinK2['satis']);
        $dogecoinDegisimOrani = $this->degisimHesapla($dogecoinK1['satis'], $dogecoinK2['satis']);
        $dashDegisimOrani = $this->degisimHesapla($dashK1['satis'], $dashK2['satis']);
        $tronDegisimOrani = $this->degisimHesapla($tronK1['satis'], $tronK2['satis']);


        $Api = 'https://evds2.tcmb.gov.tr/service/evds/series=TP.DK.USD.S-TP.DK.USD.A-TP.DK.EUR.S-TP.DK.EUR.A-TP.DK.CHF.S-TP.DK.CHF.A-TP.DK.GBP.S-TP.DK.GBP.A-TP.DK.JPY.S-TP.DK.JPY.A-TP.DK.KWD.S-TP.DK.KWD.A-TP.DK.NOK.S-TP.DK.NOK.A-TP.DK.RUB.S.YTL-TP.DK.RUB.A.YTL-TP.DK.CAD.S.YTL-TP.DK.CAD.A.YTL-TP.DK.SAR.S.YTL-TP.DK.SAR.A.YTL-TP.DK.BGN.S.YTL-TP.DK.BGN.A.YTL-TP.DK.CNY.S.YTL-TP.DK.CNY.A.YTL-TP.DK.AZN.S.YTL-TP.DK.AZN.A.YTL-TP.DK.KRW.S.YTL-TP.DK.KRW.A.YTL-&startDate=01-09-2022&endDate=' . $bugun . '&type=json&key=GrQ2NfJumB';

        $response2 = Http::get($Api);
        $json = $response2->json();
        $dizitarih = [];

        $diziDolarsatis = [];
        $diziEurosatis = [];
        $diziSterlinsatis = [];
        $diziIsvicreFranksatis = [];
        $diziKanadaDolarsatis = [];
        $diziKuveytDinarsatis = [];
        $diziNorvecKronsatis = [];
        $diziSuudiRiyalsatis = [];
        $diziJaponYensatis = [];
        $diziBulgarLevasatis = [];
        $diziRusRublesatis = [];
        $diziCinYuansatis = [];
        $diziKoreWonsatis = [];
        $diziAzeriManatsatis = [];
        for ($de = 0; $de < count($json['items']); $de++) {
            if ($json['items'][$de]['TP_DK_USD_S'] == null) {
                continue;
            } else {
                array_push($diziDolarsatis, number_format((float)$json['items'][$de]['TP_DK_USD_S'], 2, '.', ''));
                array_push($diziEurosatis, number_format((float)$json['items'][$de]['TP_DK_EUR_S'], 2, '.', ''));
                array_push($diziSterlinsatis, number_format((float)$json['items'][$de]['TP_DK_GBP_S'], 2, '.', ''));
                array_push($diziIsvicreFranksatis, number_format((float)$json['items'][$de]['TP_DK_CHF_S'], 2, '.', ''));
                array_push($diziKanadaDolarsatis, number_format((float)$json['items'][$de]['TP_DK_CAD_S_YTL'], 2, '.', ''));
                array_push($diziKuveytDinarsatis, number_format((float)$json['items'][$de]['TP_DK_KWD_S'], 2, '.', ''));
                array_push($diziNorvecKronsatis, number_format((float)$json['items'][$de]['TP_DK_NOK_S'], 2, '.', ''));
                array_push($diziSuudiRiyalsatis, number_format((float)$json['items'][$de]['TP_DK_SAR_S_YTL'], 2, '.', ''));
                array_push($diziJaponYensatis, number_format((float)$json['items'][$de]['TP_DK_JPY_S'], 2, '.', ''));
                array_push($diziBulgarLevasatis, number_format((float)$json['items'][$de]['TP_DK_BGN_S_YTL'], 2, '.', ''));
                array_push($diziRusRublesatis, number_format((float)$json['items'][$de]['TP_DK_RUB_S_YTL'], 2, '.', ''));
                array_push($diziCinYuansatis, number_format((float)$json['items'][$de]['TP_DK_CNY_S_YTL'], 2, '.', ''));
                array_push($diziKoreWonsatis, number_format((float)$json['items'][$de]['TP_DK_KRW_S_YTL'], 2, '.', ''));
                array_push($diziAzeriManatsatis, number_format((float)$json['items'][$de]['TP_DK_AZN_S_YTL'], 2, '.', ''));
            }
            if ($json['items'][$de]['Tarih'] == null) {
                continue;
            } else {
                array_push($dizitarih, $json['items'][$de]['Tarih']);
            }
        }
        $chartDolar = new dovizChart;
        $chartDolar->labels($dizitarih);
        $chartDolar->dataset('Dolar', 'line', $diziDolarsatis)->color('rgb(0, 153, 0)');

        $chartEuro = new dovizChart;
        $chartEuro->labels($dizitarih);
        $chartEuro->dataset('Euro', 'line', $diziEurosatis)->color('rgb(0, 153, 0)');

        $chartSterlin = new dovizChart;
        $chartSterlin->labels($dizitarih);
        $chartSterlin->dataset('Sterlin', 'line', $diziSterlinsatis)->color('rgb(0, 153, 0)');

        $chartIsvicreFrank = new dovizChart;
        $chartIsvicreFrank->labels($dizitarih);
        $chartIsvicreFrank->dataset('İsviçre Frankı', 'line', $diziIsvicreFranksatis)->color('rgb(0, 153, 0)');

        $chartKanadaDolar = new dovizChart;
        $chartKanadaDolar->labels($dizitarih);
        $chartKanadaDolar->dataset('Kanada Doları', 'line', $diziKanadaDolarsatis)->color('rgb(0, 153, 0)');

        $chartKuveytDinar = new dovizChart;
        $chartKuveytDinar->labels($dizitarih);
        $chartKuveytDinar->dataset('Kuveyt Dinarı', 'line', $diziKuveytDinarsatis)->color('rgb(0, 153, 0)');

        $chartNorvecKron = new dovizChart;
        $chartNorvecKron->labels($dizitarih);
        $chartNorvecKron->dataset('Norveç Kronu', 'line', $diziNorvecKronsatis)->color('rgb(0, 153, 0)');

        $chartSuudiRiyal = new dovizChart;
        $chartSuudiRiyal->labels($dizitarih);
        $chartSuudiRiyal->dataset('Suudi Riyali', 'line', $diziSuudiRiyalsatis)->color('rgb(0, 153, 0)');

        $chartYen = new dovizChart;
        $chartYen->labels($dizitarih);
        $chartYen->dataset('Japon Yeni', 'line', $diziJaponYensatis)->color('rgb(0, 153, 0)');

        $chartBulgarLeva = new dovizChart;
        $chartBulgarLeva->labels($dizitarih);
        $chartBulgarLeva->dataset('Bulgar Levası', 'line', $diziBulgarLevasatis)->color('rgb(0, 153, 0)');

        $chartRusRuble = new dovizChart;
        $chartRusRuble->labels($dizitarih);
        $chartRusRuble->dataset('Rus Rublesi', 'line', $diziRusRublesatis)->color('rgb(0, 153, 0)');

        $chartCinYuan = new dovizChart;
        $chartCinYuan->labels($dizitarih);
        $chartCinYuan->dataset('Çin Yuanı', 'line', $diziCinYuansatis)->color('rgb(0, 153, 0)');

        $chartKoreWon = new dovizChart;
        $chartKoreWon->labels($dizitarih);
        $chartKoreWon->dataset('Kore Wonu', 'line', $diziKoreWonsatis)->color('rgb(0, 153, 0)');

        $chartAzeriManat = new dovizChart;
        $chartAzeriManat->labels($dizitarih);
        $chartAzeriManat->dataset('Azerbaycan Manatı', 'line', $diziAzeriManatsatis)->color('rgb(0, 153, 0)');


        $chartgram = new dovizChart;
        $chartgram->labels($dizitarih);
        $chartgram->dataset('Azerbaycan Manatı', 'line', $diziAzeriManatsatis)->color('rgb(0, 153, 0)');




        $son1ayTarih= date('d-m-Y', strtotime($bugun. ' -1 months'));
        $ApiAy = 'https://evds2.tcmb.gov.tr/service/evds/series=TP.DK.USD.S-TP.DK.EUR.S-TP.DK.CHF.S-TP.DK.GBP.S-TP.DK.JPY.S-TP.DK.KWD.S-TP.DK.NOK.S-TP.DK.RUB.S.YTL-TP.DK.CAD.S.YTL-TP.DK.SAR.S.YTL-TP.DK.BGN.S.YTL-TP.DK.CNY.S.YTL-TP.DK.AZN.S.YTL-TP.DK.KRW.S.YTL-&startDate='. $son1ayTarih. '&endDate=' . $bugun . '&type=json&key=GrQ2NfJumB';

        $response1Ay = Http::get($ApiAy);
        $json1Ay = $response1Ay->json();
        $dizi1AyTarih = [];

        $dizi1AyDolarsatis=[];
        $dizi1AyEurosatis = [];
        $dizi1AySterlinsatis = [];
        $dizi1AyIsvicreFranksatis = [];
        $dizi1AyKanadaDolarsatis = [];
        $dizi1AyKuveytDinarsatis = [];
        $dizi1AyNorvecKronsatis = [];
        $dizi1AySuudiRiyalsatis = [];
        $dizi1AyJaponYensatis = [];
        $dizi1AyBulgarLevasatis = [];
        $dizi1AyRusRublesatis = [];
        $dizi1AyCinYuansatis = [];
        $dizi1AyKoreWonsatis = [];
        $dizi1AyAzeriManatsatis = [];



        for ($de2 = 0; $de2 < count($json1Ay['items']); $de2++) {
            if ($json1Ay['items'][$de2]['TP_DK_USD_S'] == null) {
                continue;
            } else {
                array_push($dizi1AyDolarsatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_USD_S'], 2, '.', ''));
                array_push($dizi1AyEurosatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_EUR_S'], 2, '.', ''));
                array_push($dizi1AySterlinsatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_GBP_S'], 2, '.', ''));
                array_push($dizi1AyIsvicreFranksatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_CHF_S'], 2, '.', ''));
                array_push($dizi1AyKanadaDolarsatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_CAD_S_YTL'], 2, '.', ''));
                array_push($dizi1AyKuveytDinarsatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_KWD_S'], 2, '.', ''));
                array_push($dizi1AyNorvecKronsatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_NOK_S'], 2, '.', ''));
                array_push($dizi1AySuudiRiyalsatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_SAR_S_YTL'], 2, '.', ''));
                array_push($dizi1AyJaponYensatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_JPY_S'], 2, '.', ''));
                array_push($dizi1AyBulgarLevasatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_BGN_S_YTL'], 2, '.', ''));
                array_push($dizi1AyRusRublesatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_RUB_S_YTL'], 2, '.', ''));
                array_push($dizi1AyCinYuansatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_CNY_S_YTL'], 2, '.', ''));
                array_push($dizi1AyKoreWonsatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_KRW_S_YTL'], 2, '.', ''));
                array_push($dizi1AyAzeriManatsatis, number_format((float)$json1Ay['items'][$de2]['TP_DK_AZN_S_YTL'], 2, '.', ''));
            }
            if ($json1Ay['items'][$de2]['Tarih'] == null) {
                continue;
            } else {
                array_push($dizi1AyTarih, $json1Ay['items'][$de2]['Tarih']);
            }
        }

        $chartDolar1Ay = new dovizChart;
        $chartDolar1Ay->labels($dizi1AyTarih);
        $chartDolar1Ay->dataset('Dolar', 'line', $dizi1AyDolarsatis)->color('rgb(0, 153, 0)');

        $chartEuro1Ay = new dovizChart;
        $chartEuro1Ay->labels($dizi1AyTarih);
        $chartEuro1Ay->dataset('Euro', 'line', $dizi1AyEurosatis)->color('rgb(0, 153, 0)');

        $chartSterlin1Ay = new dovizChart;
        $chartSterlin1Ay->labels($dizi1AyTarih);
        $chartSterlin1Ay->dataset('Sterlin', 'line', $dizi1AySterlinsatis)->color('rgb(0, 153, 0)');

        $chartIsvicreFrank1Ay = new dovizChart;
        $chartIsvicreFrank1Ay->labels($dizi1AyTarih);
        $chartIsvicreFrank1Ay->dataset('İsviçre Frankı', 'line', $dizi1AyIsvicreFranksatis)->color('rgb(0, 153, 0)');

        $chartKanadaDolar1Ay = new dovizChart;
        $chartKanadaDolar1Ay->labels($dizi1AyTarih);
        $chartKanadaDolar1Ay->dataset('Kanada Doları', 'line', $dizi1AyKanadaDolarsatis)->color('rgb(0, 153, 0)');

        $chartKuveytDinar1Ay = new dovizChart;
        $chartKuveytDinar1Ay->labels($dizi1AyTarih);
        $chartKuveytDinar1Ay->dataset('Kuveyt Dinarı', 'line', $dizi1AyKuveytDinarsatis)->color('rgb(0, 153, 0)');

        $chartNorvecKron1Ay = new dovizChart;
        $chartNorvecKron1Ay->labels($dizi1AyTarih);
        $chartNorvecKron1Ay->dataset('Norveç Kronu', 'line', $dizi1AyNorvecKronsatis)->color('rgb(0, 153, 0)');

        $chartSuudiRiyal1Ay = new dovizChart;
        $chartSuudiRiyal1Ay->labels($dizi1AyTarih);
        $chartSuudiRiyal1Ay->dataset('Suudi Riyali', 'line', $dizi1AySuudiRiyalsatis)->color('rgb(0, 153, 0)');

        $chartYen1Ay = new dovizChart;
        $chartYen1Ay->labels($dizi1AyTarih);
        $chartYen1Ay->dataset('Japon Yeni', 'line', $dizi1AyJaponYensatis)->color('rgb(0, 153, 0)');

        $chartBulgarLeva1Ay = new dovizChart;
        $chartBulgarLeva1Ay->labels($dizi1AyTarih);
        $chartBulgarLeva1Ay->dataset('Bulgar Levası', 'line', $dizi1AyBulgarLevasatis)->color('rgb(0, 153, 0)');

        $chartRusRuble1Ay = new dovizChart;
        $chartRusRuble1Ay->labels($dizi1AyTarih);
        $chartRusRuble1Ay->dataset('Rus Rublesi', 'line', $dizi1AyRusRublesatis)->color('rgb(0, 153, 0)');

        $chartCinYuan1Ay = new dovizChart;
        $chartCinYuan1Ay->labels($dizi1AyTarih);
        $chartCinYuan1Ay->dataset('Çin Yuanı', 'line', $dizi1AyCinYuansatis)->color('rgb(0, 153, 0)');

        $chartKoreWon1Ay = new dovizChart;
        $chartKoreWon1Ay->labels($dizi1AyTarih);
        $chartKoreWon1Ay->dataset('Kore Wonu', 'line', $dizi1AyKoreWonsatis)->color('rgb(0, 153, 0)');

        $chartAzeriManat1Ay = new dovizChart;
        $chartAzeriManat1Ay->labels($dizi1AyTarih);
        $chartAzeriManat1Ay->dataset('Azerbaycan Manatı', 'line', $dizi1AyAzeriManatsatis)->color('rgb(0, 153, 0)');


        return view("/anasayfa", [


            "gramchart" =>$gramchart,
            "yarimchart" =>$yarimchart,
            "tamchart" =>$tamchart,
            "onschart" =>$onschart,
            "cumhuriyetchart" =>$cumhuriyetchart,
            "ondortchart" =>$ondortchart,
            "onsekizchart" =>$onsekizchart,
            "yirmiikichart" =>$yirmiikichart,
            "atachart" =>$atachart,
            "ceyrekchart" =>$ceyrekchart,
            "gumuschart" =>$gumuschart,


            "chartDolar1Ay"=>$chartDolar1Ay,
            "chartEuro1Ay" => $chartEuro1Ay,
            "chartSterlin1Ay" => $chartSterlin1Ay,
            "chartIsvicreFrank1Ay" => $chartIsvicreFrank1Ay,
            "chartKanadaDolar1Ay" => $chartKanadaDolar1Ay,
            "chartKuveytDinar1Ay" => $chartKuveytDinar1Ay,
            "chartNorvecKron1Ay" => $chartNorvecKron1Ay,
            "chartSuudiRiyal1Ay" => $chartSuudiRiyal1Ay,
            "chartYen1Ay" => $chartYen1Ay,
            "chartBulgarLeva1Ay" => $chartBulgarLeva1Ay,
            "chartRusRuble1Ay" => $chartRusRuble1Ay,
            "chartCinYuan1Ay" => $chartCinYuan1Ay,
            "chartKoreWon1Ay" => $chartKoreWon1Ay,
            "chartAzeriManat1Ay" => $chartAzeriManat1Ay,



            "chartDolar" => $chartDolar,
            "dolarK1" => $dolarK1,
            "dolarDegisim" => $dolarDegisimOrani,
            "chartEuro" => $chartEuro,
            "euroK1" => $euroK1,
            "euroDegisim" => $euroDegisimOrani,
            "chartSterlin" => $chartSterlin,
            "sterlinK1" => $sterlinK1,
            "sterlinDegisim" => $sterlinDegisimOrani,
            "chartIsvicreFrank" => $chartIsvicreFrank,
            "isvicreFrankK1" => $isvicreFrankK1,
            "isvicreFrankDegisim" => $isvicreFrankDegisimOrani,
            "chartKanadaDolar" => $chartKanadaDolar,
            "kanadaDolarK1" => $kanadaDolarK1,
            "kanadaDolarDegisim" => $kanadaDolarDegisimOrani,
            "chartKuveytDinar" => $chartKuveytDinar,
            "kuveytDinarK1" => $kuveytDinarK1,
            "kuveytDinarDegisim" => $kuveytDinarDegisimOrani,
            "chartNorvecKron" => $chartNorvecKron,
            "norvecKronK1" => $norvecKronK1,
            "norvecKronDegisim" => $norvecKronDegisimOrani,
            "chartSuudiRiyal" => $chartSuudiRiyal,
            "suudiRiyalK1" => $suudiRiyalK1,
            "suudiRiyalDegisim" => $suudiRiyalDegisimOrani,
            "chartYen" => $chartYen,
            "japonYenK1" => $japonYenK1,
            "japonYenDegisim" => $japonYenDegisimOrani,
            "chartBulgarLeva" => $chartBulgarLeva,
            "bulgarLevaK1" => $bulgarLevaK1,
            "bulgarLevaDegisim" => $bulgarLevaDegisimOrani,
            "chartRusRuble" => $chartRusRuble,
            "rusRubleK1" => $rusRubleK1,
            "rusRubleDegisim" => $rusRubleDegisimOrani,
            "chartCinYuan" => $chartCinYuan,
            "cinYuanK1" => $cinYuanK1,
            "cinYuanDegisim" => $cinYuanDegisimOrani,
            "chartKoreWon" => $chartKoreWon,
            "koreWonK1" => $koreWonK1,
            "koreWonDegisim" => $koreWonDegisimOrani,
            "chartAzeriManat" => $chartAzeriManat,
            "azeriManatK1" => $azeriManatK1,
            "azeriManatDegisim" => $azeriManatDegisimOrani,



            "onsDegisim" => $onsDegisimOrani,
            "onsK1" => $onsK1,

            "gramDegisim" => $gramDegisimOrani,
            "gramK1" => $gramK1,

            "ceyrekDegisim" => $ceyrekDegisimOrani,
            "ceyrekK1" => $ceyrekK1,

            "yarimDegisim" => $yarimDegisimOrani,
            "yarimK1" => $yarimK1,

            "tamDegisim" => $tamDegisimOrani,
            "tamK1" => $tamK1,

            "ataDegisim" => $ataDegisimOrani,
            "ataK1" => $ataK1,

            "cumhuriyetDegisim" => $cumhuriyetDegisimOrani,
            "cumhuriyetK1" => $cumhuriyetK1,

            "ondortDegisim" => $ondortDegisimOrani,
            "ondortK1" => $ondortK1,

            "onsekizDegisim" => $onsekizDegisimOrani,
            "onsekizK1" => $onsekizK1,

            "yirmikiDegisim" => $yirmikiDegisimOrani,
            "yirmikiK1" => $yirmikiK1,

            "gumusDegisim" => $gumusDegisimOrani,
            "gumusK1" => $gumusK1,




            "etherumDegisim" => $etherumDegisimOrani,
            "etherumK1" => $etherumK1,

            "tetherDegisim" => $tetherDegisimOrani,
            "tetherK1" => $tetherK1,

            "dogeCoinDegisim" => $dogecoinDegisimOrani,
            "dogeCoinK1" => $dogecoinK1,

            "liteCoinDegisim" => $litecoinDegisimOrani,
            "liteCoinK1" => $litecoinK1,

            "etherumClassicDegisim" => $etherumclassicDegisimOrani,
            "etherumClassicK1" => $etherumclassicK1,

            "dashDegisim" => $dashDegisimOrani,
            "dashK1" => $dashK1,

            "tronDegisim" => $tronDegisimOrani,
            "tronK1" => $tronK1,

            "bitcoinDegisim" => $bitcoinDegisimOrani,
            "bitcoinK1" => $bitcoinK1,

        ]);
    }


}
