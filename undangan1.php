<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Imam & Afri</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="font-secondary text-white mb-n2">Jack <span class="text-primary">&</span> Rose</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#story" class="nav-item nav-link">Story</a>
                <a href="#gallery" class="nav-item nav-link">Gallery</a>
            </div>
            <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                <h1 class="font-secondary text-white mb-n2">Imam <span class="text-primary">&</span> Afri</h1>
            </a>
            <div class="navbar-nav mr-auto py-0">
                <a href="#family" class="nav-item nav-link">Family</a>
                <a href="#event" class="nav-item nav-link">Event</a>
                <a href="#rsvp" class="nav-item nav-link">RSVP</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-3.jpeg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">Imam & Afri</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">Hadiri Acara Kami</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                >
                                <span></span>
                            </button>
                            <audio hidden autoplay loop>
                                <source src="music/Miki Matsubara.mp3" type="audio/mpeg">
                                Browsermu tidak mendukung tag audio
                              </audio>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-4.jpeg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">Imam & Afri</h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">We're getting married</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Tentang mempelai</h6>
                <h1 class="font-secondary display-4">Pria & Wanita</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row m-0 mb-4 mb-md-0 pb-2 pb-md-0">
                <div class="col-md-6 p-0 text-center text-md-right">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h3 class="mb-3">Mempelai Pria</h3>
                        <p>Putra pertama dari bapak iwan yang punya rx king merah</p>
                        <h3 class="font-secondary font-weight-normal text-muted mb-3"><i class="fa fa-male text-primary pr-3"></i>Imam</h3>
                        <div class="position-relative">
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/imam.jpeg" style="object-fit: cover;">
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-6 p-0" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/afri.jpeg" style="object-fit: cover;">
                </div>
                <div class="col-md-6 p-0 text-center text-md-left">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <h3 class="mb-3">Mempelai Wanita</h3>
                        <p>Putri pertama dari fulan</p>
                        <h3 class="font-secondary font-weight-normal text-muted mb-3"><i class="fa fa-female text-primary pr-3"></i>Afri</h3>
                        <div class="position-relative">
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Story Start -->
    <div class="container-fluid py-5" id="story">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Story</h6>
                <h1 class="font-secondary display-4">Cerita Cinta Kami</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="container timeline position-relative p-0">
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <img class="img-fluid mr-md-3" src="img/story-1.jpg" alt="">
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3">
                            <h4 class="mb-2">Pertemuan pertama</h4>
                            <p class="text-uppercase mb-2">01 Jan 2050</p>
                            <p class="m-0">Pertemuan kami....</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 mr-md-3">
                            <h4 class="mb-2">Kencan Pertama</h4>
                            <p class="text-uppercase mb-2">01 Jan 2050</p>
                            <p class="m-0">Kencan pertama kami....</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <img class="img-fluid ml-md-3" src="img/story-2.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <img class="img-fluid mr-md-3" src="img/story-3.jpg" alt="">
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3">
                            <h4 class="mb-2">Lamaran</h4>
                            <p class="text-uppercase mb-2">01 Jan 2050</p>
                            <p class="m-0">Lamaran......</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 mr-md-3">
                            <h4 class="mb-2">Pernikahan</h4>
                            <p class="text-uppercase mb-2">01 Jan 2050</p>
                            <p class="m-0">Di....</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <img class="img-fluid ml-md-3" src="img/story-4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Story End -->


    <!-- Gallery Start -->
    <div class="container-fluid bg-gallery" id="gallery" style="padding: 120px 0; margin: 90px 0;">
        <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Gallery</h6>
            <h1 class="font-secondary display-4 text-white">Gallery Foto kami</h1>
            <i class="far fa-heart text-white"></i>
        </div>
        <div class="owl-carousel gallery-carousel">
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/agung.jpeg" alt="">
                <a href="img/gallery-1.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/botak.jpeg" alt="">
                <a href="img/gallery-2.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/babon.jpeg" alt="">
                <a href="img/gallery-3.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/mangap.jpeg" alt="">
                <a href="img/gallery-4.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/gallery-5.jpg" alt="">
                <a href="img/gallery-5.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="img/gallery-6.jpg" alt="">
                <a href="img/gallery-6.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Event Start -->
    <div class="container-fluid py-5" id="event">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Acara</h6>
                <h1 class="font-secondary display-4">Acara Pernikahan Kami</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h5 class="font-weight-normal text-muted mb-3 pb-3">Di sini kami.....</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <img class="img-fluid mb-4" src="img/event-1.jpg" alt="">
                        <h4 class="mb-3">Acara Rumahan</h4>
                        <p class="mb-2">Kediaman Mempelai Pria</p>
                        <p class="mb-0">22 Juni 2025</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-left ml-md-3">
                        <img class="img-fluid mb-4" src="img/event-2.jpg" alt="">
                        <h4 class="mb-3">Acara Utama</h4>
                        <p class="mb-2">Kediaman Mempelai Wanita</p>
                        <p class="mb-0">25 Juni 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->


 

    <!-- RSVP Start -->
    <div class="container-fluid py-5" id="rsvp">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">RSVP</h6>
                <h1 class="font-secondary display-4">Hadiri Acara Kami</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <form id="rsvpForm">
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3" name="name" placeholder="Your Name" required/>
                                </div>
                                <div class="form-group col-sm-6">
                                    <select class="form-control bg-secondary border-0 py-4 px-3" name="attendance" required>
                                        <option value="hadir">Ya, Saya Akan Hadir</option>
                                        <option value="tidak_hadir">Maaf, Saya Tidak Bisa Hadir</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control bg-secondary border-0 py-2 px-3" name="message" rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit">Kirim Pesan & Doa</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- RSVP Messages Display -->
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="text-center mb-4">Pesan & Doa</h3>
                    <div id="rsvpMessages" class="row">
                        <!-- Messages will be loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RSVP End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5" id="contact" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="section-title position-relative text-center">
                <h1 class="font-secondary display-3 text-white">Terima kasih, Kami Tunggu Kehadirannya</h1>
                <i class="far fa-heart text-white"></i>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
            </div>

            <p class="m-0">&copy; <a class="text-primary" href="#">Nama domain</a>. Designed by <a class="text-primary" href="https://htmlcodex.com">Arf</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- Audio Element -->
    <audio id="bgMusic" loop>
        <source src="music/background-music.mp3" type="audio/mpeg">
    </audio>

    <!-- Music Control Button -->
    <button id="musicControl" class="btn btn-lg btn-outline-primary btn-lg-square music-control">
        <i class="fa fa-music"></i>
    </button>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- RSVP Script -->
    <script>
        // Function to load RSVP messages
        function loadRSVPMessages() {
            $.get('get_rsvp_messages.php', function(response) {
                const data = JSON.parse(response);
                if (data.status === 'success') {
                    const messagesHtml = data.data.map(msg => `
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">${msg.name}</h5>
                                    <p class="card-text">${msg.message}</p>
                                    <small class="text-muted">Kehadiran: ${msg.attendance === 'hadir' ? 'Ya, Akan Hadir' : 'Tidak Bisa Hadir'}</small>
                                </div>
                            </div>
                        </div>
                    `).join('');
                    $('#rsvpMessages').html(messagesHtml);
                }
            });
        }

        // Handle form submission
        $('#rsvpForm').on('submit', function(e) {
            e.preventDefault();
            const formData = $(this).serialize();

            $.post('process_rsvp.php', formData, function(response) {
                const data = JSON.parse(response);
                if (data.status === 'success') {
                    alert('RSVP berhasil dikirim!');
                    $('#rsvpForm')[0].reset();
                    loadRSVPMessages();
                } else {
                    alert('Error: ' + data.message);
                }
            });
        });

        // Load messages when page loads
        $(document).ready(function() {
            loadRSVPMessages();
        });
    </script>
</body>

</html>