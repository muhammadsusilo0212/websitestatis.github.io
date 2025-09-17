<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsilcomp </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

            <!-- Products Section -->
            <section class="section" id="products">
                <div class="container">
                    <div class="section-title">
                        <h2>Our Products</h2>
                        <p>Produk Kami terdiri dari perangkat keras komputer, software, dan layanan IT terbaik</p>
                    </div>
                    <div class="product-grid">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="{{ asset('/image/4.jpg') }}" alt="Nexus Analytics Dashboard showing data visualization and metrics">
                            </div>
                            <div class="product-content">
                                <a href="https://arsilcomp.com/" class="no-underline">
                                <h3>Service Umum </h3>
                                <p>Pemeriksaan dan perbaikan umum, lemot, sering hang, atau restart sendiri.</p>
                                </a>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-img">
                                <img src="{{ asset('/image/1.jpg') }}" alt="SecureConnect encryption software interface with security metrics">
                            </div>
                            <div class="product-content">
                                <a href="https://arsilcomp.com/" class="no-underline">
                                <h3>Perawatan Rutin </h3>
                                <p>Pembersihan fisik (debu, kipas, heatsink) Optimalisasi sistem, ganti thermal paste & pembersihan file sampah </p>
                                </a>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <div class="product-img">
                                <img src="{{ asset('/image/6.png') }}" alt="Nexus Analytics Dashboard showing data visualization and metrics">
                            </div>
                            <div class="product-content">
                                <a href="https://arsilcomp.com/" class="no-underline">
                                <h3>Upgrade Hardware</h3>
                                <p>layanan Upgrade RAM, Hard Disk, dan SSD kami siap meningkatkan kecepatan dan performa perangkat Anda secara signifikan.</p>
                                </a>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-img">
                                <img src="{{ asset('/image/5.jpg') }}" alt="Nexus Analytics Dashboard showing data visualization and metrics">
                            </div>
                            <div class="product-content">
                                <a href="https://arsilcomp.com/" class="no-underline">
                                <h3>Instalasi & Konfigurasi Software</h3>
                                <p>Setup Aplikasi & Sistem Operasi Mulai dari instalasi sistem operasi, driver, hingga software penting.</p>
                                </a>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </section>

           
            <script>
                // Smooth scrolling for navigation links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        
                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        });
                    });
                });
            </script>
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
