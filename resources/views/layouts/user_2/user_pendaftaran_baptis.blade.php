@include('layouts.user_2.style')
@include('layouts.user_2.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Baptis</title>
    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    
</head>
<body>
    <header class="hero">
       <H1><span>Palmarum</span></H1>
        <p>Jemaat Pindah HKBP Palmarum</p>
        
        <div class="mouse">
            <ion-icon name="arrow-down-circle-outline"></ion-icon>
        </div>
    </header>
    <main>
    
      

        <div class="card">
            <div class="image-container">
              <img class="foto_sidi" src="{{ asset('image/baptis.jpg') }}" alt="gambar">
            </div>
            <div class="text-container">
              <h3>Jemaat Pindah HKBP Palmarum</h3>
              <p>ext commonly used to demonstrate the visual form of a 
                    document or a typeface without relying on meaningful content. 
                    Lorem ipsum may be used as a placeholder before final copy is 
                    available. It is also used to temporarily replace text in a
                     process called greeking, which allows designers to consider</p>
            </div>

          </div>
          
          <div class="card_1">
            <h1 style="align-items: center; text-align: center; padding-right: 200px;"> <span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-right: 10px; margin-bottom: 9px;">
                </span>Jemaat Pindah HKBP Palmarum<strong><span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-left: 10px; margin-bottom: 9px;"></span></strong>
            </h1>
            <form>
              <div class="form-group">
                <label for="name">Nama lengkap anak</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap yang akan di baptis" />
              </div>    
              <div class="form-group">
                <label for="name">Tanggal lahir</label>
                <input type="text" id="name" name="name" placeholder="Masukkan tanggal lahir yang akan di baptis" />
              </div>
              <div class="form-group">
                <label for="name">Nama Ayah</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama ibu" />
              </div>
              <div class="form-group">
                <label for="name">Nama Ibu</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama ibu" />
              </div>
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