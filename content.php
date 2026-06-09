<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide 2 – Ketahanan Pangan Indonesia</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght=0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/e0e2bc4294.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="desain.css">
</head>
<body>
    <header>
<nav class="navbar navbar-expand-md fixed-top bg-light shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="prolog.html"><img src="element/logo-1.png" alt="logo" width="80px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <img class="offcanvas-title" id="offcanvasNavbarLabel" src="element/logo-1.png" alt="logo"
                            width="80px">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="prolog.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2 active" aria-current="page" href="content.php">Content</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="conclusion.html">Conclusion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="our-team.html">Our Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login_page.php">Forum Diskusi</a>   
                            </li>
                        </ul>

                        <form class="d-flex ms-md-3 mt-3 mt-md-0 search-container" onsubmit="event.preventDefault(); handleSearch();" style="min-width: 260px;">
                            <div class="w-100 position-relative">
                                <input class="form-control form-control-search" type="search" placeholder="Cari Provinsi..." aria-label="Search" id="search-input" autocomplete="off">
                                <div id="history-dropdown" class="history-dropdown">
                                    <div class="history-header">
                                        <span>Riwayat Pencarian</span>
                                        <a href="javascript:void(0)" class="text-danger text-decoration-none" onclick="clearAllHistory(event)" style="font-size: 0.72rem;">Hapus Semua</a>
                                    </div>
                                    <div id="history-items"></div>
                                </div>
                            </div>
                            <button class="btn btn-search-custom ms-2" type="submit">Cari</button>
                        </form>

                    </div>
                </div>
            </div>
        </nav>

        <section class="hero-section">
            <div class="container d-flex align-items-start justify-content-center fs-1
        text-white flex-column">
                <h1>
                    Data Tingkat Ketahanan<br>
                    Pangan Indonesia Pada<br>
                    Tahun 2024-2025
                </h1>
                <a href="#guider">
                    <button class="btn">Explore Now</button>
                </a>
            </div>
        </section>
    </header>
    <div class="slide">
        <div class="content">

            <div class="section-header" id="guider">
                <div class="section-title-block">
                    <h2>Tabel Indeks Ketahanan Pangan<br>2024–2025</h2>
                    <p>Skor IKP per Provinsi</p>
                </div>
                <div class="divider-line"></div>
            </div>
            <div class="card" style="margin-bottom:40px;">
                <div class="table-wrapper">
                    <table id="ikp-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Provinsi</th>
                                <th>IKP 2024</th>
                                <th>IKP 2025</th>
                                <th>Perubahan</th>
                            </tr>
                        </thead>
                        <tbody id="table-body"></tbody>
                    </table>
                </div>
            </div>

            <div class="section-header">
                <div class="section-title-block">
                    <h2>Indeks Ketahanan Pangan<br>2024 &amp; 2025</h2>
                    <p>Tertinggi &amp; Terendah per Tahun</p>
                </div>
                <div class="divider-line"></div>
            </div>
            <div class="four-chart-grid">
                <div class="card mini-chart-card">
                    <span class="card-year y24">2024 – Tertinggi</span>
                    <svg id="bc-24-top" viewBox="0 0 300 210" style="width:100%;display:block;margin-top:8px;"></svg>
                </div>
                <div class="card mini-chart-card">
                    <span class="card-year y24">2024 – Terendah</span>
                    <svg id="bc-24-bot" viewBox="0 0 300 210" style="width:100%;display:block;margin-top:8px;"></svg>
                </div>
                <div class="card mini-chart-card">
                    <span class="card-year y25">2025 – Tertinggi</span>
                    <svg id="bc-25-top" viewBox="0 0 300 210" style="width:100%;display:block;margin-top:8px;"></svg>
                </div>
                <div class="card mini-chart-card">
                    <span class="card-year y25">2025 – Terendah</span>
                    <svg id="bc-25-bot" viewBox="0 0 300 210" style="width:100%;display:block;margin-top:8px;"></svg>
                </div>
            </div>

            <div class="section-header">
                <div class="section-title-block">
                    <h2>Visualisasi Data Komoditas<br>Tanaman Pangan di Indonesia</h2>
                    <p>Klik kartu untuk detail</p>
                </div>
                <div class="divider-line"></div>
            </div>
            <div class="tabs" id="komoditas-tabs">
                <button class="tab-btn active" data-filter="all">Semua</button>
                <button class="tab-btn" data-filter="pokok">Pokok</button>
                <button class="tab-btn" data-filter="umbi">Umbi-umbian</button>
                <button class="tab-btn" data-filter="kacang">Kacang-kacangan</button>
            </div>
            <div class="komoditas-grid" id="komoditas-grid"></div>
            <div class="section-gap"></div>

        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <img src="element/logo-1.png">
                <p>Dedicated to promoting food security in Indonesia by providing insights, data, and strategies to support sustainable agriculture and equitable food distribution.</p>
            </div>
            <div class="footer-content">
                <h4>Quick Links</h4>
                <ul class="list">
                    <li><a href="prolog.html">Home</a></li>
                    <li><a href="content.php">Content</a></li>
                    <li><a href="conclusion.html">Conclusion</a></li>
                    <li><a href="our-team.html">Our Team</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h4>Follow Us</h4>
                <ul class="social-icons">
                    <li><a href="https://www.instagram.com/falinkiranaa?igsh=MWMzcXo3MTg4eTVhNg=="><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://x.com/annisa7211"><i class="fa-brands fa-x-twitter"></i></a></li>
                </ul>
                <h4>Contact Us</h4>
                <ul class="social-icons">
                    <li><a href="https://wa.me/6287746283769"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="https://mail.google.com/mail/u/0/?tf=cm&fs=1&to=ratucaca0712@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2026 Kelompok 1 Statistika Bisnis . All rights reserved</p>
        </div>
    </footer>

    <script>
        // Data PERSIS sesuai tabel yang diberikan
        const ikpData = [
            ["Aceh", 73.94, 69.9998],
            ["Sumatera Utara", 77.49, 71.4663],
            ["Sumatera Barat", 84.32, 77.7238],
            ["Riau", 70.42, 70.4190],
            ["Jambi", 74.94, 76.1606],
            ["Sumatera Selatan", 74.07, 79.3097],
            ["Bengkulu", 73.39, 69.8867],
            ["Lampung", 82.58, 73.0595],
            ["Kepulauan Bangka Belitung", 70.21, 78.1999],
            ["Kepulauan Riau", 66.29, 71.9564],
            ["DKI Jakarta", 85.13, 71.5183],
            ["Jawa Barat", 82.97, 74.9458],
            ["Jawa Tengah", 85.34, 73.7328],
            ["DI Yogyakarta", 84.15, 77.4392],
            ["Jawa Timur", 83.86, 72.6693],
            ["Banten", 79.25, 77.7846],
            ["Bali", 79.25, 79.8891],
            ["Nusa Tenggara Barat", 78.44, 74.6963],
            ["Nusa Tenggara Timur", 70.91, 58.2444],
            ["Kalimantan Barat", 73.94, 71.5160],
            ["Kalimantan Tengah", 70.16, 73.6193],
            ["Kalimantan Selatan", 82.95, 81.9843],
            ["Kalimantan Timur", 82.95, 80.8176],
            ["Kalimantan Utara", 75.77, 72.5568],
            ["Sulawesi Utara", 76.32, 72.4902],
            ["Sulawesi Tengah", 76.32, 70.3981],
            ["Sulawesi Selatan", 83.82, 74.2975],
            ["Sulawesi Tenggara", 76.68, 67.5555],
            ["Gorontalo", 81.47, 69.7454],
            ["Sulawesi Barat", 71.99, 67.0763],
            ["Maluku", 62.68, 57.1793],
            ["Maluku Utara", 61.44, 58.2717],
            ["Papua Barat", 51.36, 57.4540],
            ["Papua", 40.21, 58.6076],
        ];

        const silhouettes = {
            padi: `<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><rect x="49" y="30" width="2" height="65" rx="1"/><ellipse cx="50" cy="22" rx="6" ry="10"/><ellipse cx="44" cy="28" rx="5" ry="8" transform="rotate(-20 44 28)"/><ellipse cx="56" cy="28" rx="5" ry="8" transform="rotate(20 56 28)"/><ellipse cx="41" cy="36" rx="4" ry="7" transform="rotate(-30 41 36)"/><ellipse cx="59" cy="36" rx="4" ry="7" transform="rotate(30 59 36)"/><path d="M50 55 Q35 50 28 42" stroke-width="2" fill="none" stroke="currentColor"/><path d="M50 65 Q65 58 72 48" stroke-width="2" fill="none" stroke="currentColor"/></svg>`,
            jagung: `<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><ellipse cx="50" cy="48" rx="12" ry="28"/><ellipse cx="50" cy="28" rx="8" ry="4"/><ellipse cx="50" cy="36" rx="10" ry="4"/><ellipse cx="50" cy="44" rx="11" ry="4"/><ellipse cx="50" cy="52" rx="11" ry="4"/><ellipse cx="50" cy="60" rx="10" ry="4"/><ellipse cx="50" cy="68" rx="7" ry="4"/><path d="M50 20 Q55 14 58 8" stroke-width="1.5" fill="none" stroke="currentColor"/><path d="M50 20 Q52 13 54 7" stroke-width="1.5" fill="none" stroke="currentColor"/><path d="M50 20 Q48 13 46 7" stroke-width="1.5" fill="none" stroke="currentColor"/><path d="M38 55 Q25 45 20 30" stroke-width="2.5" fill="none" stroke="currentColor"/><rect x="49" y="76" width="2" height="18" rx="1"/></svg>`,
            ubiKayu: `<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><ellipse cx="50" cy="62" rx="22" ry="14" transform="rotate(-10 50 62)"/><ellipse cx="30" cy="68" rx="10" ry="7" transform="rotate(-20 30 68)"/><ellipse cx="70" cy="65" rx="9" ry="6" transform="rotate(15 70 65)"/><path d="M50 48 L50 30 Q50 20 45 15" stroke-width="3" fill="none" stroke="currentColor" stroke-linecap="round"/><path d="M45 15 Q30 10 22 18 Q30 22 45 15Z"/><path d="M45 15 Q42 5 50 2 Q50 10 45 15Z"/><path d="M45 15 Q55 8 60 14 Q52 18 45 15Z"/><path d="M50 76 Q55 82 52 88" stroke-width="1.5" fill="none" stroke="currentColor"/><path d="M35 72 Q30 80 32 86" stroke-width="1.5" fill="none" stroke="currentColor"/></svg>`,
            ubiJalar: `<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><ellipse cx="50" cy="60" rx="20" ry="16"/><ellipse cx="28" cy="65" rx="10" ry="8" transform="rotate(-15 28 65)"/><ellipse cx="72" cy="63" rx="9" ry="7" transform="rotate(10 72 63)"/><path d="M50 44 Q46 35 40 28 Q35 22 38 16" stroke-width="2" fill="none" stroke="currentColor" stroke-linecap="round"/><path d="M38 16 Q30 10 28 16 Q30 22 38 16Z"/><path d="M38 16 Q42 8 48 14 Q44 20 38 16Z"/><path d="M50 30 Q56 24 60 28 Q56 34 50 30Z"/></svg>`,
            kedelai: `<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M50 90 L50 20" stroke-width="2.5" fill="none" stroke="currentColor" stroke-linecap="round"/><rect x="34" y="25" width="18" height="9" rx="4.5" transform="rotate(-15 34 25)"/><rect x="48" y="35" width="18" height="9" rx="4.5" transform="rotate(10 48 35)"/><rect x="34" y="48" width="18" height="9" rx="4.5" transform="rotate(-20 34 48)"/><rect x="50" y="55" width="16" height="9" rx="4.5" transform="rotate(15 50 55)"/><rect x="36" y="65" width="17" height="9" rx="4.5" transform="rotate(-10 36 65)"/><path d="M50 30 Q38 24 34 28 Q40 34 50 30Z"/><path d="M50 30 Q56 22 62 26 Q58 32 50 30Z"/><path d="M50 50 Q36 44 32 50 Q38 56 50 50Z"/></svg>`,
            kacangTanah: `<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M32 50 Q28 40 34 32 Q40 25 50 26 Q60 25 66 32 Q72 40 68 50 Q72 60 66 68 Q60 75 50 74 Q40 75 34 68 Q28 60 32 50Z"/><path d="M32 50 Q40 48 50 50 Q60 48 68 50" stroke-width="1.5" fill="none" stroke="currentColor" opacity="0.4"/><circle cx="42" cy="38" r="2.5" opacity="0.3"/><circle cx="58" cy="38" r="2.5" opacity="0.3"/><circle cx="38" cy="52" r="2" opacity="0.3"/><circle cx="62" cy="52" r="2" opacity="0.3"/><circle cx="42" cy="64" r="2.5" opacity="0.3"/><circle cx="58" cy="64" r="2.5" opacity="0.3"/><path d="M50 74 L50 86 Q46 90 44 88" stroke-width="1.5" fill="none" stroke="currentColor"/><path d="M50 82 Q54 86 56 84" stroke-width="1.5" fill="none" stroke="currentColor"/></svg>`,
            pisang: `<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M50 10 L50 40" stroke-width="3" fill="none" stroke="currentColor" stroke-linecap="round"/><path d="M50 30 Q62 28 68 22 Q66 38 54 40 Q50 38 50 30Z"/><path d="M50 38 Q64 36 72 32 Q68 48 56 50 Q50 48 50 38Z"/><path d="M50 46 Q62 44 70 42 Q66 56 54 58 Q50 56 50 46Z"/><path d="M50 54 Q60 52 66 52 Q62 64 52 66 Q50 64 50 54Z"/><path d="M38 30 Q26 28 20 22 Q22 38 34 40 Q38 38 38 30Z" transform="scale(-1,1) translate(-100,0)"/><path d="M38 38 Q24 36 16 32 Q20 48 32 50 Q38 48 38 38Z" transform="scale(-1,1) translate(-100,0)"/><path d="M50 70 Q52 78 48 84" stroke-width="2" fill="none" stroke="currentColor"/><ellipse cx="50" cy="86" rx="6" ry="8" transform="rotate(10 50 86)"/></svg>`,
            sagu: `<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><rect x="44" y="40" width="12" height="52" rx="4"/><path d="M50 40 Q42 28 28 22 Q36 32 50 40Z"/><path d="M50 40 Q38 24 30 12 Q40 26 50 40Z"/><path d="M50 40 Q50 24 50 10 Q52 26 50 40Z"/><path d="M50 40 Q62 24 70 12 Q60 26 50 40Z"/><path d="M50 40 Q64 28 78 22 Q66 32 50 40Z"/><path d="M50 40 Q44 34 36 30" stroke-width="1" fill="none" stroke="currentColor" opacity="0.4"/><path d="M50 40 Q56 34 64 30" stroke-width="1" fill="none" stroke="currentColor" opacity="0.4"/><line x1="44" y1="55" x2="56" y2="55" stroke="currentColor" stroke-width="1" opacity="0.3"/><line x1="44" y1="65" x2="56" y2="65" stroke="currentColor" stroke-width="1" opacity="0.3"/><line x1="44" y1="75" x2="56" y2="75" stroke="currentColor" stroke-width="1" opacity="0.3"/></svg>`,
        };

        const komoditasData = [
            { id: 1, name: "Padi", svgKey: "padi", filter: "pokok", tertinggi: "Jawa Timur (9.270.435)", terendah: "Riau (305)", rata: "1.318.169" },
            { id: 2, name: "Jagung", svgKey: "jagung", filter: "pokok", tertinggi: "Jawa Timur (5.142.837)", terendah: "DKI Jakarta (12)", rata: "671.240" },
            { id: 3, name: "Ubi Kayu", svgKey: "ubiKayu", filter: "umbi", tertinggi: "Jawa Tengah (3.142.000)", terendah: "Kep. Riau (150)", rata: "488.320" },
            { id: 4, name: "Ubi Jalar", svgKey: "ubiJalar", filter: "umbi", tertinggi: "Papua (287.345)", terendah: "DKI Jakarta (8)", rata: "52.160" },
            { id: 5, name: "Kedelai", svgKey: "kedelai", filter: "kacang", tertinggi: "Jawa Timur (312.456)", terendah: "DKI Jakarta (3)", rata: "41.820" },
            { id: 6, name: "Kacang Tanah", svgKey: "kacangTanah", filter: "kacang", tertinggi: "Jawa Tengah (155.321)", terendah: "Kep. Riau (20)", rata: "22.540" },
            { id: 7, name: "Pisang", svgKey: "pisang", filter: "pokok", tertinggi: "Jawa Timur (2.100.000)", terendah: "Gorontalo (4.200)", rata: "310.000" },
            { id: 8, name: "Sagu", svgKey: "sagu", filter: "pokok", tertinggi: "Papua (412.000)", terendah: "Sulawesi Barat (300)", rata: "52.000" },
        ];

        // ── CORE LOGIC RENDER TABEL & KLASIFIKASI SKOR ────────────────────────────────
        function scoreClass(v) {
            if (v >= 75) return 'score-high';
            if (v >= 65) return 'score-mid';
            return 'score-low';
        }

        // Fungsi render tabel yang mendukung fitur Filter Kata Kunci
        function renderTable(keyword = "") {
            const tbody = document.getElementById('table-body');
            tbody.innerHTML = '';
            let counter = 0;

            ikpData.forEach((row, i) => {
                // Skala kecocokan nama provinsi (Case Insensitive)
                if (keyword && !row[0].toLowerCase().includes(keyword.toLowerCase())) {
                    return; 
                }
                
                counter++;
                const delta = row[2] - row[1];
                const arrow = delta >= 0 ? '▲' : '▼';
                const color = delta >= 0 ? 'var(--olive-mid)' : '#b85020';
                
                tbody.innerHTML += `<tr>
                    <td>${counter}</td>
                    <td>${row[0]}</td>
                    <td><span class="score-pill ${scoreClass(row[1])}">${row[1].toFixed(2)}</span></td>
                    <td><span class="score-pill ${scoreClass(row[2])}">${row[2].toFixed(4)}</span></td>
                    <td style="color:${color};font-weight:600">${arrow} ${Math.abs(delta).toFixed(2)}</td>
                </tr>`;
            });

            // Jika keyword tidak menghasilkan data apapun
            if (counter === 0) {
                tbody.innerHTML = `<tr><td colspan="5" class="text-center text-muted py-3">Provinsi dengan kata kunci "${keyword}" tidak ditemukan.</td></tr>`;
            }
        }

        // Jalankan render tabel bawaan pertama kali
        renderTable();

        // ── FITUR MANAGEMENT SEARCH & RIWAYAT (LOCALSTORAGE) ───────────────────────
        const searchInput = document.getElementById('search-input');
        const historyDropdown = document.getElementById('history-dropdown');
        const historyItems = document.getElementById('history-items');

        function getHistory() {
            const history = localStorage.getItem('ikp_search_history');
            return history ? JSON.parse(history) : [];
        }

        function saveHistory(keyword) {
            if (!keyword.trim()) return;
            let history = getHistory();
            
            // Hapus kata kunci lama jika terduplikasi agar riwayat terbaru naik ke atas
            history = history.filter(item => item.toLowerCase() !== keyword.toLowerCase());
            history.unshift(keyword.trim());
            
            // Batasi riwayat pencarian maksimal hanya 5 item terakhir
            if (history.length > 5) history.pop();
            
            localStorage.setItem('ikp_search_history', JSON.stringify(history));
            showHistory();
        }

        function removeHistoryItem(e, itemToRemove) {
            e.stopPropagation(); // Menahan agar dropdown tidak langsung tertutup
            let history = getHistory();
            history = history.filter(item => item !== itemToRemove);
            localStorage.setItem('ikp_search_history', JSON.stringify(history));
            showHistory();
            searchInput.focus();
        }

        function clearAllHistory(e) {
            e.stopPropagation();
            localStorage.removeItem('ikp_search_history');
            showHistory();
            searchInput.focus();
        }

        function showHistory() {
            const history = getHistory();
            if (history.length === 0) {
                historyDropdown.style.display = 'none';
                return;
            }
            
            historyItems.innerHTML = '';
            history.forEach(item => {
                historyItems.innerHTML += `
                    <div class="history-item" onclick="selectHistory('${item}')">
                        <span><i class="fa-solid fa-clock-rotate-left me-2 text-muted"></i>${item}</span>
                        <button type="button" class="btn p-0 border-0 text-danger fw-bold" style="font-size:0.85rem;" onclick="removeHistoryItem(event, '${item}')">&times;</button>
                    </div>
                `;
            });
            
            if (document.activeElement === searchInput) {
                historyDropdown.style.display = 'block';
            }
        }

        function selectHistory(item) {
            searchInput.value = item;
            handleSearch();
            historyDropdown.style.display = 'none';
        }

        function handleSearch() {
            const keyword = searchInput.value;
            renderTable(keyword);
            saveHistory(keyword);
            
            // Mengarahkan tampilan (scroll smooth) otomatis ke section tabel data
            document.getElementById('guider').scrollIntoView({ behavior: 'smooth' });
        }

        // Listener untuk Input Event
        searchInput.addEventListener('focus', showHistory);
        
        // Sembunyikan riwayat saat klik di luar area search navbar
        document.addEventListener('click', (e) => {
            if (!searchInput.contains(e.target) && !historyDropdown.contains(e.target)) {
                historyDropdown.style.display = 'none';
            }
        });

        // Tampilkan pencarian live kembali utuh jika input dikosongkan (tombol x clear)
        searchInput.addEventListener('input', () => {
            if (searchInput.value === "") {
                renderTable("");
            }
        });


        // ── 4 MINI BAR CHARTS ────────────────────────────────────────────────────────
        const sorted2024 = [...ikpData].sort((a, b) => b[1] - a[1]);
        const sorted2025 = [...ikpData].sort((a, b) => b[2] - a[2]);

        const sets = [
            { id: 'bc-24-top', data: sorted2024.slice(0, 3).map(r => [r[0], r[1]]), color: '#7a9132' },
            { id: 'bc-24-bot', data: sorted2024.slice(-3).reverse().map(r => [r[0], r[1]]), color: '#c8a84b' },
            { id: 'bc-25-top', data: sorted2025.slice(0, 3).map(r => [r[0], r[2]]), color: '#7a9132' },
            { id: 'bc-25-bot', data: sorted2025.slice(-3).reverse().map(r => [r[0], r[2]]), color: '#c8a84b' },
        ];

        function drawMiniBar(id, items, color) {
            const W = 300, H = 210, pL = 54, pR = 12, pT = 28, pB = 58;
            const cW = W - pL - pR, cH = H - pT - pB;
            const vals = items.map(i => i[1]);
            const minV = Math.floor(Math.min(...vals) / 10) * 10;
            const maxV = Math.ceil(Math.max(...vals) / 10) * 10 + 5;
            function fy(v) { return pT + (maxV - v) / (maxV - minV) * cH; }
            const bw = (cW / items.length) * 0.52;
            let h = '';
            for (let t = minV; t <= maxV; t += 10) {
                const y = fy(t);
                h += `<line x1="${pL}" y1="${y}" x2="${W - pR}" y2="${y}" stroke="#ece8d4" stroke-width="1"/>`;
                h += `<text x="${pL - 5}" y="${y + 3.5}" text-anchor="end" fill="#7a9132" font-size="9" font-family="DM Sans,sans-serif">${t}</text>`;
            }
            items.forEach((item, i) => {
                const cx = pL + (cW / items.length) * i + (cW / items.length) / 2;
                const x = cx - bw / 2;
                const by = fy(minV);
                const bh = by - fy(item[1]);
                h += `<rect x="${x}" y="${fy(item[1])}" width="${bw}" height="${bh}" rx="4" fill="${color}"><title>${item[0]}: ${item[1].toFixed(2)}</title></rect>`;
                h += `<text x="${cx}" y="${fy(item[1]) - 5}" text-anchor="middle" fill="${color}" font-size="9" font-family="DM Sans,sans-serif" font-weight="700">${item[1].toFixed(1)}</text>`;
                const words = item[0].split(' ');
                if (words.length <= 2) {
                    h += `<text x="${cx}" y="${by + 14}" text-anchor="middle" fill="#3a4218" font-size="9" font-family="DM Sans,sans-serif" font-weight="600">${item[0]}</text>`;
                } else {
                    const mid = Math.ceil(words.length / 2);
                    h += `<text x="${cx}" y="${by + 13}" text-anchor="middle" fill="#3a4218" font-size="8.5" font-family="DM Sans,sans-serif" font-weight="600"><tspan x="${cx}" dy="0">${words.slice(0, mid).join(' ')}</tspan><tspan x="${cx}" dy="11">${words.slice(mid).join(' ')}</tspan></text>`;
                }
            });
            h += `<line x1="${pL}" y1="${pT}" x2="${pL}" y2="${fy(minV)}" stroke="#3d4a1f" stroke-width="1.5"/>`;
            h += `<line x1="${pL}" y1="${fy(minV)}" x2="${W - pR}" y2="${fy(minV)}" stroke="#3d4a1f" stroke-width="1.5"/>`;
            document.getElementById(id).innerHTML = h;
        }

        sets.forEach(s => drawMiniBar(s.id, s.data, s.color));

        // ── KOMODITAS ─────────────────────────────────────────────────────────────────
        function renderKomoditas(filter = 'all') {
            const grid = document.getElementById('komoditas-grid');
            grid.innerHTML = '';
            komoditasData.filter(k => filter === 'all' || k.filter === filter).forEach(k => {
                const div = document.createElement('div');
                div.className = 'komoditas-card';
                div.innerHTML = `
      <div class="komoditas-icon">${silhouettes[k.svgKey]}</div>
      <div class="komoditas-name">${k.name}</div>
      <div style="font-size:.78rem;color:var(--olive-mid)">Klik untuk detail ↓</div>
      <div class="komoditas-detail">
        <div class="stat-row"><span class="stat-label">🏆 Produksi tertinggi</span><span class="stat-val">${k.tertinggi}</span></div>
        <div class="stat-row"><span class="stat-label">📉 Produksi terendah</span><span class="stat-val">${k.terendah}</span></div>
        <div class="stat-row"><span class="stat-label">📊 Rata-rata produksi</span><span class="stat-val">${k.rata}</span></div>
      </div>`;
                div.addEventListener('click', () => div.classList.toggle('active'));
                grid.appendChild(div);
            });
        }
        renderKomoditas();
        document.getElementById('komoditas-tabs').addEventListener('click', e => {
            if (!e.target.classList.contains('tab-btn')) return;
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            e.target.classList.add('active');
            renderKomoditas(e.target.dataset.filter);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>