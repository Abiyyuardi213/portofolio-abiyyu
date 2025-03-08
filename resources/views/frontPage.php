<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            background: linear-gradient(135deg, #007bff, #6610f2);
            padding: 120px 0;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero-content {
            text-align: left;
        }
        .hero-section h1 {
            font-size: 48px;
            font-weight: 600;
            white-space: nowrap; /* Mencegah teks melipat ke baris baru */
        }
        .hero-section p {
            font-size: 18px;
            font-weight: 300;
        }
        .profile-img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            margin-left: 30px;
        }
        .hero-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .cta-button {
            margin-top: 20px;
            font-weight: 400;
            padding: 10px 30px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }
        .card {
            margin-bottom: 20px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            background-color: white;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card h3 {
            font-weight: 600;
            color: #007bff;
        }
        .card p {
            color: #6c757d;
        }
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .section-title {
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 40px;
            color: #343a40;
            text-align: center;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background-color: #007bff;
            margin: 10px auto 0;
        }
        @media (max-width: 768px) {
            .hero-container {
                flex-direction: column;
                text-align: center;
            }
            .hero-content {
                text-align: center;
            }
            .hero-section h1 {
                font-size: 32px; /* Ukuran font lebih kecil untuk mobile */
                white-space: nowrap; /* Pastikan teks tidak melipat */
                margin: 0 auto; /* Pusatkan teks */
            }
            .profile-img {
                margin: 20px 0;
            }
        }
        @media (max-width: 480px) {
            .hero-section h1 {
                font-size: 28px; /* Ukuran font lebih kecil untuk layar sangat kecil */
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">MyPortofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Keterampilan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Pengalaman</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#organization">Organisasi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container hero-container">
            <img src="/public/image/2025_02_12_14_32_IMG_3512.jpg" alt="Profile Picture" class="profile-img">
            <div class="hero-content">
                <h1>R. Abiyyu Ardi Lian P</h1>
                <p>IT Support & Web Developer</p>
                <a href="#about" class="btn btn-light btn-lg cta-button">Tentang Saya</a>
                
                <!-- Tambahkan ikon GitHub, LinkedIn, dan Instagram -->
                <div class="social-icons mt-4">
                    <a href="https://github.com/username" target="_blank" class="text-white me-3">
                        <i class="fab fa-github fa-2x"></i> <!-- Ikon GitHub -->
                    </a>
                    <a href="https://linkedin.com/in/username" target="_blank" class="text-white me-3">
                        <i class="fab fa-linkedin fa-2x"></i> <!-- Ikon LinkedIn -->
                    </a>
                    <a href="https://instagram.com/username" target="_blank" class="text-white">
                        <i class="fab fa-instagram fa-2x"></i> <!-- Ikon Instagram -->
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container my-5 fade-in">
        <h2 class="section-title">Tentang Saya</h2>
        <div class="row">
            <!-- Card untuk Informasi Pribadi -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-primary"><i class="fas fa-user me-2"></i>Informasi Pribadi</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-phone me-2 text-secondary"></i>
                                <strong>Phone:</strong> +62 811 3017 176
                            </li>
                            <li class="mb-3">
                                <i class="fab fa-whatsapp me-2 text-secondary"></i>
                                <strong>WhatsApp:</strong> 0895 3970 43901
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope me-2 text-secondary"></i>
                                <strong>Email:</strong> abiyyuardilian213@gmail.com
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-map-marker-alt me-2 text-secondary"></i>
                                <strong>Lokasi:</strong> Surabaya, Jawa Timur
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card untuk Deskripsi Diri -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-primary"><i class="fas fa-info-circle me-2"></i>Singkat tentang saya</h3>
                        <p class="card-text">
                            Hallo.. Nama lengkap saya R. Abiyyu Ardi Lian Permadi, sebagai sapaan akrab, saya sering dipanggil Abiyyu.
                            Saya adalah anak kedua dari 3 bersaudara. Tempat tinggal saya untuk saat ini di Kota Surabaya, Jawa Timur.
                        </p>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-primary"><i class="fas fa-info-circle me-2"></i>Deskripsi Diri</h3>
                        <p class="card-text">
                            Saya adalah mahasiswa Teknik Informatika dari Institut Teknologi Adhi Tama Surabaya atau lebih dikenal
                            sebagai ITATS. Saat ini saya sedang menempuh perkuliahan di semester 4. Saya memiliki berbagai pengalaman
                            kerja, namun saya masih mendalami dan memperbanyak pengalaman dibidang IT. Fokus karir saya saat ini adalah
                            sebagai Web Developer Code Igniter & PHP Native, saya juga aktif sebagai Asisten Laboratorium di Kampus ITATS,
                            serta aktif dalam kegiatan organisasi mahasiswa didalam lingkungan kampus ITATS. Untuk saat ini saya juga
                            terlibat dalam proyek perusahaan tempat dimana saya bekerja, menjadikan saya agar terus berusaha mengembangkan
                            diri dan memberikan kontribusi yang terbaik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="container my-5 fade-in">
        <h2 class="section-title">Pengalaman Kerja</h2>
        <div class="row">
            <!-- Card untuk Setiap Pengalaman Kerja -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-primary"><i class="fas fa-briefcase me-2"></i>Maintenance Technician</h3>
                        <p class="text-muted"><i class="fas fa-building me-2"></i>PT. TPPI | Nov 2019 - Jan 2021</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Sebagai operator teknisi perpipaan</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Teknisi Legal Senior proyek pengeboran minyak</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Teknisi perpipaan tingkat 2 Distrik 44 laut jawa</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-primary"><i class="fas fa-briefcase me-2"></i>Drafter</h3>
                        <p class="text-muted"><i class="fas fa-building me-2"></i>PT. Wijaya Karya | Mar 2021 - Des 2021</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Junior Drafter pada proyek pembangunan Hotel Integrated Soekarno-Hatta Airport</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Project Analysist pada proyek TOD Karawang</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Daily Drafter untuk beberapa proyek di Jawa Timur</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-primary"><i class="fas fa-briefcase me-2"></i>Public Relation</h3>
                        <p class="text-muted"><i class="fas fa-building me-2"></i>PT. Kereta Api Indonesia | Mar 2022 - Sept 2022</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Pembicara rapat kerja tahunan PT. KAI</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Pembicara rapat kerja tahunan BUMN</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Pembicara agenda tahunan PT. KAI Daerah Operasi 8</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-primary"><i class="fas fa-briefcase me-2"></i>Operation Staff</h3>
                        <p class="text-muted"><i class="fas fa-building me-2"></i>PT. Kereta Api Indonesia | Oct 2022 - Jun 2024</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Penyelia operasi UPT Crew KA Sidotopo</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Perancang Grafik Perjalanan KA Gapeka 2023</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-primary"><i class="fas fa-briefcase me-2"></i>Assistant Chief Operating Officer</h3>
                        <p class="text-muted"><i class="fas fa-building me-2"></i>PT. Kereta Api Indonesia | Jun 2024 - Des 2024</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Asisten Kepala Operasional EVP Daop 8</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Perancang Grafik Perjalanan KA Gapeka 2025</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-primary"><i class="fas fa-briefcase me-2"></i>Web Developer & Front End Engineer</h3>
                        <p class="text-muted"><i class="fas fa-building me-2"></i>PT. Kereta Api Indonesia | Des 2024 - Current</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Develop Sistem Manajemen Pegawai Daerah Operasi 8 (BACKEND)</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Develop Official Landing Page PT. KAI (FRONTEND)</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Develop Sistem Absensi Pegawai (BACKEND FRONTEND)</li>
                            <li><i class="fas fa-check-circle me-2 text-success"></i>Develop Sistem Keuangan (BACKEND FRONTEND)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="container my-5 fade-in">
        <h2 class="section-title">Keterampilan</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <i class="fas fa-code fa-3x mb-3" style="color: #007bff;"></i>
                    <h3>Web Development</h3>
                    <p>HTML, CSS, JavaScript, React, Node.js</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <i class="fas fa-database fa-3x mb-3" style="color: #007bff;"></i>
                    <h3>Data Analysis</h3>
                    <p>Python, SQL, Pandas, Tableau</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <i class="fas fa-cloud fa-3x mb-3" style="color: #007bff;"></i>
                    <h3>Cloud Computing</h3>
                    <p>AWS, Google Cloud, Docker</p>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="container my-5 fade-in">
        <h2 class="section-title">Pengalaman Pendidikan</h2>
        <div class="card p-4">
            <h3>Nama Universitas</h3>
            <p class="text-muted">Gelar | 2014 - 2018</p>
            <ul>
                <li>Deskripsi kegiatan atau pencapaian selama pendidikan.</li>
            </ul>
        </div>
    </section>

    <section id="organization" class="container my-5 fade-in">
        <h2 class="section-title">Pengalaman Organisasi</h2>
        <div class="card p-4">
            <h3>Nama Organisasi</h3>
            <p class="text-muted">Posisi | Tahun</p>
            <ul>
                <li>Deskripsi kegiatan atau pencapaian selama organisasi.</li>
            </ul>
        </div>
    </section>

    <footer class="text-center py-4 bg-dark text-white">
        <p>&copy; 2023 Nama Lengkap. All rights reserved.</p>
    </footer>

    <script>
        const fadeIns = document.querySelectorAll('.fade-in');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.2 });
        fadeIns.forEach(element => observer.observe(element));
    </script>
</body>
</html>