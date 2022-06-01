<script>
  bool = true;

  function impr() {
    if (bool == true) {
      $.getScript("https://unpkg.com/pagedjs/dist/paged.polyfill.js");
      bool = false;
    } else {
      window.location.reload();
    }
  }
</script>

<div class="impr" onclick="impr()"></div>
<div class="container-global">
  <nav>
    <div class="fixed">
      <ol>
        <li>
          <h2><a href="#intro">Introduction</a></h2>
        </li>
        <li>
          <h2><a href="#presentation">Présentation</a></h2>
        </li>
        <li>
          <h2><a href="#theme">Thème</a></h2>
        </li>
        <li>
          <h2><a href="#projets">Exemple de projets</a></h2>
        </li>
        <li>
          <h2><a href="#logiciels">Logiciels</a></h2>
        </li>
        <li>
          <h2><a href="#ressources">Ressources typographique</a></h2>
        </li>
      </ol>
    </div>
  </nav>
  <div class="container-notice">
    <div id="intro" class="container-intro">
      <header>
        <h3>Workshop n°1</h3>
        <h3>Logiciels libres</h3>
        <h3>avril 2022</h3>
      </header>
      <h1>Expérimentations en motion design et typographie animée avec des logiciels libres</h1>
    </div>
    <div class="container-corps page1">
      <div class="container-left">
        <h1 id="presentation">Présentation</h1>
        <p>
          Le but est de créer une affiche animée autour du thème du "versionnage". La contrainte sera de réaliser une animation de 8 seconde avec au moins
          un glyphe d'une typographie (libre !). Le format, les couleurs, la quantité de texte et le nombre de typographies est libre.
          <br />
          Le workshop va être séparé en trois temps; l'expérimentation, la réalisation, et le montage.
        </p>
        <h1 id="theme">Thème</h1>
        <h2>Qu’est-ce que le versionnage&#8239;?</h2>
        <p>
          Le versionnage est un concept qui est devenu très important avec la montée en puissance de l’informatique. L’objectif est d’enregistrer et
          d’itérer sur différentes versions d’un projet, d’un code ou de fichiers, lorsque l’auteur en a besoin, sans nécessairement le dupliquer grâce à
          l’utilisation de fichiers de sauvegarde dans le cas de l’informatique.
        </p>
        <p>
          Ce système permet ainsi d’avoir accès à un historique des versions d’un système de fichier, et est très utilisé notamment dans le domaine du
          libre, puisqu’il va permettre la simplification du développement collaboratif, notamment avec les gestionnaires de versions décentralisés.
        </p>
        <h2>Historique du logiciel de versionnage avec Git</h2>
        <p>
          Git est un logiciel de versionnage décentralisé et en lignes de commande créé en 2005 par Linus Torvald pour le développement de Linux. D’autres
          systèmes similaires existaient alors déjà (le premier ayant été créé en 1972), mais les plus performants étaient souvent très chers et proposaient
          un système fermé et/ou centralisé.
        </p>
        <p>
          Git a su se démarquer par un fonctionnement décentralisé et en pair-à-pair, qui s’inscrit dans la démarche libre. Il est depuis 2016 le logiciel
          de versionnage le plus utilisé.
        </p>
        <h1 id="projets">Exemple de projets</h1>
        <p>
          Pour représenter cette notion de versionnage, vous pourrez jouer avec des changements d'état, de forme, de typographie, de point de vue ... Voici
          quelques exemples de projets divers qui questionnent ou représentent la notion de versionnage.
        </p>
        <h2>Neocities</h2>
        <p>
          Cette page web présente différentes compositions des mêmes éléments. Le changement d’état des formes est mis en avant par la transition d’un état
          à l’autre.
          <br />
          <a href="https://declin-sequence.neocities.org/" target="_blank">declin-sequence.neocities.org</a>
        </p>
        <h2>Linux distros</h2>
        <p>
          Fichier SVG permettant la visualisation des différentes versions (nommées distributions) de systèmes d’exploitations basés sur le noyau Linux.
          <br />
          <a href="https://upload.wikimedia.org/wikipedia/commons/1/1b/Linux_Distribution_Timeline.svg" target="_blank">upload.wikimedia.org/wikipedia/commons/1/1b/Linux_Distribution_Timeline.svg</a>
        </p>
        <h2>Soft Corruptor</h2>
        <p>
          Ce projet propose une histoire dont on va pouvoir découvrir différentes versions au fur et à mesure que l’on déroule les différents éléments qui
          nous sont proposés.
          <br />
          <a href="http://cordite.org.au/poetry/game/soft-corruptor/" target="_blank">cordite.org.au/poetry/game/soft-corruptor</a>
        </p>
        <h2>Diff</h2>
        <p>
          Installation permettant de visualiser différentes organisations/versions d’une scène, avec des changement de positions et d’état des éléments qui
          composent les scènes.
          <br />
          <a href="https://raphaelbastide.com/diff/" target="_blank">raphaelbastide.com/diff</a>
        </p>
      </div>
      <div class="container-right">
        <h2>Exemple d’un arbre de gestion de versions.</h2>
        <img src="./import/version_scheme_vertical.png" alt="" />
        <ul>
          <li>
            <p>branche principale (trunk)</p>
          </li>
          <li>
            <p>nouvelle version (branche)</p>
          </li>
          <li>
            <p>nouveau programme (fork)</p>
          </li>
          <li>
            <p>nouvelles versions</p>
          </li>
          <li>
            <p>fusion des versions (merge)</p>
          </li>
        </ul>
      </div>
    </div>

    <div class="container-corps page2 break">
      <div class="container-left">
        <h1 id="logiciels">Les logiciels</h1>

        <h2>Krita</h2>
        <p>
          Krita est un logiciel de retouche d’images matriciels principalement destiné au dessin numérique et l’animation 2D. Il est disponible pour la
          première fois en 2004, et supervisé par la Krita Foundation depuis 2012. Il peut servir d’alternative à Photoshop, Affinity Photo et ClipStudio
          Paint.
        </p>
        <div class="logi-infos">
          <div>
            <p>
              Site Web
              <br />
              <a href="https://krita.org/fr/" target="_blank">krita.org/fr</a> [fr]
            </p>
          </div>
          <div>
            <p>
              Documentation
              <br />
              <a href="https://docs.krita.org/fr/index.html" target="_blank">docs.krita.org/fr/index.html</a> [fr]
            </p>
            <p>
              En savoir plus
              <br />
              <a href="https://fr.wikipedia.org/wiki/Krita" target="_blank">fr.wikipedia.org/wiki/Krita</a> [fr]
              <br />
              <a href="https://github.com/KDE/krita" target="_blank">github.com/KDE/krita</a> [en]
            </p>
          </div>
        </div>

        <h2>G'Mic</h2>
        <p>
          G’Mic est un ensemble de micro-logiciels libre dédié au traitement d’image, qui peut être utilisé en ligne de commandes ou rattaché sous forme de
          plugins à divers programmes. Depuis 2008, il est principalement développé par le laboratoire GREYC, notamment affilié au CNRS.
        </p>
        <div class="logi-infos">
          <div>
            <p>
              Site Web
              <br />
              <a href="https://gmic.eu/" target="_blank">gmic.eu</a> [en]
            </p>
          </div>
          <div>
            <p>
              Documentation
              <br />
              <a href="https://www.youtube.com/c/GMIC_software" target="_blank">youtube.com/c/GMIC_software</a> [en]
              <br />
              <a href="https://github.com/dtschump/gmic-community/wiki" target="_blank">github.com/dtschump/gmic-community/wiki</a> [en]
            </p>
            <p>
              En savoir plus
              <br />
              <a href="https://fr.wikipedia.org/wiki/G'MIC" target="_blank">fr.wikipedia.org/wiki/G'MIC</a> [fr]
              <br />
              <a href="https://github.com/dtschump/gmic" target="_blank">github.com/dtschump/gmic</a> [en]
            </p>
          </div>
        </div>

        <h2>Blender</h2>
        <p>
          Blender est un logiciel de création 3D multitâche (modélisation, animation, rendu) créé en 1994 par Ton Roosendaal. Il est aujourd’hui l’un des
          logiciels libres de création le plus réputé et utilisé face aux alternatives propriétaires tels que Maya, Cinema4D, 3DS Max, Zbrush et Houdini.
        </p>
        <div class="logi-infos">
          <div>
            <p>
              Site Web
              <br />
              <a href="https://www.blender.org/" target="_blank">blender.org</a> [en]
            </p>
          </div>
          <div>
            <p>
              Documentation
              <br />
              <a href="https://docs.blender.org/manual/fr/latest/" target="_blank">docs.blender.org/manual/fr/latest</a> [fr]
            </p>
            <p>
              En savoir plus
              <br />
              <a href="https://fr.wikipedia.org/wiki/Blender" target="_blank">fr.wikipedia.org/wiki/Blender</a> [fr]
              <br />
              <a href="https://github.com/blender/blender" target="_blank">github.com/blender/blender</a> [en]
            </p>
          </div>
        </div>

        <h2>Kdenlive</h2>
        <p>
          Kdenlive est un logiciel de montage vidéo créé en 2002 par Jean-Baptiste Mardelle. Il permet de gérer des images, vidéos et sons, mais aussi d’y
          appliquer des effets. Il peut servir d’alternative à des logiciels comme Premiere Pro, Sony Vegas et Davinci Resolve.
        </p>
        <div class="logi-infos">
          <div>
            <p>
              Site Web
              <br />
              <a href="https://kdenlive.org/fr/" target="_blank">kdenlive.org/fr</a> [fr]
            </p>
          </div>

          <div>
            <p>
              Documentation
              <br />
              <a href="https://docs.kdenlive.org/fr/" target="_blank">docs.kdenlive.org/fr</a> [fr]
            </p>
            <p>
              En savoir plus
              <br />
              <a href="https://fr.wikipedia.org/wiki/Kdenlive" target="_blank">fr.wikipedia.org/wiki/Kdenlive</a> [fr]
              <br />
              <a href="https://github.com/KDE/kdenlive" target="_blank">github.com/KDE/kdenlive</a> [en]
            </p>
          </div>
        </div>
      </div>
      <div class="container-right">
        <h1 id="ressources">RESSOURCES TYPOGRAPHIQUE</h1>
        <h2>Collletttivo</h2>
        <p><a href="https://www.collletttivo.it/" target="_blank">collletttivo.it</a></p>
        <h2>Fond de riz</h2>
        <p><a href="https://fonderiz.fr/" target="_blank">fonderiz.fr</a></p>
        <h2>fonderie.download</h2>
        <p><a href="https://www.fonderie.download/" target="_blank">fonderie.download</a></p>
        <h2>FontsArena</h2>
        <p><a href="https://fontsarena.com/" target="_blank">fontsarena.com</a></p>
        <h2>Font Library</h2>
        <p><a href="https://fontlibrary.org/" target="_blank">fontlibrary.org</a></p>
        <h2>Luuse Font Library</h2>
        <p><a href="https://typotheque.luuse.fun/" target="_blank">typotheque.luuse.fun</a></p>
        <h2>MontiFonti</h2>
        <p><a href="https://montifonti.tilda.ws/" target="_blank">montifonti.tilda.ws</a></p>
        <h2>Omnibus-Type</h2>
        <p><a href="https://www.omnibus-type.com/" target="_blank">omnibus-type.com</a></p>
        <h2>Open Foundry</h2>
        <p><a href="https://open-foundry.com/fonts" target="_blank">open-foundry.com/fonts</a></p>
        <h2>The League of Moveable Type</h2>
        <p><a href="https://www.theleagueofmoveabletype.com/" target="_blank">theleagueofmoveabletype.com</a></p>
        <h2>Tunera Type Foundry</h2>
        <p><a href="http://www.tunera.xyz/" target="_blank">tunera.xyz</a></p>
        <h2>Use & Modify</h2>
        <p><a href="https://usemodify.com/" target="_blank">usemodify.com</a></p>
        <h2>Velvetyne</h2>
        <p><a href="http://velvetyne.fr/" target="_blank">velvetyne.fr</a></p>
        <h2>Warsaw Types</h2>
        <p><a href="https://kroje.org/en/" target="_blank">kroje.org/en</a></p>
        <h2>WOMXN</h2>
        <p><a href="https://www.design-research.be/by-womxn/" target="_blank">design-research.be/by-womxn</a></p>
      </div>
    </div>
  </div>
</div>