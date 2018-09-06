<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('mahal');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=01&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);

$name = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$nama = $gender.' '.$exp_nam[0];
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$user = ' @['.$me[id].':] ';
$user1 ='@['.$stat[data][$i-1][from][id].':'.$exp_nam[0].']';


$kata= array(
'cinta.php',
'motivasi.php',
'motto.php',
'bijak.php',
);

$jam = array(
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'00',
);
 
$sapa = array(
'',
);

$ucapan = gmdate('H',time()+7*3600); 
$ucapan = str_replace($jam,$sapa,$ucapan);

$emo=array (
'😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊','😋','😎','😍','😘','😗','😙','😚','☄1�7','🙂','🙄','😮','😛','😜','😝','😌','😒','😲','😢','😭','🤓','😡','😠','😳','😈','👿','😺','😸','😹','😻','😼','😽','🙀','😿','😾','🙈','🙉','🙊','💪','👈','👉','☄1�7','👆','👇','✄1�7','🤞','🖖','🤘','🤙','🖐','✄1�7','👌','👍','👎','✄1�7','👊','🤛','🤜','🤚','💚','💛','🧡','💜','🖤','💝','💞','💙','🐺','🦊','🐱','🐈','🦁','🐯','🐅','🐆','🦄','🦓','🦌','🐮','🐂','🐃','🐄','🐏','🐧','🐦','🐥','🐤','🐣','🐓','🐔','🦃','🐾','🐼','🐨','🐻','🦔','🐿','🐇','🐰','🐹','🐀','🐁','🐭','🦏','🐘','🦒','🐫','🐪','🐐','🐑','🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✄1�7','✄1�7','☄1�7','🇵🇰',
);

$emoticon=$emo[rand(0,count($emo)-1)];

$emo1=array (
'😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊','😋','😎','😍','😘','😗','😙','😚','☄1�7','🙂','🙄','😮','😛','😜','😝','😌','😒','😲','😢','😭','🤓','😡','😠','😳','😈','👿','😺','😸','😹','😻','😼','😽','🙀','😿','😾','🙈','🙉','🙊','💪','👈','👉','☄1�7','👆','👇','✄1�7','🤞','🖖','🤘','🤙','🖐','✄1�7','👌','👍','👎','✄1�7','👊','🤛','🤜','🤚','💚','💛','🧡','💜','🖤','💝','💞','💙','🐺','🦊','🐱','🐈','🦁','🐯','🐅','🐆','🦄','🦓','🦌','🐮','🐂','🐃','🐄','🐏','🐧','🐦','🐥','🐤','🐣','🐓','🐔','🦃','🐾','🐼','🐨','🐻','🦔','🐿','🐇','🐰','🐹','🐀','🐁','🐭','🦏','🐘','🦒','🐫','🐪','🐐','🐑','🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✄1�7','✄1�7','☄1�7','🇵🇰',
);

$emoticon1=$emo1[rand(0,count($emo1)-1)];

$emoji=array(
urldecode('%F3%BE%80%80'),
urldecode('%F3%BE%80%81'),
urldecode('%F3%BE%80%82'),
urldecode('%F3%BE%80%83'),
urldecode('%F3%BE%80%84'),
urldecode('%F3%BE%80%85'),
urldecode('%F3%BE%80%87'), 
urldecode('%F3%BE%80%B8'), 
urldecode('%F3%BE%80%BC'),
urldecode('%F3%BE%80%BD'),
urldecode('%F3%BE%80%BE'),
urldecode('%F3%BE%80%BF'),
urldecode('%F3%BE%81%80'),
urldecode('%F3%BE%81%81'),
urldecode('%F3%BE%81%82'),
urldecode('%F3%BE%81%83'),
urldecode('%F3%BE%81%85'),
urldecode('%F3%BE%81%86'),
urldecode('%F3%BE%81%87'),
urldecode('%F3%BE%81%88'),
urldecode('%F3%BE%81%89'), 
urldecode('%F3%BE%81%91'),
urldecode('%F3%BE%81%92'),
urldecode('%F3%BE%81%93'), 
urldecode('%F3%BE%86%90'),
urldecode('%F3%BE%86%91'),
urldecode('%F3%BE%86%92'),
urldecode('%F3%BE%86%93'),
urldecode('%F3%BE%86%94'),
urldecode('%F3%BE%86%96'),
urldecode('%F3%BE%86%9B'),
urldecode('%F3%BE%86%9C'),
urldecode('%F3%BE%86%9D'),
urldecode('%F3%BE%86%9E'),
urldecode('%F3%BE%86%A0'),
urldecode('%F3%BE%86%A1'),
urldecode('%F3%BE%86%A2'),
urldecode('%F3%BE%86%A4'),
urldecode('%F3%BE%86%A5'),
urldecode('%F3%BE%86%A6'),
urldecode('%F3%BE%86%A7'),
urldecode('%F3%BE%86%A8'),
urldecode('%F3%BE%86%A9'),
urldecode('%F3%BE%86%AA'),
urldecode('%F3%BE%86%AB'),
urldecode('%F3%BE%86%AE'),
urldecode('%F3%BE%86%AF'),
urldecode('%F3%BE%86%B0'),
urldecode('%F3%BE%86%B1'),
urldecode('%F3%BE%86%B2'),
urldecode('%F3%BE%86%B3'), 
urldecode('%F3%BE%86%B5'),
urldecode('%F3%BE%86%B6'),
urldecode('%F3%BE%86%B7'),
urldecode('%F3%BE%86%B8'),
urldecode('%F3%BE%86%BB'),
urldecode('%F3%BE%86%BC'),
urldecode('%F3%BE%86%BD'),
urldecode('%F3%BE%86%BE'),
urldecode('%F3%BE%86%BF'),
urldecode('%F3%BE%87%80'),
urldecode('%F3%BE%87%81'),
urldecode('%F3%BE%87%82'),
urldecode('%F3%BE%87%83'),
urldecode('%F3%BE%87%84'),
urldecode('%F3%BE%87%85'),
urldecode('%F3%BE%87%86'),
urldecode('%F3%BE%87%87'), 
urldecode('%F3%BE%87%88'),
urldecode('%F3%BE%87%89'),
urldecode('%F3%BE%87%8A'),
urldecode('%F3%BE%87%8B'),
urldecode('%F3%BE%87%8C'),
urldecode('%F3%BE%87%8D'),
urldecode('%F3%BE%87%8E'),
urldecode('%F3%BE%87%8F'),
urldecode('%F3%BE%87%90'),
urldecode('%F3%BE%87%91'),
urldecode('%F3%BE%87%92'),
urldecode('%F3%BE%87%93'),
urldecode('%F3%BE%87%94'),
urldecode('%F3%BE%87%95'),
urldecode('%F3%BE%87%96'),
urldecode('%F3%BE%87%97'),
urldecode('%F3%BE%87%98'),
urldecode('%F3%BE%87%99'),
urldecode('%F3%BE%87%9B'), 
urldecode('%F3%BE%8C%AC'),
urldecode('%F3%BE%8C%AD'),
urldecode('%F3%BE%8C%AE'),
urldecode('%F3%BE%8C%AF'),
urldecode('%F3%BE%8C%B0'),
urldecode('%F3%BE%8C%B2'),
urldecode('%F3%BE%8C%B3'),
urldecode('%F3%BE%8C%B4'),
urldecode('%F3%BE%8C%B6'),
urldecode('%F3%BE%8C%B8'),
urldecode('%F3%BE%8C%B9'),
urldecode('%F3%BE%8C%BA'),
urldecode('%F3%BE%8C%BB'),
urldecode('%F3%BE%8C%BC'),
urldecode('%F3%BE%8C%BD'),
urldecode('%F3%BE%8C%BE'),
urldecode('%F3%BE%8C%BF'), 
urldecode('%F3%BE%8C%A0'),
urldecode('%F3%BE%8C%A1'),
urldecode('%F3%BE%8C%A2'),
urldecode('%F3%BE%8C%A3'),
urldecode('%F3%BE%8C%A4'),
urldecode('%F3%BE%8C%A5'),
urldecode('%F3%BE%8C%A6'),
urldecode('%F3%BE%8C%A7'),
urldecode('%F3%BE%8C%A8'),
urldecode('%F3%BE%8C%A9'),
urldecode('%F3%BE%8C%AA'),
urldecode('%F3%BE%8C%AB'), 
urldecode('%F3%BE%8D%80'),
urldecode('%F3%BE%8D%81'),
urldecode('%F3%BE%8D%82'),
urldecode('%F3%BE%8D%83'),
urldecode('%F3%BE%8D%84'),
urldecode('%F3%BE%8D%85'),
urldecode('%F3%BE%8D%86'),
urldecode('%F3%BE%8D%87'),
urldecode('%F3%BE%8D%88'),
urldecode('%F3%BE%8D%89'),
urldecode('%F3%BE%8D%8A'),
urldecode('%F3%BE%8D%8B'),
urldecode('%F3%BE%8D%8C'),
urldecode('%F3%BE%8D%8D'),
urldecode('%F3%BE%8D%8F'),
urldecode('%F3%BE%8D%90'),
urldecode('%F3%BE%8D%97'),
urldecode('%F3%BE%8D%98'),
urldecode('%F3%BE%8D%99'),
urldecode('%F3%BE%8D%9B'),
urldecode('%F3%BE%8D%9C'),
urldecode('%F3%BE%8D%9E'), 
urldecode('%F3%BE%93%B2'), 
urldecode('%F3%BE%93%B4'),
urldecode('%F3%BE%93%B6'), 
urldecode('%F3%BE%94%90'),
urldecode('%F3%BE%94%92'),
urldecode('%F3%BE%94%93'),
urldecode('%F3%BE%94%96'),
urldecode('%F3%BE%94%97'),
urldecode('%F3%BE%94%98'),
urldecode('%F3%BE%94%99'),
urldecode('%F3%BE%94%9A'),
urldecode('%F3%BE%94%9C'),
urldecode('%F3%BE%94%9E'),
urldecode('%F3%BE%94%9F'),
urldecode('%F3%BE%94%A4'),
urldecode('%F3%BE%94%A5'),
urldecode('%F3%BE%94%A6'),
urldecode('%F3%BE%94%A8'), 
urldecode('%F3%BE%94%B8'),
urldecode('%F3%BE%94%BC'),
urldecode('%F3%BE%94%BD'), 
urldecode('%F3%BE%9F%9C'), 
urldecode('%F3%BE%A0%93'),
urldecode('%F3%BE%A0%94'),
urldecode('%F3%BE%A0%9A'),
urldecode('%F3%BE%A0%9C'),
urldecode('%F3%BE%A0%9D'),
urldecode('%F3%BE%A0%9E'),
urldecode('%F3%BE%A0%A3'), 
urldecode('%F3%BE%A0%A7'),
urldecode('%F3%BE%A0%A8'),
urldecode('%F3%BE%A0%A9'), 
urldecode('%F3%BE%A5%A0'), 
urldecode('%F3%BE%A6%81'),
urldecode('%F3%BE%A6%82'),
urldecode('%F3%BE%A6%83'), 
urldecode('%F3%BE%AC%8C'),
urldecode('%F3%BE%AC%8D'),
urldecode('%F3%BE%AC%8E'),
urldecode('%F3%BE%AC%8F'),
urldecode('%F3%BE%AC%90'),
urldecode('%F3%BE%AC%91'),
urldecode('%F3%BE%AC%92'),
urldecode('%F3%BE%AC%93'),
urldecode('%F3%BE%AC%94'),
urldecode('%F3%BE%AC%95'),
urldecode('%F3%BE%AC%96'),
urldecode('%F3%BE%AC%97'),
);
$emo1=$emoji[rand(0,count($emoji)-1)];
$emo2=$emoji[rand(0,count($emoji)-1)];
$emo3=$emoji[rand(0,count($emoji)-1)];
$emo4=$emoji[rand(0,count($emoji)-1)]; 
$emo5=$emoji[rand(0,count($emoji)-1)];
$emo6=$emoji[rand(0,count($emoji)-1)];
$emo7=$emoji[rand(0,count($emoji)-1)];
$emo8=$emoji[rand(0,count($emoji)-1)];
$emo9=$emoji[rand(0,count($emoji)-1)];
$emo10=$emoji[rand(0,count($emoji)-1)];
$emo11=$emoji[rand(0,count($emoji)-1)];
$emo12=$emoji[rand(0,count($emoji)-1)];
$emo13=$emoji[rand(0,count($emoji)-1)];
$emo14=$emoji[rand(0,count($emoji)-1)]; 
$emo15=$emoji[rand(0,count($emoji)-1)];
$emo16=$emoji[rand(0,count($emoji)-1)];
$emo17=$emoji[rand(0,count($emoji)-1)];
$emo18=$emoji[rand(0,count($emoji)-1)]; 
$emo19=$emoji[rand(0,count($emoji)-1)];
$emo20=$emoji[rand(0,count($emoji)-1)];
$emo21=$emoji[rand(0,count($emoji)-1)];
$emo22=$emoji[rand(0,count($emoji)-1)];
$emo23=$emoji[rand(0,count($emoji)-1)];
$emo24=$emoji[rand(0,count($emoji)-1)];
$emo25=$emoji[rand(0,count($emoji)-1)];
$emo26=$emoji[rand(0,count($emoji)-1)];
$emo27=$emoji[rand(0,count($emoji)-1)];
$emo28=$emoji[rand(0,count($emoji)-1)]; 
$emo29=$emoji[rand(0,count($emoji)-1)];
$emo30=$emoji[rand(0,count($emoji)-1)];
$emo31=$emoji[rand(0,count($emoji)-1)];
$emo32=$emoji[rand(0,count($emoji)-1)]; 
$emo33=$emoji[rand(0,count($emoji)-1)];
$emo34=$emoji[rand(0,count($emoji)-1)];
$emo35=$emoji[rand(0,count($emoji)-1)];
$emo36=$emoji[rand(0,count($emoji)-1)];
$emo37=$emoji[rand(0,count($emoji)-1)];
$emo38=$emoji[rand(0,count($emoji)-1)];
$emo39=$emoji[rand(0,count($emoji)-1)];
$emo40=$emoji[rand(0,count($emoji)-1)];
$emo41=$emoji[rand(0,count($emoji)-1)];
$emo42=$emoji[rand(0,count($emoji)-1)];
$emo43=$emoji[rand(0,count($emoji)-1)];
$emo44=$emoji[rand(0,count($emoji)-1)]; 
$emo45=$emoji[rand(0,count($emoji)-1)];
$emo46=$emoji[rand(0,count($emoji)-1)];
$emo47=$emoji[rand(0,count($emoji)-1)];
$emo48=$emoji[rand(0,count($emoji)-1)];
$emo49=$emoji[rand(0,count($emoji)-1)];
$emo50=$emoji[rand(0,count($emoji)-1)];
$emo51=$emoji[rand(0,count($emoji)-1)];
$emo52=$emoji[rand(0,count($emoji)-1)];
$emo53=$emoji[rand(0,count($emoji)-1)];
$emo54=$emoji[rand(0,count($emoji)-1)]; 
$emo55=$emoji[rand(0,count($emoji)-1)];
$emo56=$emoji[rand(0,count($emoji)-1)];
$emo57=$emoji[rand(0,count($emoji)-1)];
$emo58=$emoji[rand(0,count($emoji)-1)]; 
$emo59=$emoji[rand(0,count($emoji)-1)];
$emo60=$emoji[rand(0,count($emoji)-1)];
$emo61=$emoji[rand(0,count($emoji)-1)];
$emo62=$emoji[rand(0,count($emoji)-1)];
$emo63=$emoji[rand(0,count($emoji)-1)];
$emo64=$emoji[rand(0,count($emoji)-1)];
$emo65=$emoji[rand(0,count($emoji)-1)];
$emo66=$emoji[rand(0,count($emoji)-1)];
$emo67=$emoji[rand(0,count($emoji)-1)];
$emo68=$emoji[rand(0,count($emoji)-1)]; 
$emo69=$emoji[rand(0,count($emoji)-1)];
$emo70=$emoji[rand(0,count($emoji)-1)];
$emo71=$emoji[rand(0,count($emoji)-1)];
$emo72=$emoji[rand(0,count($emoji)-1)]; 
$emo73=$emoji[rand(0,count($emoji)-1)];
$emo74=$emoji[rand(0,count($emoji)-1)];
$emo75=$emoji[rand(0,count($emoji)-1)];
$emo76=$emoji[rand(0,count($emoji)-1)];
$emo77=$emoji[rand(0,count($emoji)-1)];
$emo78=$emoji[rand(0,count($emoji)-1)];
$emo79=$emoji[rand(0,count($emoji)-1)];
$emo80=$emoji[rand(0,count($emoji)-1)];
$emo81=$emoji[rand(0,count($emoji)-1)];
$emo22=$emoji[rand(0,count($emoji)-1)];
$emo83=$emoji[rand(0,count($emoji)-1)];
$emo84=$emoji[rand(0,count($emoji)-1)]; 
$emo85=$emoji[rand(0,count($emoji)-1)];
$emo86=$emoji[rand(0,count($emoji)-1)];
$emo87=$emoji[rand(0,count($emoji)-1)];
$emo88=$emoji[rand(0,count($emoji)-1)];
$emo89=$emoji[rand(0,count($emoji)-1)];
$emo90=$emoji[rand(0,count($emoji)-1)];
$emo91=$emoji[rand(0,count($emoji)-1)];
$emo92=$emoji[rand(0,count($emoji)-1)];
$emo33=$emoji[rand(0,count($emoji)-1)];
$emo44=$emoji[rand(0,count($emoji)-1)]; 
$emo95=$emoji[rand(0,count($emoji)-1)];
$emo96=$emoji[rand(0,count($emoji)-1)];
$emo97=$emoji[rand(0,count($emoji)-1)];
$emo98=$emoji[rand(0,count($emoji)-1)]; 
$emo99=$emoji[rand(0,count($emoji)-1)];
$emo100=$emoji[rand(0,count($emoji)-1)];
$emo101=$emoji[rand(0,count($emoji)-1)];
$emo102=$emoji[rand(0,count($emoji)-1)];
$emo103=$emoji[rand(0,count($emoji)-1)];
$emo104=$emoji[rand(0,count($emoji)-1)];
$emo105=$emoji[rand(0,count($emoji)-1)];
$emo106=$emoji[rand(0,count($emoji)-1)];
$emo107=$emoji[rand(0,count($emoji)-1)];
$emo108=$emoji[rand(0,count($emoji)-1)]; 
$emo109=$emoji[rand(0,count($emoji)-1)];
$emo110=$emoji[rand(0,count($emoji)-1)];
$emo111=$emoji[rand(0,count($emoji)-1)];
$emo112=$emoji[rand(0,count($emoji)-1)]; 
$emo113=$emoji[rand(0,count($emoji)-1)];
$emo114=$emoji[rand(0,count($emoji)-1)];
$emo115=$emoji[rand(0,count($emoji)-1)];
$emo116=$emoji[rand(0,count($emoji)-1)];
$emo117=$emoji[rand(0,count($emoji)-1)];
$emo118=$emoji[rand(0,count($emoji)-1)];
$emo119=$emoji[rand(0,count($emoji)-1)];
$emo120=$emoji[rand(0,count($emoji)-1)];
$emo121=$emoji[rand(0,count($emoji)-1)];
$emo122=$emoji[rand(0,count($emoji)-1)];
$emo123=$emoji[rand(0,count($emoji)-1)];
$emo124=$emoji[rand(0,count($emoji)-1)];
$emo125=$emoji[rand(0,count($emoji)-1)];
$emo126=$emoji[rand(0,count($emoji)-1)];
$emo127=$emoji[rand(0,count($emoji)-1)];
$emo128=$emoji[rand(0,count($emoji)-1)];
$emo129=$emoji[rand(0,count($emoji)-1)]; 
$emo130=$emoji[rand(0,count($emoji)-1)];
$emo131=$emoji[rand(0,count($emoji)-1)];
$emo132=$emoji[rand(0,count($emoji)-1)];
$emo133=$emoji[rand(0,count($emoji)-1)]; 
$emo134=$emoji[rand(0,count($emoji)-1)];
$emo135=$emoji[rand(0,count($emoji)-1)];
$emo136=$emoji[rand(0,count($emoji)-1)];
$emo137=$emoji[rand(0,count($emoji)-1)];
$emo138=$emoji[rand(0,count($emoji)-1)];
$emo139=$emoji[rand(0,count($emoji)-1)];
$emo140=$emoji[rand(0,count($emoji)-1)];
$emo141=$emoji[rand(0,count($emoji)-1)];
$emo142=$emoji[rand(0,count($emoji)-1)];
$emo143=$emoji[rand(0,count($emoji)-1)];
$emo144=$emoji[rand(0,count($emoji)-1)];
$emo145=$emoji[rand(0,count($emoji)-1)];
$emo146=$emoji[rand(0,count($emoji)-1)];
$emo147=$emoji[rand(0,count($emoji)-1)];
$emo148=$emoji[rand(0,count($emoji)-1)];
$emo149=$emoji[rand(0,count($emoji)-1)];
$emo150=$emoji[rand(0,count($emoji)-1)]; 
$emo151=$emoji[rand(0,count($emoji)-1)];
$emo152=$emoji[rand(0,count($emoji)-1)];
$emo153=$emoji[rand(0,count($emoji)-1)];
$emo154=$emoji[rand(0,count($emoji)-1)]; 
$emo155=$emoji[rand(0,count($emoji)-1)];
$emo156=$emoji[rand(0,count($emoji)-1)];
$emo157=$emoji[rand(0,count($emoji)-1)];
$emo158=$emoji[rand(0,count($emoji)-1)];
$emo159=$emoji[rand(0,count($emoji)-1)];
$emo160=$emoji[rand(0,count($emoji)-1)];
$emo161=$emoji[rand(0,count($emoji)-1)];
$emo162=$emoji[rand(0,count($emoji)-1)];
$emo163=$emoji[rand(0,count($emoji)-1)];
$emo164=$emoji[rand(0,count($emoji)-1)];
$emo165=$emoji[rand(0,count($emoji)-1)];
$emo166=$emoji[rand(0,count($emoji)-1)];
$emo167=$emoji[rand(0,count($emoji)-1)];
$emo168=$emoji[rand(0,count($emoji)-1)];
$emo106=$emoji[rand(0,count($emoji)-1)];
$emo169=$emoji[rand(0,count($emoji)-1)];
$emo170=$emoji[rand(0,count($emoji)-1)]; 
$emo171=$emoji[rand(0,count($emoji)-1)];
$emo172=$emoji[rand(0,count($emoji)-1)];
$emo173=$emoji[rand(0,count($emoji)-1)];
$emo174=$emoji[rand(0,count($emoji)-1)]; 
$emo175=$emoji[rand(0,count($emoji)-1)];
$emo176=$emoji[rand(0,count($emoji)-1)];
$emo177=$emoji[rand(0,count($emoji)-1)];
$emo178=$emoji[rand(0,count($emoji)-1)];
$emo179=$emoji[rand(0,count($emoji)-1)];
$emo180=$emoji[rand(0,count($emoji)-1)];































$text = array(
'
 '.$emo1.' '.$user1.'
 🏵 AAO NA JANI KHASHBUU LAGA KE 🌹
🇵🇰 CRACKERS-BOT ,TK 🌵',


     ''.$user1.' '.$emo16.' 
 🏵 APKI DP OXM HAE 🌹
🇵🇰 CRACKERS-BOT ,TK 🌵',
      

       
          
           ''.$user1.' '.$emo29.' 
 🌹 ADD CLOSE 🌹
🇵🇰 CRACKERS-BOT ,TK 🌹',
           


       ''.$emo33.' '.$user1.' 
 🌹 TOPPER BOT USE KYA KARO 🌹
🇵🇰 CRACKERS-BOT ,TK 🌹',
       


      ''.$user1.' '.$emo39.'  
 🌹 KYA APKA BOT SAFE HAE? 🇵🇰
🇵🇰 CRACKERS-BOT ,TK 🌹',
       


       ''.$emo48.' '.$user1.'
 🌹 YAAR CLOSE KAR0 🌹
🇵🇰 CRACKERS-BOT ,TK 🌹',
      


      ''.$user1.' '.$emo52.'
 🌹 CEACKERS-BOT ,TK 🌷 USE KYA KARO 🌼',
     

 
);
$comments = $text[rand(0,count($text)-1)];

$site = ''.$emoticon.' 🇵🇰 AAO NA JANI KHASHBUU LAGA KE 🇵🇰 '.$emoticon.'';

$return = ' '.$comments.' 
'.$site.' ';



auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=WOW&method=POST&access_token='.$token.'');
echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>
