@include('layouts.user_2.style')
@include('layouts.user_2.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pernikahan</title>
    <link rel="stylesheet" href="../styles/styles.css">
    
    <link rel="stylesheet" href="{{asset('Style')}}/style2.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    <header class="hero">
       <H1><span>Palmarum</span></H1>
        <p>Pernikahan</p>
        
        <div class="mouse">
            <ion-icon name="arrow-down-circle-outline"></ion-icon>
        </div>
    </header>
    <main>
    
    <h1>Pendaftaran Nikah HKBP Palmarum</h1>

        <div class="card">
            <div class="image-container">
              <img class="foto_sidi" src="{{ asset('Style') }}/image/pernikahan.png" alt="gambar">
            </div>
            <div class="text-container">
              <h3>Judul</h3>
              <p>ext commonly used to demonstrate the visual form of a 
                    document or a typeface without relying on meaningful content. 
                    Lorem ipsum may be used as a placeholder before final copy is 
                    available. It is also used to temporarily replace text in a
                     process called greeking, which allows designers to consider</p>
            </div>
          </div>
          
          <div class="card_1">
            <h1 style="align-items: center; text-align: center; padding-right: 200px;"> <span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-right: 10px; margin-bottom: 9px;">
                </span>Pendaftaran Pernikahan HKBP Palmarum<strong><span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-left: 10px; margin-bottom: 9px;"></span></strong>
            </h1>
            <form method="post" action="{{route('registrasiNikah')}}">
              @csrf
              @method('POST')
              <div class="form-group">
                <label for="name">Nama Mempelai Laki</label>
                <!-- <input type="text" id="name" name="id_jemaat_laki" placeholder="Masukkan Nama Lengkap Anda" /> -->
                <select name="id_jemaat_laki">
                  <option value="">Pilih Nama Anda Sebagai Mempelai Laki-Laki</option>
                  @foreach($jemaats as $data)
                    <option value="{{$data['id_jemaat']}}">{{$data['nama_depan']}}&nbsp{{$data['nama_belakang']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="name">Tanggal Martumpol</label>
                <input type="date" id="name" name="tgl_martumpol" placeholder="Masukkan Nama Lengkap Anda" />
              </div>    
              <div class="form-group">
                <label for="name">Nama Gereja Martumpol</label>
                <input type="text" id="name" name="nama_gereja_martumpol" placeholder="Masukkan Alamat Anda" />
              </div>
              <div class="form-group">
                <label for="name">Tanggal Pemberkatan</label>
                <input type="date" id="name" name="tgl_pemberkatan" placeholder="Masukkan Alamat Anda" />
              </div>
              <div class="form-group">
                <label for="name">Nama Gereja Pemberkatan</label>
                <input type="text" id="name" name="nama_gereja_pemberkatan" placeholder="Masukkan Alamat Anda" />
              </div>
              <div class="form-group">
                <label for="name">Nama Gereja Mempelai Laki-Laki</label>
                <input type="text" id="name" name="nama_gereja_laki" placeholder="Masukkan Alamat Anda" />
              </div>
              <div class="form-group">
                <label for="name">Nama Ayah Mempelai Laki-Laki</label>
                <input type="text" id="name" name="nama_ayah_laki" placeholder="Masukkan Alamat Anda" />
              </div>
              <div class="form-group">
                <label for="name">Nama Ibu Mempelai Laki-Laki</label>
                <input type="text" id="name" name="nama_ibu_laki" placeholder="Masukkan Alamat Anda" />
              </div>
              <div class="form-group">
                <label for="name">Nama Gereja Mempelai Perempuan</label>
                <input type="text" id="name" name="nama_gereja_perempuan" placeholder="Masukkan Alamat Anda" />
              </div>
              <div class="form-group">
                <label for="name">Nama Ayah Mempelai Perempuan</label>
                <input type="text" id="name" name="nama_ayah_perempuan" placeholder="Masukkan Alamat Anda" />
              </div>
              <div class="form-group">
                <label for="name">Nama Ibu Mempelai Perempuan</label>
                <input type="text" id="name" name="nama_ibu_perempuan" placeholder="Masukkan Alamat Anda" />
              </div>
              <div class="form-group">
                <label for="name">Keterangan</label>
                <input type="text" id="name" name="keterangan" placeholder="Tanggaal Rencana Pernikahan" />
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