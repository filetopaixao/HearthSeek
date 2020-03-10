<?php
require_once("../../../../wp-load.php");


  $server = '9167geckdear.marduktv.com.br';
  $banco = 'new_marduk_tv';
  $user = 'marduktvcombr';
  $senha = 'gmyJHq7D';
    

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);

$xmlStr=str_replace('á','&aacute;',$xmlStr);
$xmlStr=str_replace('Á','&Aacute;',$xmlStr);
$xmlStr=str_replace('í','&iacute;',$xmlStr);
$xmlStr=str_replace("Í",'&Iacute;',$xmlStr);
$xmlStr=str_replace("ô",'&ocirc;',$xmlStr);
$xmlStr=str_replace("Ô",'&Ocirc;',$xmlStr);

$xmlStr=str_replace('ã','&atilde;',$xmlStr);
$xmlStr=str_replace('Ã','&Atilde;',$xmlStr);
$xmlStr=str_replace('é','&eacute;',$xmlStr);
$xmlStr=str_replace("É",'&Eacute;',$xmlStr);
$xmlStr=str_replace("ó",'&oacute;',$xmlStr);
$xmlStr=str_replace("Ó",'&Oacute;',$xmlStr);
$xmlStr=str_replace("ú",'&uacute;',$xmlStr);
$xmlStr=str_replace("Ú",'&Uacute;',$xmlStr);

$xmlStr=str_replace('â','&acirc;',$xmlStr);
$xmlStr=str_replace('Â','&Acirc;',$xmlStr);
$xmlStr=str_replace('ê','&ecirc;',$xmlStr);
$xmlStr=str_replace("Ê",'&Ecirc;',$xmlStr);
$xmlStr=str_replace("õ",'&otilde;',$xmlStr);
$xmlStr=str_replace("Õ",'&Otilde;',$xmlStr);
$xmlStr=str_replace("ç",'&ccedil;',$xmlStr);
$xmlStr=str_replace("Ç",'&Ccedil;',$xmlStr);
return $xmlStr;
}


// Opens a connection to a MySQL server
$connection=mysql_connect ($server, $user, $senha);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}
// Set the active MySQL database
$db_selected = mysql_select_db($banco, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}



// Select all the rows in the markers table
$sql = "SELECT * FROM `wp_usermeta` WHERE `meta_key` = 'lat'";
mysql_set_charset("UTF8");

$result = mysql_query($sql);

header("Content-type: text/xml; charset=utf-8");

if (!$result) {
  
  die('Invalid query: ' . mysql_error());
}



echo '<?xml version="1.0" encoding="UTF-8" ?>';
// Start XML file, echo parent node
echo '<markers>';
// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  $user_id = $row['user_id'];
  $current_user = get_user_by('id', $user_id);
  // ADD TO XML DOCUMENT NODE
  echo '<marker ';
  echo 'lat="' . get_user_meta( $user_id, 'lat', true ) . '" ';
  echo 'lng="' . get_user_meta( $user_id, 'lng', true ) . '" ';
  echo 'playername="' . $current_user->display_name . '" ';
  echo 'location="' . get_user_meta( $user_id, 'location', true ) . '" ';
  echo 'gender="' . get_user_meta( $user_id, 'gender', true ) . '" ';
  echo 'age="' . get_user_meta( $user_id, 'age', true ) . '" ';
  echo 'ranking="' . get_user_meta( $user_id, 'ranking', true ) . '" ';
  echo 'battletag="' . get_user_meta( $user_id, 'battletag', true ) . '" ';
  echo 'id="' . $user_id . '" ';
  
  //echo 'rank="' . $row['rank'] . '" ';
    //echo 'id="' . $row['id'] . '" ';
            //echo 'age="' . $row['age'] . '" ';
        //echo 'gender="' . $row['gender'] . '" ';
                //echo 'platform="' . $row['platform'] . '" ';

  echo '/>';
}
// End XML file
echo '</markers>';

?>
