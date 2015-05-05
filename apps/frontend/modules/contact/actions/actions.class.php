<?php

/**
 * contact actions.
 *
 * @package    cartefinancement
 * @subpackage contact
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    // On fixe l'élément du menu principal sélectionné
    $this->getResponse()->setSlot('root_id', 'fork_contact');
    
    $context = sfContext::getInstance();
    
    if(!$request->isMethod(sfWebRequest::POST))
      return;
    
    $this->success = false;
    
    $name = $request->getParameter('name');
    $email = $request->getParameter('email');
    $phone = $request->getParameter('phone');
    $message = nl2br($request->getParameter('message'));
        
    $body = "<h1>CarteFinancement.com : demande de contact</h1>";
    $body .= sprintf("
    <table style='margin: 10px; width:600px;' cellpadding='3' cellspacing='0' border='1'>
      <tr>
        <th>Nom</th>
        <td>%s</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>%s</td>
      </tr>
      <tr>
        <th>Téléphone</th>
        <td>%s</td>
      </tr>
      <tr>
        <th>Message</th>
        <td style='padding-left:20px; background: #DDD;'>%s</td>
      </tr>
    </table>",
      $name, $email, $phone, $message
    );
    
    $toEmail = sfConfig::get('app_contact_email_' . $this->getUser()->getCulture());
    $message = $context->getMailer()->compose(
      array($toEmail => sfConfig::get('app_contact_name')),
        $toEmail,
        "Demande de contact",
        null
    );
    $message->setReplyTo($email);
    $message->setBody($body, 'text/html', sfConfig::get('sf_charset')); 
    
    // Envoi du mail
    $this->success = $context->getMailer()->send($message) !== false;
    
    // On sette un template ajax
    $this->setLayout(false);
    $this->setTemplate('result');
  }
}
