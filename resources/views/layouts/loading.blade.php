<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/loading.css') }}?v={{ time() }}">
  <title>Memuat Website...</title>
</head>
<body>

  <div class="loader-content">
    <div class="brand-logo"><span>Ardiyadev.</span></div>

    <div class="progress-wrapper">
      <!-- Karakter Maskot Interaktif -->
      <div class="character-stage" id="character-stage" title="Klik aku untuk mempercepat!">
        <div class="speech-bubble" id="speech-bubble">Halo! Siap meluncur!</div>
        
        <!-- SVG Robot Maskot ASN -->
        <svg class="character-body" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Antena -->
          <line x1="50" y1="18" x2="50" y2="8" stroke="#8A2BE2" stroke-width="4" stroke-linecap="round"/>
          <circle cx="50" cy="6" r="5" fill="#8A2BE2">
            <animate attributeName="opacity" values="1;0.3;1" dur="1.2s" repeatCount="indefinite" />
          </circle>
          
          <!-- Telinga / Headset -->
          <rect x="14" y="34" width="8" height="20" rx="4" fill="#8A2BE2"/>
          <rect x="78" y="34" width="8" height="20" rx="4" fill="#8A2BE2"/>

          <!-- Kepala Robot -->
          <rect x="20" y="18" width="60" height="46" rx="16" fill="#F8FAFC" stroke="#8A2BE2" stroke-width="3"/>
          
          <!-- Layar Wajah -->
          <rect x="27" y="26" width="46" height="28" rx="10" fill="#0F172A"/>
          
          <!-- Mata Kiri & Kanan (Bisa bergerak mengikuti kursor) -->
          <g id="robot-eyes">
            <circle cx="40" cy="39" r="5" fill="#8A2BE2"/>
            <circle cx="60" cy="39" r="5" fill="#8A2BE2"/>
            <!-- Kilau Mata -->
            <circle cx="41.5" cy="37.5" r="1.5" fill="#FFFFFF"/>
            <circle cx="61.5" cy="37.5" r="1.5" fill="#FFFFFF"/>
          </g>

          <!-- Mulut Senyum -->
          <path id="robot-mouth" d="M 44 47 Q 50 51 56 47" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round" fill="none"/>

          <!-- Badan Mini -->
          <rect x="32" y="67" width="36" height="18" rx="8" fill="#E2E8F0" stroke="#8A2BE2" stroke-width="2.5"/>
          <circle cx="50" cy="76" r="4" fill="#8A2BE2"/>

          <!-- Api Jetpack Bawah -->
          <path class="jetpack-flame" d="M 42 86 L 50 98 L 58 86 Z" fill="#F59E0B"/>
          <path class="jetpack-flame" d="M 45 86 L 50 94 L 55 86 Z" fill="#FEF08A"/>
        </svg>
      </div>

      <div class="progress-info">
        <span id="loader-status">Menghubungkan...</span>
        <span id="loader-percent">0%</span>
      </div>

      <div class="progress-track">
        <div class="progress-fill" id="progress-fill"></div>
      </div>

      <p class="interaction-hint">💡 Tips: <span>Klik robotnya</span> untuk memberi dorongan turbo!</p>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const progressFill = document.getElementById("progress-fill");
      const percentText = document.getElementById("loader-percent");
      const statusText = document.getElementById("loader-status");
      const characterStage = document.getElementById("character-stage");
      const speechBubble = document.getElementById("speech-bubble");
      const robotEyes = document.getElementById("robot-eyes");
      const robotMouth = document.getElementById("robot-mouth");

      const targetUrl = "{{ route('home') }}";
      let progress = 0;
      let isCompleted = false;
      let bubbleTimeout;

      const chatMessages = [
        "Wushhh! Turbo aktif! 🚀",
        "Semangat terus! ⚡",
        "Hampir sampai tujuan!",
        "Asik, diklik lagi! 😄",
        "Memuat data super cepat!"
      ];

      // Fungsi menampilkan dialog karakter
      function saySomething(text) {
        speechBubble.textContent = text;
        speechBubble.classList.add("show");
        clearTimeout(bubbleTimeout);
        bubbleTimeout = setTimeout(() => {
          speechBubble.classList.remove("show");
        }, 1600);
      }

      // Sapaan awal
      setTimeout(() => saySomething("Halo! Sedang menyiapkan halaman..."), 300);

      // Update UI Progress & Posisi Karakter
      function updateUI(val) {
        progressFill.style.width = `${val}%`;
        percentText.textContent = `${val}%`;
        characterStage.style.left = `${val}%`;

        if (val < 40) {
          statusText.textContent = "Menyiapkan Website...";
        } else if (val < 85) {
          statusText.textContent = "Memuat aset & data...";
        } else if (val < 100) {
          statusText.textContent = "Membuka halaman utama...";
        } else if (!isCompleted) {
          isCompleted = true;
          statusText.textContent = "Selesai!";
          saySomething("Berhasil! Ayo masuk! 🎉");
          // Ekspresi senang maksimal (mata melengkung)
          robotMouth.setAttribute("d", "M 42 46 Q 50 54 58 46");

          clearInterval(interval);
          setTimeout(() => {
            document.body.classList.add("fade-out");
            setTimeout(() => {
              window.location.replace(targetUrl);
            }, 450);
          }, 450);
        }
      }

      // Interaksi 1: Klik karakter untuk lompat & mempercepat loading (+6%)
      characterStage.addEventListener("click", () => {
        if (isCompleted) return;

        // Efek animasi lompat
        characterStage.classList.remove("boost-jump");
        void characterStage.offsetWidth; // trigger reflow
        characterStage.classList.add("boost-jump");

        // Pilih pesan acak
        const randomMsg = chatMessages[Math.floor(Math.random() * chatMessages.length)];
        saySomething(randomMsg);

        // Tambah progress ekstra
        progress = Math.min(100, progress + 6);
        updateUI(progress);
      });

      // Interaksi 2: Mata karakter mengikuti kursor mouse / sentuhan layar
      document.addEventListener("mousemove", (e) => {
        const rect = characterStage.getBoundingClientRect();
        const charX = rect.left + rect.width / 2;
        const charY = rect.top + rect.height / 2;

        const angle = Math.atan2(e.clientY - charY, e.clientX - charX);
        const moveX = Math.cos(angle) * 2.5;
        const moveY = Math.sin(angle) * 2.5;

        robotEyes.style.transform = `translate(${moveX}px, ${moveY}px)`;
      });

      // Interval loading otomatis
      const interval = setInterval(() => {
        if (isCompleted) return;
        progress += Math.floor(Math.random() * 8) + 4;
        if (progress >= 100) progress = 100;
        updateUI(progress);
      }, 1000);
    });
  </script>

</body>
</html>