<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Portofolio</title>
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
    </section>
            <div class="container">
                <div class="kiri">
                    <strong class="dev">I'M A BEGINNER PROGRAMMER</strong>
                        <div class="judul-group">
                            <h1 class="judul">Ardiya Shifwah Nugraha </h1>
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
                                <img src="{{asset('images/js.png')}}" alt="" class="img">
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
                    </div>
                    <div class="pemisah">
                        <div class="card-images">
                            <span class="status">UNFINISHED</span>
                            <img src="{{ asset('images/siganteng.png') }}" alt="" class="foto">
                            <div class="teks">
                                <h2>SiGanteng - UNIVERSITAS BHAMADA SLAWI</h2>
                                <p>
                                A system designed to facilitate academic processes at universities, 
                                featuring course registration (KRS), online examinations, and academic transcripts (KHS).
                                </p>
                                <a href="maintenance">View Project</a>
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
                                    <a href="#">View</a>
                                </div>
                        </div>
                    </div>
                </section>
                <section class="container-achievement" id="achievement">
                    <div class="achievement">
                        <div class="judul-group-achievement">
                            <strong class="header-achievement">- ACHIEVEMENT -</strong>
                            <h2 class="tte">TRAINING & EXPERIENCE</h2>
                            <span class="peraihan">A range of experiences and achievements in frontend development,
                            UI/UX design, and modern web application projects.</span>
                        </div>
                    </div>
                    <div class="pemisah-sertif">
                        <div class="card-sertif">  
                            <img src="{{ asset('images/kasyr.jpg') }}" alt="" class="foto-sertif">
                            <div class="teks">
                            <strong >UI & UX Certificate</strong>
                            </div>
        </div>
        <div class="card-sertif">
      
            <img src="{{ asset('images/ujikom.jpg') }}" alt="" class="foto-sertif">
            <div class="teks">
            <strong ">Vocational Competency Test Certificate</strong>
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
                                        <a href="https://www.linkedin.com/in/sipa-nugraha-999777404/" target="_blank">
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
                                <img src="{{ asset('images/back-bg.png') }}" alt="Foto Ardiya" class="back">
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
                description: "Saya merupakan lulusan SMK Negeri 1 Slawi tahun 2025 dengan jurusan Pengembangan Perangkat Lunak dan Gim (PPLG). Di sini saya mulai mempelajari dasar-dasar pemrograman dan pengembangan aplikasi."
            },
            {
                image: "{{ asset('images/bhamada.jpeg') }}",
                alt: "Foto pendidikan kuliah",
                title: "HIGHER EDUCATION (2026 - SEKARANG)",
                description: "Sekarang saya menjadi mahasiswa Universitas Bhamada Slawi, saya mengembangkan kemampuan di bidang Informatika, khususnya pemrograman, pengembangan website, dan teknologi informasi."
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
    </script>   
</body>
</html> 
