<?php
session_start();
$api_key = 'AIzaSyC9hpb6PThiaevoAtJwfDQqB3b53wamqRE';

$arr_list = array();


$formatted_keyword = implode("+", explode(" ", $_POST['pesquisa']));
$qtde = $_POST['qtdeVideos'];
$url = "https://www.googleapis.com/youtube/v3/search?q=$formatted_keyword&part=snippet&type=video&type=video&maxResults=$qtde&key=".$api_key;


echo httpGet($url);


function httpGet($url) {
  
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    $response = curl_exec($ch);
    if($errno = curl_errno($ch)) {
      return "erro";
    }
    else{
        $_SESSION['arr_list'] = $response;
        return $response;
    }
    
    curl_close($ch);
    
  
  }


function getYTList($api_url) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$_SESSION['arr_list'] = $response;
return $api_url;
// $arr_result = json_decode($response);
// if (isset($arr_result->items)) {
// return $arr_result;

// } 
// elseif (isset($arr_result->error)) {
// return 'erro';
// }
}

?>