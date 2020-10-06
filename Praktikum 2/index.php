<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Tugas Praktikum 2</title>
	</head>
	<body>
		<h1>Contoh Penggunaan Link</h1>
		<p>
			<a href="index.php" style="color:red">Home</a> |
			<a href="#contact" style="color:blue">Contact</a> |
			<a href="https://github.com/Gowinda033/PraktikumWebB/tree/master/Praktikum%202" target="_blank" style="color:green">Source</a> |
			<a href="pptPBW.zip" style="color:purple" title="Download ppt PBW">Download</a> 
		</p>
		<h2>Penjelasan Program html</h2>
		<p>
			Link atau Hyperlink adalah elemen HTML yang berfungsi menghubungkan suatu halaman web ke halaman web yang lain.<br>
			Elemen ini bisa diklik.. dan nanti akan membuka halaman lain sesui alamat URL yang diberikan.<br>
			Contohnya ada pada beberapa tulisan berwarna diatas (Home,Contact,Source,Download)<br>
			Atau anda bisa coba klik pada <a href="link.html" style="color: cyan" target="_blank" title="Membuka file link.html">Link</a> berikut ini. <br>
			Anda akan dialihkan ke sebuah laman yang disertakan dalam link.<br>
			Link pada HTML bisa menuju ke sebuah file, sebuah bagian halaman, download file, atau sebuah website lain.
		</p>
		<p>
			Link dapat berupa internal link yang menuju ke domain didalam web.<br>
			Seperti contoh link pada paragraf diatas, link internal dapat dibuat dengan mencantumkan file di dalam suatu folder yang sama.<br>
			Untuk menuju ke internal link, kita dapat melakukan anchor kepada directory dari file yang akan dituju.<br> 
			Namun tentunya akan lebih baik jika file masih berada pada satu folder yang sama.<br>
			Tulisan "Home" berwarna merah juga melakukan internal link yang menuju ke halaman index atau halaman utama.
		</p>
		<p>
			Selain internal link, ada juga eksternal link yang akan menuju ke domain web diluar halaman lokal.<br>
			contohnya adalah pada tulisan "Source" yang berwarna hijau.<br>
			Saat link diklik maka, akan muncul halaman baru yang menuju ke repository GitHub dari source code ini di upload.<br>
			Menggunakan atribut target untuk melakukan anchor ke eksternal link dapat memberikan kita cara untuk menampilkan halaman.<br>
			Pada link "Source", target digunakan untuk membuka link pada tab baru di browser menggunakan target "_blank".
		</p>
		<p>
			Selain itu, taget juga bisa menunjuk ke sebuah frame dengan mencantumkan nama frame yang akan dituju.<br>
			<a href="https://www.youtube.com/embed/DiSvq5SgLMI" target="frameLink"> Contoh target frame</a>
		</p>
		<p> <iframe name="frameLink" width="370" height="210" frameborder="0" allowfullscreen></iframe> </p>
		<p> 
			Ada pula beberapa atribut lain selain target.<br>
			Atribut "style" dapat digunakan untuk memberikan suatu desain pada text seperti warna ataupun background.<br>
			contohnya pada empat pilihan diatas yang memiliki berbagai warna (Home,Contact,Source,Download).<br>
			Lalu ada juga atribut "title" yang membuat suatu tulisan muncul saat cursor berada pada suatu link anchor.<br>
			Contohnya ada pada link yang diterakan pada paragraf pertama.			
		</p>
		<p>
			Pilihan "Contact" yang berwarna biru adalah contoh link dalam satu file.<br>
			Link ini memiliki satu titik tuju pada halaman.<br>
			penggunaan link ini bertujuan untuk memudahkan pengguna jika halaman terasa panjang dan harus menuju ke suatu titik tertentu.<br>
			"Contact" akan membawa kita ke pada bagian akhir halaman yang memberikan info contact dari penulis.<br>
			Pada bagian kontak di halaman bawah, ada pula link yang ditujukan untuk mengirimkan email secara langsung.
		</p>
		<p>
			Lalu yang terakhir adalah kemampuan link untuk melakukan download file.<br>
			Caranya adalah menempatkan file zip ke satu folder yang sama dengan file.<br>
			lalu cantumkan URL file pada tujuan link.<br>
			bisa dicoba pada pilihan "Download" yang berwarna ungu.
		</p>
		<p>
			Itulah yang dapat saya sampaikan untuk sekarang.<br>
			Akhir kata saya ucapkan <a href="https://www.youtube.com/watch?v=CYYhqM-VYRE">Terimakasih</a>
		</p>
		<style>
			.footer {
				  position: bottom;
				  left: 0;
				  bottom: 0;
				  width: 100%;
				  background-color: black;
				  color: white;
				  text-align: center;
			}
		</style>

		<div class="footer">
			<p id="contact">
				<br>I Kadek Gowinda (1808561033)<br> <a href="mailto:kadekgowinda@student.unud.ac.id" style="color:white"> kadekgowinda@student.unud.ac.id</a> <br>Line:: gowindaid
			</p>
		</div>
	</body>
</html>