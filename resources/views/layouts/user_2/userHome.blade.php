@include('layouts.user_2.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="{{asset('Style')}}/style2.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="hero">
       <H1><span>Palmarum</span></H1>
        <p>Beranda</p>
        
        <div class="mouse">
            <button><ion-icon name="arrow-down-circle-outline" id="scrollButton"></ion-icon></button>
        </div>
    </header>
    <div class="foto-container" id="targetElement">
      @foreach($pelayans as $data)
        <div class="foto-item">
            <img src="{{ asset('Style')}}/image/sintua.jpg" alt="Foto">
            <h1 class="foto-text">{{$data['nama_lengkap']}}</h1>
            <h3 class="foto-text">Jabatan : {{$data['jabatan']}}</h3>
            <h4 class="foto-text">Tanggal Tahbisan : {{$data['tanggal_tahbisan']}}</h4>
            <p class="foto-text">{{$data['keterangan']}}</p>          
        </div>
        @endforeach 

        <!-- Tambahkan lebih banyak foto di sini jika diperlukan -->
      </div>
    <div class="judul_1">
        <h1>Mengenai HKBP Palmarum</h1>
    </div>  
      <div class="card">
        <div class="image-container">
          <img src="{{ asset('Style') }}/image/gereja.jpg" alt="Foto" class="round-image" style="  width: 500px;
          height: 500px;
          border-radius: 50%;
          overflow: hidden;
          margin: 20px;">
        </div>
        <div class="text-container">
          <h3>HKBP Palmarum</h3><br>
          <p>HKBP Palmarum merupakan tempat ibadah yang berlokasi di Stadion Tarutung, Hutatoruan VI, Kec. Tarutung, 
            Kabupaten Tapanuli Utara, Sumatera Utara 22411. Dimana HKBP Palmarum ini merupakan sebuah resort 
            yang sudah cukup besar, yang mana pendeta dari gereja ini adalah Martin Gultom. Awal mula didirikannya 
            Gereja ini didirikan karena adanya pergumulan dari antar jemaat.  </p>
        </div>
      </div>
      <div class="judul_1">
        <h1>Jadwal Ibadah</h1>
        <div class="">
          <h3>Acara Minggu</h3>
          @foreach($jadwals as $data)
          <table table class="aesthetic-table" border="1">
            @foreach($jadwals as $data)
            <tr>
              <td>BERNYANYI</td>
              <td>{{$data['nyanyian_1']}}</td>
            </tr>
            <tr>
              <td>VOTUM  – INTROITUS – DOA PEMBUKA</td>
              <td>{{$data['votum']}}</td>
            </tr>
            <tr>
              <td>BERNYANYI</td>
              <td>{{$data['nyanyian_2']}}</td>
            </tr>
            <tr>
              <td>HUKUM TAURAT</td>
              <td>{{$data['hukum_taurat']}}</td>
            </tr>
            <tr>
              <td>BERNYANYI</td>
              <td>{{$data['nyanyian_3']}}</td>
            </tr>
            <tr>
              <td>PENGAKUAN  DOSA</td>
              <td>{{$data['pengakuan_dosa']}}</td>
            </tr>
            <tr>
              <td>BERNYANYI</td>
              <td>{{$data['nyanyian_4']}}</td>
            </tr>
            <tr>
              <td>EPISTEL</td>
              <td>{{$data['epistel']}}</td>
            </tr>
            <tr>
              <td>BERNYANYI</td>
              <td>{{$data['nyanyian_5']}}</td>
            </tr>
            <tr>
              <td>PENGAKUAN IMAN</td>
              <td>{{$data['pengakuan_iman']}}</td>
            </tr>
            <tr>
              <td>WARTA JEMAAT + DOA SYAFAAT</td>
              <td></td>
            </tr>
            <tr>
              <td>BERNYANYI</td>
              <td>{{$data['nyanyian_6']}}</td>
            </tr>
            <tr>
              <td>KHOTBAH</td>
              <td>{{$data['khotbah']}}</td>
            </tr>
            <tr>
              <td>BERNYANYI</td>
              <td>{{$data['nyanyian_7']}}</td>
            </tr>
            <tr>
              <td>DOA PENUTUP – BERKAT</td>
              <td>{{$data['doa_penutup']}}</td>
            </tr>
            @endforeach
          </table>
          @endforeach
        </div>
      </div>
      <div class="judul_1">
        <h1>Kegiatan-Kegiatan Gereja</h1>
        <div class="jadwal">
          <div class="schedule-slider">
            @foreach($kegiatans as $data)
            <div class="schedule-item">
              <h2><center>{{$data['nama_jenis_kegiatan']}}</center></h2>
              <p>tanggal : {{$data['tanggal_kegiatan']}}</p>
              <p>waktu : {{$data['waktu_kegiatan']}}</p>
              <p>Lokasi : {{$data['lokasi_kegiatan']}}</p>
              <p>deskripsi : {{$data['keterangan']}}</p>
            </div>
            @endforeach
            <div class="schedule-item">
            <h2>Minggu Sore</h2>
            <p>16.00 - Ibadah Raya</p>
            </div>
            <div class="schedule-item">
            <h2>Senin</h2>
            <p>19.00 - Doa Bersama</p>
            </div>
            <div class="schedule-item">
            <h2>Kamis</h2>
            <p>19.00 - Komsel</p>
            </div>
                <div class="schedule-item">
            <h2>Kamis</h2>
            <p>19.00 - Komsel</p>
            </div>
                <div class="schedule-item">
            <h2>Kamis</h2>
            <p>19.00 - Komsel</p>
            </div>
                <div class="schedule-item">
            <h2>Kamis</h2>
            <p>19.00 - Komsel</p>
            </div> 
        </div>
      </div>
      </div>@include('layouts.user_2.footer')
</body>
<script src="{{asset('Style')}}/style.js"></script>
<script>
    var scrollButton = document.getElementById('scrollButton');

    scrollButton.addEventListener('click', function() {
      var targetElement = document.getElementById('targetElement');

      if (targetElement) {
        var targetPosition = targetElement.offsetTop;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });
      }
    });
  </script>
</html>