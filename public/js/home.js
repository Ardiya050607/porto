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
        let message = document.getElementById('message').value;

        // Nomor WhatsApp Anda (Ganti dengan nomor Anda, awali dengan kode negara misal 628...)
        let phoneNo = "6289507970337"; 

        // Susun format pesan yang akan dikirim ke WhatsApp
        let text = `${name} mengirim pesan dari website anda:\n\n` +
                   `*Nama:* ${name}\n` +
                   `*Email:* ${email}\n` +
                   `*Pesan:* ${message}`;

        // Ubah teks agar aman dibaca oleh URL (encoding)
        let encodedText = encodeURIComponent(text);

        // Buka link WhatsApp di tab/aplikasi baru
        window.open(`https://wa.me/${phoneNo}?text=${encodedText}`, '_blank');
    });
    // Meminta izin akses lokasi pengguna
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function(position) {
                // Jika izin diberikan, ambil latitude dan longitude
                var lat = position.coords.latitude;
                var lng = position.coords.longitude;

                // Masukkan iframe Google Maps berdasarkan koordinat pengguna
                var mapContainer = document.getElementById('map-container');
                mapContainer.innerHTML = `
                    <iframe 
                        src="https://maps.google.com/maps?q=${lat},${lng}&z=15&output=embed" 
                        width="100%" 
                        height="450px" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                `;
            },
            function(error) {
                // Jika pengguna menolak atau GPS mati, tampilkan lokasi default (misal: Monas)
                console.warn("Gagal mendeteksi lokasi: " + error.message);
                var mapContainer = document.getElementById('map-container');
                mapContainer.innerHTML = `
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.300647304381!2d106.8249641747547!3d-6.229728793748286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e714f3b207%3A0x2964e5256e6d1e43!2sMonumen%20Nasional!3s!4v1700000000000!5m2!1sid!2sid" 
                        width="100%" 
                        height="450px" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                `;
            }
        );
    } else {
        alert("Browser Anda tidak Mendukung Geolocation.");
    }
    document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('btn-download-cv');
    const overlay = document.getElementById('cv-loader-overlay');
    const percentEl = document.getElementById('cv-loader-percent');
    const fillEl = document.getElementById('cv-progress-fill');
    const statusEl = document.getElementById('cv-loader-status');
    const btnProgressEl = btn?.querySelector('.cv-progress');

    if (!btn || !overlay) return;

    let isRunning = false;

    const setProgress = (value, statusText = null) => {
        const clamped = Math.max(0, Math.min(100, Math.round(value)));
        if (percentEl) percentEl.textContent = `${clamped}%`;
        if (fillEl) fillEl.style.width = `${clamped}%`;
        if (btnProgressEl) btnProgressEl.textContent = `${clamped}%`;
        if (statusText && statusEl) statusEl.textContent = statusText;
    };

    const triggerBrowserSave = (blob, filename) => {
        const blobUrl = URL.createObjectURL(blob);
        const tempLink = document.createElement('a');
        tempLink.href = blobUrl;
        tempLink.download = filename;
        document.body.appendChild(tempLink);
        tempLink.click();
        tempLink.remove();
        setTimeout(() => URL.revokeObjectURL(blobUrl), 1500);
    };

    const runFallbackAnimation = () => {
        return new Promise((resolve) => {
            let current = 0;
            const interval = setInterval(() => {
                // Melambat mendekati 90% agar terasa natural
                const step = current < 60 ? 12 : current < 88 ? 5 : 2;
                current = Math.min(90, current + step);
                setProgress(current, 'Mengunduh dokumen...');

                if (current >= 90) {
                    clearInterval(interval);
                    resolve(() => {
                        setProgress(100, 'Selesai! Menyimpan file...');
                    });
                }
            }, 100);
        });
    };

    btn.addEventListener('click', async (e) => {
        if (isRunning) return;
        e.preventDefault();
        isRunning = true;

        const url = btn.getAttribute('href');
        const filename = btn.getAttribute('download') || btn.dataset.filename || 'CV-ARDIYA.pdf';

        btn.classList.add('is-downloading');
        overlay.classList.add('is-active');
        overlay.setAttribute('aria-hidden', 'false');
        setProgress(0, 'Menghubungkan ke server...');

        let finishFallback = null;
        const fallbackPromise = runFallbackAnimation().then((finishFn) => {
            finishFallback = finishFn;
        });

        try {
            const response = await fetch(url, { cache: 'no-store' });
            if (!response.ok) throw new Error(`HTTP ${response.status}`);

            const contentLength = Number(response.headers.get('Content-Length') || 0);

            // Jika server mengirim Content-Length dan stream tersedia, pakai progres asli
            if (contentLength > 0 && response.body) {
                const reader = response.body.getReader();
                const chunks = [];
                let received = 0;

                while (true) {
                    const { done, value } = await reader.read();
                    if (done) break;
                    chunks.push(value);
                    received += value.length;
                    const pct = (received / contentLength) * 100;
                    setProgress(pct, `Mengunduh... (${Math.round(pct)}%)`);
                }

                const blob = new Blob(chunks, { type: 'application/pdf' });
                setProgress(100, 'Selesai! Menyimpan file...');
                triggerBrowserSave(blob, filename);
            } else {
                // Jika Content-Length tidak terbaca (misal lewat proxy/tunnel tertentu)
                const blob = await response.blob();
                await fallbackPromise;
                if (typeof finishFallback === 'function') finishFallback();
                triggerBrowserSave(blob, filename);
            }
        } catch (err) {
            // Fallback langsung ke unduhan bawaan jika fetch diblokir CORS/jaringan
            setProgress(100, 'Mengalihkan ke unduhan langsung...');
            const fallbackLink = document.createElement('a');
            fallbackLink.href = url;
            fallbackLink.download = filename;
            document.body.appendChild(fallbackLink);
            fallbackLink.click();
            fallbackLink.remove();
        } finally {
            setTimeout(() => {
                overlay.classList.remove('is-active');
                overlay.setAttribute('aria-hidden', 'true');
                btn.classList.remove('is-downloading');
                setProgress(0, 'Memulai unduhan...');
                isRunning = false;
            }, 650);
        }
    });
});