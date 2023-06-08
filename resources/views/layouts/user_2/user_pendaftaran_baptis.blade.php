@include('layouts.user_2.style')
@include('layouts.user_2.navbar')
@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Baptis</title>
    
    <link rel="stylesheet" href="{{asset('Style')}}/style2.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    <header class="hero">
       <H1><span>Palmarum</span></H1>
        <p>Jemaat Pindah HKBP Palmarum</p>
        
        <div class="mouse">
          <button><ion-icon name="arrow-down-circle-outline" id="scrollButton"></ion-icon></button>
        </div>
    </header>
    <main>
    
      <h1>Pendaftaran Baptis HKBP Palmarum</h1>

        <div class="card">
            <div class="image-container">
              <img class="foto_sidi" src="{{ asset('Style')}}/image/baptis.jpg" alt="gambar">
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
          
          <div class="card_1" id="targetElement">
            <h1 style="align-items: center; text-align: center; padding-right: 200px;"> <span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-right: 10px; margin-bottom: 9px;">
                </span>Baptis HKBP Palmarum<strong><span style="display:inline-block; border-bottom: 1px solid black; width: 100px; margin-left: 10px; margin-bottom: 9px;"></span></strong>
            </h1>
            <form method="post" action="{{route('registrasiBaptis')}}">
              @csrf
              @method('post')
              <div class="form-group">
                <label for="name">Nama lengkap</label>
                <input type="text" id="name" name="nama_lengkap" placeholder="Masukkan nama lengkap yang akan di baptis" required/>
              </div>    
              <div class="form-group">
                <label for="name">Nama Ayah</label>
                <input type="text" id="name" name="nama_ayah" placeholder="Masukkan nama ayah" required/>
              </div>
              <div class="form-group">
                <label for="name">Nama Ibu</label>
                <input type="text" id="name" name="nama_ibu" placeholder="Masukkan nama ibu" required/>
              </div>
              <div class="form-group">
                <label for="name">Tempat Lahir</label>
                <input type="text" id="name" name="tempat_lahir" placeholder="Masukkan tempat lahir" required/>
              </div>
              <div class="form-group">
                <label for="name">Tanggal Lahir</label>
                <input type="date" id="name" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" required/>
              </div>
              <div class="form-group">
                <label for="name">Jenis Kelamin</label>
                <input type="text" id="name" name="jenis_kelamin" placeholder="Masukkan jenis kelamin" required/>
              </div>
              <div class="form-group">
                <label for="name">Alamat</label>
                <input type="text" id="name" name="alamat" placeholder="Masukkan alamat" required/>
              </div>
              <div class="form-group">
                <label for="name">Keterangan</label>
                <input type="text" id="name" name="keterangan" placeholder="Keterangan" />
              </div>
              <div style="text-align: right; margin-top: 40px;">
                 <input type="submit" onclick="contoh()" value="daftar"/>
              </div>
              <script type="text/javascript">

                    function contoh() {

                      swal({

                            title: "Berhasil!",

                            text: "Pop-up berhasil ditampilkan",

                            icon: "success",

                            button: true

                        });

                    }

                </script>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"

                  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"

                    crossorigin="anonymous"></script>
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
   
</body>
</html>