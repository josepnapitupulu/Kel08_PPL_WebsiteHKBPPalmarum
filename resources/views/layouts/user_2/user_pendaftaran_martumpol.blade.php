@include('layouts.user_2.style')
@include('layouts.user_2.navbar')
@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Jemaat Martumpol</title>

    <link rel="stylesheet" href="{{asset('Style')}}/style2.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    <header class="hero">
       <H1><span>Palmarum</span></H1>
        <p>Pendaftaran Jemaat Martumpol HKBP Palmarum</p>
        
        <div class="mouse">
            <ion-icon name="arrow-down-circle-outline"></ion-icon>
        </div>
    </header>
    <main>
    
    <h1>Pendaftaran Martumpol HKBP Palmarum</h1>

        <div class="card">
            <div class="image-container">
              <img class="foto_sidi" src="{{ asset('Style') }}/image/martumpol.png" alt="gambar">
            </div>
            <div class="text-container">
              <h3>Pendaftaran Jemaat Martumpol HKBP Palmarum</h3>
              <p>ext commonly used to demonstrate the visual form of a 
                    document or a typeface without relying on meaningful content. 
                    Lorem ipsum may be used as a placeholder before final copy is 
                    available. It is also used to temporarily replace text in a
                     process called greeking, which allows designers to consider</p>
            </div>
          </div>
          
          <div class="card_1">
            <h1 style="align-items: center; text-align: center; padding-right: 200px;"> <span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-right: 10px; margin-bottom: 9px;">
                </span>Pendaftaran Martumpol HKBP Palmarum<strong><span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-left: 10px; margin-bottom: 9px;"></span></strong>
            </h1>
            <form method="post" action="{{route('registrasiMartumpol')}}">
              @csrf
              @method('POST')
              <div class="form-group">
                <label for="name">Nama Lengkap Mempelai Laki-Laki</label>
                <!-- <input type="text" id="name" name="id_jemaat_laki" placeholder="Masukkan nama keluarga anda" /> -->
                <select name="id_jemaat_laki">
                  <option value="">Pilih Nama Anda Sebagai Mempelai Laki-Laki</option>
                  @foreach($jemaats as $data)
                    <option value="{{$data['id_jemaat']}}">{{$data['nama_depan']}}&nbsp{{$data['nama_belakang']}}</option>
                  @endforeach
                </select>
              </div>    
              <div class="form-group">
                <label for="name">Nama Ayah Mempelai Laki-Laki</label>
                <input type="text" id="name" name="nama_ayah_laki" placeholder="Masukkan Nama Ayah Mempelai Laki-Laki" />
              </div>
              <div class="form-group">
                <label for="name">Nama Ibu Mempelai Laki-Laki</label>
                <input type="text" id="name" name="nama_ibu_laki" placeholder="Masukkan Nama Ibu Mempelai Laki-Laki anda" />
              </div>
              <div class="form-group">
                <label for="name">Gereja Mempelai Laki-Laki</label>
                <input type="text" id="name" name="nama_gereja_laki" placeholder="Masukkan Nama Ibu Mempelai Laki-Laki anda" />
              </div>
              <div class="form-group">
                <label for="name">Nama Lengkap Mempelai Perempuan</label>
                <!-- <input type="text" id="name" name="id_jemaat_perempuan" placeholder="Masukkan Nama Lengkap Mempelai Perempuan anda" /> -->
                <select name="id_jemaat_perempuan">
                  <option value="">Pilih Nama Anda Sebagai Mempelai Perempuan</option>
                  @foreach($jemaats as $data)
                    <option value="{{$data['id_jemaat']}}">{{$data['nama_depan']}}&nbsp{{$data['nama_belakang']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="name">Nama Ayah Mempelai Perempuan</label>
                <input type="text" id="name" name="nama_ayah_perempuan" placeholder="(cth: Jefri Manalu/Pria/1 mei 1999 dengan Sinta Siagian/Wanita/2 juni 1999)" />
              </div>
              <div class="form-group">
                <label for="name">Nama Ibu Mempelai Perempuan</label>
                <input type="text" id="name" name="nama_ibu_perempuan" placeholder="Masukkan Nama Ibu Mempelai Perempuan" />
              </div>
              <div class="form-group">
                <label for="name">Gereja Mempelai Perempuan</label>
                <input type="text" id="name" name="nama_gereja_perempuan" placeholder="Masukkan Nama Gereja Martumpol" />
              </div>
              <div class="form-group">
                <label for="name">Keterangan</label>
                <input type="text" id="name" name="keterangan" placeholder="Masukkan Nama Gereja Martumpol" />
              </div>
              <div style="text-align: right; margin-top: 40px;">
                 <input type="submit" value="daftar"/>
              </div>
            </form>
          </div>
    </main>
    <footer>
       <div class="footer_1">
        <img src="{{ asset('Style') }}/image/logo_putih.png" alt="Foto">
            <div class="teks">
            <h1>
                PALMARUM
            </h1>
            <P>Stadion Tarutung,        <br>
                Hutatoruan VI,          <br>
                Kec. Tarutung,          <br>
                Kabupaten Tapanuli      <br>
                Utara, Sumatera Utara   <br>
                22411</P> 
            </div>
            
       </div>
	
	</footer>
  <script src="{{asset('Style')}}/style.js"></script>
   
</body>
</html>