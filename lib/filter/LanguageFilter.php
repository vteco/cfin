<?php

/**
 * News filter form.
 *
 * @package    cartefinancement
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LanguageFilter extends sfFilter
{
  public function execute($filterChain)
  {
    // Ce filtre ne s'applique que en prod, lorsqu'il y a un sous-domain : soit www, soit frenchmortage
    
    // Execute this filter only once
    if ($this->isFirstCall()) {
      // get the domain parts as an array
      $host = array_reverse(explode('.', $_SERVER['HTTP_HOST']));
      if(count($host) == 2)
        list($tld, $domain) = $host;
      else if(count($host) == 3)
        list($tld, $domain, $subdomain) = $host;

      if($domain == 'french-mortgage-expert')
      {
        $this->getContext()->getUser()->setCulture('en');
      }
      else if(isset($subdomain))
      {
        // determine which subdomain we're looking at
        if($subdomain == 'www' || $subdomain == 'cf2') {
          $this->getContext()->getUser()->setCulture('fr');
        } else if($subdomain == 'frenchmortgage') {
          $this->getContext()->getUser()->setCulture('en');
        }
      }
      else
      {
        $this->getContext()->getUser()->setCulture('fr');
      }
    }
    
    // Execute next filter
    $filterChain->execute();
  }
}
