<?php
$titolo_chi_siamo = get_field("titolo_chi_siamo", "option");
$blocchi_chi_siamo = get_field("blocchi_chi_siamo", "option");


?>
    <div class="section p-5">
        <div class="container mb-4">
            <div class="row">
                <div class="col-12">
                    <h2 class="max-w-40 text-primary" ><?php echo $titolo_chi_siamo; ?></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <!--start card-->
                    <div  data-aos="fade-right" class="card-wrapper card-space w-100">
                        <div class="card zoom rounded card-bg text-center"  style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?php
						echo $blocchi_chi_siamo[0]["immagine"]["url"];
						?>');background-position: center center;background-size: cover;">
                            <a href="#" class="d-flex card-body align-items-center text-decoration-none mt-5">
                                <h3 class="w-100 text-white "><?php echo $blocchi_chi_siamo[0]["titolo"]; ?>
                                    <br>
                                    <small><?php echo $blocchi_chi_siamo[0]["sottotitolo"]; ?></small>
                                </h3>

                            </a>
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <div class="col-12 col-lg-5">
                    <div class="row">
                        <!--start card-->
                        <div  data-aos="fade-left"  class="card-wrapper card-space w-100">
                            <div class="card zoom card-bg text-center"  style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?php
							echo $blocchi_chi_siamo[1]["immagine"]["url"];
							?>');background-position: center center;background-size: cover;">
                                <a href="#" class="d-flex card-body align-items-center text-decoration-none mt-5">
                                    <h3 class="w-100 text-white "><?php echo $blocchi_chi_siamo[1]["titolo"]; ?>
                                        <br>
                                        <small><?php echo $blocchi_chi_siamo[1]["sottotitolo"]; ?></small>
                                    </h3>
                                </a>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <div class="row">
                        <!--start card-->
                        <div  data-aos="fade-left"  class="card-wrapper card-space w-100">
                            <div class="card zoom card-bg text-center "  style="background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?php
							echo $blocchi_chi_siamo[2]["immagine"]["url"];
							?>');background-position: center center;background-size: cover;">
                                <a href="#" class="d-flex card-body align-items-center text-decoration-none mt-5">
                                    <h3 class="w-100 text-white "><?php echo $blocchi_chi_siamo[2]["titolo"]; ?>
                                        <br>
                                        <small><?php echo $blocchi_chi_siamo[2]["sottotitolo"]; ?></small>
                                    </h3>
                                </a>
                            </div>
                        </div>

                        <!--end card-->
                    </div>

                </div>

            </div>

        </div>

    </div>

<?php
