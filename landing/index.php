<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event-U - Platform Event Universitas</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

       :root {
        --primary-color: #003366; /* Biru tua khas Unila */
        --primary-hover: #004c99; /* Biru medium untuk efek hover */
        --secondary-color: #2b7bcb; /* Biru muda modern */
        --text-primary: #1a1a1a; /* Hitam lembut untuk teks utama */
        --text-secondary: #4b5563; /* Abu kebiruan untuk teks sekunder */
        --bg-primary: #ffffff; /* Latar utama putih */
        --bg-secondary: #f3f6fa; /* Abu kebiruan lembut */
        --bg-tertiary: #e6edf5; /* Biru-abu muda untuk lapisan ketiga */
        --border-color: #d1d9e6; /* Abu kebiruan untuk garis/border */
        --success-color: #007d8c; /* Biru kehijauan lembut untuk status berhasil */
        --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
        --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
        --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
        --shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.15);
    }



        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background-color: var(--bg-secondary);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        .header {
            background-color: var(--bg-primary);
            box-shadow: var(--shadow-sm);
            /* position: sticky; */
            top: 0;
            z-index: 100;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo h1 {
            font-size: 28px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0;
        }

        .logo p {
            font-size: 12px;
            color: var(--text-secondary);
            margin-top: 2px;
        }

        .nav {
            display: flex;
            gap: 30px;
        }

        .nav-link {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 500;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-color);
        }

        /* Hero Section */
       .hero {
    position: relative;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    padding: 80px 20px;
    text-align: center;
}


        .hero-content h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 20px;
            margin-bottom: 30px;
            opacity: 0.95;
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-primary {
            background-color: var(--bg-primary);
            color: var(--primary-color);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .btn-block {
            width: 100%;
            display: block;
        }

        /* Search Section */
        .search-section {
            background-color: var(--bg-primary);
            padding: 30px 0;
            box-shadow: var(--shadow-sm);
        }

        .search-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .search-box {
            position: relative;
            max-width: 600px;
            margin: 0 auto;
            width: 100%;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-secondary);
        }

        .search-input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .filter-container {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 20px;
            border: 2px solid var(--border-color);
            background-color: var(--bg-primary);
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 500;
            color: var(--text-secondary);
        }

        .filter-btn:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .filter-btn.active {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        /* Events Section */
        .events-section {
            padding: 50px 0;
        }

        .section-title {
            font-size: 32px;
            margin-bottom: 30px;
            text-align: center;
        }

        .section-description {
            text-align: center;
            color: var(--text-secondary);
            margin-bottom: 40px;
            font-size: 18px;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
        }

        /* Event Card */
        .event-card {
            background-color: var(--bg-primary);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: all 0.3s;
            cursor: pointer;
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .event-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .event-content {
            padding: 20px;
        }

        .event-category {
            display: inline-block;
            padding: 4px 12px;
            background-color: var(--bg-tertiary);
            color: var(--primary-color);
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .event-title {
            font-size: 20px;
            margin-bottom: 10px;
            color: var(--text-primary);
        }

        .event-meta {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 15px;
        }

        .event-meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text-secondary);
            font-size: 14px;
        }

        .event-meta-icon {
            width: 16px;
            height: 16px;
            color: var(--primary-color);
        }

        .event-description {
            color: var(--text-secondary);
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .event-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 1px solid var(--border-color);
        }

        .event-price {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .event-organizer {
            font-size: 12px;
            color: var(--text-secondary);
        }

        /* Submit Section */
        .submit-section {
            background-color: var(--bg-primary);
            padding: 60px 0;
        }

        .submit-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .submit-form {
            background-color: var(--bg-secondary);
            padding: 40px;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-primary);
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-size: 16px;
            font-family: inherit;
            transition: border-color 0.3s;
            background-color: var(--bg-primary);
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1000;
            overflow-y: auto;
        }

        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(2px);
        }

        .modal-content {
            position: relative;
            background-color: var(--bg-primary);
            border-radius: 16px;
            max-width: 700px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: var(--shadow-xl);
            z-index: 1001;
        }

        .modal-small {
            max-width: 400px;
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-secondary);
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s;
            z-index: 1;
        }

        .modal-close:hover {
            background-color: var(--bg-tertiary);
            color: var(--text-primary);
        }

        .event-detail {
            padding: 40px;
        }

        .event-detail-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .event-detail-header {
            margin-bottom: 25px;
        }

        .event-detail-title {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .event-detail-meta {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 30px;
            padding: 20px;
            background-color: var(--bg-secondary);
            border-radius: 12px;
        }

        .event-detail-section {
            margin-bottom: 25px;
        }

        .event-detail-section h4 {
            font-size: 18px;
            margin-bottom: 12px;
            color: var(--text-primary);
        }

        .event-detail-section p {
            color: var(--text-secondary);
            line-height: 1.8;
        }

        .event-detail-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 25px;
            border-top: 2px solid var(--border-color);
        }

        .event-detail-price {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .btn-register {
            padding: 14px 40px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-register:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        /* Success Modal */
        .success-content {
            padding: 50px 40px;
            text-align: center;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background-color: var(--success-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-icon svg {
            color: white;
        }

        .success-content h3 {
            font-size: 24px;
            margin-bottom: 12px;
        }

        .success-content p {
            color: var(--text-secondary);
            margin-bottom: 25px;
        }

        /* Footer */
        .footer {
            background-color: var(--text-primary);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 30px;
        }

        .footer-section h4 {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 8px;
            display: block;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: white;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-bottom p {
            color: rgba(255, 255, 255, 0.6);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }

            .nav {
                gap: 20px;
            }

            .hero-content h2 {
                font-size: 32px;
            }

            .hero-content p {
                font-size: 16px;
            }

            .events-grid {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .submit-form {
                padding: 25px;
            }

            .event-detail {
                padding: 25px;
            }

            .event-detail-title {
                font-size: 24px;
            }

            .event-detail-meta {
                grid-template-columns: 1fr;
            }

            .event-detail-footer {
                flex-direction: column;
                gap: 20px;
                align-items: stretch;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-state-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            color: var(--text-secondary);
            opacity: 0.5;
        }

        .empty-state h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: var(--text-secondary);
        }

        .empty-state p {
            color: var(--text-secondary);
        }

      
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h1>Event-U</h1>
                    <p>Platform Event Universitas</p>
                </div>
                <nav class="nav">
                    <a href="#home" class="nav-link active">Beranda</a>
                    <a href="#events" class="nav-link ">Event</a>
                    <a href="../admin" class="nav-link ">Ajukan Event</a>
                    <a href="../auth/login.php" class="nav-link ">Login</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h2>Temukan Event Kampus Terbaik</h2>
                <p>Jelajahi berbagai lomba, seminar, bazar, dan konser di Universitas Lampung</p>
                <a href="#events" class="btn btn-primary">Lihat Semua Event</a>
            </div>
        </div>
    </section>

    <!-- Search and Filter Section -->
    <section class="search-section" id="events">
        <div class="container">
            <div class="search-container">
                <div class="search-box">
                    <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                    <input type="text" id="searchInput" placeholder="Cari event..." class="search-input">
                </div>
                <div class="filter-container">
                    <button class="filter-btn active" data-category="all">Semua</button>
                    <button class="filter-btn" data-category="lomba">Lomba</button>
                    <button class="filter-btn" data-category="seminar">Seminar</button>
                    <button class="filter-btn" data-category="konser">Konser</button>
                    <button class="filter-btn" data-category="bazar">Bazar</button>
                    <button class="filter-btn" data-category="lainnya">Lainnya</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Grid -->
    <section class="events-section">
        <div class="container">
            <h3 class="section-title">Semua Event</h3>
            <div class="events-grid" id="eventsGrid">
                <!-- Event cards will be dynamically generated -->
            </div>
        </div>
    </section>    

    <!-- Modal for Event Detail -->
    <div class="modal" id="eventModal">
        <div class="modal-overlay" onclick="closeModal()"></div>
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <div id="modalBody">
                <!-- Event details will be loaded here -->
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Event-U</h4>
                    <p>Platform informasi event tingkat universitas terlengkap.</p>
                </div>
                <div class="footer-section">
                    <h4>Link Cepat</h4>
                    <a href="#home">Beranda</a>
                    <a href="#events">Event</a>
                </div>
                <div class="footer-section">
                    <h4>Kontak</h4>
                    <p>Email: info@event-u.com</p>
                    <p>WhatsApp: +62 812-3456-7890</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Event-U. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Sample Events Data
        const eventsData = [
            {
                id: 1,
                title: "Futsal Portela 2025",
                category: "lomba",
                date: "2025-12-15",
                location: "Gedung Serba Guna, Universitas Lampung",
                price: "Rp 150.000",
                organizer: "HIMATRO UNLA",
                description: "Kompetisi futsal tingkat kampus untuk mahasiswa dan umum",
                contact: "@himatro.unila",
                image: "../assets/img/cover/image.png"
            },
            {
                id: 2,
                title: "Himatro Business Outdor",
                category: "bazar",
                date: "2025-11-20",
                location: "Parkiran Mektan",
                price: "Gratis",
                organizer: "Deru Pratama",
                description: "Bazar kegiatan mahasiswa yang menyediakan banyak macam makanan dan minuman hits.",
                contact: "@himatro.unila",
                image: "../assets/img/cover/bazar.jpeg"

            },
            {
                id: 3,
                title: "COMVAGANZA 2025",
                category: "konser",
                date: "2025-12-01",
                location: "Lapangan Bola Unila",
                price: "Rp 150.000",
                organizer: "Himakom",
                description: "Konser musik akbar menampilkan band-band kampus dan artis nasional. Nikmati malam penuh musik, kuliner, dan kebersamaan bersama ribuan mahasiswa.",
                contact: "+62 812-3456-7890",
                image: "../assets/img/cover/konser.jpeg"
            },
            {
                id: 4,
                title: "Donor Darah Himatro",
                category: "lainnya",
                date: "2025-11-25",
                location: "Gedung H, Fakultas Teknik",
                price: "Gratis",
                organizer: "HIMATRO Unila",
                description: "Donor darah Himatro X KSR Unila. Mari donorkan darah anda untuk menyelamatkan ribuan nyawa yang membutuhkan",
                contact: "Fathan Syahbana",
                image: "../assets/img/cover/donor.jpeg"
            },
            {
                id: 5,
                title: "Seminar Nasional - Futura",
                category: "seminar",
                date: "2025-11-25",
                location: "Zoom",
                price: "Gratis",
                organizer: "Himtaro Unila",
                description: "Implementasi teknologi di era digital 5.0",
                contact: "Nizam Al-Gifari(0812345678)",
                image: "../assets/img/cover/seminar.jpeg"
            },
            {
                id: 6,
                title: "Seminar Kebangsaan",
                category: "seminar",
                date: "2025-12-06",
                location: "GSG Unila",
                price: "Gratis",
                organizer: "Unila",
                description: "Kebudayaan dan cinta tanah air",
                contact: "Davi tholiatul Jaizy",
                image: "../assets/img/cover/seminar-kebangsaan.png"
            },
        ];

        // State
        let currentFilter = 'all';
        let currentSearch = '';
        let displayedEvents = [...eventsData];

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            renderEvents();
            initializeEventListeners();
        });

        // Event Listeners
        function initializeEventListeners() {
            // Search input
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', handleSearch);

            // Filter buttons
            const filterButtons = document.querySelectorAll('.filter-btn');
            filterButtons.forEach(btn => {
                btn.addEventListener('click', handleFilter);
            });

            // Form submission
            const submitForm = document.getElementById('submitEventForm');
            submitForm.addEventListener('submit', handleFormSubmit);

            // Smooth scroll for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        }

        // Search Handler
        function handleSearch(e) {
            currentSearch = e.target.value.toLowerCase();
            filterEvents();
        }

        // Filter Handler
        function handleFilter(e) {
            // Update active state
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            e.target.classList.add('active');

            currentFilter = e.target.getAttribute('data-category');
            filterEvents();
        }

        // Filter Events
        function filterEvents() {
            displayedEvents = eventsData.filter(event => {
                const matchesCategory = currentFilter === 'all' || event.category === currentFilter;
                const matchesSearch = event.title.toLowerCase().includes(currentSearch) ||
                                    event.description.toLowerCase().includes(currentSearch) ||
                                    event.organizer.toLowerCase().includes(currentSearch);
                return matchesCategory && matchesSearch;
            });
            renderEvents();
        }

        // Render Events
        function renderEvents() {
            const eventsGrid = document.getElementById('eventsGrid');
            
            if (displayedEvents.length === 0) {
                eventsGrid.innerHTML = `
                    <div class="empty-state" style="grid-column: 1 / -1;">
                        <svg class="empty-state-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                        <h3>Tidak ada event ditemukan</h3>
                        <p>Coba ubah filter atau kata kunci pencarian Anda</p>
                    </div>
                `;
                return;
            }

            eventsGrid.innerHTML = displayedEvents.map(event => `
                <div class="event-card" onclick="showEventDetail(${event.id})">
                    <div class="event-image" style="background-image: url('${event.image}'); background-size: cover; background-position: center;"></div>
                    <div class="event-content">
                        <span class="event-category">${getCategoryLabel(event.category)}</span>
                        <h4 class="event-title">${event.title}</h4>
                        <div class="event-meta">
                            <div class="event-meta-item">
                                <svg class="event-meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span>${formatDate(event.date)}</span>
                            </div>
                            <div class="event-meta-item">
                                <svg class="event-meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span>${event.location.split(',')[0]}</span>
                            </div>
                        </div>
                        <p class="event-description">${event.description}</p>
                        <div class="event-footer">
                            <div>
                                <div class="event-price">${event.price}</div>
                                <div class="event-organizer">${event.organizer}</div>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Show Event Detail
        function showEventDetail(eventId) {
            const event = eventsData.find(e => e.id === eventId);
            if (!event) return;

            const modalBody = document.getElementById('modalBody');
            modalBody.innerHTML = `
                <div class="event-detail">
                    <div class="event-detail-image" style="background-image: url('${event.image}'); background-size: cover; background-position: center;"></div>
                    <div class="event-detail-header">
                        <span class="event-category">${getCategoryLabel(event.category)}</span>
                        <h2 class="event-detail-title">${event.title}</h2>
                    </div>
                    <div class="event-detail-meta">
                        <div class="event-meta-item">
                            <svg class="event-meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span>${formatDate(event.date)}</span>
                        </div>
                        <div class="event-meta-item">
                            <svg class="event-meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>${event.location}</span>
                        </div>
                        <div class="event-meta-item">
                            <svg class="event-meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span>${event.organizer}</span>
                        </div>
                        <div class="event-meta-item">
                            <svg class="event-meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <span>${event.contact}</span>
                        </div>
                    </div>
                    <div class="event-detail-section">
                        <h4>Tentang Event</h4>
                        <p>${event.description}</p>
                    </div>
                    <div class="event-detail-footer">
                        <div class="event-detail-price">${event.price}</div>
                        <button class="btn-register" onclick="handleRegister('${event.title}')">Daftar Sekarang</button>
                    </div>
                </div>
            `;

            document.getElementById('eventModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        // Close Modal
        function closeModal() {
            document.getElementById('eventModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Handle Registration
        function handleRegister(eventTitle) {
            alert(`Terima kasih telah mendaftar untuk "${eventTitle}"!\n\nAnda akan dihubungi oleh penyelenggara melalui kontak yang tersedia.`);
        }

        // Form Submit Handler
        function handleFormSubmit(e) {
            e.preventDefault();
            
            const formData = {
                name: document.getElementById('eventName').value,
                category: document.getElementById('eventCategory').value,
                date: document.getElementById('eventDate').value,
                location: document.getElementById('eventLocation').value,
                price: document.getElementById('eventPrice').value,
                description: document.getElementById('eventDescription').value,
                organizer: document.getElementById('eventOrganizer').value,
                contact: document.getElementById('eventContact').value
            };

            // In a real application, this would send data to a backend
            console.log('Event submitted:', formData);

            // Show success modal
            document.getElementById('successModal').classList.add('active');
            document.body.style.overflow = 'hidden';

            // Reset form
            e.target.reset();
        }

        // Close Success Modal
        function closeSuccessModal() {
            document.getElementById('successModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Helper Functions
        function getCategoryLabel(category) {
            const labels = {
                'lomba': 'Lomba',
                'seminar': 'Seminar',
                'konser': 'Konser',
                'workshop': 'Workshop'
            };
            return labels[category] || category;
        }

        function formatDate(dateString) {
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            const date = new Date(dateString);
            return date.toLocaleDateString('id-ID', options);
        }

        // Close modals on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
                closeSuccessModal();
            }
        });
    </script>
</body>
</html>
