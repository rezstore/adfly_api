<?php	
if ($_POST){
 $url=$_POST['url'];
 adfly($url);
}else{
 echo "<form method='POST' action=''>
		<input name='url' placeholder='masukkan url'>
		<input type='submit' value='Go'>
		</form>
 ";

}
function adfly($url, $key='3b7b9dece22d8147a9425e812d361234', $uid='7698992', $domain = 'adf.ly', $advert_type = 'int')
{
  // base api url
  $api = 'http://api.adf.ly/api.php?';

  // api queries
  $query = array(
    'key' => $key,
    'uid' => $uid,
    'advert_type' => $advert_type,
    'domain' => $domain,
    'url' => $url
  );

  // full api url with query string
  $api = $api . http_build_query($query);
  // get data
  if ($data = file_get_contents($api))
    echo $data;
}

?>