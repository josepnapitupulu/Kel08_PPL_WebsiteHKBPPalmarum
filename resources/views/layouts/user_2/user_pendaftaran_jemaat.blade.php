@include('layouts.user_2.style')
@include('layouts.user_2.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Jemaat HKBP Palmarum</title>
    <link rel="stylesheet" href="../styles/styles.css">
    
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
              <img class="foto_sidi" src="{{ asset('image/jemaat.jpg') }}" alt="gambar">
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
            <form>
              <div class="form-group">
                <label for="name">Nama lengkap</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap anda" />
              </div>    
              <div class="form-group">
                <label for="name">Tanggal lahirt</label>
                <input type="text" id="name" name="name" placeholder="Masukkan tanggal lahir anda" />
              </div>
              <div class="form-group">
                <label for="name">Jenis kelamin</label>
                <input type="text" id="name" name="name" placeholder="" />
              </div>
              <div class="form-group">
                <label for="name">Gelar</label>
                <input type="text" id="name" name="name" placeholder="Masukkan gelar anda" />
              </div>
              <div class="form-group">
                <label for="name">Alamat</label>
                <input type="text" id="name" name="name" placeholder="Masukkan alamat anda" />
              </div>
              <div class="form-group">
                <label for="name">Golongan darah anda</label>
                <input type="text" id="name" name="name" placeholder="Masukkan gelar anda" />
              </div>
              <div class="form-group">
                <label for="name">Nomor handphone</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nomor handphone anda yang masih aktif" />
              </div>
              <div class="form-group">
                <label for="name">Tanggal baptis</label>
                <input type="text" id="name" name="name" placeholder="Masukkan tanggal baptis" />
              </div>
              <div class="form-group">
                <label for="name">Tanggal Sidi</label>
                <input type="text" id="name" name="name" placeholder="Masukkan tanggal sidi anda" />
              </div>
              <div class="form-group">
                <label for="name">Keterangan</label>
                <input type="text" id="name" name="name" placeholder="Masukkan Gelar Anda" />
              </div>
              <!-- upload foto -->
              <div class="form-group foto_1">
                <label for="foto">Foto Jemaat</label>
                <input type="file" id="foto" name="foto">
                <span>Drag and drop file here or click to upload <br> Ukuran foto harus .png</span>
              </div>
              <!-- upload foto -->  
              <div style="text-align: right; margin-top: 40px;">
                 <input type="submit" value="Submit"/>
              </div>
             
            </form>
          </div>
          
          
 
    </main>
    <footer>
       <div class="footer_1">
        <img src="{{ asset('image/logo_putih.png') }}" alt="Foto">
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
  <script src="{{ asset('js/style.js') }}"></script>
   
</body>
</html>