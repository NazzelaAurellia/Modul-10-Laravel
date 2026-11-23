
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Nazzela Aurellia Yahya</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="profile-body">

    <!-- NAVBAR -->
    <nav class="profile-nav">
        <h3>My Profile</h3>

        <div>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <!-- HOME -->
    <section id="home" class="profile-hero">
        <div class="profile-card hero-card">

            <div class="profile-avatar">
                <i class="bi bi-person-fill"></i>
            </div>

            <p class="welcome-text">WELCOME TO MY PERSONAL WEBSITE</p>

            <h1>Halo, Saya Nazzela Aurellia Yahya!</h1>

            <h3>Mahasiswa Sistem Informasi</h3>

            <p>
                Selamat datang di website profil pribadi saya.
                Saya adalah mahasiswa Sistem Informasi semester 2
                yang tertarik dengan teknologi, desain, dan
                pengembangan website.
            </p>

            <a href="#about" class="profile-button">
                Tentang Saya
            </a>

        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="profile-section">
        <h2>About Me</h2>

        <div class="profile-card about-card">
            <h3>Perkenalan Diri</h3>

            <p>
                Halo! Nama saya Nazzela Aurellia Yahya.
                Saya merupakan mahasiswa Program Studi Sistem Informasi
                semester 2. Saat ini saya sedang mempelajari berbagai
                hal mengenai teknologi informasi, pemrograman,
                dan pengembangan aplikasi berbasis web.
            </p>

            <p>
                Saya senang mempelajari hal-hal baru dan mengembangkan
                kemampuan di bidang teknologi.
            </p>
        </div>
    </section>

    <!-- EDUCATION -->
    <section id="education" class="profile-section">
        <h2>My Education</h2>

        <div class="feature-container">

            <div class="profile-card feature-card">
                <i class="bi bi-mortarboard-fill"></i>
                <h3>Perguruan Tinggi</h3>
                <p>Program Studi Sistem Informasi</p>
            </div>

            <div class="profile-card feature-card">
                <i class="bi bi-book-half"></i>
                <h3>Semester</h3>
                <p>Semester 2</p>
            </div>

            <div class="profile-card feature-card">
                <i class="bi bi-laptop"></i>
                <h3>Bidang Minat</h3>
                <p>Teknologi Informasi dan Web Development</p>
            </div>

        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="profile-section">
        <h2>Contact Me</h2>

        <div class="profile-card contact-card">
            <p>
                <i class="bi bi-person-circle"></i>
                Nazzela Aurellia Yahya
            </p>

            <p>
                <i class="bi bi-mortarboard"></i>
                Sistem Informasi - Semester 2
            </p>

            <p>
                <i class="bi bi-envelope"></i>
                Email: Tambahkan email kamu
            </p>

            <p>
                <i class="bi bi-instagram"></i>
                Instagram: Tambahkan Instagram kamu
            </p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="profile-footer">
        <p>© 2026 Nazzela Aurellia Yahya. All Rights Reserved.</p>
        <p>Designed with Liquid Glass Style</p>
    </footer>

</body>
</html>
