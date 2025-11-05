    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>EQUIPO</h6>
                        <h1>CONOCE NUESTRO PERSONAL CENDI</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                        <!-- carousel items generated from PHP array to reduce repetition -->
                        <?php
                        $members = range(1,19);
                        foreach ($members as $num): ?>
                            <div class="item">
                                <div class="card">
                                    <img src="img/member/<?php echo $num; ?>.png" class="card-img-top" alt="personal">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function(){
                    if (typeof $ !== 'undefined' && typeof $.fn.owlCarousel !== 'undefined'){
                        $('.team-carousel').owlCarousel({
                            loop:true,
                            autoplay:true,
                            autoplayTimeout:3000,
                            autoplayHoverPause:true,
                            margin:20,
                            nav:true,
                            dots:false,
                            navText:['<i class="bx bx-left-arrow-alt"></i>','<i class="bx bx-right-arrow-alt"></i>'],
                            responsive:{
                                0:{items:1},
                                576:{items:2},
                                768:{items:3},
                                992:{items:4}
                            }
                        });
                    }
                });
            </script>
        </div>
    </section>