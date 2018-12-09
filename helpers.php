<?php

/*s
* get the language data from the ar or en json files in the public/json folder
* set the langData COOKIE with the language data
*/
 function getTranslations($lang) {
   $response = json_decode(file_get_contents('public/json/' . $lang . '.json'));
   $result = array();
   foreach ( $response as $languageVar ) {
     foreach ( $languageVar as $key => $value ) {
       $result[$key] = $value;
     }
  	}
    $_SESSION["langData"] = $result;
    return $result;
 }

 /*
 * return the value of the translation from the
 * cookie already saved in getTranslations function
 *
 */
 function translate($key) {
   if(isset($_SESSION['langData'])) {
     $langData = $_SESSION['langData'];
     if(isset($langData[$key])){
           $value = $langData[$key];
       } else{
           $value = $key;
       }
     return $value;
   }
 }
?>
