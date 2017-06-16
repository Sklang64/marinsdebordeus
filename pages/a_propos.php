<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>A propos</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
  </head>
  <body>

      <?php
        include("header.php");
      ?>

      <!--Historique-->
     <!--Photo Vague -->
     <section id="section1">
       <img class="picture" src="assets/img/bg_about01.jpg" alt="photo_bateau" title="photo Les Marins de Bordeus"/>

    <!--Histoire assos -->
     <article class="first">
       <h1>HISTOIRE DE MARINS</h1>
    <!--Hissez haut-->
       <div class="col-1">
         <h2>Au départ: Hissez Haut Marins de Gascogne</h2>
         <p>L'association est née en 1989 à Meschers (port à côté de Royan).
           Créés par René Lys, Bernard Lacampagne, officier de marine marchande, Yvon Gréaud, patron lamaneur et Georges Portal.
           En 1990, l'association s'installe à Bordeaux au Hangar 26 du Bassin à Flots n°2 et commence vraiment l'activité de restauration de bateaux. Une trentaine de bateaux a été restaurée en vingt ans. Le Teazer, voilier anglais de 1880, le Gitana III, ancien yacht des Rotschild, le Créa, plan Sergent des années soixante avec un beau palmarès ainsi que de nombreux bateaux de pêche.</p></div>
    <!--Les Marins de Bordeus-->
       <div class="col-2">
         <h2>La relève: Les Marins de Bordeus </h2>
         <p>L'association Les Marins de Bordeus sont les héritiers d'Hissez haut. L'activité est toujours la restauration du patrimoine maritime et fluviale.
           Elle est actuellement logée au Hangar 29. L'association participe aux manifestations maritimes comme La semaine du Golfe du Morbihan, Les Voiles d'estuaire à Royan, La RBBAIV des Chantiers de Tramasset (La Rencontre des Bateaux en Bois et Autres Instruments à Vent...).
           D'autre part, l'association milite pour le maintien des activités nautiques des Bassins à Flots et de Bacalan en général en collaboration avec les autres associations nautiques du site.
           Elle est de ce fait une interlocutrice auprès des Institutions locales.</p></div>
     </article>

   </section>

   <!--Parallaxe-->
   <section class="parallax">
   <div class="parallax p1" alt="photo_parallaxe" title="photo Les Marins de Bordeus">
     <h2>"Un lieu à la marge de la ville et du temps"</h2>
   </div>
   </section>

   <!--Les Bassins à Flots -->
   <section class="second">
      <div class="col-1">
       <h2>Les Bassins à flot: héritage maritime bordelais</h2>
       <p>Les Bassins à flot ont profondément marqué l'histoire de Bordeaux et son quartier de Bacalan. Fort d'un passé maritime, industriel et marchand, ce nouveau quartier répond à une nouvelle dynamique économique orientée vers le fleuve.
Au fil du temps, le quartier a su se renouveler tout en gardant son authenticité liée à la mer.
De la construction du premier bassin au XIXème siècle à l'élaboration du nouveau quartier résidentiel, les Bassins à flot ont su préservé leur identité forte, leur âme militante.</p>
      </div>
      <div class="col-2"><img src="assets/img/archive.jpg" alt="photo_bassin_a_flot" title="Photo Archives Grand Port Maritime de Bordeaux">
    </section>

<!--Les projets-->
    <section class="projet">
      <h2>Les rénovations des Marins</h2>
        <p>"Les Marins de Bordeus, attentifs et vigilants, donnent de leur énergie et de leur amour pour les anciens bateaux délaissés de tous, pauvres animaux épuisés et blessés, voués à une mort silencieuse."
        <p>Louise Gabriel</p>
        <div class="photo">
            <div class="mehala">Le Méhala</div>
            <div class="crea">Le Créa</div>
            <div class="gitana">Le Gitana III</div>
        </div>
      </section>
        <!-- Formulaire-->
            <section id="section7"><h2>Nous contacter</h2>

              <form  action="index.html" method="post">
                <input type="text" name="nom" placeholder="Nom">
                <input type="text" name="prenom" placeholder="Prénom"><br/>
                <input type="email" name="email" placeholder="Email">
                <button type="submit" name="envoyer" value="Envoyer"></button>
                <button type="reset" name="reset" value="Effacer"></button>
              </form>

            </section>



                <footer></footer>

        </section>
  </body>
</html>
