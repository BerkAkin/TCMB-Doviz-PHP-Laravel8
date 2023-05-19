<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Döviz Admin</title>
                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
                <!-- Styles -->

                <link rel="stylesheet" href="{{asset('css/app.css')}}">
                <link rel="stylesheet" href="{{asset('css/financeadmin.css')}}">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
                <script src="{{asset('js/app.js')}}"></script>


            </head>
<body style="overflow: hidden">

  <div style="height: 100vh;">

    <form method="POST" action="/aboneGuncelle">
      @csrf
      <h1 class="display-3 text-center text-warning" style="padding-top: 100px">Kullanıcıyı Güncelle: <span class="text-dark">{{$abone['mail']}}</span></h1>
      <div class="mb-3 d-flex justify-content-center" style="margin-top: 100px" >
        <input style="width: 400px; height:80px; font-size:20px" name="name" type="text" maxlength="25" class=" inputfield" placeholder="İsim" value="{{$abone['name']}}">
      </div>
      <div  class="mb-3 d-flex justify-content-center">
        <input style="width: 400px; height:80px; font-size:20px" name="surname" type="text" maxlength="25" class="inputfield" placeholder="Soyad" value="{{$abone['surname']}}">
      </div>
      <div  class="mb-3  d-flex justify-content-center">
        <input style="width: 400px; height:80px; font-size:20px" name="mail" type="text" maxlength="255" class="inputfield" placeholder="Mail Adresi" value="{{$abone['mail']}}">
      </div>
      <div  class="mb-3  d-flex justify-content-center">
        <input style="width: 400px; height:80px; font-size:20px" name="phoneNo" type="text" maxlength="11" class="inputfield" placeholder="Telefon Numarası" value="{{$abone['phoneNo']}}">
      </div>
      <div  class="mb-3  d-flex justify-content-center">
          <input name="id" type="hidden" class="inputfield"  value="{{$abone['id']}}">
        </div>
      <div class="mb-3  d-flex justify-content-center">
        <button type="submit" class="btn btn-success" style="width:400px; height:50px; font-size:20px">Güncelle</button>
      </div>
      <div class="mb-3  d-flex justify-content-center">
        <a href={{url('/admin')}} type="button" class="btn btn-danger pt-2" style="width: 400px; height:50px;  font-size:20px">İptal</a>
      </div>

    </form>

  </div>




</body>
</html>
