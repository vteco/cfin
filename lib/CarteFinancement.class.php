<?php 
class CarteFinancement
{
  static public function wd_remove_accents($str, $charset='utf-8')
  {
      $str = htmlentities($str, ENT_NOQUOTES, $charset);
      
      $str = preg_replace('#&([A-za-z])(?:acute|cedil|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
      $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
      $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caract�res
      
      return $str;
  }
  
  static public function slugify($text)
  {
    $text = self::wd_remove_accents($text);
    // replace all non letters or digits by -
    $text = preg_replace('/\W+/', '-', $text);
 
    // trim and lowercase
    $text = strtolower(trim($text, '-'));
 
    return $text;
  }
  
  static function makeSummary($html, $maxchars)
  {
    $str = strip_tags($html);
    if(strlen($str) <= $maxchars)
      return $str;
    else
      return mb_substr($str, 0, $maxchars, 'utf-8') . " ...";
  }

}
?>