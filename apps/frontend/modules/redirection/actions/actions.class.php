<?php

/**
 * redirection actions.
 *
 * @package    cartefinancement
 * @subpackage redirection
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class redirectionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeLanguage(sfWebRequest $request)
  {
    $culture = $request->getParameter('culture');
    $this->getUser()->setCulture($culture);
    
    $localizedHomepageUrl = sfConfig::get('app_' . $culture . '_home');
    $this->redirect($localizedHomepageUrl, 301);
  }
}
