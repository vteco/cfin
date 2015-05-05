<?php

/**
 * standalone actions.
 *
 * @package    cartefinancement
 * @subpackage standalone
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class standaloneComponents extends sfComponents
{
  public function executeTestimony(sfWebRequest $request)
  {
    $testimonies = array(
      /* Témoignages en français */
      'fr' => array(
        array(
          'author' => "Batoul H.",
          'job' => "Directeur marketing",
          'content' => "Nous tenions à vous remercier pour notre rendez-vous de samedi.<br />
          Merci de nous avoir reçu en plein pendant votre weekend, et merci de nous avoir expliqué clairement et en toute transparence les solutions de financement pour notre futur bien immobilier.",
        ),
        array(
          'author' => "Gérard B.",
          'job' => "Directeur commercial",
          'content' => "Nous sommes rassurés quant au financement, reste à trouver le bien.<br />
        Nous vous tiendrons bien sûr au courant.",
        ),
        array(
          'author' => "Arnaud L.",
          'job' => "Ingénieur d'étude",
          'content' => "Bonjour, nous signons l’offre de prêt avec la banque. Merci beaucoup pour votre excellent travail.",
        ),
        array(
          'author' => "Antonin M.",
          'job' => "Ingénieur d'étude",
          'content' => "Je vous renouvelle toute ma gratitude pour votre aide, vos conseils et votre efficacité, je ne manquerai pas de vous recommander dès que l'occasion s'en présentera.<br />
          En vous souhaitant bonne continuation,<br />
          Bien Cordialement,<br />",
        ),
        array(
          'author' => "Edith D.",
          'job' => "Ingénieur d'étude",
          'content' => "Je suis très satisfaite du service que votre société ma proposé.  J'ai surtout apprécié la ponctualité avec laquelle mon dossier a été traité.<br />
          Cordialement,",
        ),
        array(
          'author' => "Liliane P.",
          'job' => "Ingénieur d'étude",
          'content' => "J’ai tout de suite apprécié vos réponses claires, précises et rapides, votre rigueur et réactivité  et ce que je pense avoir compris et ressenti de votre façon de fonctionner intellectuellement. Partant de là, j’ai décidé de vous faire confiance.<br />
          Cordialement,",
        ),
        array(
          'author' => "Sébastien P.",
          'job' => "Ingénieur d'étude",
          'content' => "Je voulais vous remercier pour votre accompagnement et votre grande disponibilité, que vous avez fait preuve dans la conduite et dans la réussite de mon projet d’investissement sur Avoriaz.",
        ),
        array(
          'author' => "Philippe N.",
          'job' => "Ingénieur d'étude",
          'content' => "Le premier déblocage du prêt a eu lieu cette semaine, les travaux sont partis !<br />
          Merci de vos précieux conseils et des nombreuses simulations, et propositions que vous m’avez faites pour l’attribution de mon prêt.<br />
          Très cordialement,",
        ),
        array(
          'author' => "Mélanie P.",
          'job' => "Ingénieur d'étude",
          'content' => "La signature chez le notaire s’est très bien passée lundi et nous sommes en train de commencer les travaux. Merci d’être revenu vers nous pour prendre des nouvelles. Nous sommes très contents de ta prestation, car nous avons un prêt très intéressant.<br />
          A très bientôt,",
        ),
        array(
          'author' => "Michel D.",
          'job' => "Ingénieur d'étude",
          'content' => "Un grand merci pour toute votre persévérance dans la recherche d’une solution à cette demande ainsi qu’à la grande qualité de votre travail et de votre communication.",
        ),
        
        array(
          'author' => "Sébastien P.",
          'job' => "Ingénieur d'étude",
          'content' => "Merci pour la qualité de votre travail, je ne manquerai pas de vous recommander.",
        ),
      ),
      
      /* Témoignages en anglais */
      'en' => array(
        array(
          'author' => "Paul T.",
          'job' => "Directeur marketing",
          'content' => "Many thanks for your support and fast responses.",
        ),
        array(
          'author' => "Shirley T.",
          'job' => "Real estate contactor",
          'content' => "If you need to get a mortgage or equity release I cna thoroughly recommend Carte Fuinancement in Paris. They are EXCELLENT. They handled an equity release for me, and I had the money in 2 weeks! They also did it with the minimum of paperwork.",
        ),
      ),
    );
    
    // On récupère un témoignage aléatoire dans la bonne langue
    $langTest = $testimonies[$this->getUser()->getCulture()];
    $key = array_rand($langTest);
    $this->testimony = $langTest[$key];
  }
}
