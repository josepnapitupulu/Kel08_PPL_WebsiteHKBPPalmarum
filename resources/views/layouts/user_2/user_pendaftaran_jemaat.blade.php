@include('layouts.user_2.style')
@include('layouts.user_2.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Jemaat HKBP Palmarum</title>
    
    <link rel="stylesheet" href="{{asset('Style')}}/style2.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    
</head>
<body>
    <header class="hero">
       <H1><span>Palmarum</span></H1>
        <p>Pendaftaran Jemaat</p>
        
        <div class="mouse">
            <ion-icon name="arrow-down-circle-outline"></ion-icon>
        </div>
    </header>
    <main>
    
      

        <div class="card">
            <div class="image-container">
              <img class="foto_sidi" src="{{asset('Style')}}/image/jemaat.jpg" alt="gambar">
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
                </span>Pendaftaran Jemaat HKBP Palmarum<strong><span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-left: 10px; margin-bottom: 9px;"></span></strong>
            </h1>
            <form method="post" action="{{route('registrasiJemaat')}}">
              @csrf
              @method('POST')
              <div class="form-group">
                <label for="name">Nama Depan</label>
                <input type="text" id="name" name="nama_depan" placeholder="Masukkan nama lengkap anda" />
              </div>    
              <div class="form-group">
                <label for="name">Nama Belakang</label>
                <input type="text" id="name" name="nama_belakang" placeholder="Masukkan tanggal lahir anda" />
              </div>
              <div class="form-group">
                <label for="name">Gelar Depan</label>
                <input type="text" id="name" name="gelar_depan" placeholder="" />
              </div>
              <div class="form-group">
                <label for="name">Gelar Belakang</label>
                <input type="text" id="name" name="gelar_belakang" placeholder="Masukkan gelar anda" />
              </div>
              <div class="form-group">
                <label for="name">Tempat Lahir</label>
                <input type="text" id="name" name="tempat_lahir" placeholder="Masukkan alamat anda" />
              </div>
              <div class="form-group">
                <label for="name">Tanggal Lahir</label>
                <input type="date" id="name" name="tanggal_lahir" placeholder="Masukkan gelar anda" />
              </div>
              <div class="form-group">
                <label for="name">Golongan Darah</label>
                <input type="text" id="name" name="gol_darah" placeholder="Masukkan Golongan Darah anda yang masih aktif" />
              </div>
              <div class="form-group">
                <label for="name">Jenis Kelamin</label>
                <input type="text" id="name" name="jenis_kelamin" placeholder="Masukkan tanggal baptis" />
              </div>
              <div class="form-group">
                <label for="name">No Telepon</label>
                <input type="text" id="name" name="no_telepon" placeholder="Masukkan tanggal sidi anda" />
              </div>
              <div class="form-group">
                <label for="name">Alamat</label>
                <input type="text" id="name" name="alamat" placeholder="Masukkan Gelar Anda" />
              </div>
              <div class="form-group">
                <label for="name">Status Keluarga</label>
                <input type="text" id="name" name="id_hub_keluarga" placeholder="Masukkan Gelar Anda" />
              </div>
              <div class="form-group">
                <label for="name">Status</label>
                <input type="text" id="name" name="id_status_pernikahan" placeholder="Masukkan Gelar Anda" />
              </div>
              <div class="form-group">
                <label for="name">Pendidikan Terakhir</label>
                <input type="text" id="name" name="id_pendidikan" placeholder="Masukkan Gelar Anda" />
              </div>
              <div class="form-group">
                <label for="name">Bidang Pendidikan</label>
                <input type="text" id="name" name="id_bidang_pendidikan" placeholder="Masukkan Gelar Anda" />
              </div>
              <div class="form-group">
                <label for="name">Bidang Pendidikan Lainnya</label>
                <input type="text" id="name" name="id_bidang_pendidikan_lain" placeholder="Masukkan Gelar Anda" />
              </div>
              <div class="form-group">
                <label for="name">Pekerjaan</label>
                <input type="text" id="name" name="id_pekerjaan" placeholder="Masukkan Gelar Anda" />
              </div>
              <div class="form-group">
                <label for="name">Pekerjaan Lainnya</label>
                <input type="text" id="name" name="nama_pekerjaan_lain" placeholder="Masukkan Gelar Anda" />
              </div>
              <div class="form-group">
                <label for="name">Keterangan</label>
                <input type="text" id="name" name="keterangan" placeholder="Masukkan Gelar Anda" />
              </div>
              <!-- upload foto -->  
              <div style="text-align: right; margin-top: 40px;">
                 <button type="submit">Daftar</button>
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