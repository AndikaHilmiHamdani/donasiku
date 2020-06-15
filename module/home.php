<div class="content" ></div>
    <aside >
        <h2>Author</h2>
		 <p>Andika Hilmi Hamdani <br>
			 Pekerjaan : pelajar/mahasiswa <br>
			 Usia : 19 tahun <br>
       </p><br>
       <?php 
            
			if(isset($_SESSION['member'])):?>
            <h2>  <br> Donasi <br></h2>
			<a href="?module=content-mem" class="content1" id="content1" >Klik Link Ini Untuk Donasi</a>
            <?php elseif(isset($_SESSION['admin'])): ?>
            <?php else: ?>
            <h2> <br> Donasi <br> </h2>
			<a href="?module=signin" class="signup1" id="signup1" >Klik Link Ini Untuk Daftar</a>
			<?php endif; 
			
			?>
       <h3> <br> Hot News <br></h3>
        
    </aside>

<article >
        <h1>Pandemi Virus Corona</h1>    
        <p id="text1">Covid-19 adalah penyakit yang ditimbulkan oleh infeksi virus corona baru atau SARS-CoV-2 yang berasal dari keluarga corona. 
            <br> Namun, jenis virus yang menyebar kali ini belum pernah ada sebelumnya.Artikel ini telah tayang di Kompas.com dengan judul <br>
             "Virus Corona: Penyebab, Gejala, Pencegahan, dan Kapan Harus Segera ke Dokter" <br>
           <br> Penulis : Luthfia Ayu Azanella <br>
            <br> Editor : Rizal Setyo Nugroho  <br>
            <a href="https://www.kompas.com/tren/read/2020/03/31/162000665/virus-corona--penyebab-gejala-pencegahan-dan-kapan-harus-segera-ke-dokter.">
            <br> baca selengkapnya </a>
        </p>
        <br><h1>Terimakasih Dicoding</h1>
        <p>Terimakasih telah memberikan saya beasiswa front-end development</p> <br>
                              
        <br>
        <br><h1>Terimakasih Indosat</h1>
        <p>Terimakasih telah membuat program IDCAMP yang berkerjasama dengan dicoding</p> <br>
    </article>
    