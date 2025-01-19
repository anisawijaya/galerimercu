<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Interactive</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="presentation-container">
        <!-- Slide 1 -->
        <div class="slide" id="slide1">
            <h2>Welcome to Galerimercu</h2>
            <p>We don't remember days, we remember moments</p>
            <img src="logo.png" width="350"alt="Design 2">
        </div>

        <!-- Slide 2 -->
        <div class="slide" id="slide2">
            <h2>Tentang Kami</h2>
            <p style="text-align:justify">Galerimercu adalah sebuah website galeri yang didedikasikan untuk mengabadikan momen-momen berharga selama perjalanan akademik di kampus. Website ini menghadirkan kumpulan foto dan video kenangan dari acara-acara penting seperti wisuda, workshop, dan Pengabdian Kepada Masyarakat (PKM).<br>

Dikemas dengan desain yang modern dan navigasi yang mudah, Galerimercu bukan sekadar galeri online, tetapi ruang untuk kembali merasakan semangat, persahabatan, dan kebanggaan di setiap langkah perjalanan akademik. Ideal untuk dosen, mahasiswa, dan alumni yang ingin mengabadikan atau mengenang pencapaian mereka di kampus.</br></p>

<p style="text-align:center">Temukan kenangan berharga Anda di Galerimercu, dan rasakan kembali indahnya masa-masa di kampus!</p>
<video controls width="400" height="250">
  <source src="animasi.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

</div>

        <!-- Slide 3 -->
        <div class="slide" id="slide3">
            <h2>Design</h2>
            <p>berikut ini adalah tampilan dari proyek dalam website ini.</p>
            <img src="homescreen.png" width="200"alt="Design 1">
            <img src="homescreen2.png" width="200"alt="Design 2">
            <img src="wisuda.png" width="200"alt="Design 3">
            <img src="wisuda2.png" width="200"alt="Design 4">
            <img src="wisuda3.png" width="200"alt="Design 5">

        </div>

        <!-- Slide 4 -->
        <div class="slide" id="slide4">
            <h2>Pembuat Program</h2>
            <p>Program ini dibuat oleh Arya Puji Asmoro, Mahasiswa di STMIK Mercusuar.</p>
            <img src="gweh.jpg" width="300"alt="Design 7">
        </div>

        <!-- Navigation Buttons -->
        <div id="navigation">
            <button onclick="prevSlide()">Previous</button>
            <button onclick="nextSlide()">Next</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
