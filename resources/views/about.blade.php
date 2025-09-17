<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsilcomp</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>    
            <!-- Header & Navigation -->
            <header>
                
                <div class="container">
                    <nav>
                        
                        <ul class="nav-links">
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            <li><a href="{{ url('/product') }}">Products</a></li>
                            <li><a href="{{ url('/about') }}">About Me</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>


        <div class="container border p-4">
            <h2 class="mb-4">Tentang Saya</h2>

            <div class="row">
            <div class="col-md-8">
                <table class="profile-table">
                <tbody>
                    <tr>
                    <td>NAMA</td>
                    <td>: MUHAMMAD SUSILO</td>
                    </tr>
                    <tr>
                    <td>NIM</td>
                    <td>: 6304250087</td>
                    </tr>
                    <tr>
                    <td>PRODI</td>
                    <td>: REKAYASA PERANGKAT LUNAK</td>
                    </tr>
                    <tr>
                    <td>No Kontak</td>
                    <td>: 0822-8855-4446</td>
                    </tr>
                    <tr>
                    <td>Media Sosial</td>
                    <td>
                        <ul class="mb-0">
                        <li>IG: @arsilsiloms</li>
                        <li>Email: muhammadsusilo444@gmail.com</li>
                        </ul>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>

            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <div
                class="profile-photo"
                style="
                    width: 200px;
                    height: 300px;
                    background-color: #cbd5e0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-radius: 10px;
                    border: 1px solid #333;
                    overflow: hidden;
                "
                >
                <img
                    src="{{ asset('/image/pasfoto.jpg') }}"
                    alt="Foto Profil"
                    style="width: 100%; height: 100%; object-fit: cover"
                />
                </div>
            </div>
            </div>

            <<div class="row mt-5">
                <div class="col-12">
                    <div
                        class="video-box border p-3 text-center"
                        style="border-radius: 8px; box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1)">
                        
                        <h5 class="mb-3">Video Produk</h5>
                        
                        <iframe width="560" height="315"
  src="https://www.youtube.com/embed/VWHfcZeYk-g"
  title="YouTube video player"
  frameborder="0"
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
  allowfullscreen
  style="width: 100%; height: 315px; border-radius: 8px">
</iframe>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="footer-content">
                        <div class="footer-column">
                            <h3>Arsil Computer Service</h3>
                            <p>Teknologi yang bekerja untuk Anda — bukan sebaliknya.</p>
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="footer-column">
                            <h3>Products</h3>
                            <p>Contact</p>
                            <p>about</p>
                        </div>
                        <div class="footer-column">
                            <h3>Contact Info</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Jl. Pembangunan II, Bengkalis</p>
                            <p><i class="fas fa-phone"></i> 0822-8855-4446</p>
                            <p><i class="fas fa-envelope"></i> muhammadsusilo444@gmail.com</p>
                        </div>
                    </div>
                    <div class="text-center py-3">
                        <p>&copy; 2025 muhammadsusilo. dibuat dengan <i class="fas fa-heart text-danger"></i></p>
                    </div>
                </div>
            </footer>
                    

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
