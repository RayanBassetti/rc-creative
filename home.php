<?php 
/* 
* Template Name: HOME
*/
?>


<?php get_header(); ?>

    <div id="mainBanner_content">
        <div id="mainBanner_text">
            <h1>l'intelligence n'est rien sans ambition<span class="green">.</span></h1>
            <p>Comme Skip, petit mais puissant.</p>
        </div>
        <a href="#aboutUs" class="button_more">en savoir plus</a>
    </div>
</section>

<section id="aboutUs">
    <div id="aboutUs_blocks">
        <div id="aboutUs_block">
            <h1 class="aboutUs_titre">tranquilité d'esprit<span class="green">.</span></h1>
            <p class="description_text">Nous ferons tout pour vous donner les moyens de réaliser vos projets.</p>
        </div>
        <div id="aboutUs_block">
            <h1 class="aboutUs_titre">tarifications juste<span class="green">.</span></h1>
            <p class="description_text">Contrairement à la concurrence, notre tarification vous permettra d'avoir un résultat
                                    à la hauteur de vos attentes.</p>
        </div>
        <div id="aboutUs_block">
            <h1 class="aboutUs_titre">sérieux et professionnalisme<span class="green">.</span></h1>
            <p class="description_text">Une tarification inférieure n'implique pas une qualité inférieure. Nous nous engageons à produire
                                    les solutions les plus adaptées pour vous.</p>
        </div>
    </div>

</section>

<section id="Portfolio">
    <div id="Portfolio_content">
        <div id="Portfolio_pic">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portfolio.jpg" alt="pic">
        </div>
        <div id=Portfolio_text>
            <h1 class="Portfolio_titre">portfolio<span class="green">.</span></h1>
            <p class="Portfolio_soustitre">Nous sommes peu, mais très efficaces.</p>
            <p class="description_text">Nous avons déjà réalisé X projets depuis notre création. Cela nous permet d'enrichir
                                        nos connaissances, et de pratiquer dans l'optique de vous offrir un service toujours 
                                        plus performant et à l'écoute.
                                        Vous pouvez retrouvez toutes nos créations dans le Portfolio :
            </p>
            <a href="#" class="button_more">Voir les projets</a>
        </div>
    </div>
</section>

<section id="Equipe">
    <div id="Equipe_titres">
        <h1 class="Equipe_titre">notre équipe<span class="green">.</span></h1>
        <p class="Equipe_soustitre">Nous sommes jeunes mais très expérimentés.</p>
    </div>
    <div id="Equipe_slots">
        <div class="Equipe_slot">
            <img src="" alt="">
            <div class="Equipe_slot_text">
                <h1 class="Equipe_slot_titre">Rayan</h1>
                <p class="Equipe_slot_post">le dev.</p>
                <p class="description_text">il code le rêve.</p>
            </div>
        </div>
        <div class="Equipe_slot">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cyril.jpg" alt="cyril_pic">
            <div class="Equipe_slot_text">
                <h1 class="Equipe_slot_titre">Cyril</h1>
                <p class="Equipe_slot_post">le designer/market.</p>
                <p class="description_text">il crée et vend du rêve.</p>
            </div>
        </div>
    </div>
    <a href="#" class="button_more">En savoir plus</a>
</section>
<?php get_footer(); ?>