<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>Ardiya Shifwah Nugraha — Web Developer & Portfolio</title>
    <meta name="description" content="Portofolio resmi Ardiya Shifwah Nugraha, seorang Web Developer berpengalaman yang berspesialisasi dalam pengembangan web menggunakan PHP, Laravel, dan manajemen server mandiri (VPS).">
    <meta name="keywords" content="Ardiya Shifwah Nugraha, Sipa Nugraha, Web Developer Indonesia, Laravel Developer, PHP Developer, Portfolio Web, Ardiya Dev">
    <meta name="author" content="Ardiya Shifwah Nugraha">
    
    <!-- Open Graph / Media Sosial (Opsional agar tampil menarik saat dibagikan) -->
    <meta property="og:title" content="Ardiya Shifwah Nugraha — Web Developer & Portfolio">
    <meta property="og:description" content="Jelajahi portofolio proyek web, karya, dan keahlian pengembangan aplikasi menggunakan PHP dan Laravel di sini.">
    <meta property="og:type" content="website">

    <!-- Font Awesome & CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ time() }}">
    <!-- Kode link untuk logo/favicon di tab browser -->
    <link rel="icon" href="{{ asset('images/logo.png') }}">
</head>
<body>
    <section class="hero">
        <h1 class="judul1">Ardiya</h1>
        <button class="hamburger" id="hamburger" aria-label="Buka menu">
        <span></span>
        <span></span>
        <span></span>
        </button>
            <div class="nav-bar" id="navBar">
                <a href="#">Home</a>
                <a href="#about-me">About</a>
                <a href="#portofolio">Portofolio</a>
                <a href="#service">Service</a>
                <a href="#achievement">Achievement</a>
                <a href="#contact">Contact</a>
            </div>
                <a href="#" class="klikatas">Hire Me!</a>
                  <button class="theme-toggle" id="themeToggle" aria-label="Ganti Tema">
                    <i class="fa-solid fa-moon" id="themeIcon"></i>
                </button>
    </section>
            <div class="container">
                <div class="kiri">
                    <strong class="dev">I'M A BEGINNER PROGRAMMER</strong>
                        <div class="judul-group">
                            <h1 class="judul">Ardiya Shifwah Nugraha</h1>
                        </div>
                            <h3 class="k">I build things for the web.</h3>
                            <p class="dec">I am a beginner programmer 
                            with a strong passion for learning 
                            the world of programming, particularly in website development. 
                            I am continuously developing my skills in HTML, CSS, PHP, Laravel, 
                            and databases.
                            </p>
                            <span class="alat">TECHNOLOGIES I WORK WITH</span>
                            <div class="logo">
                                <img src="{{asset('images/html-logo-bg.png')}}" alt="" class="img">
                                <img src="{{asset('images/logo-css-bg.png')}}" alt="" class="img">
                                <img src="{{asset('images/logo-php-bg.png')}}" alt="" class="img">
                                <img src="{{asset('images/logo-laravel-bg.png')}}" alt="" class="img">
                                <img src="{{asset('images/vscode.png')}}" alt="" class="img">
                                <img src="{{asset('images/Js.png')}}" alt="" class="img">
                                <img src="{{asset('images/mysql.png')}}" alt="" class="img">
                            </div>
                </div>
                    <div class="kanan">
                        <div class="lingkaran">
                            <div class="konten">
                                <img src="{{ asset('images/ardiya.png') }}" alt="Foto Ardiya" class="ganteng">
                            </div>
                        </div>
                    </div>
            </div>
                <section class="container-aboutme" id="about-me">
                    <div class="aboutme">
                    
                            <h2 class="judul-aboutme">ABOUT ME</h2>
                    
                        <h2 class="deklar-aboutme">Hi! I'm Ardiya, a passionate Beginner Programmer with a strong interest in web development and technology. I enjoy creating modern, responsive, and user-friendly websites that combine functionality with attractive design.
                        I am continuously learning and improving my skills in HTML, CSS, JavaScript, PHP, and Laravel. I also have an interest in UI/UX Design, where I explore creative ideas and transform them into intuitive digital experiences.
                        For me, programming is not just about writing code, but also about solving problems, exploring new ideas, and building something meaningful. I'm always excited to learn new technologies, take on challenges, and grow as a developer.</h2>
                    </div>
                </section>
                <section class="container-pendidikan" >
                    <div class="left">
                        <img src="{{ asset('images/smea.jpeg') }}"
                        alt="Pendidikan SMK"
                        class="smea"
                        id="about-image">
                    </div>
                        <div class="right" id="about-content">
                                <h3 class="smk" id="about-title">
                                VOCATIONAL EDUCATION (SMK) (2022 - 2025)</h3>
                                <p class="smk-text" id="about-description">
                                I am a 2025 graduate of SMK Negeri 1 Slawi,
                                specializing in Software and Game Development (PPLG).
                                It was here that I began learning the fundamentals of programming
                                and application development.
                                </p>
                        <div class="slide-indicators">
                            <span class="indicator active"></span>
                            <span class="indicator"></span>
                            <span class="indicator"></span>
                        </div>
                    </div>
                </section>
                <section class="container-portofolio" id="portofolio">
                    <div class="header">
                        <h1 class="header-porto">- MY PROJECT -</h1>
                            <span class="deklarasi">
                            The following is a project that I have made
                            </span>
                            <a href="#">View Detail</a>
                    </div>
                    <div class="pemisah">
                        <div class="card-images">

                            <img src="{{ asset('images/siganteng.png') }}" alt="" class="foto">
                            <div class="teks">
                                <h2>SiGanteng - UNIVERSITAS BHAMADA SLAWI</h2>
                                <p>
                                A system designed to facilitate academic processes at universities, 
                                featuring course registration (KRS), online examinations, and academic transcripts (KHS).
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="service" id="service">
                    <div class="header-service">
                        <strong class="my-service">- MY SERVICE -</strong>
                        <div class="group-service-judul">
                            <h1 class="judul-service">FRONTEND &</h1>
                            <h1 class="desain"> UI/UX DESIGN SERVICES</h1>
                        </div>
                        <span class="deklarasi">
                        I can help you build the website you need,
                        with a responsive, user-focused frontend.
                        </span>
                    </div>
                    <div class="pemisah-service">
                        <div class="card-service">
                            <img src="{{ asset('images/komputer.png') }}" alt="" class="picture">
                            <div class="teks">
                                <h2>Frontend</h2>
                                <p>
                                I provide creative and modern frontend development services
                                focused on building responsive, attractive, and user-friendly websites.
                                </p>
                                <a href="#">View</a>
                            </div>
                        </div>
                        <div class="card-service">
                            <img src="{{ asset('images/ui.png') }}" alt="" class="picture">
                                <div class="teks">
                                    <h2>UI / UX Design</h2>
                                    <p>
                                    I am very interested in creating intuitive and visually appealing user interfaces 
                                    that ultimately provide a comfortable and enjoyable user experience.
                                    </p>
                                    <a href="#" class="viewq">View</a>
                                </div>
                        </div>
                    </div>
                </section>
                <section class="container-achievement" id="achievement">
                    <div class="achievement">
                        <div class="judul-group-achievement">
                            <strong class="header-achievement">- ACHIEVEMENT -</strong>
                            <h2 class="tte">TRAINING & EXPERIENCE</h2>
                        </div>
                    </div>
                    <div class="pemisah-sertif">
                        <div class="card-sertif">  
                            <img src="{{ asset('images/kasyr.jpg') }}" alt="" class="foto-sertif">
                            <div class="teks">
                            <h2 class="z">UI & UX Certificate</h2>
                            </div>
        </div>
        <div class="card-sertif">
      
            <img src="{{ asset('images/ujikom.jpg') }}" alt="" class="foto-sertif">
            <div class="teks">
            <h2 class="z">Vocational Competency Test Certificate</h2>
            </div>
        </div>
    </div>
    </section>
            <section class="container-contact" id="contact">
                <div class="kiri-contact">
                    <strong class="header-contact">CONTACT</strong>
                        <div class="header-contacts">
                            <h1 class="judul-contact">Let’s Build Something Together </h1>
                        </div>
                            <h3 class="deks-contact">FOLLOW MY SOSIAL MEDIA</h3>
                                <div class="logo-contact">
                                    <a href="https://www.instagram.com/ardiyaaaaaaaaaaa/" target="_blank">
                                        <div class="instagram-logo">
                                            <div class="instagram-circle"></div>
                                                <div class="instagram-dot"></div>
                                        </div>
                                    </a>
                                        <a href="https://www.linkedin.com/in/ardiya-shifwah-nugraha-999777404/" target="_blank">
                                        <div class="linkedin-logo">
                                            <span>in</span>
                                        </div>
                                    </a>
                                    <a href="https://github.com/Ardiya050607" target="_blank" class="github-logo">
                                            <i class="fa-brands fa-github"></i>
                                    </a>
                            </div>
                </div>
                    <div class="kanan-contact">
                        <div class="card-contact">
                            <div class="konten-contact">
                                <form id="whatsappForm">

                        <span class="judul-input">Name</span>
                        <div class="input">
                            <input class="input-1" type="text" name="name" id="name" required>
                        </div>

                        <span class="judul-input">Email</span>
                        <div class="input">
                            <input class="input-1" type="email" name="email" id="email" required>
                        </div>

                        <span class="judul-input">Phone number</span>
                        <div class="input">
                    <input class="input-1" type="tel" name="number" id="number">
                        </div>

                        <span class="judul-input">Message</span>
                        <div class="input">
                            <textarea class="input-1" name="message" id="message" rows="4" required></textarea>
                        </div>
                        <input type="submit" name="submit" class="submit" value="Kirim Pesan">
                        </form>
                                <!-- <img src="{{ asset('images/back-bg.png') }}" alt="Foto Ardiya" class="back"> -->
                            </div>
                        </div>
                    </div>
            </section>
            <section class="container-footer">
                <div class="copyright">
                    <span>&copy; 2026 Ardiya. All Rights Reserved.</span>
                </div>

            </section>
    <script>
        const aboutData = [
            {
                image: "{{ asset('images/smea.jpeg') }}",
                alt: "Foto SMK Negeri 1 Slawi",
                title: "VOCATIONAL EDUCATION (SMK) (2022 - 2025)",
                description: "I am a 2025 graduate of SMK Negeri 1 Slawi, where I majored in Software and Game Development (PPLG). It was there that I began learning the fundamentals of programming and application development."
            },
            {
                image: "{{ asset('images/bhamada.jpeg') }}",
                alt: "Foto pendidikan kuliah",
                title: "HIGHER EDUCATION (2026 - 2030)",
                description: "I am currently a student at Bhamada Slawi University, where I am developing my skills in the field of Informatics—specifically in programming, website development, and information technology."
            },
        ];
        let currentSlide = 0;
            const image = document.getElementById('about-image');
            const content = document.getElementById('about-content');
            const indicators = document.querySelectorAll('.indicator');

        function changeSlide() {
            currentSlide = (currentSlide + 1) % aboutData.length;
        const data = aboutData[currentSlide];
            content.classList.add('fade-out');
            image.classList.add('fade-out');
        setTimeout(() => {
                image.src = data.image;
                image.alt = data.alt;
                document.getElementById('about-title').textContent = data.title;
                document.getElementById('about-description').textContent = data.description;
                indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentSlide);
            });
                content.classList.remove('fade-out');
                image.classList.remove('fade-out');
                content.classList.remove('fade-in');
            void content.offsetWidth;
                content.classList.add('fade-in');
            }, 500);
        }
        // Ganti gambar dan tulisan setiap 4 detik
        setInterval(changeSlide, 4000);
        /*responsif*/
        const hamburger = document.getElementById('hamburger');
        const navBar = document.getElementById('navBar');
            hamburger.addEventListener('click', function () {
            hamburger.classList.toggle('active');
            navBar.classList.toggle('active');
            });
            // Tutup menu setelah link diklik
            document.querySelectorAll('.nav-bar a').forEach(link => {
            link.addEventListener('click', function () {
            hamburger.classList.remove('active');
            navBar.classList.remove('active');
            });
        });
        /* --- SCRIPT NAVBAR MENYESUAIKAN SAAT SCROLL --- */
window.addEventListener('scroll', function() {
    const heroNav = document.querySelector('.hero');
    
    // Jika posisi scroll ke bawah lebih dari 50 pixel
    if (window.scrollY > 50) {
        heroNav.classList.add('scrolled');
    } else {
        heroNav.classList.remove('scrolled');
    }
});
const themeToggle = document.getElementById('themeToggle');
const themeIcon = document.getElementById('themeIcon');
const htmlElement = document.documentElement;

// 1. Cek preferensi tema yang tersimpan saat halaman pertama kali dimuat
const savedTheme = localStorage.getItem('theme') || 'light';
if (savedTheme === 'dark') {
    htmlElement.setAttribute('data-theme', 'dark');
    if (themeIcon) {
        themeIcon.classList.replace('fa-moon', 'fa-sun');
    }
}

// 2. Event listener saat tombol toggle diklik dengan efek transisi dari kiri atas
themeToggle.addEventListener('click', function() {
    // Tambahkan kelas animasi ke body agar efek clip-path berjalan
    document.body.classList.add('animating-theme');

    const currentTheme = htmlElement.getAttribute('data-theme');
    
    // Ubah tema tepat di tengah-tengah animasi (misal: 300ms)
    setTimeout(() => {
        if (currentTheme === 'dark') {
            htmlElement.removeAttribute('data-theme');
            localStorage.setItem('theme', 'light');
            if (themeIcon) {
                themeIcon.classList.replace('fa-sun', 'fa-moon');
            }
        } else {
            htmlElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
            if (themeIcon) {
                themeIcon.classList.replace('fa-moon', 'fa-sun');
            }
        }
    }, 500);

    // Hapus kelas animasi setelah durasi animasi selesai (800ms)
    setTimeout(() => {
        document.body.classList.remove('animating-theme');
    }, 50);
});
document.getElementById('whatsappForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah form agar tidak reload halaman

        // Ambil nilai dari setiap inputan
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let number = document.getElementById('number').value;
        let message = document.getElementById('message').value;

        // Nomor WhatsApp Anda (Ganti dengan nomor Anda, awali dengan kode negara misal 628...)
        let phoneNo = "6289507970337"; 

        // Susun format pesan yang akan dikirim ke WhatsApp
        let text = `Halo, saya ingin mengirim pesan dari website:\n\n` +
                   `*Nama:* ${name}\n` +
                   `*Email:* ${email}\n` +
                   `*No. HP:* ${number}\n` +
                   `*Pesan:* ${message}`;

        // Ubah teks agar aman dibaca oleh URL (encoding)
        let encodedText = encodeURIComponent(text);

        // Buka link WhatsApp di tab/aplikasi baru
        window.open(`https://wa.me/${phoneNo}?text=${encodedText}`, '_blank');
    });
    </script>   
</body>
</html> 