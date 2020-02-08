<html>
<body>
    <?php
    include 'header.php';
    ?>
    <?php
    include 'menu.php';
    ?>
    <div class="P1">
        <section class="portait">
            <img id="portrait" src="img/JP.jpeg" alt="Photo de Justine Patte"/>
        </section>
        <section class="presentation"> 
            <h4>Qui suis-je ?</h4>
            <span text-align="left"> Titulaire d’un B.T.S diététique et d’une licence professionnelle en Nutrition-Santé, je suis diététicienne nutritionniste diplômée d’état depuis 2018.</br>Je suis formée en ETP (Éducation Thérapeutique du Patient) pour animer les ateliers de groupe.</br>J’exerce à domicile et je réalise des interventions nutritionnelles auprès de collectivités et d’entreprises.</br>J’attache un fort intérêt au suivi de mes patients afin de répondre au mieux à leurs attentes et de les aider à atteindre leurs objectifs.</span>
        </section>
        <section class="com">
            <h4>Commentaire</h2>
            <p>En attente.</p>  
        </section>
        <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '.splide' ).mount();
        } );
        </script>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img id="lien" src="img/interventionlievin2.jpg" alt="Atelier diététique cantine scolaire article">
                    </li>
                    <li class="splide__slide">
                        <img id="lien" src="img/interventionslievin.jpg" alt="Atelier diététique cantine scolaire image">
                    </li>
                    <li class="splide__slide">
                        <img id="lien" src="img/preventionHM.png" alt="Alimentation jeune sportif">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>
</html>