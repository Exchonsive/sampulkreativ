<?php
require 'admin/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Sampulkreativ Technology | IT Consultants and Applications Development</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Sampulkreativ Technology | IT Consultants and Applications Development">
    <meta name="robots" content="index,follow,noodp,noydir">
    <meta property="og:title" content=" Sampulkreativ Technology | IT Consultants and Applications Development"/> 
    <meta property="og:site_name" content=" Sampulkreativ Technology"/> 
    <meta property="og:description" content="Sampulkreativ is a consulting services company..."/> 
    <meta property="og:url" content="http://sampulkreativ.com" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="icon" href="img/sampulkreativ-logo.png" type="image/x-icon">
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>


<body>
    <br><br><br>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand px-3" href="#home">
                <img src="img/sampulkreativ-logo.png" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="table"><rect x="1" y="3" width="18" height="1"></rect><rect x="1" y="7" width="18" height="1"></rect><rect x="1" y="11" width="18" height="1"></rect><rect x="1" y="15" width="18" height="1"></rect></svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">LAYANAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portofolio">PORTOFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#chat">CHAT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">KONTAK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/login_admin.php">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home">
        <div class="container" data-aos-duration="1000" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center text-lg-start pt-4 pt-lg-0">
                    <h1 class="home-title">Kami Siap untuk <br> Masa Depan Kreatif</h1>
                    <p class="home-desc">
                        Sampulkreativ Technology menyediakan layanan pengembangan perangkat lunak yang berkualitas untuk transformasi digital perusahaan Anda. Mari mulai proyek impianmu!
                    </p>
                    <a href="#chat" class="btn btn-primary">MULAI TANYA</a>
                </div>
                
                <div class="col-lg-8 text-center text-lg-end">
                    <img src="img/header.jpg" alt="Illustration" class="home-img img-fluid d-block mx-auto">
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#20c997" fill-opacity="1"
            d="M0,192L34.3,197.3C68.6,203,137,213,206,197.3C274.3,181,343,139,411,112C480,85,549,75,617,96C685.7,117,754,171,823,197.3C891.4,224,960,224,1029,224C1097.1,224,1166,224,1234,197.3C1302.9,171,1371,117,1406,90.7L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
    <section id="services" style="background-color: #20c997; margin-top:-5%"><br><br><br>
        <div class="container text-center">
            <p class="fw-bold">Layanan Unggulan</p>
            <h2 class="fw-bold">Layanan yang Kami Tawarkan</h2>
            <br>
            <div class="row mt-4">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="service-card">
                        <i class="fas fa-code service-icon"></i>
                        <h4>Aplikasi Web</h4>
                        <p>Membangun website dengan desain menarik dan sistem handal menggunakan PHP atau Ruby on Rails.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="service-card">
                        <i class="fas fa-mobile-alt service-icon"></i>
                        <h4>Aplikasi Android</h4>
                        <p>Membangun aplikasi Android dengan sistem yang baik dan autentikasi API yang aman.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="service-card">
                        <i class="fab fa-apple service-icon"></i>
                        <h4>Aplikasi iOS</h4>
                        <p>Membangun aplikasi iOS menggunakan bahasa pemrograman Swift yang powerfull.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="service-card">
                        <i class="fas fa-comments service-icon"></i>
                        <h4>Konsultan IT</h4>
                        <p>Kami siap mendengarkan kebutuhan Anda dan memberikan solusi terbaik.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="service-card">
                        <i class="fas fa-camera service-icon"></i>
                        <h4>Multimedia</h4>
                        <p>Mengabadikan momen berharga dan menyulapnya menjadi karya yang kreatif.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="service-card">
                        <i class="fas fa-paint-brush service-icon"></i>
                        <h4>Desain Grafis</h4>
                        <p>Desain grafis untuk menyampaikan pesan dan memperkuat identitas merek Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#20c997" fill-opacity="1"
            d="M0,160L34.3,170.7C68.6,181,137,203,206,197.3C274.3,192,343,160,411,144C480,128,549,128,617,144C685.7,160,754,192,823,213.3C891.4,235,960,245,1029,213.3C1097.1,181,1166,107,1234,80C1302.9,53,1371,75,1406,85.3L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
        </path>
    </svg>

    <section id="portofolio" class="portfolio-section" style="background-color: #f1f1f1;" data-aos-duration="1000" data-aos="fade-up">
        <br><br><br>
        <div class="container text-center" >
            <h2 style="color: #20c997;">Portofolio</h2>
            <p>Samplukreativ Technology memiliki proyek yang bervariasi untuk dijadikan referensi dan portofolio.</p>
    
            <!-- Filter Buttons -->
            <div class="portfolio-filter">
                <button class="filter-btn active" data-filter="all">SEMUA</button>
                <button class="filter-btn" data-filter="web">WEB</button>
                <button class="filter-btn" data-filter="mobile">MOBILE</button>
                <button class="filter-btn" data-filter="design">DESAIN</button>
            </div>
    
            <!-- Portfolio Grid -->
            <div class="row portfolio-grid" >
                <div class="col-md-4 portfolio-item web">
                    <img src="img/project/e-commerce.jpeg" alt="Web Project">
                </div>
                <div class="col-md-4 portfolio-item mobile">
                    <img src="img/project/beli-di-ub.jpeg" alt="Mobile Project">
                </div>
                <div class="col-md-4 portfolio-item web">
                    <img src="img/project/eventme.jpeg" alt="Web Project">
                </div>
                <div class="col-md-4 portfolio-item mobile">
                    <img src="img/project/digital-ebook.jpeg" alt="Mobile Project">
                </div>
                <div class="col-md-4 portfolio-item web">
                    <img src="img/project/kompempar.jpeg" alt="Web Project">
                </div>
                <div class="col-md-4 portfolio-item design">
                    <img src="img/project/resto-app.jpeg" alt="Design Project">
                </div>
                <div class="col-md-4 portfolio-item web">
                    <img src="img/project/pos-dwaroenk.jpeg" alt="Web Project">
                </div>
                <div class="col-md-4 portfolio-item mobile">
                    <img src="img/project/primaax-tire.jpeg" alt="Mobile Project">
                </div>
                <div class="col-md-4 portfolio-item web">
                    <img src="img/project/psikolingua4biz.jpeg" alt="Web Project">
                </div>
                <div class="col-md-4 portfolio-item mobile">
                    <img src="img/project/raja-rumah.jpeg" alt="Mobile Project">
                </div>
                <div class="col-md-4 portfolio-item web">
                    <img src="img/project/sistem-informasi-spiritia.jpeg" alt="Web Project">
                </div>
                <div class="col-md-4 portfolio-item mobile">
                    <img src="img/project/segarmart.jpeg" alt="Mobile Project">
                </div>
            </div>
        </div>
    </section>

    <section id="chat" style="background-color: #17a97b;" data-aos-duration="1000" data-aos="fade-up">
        <br><br><br>
        
        <div class="container">
            <div class="chat-box">
                <div class="chat-header">
                    <i class="fas fa-comments"></i> SampulAssistant
                </div>
    
                <!-- Chat Body -->
                <div class="chat-body" id="chat-body">
                    <div class="chat-message received">
                        <p><i class="fas fa-robot"></i> Halo! Saya sampulAssitant, apakah ada yang ingin anda tanyakan?</p>
                    </div>
                </div>
    
                <!-- Chat Footer -->
                <div class="chat-footer">
                    <button id="rate-btn" data-bs-toggle="modal" data-bs-target="#ratingModal" class="btn btn-info" style="margin-left: 5px;margin-right: 5px; color:white;">
                        <i class="fas fa-star"></i> Beri Rating
                    </button>

                    <input type="text" id="chat-input" placeholder="Ketik pesan...">
                    <button id="send-btn"><i class="fas fa-paper-plane"></i> Kirim</button>
                    <button id="contact-agent-btn" data-bs-toggle="modal" data-bs-target="#contactAgentModal">
                        <i class="fas fa-headset"></i> Kontak Agen
                    </button>
                </div>
            </div>
        </div>
        <br><br><br>
    </section>
    
    <section id="contact" data-aos-duration="1000" data-aos="fade-up" style="margin-top: 5%;">
        <div class="container">
            <h2 class="text-center" style="color: #20c997">Kontak</h2>
            <p class="text-center">Hubungi kami melalui cara-cara berikut. Jangan ragu untuk menghubungi yaa!</p>
    
            <div class="row">
                <!-- Google Maps -->
                <div class="col-md-6">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63366.405835622546!2d107.54117031125892!3d-6.891485915013204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e09c6bba93a5%3A0x5a309b038eb3e673!2sCimahi%2C%20Cimahi%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1708292838430"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
    
                <!-- Contact Information -->
                <div class="col-md-6 contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <a href="https://maps.app.goo.gl/eyFJSbgSto8AQG8h8" target="_blank">Main Work Office</a>
                            <p>BITC Building, HMS Mintaredja St. (Baros), Cimahi City, West Java, Indonesia, Postal Code 40521</p>
                        </div>
                    </div>
    
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <a href="https://maps.app.goo.gl/YR2E7HYEDcz6TdXHA" target="_blank">Branch Work Office 1</a>
                            <p>Software House 1, Jl. C. Bangas III, Menteng, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 74874</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <a href="https://maps.app.goo.gl/bG5VpmfV1jHzB9id8" target="_blank">Branch Work Office 2</a>
                            <p>Software House 2, Kingshouse Residence 2, Jl. Gelora, Babelan Kota, Kec. Babelan, Kabupaten Bekasi 17610</p>
                        </div>
                    </div>
    
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <a href="tel:+6285175052477" target="_blank">+62 851 7505 2477</a>
                            <p>Senin - Jum'at pukul 09.00 - 17.00</p>
                        </div>
                    </div>
    
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <a href="mailto:sampulkreativ@gmail.com" target="_blank">sampulkreativ@gmail.com</a>
                            <p>Kirim pertanyaan kamu kapan saja!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- MODAL RATING -->
    <div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Beri Penilaian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body text-center">
                <p>Bagaimana pendapat kakak tentang layanan chatbot ini?</p>
                <div class="star-rating mb-3">
                <i class="fas fa-star" data-value="1"></i>
                <i class="fas fa-star" data-value="2"></i>
                <i class="fas fa-star" data-value="3"></i>
                <i class="fas fa-star" data-value="4"></i>
                <i class="fas fa-star" data-value="5"></i>
                </div>
                <input type="text" id="rating-name" class="form-control" placeholder="Nama kakak (opsional)">
            </div>
            <div class="modal-footer">
                <button type="button" id="submit-rating" class="btn btn-success "><i class="fas fa-paper-plane"></i> Kirim</button>
            </div>
            </div>
        </div>
    </div>

    <!-- MODAL CONTACT AGENT -->
    <div class="modal fade" id="contactAgentModal" tabindex="-1" aria-labelledby="contactAgentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactAgentModalLabel"><i class="fas fa-user-edit"></i> Contact Agent</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Pilihan Ticket -->
                    <div class="mb-3">
                        <select class="form-select" id="ticketOption">
                            <option value="" selected disabled>Pilih opsi</option>
                            <option value="existing">FAQ</option>
                            <option value="new">Buat Pertanyaan Baru</option>
                        </select>
                    </div>

                    <!-- Form FAQ-->
                    <form id="faq-form" style="display: none;">
                       <?php
                        $query = "SELECT question, answer FROM faq_questions ORDER BY created_at DESC";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                            echo '<div class="accordion" id="faqAccordion">';
                            $index = 0;

                            while ($row = mysqli_fetch_assoc($result)) {
                                $index++;
                                $question = htmlspecialchars($row['question']);
                                $answer = htmlspecialchars($row['answer']);

                                echo '
                                <div class="accordion-item mb-2">
                                    <h2 class="accordion-header" id="heading'.$index.'">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$index.'" aria-expanded="false" aria-controls="collapse'.$index.'">
                                            '.$question.'
                                        </button>
                                    </h2>
                                    <div id="collapse'.$index.'" class="accordion-collapse collapse" aria-labelledby="heading'.$index.'" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            '.$answer.'
                                        </div>
                                    </div>
                                </div>';
                            }

                            echo '</div>';
                        } else {
                            
                        }
                        ?>


                    </form>

                    <!-- Form Buat Ticket Baru -->
                    <form id="new-ticket-form" style="display: none;">
                        <div class="mb-3">
                            <label for="name" class="form-label"><i class="fas fa-user"></i> Nama</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact-user" class="form-label"><i class="fas fa-address-book"></i> No. Telepon / Email</label>
                            <input type="text" class="form-control" id="contact-user" required>
                        </div>
                        <div class="mb-3">
                            <label for="question" class="form-label"><i class="fas fa-comment"></i> Pertanyaan</label>
                            <textarea class="form-control" id="question" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100"><i class="fas fa-paper-plane"></i> Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Copyright 2025. Developed by <b>Maeru Bagas Trisoko</b></p>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
$(document).ready(function () {
    $('#send-btn').click(function () {
        let message = $('#chat-input').val().trim();
        if (message === '') return;

        $.ajax({
            url: 'simpan_chat.php',
            type: 'POST',
            data: { pesan: message },
            success: function (res) {
                console.log('Berhasil disimpan:', res);
                $('#chat-input').val(''); // Kosongin input
            },
            error: function (xhr, status, error) {
                console.error('Gagal:', error);
            }
        });
    });
});
</script>


<script>
$(document).ready(function () {
    $('#new-ticket-form').submit(function (e) {
        e.preventDefault();

        let nama = $('#name').val().trim();
        let kontak = $('#contact-user').val().trim();
        let pertanyaan = $('#question').val().trim();

        $.ajax({
            url: 'simpan_ticket.php',
            type: 'POST',
            data: {
                nama: nama,
                kontak: kontak,
                pertanyaan: pertanyaan
            },
            success: function (res) {
                $('#new-ticket-form')[0].reset();

                Swal.fire({
                    icon: 'success',
                    title: 'Pesan terkirim!',
                    text: 'Tim kami akan segera menghubungi kakak'
                });
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Pesan gagal terkirim!',
                    text: 'Kakak bisa coba lagi ya, mungkin ada masalah koneksi'
                });
            }
        });

       

    });
});
</script>

<script>
$(document).ready(function () {
    let selectedRating = 0;

    // Hover effect & pilih bintang
    $('.star-rating i').on('mouseenter', function () {
        let value = $(this).data('value');
        $('.star-rating i').each(function () {
            $(this).toggleClass('text-warning', $(this).data('value') <= value);
        });
    }).on('mouseleave', function () {
        $('.star-rating i').each(function () {
            $(this).toggleClass('text-warning', $(this).data('value') <= selectedRating);
        });
    });

    // Klik bintang
    $('.star-rating i').on('click', function () {
        selectedRating = $(this).data('value');
        $('.star-rating i').each(function () {
            $(this).toggleClass('text-warning', $(this).data('value') <= selectedRating);
        });
    });

    // Submit rating
    $('#submit-rating').click(function () {
        let nama = $('#rating-name').val().trim();

        if (selectedRating === 0) {
            Swal.fire({
                icon: 'warning',
                title: 'Belum ada rating!',
                text: 'Klik bintang dulu ya kak'
            });
            return;
        }

        $.ajax({
            url: 'simpan_rating.php',
            type: 'POST',
            data: {
                nama: nama,
                rating: selectedRating
            },
            success: function () {
                $('#rating-name').val('');
                selectedRating = 0;
                $('.star-rating i').removeClass('text-warning');
                $('#ratingModal').modal('hide');

                Swal.fire({
                    icon: 'success',
                    title: 'Terima kasih kak!',
                    text: 'Rating kamu sudah kami terima'
                });
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal mengirim!',
                    text: 'Coba lagi ya kak, mungkin ada masalah koneksi'
                });
            }
        });
    });
});
</script>


<script>
    window.onscroll = function () {

        var nav = document.getElementById('nav-pil');
        if (window.scrollY > 50) {

            nav.classList.add('nav-pills');
        } else {

            nav.classList.remove('nav-pills');
        }
    };
</script>
<script>
    const menuItems = document.querySelectorAll('#nav-pil .nav-link');

    window.addEventListener('scroll', () => {
        let fromTop = window.scrollY;
        ms.forEach((item) => {
            const section = document.querySelector(item.getAttribute('href'));
            if (
                section.offsetTop <= fromTop &&
                section.offsetTop + section.offsetHeight > fromTop
            ) {
                meforEach((item) => item.classList.remove('active'));
                item.classList.add('active');
            }
        });
    });
</script>
<script>
    AOS.init();
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".filter-btn");
    const items = document.querySelectorAll(".portfolio-item");

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            let filter = this.getAttribute("data-filter");

            buttons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            items.forEach(item => {
                if (filter === "all" || item.classList.contains(filter)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });
    });
});

</script>

<script>
$(document).ready(function () {
    function sendMessage() {
        var userMessage = $("#chat-input").val().trim();

        if (userMessage !== "") {
            $("#chat-body").append(`<div class="chat-message sent"><p>${userMessage}</p></div>`);

            $.ajax({
                url: "lstm/chat.php", 
                type: "POST",
                data: { message: userMessage },
                success: function (response) {
                    try {
                        var res = JSON.parse(response);
                        var botReply = res.response;

                        $("#chat-body").append(`<div class="chat-message received"><p><i class="fas fa-robot"></i> ${botReply}</p></div>`);
                    } catch (err) {
                        $("#chat-body").append(`<div class="chat-message received"><p><i class="fas fa-robot"></i> (Gagal parsing respons)</p></div>`);
                    }

                    $("#chat-body").scrollTop($("#chat-body")[0].scrollHeight);
                },
                error: function () {
                    $("#chat-body").append(`<div class="chat-message received"><p><i class="fas fa-robot"></i> (Gagal menghubungi chatbot)</p></div>`);
                }
            });

            $("#chat-input").val("");
        }
    }

    $("#send-btn").click(sendMessage);
    $('#chat-input').keypress(function (e) {
        if (e.which == 13) {
            $('#send-btn').click();
            return false;
        }
    });
});
</script>


<script>
    document.getElementById("ticketOption").addEventListener("change", function() {
        let selectedOption = this.value;
        let ticketIdForm = document.getElementById("faq-form");
        let newTicketForm = document.getElementById("new-ticket-form");

        if (selectedOption === "existing") {
            ticketIdForm.style.display = "block";
            newTicketForm.style.display = "none";
        } else if (selectedOption === "new") {
            ticketIdForm.style.display = "none";
            newTicketForm.style.display = "block";
        } else {
            ticketIdForm.style.display = "none";
            newTicketForm.style.display = "none";
        }
    });
</script>

</html>