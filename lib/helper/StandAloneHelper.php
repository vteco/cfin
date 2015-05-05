<?php 

// Pour l'instant ne fonctionne que dans le frontend, car appel à getRouting()
// TODO: le rendre 'global'
function standalone_href($page)
{
  $uri = sfContext::getInstance()->getRouting()->generate('generate-standalone', array('href' => $page->getHref()));
  return urldecode($uri);
}

function href_by_pagename($pageName)
{
  $page = StandAloneTable::getInstance()->findOneByPageId($pageName);
  if(!$page)
    return null;
    
  return standalone_href($page);
}

function standalone_link($page, $attributes = array())
{
  if(is_string($page))
    $page = StandAloneTable::getInstance()->findOneByPageId($page);
  
  if(!$page)
    return null;
    
  return link_to($page->getTitle(), standalone_href($page), $attributes);
}