function shadowban($e){
  $url = "https://shadowban.eu/.api/".$e;
  $options = array(
  'http'=>array(
  'method'=>"GET",
  'header'=>"Accept-language: en\r\n" .
  "User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad
  )
  );
  $context = stream_context_create($options);
  return file_get_contents($url, false, $context);
}
$json = shadowban("username");
echo $json;
