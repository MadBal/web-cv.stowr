<?php
require 'koneksi.php';
$proyek = query("SELECT * FROM tbl_proyek");
?> 

<div id="projects" class="filter bg-gray">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Proyek</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <button class="button is-checked" data-filter="*">ALL</button>
                        <button class="button" data-filter=".design">DESIGN</button>
                        <button class="button" data-filter=".development">DEVELOPMENT</button>
                        <button class="button" data-filter=".marketing">MARKETING</button>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="element-item development">
                            <a href="article.html">
                            <?php foreach( $proyek as $row) : ?>
                                <img src="img/<?= $row["gambar_produk"]; ?>" alt="alternative">
                                <p><strong>Online banking</strong> - pellentesque tincidunt leo eu laoreedt integer quis vanos compren</p>
                            </a>
                        </div>
                        
                        <?php endforeach; ?>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="images/project-2.jpg" alt="alternative">
                                <p><strong>Loans company</strong> - odio semper, interdum orci molestie, mattis lectus pellentesq aliqu</p>
                            </a>
                        </div>
                        <div class="element-item development">
                            <a href="article.html">
                                <img class="img-fluid" src="images/project-3.jpg" alt="alternative">
                                <p><strong>Refinance firm</strong> - arcu a neque congue finibus doneci malesuada et purus melan bris</p>
                            </a>
                        </div>
                        <div class="element-item design development">
                            <a href="article.html">
                                <img class="img-fluid" src="images/project-4.jpg" alt="alternative">
                                <p><strong>Financial products</strong> - id aliquam ut malesuada eros utr varius blandit aliquam tinci bist</p>
                            </a>
                        </div>
                        <div class="element-item design development">
                            <a href="article.html">
                                <img class="img-fluid" src="images/project-5.jpg" alt="alternative">
                                <p><strong>Credit cards</strong> - magna a feugiat cras a semper tellus in rhoncus vehicula tellus rugo</p>
                            </a>
                        </div>
                        <div class="element-item design marketing">
                            <a href="article.html">
                                <img class="img-fluid" src="images/project-6.jpg" alt="alternative">
                                <p><strong>Software robots</strong> - vel sodales dolor donec a est sapien integer pharetr bilom conva</p>
                            </a>
                        </div>
                        <div class="element-item design marketing">
                            <a href="article.html">
                                <img class="img-fluid" src="images/project-7.jpg" alt="alternative">
                                <p><strong>Company control</strong> - ut quam aliquam elemo de vestibulum fringilla porttitor vanic tres</p>
                            </a>
                        </div>
                        <div class="element-item design marketing">
                            <a href="article.html">
                                <img class="img-fluid" src="images/project-8.jpg" alt="alternative">
                                <p><strong>Audit reports</strong> - sed tempor, metus vel pharetra finibus, est ante hendrerit augue</p>
                            </a>
                        </div>
                        <div class="element-item design marketing">
                            <a href="article.html">
                                <img class="img-fluid" src="images/project-9.jpg" alt="alternative">
                                <p><strong>Big business</strong> - aliquam semper molestie nisi, at porttitor lacus suscipit in mole richter</p>
                            </a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->



    <!-- testimonial -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="images/quotes.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Fusce tincidunt dui nec diam varius venenatis. Nullam tristique rutrum odio, ut tincidunt erat dictum in. Etiam et aliquet mi, et vehicula elit fusce porta ullamcorper</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/satriagunawan.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Dr. Satria Gunawan Zain, S.pd., M.T</div>
                                                    <div class="occupation">Team Leader</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="images/quotes.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Mauris ut mattis nisl. Nunc ultrices nisi eget nisl pulvinar iaculis vitae ac nulla. Nullam fringilla varius blandit. Nam sit amet eleifend justo blogo rovan de chichis kokos venir dab</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/suhartono.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Suhartono, S.Kom., M.Kom</div>
                                                    <div class="occupation">Dosen JTIK</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="images/quotes.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Nam sit amet eleifend justo. Aliquam sit amet lacinia enim, eget facilisis ex. Ut pretium cursus eleifend. Integer feugiat malesuada quam vel basil venis proca jilo</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/Rachmat.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Rachmat, S.Kom., M.T., M.Kom</div>
                                                    <div class="occupation">Direktur Perusahaan</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="images/quotes.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur ing elit. Nulla id nisl tempus risus facilisis efficr ut tincidunt vitae enim non vehicula. Phases vitae metus in felis gravida ultrices zimbo</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="images/abdurahman.jpg" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">Abdurahman Patta, S.Kom., M.T</div>
                                                    <div class="occupation">Dosen JTIK</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
</div>