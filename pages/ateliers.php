<?php include("header.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ateliers</title>
    <link rel="stylesheet" href="../assets/css/master.css">
    <link rel="stylesheet" href="../assets/css/ateliers.css">
  </head>
  <body>

    <section id="bandeau">
      <img src="../assets/img/creabandeau.jpg" alt="Le Créa">
      <h2>Lorem Ipsum</h2>
      <p>
        Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi.<br/>
        praediximus enim Montium sub ipso vivendi termino his vocabulis appellatos fabricarum.<br/>
        culpasse tribunos ut adminicula futurae molitioni pollicitos.
      </p>
    </section>

<!-- Renovation Crea -->
    <section id="crea">
    <div id="container">
        <div class="items translate">
            <div class="item"><img src="../assets/img/crea_mise_a_eau.jpg" alt=""></div>
            <div class="item"><img src="../assets/img/crea_sur_eau.jpg" alt=""></div>
            <div class="item"><img src="../assets/img/a_bord_du_crea.jpg" alt=""></div>
        </div>
    </div>
    <div id="controls">
        <button id="left">&lt;</button>
        <button id="right">&gt;</button>
    </div>
    <div id="contenuCrea">
        <h2>Le Créa</h2>
        <p>Cotre bermudien de 12m en bois.<br/>
   C’est un plan Sergent construit en 1963 par le Chantier Rameau à Etel et baptisé Bengali. C’était un racer destiné aux courses-croisières, en particulier celles du RORC. Il a brillé dans de nombreuses régates: Falmouth-Douarnenez, Cowes, Fasnet…Le bateau a ensuite appartenu, sous le nom Thétys 3, à une médecin de marine qui servait sur les ferries transmanche. Il est alors revenu à Bordeaux oû il a peu navigué et s’est petit à petit dégradé.
    Daniel Lys, adhérent de Hissez Haut, l’a racheté en 1992 et a entrepris de le restaurer. Le pont, le rouf, le lest et les aménagements intérieurs ont été refaits. Rebaptisé Créa (nom local de l’esturgeon), le bateau a beaucoup navigué (rassemblements de Brest, Coupe des deux phares…).  sauvé d’un incendie alors qu’il était en maintenance il a été racheté par Mathieu Lemunier et ses frères et sa coque a entièrement été refaite par le charpentier de marine Yvan de Parada dans l’atelier des Marins de Bordeùs. Actuellement basé au Musée Maritime de La Rochelle, le Créa participe à de nombreues navigations.
   La vie du bateau depuis le rachat par les frères Lemunier est détaillée dans le blog crea sergent.blogspot.com.
        </p>
    </div>
  </section>

<!-- Renovation Mehalah -->

<section id="mehalah">
<div id="container2">
    <div class="items translate">
        <div class="item"><img src="../assets/img/mae_mehalah.jpg" alt=""></div>
        <div class="item"><img src="../assets/img/mise_eau_mehalah.jpg" alt=""></div>
        <div class="item"><img src="../assets/img/sur_eau_mehalah.jpg" alt=""></div>
    </div>
</div>
<div id="controls2">
    <button id="left2">&lt;</button>
    <button id="right2">&gt;</button>
</div>
<div id="contenuMehalah">
    <h2>Le Mehalah</h2>
    <p>Cotre bermudien de 12m en bois.<br/>
C’est un plan Sergent construit en 1963 par le Chantier Rameau à Etel et baptisé Bengali. C’était un racer destiné aux courses-croisières, en particulier celles du RORC. Il a brillé dans de nombreuses régates: Falmouth-Douarnenez, Cowes, Fasnet…Le bateau a ensuite appartenu, sous le nom Thétys 3, à une médecin de marine qui servait sur les ferries transmanche. Il est alors revenu à Bordeaux oû il a peu navigué et s’est petit à petit dégradé.
Daniel Lys, adhérent de Hissez Haut, l’a racheté en 1992 et a entrepris de le restaurer. Le pont, le rouf, le lest et les aménagements intérieurs ont été refaits. Rebaptisé Créa (nom local de l’esturgeon), le bateau a beaucoup navigué (rassemblements de Brest, Coupe des deux phares…).  sauvé d’un incendie alors qu’il était en maintenance il a été racheté par Mathieu Lemunier et ses frères et sa coque a entièrement été refaite par le charpentier de marine Yvan de Parada dans l’atelier des Marins de Bordeùs. Actuellement basé au Musée Maritime de La Rochelle, le Créa participe à de nombreues navigations.
La vie du bateau depuis le rachat par les frères Lemunier est détaillée dans le blog crea sergent.blogspot.com.
    </p>
</div>
</section>

    <script>
    (function() {
        var container = document.querySelector("#container","#container2");
        var left = document.querySelector("#left","#left2");
        var right = document.querySelector("#right","#right2");
        var current = 0;
        var count = container.firstElementChild.childElementCount;
        left.addEventListener('click', function(e) {
            if (current > 0) current--;
            else current = count-1;
            slide();
        });
        right.addEventListener('click', function(e) {
            if (current < count-1) current++;
            else current = 0;
            slide();
        });

        function slide() {
            var width = parseInt(getComputedStyle(container).width);
            var pos = width * current * -1;
            container.firstElementChild.style.left = pos + 'px';
        }
        slide();
    })();
</script>


  </body>

</html>
