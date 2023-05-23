@include('layouts.user_2.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="{{asset('Style')}}/style2.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>


</head>
<body>
    <header class="hero">
       <H1><span>Palmarum</span></H1>
        <p>Beranda</p>
        
        <div class="mouse">
            <ion-icon name="arrow-down-circle-outline"></ion-icon>
        </div>
    </header>
    <div class="foto-container">
        <div class="foto-item">
          <img src="{{ asset('Style')}}/image/sintua.jpg" alt="Foto">


          <p class="foto-text">INI EPHORUS <br> n publishing and graphic design, Lorem ipsum is a placeholder 
                text commonly used to demonstrate the visual form of a 
                document or a typeface without relying on meaningful content. 
                Lorem ipsum may be used as a placeholder before final copy is 
                available. It is also used to temporarily replace text in a
                 process called greeking, which allows designers to consider
                  the form of a webpag </p>           
        </div>
        <div class="foto-item">
          <img src="{{ asset('Style') }}/image/sintua.jpg" alt="Foto">
            <p class="foto-text">INI EPHORUS <br> n publishing and graphic design, Lorem ipsum is a placeholder 
                  text commonly used to demonstrate the visual form of a 
                  document or a typeface without relying on meaningful content. 
                  Lorem ipsum may be used as a placeholder before final copy is 
                  available. It is also used to temporarily replace text in a
                   process called greeking, which allows designers to consider
                    the form of a webpag </p>           
          </div> <div class="foto-item">
            <img src="{{ asset('Style') }}/image/sintua.jpg" alt="Foto">
            <p class="foto-text">INI EPHORUS <br> n publishing and graphic design, Lorem ipsum is a placeholder 
                  text commonly used to demonstrate the visual form of a 
                  document or a typeface without relying on meaningful content. 
                  Lorem ipsum may be used as a placeholder before final copy is 
                  available. It is also used to temporarily replace text in a
                   process called greeking, which allows designers to consider
                    the form of a webpag </p>           
          </div>
        <!-- Tambahkan lebih banyak foto di sini jika diperlukan -->
      </div>
    <div class="judul_1">
        <h1>Mengenai HKBP Palmarum</h1>
    </div>  
      <div class="card">
        <div class="image-container">
          <img src="{{ asset('Style') }}/image/sintua.jpg" alt="Foto" class="round-image" style="  width: 500px;
          height: 500px;
          border-radius: 50%;
          overflow: hidden;
          margin: 20px;">
        </div>
        <div class="text-container">
          <h3>HKBP Palmarum</h3>
          <p>Teks deskripsi mengenai card.</p>
        </div>
      </div>
      <div class="judul_1">
        <h1>Jadwal Ibadah</h1>
    </div>
       <div class="jadwal">
	
		<div class="schedule-slider">
		  <div class="schedule-item">
			<h2>Minggu Pagi</h2>
			<p>09.00 - Ibadah Raya</p>
			<p>11.00 - Kebaktian Sekolah Minggu</p>
		  </div>
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
	  </div>@include('layouts.user_2.footer')
</body>
<script src="{{asset('Style')}}/style.js"></script>

</html>