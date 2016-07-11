<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<?php
date_default_timezone_set('America/Mexico_City');
//echo strtotime('next month');
echo strtotime('now');
echo '<br/>';
echo date('m-d-Y h:i:s a',strtotime('now'));
exit;


$a = "Firing Your Real Estate Agent, a Buyer's Point of View";
$tmpstring = str_replace(' ', '-', strtolower($a));
$tmp_slug1 = preg_replace('/[^A-Za-z0-9\-]/', '', $tmpstring);
echo $tmp_slug = preg_replace('/-+/', '-', $tmp_slug1);
exit;



echo base64_encode('84');
exit;

$tmpbudgearr = explode(' - ','$500,000 - $550,000');


$healthy = array('$', ',');
$yummy   = array('', '');

echo (integer) str_replace($healthy, $yummy,'$500,000');
echo '<br/>';
echo intval($tmpbudgearr[1]);
exit;

echo strlen('Get pre-qualified leads sent to your phone. All leads are managed through our simple CRM. Easily collaborate leads with your preferred real estate agents building loyalty');
exit;
echo date('d-m-Y h:i A',strtotime('06/30/2016 02:22 am'));
exit;

echo $year = substr('20160603',0,4).'<br/>';
echo $month = substr('20160603',4,2).'<br/>';
echo $day = substr('20160603',6,2).'<br/>';
exit;

echo date('d-m-Y h:i:s a',mktime(0, 0, 0, date("n"), 1));
echo '<br/>'.date('d-m-Y h:i:s a',mktime(23, 59, 59, date("n"), date("t")));
exit;

/*echo $month = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
exit;*/
require_once("../includes/config.inc.php"); 



$sql = "SELECT id,created FROM `leads`";
$result = mysql_query($sql);
//$leadLists = array();
while($row = mysql_fetch_assoc($result)) {
	//$leadLists[] = $row;
	mysql_query("update leads set created_date='".date('Y-m-d',$row['created'])."'");
}


echo 'done';
exit;







//echo date('Y-m-d',strtotime('next month'));
echo date('Y-m-d',1457371448).'<br/>';
echo date('Y-m-d',1457373135).'<br/>';
echo date('Y-m-d',1458389164).'<br/>';
echo date('Y-m-d',1458412883).'<br/>';
echo date('Y-m-d',1459026290).'<br/>';
echo date('Y-m-d',1459028021).'<br/><br/>';

echo date('Y-m-d',1459963448).'<br/>';
echo date('Y-m-d',1460063448).'<br/>';
echo date('Y-m-d',1460163448).'<br/>';

echo date('Y-m-d',1461163448).'<br/>';
echo date('Y-m-d',1461263448).'<br/>';
echo date('Y-m-d',1461363448).'<br/>';


echo date('Y-m-d',1461463448).'<br/>';
echo date('Y-m-d',1462563448).'<br/>';

echo date('Y-m-d',1462663448).'<br/>';
echo date('Y-m-d',1462763448).'<br/>';
echo date('Y-m-d',1462863448).'<br/>';
echo date('Y-m-d',1462963448).'<br/>';


exit;

/*$first_minute = mktime(0, 0, 0, date("n"), 1);
echo date('Y-m-d',$first_minute).'<br/>';

$last_minute = mktime(23, 59, 59, date("n"), date("t"));
echo date('Y-m-d',$last_minute ).'<br/>';
exit;*/


$str = '{"x_response_code":"1","x_response_subcode":"S","x_response_reason_code":"1","x_response_reason_text":"Transaction has been approved","x_auth_code":"080018","x_avs_code":"","x_trans_id":"1401471429","x_invoice_num":"","x_description":"","x_amount":"0.32","x_fee_amount":"","x_method":"","x_type":"","x_cust_id":"11|53|bl41tqanu763fcqv7egmodtgb2","x_first_name":"Dipu","x_last_name":"Hasan","x_company":"","x_address":"","x_city":"","x_state":"","x_zip":"","x_country":"","x_phone":"","x_fax":"","x_email":"dipu@gmail.com","x_ship_to_first_name":"","x_ship_to_last_name":"","x_ship_to_company":"","x_ship_to_address":"","x_ship_to_city":"","x_ship_to_state":"","x_ship_to_zip":"","x_ship_to_country":"","x_tax":"0.02","x_duty":"","x_freight":"","x_tax_exempt":"","x_po_num":"","x_reference_3":"","x_cvv2_resp_code":"","x_cavv_response":"","x_ecommerce_flag":"","enable_level3_processing":"TRUE","tax_rate":"","discount_amount":"","alternate_tax":"","exact_ctr":"","exact_wsp_version":"1.7","x_MD5_Hash":"98b282618ad0e7cb34cc9388c53b1083","x_login":"WSP-SOLUT-8mUaIABnpw","x_fp_sequence":"134167","x_fp_timestamp":"1460412012","x_currency_code":"USD","x_show_form":"PAYMENT_FORM","x_relay_response":"TRUE","x_recurring_billing_amount":"1.00","x_recurring_billing_id":"MB-SOLUT-113-364065","x_recurring_billing":"TRUE","x_recurring_billing_start_date":"2016-04-11","x_recurring_billing_end_date":"2021-04-11","Transaction_Type":"00","DollarAmount":"0.32","SurchargeAmount":"0","Card_Number":"8124712188857021","Transaction_Tag":"1401471429","Authorization_Num":"080018","Expiry_Date":"0118","CardHoldersName":"Dipu Hasan","CVD_Presence_Ind":"0","ZipCode":"","Tax1Amount":"","Tax1Number":"","Tax2Amount":"","Tax2Number":"","Secure_AuthRequired":"0","Secure_AuthResult":"0","Ecommerce_Flag":"","XID":"","CAVV_Algorithm":"0","Reference_No":"","Customer_Ref":"","Reference_3":"","Language":"0","Client_IP":"45.125.220.30","Client_Email":"dipu@gmail.com","Transaction_Error":"false","Transaction_Approved":"YES","EXact_Resp_Code":"00","EXact_Message":"Transaction Normal","Bank_Resp_Code":"100","Bank_Message":"Approved","Bank_Resp_Code_2":"","SequenceNo":"0909615","AVS":"","CVV2":"","Retrieval_Ref_No":"160411","CAVV_Response":"","TransactionCardType":"VISA","MerchantName":"SOLUTION EGG","MerchantAddress":"2801 SEDAR BROOK DR","MerchantCity":"GARLAND","MerchantProvince":"Texas","MerchantCountry":"United States","MerchantPostal":"75040","x_recurring_billing_accepted":"TRUE","x_recurring_billing_success":"TRUE"}';

print_r(json_decode($str));
exit;

include_once("resize-class.php");

if(!empty($_FILES['image1'])) {
	if(move_uploaded_file($_FILES['image1']['tmp_name'],"uploads_cover/".$_FILES['image1']['name'])) {
		
		$resizeObj = new resize("uploads_cover/".$_FILES['image1']['name']);	
		$resizeObj -> resizeImage(620, '', 'auto');	
		$resizeObj -> saveImage("uploads_cover/".$_FILES['image1']['name'], 100);	
		
		$fin_image_path = site_url.'uploads_cover/'.$RnewFileName;	
		mysql_query("UPDATE `users` SET `image1` = '".$fin_image_path."' WHERE `id` = '".$_REQUEST['userid']."'");
	}	
}
echo 'done';
exit;

//echo date('Y-m-d',strtotime('next month'));
echo strtotime('2016-04-20').'<br/>';
echo strtotime('2016-04-22').'<br/>';
echo strtotime('2016-04-26').'<br/>';
exit;


$timeFirst  = strtotime('2016-01-01 12:00:00');
//$timeSecond = strtotime('2018-12-31 12:00:00');
$timeSecond = time();
echo $differenceInSeconds = $timeSecond - $timeFirst;
exit;
//echo uniqid();
echo base64_encode(2720);
exit;
$a = substr("a,b,c,d,e,", 0, -1);
echo $a;
exit;
echo date('d-m-y',1450393200);
exit;
$str = '{
   "id": "10208397643842133",
   "name": "Shah Alam Russell",
   "gender": "male",
   "email": "rasel028\u0040yahoo.com",
   "picture": {
      "data": {
         "is_silhouette": false,
         "url": "https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/c8.0.50.50/p50x50/10325359_10204117389638453_3030344715045702039_n.jpg?oh=7c0e1dc6de421c10c8835751a2b82762&oe=571C135B&__gda__=1457566637_e6e267f5ccbbfa28885781651a4381f7"
      }
   },
   "link": "https://www.facebook.com/app_scoped_user_id/10208397643842133/",
   "first_name": "Shah",
   "last_name": "Russell",
   "verified": true
}';
print_r(json_decode($str));
exit;

$db_name = "reelbuddy";
$db_host="localhost:8888";
$db_user="root";
$db_pass="root";

$conn = mysql_connect($db_host,$db_user,$db_pass) or
die ("Couldn't Connect to server");

$db_select = mysql_select_db($db_name,$conn) or 

die ("Couldn't select Databse");
mysql_query("SET NAMES 'utf8'") OR die(mysql_error()); 


function xmlToArray($xml,$ns=null){
 $a = array();
 for($xml->rewind(); $xml->valid(); $xml->next()) {
  $key = $xml->key();
  if(!isset($a[$key])) { $a[$key] = array(); $i=0; }
  else $i = count($a[$key]);
  $simple = true;
  foreach($xml->current()->attributes() as $k=>$v) {
   $a[$key][$i][$k]=(string)$v;
   $simple = false;
  }
  if($ns) foreach($ns as $nid=>$name) {
   foreach($xml->current()->attributes($name) as $k=>$v) {
    $a[$key][$i][$nid.':'.$k]=(string)$v;
    $simple = false;
   }
  }
  if($xml->hasChildren()) {
   if($simple) $a[$key][$i] = xmlToArray($xml->current(), $ns);
   else $a[$key][$i]['content'] = xmlToArray($xml->current(), $ns);
  } else {
   if($simple) $a[$key][$i] = strval($xml->current());
   else $a[$key][$i]['content'] = strval($xml->current());
  }
  $i++;
 }
 return $a;
}

$xml = new SimpleXmlIterator('reelbuddy_mediasource.xml', null, true);
$namespaces = $xml->getNamespaces(true);
$arr = xmlToArray($xml,$namespaces); 
//print_r($arr);
foreach($arr['movie'] as $ar) {
	if(!empty($ar)) {
		mysql_query("INSERT INTO `coming_soon_movies` (`id`, `title`, `movie_id`, `parent_id`, `lgphotos`, `hiphotos`, `rating`, `advisory`, `genre`, `cast`, `director`, `release_date`, `release_date_timestamp`, `running_time`, `official_site`, `distributor`, `producer`, `writer`, `synopsis`, `stars`, `video`, `imdb`) VALUES (NULL, '".$ar[title][0]."', '".$ar[movie_id][0]."', '".$ar[parent_id][0]."', '".$ar[lgphotos][0]."', '".$ar[hiphotos][0]."', '".$ar[rating][0]."', '".$ar[advisory][0]."', '".implode(', ',$ar[genre])."', '".implode(', ',$ar[cast])."', '".implode(', ',$ar[director])."', '".$ar[release_date][0]['content']."', '".strtotime($ar[release_date][0]['content'])."', '".$ar[running_time][0]."', '".$ar[official_site][0]."', '".implode(', ',$ar[distributor])."', '".implode(', ',$ar[producer])."', '".implode(', ',$ar[writer])."', '".$ar[synopsis][0][p][0]."', '".$ar[stars][0]."', '".$ar[video][0][content]."', '".$ar[imdb][0]."')");
	}
}

exit;
    

echo strtotime('2015-12-1');
exit;
echo strlen('Adelaide Super Saver: Adelaide City Sightseeing Tour plus Barossa Valley and ');
exit;
//echo date('d-m-Y',1439967096);
echo strtotime('last month');
exit;
echo date('d-m-Y',strtotime('last month'));
exit;
echo urlencode('new delhi');
exit;

$str = '{"batchcomplete":"","query":{"normalized":[{"from":"dhaka","to":"Dhaka"}],"pages":{"56656":{"pageid":56656,"ns":0,"title":"Dhaka","extract":"<p><b>Dhaka</b> (Bengali: <span lang=\"bn\" xml:lang=\"bn\">\u09a2\u09be\u0995\u09be</span>, <small>pronounced:\u00a0</small><span title=\"Representation in the International Phonetic Alphabet (IPA)\">[\u02c8d\u032a\u02b1aka]</span>; <span><small>English</small> <span>/<span><span title=\"\'d\' in \'dye\'\">d</span><span title=\"/\u0251\u02d0/ \'a\' in \'father\'\">\u0251\u02d0</span><span title=\"\'k\' in \'kind\'\">k</span><span title=\"/\u0259/ \'a\' in \'about\'\">\u0259</span></span>/</span></span>, <span><span>/<span><span title=\"\'d\' in \'dye\'\">d</span><span title=\"/\u00e6/ short \'a\' in \'bad\'\">\u00e6</span><span title=\"\'k\' in \'kind\'\">k</span><span title=\"/\u0259/ \'a\' in \'about\'\">\u0259</span></span>/</span></span>; formerly known as <b>Dacca</b>) is the capital of Bangladesh. It is the principal city of Dhaka District and Dhaka Division. The Dhaka Metropolitan Area is the 11th largest city proper in the world, with a population of 12 million people. The Greater Dhaka Area covers a population of 17 million people. The historic quarter of Dhaka stands on the east bank of the Buriganga River. It is located in the central part of the Bengal delta. Bengali Muslims make up the majority of the population, followed by Bengali Hindu, Buddhist, Bengali Christian and Bahai Faith communities.</p>\n<p>The city\'s name was Jahangir Nagar (<i>City of Jahangir</i>) in the 17th century. It was the Mughal capital of Bengal for 75 years; and flourished in trade and culture as a cosmopolitan commercial capital and the hub of the worldwide muslin and silk trade. The city hosted two major caravansaries of the subcontinent: the Bara Katra and Choto Katra, located on the riverfront of the Buriganga. The Mughals decorated the city with well-laid out gardens, tombs, mosques, palaces and forts. Dhaka became known as the <i>City of Mosques</i> in Bengal. It was also described as the <i>Venice of the East</i>. The old city was home to various Eurasian merchant groups. At the height of its medieval glory, Dhaka was regarded as one of the wealthiest and most prosperous cities in the world. It was central to the economy of Mughal Bengal, which generated 50% of Mughal GDP.</p>\n<p>In 1793, Dhaka was ceded to the British East India Company. British Dacca developed in the late 19th and early 20th centuries, with the establishment of railways, jute trading and various educational and cultural institutions. It was the capital of British Eastern Bengal and Assam between 1905 and 1912. After the Partition of British India in 1947, Dhaka became the administrative capital of East Pakistan. Due to major political, economic and cultural frictions between East and West Pakistan, the city was subjected to long periods of martial law and military suppression during the Bangladesh Liberation War. After independence, Dhaka witnessed rapid urban growth as the center of political, economic and cultural life in Bangladesh.</p>\n<p>Modern Dhaka is one of Bangladesh\'s twin economic centers, along with Chittagong, to which it is connected by the Grand Trunk Road and the Bangladesh Railway. The city was the 2012 ISESCO Asian Capital of Culture. It is served by Shahjalal International Airport. As the most densely populated and one of the fastest growing megacities in the world, it faces many challenges common to a developing world metropolis, including traffic congestion, crime, urban pollution and poverty. With a daily traffic of over 600,000 cycle rickshaws, Dhaka is nicknamed as the <i>Rickshaw Capital of the World</i>.</p>\n<p></p>"}}}}';
print_r(json_decode($str));
exit;
echo date('g:i A').' on '.date('d/m/Y');
exit;
$arr = json_decode($str);
print_r($arr);
exit;

echo date('Y-m-d a',1444629013);
exit;
$str = 'MLSNumber,Matrix_Unique_ID,MatrixModifiedDT,PhotoModificationTimestamp,StreetDirPrefix,StreetDirSuffix,StreetName,StreetNumber,StreetSuffix,City,StateOrProvince,PostalCode,PhotoCount,ListPrice,ListPriceLow,LastListPrice,BedsTotal,BathsFull,BathsHalf,BathsTotal,ParkingSpacesGarage,GarageLength,GarageWidth,NumberOfParkingSpaces,ParkingFeatures,ParkingSpacesCarport,ParkingSpacesCoveredTotal,SqFtTotal,YearBuilt,YearBuiltDetails,LotSize,PropertyType,PublicRemarks,PropertySubType,ArchitecturalStyle,StructuralStyle,NumberOfStories,NumberOfStoriesInBuilding,FoundationDetails,ExteriorBuildings,ExteriorFeatures,InteriorFeatures,FencedYardYN,Fencing,PoolYN,BedroomBathroomFeatures,AccessibilityFeatures,Utilities,CommunityFeatures,ConstructionMaterials,ConstructionMaterialsWalls,LotFeatures,SubdivisionName,OtherEquipment,CountyOrParish,Heating,Status,Possession,WillSubdivide,PermitAVMYN,PresentUse,ProposedUse,RanchName,MLSAreaMajor,AssociationFee,FinancingProposed,OriginalListPrice,MapCoordinates,CropRetireProgramYN,SQFTGross,ListOfficeName,AssociationFeeFrequency,UnexemptTaxes,Barn1Length,Barn3Width,ListAgentFullName,AcresCultivated,Barn2Length,Barn2Width,ComplexName,NumberOfStallsInBarn1,NumberOfStockTanks,BedroomBathroomFeatures,LotSizeArea,Block,Directions,MapPage,InternetExposure,YearBuilt,AGExemptionYN,Barn1Width,Barn3Length,StructuralStyle,NumberOfStallsInBarn2,NumberOfStallsInBarn3,NumberOfLakes,PoolFeatures,SoilType,FloorLocationNumber,AppraiserName,ListOfficeMLSID,MLSAreaMinor,Roof,SchoolDistrict,Latitude,Longitude,DateAvailable';
$arr = explode(',',$str);
/*$arr1 = explode('<br />',$str1);
//$arr2 = explode('<br />',$arr1[0]);
for($i=0; $i<=count($arr);$i++) {
	//echo $arr[$i].'&nbsp;&nbsp;=&nbsp;&nbsp;'.$arr1[$i].'<br/>';
	echo $arr1[$i].'&nbsp;&nbsp;=&nbsp;&nbsp;'.$arr[$i].'<br/>';
}*/
print_r($arr);
/*foreach($arr as $ar) {
	echo $ar.'<br/>';
}*/
exit;


echo date('d-m-Y', 20150922);
exit;
ini_set('display_errors', 1); 
error_reporting(E_ALL);

//$apnsHost = 'gateway.push.apple.com';
$apnsHost = 'gateway.sandbox.push.apple.com';

$apnsPort = 2195;
$apnsCert = 'ck.pem';



$data = array();
$data['id'] = 'userid';
$data['info'] = 'userinfo';

$payload['aps'] = array('alert' => 'hello!', 'badge' => 1, 'sound' => 'default', 'userinfo' => $data);
$payload = json_encode($payload);

$streamContext = stream_context_create();
stream_context_set_option($streamContext, 'ssl', 'local_cert', $apnsCert);
stream_context_set_option($streamContext, 'ssl', 'passphrase', 'no_pass_phrase_yet');

$apns = stream_socket_client('ssl://' . $apnsHost . ':' . $apnsPort, $error, $errorString, 60, STREAM_CLIENT_CONNECT, $streamContext);

if (!$apns) {
	print "Failed to connect $err $errstrn";
	return;
}
else {	
	print "Connection OK\n";
}
	
/*foreach($this->data['udid'] as $id) {
	
	$deviceToken = $id;
	//echo $deviceToken.'\n';
	
	$apnsMessage = chr(0) . pack("n",32) . pack('H*', str_replace(' ', '', $deviceToken)) . pack("n",strlen($payload)) . $payload;
	//print "sending message :" . $payload . "n";  
	
	fwrite($apns, $apnsMessage);

	
	//echo 'errorString:'.$errorString;
	//echo 'error:'.$error;	
	
}*/	

$deviceToken = 'ad155926 5fe0fb68 88bcf36c 3918f11c b6e9bf03 ee83f11d d1211988 8402e16c';
//echo $deviceToken.'\n';

$apnsMessage = chr(0) . pack("n",32) . pack('H*', str_replace(' ', '', $deviceToken)) . pack("n",strlen($payload)) . $payload;
print "sending message :" . $payload . "n";  

fwrite($apns, $apnsMessage);

//exit;
fclose($apns);
exit;

echo date('Y-m-d',1419408030);
exit;
mysql_connect("localhost:8888", "root", "root") or

die ("Couldn't Connect to Database");

mysql_select_db("smartactic_new_live2") or 

die ("Couldn't select Databse");

$query = "SELECT * FROM new_trac WHERE title='BRK'";
$resultID = mysql_query($query);
	
	for($x = 0 ; $x < mysql_num_rows($resultID) ; $x++){
		$listing_array = mysql_fetch_assoc($resultID);
		
		
		$sql = mysql_query("SELECT lic FROM prev_trac WHERE title<>'BRK' and lic = '".$listing_array['lic']."'");
		$product_info = mysql_fetch_assoc ($sql);
		
		if(!empty($product_info)) {
			mysql_query("INSERT INTO `final_trac` (`title`, `lic`, `name`, `phone`, `email`, `city`, `zip`) VALUES ('".$listing_array['title']."', '".$listing_array['lic']."', '".$listing_array['name']."', '".$listing_array['phone']."', '".$listing_array['email']."', '".$listing_array['city']."', '".$listing_array['zip']."')");
		}
	}

exit;


$a = unserialize('a:7:{s:11:"event_cover";s:3:"156";s:17:"event_description";s:407:"As it so contrasted oh estimating instrument. Size like body some one had. Are conduct viewing boy minutes warrant expense. Tolerably behaviour may admitting daughters offending her ask own. Praise effect wishes change way and any wanted. Lively use looked latter regard had. Do he it part more last in. Merits ye if mr narrow points. Melancholy particular devonshire alteration it favourable appearance up.";s:13:"event_speaker";s:14:"Walter Braines";s:14:"event_location";s:36:"10 Rue Lamartine Montpellier, France";s:13:"event_checked";a:1:{i:0;s:7:"checked";}s:11:"event_price";a:2:{s:5:"price";s:17:"180<span>$</span>";s:7:"package";s:7:"Premium";}s:12:"event_others";a:3:{s:7:"website";s:17:"http://google.com";s:8:"audience";s:4:"test";s:10:"eventbrite";s:17:"http://google.com";}}');
print_r($a);
exit;
echo base64_encode(948);
exit;
echo time();
exit;
echo strlen('Vestibulum sapien nisl, ornare auctor, consectetuer quis, posuere tristique, odio. Fusce ultrices ullamcorper odio. Ut augue nulla, interdum at, adipiscing non, tristique eget, neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pede est, condimentum id, scelerisque ac, malesuada non, quam. Proin eu ligula ac sapien suscipit blandit. Suspendisse euismod. Ut accumsan, neque id');
exit;
echo date('Y-m-d a',1437167831);
exit;
echo strtotime('2015-07-16 07:30:48').'<br/>'; 
echo strtotime('2015-03-16 07:30:48').'<br/>';
exit;

echo strtotime('2015-03-16 10:37:31').'<br/>';

echo strtotime('2015-07-16 10:23:31');
exit;

echo date('m-d-Y h:i:s',strtotime('+4 month'));
exit;
echo sha1('vivo2015!');
exit;
$a = strtotime('06/23/2015 05:30 pm');
echo date('m-d-Y h:i:s a',$a);
exit;
echo date ( 'Y-m-d h:i:s', strtotime ( '-7 days' ) );;
exit;
echo strlen("Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac pellentesque fringilla, tortor libero condimen. Aliquam fermem tum nulla felis, sed molestie libero porttitor in.");
exit;
date_default_timezone_set('America/Los_Angeles');
echo date('Y-m-d').'<br/>';
echo date('Y-m-d',1434178799);
exit;

$a = json_decode(' {"submit":"submit","User":{"first_name":"rasel","last_name":"028","username":"rasel_1430160840","password":"123","email":"rasel028@yahoo.com","primary_phone":"rase","selected_agent":"63","user_type":"2","role_id":"7","device":"1","iphone":"1","client_id":"198"}}');
print_r($a);
exit;

echo $file_size = retrieve_remote_file_size( "http://50.18.219.191/ntreis_api/photos/43607940/1.jpg" );

exit;

echo base64_encode("smartxtechnologies@gmail.com");
exit;

$binary=base64_decode($base);
//file_put_contents('photos/1.jpg', $binary);
    header('Content-Type: bitmap; charset=utf-8');
    // Images will be saved under 'www/imgupload/uplodedimages' folder
    $file = fopen('photos/1.jpg', 'wb');
    // Create File
    fwrite($file, $binary);
    fclose($file);
    //echo 'Image upload complete, Please check your php file directory';
exit;












$img_data = "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";
//file_put_contents('photos/1.jpg', $img_data);
//file_put_contents('photos/1.jpg', file_get_contents("http://smartactic.com/img/users/profile_img_609.png"));
file_put_contents('photos/1.jpg', $img_data);
exit;
$str = '{}';
$arr =  json_decode($str);
print_r($arr);
exit;

$loc = 'http://matrixmedia.ntreis.net/mediaserver/GetMedia.ashx?Key=1166903&TableID=9&Type=1&Number=1&Size=3&NNF=1&x=UGFkSWZOZWVkZWQ9ZmFsc2U%29&ufk=obqDRUR7Gizm448sj5cKVbiPvHY%29';
$str = file_get_contents($loc);


file_put_contents('photos/1.jpg', $str);

exit;

print_r(json_decode('{"submit":"submit","User":{"image":"","existingimage":"","id":"651","first_name":"Russ","last_name":"Kabir","username":"Russ_1423672432","password":"123456","email":"russkabir@gmail.com","primary_phone":"123","user_type":"2","address1":"Addr1","address2":"Addr2","city":"","state":"AL","zip":"","client_id":"552","device":"1","iphone":"1"}}'));
exit;

echo md5('admin');
exit;
echo preg_match("/^[a-zA-Z]+$/i",'sdfas dfs-d, f');
exit;

echo uniqid();
exit;
define("base_url","http://www.jamsesh.tv/dev/");
?>
<? echo base_url; exit; ?>
<?

echo md5('123');
exit;
$arr = explode(',','sdfsdf');
print_r($arr);
exit;

echo strlen("We built an ios app which has an option to login through facebook. So, we need a facebook app, so that, users can login through this app.");
exit;
$str = '{"Search":[{"Title":"Thor","Year":"2011","imdbID":"tt0800369","Type":"movie"},{"Title":"Thor: The Dark World","Year":"2013","imdbID":"tt1981115","Type":"movie"},{"Title":"Thor: Tales of Asgard","Year":"2011","imdbID":"tt1667903","Type":"movie"},{"Title":"Almighty Thor","Year":"2011","imdbID":"tt1792794","Type":"movie"},{"Title":"Marvel One-Shot: A Funny Thing Happened on the Way to Thor\'s Hammer","Year":"2011","imdbID":"tt2011109","Type":"movie"},{"Title":"Thor: Legend of the Magical Hammer","Year":"2011","imdbID":"tt1241721","Type":"movie"},{"Title":"Thor\'s Hammer","Year":"1997","imdbID":"tt0709209","Type":"episode"},{"Title":"Thor\'s Chariot","Year":"1998","imdbID":"tt0709208","Type":"episode"},{"Title":"Thor","Year":"2001","imdbID":"tt0551428","Type":"episode"},{"Title":"Thor & Loki: Blood Brothers","Year":"2011–","imdbID":"tt1922373","Type":"series"}]}';
print_r(json_decode($str));
exit;

class FirstData
{
        protected $host = "api.demo.globalgatewaye4.firstdata.com";
        protected $protocol = "https://";
        protected $uri = "/transaction/v12";

        /*Modify this acording to your firstdata api stuff*/
        protected $hmackey = "XXXXXXXXXXXXXXXXXXXXXXX";
        protected $keyid = "XXXXX";
        protected $gatewayid = "XX000-00";
        protected $password = "XXXXXXX";


        public function request()
        {
                $location = $this->protocol . $this->host . $this->uri;
                $request = array(
                        'transaction_type' => "00",
                        'amount' => 10.00,
                        'cc_expiry' => "0415",
                        'cc_number' => '4111111111111111',
                        'cardholder_name' => 'Test',
                        'reference_no' => '23',
                        'customer_ref' => '11',
                        'reference_3' => '234',
                        'gateway_id' => $this->gatewayid,
                        'password' => $this->password,
                );

                $content = json_encode($request);

                var_dump($content);

                $gge4Date = strftime("%Y-%m-%dT%H:%M:%S", time()) . 'Z';
                $contentType = "application/json";
                $contentDigest = sha1($content);
                $contentSize = sizeof($content);
                $method = "POST";

                $hashstr = "$method\n$contentType\n$contentDigest\n$gge4Date\n$this->uri";

                $authstr = 'GGE4_API ' . $this->keyid . ':' . base64_encode(hash_hmac("sha1", $hashstr, $this->hmackey, true));


                $headers = array( 
                        "Content-Type: $contentType",
                        "X-GGe4-Content-SHA1: $contentDigest",
                        "X-GGe4-Date: $gge4Date",
                        "Authorization: $authstr",
                        "Accept: $contentType"
                );

                //Print the headers we area sending
                var_dump($headers);


                //CURL stuff
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_URL, $location);

                //Warning ->>>>>>>>>>>>>>>>>>>>
                /*Hardcoded for easier implementation, DO NOT USE THIS ON PRODUCTION!!*/
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                //Warning ->>>>>>>>>>>>>>>>>>>>

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
                curl_setopt($ch, CURLOPT_VERBOSE, 0);
                curl_setopt($ch, CURLOPT_HEADER, 1);

                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $content);

                //This guy does the job
                $output = curl_exec($ch);

                //echo curl_error($ch); 
                $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
                $header = $this->parseHeader(substr($output, 0, $header_size));
                $body = substr($output, $header_size);

                curl_close($ch);
                //Print the response header
                var_dump($header);

                /* If we get any of this X-GGe4-Content-SHA1 X-GGe4-Date Authorization
                 * then the API call is valid */
                if (isset($header['authorization']))
                {
                        //Ovbiously before we do anything we should validate the hash
                        var_dump(json_decode($body));
                }
                //Otherwise just debug the error response, which is just plain text
                else
                {
                        echo $body;
                }
        }

        private function parseHeader($rawHeader)
        {
                $header = array();

                //http://blog.motane.lu/2009/02/16/exploding-new-lines-in-php/
                $lines = preg_split('/\r\n|\r|\n/', $rawHeader);

                foreach ($lines as $key => $line)
                {
                        $keyval = explode(': ', $line, 2);

                        if (isset($keyval[0]) && isset($keyval[1]))
                        {
                                $header[strtolower($keyval[0])] = $keyval[1];
                        }
                }

                return $header;
        }
}

$firstdata = new FirstData();

$firstdata->request();
exit;
?>
<?php 

$str='{"ParentInfo":{"userID":31,"timeStamp":1406880728,"folderName":"how1","parentID":1406880728,"mainImgName":"main_img1406880728"},"ChildList":[{"childImgName":"small_tag_img_1406880855","rootParentID":1406880728,"tagHierarchyIDs":"1406880728,1406880685,1406880817","childDepthLevel":1,"childTagDescription":"Description","childTagPosition":"{{291, 322}, {40, 40}}","childID":1406880817,"timeStamp":1406880865,"ownParentID":1406880685,"childTagTitle":"","userID":31,"childTagType":"pointtag"},{"childImgName":"","rootParentID":1406880728,"tagHierarchyIDs":"1406880728,1406880685,1406880929","childDepthLevel":1,"childTagDescription":"Description","childTagPosition":"{{89, 349.5}, {40, 40}}","childID":1406880929,"timeStamp":1406880932,"ownParentID":1406880685,"childTagTitle":"","userID":31,"childTagType":"pointtag"}]}';
$tmp_map_data = json_decode($str);
//print_r($tmp_map_data->results[0]->geometry->location);
//exit;
//echo $str = 'Google: '.$tmp_map_data->results[0]->geometry->location->lat.','.$tmp_map_data->results[0]->geometry->location->lng.'<br/>';

print_r($tmp_map_data);
exit;

echo date('d-m-y h:i a',1416047983);
exit;
error_reporting(E_ALL);
ini_set('display_errors', 1);

mysql_connect("localhost:8888", "root", "root") or

die ("Couldn't Connect to Database");

mysql_select_db("ctn") or 

die ("Couldn't select Databse");









	$query_string = "API_KEY=2a890dafacb0f221305398b6949bd77c&phone_number=12146738467&first_name=shah&last_name=rasel&email=shahrasel@gmail.com&new_pin=123456";       

//$url = "https://cp.iwebcab.com/public_api/create_customer.json&".$query_string;


/*$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$query_string);
curl_setopt($ch, CURLOPT_URL, "https://cp.iwebcab.com/public_api/create_customer.json");
curl_setopt($ch, CURLOPT_REFERER, "https://cp.iwebcab.com/public_api/create_customer.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
echo $result = curl_exec($ch);
exit;*/


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://cp.iwebcab.com/public_api/create_customer.json");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$query_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
           
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);

echo $server_output = curl_exec ($ch);
           
 $jasarr = json_decode($server_output);
 print_r($jasarr);
 exit;
	
	
	
	echo date('d-m-Y h:i a',1415389643);
	echo md5("2a890dafacb0f221305398b6949bd77c-123456");
	exit;
	$str = '{
    "jobdata": {
        "result": "success",
        "job_id": "12567",
        "taxi_firm": "391",
        "taxi_id": "0",
        "soft_allocation": "0",
        "hard_allocation": "5",
        "taxi_approved": "N",
        "customer_id": "1",
        "call_id": "0",
        "pickup_text": "London Heathrow Airport - Terminal 1",
        "dropoff_text": "Dominos Pizza,Tolworth, UK",
        "pickup_lat": "51.477501",
        "pickup_long": "-0.461390",
        "dropoff_lat": "51.381870",
        "dropoff_long": "-0.284370",
        "cost": "0.00",
        "currency": "GBP",
        "miles": "1",
        "est_time_duration": "1",
        "name": "James Morris",
        "telephone": "448003102626",
        "telephone_type": "mobile",
        "email": "",
        "pickup_time": "1390051920",
        "pickup_time_delay": "0",
        "status": "V",
        "booking_type": "INSTANT",
        "passengers": "1",
        "cases": "1",
        "vehicle_preference": "NA",
        "wheelchair": "N",
        "notes": "Booked via the Automated Telephone IVR",
        "order_method": "IVR",
        "time_created": "1390051920",
        "time_lastupdate": "1392001121",
        "time_queued": "1390051945",
        "time_pickedup": "",
        "time_completed": "",
        "flight_airport_iata": "",
        "flight_iata": "",
        "flight_number": "0",
        "flight_date": "",
        "flight_id": "",
        "fare_charge_method": "CASH",
        "fare_table": "0",
        "invoice_id": "0",
        "recurring_job_id": "0",
        "start_job_lat": "0.000000",
        "start_job_long": "0.000000",
        "start_job_eta": "0",
        "feedback_score": "0",
        "pickup_time_text": "18th January at 13:32",
        "currency_sign": "&pound;"
    },
    "taxidata": {
        "result": "error",
        "error": "Not Allocated"
    }
}';
$jasarr = json_decode($str);
print_r($jasarr);
foreach($jasarr as $jasar) {
	echo $jasar->text.'<br/>';
}
exit;
?>
<?php print_r($_POST); ?>
<form action="" method="post">
	<input type="text" name="fname">
    <input type="text" name="lname" disabled="disabled" value="123">
    <input type="submit" value="submit">
</form>

<?php
exit;
echo $str = mktime(0,0,1,12,31,2014);
echo '<br/>';
echo date('Y-m-d a',$str);
exit;
/*$tmpaddr = urlencode('Akeleiweg 2,Iserlohn-58638,Deutschland');
$data = file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=".$tmpaddr."&sensor=false");
$tmp_map_data=json_decode($data);

$my_post['latitude'] = $tmp_map_data->results[0]->geometry->location->lat;
$my_post['longitude'] = $tmp_map_data->results[0]->geometry->location->lng;
print_r($my_post);
exit;*/

/*$str = '{
    "result": "success",
    "phone_number": 4477881554455,
    "customer_id": 80733
}';
$a = json_decode($str);
print_r($a);exit;*/

//echo md5('2a890dafacb0f221305398b6949bd77c-123456');
echo md5('optadm157');
exit;
	/*$array = unserialize('a:1:{s:13:"administrator";b:1;}');

print_r($array);*/
/*echo $str = stripslashes("24\/10\/2014");
exit;

$str = '56####20/05/2014####10am-2pm';
$tmparr= explode("####",$str);


$start = time();
$dates=array();
for($i = 2; $i<=11; $i++)
{
    array_push($dates,date('Y-m-d', strtotime("+$i day", $start)));
}
print_r($dates);
exit;
echo base64_encode('123');
exit;
$phrase = "(23.8798226, 90.39796939999997)";
$healthy = array("(", ")", " ");
$yummy   = array("", "", "");
echo $newphrase = str_replace($healthy, $yummy, $phrase);
exit;
$str = "https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452";
$json_str = file_get_contents($str);
$json_parse_str = json_decode($json_str);
echo $json_parse_str->results[0]->formatted_address;
exit;*/
$ch = curl_init();

/*curl_setopt($ch, CURLOPT_URL,"https://cp.iwebcab.com/public_api/live.json");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"API_KEY=1lc60hq937C8xFJVZT4qoiRoh&COMMAND=instant_booking&PHONE_NUMBER=448003102626&CUSTOMER_ID=33675&CUSTOMER_HASH=6573604589d6d3ea5d2535b9a22a8c2b&PASSENGER_NAME=Joe%20Bloggs&PASSENGER_PHONE_NUMBER=447719258874&PASSENGER_TOTAL=2&CASES_TOTAL=2&WHEELCHAIR=false&PICKUP_ADDRESS=13%20Down%20Town,%20London%20,%20SW139KD,%20UK&PICKUP_LAT=51.507323&PICKUP_LONG=-0.127754&DROPOFF_ADDRESS=London&DROPOFF_LAT=51.507323&DROPOFF_LONG=-0.127754&DISTANCE=5.3&DURATION=13&COST=16.50&NOTES=Do%20not%20ring%20bell&PICKUP_TIME=NOW");*/


curl_setopt($ch, CURLOPT_URL,"https://cp.iwebcab.com/public_api/create_customer.json");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"API_KEY=2a890dafacb0f221305398b6949bd77c&phone_number=2146738467&first_name=shah&last_name=rasel&email=shahrasel@gmail.com&new_pin=123456");
//outputs: {"result":"success","phone_number":"12146738467","customer_id":81791}


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

echo $server_output;
//print_r($server_output);
exit;


echo md5("1lc60hq937C8xFJVZT4qoiRoh-542319");
exit;

$url = "http://inspireomedia.net/preview/ctn/school-landing/";
$parts = explode('/', rtrim($url,'/'));
echo $last = end($parts);
//echo basename(dirname($url));
exit;


$pwd1='123';
echo $pwd=base64_encode($pwd1);
exit;
echo strlen('National Restaurant Association (NRA) has named Kitchen Innovations® (KI)&nb');
exit;
echo md5('emerson');
exit;
$tmparr['administrator'] = 1;
echo serialize($tmparr);
exit;
	echo date('Y-m-d a',1410966804);
	exit;
	echo strlen('Years of delivering high performance mean we have a comprehensive list of spanning industries, geographies and business functions');
	exit;
  function ago($timestamp){
   $difference = time() - $timestamp;
   $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
   $lengths = array("60","60","24","7","4.35","12","10");
   for($j = 0; $difference >= $lengths[$j]; $j++)
   $difference /= $lengths[$j];
   $difference = round($difference);
   if($difference != 1) $periods[$j].= "s";
   $text = "$difference $periods[$j] ago";
   return $text;
  }
  
  echo ago('1300000000');
  exit;
?>
<?php
echo date('Y-m-d a',time());
exit;
$url = 'http://blabla/blablabla/dut2a/news.php';
$tokens = explode('/', $url);
echo $tokens[sizeof($tokens)-1];
exit; 
function adjustOpenHouseTime($time){
	if(!empty($time)) {
		$fintime = '';
		if(strlen($time) >=3) {
			if(strlen($time) == 4) {
				$a = substr($time,0,2);
				$b = substr($time,2,3);
				$fintime = sprintf('%02s', $a).':'.sprintf('%02s', $b);
			}
			else {
				$a = substr($time,0,1);
				$b = substr($time,1,2);
				$fintime = sprintf('%02s', $a).':'.sprintf('%02s', $b);
			}			
		}
	}
	return $fintime;
}
echo adjustOpenHouseTime('1630');
exit;
/*$a = strtotime('2014-01-27T18:43:05.930');
echo date('Y-m-d a',$a);
exit;*/
$tmp_new_address = '40489,Germany';
$data = file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($tmp_new_address)."&sensor=false");
$tmp_map_data=json_decode($data);	
echo $tmp_map_data->results[0]->address_components[1]->long_name;
exit;					
						
$tmpaddr = urlencode('Akeleiweg 2,Iserlohn-58638,Deutschland');
$data = file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=".$tmpaddr."&sensor=false");
$tmp_map_data=json_decode($data);

$my_post['latitude'] = $tmp_map_data->results[0]->geometry->location->lat;
$my_post['longitude'] = $tmp_map_data->results[0]->geometry->location->lng;
print_r($my_post);
exit;

function GetMonthsFromDate($myDate) {
  $year = (int) date('Y',$myDate);
  $months = (int) date('m', $myDate);
  $dateAsMonths = 12*$year + $months;
  return $dateAsMonths;
}

function GetDateFromMonths($months) {
  $years = (int) $months / 12;
  $month = (int) $months % 12;
  $myDate = strtotime("$years/$month/01"); //makes a date like 2009/12/01
  return $myDate;
}


$startDate = strtotime("2014/01/15");
$endDate   = strtotime("2014/07/14");

$currentDate = $endDate;

while ($currentDate >= $startDate) {
    echo date('Y/m',$currentDate).'<br/>';
    $currentDate = strtotime( date('Y/m/01/',$currentDate).' -1 month');
}

?>
