<?php


ob_start();
define('API_KEY','6577652040:AAHVIFPmM5mgFJkcSVXF_UROJr4_BR3SPgg'); 

if(true){
error_reporting(E_ALL & ~(E_NOTICE | E_USER_NOTICE | E_DEPRECATED));
ini_set('display_errors', 1);
}
function del($nomi){
   array_map('unlink', glob("$nomi"));
   }
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$yangilash = json_decode(file_get_contents('php://input'));
$uzkmm = $yangilash->message;
$cid = $uzkmm->chat->id;
$text= $uzkmm->text;
$UzCode01= $uzkmm->text;
$data = $yangilash->callback_query->data;
$mmid = $yangilash->callback_query->message->message_id;
$ccid = $yangilash->callback_query->message->chat->id;



$name=$uzkmm->from->first_name;
$data = $yangilash->callback_query->data;
$datatext=$api[0]->symbol[0]->data;
$cqid = $yangilash->callback_query->id;
$id=$uzkmm->from->id;
$familiya=$uzkmm->from->last_name;
$cbid = $yangilash->callback_query->from->id;
$cname = $yangilash->callback_query->message->from->first_name;
$cuid = $yangilash->callback_query->message->from->id;
$sreplyd = $uzkmm->reply_to_message->document;
$edname = $editm ->from->first_name;
$uzkmm = $yangilash->message;
$mesid = $uzkmm->message_id;
$mid = $uzkmm->message_id;
$chat_id = $uzkmm->chat->id;
$forward = $yangilash->message->forward_from;
$editm = $yangilash->edited_message;
$fadmin = $uzkmm->from->id;
$tx = $uzkmm->text;
$mesid = $uzkmm->message_id;
$mid = $uzkmm->message_id;
$name = $uzkmm->from->first_name;
$user1 = $uzkmm->from->username;
$id = $uzkmm->reply_to_message->from->id;   
$repmid = $uzkmm->reply_to_message->message_id; 
$repname = $uzkmm->reply_to_message->from->first_name;
$repulogin = $uzkmm->reply_to_message->from->username;
$reply = $uzkmm->reply_to_message;
$sreply = $uzkmm->reply_to_message->text;
$edname = $editm ->from->first_name;
$forward2 = $yangilash->message->forward_from;
$editm = $yangilash->edited_message;
mkdir("data");
mkdir("data/$fadmin");
$uid = $uzkmm->from->id;
$reply = $uzkmm->reply_to_message->text;
$replymenu = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);
 $inline = $yangilash->callback_query->data;
$cid2 = $yangilash->callback_query->message->chat->id; 
$reply = $uzkmm->reply_to_message->text;  

$rpl = json_encode([
    'resize_keyboard'=>false,
    'force_reply'=>true,
    'selective'=>true
     ]);

mkdir("matn");

$nazad="💫Orqaga";
$admin = "5466640949"; 
$boot="UzUnversalBit"; 
$mkm="🥀Botimiz: @$boot  ᵈᵒ'ˢᵗˡᵃʳᵍᵃ ʰᵃᵐ ᵘˡᵃˢʰⁱⁿᵍ";
$CM="Wolf_wolk1o";
$reklama = "[𝚁𝚎𝚔𝚕𝚊𝚖𝚊](t.me/Ramantika_Vediolar1)";
$sibot = "";
$timeusa = date("H:i",strtotime("-6 hour")); 
$timerus=date("H:i",strtotime("1 hour"));
$timebra=date("H:i",strtotime("-5 hour"));
$timepor=date("H:i",strtotime("-1 hour"));
$timedub=date("H:i",strtotime("2 hour"));
$timearb=date("H:i",strtotime("0 hour"));
$timeisp=date("H:i",strtotime("0 hour"));
$timeger=date("H:i",strtotime("0 hour"));
$timeqir=date("H:i",strtotime("4 hour"));
$timeyap=date("H:i",strtotime("+7 hour"));
$kanalimz ="@Vip_blogers";
$okun=date("n");
$oynoms = "1Yanvar1 2Fevral2 3Mart3 4Aprel4 5May5 6Iyun6 7Iyul7 8Avgust8 9Sentabr9 10Oktabr10 11Noyabr11 12Dekabr12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$kun = date("d",strtotime("2 hour"));
$kunlar = date("d.m",strtotime("2 hour"));
$soat = date("H:i:s",strtotime("2 hour"));
$yil = date('Y',strtotime('2 hour'));
$sana="📆Hozir: $yil-Yil, $kun-$oy, $soat";



$cid = $uzkmm->chat->id;
$udar = $uzkmm->text;
$uid = $uzkmm->from->id;
$reply = $uzkmm->reply_to_message->text;
$adminmenu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📧Xabar Jo'natish"],['text'=>"📊Statistika"]],
[['text'=>"💫Ortga"]]]
]);

$ret1 = bot("getChatMember",[
         "chat_id"=>"-1001353129524", 
         "user_id"=>$uid
         ]);
   
$stat1 = $ret1->result->status;

$ret2 = bot("getChatMember",[
         "chat_id"=>"-1001598204997", 
         "user_id"=>$uid
         ]);
   
$stat2 = $ret2->result->status;

$bowmenu = json_encode([
'resize_keyboard'=>true,
 "inline_keyboard"=>[
[['text'=>"😎ᴍᴜʟᴛɪᴋ ʳᵃˢᵐ 🥰",'callback_data'=>"multik"],['text'=>"🥳ᴛᴀʙʀɪᴋʟᴀʀ ᵇᵒ'ˡⁱᵐⁱ🎉",'callback_data'=>"tabriklar"]],
[['text'=>"🚘ᴀᴠᴛᴏ ʳᵃᵟᵃᵐ🚙",'callback_data'=>"raqam"],['text'=>"👕ғᴜᴅʙᴏʟᴋᴀɢᴀ ɪsᴍ ᵗᵘˢʰᵘʳⁱˢʰ👕",'callback_data'=>"fudbolka"]],
[['text'=>"📚ɪsᴍʟᴀʀ ᵐᵃⁿᵒˢⁱ📚",'callback_data'=>"mano"],['text'=>"🔢ǫʀ-ᴋᴏᴅ ʏᴀsᴀsʜ🔠",'callback_data'=>"qrkod"]],
[['text'=>"🔄ᴋᴜʟɢᴜʟɪ ᵒᵛᵒᶻˡᵃʳ🔄",'callback_data'=>"rinton"],['text'=>"🥀xᴀʀғɢᴀ ᴠɪᴅᴇᴏ ⁱˢˡᶻˡᵃˢʰ ",'callback_data'=>"vidom"]],
[['text'=>"⛅ᴏʙ-ʜᴀᴠᴏ ᵐᵃˡᵘᵐᵒᵗⁱ⛅",'callback_data'=>"pogoda"],['text'=>"📰ɢʟᴏʙᴀʟ ʸᵃⁿᵍⁱˡⁱᵏˡᵃʳ📚",'callback_data'=>"yangiliklar"]],
[['text'=>"🔍ʀᴀsᴍ ⁱˢᶻˡᵃˢʰ🔎",'callback_data'=>"rasmqidiruv"],['text'=>"📒ʜᴜᴍᴍᴀɴs ᵇᵒˡⁱᵐⁱ📙",'callback_data'=>"humans"]],
[['text' =>"️💱ᴠᴀʟᴜᴛᴀ ᵏᵘʳˢⁱ💲",'callback_data'=>"valyuta"],['text' =>"🔢ᴍᴀᴛᴇᴍᴀᴛɪᴋᴀ ᵇᵒˡⁱᵐⁱ🧮",'callback_data'=>"matem"]],
[['text'=>"🔂 ᴛᴇsᴋᴀʀɪ ʸᵒᶻᵘᵛ",'callback_data'=>"tessoz"],['text'=>"🖍ɴɪᴋ ᵗᵃʸʸᵒʳˡᵃˢʰ🖍️",'callback_data'=>"nikyasaw"]],
[['text'=>"🇺🇿ᴛᴇʟᴇɢʀᴀᴍ ᵗⁱˡˡᵃʳⁱ🇷🇺",'callback_data'=>"tgtil"],['text'=>"🌉ᴛᴇʟᴇɢʀᴀᴍ ᶠᵒⁿᵈ🌉",'callback_data'=>"fonga"]],
[['text'=>"⏰ᴅᴀᴠʟᴀᴛʟᴀʀ ˢᵒᵃᵗˡᵃʳⁱ⏰",'callback_data'=>"davlatsoat"],['text'=>"❄️ʏᴀɴɪɢɪ ʏɪʟɢᴀ ǫᴏʟɢᴀɴ ᵛᵃᵟᵗ❄️",'callback_data'=>"newyear"]],
[['text'=>"✈ʙᴏᴛ ᵗᵉᶻˡⁱᵍⁱ✈",'callback_data'=>"tezligini"],['text'=>"🔄Restart🔄",'callback_data'=>"restart"]],
[['text'=>"☎️ᴀᴅᴍɪɴ ᵇᵒᵍ'ˡᵃⁿⁱˢʰ☎️",'callback_data'=>"xabarsuhrob"],['text'=>"🖊️sᴜᴘᴘᴏʀᴛ ˣᵃᵇᵃʳ🖋️",'callback_data'=>"bratan"]],
]
]);

$qayt=json_encode([
'inline_keyboard'=>[
[['text'=>"$nazad",'callback_data'=>"ort"]],
]
]);
$backs=json_encode([
'inline_keyboard'=>[
[['text'=>"$nazad",'callback_data'=>"ortinga"]],
]
]);
$multiort=json_encode([
'inline_keyboard'=>[
[['text'=>"🔗Ulashish",'url'=>"http://telegram.me/share/url?url=https://telegram.me/Ismga_Rasm_iBot&text=%F0%9F%91%89%20Shu%20Botda%20rasmga%20ismingizni%20yozib%20berarkan%20kirib%20k%C3%B5ring%20yoqmasa%20chiqib%20ketasiz%20lekin%20sizga%20aniq%20yoqadi%F0%9F%92%AF"]],
[['text'=>"$nazad",'callback_data'=>"ortinga"]],
]
]);

if($data=="tabriklar"){
bot('editMessageText',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>"🤩Bu menuda ismingizga multik foto tayyorlashingiz mumkin. Kerakli bo`limni tanlang👇
$mkm",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🌼Navrõz Tabrigi🌿",'callback_data'=>"navroz"],['text'=>"🌹 8-Mart Tabrigi 🌺",'callback_data'=>"mart"]],
[['text'=>"🕌Ramazon Tabrigi🕋",'callback_data'=>"ramazon"],['text'=>"🌅Juma Muborak🕌",'callback_data'=>"juma"]],
[['text'=>'🔝Bosh menyu🔝', 'callback_data' => "ortinga"]],

    ]
    ]),
 ]);
 }

if($data=="boshmenyu"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"⤵️Marhamat Kerakli Menyuni Tanlang!",
'reply_markup'=>$bowmenu, 
]);
}

if($data=="ortinga"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"⤵️Marhamat Kerakli Menyuni Tanlang!",
'reply_markup'=>$bowmenu, 
]);
}

 
if($data=="ort"){
bot('editMessageText',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>"⤵️O'zingizga kerakli menyuni Tanlang!",
'parse_mode'=>'html',
	'reply_markup'=>$bowmenu,
]);
	}

if($data=="karort"){
bot('editMessageText',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>"⤵️O'zingizga kerakli menyuni Tanlang!",
'parse_mode'=>'html',
	'reply_markup'=>$bowmenu,
]);
	}


if($data=="inline"){
	bot('editMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$mmid,
	'text'=>"⤵️O'zingizga kerakli bo'limni tanlang!",
	'parse_mode'=>'html',
	'reply_markup'=>$bowmenu,
]);
	}


if($text=="💫Ortga"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"♏[$name](tg://user?id=$id) , Bosh Menuga Qaytdingiz!",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]), 
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"⤵️O'zingizga kerakli bo'limni tanlang!",
'parse_mode'=>'markdown',
'reply_markup'=>$bowmenu, 
]);
}

if(mb_stripos($tx,"/start")!==false){

   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}
if(mb_stripos($tx,"📊Statistika")!==false){
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $txx = "🚀Jami foydalanuvchilari: $all ta
➖➖➖➖➖➖➖➖➖➖➖➖
👤 - Botdan Foydalanuvchilar $us ta 
➖➖➖➖➖➖➖➖➖➖➖➖
👥 - Guruhlar $gr ta
➖➖➖➖➖➖➖➖➖➖➖➖
📅$sana  
➖➖➖➖➖➖➖➖➖➖➖➖
$mkm
🥀𝚈𝚊𝚛𝚊𝚝𝚞𝚟𝚌𝚑𝚒 @Wolf_wolk1o";
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'html',
'reply_to_message_id'=> $mid, 
   'text'=>$txx,
  ]);
}

if(isset($uzkmm->new_chat_member) or isset($message->left_chat_member)){
 bot('deleteMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$mid,
    ]);
}


if($tx == "/panel" and $cid==$admin){
     bot('sendMessage',[
     'chat_id'=>$admin,
     'text'=>"
😘 Assalomu alaykum
$CM Aka | Panel | ga
Xush kelibsiz!
◾Marxamat Pastdagi Menyulardan
♏O'zingizga Kerakligini Bosing",
     'reply_markup'=> $adminmenu,
     ]);
}
$tex = $uzkmm->text;
$lichka = file_get_contents("azo.dat");
$xabar = file_get_contents("send.txt");


if($tex=="📧Xabar Jo'natish" and $cid==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Yuboriladigan xabar matnini kiriting!
    Yoki /cancel ni bosing",
    'parse_mode'=>"html",
]);
    file_put_contents("send.txt","user");
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
  file_put_contents("send.txt","");
}else{
  $lich = file_get_contents("azo.dat");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=bot("forwardMessage",[
  'from_chat_id'=>$admin,
    'chat_id'=>$lichkalar,
    'message_id'=>$mid,
]);
}

if($okuser){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"✔️Hamma userlarga bexato yuborildi!",
    'parse_mode'=>'html',
]);
  file_put_contents("send.txt","");
}
}
}

$replymenu = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);
    

$reply = $uzkmm->reply_to_message->text;  
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);


  
if($data=="valyuta"){
function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "♻️💰1 Aqsh Dollari - " . $val->Rate . "so'm\n";
           }
           if($val->Ccy == 'EUR'){
               $response .= "♻️💰1 Evro - " . $val->Rate . "so'm\n";
           }
           if($val->Ccy == 'RUB'){
               $response .= "♻️💰1 Rossiya Rubli - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'AED'){
               $response .= "♻️💰1 Arab Dirhami - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'AUD'){
               $response .= "♻️💰1 Avstraliya Dollari - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'BRL'){
               $response .= "♻️💰1 Braziliya Reali - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'CAD'){
               $response .= "♻️💰1 Kanada Dollari - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "♻️💰1 Yaponiya Iyenasi - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'AED'){
               $response .= "♻️💰1 BAA dirhami - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'KRW'){
               $response .= "♻️💰1 Korea voni - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'AZN'){
               $response .= "♻️💰1 Manat - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'ZAR'){
               $response .= "♻️💰1 Jan.Afrika Randi - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'CHF'){
               $response .= "♻️💰1 Franki - " . $val->Rate . "so'm\n";
           }
           if($val->Ccy == 'YER'){
               $response .= "♻️💰1 Yaman Riali - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'VND'){
               $response .= "♻️💰1 Vetnam Songi - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'VES'){
               $response .= "♻️💰1 Venesuela Bolivari - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'UAH'){
               $response .= "♻️💰1 Ukraina Hrivnasi - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'UYU'){
               $response .= "♻️💰1 Urugvay Pesosi - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'TRY'){
               $response .= "♻️💰1 Turkiya Lirasi - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'ARS'){
               $response .= "♻️💰1 Argentina pessosi - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'BDT'){
               $response .= "♻️💰1 Bangladesh takasi - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'BYN'){
               $response .= "♻️💰1 Belorus rubli - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'TJS'){
               $response .= "♻️💰1 Tojik somonisi - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'KGS'){
               $response .= "♻️💰1 Qirg‘iz so'mi - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'TND'){
               $response .= "♻️💰1 Tunis Dinori - " . $val->Rate . " so'm\n";
           }
       }
      return $response;
   }   function Parse($p1, $p2, $p3) {
$num1 = strpos($p1, $p2);
if($num1 === false) return 0;
$num2 = substr($p1, $num1);
return strip_tags(substr($num2, 0, strpos($num2, $p3)));
}
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>kurs(),"💱💱💱💱💱💱💱💱💱💱💱💱💱💱💱

🔄So'nggi Yangilanishlar: $kunlar.$yil

📆$sana

$mkm",
'reply_markup'=>$qayt,
]);
}



if($data=="pogoda"){
bot('editMessageText',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>"⛅Siz Ob-Havo bolimidasiz!
Iltimos Viloyatingizni tanlang!⤵️",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'⛅Namangan','callback_data'=>"ob=namangan"],
['text'=>'⛅Toshkent','callback_data'=>"ob=tashkent"]],
[['text'=>"⛅Farg'ona",'callback_data'=>"ob=ferghana"],
['text'=>'⛅Samarqand','callback_data'=>"ob=samarkand"]],
[['text'=>'⛅Buxoro','callback_data'=>"ob=bukhara"], 
['text'=>'⛅Jizzax','callback_data'=>"ob=jizzakh"]],
[['text'=>'⛅Andijon','callback_data'=>"ob=andijan"],
['text'=>'⛅Nukus','callback_data'=>"ob=nukus"]],
[['text'=>'⛅Guliston','callback_data'=>"ob=gulistan"],
['text'=>'⛅Navoiy','callback_data'=>"ob=navoi"]],
[['text'=>'⛅Xiva','callback_data'=>"ob=khiva"],
['text'=>'⛅Termiz','callback_data'=>"ob=termez"]],
[['text'=>'⛅Qarshi','callback_data'=>"ob=karshi"],
['text'=>'⛅Urganch','callback_data'=>"ob=urgench"]],
[['text'=>'⛅Zarafshon','callback_data'=>"ob=zarafshan"],
['text'=>'↩Ortga','callback_data'=>"inline"]],
]
])
]);
}

if(mb_stripos($data,"ob")!==false){
$szs = explode("=",$data);
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
$masterbek = file_get_contents("http://obhavo.uz/$szs[1]", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$masterbek);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil=str_replace('','`',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1=str_replace('','`',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','`',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','`',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
	bot('editMessageText',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
    'text'=>"*📌Bugun 🏰$vil shahrida:⤵️
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

🌓Bugun: $gr1 ... $gr2, ☀️$havo1
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

🌄Tong: ☁️ $tongr C
🏙Kun: ☀️ $oqgr C
🌃Oqshom: 🌤 $kungr C
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

🌬️ $shamol
💧 $nam
🌡$bosim
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

🌙$oy
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

🌝$qch
🌚$qb
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

$sana*
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

$mkm
",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>"↩Orqaga",'callback_data'=>"pogoda"]]
]
]),
]);
}


if($data == "newyear"){   
  $kun1 = date('z ',strtotime('2 hour')); 
  $a = 365;
  $c2 = $a-$kun1;
  $d = date('L ',strtotime('2 hour'));
  $b = $c2+$d;
  $f = $b+81;
  $e = $b+240;
  $kun2 = date('H ',strtotime('2 hour')); 
  $a2 = 23;
  $b2 = $a2-$kun2;
  $kun3 = date('i ',strtotime('2 hour')); 
  $a3 = 59;
  $b3 = $a3-$kun3;
  $kun4 = date('s ',strtotime('2 hour')); 
  $a4 = 60;
  $b4 = $a4-$kun4;
bot('answerCallbackQuery',[
'callback_query_id'=>$yangilash->callback_query->id,
'text'=>"
☃️Yangi yilga Bayramiga

 🎄$b kun 
 🎊$b2 soat
 🎁 $b3 minut
 ❄️$b4 sekund qoldi!

🎅🏽Admin: @GOLD_BLOGGERUZ 
🎉ᴋɪʀɪʙ ᴋᴇʟᴀʏᴘᴛɢᴀɴ 
🎁ʏᴀɴɢɪ ʏɪʟ ʙɪʟᴀɴ ᵟᵘᵗˡᵃʸᵈⁱ",
'show_alert'=>true,
]);   
}


if($data=="tezligini"){
$start_time = round(microtime(true) * 1000);
$send=  bot('editMessageText', [
'chat_id' => $ccid,
'message_id'=>$mmid,
 'text' =>"⏱O'lchanmoqda..",
])->result->message_id;
$end_time = round(microtime(true) * 1000);
$time_taken = $end_time - $start_time;
bot('editMessagetext',[
"chat_id" =>$ccid,
"message_id" => $send,
"text" => "✈Bot Tezligi: *" . $time_taken .  "* Ms ᵉᵏᵃⁿ

*$mkm*",
'parse_mode'=>'markdown',
'reply_markup'=>$qayt,
]);
}

if($data=="xabarsuhrob"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"♏Admin Uchun Xabaringizni Yozing!",
'reply_markup'=>$backs, 
]);
}
if($reply=="♏Admin Uchun Xabaringizni Yozing!"){ 
bot('Sendmessage',[
      'chat_id'=>$admin,
      'text'=>"🎗️Admin Aka Xabar keldi!
      
👤Yuboruvchi: $name
♏UserName:  @$user1
🆔️Raqami: <code>$cid</code>
➖➖➖➖➖➖➖➖➖➖➖➖➖
💭Xabar: <b>$text</b>",
'parse_mode'=>"html",
]);
  bot('sendMessage',[
'chat_id'=>$cid,
    'text'=>"<b>📬Xabaringiz Adminga Yuborildi!
👨‍💻Admin 24soat ichida o'qib chiqadi!</b>!",
    'parse_mode'=>'html',
'reply_markup'=>$qayt,
	]);
}


$url = 'https://daryo.uz/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
 $link = $item->link;
break;
}
if($data == "yangiliklar"){
bot('EditMessageText',[
   'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>"
🎩Eng So'ngi va Qaynoq 🗞️Yangiliklar

[$line]($link)

📚To'liq O'qish Uchun Bosing!⤴️",
'parse_mode'=>'markdown',
'reply_markup'=>$qayt,
]);
}



if($data=="restart"){
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>"
 <b> 🕓Ma'lumotlar Yangilanmoqda </b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.2);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'😇ʙᴏsʜʟᴀᴅɪᴋ'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'👨‍🌾ᴛᴀʟᴀʙᴀ'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'⛹️ᴏǫɪᴛᴜᴠᴄʜɪ'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'🧖‍♀️ᴅᴀɴɢᴀsᴀ'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'🧛‍♂️ʙɪʟɪᴍᴅᴏɴ'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'👩‍🦲ᴀʟᴅᴏǫᴄʜɪ'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'👼xᴜsʜᴄʜᴀǫᴄʜᴀǫ'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'👨‍👩‍👧ᴍᴇxʀɪʙᴏɴ'
 ]); 
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'💏ᴏǫ ᴋᴏɴɢɪʟ'
]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'🙏ᴏᴛᴀ ᴏɴᴀɴɪ ʜᴀᴊɢᴀ ᴇᴛɪsʜ'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'🤲ɪɴsʜᴀᴏʟʟᴏʜ'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid + 3,
  ]);
 sleep(0.4);
    bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>"🚀Barcha Ma'lumotlar Yangilandi!

$mkm",
       'parse_mode'=>'html',  
       'reply_markup'=>$qayt,
]);
}



if($data=="davlatsoat"){
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>"*🇺🇸 AQSH: $timeusa
➖➖➖➖➖➖➖➖
🇧🇷 Braziliya: $timebra
➖➖➖➖➖➖➖➖
🇵🇹 Portugaliya: $timepor
➖➖➖➖➖➖➖➖
🇸🇦 Saudiya Arabistoni: $timearb
➖➖➖➖➖➖➖➖
🇪🇸 Ispaniya: $timeisp
➖➖➖➖➖➖➖➖
🇦🇪 Dubay: $timedub
➖➖➖➖➖➖➖➖
🇯🇵 Yaponiya: $timeyap
➖➖➖➖➖➖➖➖
🇷🇺 Rossiya: $timerus
➖➖➖➖➖➖➖➖
🇩🇪 Germaniya: $timeger

$mkm*",
'parse_mode'=>'markdown',
'reply_markup'=>$qayt, 
]);
}
 



if($data=="bratan"){
bot('editMessageText',[
   'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>"🤖Bot Dasturchisi @GOLD_BLOGGERUZ
〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️
🔥Sizga Xam shunday yoki Boshqa turdagi bot kerakmi?
👨‍💻Dasturchiga Murojat qiling!
👏Va Biz Sizga Botlar Yasab beramiz.
💰To'lov xam siz istagan usulda!
〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️
$mkm",
'parse_mode'=>'html',
  'reply_markup'=>$qayt,
]);
}


////qr kod

if($data=="qrkod"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"🔵QR Code yasash uchun matnni kiriting!
",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="🔵QR Code yasash uchun matnni kiriting!"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://qr-code.ir/api/qr-code?s=5&e=M&t=P&d=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
QR-Kodga yozilgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="rinton"){
bot('editmessagetext',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>"*Natijalar 1-10 20 dan

1. Mazzami sizlarga mazzami (5.8M 32k)
2. Kulishni udari (4.1M 22k)
3. Kecha ustimdan kulganlar (5.8M 17k)
4. Gucci Flip Flap O'zbekchasi (5.8M 900k)
5. Maqtov yorliq berilar (5.8M 2k)
6. Biz bilgandik kutgandik (5.8M 12k)
7. Yo'qoool (5.8M 3442k)
8. Uzr ketipqopt (5.8M 333k)
9. Assalomu alaykum (5.8M 38k)
10. Bo'ldi bas qil (2.6M 50k)*",
'parse_mode'=>'markdoWn',
'reply_markup' => json_encode([
 'inline_keyboard'=>[
[['text'=>'1','callback_data'=>'f1'],['text'=>'2','callback_data'=>'f2'],['text'=>'3','callback_data'=>'f3'],['text'=>'4','callback_data'=>'f4'],['text'=>'5','callback_data'=>'f5']],
[['text'=>'6','callback_data'=>'f6'],['text'=>'7','callback_data'=>'f7'],['text'=>'8','callback_data'=>'f8'],['text'=>'9','callback_data'=>'f9'],['text'=>'10','callback_data'=>'f10']],
[['text'=>'↩Ortga','callback_data'=>"ortinga"]],
]
])
]);
}

if($data=="vidom"){
    bot('sendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
     'video'=>"https://t.me/BaS_Culub/183",
        'caption'=>"*🌴 ʜᴀʀғɢᴀ ᴠɪᴅᴇᴏ 🌴

🔔ʙᴏ'ʟɪᴍɪɢᴀ хᴜѕʜ ᴋᴇʟɪʙѕɪᴢ 😊
 
🔳 ᴍᴀʀʜᴀᴍᴀᴛ  ᴏ'ᴢɪɴɢɪᴢɢᴀ ᴋᴇʀᴀᴋʟɪ ᴍᴇɴᴜɴɪ ᴛᴀɴʟᴀɴɢ ❇️

🧑‍💻 ᴀᴅᴍɪɴѕᴛʀᴀᴛɪᴏɴ : @Wolf_wolk1o *",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'A 🦁','callback_data'=>'bot0'],['text'=>'B 😍','callback_data'=>'bot1'],['text'=>'D 🌿','callback_data'=>'bot2'],['text'=>'E 😈','callback_data'=>'bot3']],
[['text'=>'F 🐼','callback_data'=>'bot4'],['text'=>'G 🍃','callback_data'=>'bot5'],['text'=>'I 🎀','callback_data'=>'bot6'],['text'=>'J 🕊️','callback_data'=>'bot7']],
[['text'=>'K 🐾','callback_data'=>'bot8'],['text'=>'L ☘️','callback_data'=>'bot9'],['text'=>'M 🦊','callback_data'=>'bot10'],['text'=>'N 🦋','callback_data'=>'bot11']],
[['text'=>'O 🍁','callback_data'=>'bot12'],['text'=>'P 🐻','callback_data'=>'bot13'],['text'=>'Q 💞','callback_data'=>'bot14'],['text'=>'R 💘','callback_data'=>'bot15']],
[['text'=>'S 🍩','callback_data'=>'bot16'],['text'=>'T 🍧','callback_data'=>'bot17'],['text'=>'U 🍷','callback_data'=>'bot18'],['text'=>'V 🌴','callback_data'=>'bot19']],
[['text'=>'X 🍃','callback_data'=>'bot20'],['text'=>'Sʜ 🌟','callback_data'=>'bot21'],['text'=>'Y 🌈','callback_data'=>'bot22'],['text'=>'Z 🔥','callback_data'=>'bot23']],
[['text'=>'Ch 🎀','callback_data'=>'bot24'],['text'=>'↩Ortga','callback_data'=>"inline"]],
]
])
]);
}

if($data=="mano"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Ismingizni xatolarsiz yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Ismingizni xatolarsiz yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Ism/ism/ism.php?ism=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Ismingiz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}


if($data=="rasmqidiruv"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"🕵🏻‍♂ Rasm izlash uchun so'z yozing!",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="🕵🏻‍♂ Rasm izlash uchun so'z yozing!"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://yandex.uz/images/touch/search/?text=$text",
'caption'=>"
✅RASM TOPILDI✅

🌠*Rasmni @$boot topib berdi!*",
'parse_mode'=>'markdown',
'reply_markup'=>$backs,
]);
}

if($data=="matem"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Menga Misol Yuboring!",
'reply_markup'=>$rpl,
]);
} 
if($reply=="Menga Misol Yuboring!"){
$calc = urlencode($text);
$rs = file_get_contents('http://api.mathjs.org/v1/?expr='.$calc);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"👉 *$text* Ning - 🤓Javobi: *$rs*",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>"⏮Orqaga",'callback_data'=>"inline"]],
]
]),
]);
}



if($data=="tessoz"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"💬Biror So'z yuboring!",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
$str = strrev($text);
if($reply=="💬Biror So'z yuboring!"){
bot('SendMessage',[
'chat_id'=>$ccid,
 'text'=>"☄️Iltimos biroz kuting...",
 'parse_mode'=>"HTML"
 ]);
 sleep(1.1);
  bot('deletemessage',[
    'chat_id'=>$ccid,
    'message_id'=>$mmid + 1,
  ]);
 sleep(1.1);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"😅*Siz Yozgan So'zingizni Teskarisi*⤵️

☞︎︎︎ $str ☜︎︎︎

*$mkm*",
 'parse_mode'=>'markdown',
'reply_to_message_id'=> $mmid, 
'reply_markup'=>$qayt, 
]);
}



if($data=="fonga"){
bot('editMessageText',[
   'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>"
🥀 Bu sslilka orqali telegramingiz Fonini qulay oson o'zgartira olasiz!
⤵️ Shunchaki o'rnatmoqchi bo'lgan Fon Raqamini tanlang:

➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/7HqL5bBEyUoEAAAAXYaZUZh14YE'>🌉Telegram 1️⃣ - fon		✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/aLBLuMfyCUsEAAAA9n3N0xRCuwo'>🌉Telegram 2️⃣ - fon		✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/FZla3e-CyEkBAAAAMwmoy6WarGY'>🌉Telegram 3️⃣ - fon		✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/XorADb5a2EkBAAAAINKBVJtUxqo'>🌉Telegram 4️⃣ - fon		✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/jBen_AFVwUpJAAAA3Ybd3Z-qCSQ'>🌉Telegram 5️⃣ - fon		✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/CiwwsoTP-VEBAAAAmDYEizr71BQ'>🌉Telegram 6️⃣ - fon		✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
<a href='https://t.me/bg/Z4wGEfQLmUmYAAAARaGmMPqVJaY'>🌉Telegram 7️⃣ - fon		✅</a>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

$mkm",
    'parse_mode'=>'html',
'disable_web_page_preview' => true,
'reply_to_message_id'=> $mmid, 
 'reply_markup'=>$qayt,
	]);
}

if($data=="tgtil"){
bot('editMessageText',[
   'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>"📚Telegramingiz tilini osongina o'zgartirish uchun quyidagi tillardan birini tanlang!⤵️",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"🇺🇿Узбек тили",'url'=>"tg://setlanguage?lang=uzbekcyr"]],
[['text'=>"🇺🇿O'zbek tili",'url'=>"tg://setlanguage?lang=uz-beta"]],
[['text'=>"🇷🇺Руский язик",'url'=>"tg://setlanguage?lang=ru"]],
[['text'=>"🇩🇪Germaniya tili",'url'=>"tg://setlanguage?lang=de"]],
[['text'=>"🇺🇸English",'url'=>"tg://setlanguage?lang=en"]],
[['text'=>"🇸🇦Arab tili",'url'=>"tg://setlanguage?lang=ar"]],
[['text'=>"🇹🇷Turkiya tili",'url'=>"tg://setlanguage?lang=tr"]],
[['text'=>"🇫🇷 Fransuz tili",'url'=>"tg://setlanguage?lang=fr"]],
[['text'=>"$nazad",'callback_data'=>"ortinga"]],
]
]),
]);
}

$Muhiddin = $uzkmm->text;

if($data=="nikyasaw"){
	bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin = str_replace('q', 'ϙᷭ', $Muhiddin);
   $Muhiddin = str_replace('w', 'ᴡᷱ', $Muhiddin);
   $Muhiddin = str_replace('e', 'ᴇⷷ', $Muhiddin);
   $Muhiddin = str_replace('r', 'ʀᷢ', $Muhiddin);
   $Muhiddin = str_replace('t', 'ᴛͭ', $Muhiddin);
   $Muhiddin = str_replace('y', 'ʏꙷ', $Muhiddin);
   $Muhiddin = str_replace('u', 'ᴜͧ', $Muhiddin);
   $Muhiddin = str_replace('i', 'ɪͥ', $Muhiddin);
   $Muhiddin = str_replace('o', 'ᴏⷪ', $Muhiddin);
   $Muhiddin = str_replace('p', 'ᴘᷮ', $Muhiddin);
   $Muhiddin = str_replace('a', 'ᴀⷽ', $Muhiddin);
   $Muhiddin = str_replace('s', 'sᷤ', $Muhiddin);
   $Muhiddin = str_replace('d', 'ᴅͩ', $Muhiddin);
   $Muhiddin = str_replace('f', 'ғᷫ', $Muhiddin);
   $Muhiddin = str_replace('g', 'ɢᷛ', $Muhiddin);
   $Muhiddin = str_replace('h', 'ʜⷩ', $Muhiddin);
   $Muhiddin = str_replace('j', 'ᴊᷯ', $Muhiddin);
   $Muhiddin = str_replace('k', 'ᴋⷦ', $Muhiddin);
   $Muhiddin = str_replace('l', 'ʟᷞ', $Muhiddin);
   $Muhiddin = str_replace('z', 'ᴢᷦ', $Muhiddin);
   $Muhiddin = str_replace('x', 'xͯ', $Muhiddin);
   $Muhiddin = str_replace('c', 'ᴄⷭ', $Muhiddin);
   $Muhiddin = str_replace('v', 'ᴠͮ', $Muhiddin);
   $Muhiddin = str_replace('b', 'ʙⷡ', $Muhiddin);
   $Muhiddin = str_replace('n', 'ɴᷡ', $Muhiddin);
   $Muhiddin = str_replace('m', 'ᴍᷟ', $Muhiddin);
   $Muhiddin = str_replace('Q', 'ϙᷭ', $Muhiddin);
   $Muhiddin = str_replace('W', 'ᴡᷱ', $Muhiddin);
   $Muhiddin = str_replace('E', 'ᴇⷷ', $Muhiddin);
   $Muhiddin = str_replace('R', 'ʀᷢ', $Muhiddin);
   $Muhiddin = str_replace('T', 'ᴛͭ', $Muhiddin);
   $Muhiddin = str_replace('Y', 'ʏꙷ', $Muhiddin);
   $Muhiddin = str_replace('U', 'ᴜͧ', $Muhiddin);
   $Muhiddin = str_replace('I', 'ɪͥ', $Muhiddin);
   $Muhiddin = str_replace('O', 'ᴏⷪ', $Muhiddin);
   $Muhiddin = str_replace('P', 'ᴘᷮ', $Muhiddin);
   $Muhiddin = str_replace('A', 'ᴀⷽ', $Muhiddin);
   $Muhiddin = str_replace('S', 'sᷤ', $Muhiddin);
   $Muhiddin = str_replace('D', 'ᴅͩ', $Muhiddin);
   $Muhiddin = str_replace('F', 'ғᷫ', $Muhiddin);
   $Muhiddin = str_replace('G', 'ɢᷛ', $Muhiddin);
   $Muhiddin = str_replace('H', 'ʜⷩ', $Muhiddin);
   $Muhiddin = str_replace('J', 'ᴊᷯ', $Muhiddin);
   $Muhiddin = str_replace('K', 'ᴋⷦ', $Muhiddin);
   $Muhiddin = str_replace('L', 'ʟᷞ', $Muhiddin);
   $Muhiddin = str_replace('Z', 'ᴢᷦ', $Muhiddin);
   $Muhiddin = str_replace('X', 'xͯ', $Muhiddin);
   $Muhiddin = str_replace('C', 'ᴄⷭ', $Muhiddin);
   $Muhiddin = str_replace('V', 'ᴠͮ', $Muhiddin);
   $Muhiddin = str_replace('B', 'ʙⷡ', $Muhiddin);
   $Muhiddin = str_replace('N', 'ɴᷡ', $Muhiddin);
   $Muhiddin = str_replace('M', 'ᴍᷟ', $Muhiddin);
   bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin,
 
    ]);
    }
    
        $Muhiddin2 = $uzkmm->text;
   if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin2 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","Q","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"],["𝖖","𝖜","𝖊","𝖗","𝖙","𝛄","𝖚","𝖎","𝖔","𝖕","𝖆","𝖘","𝖉","𝖋","𝖌","𝖍","𝖏","𝖐","𝖑","𝖟","𝖝","𝖈","𝖛","𝖇","𝖓","𝖒","𝕼","𝕰","𝕽","𝕴","𝚼","𝖀","𝕿","𝕺","𝕻","𝕬","𝕾","𝕯","𝕱","𝕲","𝕳","𝕵","𝕶","𝕷","𝖅","𝖃","𝕮","𝖁","𝕭","𝕹","𝕸"], $Muhiddin2);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin2,
 
    ]);
    }
    
    $Muhiddin3 = $uzkmm->text;
   if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin3 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","Q","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"],["Ⓠ","Ⓦ","Ⓔ","Ⓡ","Ⓣ","Ⓨ","Ⓤ","Ⓘ","Ⓞ","Ⓟ","Ⓐ","Ⓢ","Ⓓ","Ⓕ","Ⓖ","Ⓗ","Ⓙ","Ⓚ","Ⓛ","Ⓩ","Ⓧ","Ⓒ","Ⓥ","Ⓑ","Ⓝ","Ⓜ","Ⓠ","Ⓔ","Ⓡ","Ⓣ","Ⓨ","Ⓤ","Ⓘ","Ⓞ","Ⓟ","Ⓐ","Ⓢ","Ⓓ","Ⓕ","Ⓖ","Ⓗ","Ⓙ","Ⓚ","Ⓛ","Ⓩ","Ⓧ","Ⓒ","Ⓥ","Ⓑ","Ⓝ","Ⓜ"], $Muhiddin3);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin3,
 
    ]);
    }
    
    $Muhiddin4 = $uzkmm->text;
       if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin4 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","Q","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"],["🅠","🅦","🅔","🅡","🅣","🅨","🅤","🅘","🅞","🅟","🅐","🅢","🅓","🅕","🅖","🅗","🅙","🅚","🅛","🅩​","🅧","🅒","🅥","🅑","🅝","🅜","🅠","🅔","🅡","🅣","🅨","🅤","🅘","🅞","🅟","🅐","🅢","🅓","🅕","🅖","🅗","🅙","🅚","🅛","🅩​","🅧","🅒","🅥","🅑","🅝","🅜"], $Muhiddin4);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin4,
 
    ]);
    }
    
    $Muhiddin5 = $uzkmm->text;
           if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin5 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","Q","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"],["🅀","🅆","🄴","🅁","🅃","🅈","🅄","🄸","🄾","🄿","🄰","🅂","🄳","🄵","🄶","🄷","🄹","🄺","🄻","🅉","🅇","🄲","🅅","🄱","🄽","🄼","🅀","🄴","🅁","🅃","🅈","🅄","🄸","🄾","🄿","🄰","🅂","🄳","🄵","🄶","🄷","🄹","🄺","🄻","🅉","🅇","🄲","🅅","🄱","🄽","🄼"], $Muhiddin5);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin5,
 
    ]);
    }

    $Muhiddin6 = $uzkmm->text;
    if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin6 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m"],["𝓺","𝔀","𝓮","𝓻","𝓽","𝔂","𝓾","𝓲","𝓸","𝓹","𝓪","𝓼","𝓭","𝓯","𝓰","𝓱","𝓳","𝓴","𝓵","𝔃","𝔁","𝓬","𝓿","𝓫","𝓷","𝓶"], $Muhiddin6);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin6,
 
    ]);
    }
    
    $Muhiddin7 = $uzkmm->text;
        if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin7 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m"],["🆀","🆆","🅴","🆁","🆃","🆈","🆄","🅸","🅾","🅿","🅰","🆂","🅳","🅵","🅶","🅷","🅹","🅺","🅻","🆉","🆇","🅲","🆅","🅱","🅽","🅼"], $Muhiddin7);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin7,
 
    ]);
    }
    
    
    //Muhiddin
    $Muhiddin8 = $uzkmm->text;
            if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin8 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m"],["𝙦","𝙬","𝙚","𝙧","𝙩","𝙮","𝙪","𝙞","𝙤","𝙥","𝙖","𝙨","𝙙","𝙛","𝙜","𝙝","𝙟","𝙠","𝙡","𝙯","𝙭","𝙘","𝙫","𝙗","𝙣","𝙢"], $Muhiddin8);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin8,
 
    ]);
    }
    
    $Muhiddin9 = $uzkmm->text;
    if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin9 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","Q","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"],["𝒒","𝒘","𝒆","𝒓","𝒕","𝒚","𝒖","𝒊","𝒐","𝒑","𝒂","𝒔","𝒅","𝒇","𝒈","𝒉","𝒋","𝒌","𝒍","𝒛","𝒙","𝒄","𝒗","𝒃","𝒏","𝒎","𝑸","𝑬","𝑹","𝑻","𝒀","𝑼","𝑰","𝑶","𝑷","𝑨","𝑺","𝑫","𝑭","𝑮","𝑯","𝑱","𝑲","𝑳","𝒁","𝑿","𝑪","𝑽","𝑩","𝑵","𝑴"], $Muhiddin9);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin9,
 
    ]);
    }
    
    $Muhiddin11 = $uzkmm->text;
        if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin11 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","Q","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"],["𝑞","𝑤","𝑒","𝑟","𝑡","𝑦","𝑢","𝑖","𝑜","𝑝","𝑎","𝑠","𝑑","𝑓","𝑔","ℎ","𝑗","𝑘","𝑙","𝑧","𝑥","𝑐","𝑣","𝑏","𝑛","𝑚","𝑄","𝐸","𝑅","𝑇","𝑌","𝑈","𝐼","𝑂","𝑃","𝐴","𝑆","𝐷","𝐹","𝐺","𝐻","𝐽","𝐾","𝐿","𝑍","𝑋","𝐶","𝑉","𝐵","𝑁","𝑀"], $Muhiddin11);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin11,
 
    ]);
    }
    
    $Muhiddin12 = $uzkmm->text;
    if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin12 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","Q","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"],["🍳","👐","📧","®️","🍄","🍸","👅","🚹","⭕","🅿️","🅰️","💲","🌛","🎏","🌀","♓","🎷","🎋","💪","💤","❎","©️","✌","🅱️","🎵","〽","🍳","📧","®️","🍄","🍸","👅","🚹","⭕","🅿️","🅰️","💲","🌛","🎏","🌀","♓","🎷","🎋","💪","💤","❎","©️","✌","🅱️","🎵","〽"], $Muhiddin12);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin12,
 
    ]);
    }
    
    $Muhiddin13 = $uzkmm->text;
    if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin13 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","Q","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"],["𝕢","𝕨","𝕖","𝕣","𝕥","𝕪","𝕦","𝕚","𝕠","𝕡","𝕒","𝕤","𝕕","𝕗","𝕘","𝕙","𝕛","𝕜","𝕝","𝕫","𝕩","𝕔","𝕧","𝕓","𝕟","𝕞","ℚ","𝔼","ℝ","𝕋","𝕐","𝕌","𝕀","𝕆","ℙ","𝔸","𝕊","𝔻","𝔽","𝔾","ℍ","𝕁","𝕂","𝕃","ℤ","𝕏","ℂ","𝕍","𝔹","ℕ","𝕄"], $Muhiddin13);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin13,
 
    ]);
    }
    
    $Muhiddin14 = $uzkmm->text;
    if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin14 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","Q","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"],["ᶞ","ʷ","ᵉ","ʳ","ᵗ","ʸ","ᵘ","ᶦ","ᵒ","ᵖ","ᵃ","ˢ","ᵈ","ᶠ","ᵍ","ʰ","ʲ","ᵏ","ᶫ","ᶻ","ˣ","ᶜ","ᵛ","ᵇ","ᶰ","ᵐ","ᵟ","ᴱ","ᴿ","ᵀ","ᵞ","ᵁ","ᴵ","ᴼ","ᴾ","ᴬ","ˢ","ᴰ","ᶠ","ᴳ","ᴴ","ᴶ","ᴷ","ᴸ","ᶻ","ˣ","ᶜ","ⱽ","ᴮ","ᴺ","ᴹ"], $Muhiddin14);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin14,
 
    ]);
    }
    
    $Muhiddin15 = $uzkmm->text;
        if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
$Muhiddin15 = str_replace(["q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","Q","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M"],["ǫ","ᴡ","ᴇ","ʀ","ᴛ","ʏ","ᴜ","ɪ","ᴏ","ᴘ","ᴀ","s","ᴅ","ғ","ɢ","ʜ","ᴊ","ᴋ","ʟ","ᴢ","x","ᴄ","ᴠ","ʙ","ɴ","ᴍ","ǫ","ᴇ","ʀ","ᴛ","ʏ","ᴜ","ɪ","ᴏ","ᴘ","ᴀ","s","ᴅ","ғ","ɢ","ʜ","ᴊ","ᴋ","ʟ","ᴢ","x","ᴄ","ᴠ","ʙ","ɴ","ᴍ"], $Muhiddin15);
bot('sendmessage',[
   'chat_id'=>$cid,
   'text'=>$Muhiddin15,
 
    ]);
    }

    if($reply=="🧙🏼‍♂Nik Tayyorlash uchun Ismingizni yoki so'z yuboring!"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"😊Nik Yoqdimi☝️

🎵Create by: @$boot",
'parse_mode'=>'markdown',
'reply_markup'=>$qayt,
]);
}


////navroz
if($data=="navroz"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendPhoto',[
'chat_id'=>$ccid,
'photo'=>"https://t.me/MyUzBots/6",
'caption'=>"O‘zingizga yoqqan rasmni tanlang",
'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>'1⃣','callback_data' => "n1"],['text'=>'2⃣','callback_data' => "n2"]],
[['text'=>'3⃣','callback_data' => "n3"],['text'=>'4⃣','callback_data' => "n4"]],
[['text'=>'💫Ortga','callback_data' => "ortinga"]],
    ]
    ]),
 ]);
 }

if($data=="n1"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"1-Navroz tabrigi uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="1-Navroz tabrigi uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/navroz/1/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="n2"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"2-navroz tabrigi uchun ismingizni kiriting!",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="2-navroz tabrigi uchun ismingizni kiriting!"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/navroz/2/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="n3"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"3-navroz tabrigi uchun ismingizni kiriting!",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="3-navroz tabrigi uchun ismingizni kiriting!"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/navroz/3/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="n4"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"4-navroz tabrigi uchun ismingizni kiriting!",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="4-navroz tabrigi uchun ismingizni kiriting!"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/navroz/4/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

/////raqam

if($data=="raqam"){
bot('editMessageText',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
 'text'=>"🚗 Avtomobilga raqam yozish uchun pastdagi tugmachalar yordamida avtomobilni tanlang👇🏻
$mkm",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>'Matiz', 'callback_data' => "1"],['text'=>'Damas', 'callback_data' => "2"],['text'=>'Spark', 'callback_data' => "3"]],
[['text'=>'Nexia1', 'callback_data' => "4"],['text'=>'Nexia2', 'callback_data' => "5"],['text'=>'Nexia3', 'callback_data' => "6"]],
[['text'=>'Cobalt', 'callback_data' => "7"],['text'=>'Gentra', 'callback_data' => "8"],['text'=>'Captiva', 'callback_data' => "9"]],
[['text'=>'Trecker', 'callback_data' => "12"],['text'=>'Malibu1', 'callback_data' => "11"],['text'=>'Malibu2', 'callback_data' => "10"]],
[['text'=>'Mazda', 'callback_data' => "14"],['text'=>'Nissan', 'callback_data' => "13"],['text'=>'Ferrari', 'callback_data' => "15"]],
[['text'=>'Bugatti', 'callback_data' => "16"],['text'=>'B M W', 'callback_data' => "17"],['text'=>'Mersedes', 'callback_data' => "18"]],
[['text'=>'Lomborghini', 'callback_data' => "19"],['text'=>'Rolls Royse', 'callback_data' => "20"],['text'=>'🔝Menu🔝', 'callback_data' => "ortinga"]],

    ]
    ]),
 ]);
 }

if($data=="1"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Matizga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Matizga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/matiz/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="2"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Damasga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Damasga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/damas/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="3"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Sparkga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Sparkga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/spark/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="4"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Nexia1 ga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Nexia1 ga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/N1/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="5"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Nexia2 ga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Nexia2 ga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/N2/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="6"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Nexia3 ga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Nexia3 ga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/N3/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="7"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Cobaltga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Cobaltga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/kobalt/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="8"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Gentraga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Gentraga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/jentra/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="9"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Captivaga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Captivaga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/kaptiva/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="10"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Treckerga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Treckerga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/treker/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="11"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Malibu1 ga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Malibu1 ga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/malibu1/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}
if($data=="12"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Malibu2 ga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Malibu2 ga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/malibu/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="13"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Mazdaga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Mazdaga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/mazda/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}


if($data=="14"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Nissanga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Nissanga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/nissan/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="15"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Ferrariga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Ferrariga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/ferrari/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="16"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Bugattiga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Bugattiga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/bugatti/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="17"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"BMW ga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="BMW ga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/bmw/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="18"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Mersedesga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Mersedesga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/mers/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="19"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Lomborghiniga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Lomborghiniga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/lombor/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="20"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Rolls Royse ga raqam yozish: 90 M551LA",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Rolls Royse ga raqam yozish: 90 M551LA"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Raqam/rolls/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

/////fudbolka
if($data=="fudbolka"){
bot('editMessageText',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>"👕 Bu bo`limda futbolkaga ismingizni yozishingiz mumkin. Rasm yozilishi kerak bo`lgan jamoani tanlang👇
$mkm",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>'FC Barca', 'callback_data' => "a"],['text'=>'R Madrid', 'callback_data' => "b"]],
[['text'=>'Arsenal', 'callback_data' => "c"],['text'=>'Juventus', 'callback_data' => "d"]],
[['text'=>'Bavarya', 'callback_data' => "e"],['text'=>'Mun United', 'callback_data' => "f"]],
[['text'=>'Chelsea', 'callback_data' => "g"],['text'=>'Liverpool', 'callback_data' => "h"]],
[['text'=>'PSGerman', 'callback_data' => "i"],['text'=>'Milan', 'callback_data' => "j"]],
[['text'=>'MUN City', 'callback_data' => "k"],['text'=>'Roma', 'callback_data' => "l"]],
    [['text'=>'🔝Bosh menyu🔝', 'callback_data' => "ortinga"]],

    ]
    ]),
 ]);
 }

if($data=="a"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"FCBarselonaga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="FCBarselonaga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/barsa/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="b"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Real Madridga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Real Madridga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/real/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="c"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Arsenalga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Arsenalga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/arsenal/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="d"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Juventusga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Juventusga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/yuventus/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="e"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Bavaryaga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Bavaryaga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/bavarya/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}
if($data=="f"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Mun Unitedga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Mun Unitedga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/united/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="g"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Chelseaga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Chelseaga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/chelsi/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="h"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Liverpoolga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Liverpoolga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/liverpul/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="i"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"PSG ga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="PSG ga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/psj/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="j"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Milanga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Milanga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/milan/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="k"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Mun Cityga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Mun Cityga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/city/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="l"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Romaga ism yozish uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Romaga ism yozish uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/fudbolka/roma/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

///////8-mart

 if($data=="mart"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendPhoto',[
'chat_id'=>$ccid,
'photo'=>"https://t.me/MyUzBots/10",
'caption'=>"O‘zingizga yoqqan rasmni tanlang",
'parse_mode'=>'html',
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>'1⃣','callback_data' => "mart1"],['text'=>'2⃣','callback_data' => "mart2"],['text'=>'3⃣','callback_data' => "mart3"],['text'=>'4⃣','callback_data' => "mart4"]],
[['text'=>'5⃣','callback_data' => "mart5"],['text'=>'6⃣','callback_data' => "mart6"],['text'=>'7⃣','callback_data' => "mart7"],['text'=>'8⃣','callback_data' => "mart8"]],
    [['text'=>'🔝Bosh menyu🔝', 'callback_data' => "ortinga"]],
    ]
    ]),
 ]);
 }

if($data=="mart1"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"8-mart 1-rasm uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="8-mart 1-rasm uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/mart8/o1/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="mart2"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"8-mart 2-rasm uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="8-mart 2-rasm uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/mart8/o2/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}
if($data=="mart3"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"8-mart 3-rasm uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="8-mart 3-rasm uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/mart8/o3/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="mart4"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"8-mart 4-rasm uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="8-mart 4-rasm uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/mart8/o4/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="mart5"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"8-mart 5-rasm uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="8-mart 5-rasm uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/mart8/q1/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}
if($data=="mart6"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"8-mart 6-rasm uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="8-mart 6-rasm uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/mart8/q2/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}
if($data=="mart7"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"8-mart 7-rasm uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="8-mart 7-rasm uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/mart8/q3/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="mart8"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"8-mart 8-rasm uchun ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="8-mart 8-rasm uchun ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/mart8/q4/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

////humans

if($data=="humans"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Ismingizni katta harflar bilan yozib yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Ismingizni katta harflar bilan yozib yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/Humans/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

////ramazon

if($data=="ramazon"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendPhoto',[
'chat_id'=>$ccid,
'photo'=>"https://t.me/MyUzBots/9",
'caption'=>"O‘zingizga yoqqan rasmni tanlang",
'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>'1⃣','callback_data' => "ramazon1"],['text'=>'2⃣','callback_data' => "ramazon2"]],
[['text'=>'3⃣','callback_data' => "ramazon3"],['text'=>'4⃣','callback_data' => "ramazon4"]],
[['text'=>'💫Ortga','callback_data' => "ortinga"]],
    ]
    ]),
 ]);
 }

if($data=="ramazon1"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Ramazon oyi uchun 1-rasmga ismingizni yozing",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Ramazon oyi uchun 1-rasmga ismingizni yozing"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/ramazon/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="ramazon2"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Ramazon oyi uchun 2-rasmga ismingizni yozing",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Ramazon oyi uchun 2-rasmga ismingizni yozing"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/ramazon/index2.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="ramazon3"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Ramazon oyi uchun 3-rasmga ismingizni yozing",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Ramazon oyi uchun 3-rasmga ismingizni yozing"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/ramazon/index3.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}

if($data=="ramazon4"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"Ramazon oyi uchun 4-rasmga ismingizni yozing",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="Ramazon oyi uchun 4-rasmga ismingizni yozing"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/ramazon/index4.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$backs,
]);
}
////multik
if($data=="multik"){
bot('editMessageText',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'text'=>"🤩Bu menuda ismingizga multik foto tayyorlashingiz mumkin. Kerakli bo`limni tanlang👇
$mkm",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>'👨‍💼Erkak', 'callback_data' => "erkak"],['text'=>'👩‍🔧Ayol', 'callback_data' => "ayol"]],
[['text'=>'👬Juftlik', 'callback_data' => "juft"]],
[['text'=>'🔝Bosh menyu🔝', 'callback_data' => "ortinga"]],

    ]
    ]),
 ]);
 }

if($data=="erkak"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendPhoto',[
'chat_id'=>$ccid,
'photo'=>"https://t.me/MyUzBots/11",
'caption'=>"O‘zingizga yoqqan rasmni tanlang",
'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>'1⃣','callback_data' => "er1"],['text'=>'2⃣','callback_data' => "er2"],['text'=>'3️⃣','callback_data' => "er3"]],
[['text'=>'4️⃣','callback_data' => "er4"],['text'=>'5️⃣','callback_data' => "er5"],['text'=>'6️⃣','callback_data' => "er6"]],
[['text'=>'7️⃣','callback_data' => "er7"],['text'=>'8️⃣','callback_data' => "er8"],['text'=>'9️⃣','callback_data' => "er9"]],
[['text'=>'🔝Bosh menyu🔝','callback_data' => "ortinga"]],
    ]
    ]),
 ]);
 }
 
if($data=="ayol"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendPhoto',[
'chat_id'=>$ccid,
'photo'=>"https://t.me/MyUzBots/12",
'caption'=>"O‘zingizga yoqqan rasmni tanlang",
'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>'1⃣','callback_data' => "ay1"],['text'=>'2⃣','callback_data' => "ay2"],['text'=>'3️⃣','callback_data' => "ay3"]],
[['text'=>'4️⃣','callback_data' => "ay4"],['text'=>'5️⃣','callback_data' => "ay5"],['text'=>'6️⃣','callback_data' => "ay6"]],
[['text'=>'7️⃣','callback_data' => "ay7"],['text'=>'8️⃣','callback_data' => "ay8"],['text'=>'9️⃣','callback_data' => "ay9"]],
[['text'=>'🔝Bosh menyu🔝','callback_data' => "ortinga"]],
    ]
    ]),
 ]);
 }

if($data=="juft"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendPhoto',[
'chat_id'=>$ccid,
'photo'=>"https://t.me/MyUzBots/13",
'caption'=>"O‘zingizga yoqqan rasmni tanlang",
'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>'1⃣','callback_data' => "ju1"],['text'=>'2⃣','callback_data' => "ju2"],['text'=>'3️⃣','callback_data' => "ju3"]],
[['text'=>'4️⃣','callback_data' => "ju4"],['text'=>'5️⃣','callback_data' => "ju5"],['text'=>'6️⃣','callback_data' => "ju6"]],
[['text'=>'7️⃣','callback_data' => "ju7"],['text'=>'8️⃣','callback_data' => "ju8"],['text'=>'9️⃣','callback_data' => "ju9"]],
[['text'=>'🔝Bosh menyu🔝','callback_data' => "ortinga"]],
    ]
    ]),
 ]);
 }

if($data=="er1"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"1-Multik rasmga ismingiz?",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="1-Multik rasmga ismingiz?"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Erkak/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="er2"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"2-Multik rasmga ismingiz?",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="2-Multik rasmga ismingiz?"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Erkak/index2.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="er3"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"3-Multik rasmga ismingiz?",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="3-Multik rasmga ismingiz?"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Erkak/index3.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="er4"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"4-Multik rasmga ismingiz?",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="4-Multik rasmga ismingiz?"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Erkak/index4.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="er5"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"5-Multik rasmga ismingiz?",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="5-Multik rasmga ismingiz?"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Erkak/index5.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="er6"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"6-Multik rasmga ismingiz?",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="6-Multik rasmga ismingiz?"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Erkak/index6.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="er7"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"7-Multik rasmga ismingiz?",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="7-Multik rasmga ismingiz?"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Erkak/index7.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="er8"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"8-Multik rasmga ismingiz?",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="8-Multik rasmga ismingiz?"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Erkak/index8.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="er9"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"9-Multik rasmga ismingiz?",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="9-Multik rasmga ismingiz?"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Erkak/index9.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ay1"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"1-Multik rasmga ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="1-Multik rasmga ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Ayol/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ay2"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"2-Multik rasmga ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="2-Multik rasmga ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Ayol/index2.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ay3"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"3-Multik rasmga ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="3-Multik rasmga ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Ayol/index3.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ay4"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"4-Multik rasmga ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="4-Multik rasmga ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Ayol/index4.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ay5"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"5-Multik rasmga ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="5-Multik rasmga ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Ayol/index5.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ay6"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"6-Multik rasmga ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="6-Multik rasmga ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Ayol/index6.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ay7"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"7-Multik rasmga ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="7-Multik rasmga ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Ayol/index7.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ay8"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"8-Multik rasmga ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="8-Multik rasmga ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Ayol/index8.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ay9"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"9-Multik rasmga ismingizni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="9-Multik rasmga ismingizni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Ayol/index9.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ju1"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"1-Multik rasmga ismlarni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="1-Multik rasmga ismlarni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Juft/index.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ju2"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"2-Multik rasmga ismlarni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="2-Multik rasmga ismlarni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Juft/index2.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ju3"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"3-Multik rasmga ismlarni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="3-Multik rasmga ismlarni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Juft/index3.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ju4"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"4-Multik rasmga ismlarni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="4-Multik rasmga ismlarni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Juft/index4.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ju5"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"5-Multik rasmga ismlarni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="5-Multik rasmga ismlarni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Juft/index5.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ju6"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"6-Multik rasmga ismlarni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="6-Multik rasmga ismlarni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Juft/index6.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ju7"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"7-Multik rasmga ismlarni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="7-Multik rasmga ismlarni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Juft/index7.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ju8"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"8-Multik rasmga ismlarni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="8-Multik rasmga ismlarni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Juft/index8.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
if($data=="ju9"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'text'=>"9-Multik rasmga ismlarni yuboring",
'parse_mode'=>'markdown',
'reply_markup'=>$rpl, 
]);
}
if($reply=="9-Multik rasmga ismlarni yuboring"){
bot('sendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://u1264.xvest2.ru/multik/Juft/index9.php?text=$text",
 'caption'=>"Buyurtmangiz tayyor!!!
 
Siz yozgan soʻz:  $text

$mkm",
'parse_mode'=>'html',
'reply_markup'=>$multiort,
]);
}
//////juma muborak

if($data=="juma"){
bot('editMessageText',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
 'text'=>"Bu menu hali ishga tushmadi!",
'parse_mode'=>'markdown',
'reply_markup'=>$backs, 
]);
}

if($data=="f1"){
bot('sendvoice',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'voice'=>"t.me/mening_xotinim/15",
'caption'=>"Sarlavha: Mazzami sizlarga mazzami\nYuklab olindi: 86k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'❌','callback_data'=>'ortinga'],],
]]),
]);
}

if($data=="f2"){
bot('sendvoice',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'voice'=>"https://t.me/Mening_Xotinim/16",
'caption'=>"Sarlavha: Kulishni udari😂\nYuklab olindi: 86k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'❌','callback_data'=>'ortinga'],],
]]),
]);
}

if($data=="f3"){
bot('sendvoice',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'voice'=>"https://t.me/Mening_Xotinim/17",
'caption'=>"Sarlavha: Kecha Ustimdan kulganlar\nYuklab olindi: 23k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'❌','callback_data'=>'ortinga'],],
]]),
]);
}

if($data=="f4"){
bot('sendvoice',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'voice'=>"https://t.me/Mening_Xotinim/18",
'caption'=>"Gucci flep flap uzbekchasi\nYuklab olindi: 23k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'❌','callback_data'=>'ortinga'],],
]]),
]);
}

if($data=="f5"){
bot('sendvoice',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'voice'=>"https://t.me/Mening_xotinim/19",
'caption'=>"Sarlavha: maqtov yorliq berelar\nYuklab olindi: 23k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'❌','callback_data'=>'ortinga'],],
]]),
]);
}

if($data=="f6"){
bot('sendvoice',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'voice'=>"https://t.me/Mening_Xotinim/20",
'caption'=>"Sarlavha: biz bilgandek kutgandek\nYuklab olindi: 29k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'❌','callback_data'=>'ortinga'],],
]]),
]);
}

if($data=="f7"){
bot('sendvoice',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'voice'=>"https://t.me/Mening_Xotinim/21",
'caption'=>"Sarlavha: Yo'qooool\nYuklab olindi: 89k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'❌','callback_data'=>'ortinga'],],
]]),
]);
}

if($data=="f8"){
bot('sendvoice',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'voice'=>"https://t.me/Mening_Xotinim/22",
'caption'=>"Sarlavha: Uzur Ketibqopti\nYuklab olindi: 56k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'❌','callback_data'=>'ortinga'],],
]]),
]);
}

if($data=="f9"){
bot('sendvoice',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'voice'=>"https://t.me/Mening_Xotinim/23",
'caption'=>"Sarlavha: Assalomu Alaykum\nYuklab olindi: 42k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'❌','callback_data'=>'ortinga'],],
]]),
]);
}

if($data=="f10"){
bot('sendvoice',[
'chat_id'=>$ccid,
'message_id'=>$mmid,
'voice'=>"https://t.me/Mening_Xotinim/24",
'caption'=>"Sarlavha: Boldi bas qil\nYuklab olindi: 45k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'❌','callback_data'=>'ortinga'],],
]]),
]);
}

if($data=="bot1"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/18",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :  $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot1"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/19",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :  $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot2"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/20",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :  $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot3"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/21",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :  $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}


if($data=="bot4"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/22",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ : $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot5"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/23",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ : $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot6"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/24",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ : $reklama  🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot7"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/25",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :  $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}


if($data=="bot8"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/26",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :  $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}


if($data=="bot9"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/27",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :  $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}


if($data=="bot10"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/28",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :  $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot11"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/29",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ : $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot12"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/30",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ : $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot13"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/31",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :  $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}


if($data=="bot14"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/35",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ : $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot15"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/33",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :$reklama  🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot16"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/32",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :$reklama  🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot17"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/34",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :  $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}


if($data=="bot18"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/33",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :$reklama  🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}


if($data=="bot19"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/37",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ : $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}


if($data=="bot20"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/38",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :$reklama  🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if($data=="bot21"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/40",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ : $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}


if($data=="bot22"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/42",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ :$reklama  🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}


if($data=="bot23"){
    bot('SendVideo',[
        'chat_id'=>$ccid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/39",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ : $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}


if($data=="bot24"){
    bot('SendVideo',[
        'chat_id'=>$callcid,
        'message_id'=>$mmid,
        'video'=>"https://t.me/BaS_Culub/41",
        'caption'=>"Sɪᴢɴɪɴɢ ᴠɪᴅᴇᴏɪɴɢɪᴢ ᴛᴀʏᴏʀ ʙᴏʟᴅɪ 🖤 Bɪᴢɴɪɴɢ ᴋᴀɴᴀʟɢᴀ Aᴢᴏ Bᴏ'ʟɪɴɢ ʙᴜɴᴅᴀɴᴅᴀ ᴢᴏʀ ʙᴏᴛʟᴀʀ ʏᴀʀᴀᴛᴀᴍɪᴢ ✨ 
 
Aᴅᴍɪɴ : $reklama 🦅",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
   [['text'=>'🔙 ᴏʀǫᴀɢᴀ','callback_data'=>'ortinga']],

]
])
]);
}

if(($stat1=="creator" or $stat1=="administrator" or $stat1=="member") and ($stat2=="creator" or $stat2=="administrator" or $stat2=="member")){}else{
     bot("sendmessage",[
         "chat_id"=>$uid,
         "text"=>"<b>Quyidagi kanalimizga obuna boʻling. A'zo bo'lib qayta /start bosing! Botni keyin toʻliq ishlatishingiz mumkin!</b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>" 🥀ᴀ'ᴢᴏ ᵇᵒ'ˡⁱˢʰ🥀","url"=>"https://t.me/Telefon_bozorr11"],],
[["text"=>" 🥀ᴀ'ᴢᴏ ᵇᵒ'ˡⁱˢʰ🥀","url"=>"https://t.me/Ramantika_Vediolar1"],],
[["text"=>"🥀ᴀ'ᴢᴏ ᵇᵒ'ˡⁱˢʰ🥀","url"=>"https://t.me/Bepul_reklama_quyish"],],
]
]),
]); 
return false;
}

if($text == "/start"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"🖐Assalomu alaykum  botimizga xush kelibsiz.

⚡Botimizda ko'plab foydali funksiyalar mavjud va undan foydalaning!

❄️Ko'proq ma'lumot olish uchun botni ishlatishda davom eting.

📛Agar botimizga juda ko'p buyruq bersangiz, botimizda 🚫bloklanishingiz mumkin!

✔️O'zingizga kerakli menyuni tanlang!",
    'parse_mode'=>'html',
'reply_to_message_id'=> $mid, 
 'reply_markup'=>$bowmenu,
 ]);
}

?>
