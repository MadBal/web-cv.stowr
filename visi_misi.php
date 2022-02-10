<?php
require 'koneksi.php';
$visimisi = query("SELECT * FROM tbl_visimisi");
?>    
<?php foreach( $visimisi as $row) : ?>
<br><br><br>
<div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading"><span>Visi Misi</span></h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
            <center>
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <img class="decoration-lines" ><span>Visi</span><img class="decoration-lines flipped" >
                            </div>
                            <ul class="list-unstyled li-space-lg">
                                <li><?= $row["visi"]; ?></li>
                                
                            </ul>
                            
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <img class="decoration-lines" ><span>Misi</span><img class="decoration-lines flipped" >
                            </div>
                            <ul class="list-unstyled li-space-lg">
                                <li><?= $row["misi"]; ?></li>
                        
                            </ul>
                            
                        </div>
                    </div>
                    <!-- end of card -->

                    <?php endforeach; ?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->
    </center>
    