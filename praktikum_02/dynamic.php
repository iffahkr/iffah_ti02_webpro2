<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #navbar {
            background-color: black;
            font-size: 15px;
            color: antiquewhite;
        }

        .nav-link {
            display: inline-block;
            width: 100px;
            height: 50px;
            text-align: top;
            line-height: 30px;
        }

        .selected {
            background-color: gray;
        }

        footer {
            background-color: black;
            color: white;
            height: 30vh;
        }
    </style>
</head>
<body>
    <nav id="navbar">
        <a class="nav-link">Artikel 1</a>
        <a class="nav-link selected">Artikel 2</a>
        <a class="nav-link">Artikel 3</a>
        <a class="nav-link">Artikel 4</a>
        <a class="nav-link">Artikel 5</a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <h1>Ustadz Adi Hidayat</h1>
                <p>Ustadz Adi Hidayat adalah seorang pendakwah muslim, motivator, dan pendidik asal Indonesia yang dikenal luas di kalangan masyarakat Indonesia dan dunia internasional. Beliau memiliki keahlian dalam berbagai bidang seperti ilmu agama, psikologi, dan manajemen.</p>
                
                <p>Salah satu karya beliau yang cukup terkenal adalah "Renungan Hidup Muslim", sebuah buku yang berisi kumpulan tulisan dan ceramah yang membahas berbagai topik seperti akhlak, keimanan, dan kesehatan mental. Buku ini menjadi inspirasi bagi banyak orang untuk lebih mendalami agama Islam dan meningkatkan kualitas hidupnya.</p>
                
                <p>Ustadz Adi Hidayat juga dikenal sebagai seorang motivator yang handal. Beliau sering memberikan ceramah dan pelatihan tentang motivasi dan pengembangan diri kepada berbagai kalangan, mulai dari pelajar, mahasiswa, hingga para pebisnis. Dalam ceramahnya, beliau mengajarkan bagaimana cara mengatasi rasa malas, meningkatkan kreativitas, dan mengembangkan potensi diri untuk mencapai kesuksesan dalam kehidupan.</p>
            </div>
            <div class="col-md-6 mt-4">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fid.wikipedia.org%2Fwiki%2FAdi_Hidayat&psig=AOvVaw1_HyeM-q-fXbBhAkzpjsnB&ust=1678270683929000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCIjR79HLyf0CFQAAAAAdAAAAABAY" alt="">
            </div>
        </div>
    </div>

    <footer>
    <div class="row">
		<div class="col-md-12 mt-4 ml-4">
			<address>
				 <strong>Twitter, Inc.</strong>
                 <br /> 
                 795 Folsom Ave, Suite 600
                 <br /> 
                 San Francisco, CA 94107
                 <br /> 
                 <abbr title="Phone">P:</abbr> (123) 456-7890
			</address>
		</div>
    </footer>
</body>
</html>