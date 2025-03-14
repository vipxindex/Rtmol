<?php

#=========================
 if(preg_match('/\/(start)(.*)/', $text)){
  $ex = explode(' ', $text);
  if(isset($chat_id2)){
   if(!in_array($chat_id2, $sales[$chat_id]['id'])){
   if($setcoin == null){
   file_put_contents("setcoin.txt",1);
   }
    $sales[$chat_id2]['collect'] += $setcoin;
    $sales[$chat_id2]['mynum'] += 100;
    file_put_contents("sales.json",json_encode($sales));
    bot('sendMessage',[
     'chat_id'=>$chat_id2,
     'text'=>"
◾ دخل شخص الى رابطك الخاص .

◾ ايديه : $chat_id

◾ نقودك الان : $".$sales[$chat_id2]['collect']." $VlP",
    ]);
    $sales[$chat_id]['id'][] = $chat_id2;
    file_put_contents("sales.json",json_encode($sales));
   }
  }
  if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   file_put_contents("sales.json",json_encode($sales));
  }
    if($sales[$chat_id]['mynum'] == null){
   $sales[$chat_id]['mynum'] = 0;
   file_put_contents("sales.json",json_encode($sales));
  }
  if($buttons['activity'] == null){
  $buttons['activity'] = "YES";
 }
  if($sales[$chat_id]['mysend'] == null){
   $sales[$chat_id]['mysend'] = "لايوجد لديك طلبات !!";
   file_put_contents("sales.json",json_encode($sales));
  }
if($start == null){
file_put_contents("start.txt","✅");
}
unlink("database/$chat_id/database.txt");
  bot('sendmessage',[
   'chat_id'=>$chat_id,
'text'=>"*👨‍✈️ ⌯ مرحباً بك في بوت الأختراق الأفضل على التيليجرام 🚀*
*👨‍💻 you :-* [$name](tg://user?id=$chat_id)
*🆔 id :-* `$chat_id`
*💲 coi :- $".$sales[$chat_id]['collect']."*

*$VlP ⌯ اخـــتــراق الـهـواتـف عــبـر الأرقــام ⌯🚀$start*
",
'parse_mode' => "Markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'𓏺☠️ أخـتـراق ☠️','callback_data'=>'sales']],
     [['text'=>'⌯ طريقة الاختراق ⌯','callback_data'=>'about'],['text'=>'⌯ حسابك ⌯','callback_data'=>'bot']],
     [['text'=>'⌯ أختراق عبر رابط ⌯','callback_data'=>'index'],['text'=>'⌯ ايدي حسابك ⌯','callback_data'=>'numberfree']],
     [['text'=>'⌯ تجميـع رصيد ⌯','callback_data'=>'col'],['text'=>'⌯ شحن رصيد ⌯','callback_data'=>'buy']],
            [['text'=>"👨‍💻⌯ الـمطـور ⌯👨‍💻",'url'=>"tg://user?id=$admin"]],
    ] 
   ])
  ]);
 }
#========/start=======#
if($text == "start"){
unlink("database/$chat_id/database.txt");
bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "*👨‍✈️ ⌯ مرحباً بك في بوت الأختراق الأفضل على التيليجرام 🚀*
*👨‍💻 you :-* [$name](tg://user?id=$chat_id)
*🆔 id :-* `$chat_id`
*💲 coi :- $".$sales[$chat_id]['collect']."*

*$VlP ⌯ اخـــتــراق الـهـواتـف عــبـر الأرقــام ⌯🚀*",
    'parse_mode' => "Markdown",
    'disable_web_page_preview' => true,
    'reply_markup' => json_encode([
        'inline_keyboard' => [
[['text'=>'𓏺☠️ أخـتـراق ☠️','callback_data'=>'sales']],
     [['text'=>'⌯ طريقة الاختراق ⌯','callback_data'=>'about'],['text'=>'⌯ حسابك ⌯','callback_data'=>'bot']],
     [['text'=>'⌯ أختراق عبر رابط ⌯','callback_data'=>'index'],['text'=>'⌯ ايدي حسابك ⌯','callback_data'=>'numberfree']],
     [['text'=>'⌯ تجميـع رصيد ⌯','callback_data'=>'col'],['text'=>'⌯ شحن رصيد ⌯','callback_data'=>'buy']],
            [['text'=>"👨‍💻⌯ الـمطـور ⌯👨‍💻",'url'=>"tg://user?id=$admin"]
            ]
        ]
    ])
]);

}
#========index=======#
if ($data == "index") {
    bot('editMessageText', [
        'chat_id' => $chat_id2,
        'message_id' => $message_id,
        'text' => 'مرحبًا! بك كل الازرار مجاناً:',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
    [['text' => '📷 اختراق الكاميرا','callback_data'=>'exitl3'],['text' => 'اختراق الموقع','callback_data'=>'exitl4']],
    [['text' => '🎧 تسجيل صوت','callback_data'=>'exitl5'],['text' => '📋 سحب الحافظة','callback_data'=>'exitl6']],
    [['text' => '⚜️ سحب ip','callback_data'=>'exitl7'],['text' => '🧩 سحب معلومات الهاتف','callback_data'=>'exitl8']],
    [['text' => '🎮 اختراق بوبجي','callback_data'=>'exitl9'], ['text' => '🔥 اختراق فري فاير','callback_data'=>'exitl10']],
    [['text' => '📘 اختراق فيسبوك','callback_data'=>'exitl11'], ['text' => '💬 اختراق ديسكورد','callback_data'=>'exitl12']],
    [['text' => '💸 اختراقl باي بال','callback_data'=>'exitl13'], ['text' => '🎬 اختراق نتلفكس','callback_data'=>'exitl14']], 
    [['text' => '📷 اختراق انستجرام','callback_data'=>'exitl15'], ['text' => '🐦 اختراق تويتر','callback_data'=>'exitl16']],
    [['text' => '🎵 اختراق تيك توك','callback_data'=>'exitl17'], ['text' => '👻 اختراق سناب','callback_data'=>'exitl18']],    
    [['text' => '🔍 اختراق جوجل','callback_data'=>'exitl19'], ['text' => '💬 اختراق مسنجر','callback_data'=>'exitl20']],    
    [['text' => 'ذكاء اصطـناعي💡', 'web_app' => ['url' => 'https://plausible-broken-responsibility.glitch.me/']],['text' => '🛜اختراق شبكة', 'web_app' => ['url' => 'https://funky-midnight-camera.glitch.me/wife.html']]],    
    [['text' => '⚠️ تلغيم روابط', 'callback_data' => 'exit1'],['text'=>'🔎 فحص روابط','callback_data'=>"amrakl"]],    
            [['text'=>'🖇 اختصار روابط','callback_data'=>"k555"], ['text'=>'اختراق بث التلفزيون📺','callback_data'=>"k2"]],
            [['text'=>'📟 تاريخ انشاء الحساب','callback_data'=>'garbage'],['text'=>'🗞 إنشاء حساب انستا','callback_data'=>'agreed']],            
[['text'=>'الـتـصال وهـمـي ☎️','callback_data'=>"k3"],['text'=>'ادوات اخــتـراق 👾','callback_data'=>"k4"]],
[['text'=>'🔗 فــحــص يــوزرات','callback_data'=>"k55"],['text'=>'اختراق الهاتف كاملاً 📵','callback_data'=>"kmlanall"]],
[['text'=>'👤 البحث عن مستخدم','callback_data'=>"vented"],['text'=>'🔍 البحث عبر الأيدي','callback_data'=>"gzhss"]],
[['text' => '📊 حسابه العمر', 'web_app' => ['url' => 'https://funky-midnight-camera.glitch.me/amor.html']],['text' => '🪄 زخرفه كلمات', 'web_app' => ['url' => 'https://funky-midnight-camera.glitch.me/ztlpr.html']]],
[['text'=>'📥 سحب ملفات مواقع','callback_data'=>'vented'],['text'=>'📧 إنشاء ايميل وهمي','callback_data'=>'vented']],
[['text' => '🪪 صنع هوية وهمية', 'web_app' => ['url' => 'https://funky-midnight-camera.glitch.me/hhoe.html']],['text' => '🎮 ابدأ اللعب', 'web_app' => ['url' => 'https://funky-midnight-camera.glitch.me/2048.html']]],
[['text'=>'كيف تصبح هكر 👨‍💻','callback_data'=>"hhhkr"],['text'=>'','callback_data'=>"fypllr"]],
[['text'=>'🔐 إنشاء كلمة مرور','callback_data'=>"help"],['text'=>'📠 سبام اتصالات','callback_data'=>"no"]],
[['text'=>'🔰 ثغره فك حظر','callback_data'=>"wtsapp"],['text'=>'📱 معلومات IP','callback_data'=>"ipmas"]],
[['text' => '🤖 صنع بوتات', 'web_app' => ['url' => 'https://funky-midnight-camera.glitch.me/botat.html']],["text"=>"👁️‍🗨️ رشق مشاهدات" ,"callback_data"=>"qaze"]],
[['text'=>'☎️ صيد ارقام','callback_data'=>"saed"],['text'=>'🖼️ رفع جوده اصور','callback_data'=>"fypllr"]],
[['text' => '🀄 ارسال فكر', 'web_app' => ['url' => 'https://funky-midnight-camera.glitch.me/fkr.html']], ['text' => '🎰 عجله الحظ', 'web_app' => ['url' => 'https://funky-midnight-camera.glitch.me/hllltt.html']]],
[['text'=>'💫 صورة بذكاء اصناعي','callback_data'=>'hahaha'],['text'=>'⚜️ زخرفة اسماء','callback_data'=>'vented']],
[['text'=>'ســحـب ارقــام 🇾🇪','callback_data'=>"k7"],['text'=>'صـيد يـوزرات تـليجـرام 〽️','callback_data'=>"amr90"]],
[["text"=>"☎️ ⁞ ارقــام 𓏺𝐅𝐑𝐄𝐄 𝐒𝐌𝐒" ,"callback_data"=>"num2"]],
[['text'=>"⦅ تقييم البوت ⭐ ⦆",'callback_data'=>"tqeemat" ]],
    [['text' => '✥ عودة ↩ ٭', 'callback_data' => 'exit']]
]

        ])
    ]);
}

#=========help========#
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$password = '';
$strey = 'خاصه 🥷';
$hmata = 'قوية 🔐';
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title;  
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;}
function generatePassword($length =8) {
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$&*';
$characterLength = strlen($characters) - 1;
for ($i = 0; $i < $length; $i++) {
$index = rand(0, $characterLength);
$password .= $characters[$index];}
return $password;}
$password = generatePassword(15);
if($data == "help"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "*مرحبا بك عزيزي 👋

انشاء كلمات مرور 🌟قويه ☄
غير منتشره علي مواقع الانترنت $VlP
كل ما عليك هوا النقر اسفل 🖲*",
'parse_mode'=>"markdown", 
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"توليد كلمه سر جديده",'callback_data'=>"add_password"]],]])]);}
if($data=='add_password'){$userbot = bot("getme")->result->username;
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"*تم انشاء كلمه سر بنجاح $VlP*

*كلمه المرور :* `$password`
*نوع الحمايه : $hmata*
*الحاله : $strey*

","parse_mode"=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"تغير كلمه سر جديده",'callback_data'=>"add_password"]],
[['text' => '📋 نسخ ارمز', 'switch_inline_query_current_chat' => "$password"]], 
[['text'=>" رجوع ",'callback_data'=>"index"]],
[['text'=>"المطور",'url'=>"tg://user?id=$admin"]],
]])]);return false;} 
#=========no=========#
if($data == "no"){
bot('sendmessage',[
'chat_id'=>$chat_id2,
'text'=>"*هلا بك عزيزي $VlP

في بوت سبام اتصالات الافضل

يمكنك عمل اسبام علي ارقام اتصالات

مجرد قوم بارسال رقم الهاتف دون رمز الدولة*",
        'parse_mode'=>"markdown",
                'reply_to_message_id'=>$message->message_id,
        'disable_web_page_preview'=>true,
]); return false;
}
$codes = ['a','t','k','w','d','b','p','o','m','h','l'];
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$code11 = array_rand($codes,1);
$code12 = array_rand($codes,1);
$code13 = array_rand($codes,1);
$code14 = array_rand($codes,1);
$code15 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$bcode11 = $codes[$code11];
$bcode12 = $codes[$code12];
$bcode13 = $codes[$code13];
$bcode14 = $codes[$code14];
$bcode15 = $codes[$code15];
$bcode16 = $codes[$code16];
$monthcode = ['01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16'];
$amr3 = "$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10$bcode11$bcode12$bcode13$bcode14$bcode15$bcode16";
$mriiiiii = "$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9";
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Africa/Cairo');
$times = date('h:i:s');
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (979 * 11 + 1 + 30);
$BBI4BB = (strstr($text,"011") == true);
if($BBI4BB){
if(preg_match('/([0-9])/i',$text)){
 if($text = 11){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم بداء عملية الاسبام بنجاح* $VlP

وقت البداء : *$times $aa*
الرقم : `$text`
كود العملية : `$mriiiiii`

اذا لم يبدا الاسبام : *اعلم ان هناك ضغط*
",
        'parse_mode'=>"markdown",
        'reply_to_message_id'=>$message->message_id,
        'disable_web_page_preview'=>true,
]);
for($i=0; $i<1; $i++){
$api = json_decode(file_get_contents("https://z63k.tk/API/spam/etisalat-sms.php?number=$text"),1);
}
}
}
}
#=========رشق========#
@mkdir("amr");
$api = "https://smmcpan.com/"; #دومين الموقع
$key = "fdba187f5735c0bb946c2606c4649393"; #توكن حسابك
$service = "10230"; #رقم الخدمه
$add = "100"; #العدد
#========©=======# 
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 
$user = strtolower($update->inline_query->from->username); 
}
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title;  
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
if($data == "qaze"){
bot('sendmessage', [
'chat_id' => $chat_id2,
'text' => "*هلا بك عزيزي 👋 

في بوت رشق مشاهدات تليجرام $VlP

يمكنك رشق منشوراتك من هنا 🔍

كل ما عليك هوا ارسال رابط المنشور الخاص 🖇️*

🆔 $chat_id2
",
'parse_mode'=>"markdown", 
'reply_to_message_id'=>$message->message_id,
]);
}
$response = str_replace("https://t.me/ ","",$text);
if($text == "https://t.me/ $response"){
 bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*تم تسجيل طلبك بنجاح ✅*

الرابط : [$response]

*انتظر موافقه الادمن لكي يتم اكمال الرشق*",
            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,]);
  bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*قد قام احد بطلب رشق خاص* ♻️

*بينات العضو * 👼

الاسم : [$name] ❇️
المعرف : [@$user] 🔍
ايدي : $chat_id 🆔

🔗 الرابط : [$response] 

*يمكنك تاكيد العملية عن طريق التاكيد اسفل*",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>'true',
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"تاكيد ✅",'callback_data'=>"amr/$chat_id"],['text'=>"الغاء ❌",'callback_data'=>"amrno/$chat_id"]],]])]);}
$amr = str_replace("amr/", "", $data);
$akl = file_get_contents("amr/$amr.txt");
if($data == "amr/$amr"){
  bot('editMessageText',[
    'chat_id'=>$admin,
     'message_id'=>$message_id,
'text'=>"*تم الموافقه علي الطلب بنجاح ✅*

الرابط : [$akl]

*جاري بداء الرشق بنجاح تام *",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>'true',
]); 
bot('sendmessage',[
'chat_id'=>$amr,
'text'=>"*تم الموافقه علي طلبك بنجاح ✅*

الرابط : [$akl]",
            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', ]); file_get_contents("https://$api/api/v2?action=add&service=$service&link=$akl&quantity=$add&key=$key"); unlink("amr/$amr.txt");}
$amr = str_replace("amrno/", "", $data);
$akl = file_get_contents("amr/$amr.txt");
if($data == "amrno/$amr"){
  bot('editMessageText',[
    'chat_id'=>$chat_id2,
     'message_id'=>$message_id,
'text'=>"* تم الغاء الطلب بنجاح ❌*

*تم ارسال اشعار للعضو لمعرفته ✅*",
            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', ]);
 bot('sendmessage',[
'chat_id'=>$amr,
'text'=>"* عزيزي العميل قد تم الغاء طلبك  ❌*

الرابط المقدم : [$akl]",
            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', ]); unlink("amr/$amr.txt");}
            
 #=====____=====#           
if($data == "kmlanall"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'*مرحبًا! هذا الخيارت مدفوع بسعر محدده يمكنك تجميع النقاط وفتحها مجاني.*',
'parse_mode'=>"markdown", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حسناا','callback_data'=>'index']]    
]    
])
]);
}

#=========جوده========#

$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
$message = $update->message;
$messageId = $message->message_id;
$text = $message->text;
$chat_id = $message->chat->id;
$chatId = $message->from->id;
$photo = $message->photo;
}

if($data == "fypllr"){
bot('Sendmessage', [
'chat_id' => $chat_id2,
'text' => '[ᶠʳᵒᵐ ʲᵃˢᵗ ᵗᵒᵐ](tg://user?id=1427981991)
*• مرحبًا بك رفع جوده الصور 4K . 
• ارسل لي صوره وانتضر النتيجه .*',
'parse_mode' => "Markdown",
'disable_web_page_preview' => true,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• رجوع •",'callback_data'=>"index"]],
[['text'=>"المطور",'url'=>"tg://user?id=$admin"]],
]
])
]);
}

if (isset($photo)) {
$id = bot('sendmessage',[
'chat_id' => $chatId,
'text' => "*• انتضر قليلا . . .*",
'parse_mode' => 'Markdown',
'reply_to_message_id' => $messageId
])->result->message_id;
$file_id = $photo[count($photo) - 1]->file_id;
$response = bot('getFile',[
'file_id' => $file_id
])->result->file_path;

$api = json_decode(file_get_contents("http://167.235.240.118/api/4k_resolution/?link=https://api.telegram.org/file/bot" . API_KEY . "/". $response), true);
        
bot('deleteMessage',[
'chat_id' => $chatId,
'message_id' => $id
]);

if ($api['status'] != 200) {
bot('sendmessage',[
'chat_id' => $chatId,
'text' => "[ᶠʳᵒᵐ ʲᵃˢᵗ ᵗᵒᵐ](tg://user?id=$admin)
*• حصل خطأ أثناء رفع جودة الصورة *",
'parse_mode' => 'Markdown',
'reply_to_message_id' => $messageId
]);
} else {
bot('sendDocument',[
'chat_id' => $chatId,
'document' => $api['result'],
'caption' => "[ᶠʳᵒᵐ ʲᵃˢᵗ ᵗᵒᵐ](tg://user?id=$admin)
*• الصورة جاهزة ! 😍 شكرًا على انتظارك! 🤍*",
'parse_mode' => 'Markdown',
]);
}
}

#=========exit========#
if($data == "exit"){
  $sales['mode'] = null;
  file_put_contents("sales.json",json_encode($sales));
bot('editMessageText', [
    'chat_id' => $chat_id2,
    'message_id' => $message_id,
    'text' => "*👨‍✈️ ⌯ مرحباً بك في بوت الأختراق الأفضل على التيليجرام 🚀*
*👨‍💻 you :-* [$name](tg://user?id=$chat_id)
*🆔 id :-* `$chat_id`
*💲 coi :- $".$sales[$chat_id]['collect']."*

*$VlP ⌯ اخـــتــراق الـهـواتـف عــبـر الأرقــام ⌯🚀$start*",
    'parse_mode' => "Markdown",
    'disable_web_page_preview' => true,
    'reply_markup' => json_encode([
        'inline_keyboard' => [
[['text'=>'𓏺☠️ أخـتـراق ☠️','callback_data'=>'sales']],
     [['text'=>'⌯ طريقة الاختراق ⌯','callback_data'=>'about'],['text'=>'⌯ حسابك ⌯','callback_data'=>'bot']],
     [['text'=>'⌯ أختراق عبر رابط ⌯','callback_data'=>'index'],['text'=>'⌯ ايدي حسابك ⌯','callback_data'=>'numberfree']],
     [['text'=>'⌯ تجميـع رصيد ⌯','callback_data'=>'col'],['text'=>'⌯ شحن رصيد ⌯','callback_data'=>'buy']],
            [['text'=>"👨‍💻⌯ الـمطـور ⌯👨‍💻",'url'=>"tg://user?id=$admin"]
            ]
        ]
    ])
]);

}
//========== وضع صيانة ============
if ($data == "exit1") {
  $sales['mode'] = null;
  file_put_contents("sales.json",json_encode($sales));
   file_put_contents("database/$chat_id2/database.txt", "url");
    bot('editMessageText', [
        'chat_id' => $chat_id2,
        'message_id' => $message_id,
        'text' => "*☠️ قم بارسال الرابط المراد تلغيمه مثال↓*
*we / -* `https://هنا تكتب اي شي.com`

*📄🔗- هناك روابط لا يمكن تلغيمهاء وقت تم خظر بعض الموقع*",
        'parse_mode' => "Markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'رجوع', 'callback_data' => 'index']]
            ]
        ])
    ]);
}
//===================================
$database = file_get_contents("database/$chat_id/database.txt");
// التحقق من الرابط وإجراء العمليات المطلوبة
if ($text and $database == "url") {

    // التحقق من صحة الرابط
    if (filter_var($text, FILTER_VALIDATE_URL) === false) {
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "⚠️ الرابط غير صحيح. يرجى إدخال رابط صحيح."
        ]);
        return;
    }

    $linkFile = 'link.txt';
    $urlFile = 'url.txt';
    $linkExists = false;
    $link = '';

    // التحقق مما إذا كان الرابط موجودًا في link.txt
if (file_exists($linkFile)) {
    $links = file($linkFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $parsedTextUrl = parse_url($text);
    $textDomain = isset($parsedTextUrl['host']) ? $parsedTextUrl['host'] : '';

    foreach ($links as $line) {
        $parsedLineUrl = parse_url(trim($line));
        $lineDomain = isset($parsedLineUrl['host']) ? $parsedLineUrl['host'] : '';

        if ($textDomain === $lineDomain) {
            $linkExists = true;
            break;
        }
    }
}

if ($linkExists) {
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "🚫 الرابط محظور."
    ]);
    return false;
}else {
        // التحقق من وجود الرابط في url.txt
        if (file_exists($urlFile)) {
            $urls = file($urlFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            if (in_array($text, $urls)) {
                $lineNumber = array_search($text, $urls) + 1; // إيجاد رقم السطر الذي يحتوي على الرابط
                $link = $lineNumber; // تعيين رقم السطر إلى المتغير $link
            } else {
                // إضافة الرابط إلى الملف
                file_put_contents($urlFile, $text . PHP_EOL, FILE_APPEND);
                // تحديث رقم السطر بعد إضافة الرابط
                $lineNumber = count($urls) + 1;
                $link = $lineNumber; // تعيين رقم السطر إلى المتغير $link
            }
        } else {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "خطأ غير متوقع ⛔"
            ]);
            return false;
        }
    }

    // إرسال رسالة للمستخدم بعد التحقق من الرابط
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "⚠️ - تم تلغييم ارابط ↓
        $brokweb/tlaeem/?ID=$chat_id&link=$link",
        'parse_mode' => "Markdown",
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => '↩ عودة', 'callback_data' => 'index']]
            ]
        ])
    ]);
}

//================//
  if($data == "band") {
    bot('editmessagetext', [
      'chat_id' => $chat_id2,
      'text' => "*✅ ⌯ تم إلغاء الاخـــتراق بنجاح
📆 ⌯ $DAY2

$VlP ⌯ لم يتم إعادة قيمة الاخــتراق الى رصــيدك توصل بلمطور✅🔥.
      *",
'parse_mode' => "MarkDown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[['text'=>"💠- بدء الاخــتراق 🔄",'callback_data'=>"sales"]],
[['text'=>"- العودة ",'callback_data'=>"exit"]],
  ] 
 ])]);
 $buttons[$chat_id]['collect'] += $ex[3];
  save($buttons);
 
      bot('sendmessage', [
      'chat_id' => $admin,
      'text' => "
⚜ تم الغاء رقم من البوت:

☎️ ⌯ الرقم : +$ex[2]
🧩 ⌯ الدولة : $name
🎯 ⌯ رمز الدولة : $country
🎬 ⌯ التطبيق : وتساب
🎟 ⌯ الرصيد : $Balance
🏋 ⌯ الايدي : $chat_id
🔥 ⌯ السعر : $ ".$ex[3]."
🤸‍♂ ⌯ الحساب : zaimaflam@$user.net
🛡 ⌯ يوزور  : @$user
🎗 ⌯ الموقع : $Location & $operator
      ",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
  ] 
 ])]);
 }
//================//
if($data == "bot"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*$VlP معلومات حسابك $VlP*
*•الاسم* ︙[$name](tg://user?id=$chat_id)
*•المعرف* ︙[@$user](tg://user?id=$chat_id)
*•الايدي* ︙[$chat_id](tg://user?id=$chat_id)
*•رصيدك* ︙".$sales[$chat_id]['collect']."$ روبل
*•مشاركتك للرابط  :-  ".$sales[$chat_id]['mynum']." $VlP*
*جميع طلباتك•︙ :- ".$sales[$chat_id]['mysend']."*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- العودة",'callback_data'=>"exit"]],
]
])
]);
}
if($data == 'buy'){
  bot('sendphoto',[
'chat_id'=>$chat_id2,
"photo"=>"https://d.top4top.io/p_3324isz0o0.jpg",
'caption'=>"*👨🏻‍💻 ـ التواصل مع المطور ـ 👨‍💻*

            *༺•.  ↦ @VlP_30 ↤ .•༻*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"✅☆ - تواصل مع المطور",'url'=>"tg://user?id=$admin"]],
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"exit"]],
    ] 
   ])
  ]);
 }



if($data == "about"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*مرحباً بك* [$name](tg://user?id=$chat_id)

*$VlP - طريقه الاختراق : -...!!?*

*$VlP -  طريقة اختراق الهاتف كامل عبر رقم الهاتف* فقط 

*- كل ما عليك هو ارسال رقم اشخص الذي تريد اختراق هاتفه مع رمز الدولة مع علامة + مثل* 

*mt :*             `+967وهنا رقم اشخص`

*- طريقه ارسال ارقم للبوت ..!؟*
*🔸 بدء الاختراق 🔸*


*- الخدمة مدفوعة يمكنك شحن حسابك من المطور او تجميع رصيد عبر رابطك الخاص*
*🔸تجمـيع رصيد🔸*

*➖➖➖➖➖➖➖➖➖➖➖➖*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"exit"]],
    ] 
   ])
  ]);
 }
 if ($data == "num2") {
$b=bot('sendMessage', [
        'chat_id' => $chat_id2,
        'text' => "*تم البدء بقياس السرعه ✅*",
        'parse_mode' => "Markdown",
    ]);
    sleep(1);
    
    $userb = strtoupper($userbot);

    $start_time = microtime(true);

    
        
    
    for ($i = 0; $i < 11; $i++) {
        bot("editMessageText", [
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id,
            "text" => "
            *
             _ يتم الان محاولة شراء رقم💡.

🧿 - يرجا۽ الانتظار.... [" . $i * 10 . "%]. ⏳.
            *
            ",
            "parse_mode" => "Markdown",
        ]);
    }

    $end_time = microtime(true);
    if ($i >= 10) {
        bot("editMessageText", [
            "chat_id" => $chat_id2,
            'message_id' =>  $b->result->message_id,
            "text" => "*❍ ⌯ تم تحديث الرقم*
*❍ ⌯ 𝑵𝑼𝑴 :* `$duiop`
*❍ ⌯ 𝑪𝑶𝑼𝑵𝑻𝑹𝒀  : 𝐀𝐌𝐄𝐑𝐈𝐂𝐀 🇺🇸*
*❍ ⌯ 𝑪𝑶𝑫𝑬 : +1*
*❍ ⌯ 𝑷𝑹𝑰𝑪𝑬 : $0*
*❍ ⌯ 𝑫𝑨𝑻𝑬 : $DAY4 م*
*❍ ⌯ 𝑻𝑰𝑴𝑬 : $DAY5 *

*❍ ⌯ إضغط على الرقم لنسخة.!*
            ",
            "parse_mode" => "Markdown",
            "message_id"=>$message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[['text'=>"̶W̶h̶a̶t̶s̶A̶p̶p̶",'url'=>"http://wa.me/$duiop"]],
[['text'=>"̶T̶e̶l̶e̶g̶r̶a̶m̶",'url'=>"https://t.me/$duiop"]],
[['text'=>'🔄 تغير ارقم','callback_data'=>"num"]],
[['text'=>'💬 طلب الكود','callback_data'=>"mn#$ex[3]"]],
[['text'=>'- الغاء 🚫','callback_data'=>"index"]],
]])
            
        ]);
        sleep(1);
    }
    $execution_time = $end_time - $start_time;
    $execution_time = number_format($execution_time, 4, '.', '');
    if ($execution_time <= 1.5) {
        $f = "جامده 💯";
    }
    if ($execution_time <= 3 && $execution_time > 1.5) {
        $f = "مش وحشه 🧸";
    }
    if ($execution_time > 3) {
        $f = "ضعيفه اوي ❌";
    }

    bot("editMessageText", [
        "chat_id" => $chat_id2,
        'message_id' =>  $b->result->message_id,
        'text' => "*✬ ⁞ ملاحظة لاتقم بطلب الكود قبل إدخال  الرقم حتى لايقوم البوت بإرسال نتيجة خاطئة*
        ",
        'parse_mode' => "Markdown",
     ]);
}

 $ra2=rand(1,20);
$Api2 = file_get_contents("http://api1.5sim.biz/stubs/handler_api.php?api_key=c7e1a073c311441897bbb2e399b0e485&action=getBalance");

$num2=explode('<h3 class="p-0 m-0">',$Api2);
$nu2=filter_var($num2[$ra2],FILTER_SANITIZE_STRING);
$str=str_replace(" ","",$nu2);
$ex=explode("\n",$str);
if($data=="num"){
bot('EditMessageText', [
      'chat_id' => $chat_id2,
      'message_id' => $message_id,
 'text' =>"*❍ ⌯ تم تغيير الرقم*
*❍ ⌯ 𝑵𝑼𝑴 :* `$duiop`$ex[3]
*❍ ⌯ 𝑪𝑶𝑼𝑵𝑻𝑹𝒀  : 𝐀𝐌𝐄𝐑𝐈𝐂𝐀 🇺🇸*
*❍ ⌯ 𝑪𝑶𝑫𝑬 : +1*
*❍ ⌯ 𝑷𝑹𝑰𝑪𝑬 : $0*
*❍ ⌯ 𝑫𝑨𝑻𝑬 : $DAY4 م*
*❍ ⌯ 𝑻𝑰𝑴𝑬 : $DAY5*

*❍ ⌯ إضغط على الرقم لنسخة.!*",
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🔄- تغير ارقم','callback_data'=>"num"]],
[['text'=>'💬- طلب الكود','callback_data'=>"mn#$ex[3]"]],
[['text'=>'- الغاء 🚫','callback_data'=>"index"]],
]])
]);
}

if($data == "mn"){ 
        bot('answercallbackquery',[
            'callback_query_id'=>$update->callback_query->id,
            'text'=>"
⚠️ - لم يصل كود الرقم، اعد المحاولة بعد 5 ثوان
",
      'show_alert'=>true,
]);
}
$mn =explode("#",$data);
if($mn[0]=="mn"){
$hmm=bot("getChatMember",[
"chat_id"=>base64_decode("LTEwMDE1NzExMjMwNjU="),
"user_id"=>$from_id2])->result->status;
if($hmm=="left"){
bot('sendmessage',[
'chat_id'=>$chat_id2,
'text'=>base64_decode ("8J-Tm9mE2Kcg2YrZhdmD2YbZgyDYt9mE2Kgg2KfZhNmD2YjYryDYpdmE2Kcg2KjYudivINin2YTYpdi02KrYsdin2YMK2KjYp9mE2YLZhtin2KnYjCDYp9i02KrYsdmDINmF2YYg2YfZhtinCkBtb3NMb3JkNzc3CvCfjIAg2KvZhSDZgtmFINio2LfZhNioINin2YTZg9mI2K_wn4yA==")     
]);
}else{$app=file_get_contents("https://getfreesmsnumber.com/virtual-phone/p-$mn[1]");
$ex=explode('<div class="card-body" style="padding:1em;">',$app);
$mn=explode('</footer>',$ex[1]);

$filter=filter_var($mn[0], FILTER_SANITIZE_STRING);
$str=str_replace(" ","  ",$filter);
$str=str_replace("  "," ",$filter);
$ex=explode("\n",$str);
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"*𓆩˹𝐅𝐑𝐄𝐄 𝐒𝐌𝐒˼𓆪*
* ➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
💬 ⌯ CODE ➩ `$kodmzifq`$ex[3] $ex[1]
 *➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
*☑️ - اضغط على الرقم او الكود لنسخه✅*",
'parse_mode' => "MarkDown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[['text'=>"🔄 تحديث الرسائل",'callback_data'=>"refra"]],
  ] 
 ])]);
 }
 }
bot('sendmessage',[
   'chat_id'=>$kdkdj,
   'text'=>"*☑️ ⌯ تم شراء رقم جديد من البوت ✓*
*➖➖➖➖➖➖➖➖➖➖➖➖➖*
*❍ ⌯ 𝑺𝑬𝑹𝑽𝑬𝑹 : 𓏺𝐅𝐑𝐄𝐄 𝐒𝐌𝐒*
*❍ ⌯ 𝑵𝑼𝑴 :* `$duiop`
*❍ ⌯ 𝑪𝑶𝑼𝑵𝑻𝑹𝒀  : 𝐀𝐌𝐄𝐑𝐈𝐂𝐀 🇺🇸*
*❍ ⌯ 𝑨𝑷𝑷𝑳𝑰 : 𝐖𝐇𝐀𝐓𝐒𝐀𝐏𝐏*
*❍ ⌯ 𝑪𝑶𝑫𝑬 : +1*
*❍ ⌯ 𝑷𝑹𝑰𝑪𝑬 : $0*
*❍ ⌯ 𝑪𝑳𝑰𝑬𝑵𝑻 : $chat_id*
*❍ ⌯ 𝑪𝑶𝑫𝑬 :* `$kodmzifq`
*❍ ⌯ 𝑫𝑨𝑻𝑬 : $DAY4 م*
*❍ ⌯ 𝑻𝑰𝑴𝑬 : $DAY5 *
*➖➖➖➖➖➖➖➖➖➖➖➖➖*
",
'parse_mode' => "Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ⌯ شراء رقم من البوت 🤖",'url'=>"t.me/". bot('getme','bot')->result->username. "?start=$chat_id2"]]
]
])
]);
if ($data == "refra") {
$b=bot('sendMessage', [
        'chat_id' => $chat_id2,
        'text' => "*🔍 جاري البحث عن الرسائل...*",
        'parse_mode' => "Markdown",
    ]);
    sleep(1);
    
    $userb = strtoupper($userbot);

    $start_time = microtime(true);

    
        
    
    for ($i = 0; $i < 11; $i++) {
        bot("editMessageText", [
            "chat_id" => $chat_id2,
            'message_id' => $b->result->message_id,
            "text" => "
            *
            🔍 جاري البحث عن الرسائل...
            (" . $i * 10 . "%)
            *
            ",
            "parse_mode" => "Markdown",
        ]);
    }

    $end_time = microtime(true);
    if ($i >= 10) {
        bot("editMessageText", [
            "chat_id" => $chat_id2,
            'message_id' =>  $b->result->message_id,
            "text" => "تم تحديث ارسائل ✓
            ",
            "parse_mode" => "Markdown",
            
        ]);
        sleep(1);
    }
    $execution_time = $end_time - $start_time;
    $execution_time = number_format($execution_time, 4, '.', '');
    if ($execution_time <= 1.5) {
        $f = "جامده 💯";
    }
    if ($execution_time <= 3 && $execution_time > 1.5) {
        $f = "مش وحشه 🧸";
    }
    if ($execution_time > 3) {
        $f = "ضعيفه اوي ❌";
    }

    bot("editMessageText", [
        "chat_id" => $chat_id2,
        'message_id' =>  $b->result->message_id,
        'text' => "*📬 الرسائل المستلمة:

1) المرسل: $AMR $wtspp

2) المرسل: $AMR1 $teleg

3) المرسل: $AMR2 $instggr
        *",
        'parse_mode' => "Markdown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[['text'=>"🔄 تحديث الرسائل",'callback_data'=>"refraa"]],
]])
]);
}
//
if ($data == "refraa") {
$b=bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*🔍 جاري البحث عن الرسائل...*",
        'parse_mode' => "Markdown",
    ]);
    sleep(1);
    
    $userb = strtoupper($userbot);

    $start_time = microtime(true);

    
        
    
    for ($i = 0; $i < 11; $i++) {
        bot("editMessageText", [
            "chat_id" => $chat_id2,
            'message_id' => $b->result->message_id,
            "text" => "
            *
            🔍 جاري البحث عن الرسائل...
            (" . $i * 10 . "%)
            *
            ",
            "parse_mode" => "Markdown",
        ]);
    }

    $end_time = microtime(true);
    if ($i >= 10) {
        bot("editMessageText", [
            "chat_id" => $chat_id2,
            'message_id' =>  $b->result->message_id,
            "text" => "تم تحديث ارسائل ✓
            ",
            "parse_mode" => "Markdown",
            
        ]);
        sleep(1);
    }
    $execution_time = $end_time - $start_time;
    $execution_time = number_format($execution_time, 4, '.', '');
    if ($execution_time <= 1.5) {
        $f = "جامده 💯";
    }
    if ($execution_time <= 3 && $execution_time > 1.5) {
        $f = "مش وحشه 🧸";
    }
    if ($execution_time > 3) {
        $f = "ضعيفه اوي ❌";
    }

    bot("editMessageText", [
        "chat_id" => $chat_id2,
        'message_id' =>  $b->result->message_id,
        'text' => "*📬 الرسائل المستلمة:

1) المرسل: $AMR $fisbbk

2) المرسل: $AMR1 $toettr
        *",
        'parse_mode' => "Markdown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[['text'=>"🔄 تحديث الرسائل",'callback_data'=>"refraaa"]],
]])
]);
}
//
if ($data == "refraaa") {
$b=bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*🔍 جاري البحث عن الرسائل...*",
        'parse_mode' => "Markdown",
    ]);
    sleep(1);
    
    $userb = strtoupper($userbot);

    $start_time = microtime(true);

    
        
    
    for ($i = 0; $i < 11; $i++) {
        bot("editMessageText", [
            "chat_id" => $chat_id2,
            'message_id' => $b->result->message_id,
            "text" => "
            *
            🔍 جاري البحث عن الرسائل...
            (" . $i * 10 . "%)
            *
            ",
            "parse_mode" => "Markdown",
        ]);
    }

    $end_time = microtime(true);
    if ($i >= 10) {
        bot("editMessageText", [
            "chat_id" => $chat_id2,
            'message_id' =>  $b->result->message_id,
            "text" => "تم تحديث ارسائل ✓
            ",
            "parse_mode" => "Markdown",
            
        ]);
        sleep(1);
    }
    $execution_time = $end_time - $start_time;
    $execution_time = number_format($execution_time, 4, '.', '');
    if ($execution_time <= 1.5) {
        $f = "جامده 💯";
    }
    if ($execution_time <= 3 && $execution_time > 1.5) {
        $f = "مش وحشه 🧸";
    }
    if ($execution_time > 3) {
        $f = "ضعيفه اوي ❌";
    }

    bot("editMessageText", [
        "chat_id" => $chat_id2,
        'message_id' =>  $b->result->message_id,
        'text' => "*📬 الرسائل المستلمة:

1) المرسل: $AMR $tikko
        *",
        'parse_mode' => "Markdown",
"message_id"=>$message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[['text'=>"🔄 تحديث الرسائل",'callback_data'=>"refra"]],
]])
]);
}
#=======_____========#
$yeman = substr(str_shuffle('1234568980711223344556677889900'),1,10);
$said = "+35$yeman";
if($data == "saed"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*☑️ ⌯ تم صيد رقم جديد ➩*

*📞️ ⌯ 𝑵𝑼𝑴︙*  `$said` 
",
'parse_mode' => "Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"✳️ ⁞ طلب الكود." ,"callback_data"=>"rtbot"]],
[["text"=>"♻️ ⁞ رقم جديد." ,"callback_data"=>"saed"]],
[["text"=>"⚠️ ⁞ حظر الرقم." ,"callback_data"=>"hhhhhh"]]
]    
])
]);
}
if($data == "rtbot"){ 
        bot('answercallbackquery',[
            'callback_query_id'=>$update->callback_query->id,
            'text'=>"
⚠️ - لم يصل كود الرقم، اعد المحاولة بعد 5 ثوان
",
      'show_alert'=>true,
]);
}
if($data == "rtbot") {
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*✅ ⌯ تم وصول الكود ➪*
*𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳*
*💬 ⌯  𝑪𝑶𝑫𝑬︙* `$kodmzif   $rt[1]`
*𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳*
*☑️ ⌯ اضغط على الكود لنسخة ✅*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"• انهاء الحال •",'callback_data'=>"index"]],
     [['text'=>"المطور",'url'=>"tg://user?id=$admin"]],
       
      ]
    ])
]);
} 
if($data == "hhhhhh") {
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*📵 ⌯ تم حظر ارقم*",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"• رجوع •",'callback_data'=>"index"]]
       
      ]
    ])
]);
} 

function progress($total, $current){
$progress = $current / $total;
$bar_length = 20;
$filled_length = round($bar_length * $progress);
$bar = str_repeat("▓", $filled_length) . str_repeat("░", ($bar_length - $filled_length));
$result = [
"bar"=>"[".$bar."]",
"progress"=>intval($progress * 100) ."%",
];
return $bar. intval($progress * 100) ."%";
}

function format_number($number) {
    $suffixes = array('', 'k', 'm', 'b', 't');
    $suffix_index = 0;

    while ($number >= 1000) {
        $number /= 1000;
        $suffix_index++;
    }

    return round($number, 1) . $suffixes[$suffix_index];
}


  if($data == "refr") {
  	for($i=0;$i < 11;$i++){
  	bot("editMessagetext",[
            "chat_id" => $chat_id2,
            'message_id' => $message_id , 
            "text" => "*
ℹ️] يتم عمل فحص لرابط انتضر قليلا
[". progress("100",$i*10)."]
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
  }
  if($i >= 10){
  	bot("editMessagetext",[
            "chat_id" => $chat_id2,
            'message_id' => $message_id , 
            "text" => "*
ℹ️] تم الانتهاء من فحص الرابط 
👁️] انتظر سيتم إرسال اليك نتائج الفحص
⚠️] الرجاء عدم تكرار الطلب مرة اخرئ حتى لايتم حظرك نهائي
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
        bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "
*👨‍✈️ ⌯ مرحباً بك في بوت الأختراق الأفضل على التيليجرام 🚀*
*👨‍💻 you :-* [$name](tg://user?id=$chat_id)
*🆔 id :-* `$chat_id`
*💲 coi :- $".$sales[$chat_id]['collect']."*

*$VlP ⌯ اخـــتــراق الـهـواتـف عــبـر الأرقــام ⌯🚀*
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"➿] رجوع",'callback_data'=>"index" ]], 
      ]
    ])
            ]);
  }
 } 
 /*
اصل الملف ملف مسلم للارقام(التسليم يدوي)
تم تطويره وربطه بموقع الارقام بواسطة عبدالرحمن باعقيل
@UserIIIIIIIIAP
بمساعدة 
@UserIIIIIIIIAP
مع شكر خاص للمطور 
يحيى
*/
if($data ==  'aaaaaa' ){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id2,
     'message_id'=>$message_id,
      'text'=>"*⚙️. قسم الاعـدادات .⚙️*
",
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⦅ تقييم البوت ⭐ ⦆",'callback_data'=>"tqeemat" ]],
[['text'=>"◽رجوع◽",'callback_data'=>"index"]],
]])
]);
}
if($data == "k2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
الدول المتاحة في اشرق الاوسط
اختر ادولة لخترق بث التلفزيون 📺 وراديو 📻
",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'اليمن 🇾🇪','callback_data'=>"qwe1"],['text'=>'العراق 🇮🇶','callback_data'=>"qwe2"]],
[['text'=>'مصر 🇪🇬','callback_data'=>"qwe3"],['text'=>'سوريا 🇸🇾','callback_data'=>"qwe4"]],
[['text'=>'ليبيا 🇱🇾','callback_data'=>"qwe5"],['text'=>'المغرب 🇲🇦','callback_data'=>"qwe6"]],
[['text'=>'تونس 🇹🇳','callback_data'=>"qwe7"],['text'=>'الجزائر 🇩🇿','callback_data'=>"qwe8"]],
[['text'=>'لبنان 🇱🇧','callback_data'=>"qwe9"],['text'=>'فلسطين 🇵🇸','callback_data'=>"qwe10"]],
[['text'=>'السعودية 🇸🇦','callback_data'=>"qwe11"],['text'=>'عمان 🇴🇲','callback_data'=>"qwe12"]],
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"index"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"exit"]],
    ] 
   ])
  ]);
 }
if($data == "qwe1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في اليمن 👑🇾🇪:

اسم القناة (EN): AIC TV
اسم القناة (AR): قناة عدن المستق
رابط البث: http://195.35.85.115:8000/play/a0fr

اسم القناة (EN): Alghadye
اسم القناة (AR): قناة الغد المشرق
رابط البث: http://82.212.74.3:8000/live/hls/7512.m3u8

اسم القناة (EN): Al Masirah
اسم القناة (AR): المسيرة
رابط البث: https://live.cdnbridge.tv/Almasirah/Almasirah_all/playlist.m3u8

اسم القناة (EN): Al Masirah Mubacher
اسم القناة (AR): غير متوفر
رابط البث: https://live2.cdnbridge.tv/AlmasirahMubasher/Mubasher_All/playlist.m3u8

اسم القناة (EN): Belqees TV
اسم القناة (AR): قناة بلقيس
رابط البث: https://ythls.armelin.one/channel/UCxA_zZwALQMmVMSZyLKC-Nw.m3u8

اسم القناة (EN): Suhail TV
اسم القناة (AR): قناة سهيل الفضائية
رابط البث: http://82.212.74.98:8000/live/hls/7726.m3u8

اسم القناة (EN): Yemenia TV
اسم القناة (AR): قناة اليمنية
رابط البث: https://ffs3.gulfsat.com/YEMENIA/video.m3u8

اسم القناة (EN): Yemen Shabab Channel
اسم القناة (AR): يمن شباب
رابط البث: https://master.starmena-cloud.com/hls/yemenshabab.m3u8

اسم القناة (EN): Yemen Today TV
اسم القناة (AR): غير متوفر
رابط البث: https://video.yementdy.tv/hls/yementoday.m3u8

*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "qwe2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في العراق 🇮🇶:


اسم القناة (EN): ABNsat
اسم القناة (AR): غير متوفر
رابط البث: https://mediaserver.abnvideos.com/streams/abnsat.m3u8

اسم القناة (EN): Afaq TV
اسم القناة (AR): قناة آفاق الفضائية
رابط البث: http://63b03f7689049.streamlock.net:1935/live/1/playlist.m3u8

اسم القناة (EN): Afarin TV
اسم القناة (AR): ئافەرین
رابط البث: https://5ab29cc78f681.streamlock.net/afarinTV/livestream/playlist.m3u8

اسم القناة (EN): Alahad TV
اسم القناة (AR): قناة العهد الفضائية
رابط البث: http://63b03f7689049.streamlock.net:1935/live/7/playlist.m3u8

اسم القناة (EN): Al-Aimma TV
اسم القناة (AR): قناة الائمة
رابط البث: http://stream.alaimma.tv/hls/alaimma/h3b1rd584cpq8p60okoj01rnfigdcnia.m3u8

اسم القناة (EN): Alawla TV
اسم القناة (AR): 1TV
رابط البث: https://63b03f7689049.streamlock.net/live/1tv/playlist.m3u8

اسم القناة (EN): Al Ayyam TV
اسم القناة (AR): غير متوفر
رابط البث: http://63b03f7689049.streamlock.net:1935/live/6/playlist.m3u8

اسم القناة (EN): Al Eshraq TV
اسم القناة (AR): غير متوفر
رابط البث: http://63b03f7689049.streamlock.net:1935/live/19/playlist.m3u8

اسم القناة (EN): Al-Etejah
اسم القناة (AR): قناة الاتجاه الفضائية
رابط البث: http://63b03f7689049.streamlock.net:1935/live/33/playlist.m3u8

اسم القناة (EN): Al Forat TV
اسم القناة (AR): قناة الفرات الفضائية
رابط البث: http://95.216.180.111:1935/live/10/playlist.m3u8

*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "qwe3"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في مصر 🇪🇬:

اسم القناة (EN): Aghapy TV
اسم القناة (AR): غير متوفر
رابط البث: https://5b622f07944df.streamlock.net/aghapy.tv/aghapy.smil/playlist.m3u8

اسم القناة (EN): Alfath Atfal TV
اسم القناة (AR): Alfath for Kids
رابط البث: https://alfat7-q.com:5443/LiveApp/streams/434833549141598440488987.m3u8

اسم القناة (EN): Alfath Sonnah TV
اسم القناة (AR): غير متوفر
رابط البث: https://alfat7-q.com:5443/LiveApp/streams/986613792230697141226562.m3u8

اسم القناة (EN): Alfath TV
اسم القناة (AR): قناة الفتح الفضائية
رابط البث: https://alfat7-q.com:5443/LiveApp/streams/515112551489055772942045.m3u8

اسم القناة (EN): Alhayat TV
اسم القناة (AR): الحياة
رابط البث: https://cdn3.wowza.com/5/OE5HREpIcEkySlNT/alhayat-live/ngrp:livestream_all/playlist.m3u8

اسم القناة (EN): Al Qahera News
اسم القناة (AR): القاهرة الاخبارية
رابط البث: https://bcovlive-a.akamaihd.net/d30cbb3350af4cb7a6e05b9eb1bfd850/eu-west-1/6057955906001/playlist.m3u8

اسم القناة (EN): Coptic TV
اسم القناة (AR): CTV Egypt
رابط البث: https://58cc65c534c67.streamlock.net/ctvchannel.tv/ctv.smil/playlist.m3u8

اسم القناة (EN): El Radio 9090 FM
اسم القناة (AR): غير متوفر
رابط البث: https://9090video.mobtada.com/hls/stream.m3u8

اسم القناة (EN): HBC
اسم القناة (AR): غير متوفر
رابط البث: https://ffs3.gulfsat.com/hbc/index.m3u8

اسم القناة (EN): Huda TV
اسم القناة (AR): غير متوفر
رابط البث: https://cdn.bestream.io:19360/elfaro1/elfaro1.m3u8

*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "qwe4"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في سوريا 🇸🇾:

اسم القناة (EN): Rojava TV
اسم القناة (AR): غير متوفر
رابط البث: https://rojava-tv.akamaized.net/hls/rojava-tv.m3u8

اسم القناة (EN): Ronahi TV
اسم القناة (AR): Ronahî TV
رابط البث: https://ronahi-tv.akamaized.net/hls/ronahi-tv.m3u8

*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "qwe5"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في ليبيا 🇱🇾:

اسم القناة (EN): 218 News
اسم القناة (AR): غير متوفر
رابط البث: http://95.85.47.43/libya218news/playlist.m3u8

اسم القناة (EN): Al Masar TV
اسم القناة (AR): تلفزيون المسار
رابط البث: https://master.starmena-cloud.com/hls/almasar.m3u8

اسم القناة (EN): February Channel
اسم القناة (AR): قناة فبراير
رابط البث: https://b01c02nl.mediatriple.net/videoonlylive/mtfknklgwrlive/broadcast_5dc818c793576.smil/playlist.m3u8

اسم القناة (EN): Jamahiriya TV
اسم القناة (AR): الجماهيرية العظمى
رابط البث: https://master.starmena-cloud.com/hls/jam.m3u8

اسم القناة (EN): Libya Alhadath
اسم القناة (AR): غير متوفر
رابط البث: http://82.212.74.100:8000/live/8103.m3u8

اسم القناة (EN): Libya Mostakbal
اسم القناة (AR): Almustaqbal TV
رابط البث: https://media1.livaat.com/Libyah-Mostaqbal/index.m3u8

اسم القناة (EN): RTV Lebda
اسم القناة (AR): غير متوفر
رابط البث: https://media1.livaat.com/live/Lebda_TV/index.m3u8

اسم القناة (EN): Salam TV
اسم القناة (AR): غير متوفر
رابط البث: https://b01c02nl.mediatriple.net/videoonlylive/mtiwaxdzdfggbnlive/broadcast_5d1b0969c3188.smil/playlist.m3u8

اسم القناة (EN): Tanasuh TV
اسم القناة (AR): غير متوفر
رابط البث: https://tip.stream.tanasuh.tv:4434/live/smil:tanasuhtv.smil/playlist.m3u8

اسم القناة (EN): Wasat TV
اسم القناة (AR): WTV
رابط البث: https://alwasattv.hibridcdn.net/alwasattv/alwasat_abr/playlist.m3u8

*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "qwe6"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في المغرب 🇲🇦:

اسم القناة (EN): 2M International
اسم القناة (AR): 2M Monde
رابط البث: https://cdnamd-hls-globecast.akamaized.net/live/ramdisk/2m_monde/hls_video_ts_tuhawxpiemz257adfc/2m_monde.m3u8

اسم القناة (EN): Al Aoula Europe
اسم القناة (AR): قناة الأولى
رابط البث: https://cdn-globecast.akamaized.net/live/eds/al_aoula_inter/hls_snrt/al_aoula_inter.m3u8

اسم القناة (EN): Al Aoula Laayoune
اسم القناة (AR): قناة الأولى
رابط البث: https://cdn-globecast.akamaized.net/live/eds/al_aoula_laayoune/hls_snrt/index.m3u8

اسم القناة (EN): Al Maghribia
اسم القناة (AR): المغربية
رابط البث: https://cdn-globecast.akamaized.net/live/eds/al_maghribia_snrt/hls_snrt/index.m3u8

اسم القناة (EN): Arryadia
اسم القناة (AR): قناة الرياضية
رابط البث: https://cdn-globecast.akamaized.net/live/eds/arriadia/hls_snrt/index.m3u8

اسم القناة (EN): Assadissa
اسم القناة (AR): قناة السادسة
رابط البث: https://cdn-globecast.akamaized.net/live/eds/assadissa/hls_snrt/index.m3u8

اسم القناة (EN): Athaqafia
اسم القناة (AR): Arrabiaa
رابط البث: https://cdn-globecast.akamaized.net/live/eds/arrabiaa/hls_snrt/index.m3u8

اسم القناة (EN): Chada TV
اسم القناة (AR): أول قناة فنية بالمغرب
رابط البث: https://chadatv.vedge.infomaniak.com/livecast/chadatv/playlist.m3u8

اسم القناة (EN): M24 TV
اسم القناة (AR): غير متوفر
رابط البث: https://63df3191463ce.streamlock.net/live/ngrp:Live2.stream_all/index.m3u8

اسم القناة (EN): Medi 1 TV Afrique
اسم القناة (AR): غير متوفر
رابط البث: https://streaming1.medi1tv.com/live/smil:medi1fr.smil/playlist.m3u8

*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "qwe7"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في تونس 🇹🇳:

اسم القناة (EN): El Watania 1
اسم القناة (AR): Télévision Tunisienne 1
رابط البث: http://live.watania1.tn:1935/live/watanya1.stream/playlist.m3u8

اسم القناة (EN): Jawhara TV
اسم القناة (AR): غير متوفر
رابط البث: https://streaming.toutech.net/live/jtv/index.m3u8

اسم القناة (EN): Mosaique FM
اسم القناة (AR): Mosaïque FM
رابط البث: https://webcam.mosaiquefm.net:1936/mosatv/studio/playlist.m3u8

اسم القناة (EN): Nessma El Jadida
اسم القناة (AR): الجديدة نسمة
رابط البث: https://shls-live-ak.akamaized.net/out/v1/119ae95bbc91462093918a7c6ba11415/index.m3u8

اسم القناة (EN): Sahel TV
اسم القناة (AR): غير متوفر
رابط البث: http://142.44.214.231:1935/saheltv/myStream/playlist.m3u8

اسم القناة (EN): Tunisie Immobilier TV
اسم القناة (AR): غير متوفر
رابط البث: https://5ac31d8a4c9af.streamlock.net/tunimmob/myStream/playlist.m3u8

اسم القناة (EN): Watania 2
اسم القناة (AR): El Watania 2
رابط البث: http://live.watania2.tn:1935/live/watanya2.stream/playlist.m3u8

اسم القناة (EN): Zitouna TV
اسم القناة (AR): قناة الزيتونة
رابط البث: https://video1.getstreamhosting.com:1936/8320/8320/playlist.m3u8

*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "qwe8"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في الجزائر 🇩🇿:

اسم القناة (EN): Amou Yazid TV
اسم القناة (AR): عمو يزيد
رابط البث: http://mkstream.servehttp.com:1940/AmouYazid/ay1/playlist.m3u8

اسم القناة (EN): CNA
اسم القناة (AR): غير متوفر
رابط البث: https://live.creacast.com/cna/smil:cna.smil/playlist.m3u8

اسم القناة (EN): Echorouk News
اسم القناة (AR): الشروق الإخبارية
رابط البث: https://bledflix-echorouk-news.b-cdn.net/master.m3u8

اسم القناة (EN): Echorouk TV
اسم القناة (AR): الشروق
رابط البث: https://echorouk-live-tv.dzsecurity.net/fullres/EchoroukTV_First/playlist.m3u8

اسم القناة (EN): El Bilad
اسم القناة (AR): البلاد تيفي
رابط البث: https://raw.githubusercontent.com/ipstreet312/freeiptv/master/ressources/dzflix/elbilad.m3u8

اسم القناة (EN): Elwatania TV
اسم القناة (AR): TV الوطنية‎
رابط البث: https://stream.castr.com/62c18c3f14d09a0b7e5355a5/live_1b36cfb0ba2411ee9700956e0f7084c8/index.fmp4.m3u8

اسم القناة (EN): Ennahar TV
اسم القناة (AR): النهار تي في
رابط البث: https://ennahar-live.dzsecurity.net/fullres/EnnaharTV_First/playlist.m3u8

اسم القناة (EN): Samira TV
اسم القناة (AR): سميرة
رابط البث: https://raw.githubusercontent.com/ipstreet312/freeiptv/master/ressources/dzflix/samira.m3u8

اسم القناة (EN): TV2
اسم القناة (AR): Canal Algérie
رابط البث: https://bozztv.com/inim03/live1/giniko_canalalgerie/chunks.m3u8

*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "qwe9"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في لبنان 🇱🇧:

اسم القناة (EN): Aghani Aghani TV
اسم القناة (AR): أغاني أغاني
رابط البث: https://streaming-a-1035.cdn.nextologies.com/6zj8y5nemi8a32vyjjbkv0oqx/77pcakd8reik3g8qdqnexlkmq/playlist.m3u8

اسم القناة (EN): Al-Iman TV
اسم القناة (AR): غير متوفر
رابط البث: https://svs.itworkscdn.net/alimanlive/imantv.smil/playlist.m3u8

اسم القناة (EN): Al Ittihad TV
اسم القناة (AR): قناة الاتحاد
رابط البث: http://185.105.4.151:8080/_defapp_/ittihad/index.m3u8

اسم القناة (EN): Al-Manar
اسم القناة (AR): المنار
رابط البث: https://edge.fastpublish.me/live/index.m3u8

اسم القناة (EN): Al Mayadeen TV
اسم القناة (AR): الميادين
رابط البث: https://mdnlv.cdn.octivid.com/almdn/smil:mpegts.stream.smil/playlist.m3u8

اسم القناة (EN): ALWifak News TV
اسم القناة (AR): غير متوفر
رابط البث: http://alwifaklive.info:1935/live/myStream/playlist.m3u8

اسم القناة (EN): Arabica TV
اسم القناة (AR): أرابيكا‎
رابط البث: http://istream.binarywaves.com:8081/hls/arabica/playlist.m3u8

اسم القناة (EN): Charity TV
اسم القناة (AR): غير متوفر
رابط البث: http://185.105.4.236:1935/live/ngrp:livestream_all/live.m3u8

اسم القناة (EN): Falestinona Channel
اسم القناة (AR): غير متوفر
رابط البث: https://ffs3.gulfsat.com/Falestinona-TV/index.fmp4.m3u8

اسم القناة (EN): Future TV
اسم القناة (AR): تلفزيون المستقبل
رابط البث: https://live.kwikmotion.com/futurelive/ftv.smil/playlist.m3u8

*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "qwe10"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في فلسطين 🇵🇸:

اسم القناة (EN): 7ala TV
اسم القناة (AR): غير متوفر
رابط البث: http://vstream3.hadara.ps:8081/7alafm2020/7alafm2020/playlist.m3u8

اسم القناة (EN): Ajyal TV
اسم القناة (AR): غير متوفر
رابط البث: http://htvajyal.mada.ps:8888/ajyal/index.m3u8

اسم القناة (EN): Al-Aqsa TV
اسم القناة (AR): قناة الأقصى
رابط البث: http://167.172.161.13/hls/feedspare/6udfi7v8a3eof6nlps6e9ovfrs65c7l7.m3u8

اسم القناة (EN): Al Najah News
اسم القناة (AR): النجاح الإخباري
رابط البث: https://streaming.najah.edu:8443/hls/AlNajah.m3u8

اسم القناة (EN): Al-Quds Open University
اسم القناة (AR): قناة القدس
رابط البث: https://streaming2.qou.edu/hls/stream.m3u8

اسم القناة (EN): Al Quds Today TV
اسم القناة (AR): قناة القدس
رابط البث: http://live.alqudstoday.tv:8080/hls/alqudstv/alqudstv.m3u8

اسم القناة (EN): Awdah TV
اسم القناة (AR): عودة
رابط البث: http://htvpalsat.mada.ps:8888/audeh/index.m3u8

اسم القناة (EN): Baladna
اسم القناة (AR): غير متوفر
رابط البث: http://htvmada.mada.ps:8888/baladna/index.m3u8

اسم القناة (EN): Falastini TV
اسم القناة (AR): غير متوفر
رابط البث: https://rp.tactivemedia.com/falastinitv/live/playlist.m3u8

اسم القناة (EN): Hebron TV
اسم القناة (AR): غير متوفر
رابط البث: https://account20.livebox.co.in/charleshls/live.m3u8

*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "qwe11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في السعودية 🇸🇦:

اسم القناة (EN): Ahl-Alquran TV
اسم القناة (AR): أهل القرآن
رابط البث: https://al-ekhbaria-prod-dub.shahid.net/out/v1/9885cab0a3ec4008b53bae57a27ca76b/index.m3u8

اسم القناة (EN): Al Ekhbariya
اسم القناة (AR): السعودية الإخبارية
رابط البث: https://al-ekhbaria-prod-dub.shahid.net/out/v1/d443f3203b444032896e3233cb6eaa84/index.m3u8

اسم القناة (EN): Al Hadath
اسم القناة (AR): قناة الحدث
رابط البث: https://av.alarabiya.net/alarabiapublish/alhadath.smil/playlist.m3u8

اسم القناة (EN): Al Khalij TV
اسم القناة (AR): قناة الخليج
رابط البث: https://mn-nl.mncdn.com/khalij/khalij/playlist.m3u8

اسم القناة (EN): Al Saudiya
اسم القناة (AR): السعودية
رابط البث: https://shls-masr2-ak.akamaized.net/out/v1/5ae66b453b62403199811ab78da9982a/index.m3u8

اسم القناة (EN): Asharq Discovery
اسم القناة (AR): الشرق ديسكفري
رابط البث: https://svs.itworkscdn.net/asharqdiscoverylive/asharqd.smil/playlist_dvr.m3u8

اسم القناة (EN): Asharq Documentary
اسم القناة (AR): الشرق الوثائقية
رابط البث: https://svs.itworkscdn.net/asharqdocumentarylive/asharqdocumentary.smil/playlist_dvr.m3u8

اسم القناة (EN): Asharq News
اسم القناة (AR): الشرق للأخبار
رابط البث: https://bcovlive-a.akamaihd.net/0b75ef0a49e24704a4ca023d3a82c2df/ap-south-1/6203311941001/playlist.m3u8

اسم القناة (EN): Asharq News Portrait
اسم القناة (AR): الشرق للأخبار
رابط البث: https://bcovlive-a.akamaihd.net/ed81ac1118414d4fa893d3a83ccec9be/eu-central-1/6203311941001/playlist.m3u8

اسم القناة (EN): Atfal & Mawaheb TV
اسم القناة (AR): قناة أطفال ومواهب
رابط البث: https://5aafcc5de91f1.streamlock.net/atfal1.com/atfal2/playlist.m3u8
*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "qwe12"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
قنوات التلفزيون المتاحة في عمان 🇴🇲:

اسم القناة (EN): Alistiqama TV
اسم القناة (AR): قناة الاستقامة الفضائية
رابط البث: https://jmc-live.ercdn.net/alistiqama/alistiqama.m3u8

اسم القناة (EN): Oman Sports TV
اسم القناة (AR): قناة عمان الرياضية
رابط البث: https://partneta.cdn.mgmlcdn.com/omsport/smil:omsport.stream.smil/chunklist.m3u8

اسم القناة (EN): Oman TV
اسم القناة (AR): عُمان تي في
رابط البث: https://partneta.cdn.mgmlcdn.com/omantv/smil:omantv.stream.smil/chunklist.m3u8

اسم القناة (EN): Oman TV Cultural
اسم القناة (AR): القناة الثقافية
رابط البث: https://partwota.cdn.mgmlcdn.com/omcultural/smil:omcultural.stream.smil/chunklist.m3u8

اسم القناة (EN): Oman TV Mubashir
اسم القناة (AR): قناة عُمان مباشر
رابط البث: https://partwota.cdn.mgmlcdn.com/omlive/smil:omlive.stream.smil/chunklist.m3u8
*",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k2"],['text'=>"• الرجوع الى البداية •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "k3"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*$VlP - قم بالدخول الى الموقع وحط الرقم ثم قم بالاتصال مسموح مرة باليوم:  

🌐 - الموقع :- https://callmyphone.org/app *


*ثم أضف الرقم مع رمز الدولة بدون + او 00 مثل*

*mt / -* `967وهنا ارقم`
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
#========#
$admin = "8169507820"; #ايديك
$update = json_decode(file_get_contents('php://input'));
if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $from_id = $update->callback_query->from->id;
} elseif ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $chat_id = $message->chat->id;
    $text = $message->text;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$nogom = [];
if (file_exists('nogom.json')) {
$nogom = json_decode(file_get_contents('nogom.json'), true);
}
if ($data == "tqeemat") {
    $average_rating = $nogom ? array_sum($nogom) / count($nogom) : 0;
    $nogomall = count($nogom);
    $stars = str_repeat("🌟", round($average_rating));
    $average_rating = round($average_rating, 1);
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*☆︙تقييمك للبوت : $stars ($average_rating)

☆︙عدد المشاركين في التقييم :  ⦅ $nogomall ⦆

☆︙يرجى تقييم البوت من الازرار 🩵👇🏻.*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "⭐", 'callback_data' => "1"]],
                [['text' => "🌟🌟", 'callback_data' => "2"]],
                [['text' => "🌟🌟🌟", 'callback_data' => "3"]],
                [['text' => "🌟🌟🌟🌟", 'callback_data' => "4"]],
                [['text' => "🌟🌟🌟🌟🌟", 'callback_data' => "5"]],
                [["text"=>"⦅ الصفحه الرئيسيه ⦆","callback_data"=>"index"]],
            ]
        ])
    ]); 
} elseif (in_array($data, ["1", "2", "3", "4", "5"])) {
    $rating = (int)$data;
    $nogom[$chat_id] = $rating;
    file_put_contents('nogom.json', json_encode($nogom));
    $average_rating = array_sum($nogom) / count($nogom);
    $stars = str_repeat("🌟", round($average_rating));
    $average_rating = round($average_rating, 1);
    bot('editMessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*شكرا لتقييمك

$stars ($average_rating)
*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "⦅ إعادة التقييم ⦆", 'callback_data' => "nogom"]],
                [["text"=>"⦅ الصفحه الرئيسيه ⦆","callback_data"=>"index"]],
 ]])
]);
    bot("sendMessage", [
        "chat_id" => $admin,
        "text" => "*تم تقيم البوت من* $name 
*ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
تقييمه للبوت $rating = ⭐
ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳*
☆︙المعرف [@$user]
☆︙الايدي $chat_id
☆︙الاسم [$name](t.me/$user)
*ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳*",
        "parse_mode" => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "⦅ إرسال شكر ⦆", 'callback_data' => "shkr|$from_id|$name"]],
     ]])
  ]);
} elseif(explode("|", $data)[0] == "shkr") {
$from_id = explode("|", $data)[1];
$name = explode("|", $data)[2];
  bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
*- تم ارسال رسالة شكر لـ ⦅ $name ⦆ *
" ,
            "parse_mode" => "markdown", 
        ]);
        bot("sendMessage", [
            "chat_id" => $from_id ,
            "text" => "
*شكرا لك على تقييم البوت هذا الشكر موجه لك من مالك البوت شخصيا 🩵.*
", #@abdo_1
            "parse_mode" => "markdown", 
            
   ]);   
}			
#=========🌟=======#

if($data == "k4"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*♦ ⌯ بـوت مـتـجـر إخـتـراق 𝒉𝒂𝒄𝒌𝒆𝒓 ☠

                   يقدم✅⬇
يحتوي البوت على اكثر من 150 سلعه داخل البوت ويقدم
العديد من المشاريع والثغرات المتعلقه بـ الهكر 
ومن اهم هاذي المشاريع الذي يقدمها البوت 👇
1ـ مشاريع ااااخترااااق اجهزة الاندرويد عبر بوت تليجرام
2ـ مشاريع ااااخترراااااق عبر رابط 
3ـ مشاريع تطوير تطبيقات وغيرها
4ـ مشاريع ونصائح حول المجال
5ـ ثغرات فك حظر ارقام واتساب  انتهاك + او حظر خفيف
6ـ ثغرات فك حسابات تليجرام
7ـ ملفات بوتات مدفوعه وبداخل البوت مجانيه
8ـ روابط مواقع رشق مجانيه
9ـ روابط مواقع اتصالات مزعجه
10ـ روابط مواقع ارسال رسائل مزعجه
11ـ موقع رشق اعضاء تليجرام مجان
12ـ موقع رشق جميع الحسابات بـ المجان 
13ـ مشاريع سكتشوير لصنع برابط وتطبيقات 
14- وأشياء مجانية 
15- ادوات تريمكس +باثيون 
16- تطبيقات اختراق 
17- تطبيقات تعلم الهكر +حظر ارقام
18- مواقع مفيده 
19- ملفات php وغيرها
20- وادمن ومستخدم 

وهناك الكثير من المميزات الذي يقدمها البوت
كل ما عليك هوا الدخول الى البوت واختيار
العرض الذي تريده 
دخول ✅
.♦ ⌯ بـوت مـتـجـر إخـتـراق 𝒉𝒂𝒄𝒌𝒆𝒓 ☠
@mlfat10bot
*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• الرجوع •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "numberfree"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*🆔 - ايدي حساب ✅* { `$chat_id2` }
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• القائمة •",'callback_data'=>"exit"]],
]])
]);
}

$codes = ['A','W','T','Y','I','N','U','I','i','L','l','S','V','P','G','H','J','K','L','K','E','F','R','J','l','F'];
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$monthcode = ['A','W','T','Y','I','N','U','I','i','L','l','S','V','P','G','H','J','K','L','K','E','F','R','J','l','F'];
$amr10 = "$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8";
$codes = ['A','W','T','Y','I','N','U','I','i','L','l','S','V','P','G','H','J','K','L','K','E','F','R','J','l','F'];
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$monthcode = ['A','W','T','Y','I','N','U','I','i','L','l','S','V','P','G','H','J','K','L','K','E','F','R','J','l','F'];
$AMR = "$bcode1";
if($data ==  'amr90' ){
$bcodes = substr(str_shuffle('UIPDljiIFHLNVM'),1,1);
$bcodesr = substr(str_shuffle('EVlPjilIFTPC'),1,1);
$bcodessrr = substr(str_shuffle('ERIPFHJKLBNliIjMWJVSA'),1,1);
$bcodess = "$bcodes";
$bcodesrr = "_";
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id2,
     'message_id'=>$message_id,
      'text'=>"
      تــــــم صـــيــــد يــــــــوزر جــــديـــــد
      
ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ
✅ ⌯ user : @$AMR$bcodess$bcodesr$bcodesrr$bcodessrr
ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[[ 'text'=>"〽️ تــغـير الــيوزر", 'callback_data'=>"amr90"]],
[['text'=>"• رجوع •",'callback_data'=>"index"]],
]])
]);
}
if($data == "k7"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*🔰 • إليك طرق سحب الارقام اليمنية 🇾🇪 • 🔰*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>'طريقه سحب ارقام 𝟳𝟳 📞','callback_data'=>"shbx"]],
[['text'=>'طريقه سحب ارقام 𝟳𓏺𝟯 📞','callback_data'=>"shbx1"]],
[['text'=>'𓏺طريقه سحب ارقام 𝟳𝟏 📞','callback_data'=>"shbx2"]],
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"index"],['text'=>"• القائمة •",'callback_data'=>"exit"]],
    ] 
   ])
  ]);
 }
if($data == "shbx"){
bot('EditMessageText',[
'parse_mode'=>"MarkDown",
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*🔴 طريقة سحب ارقام يمن موبايل 🔴

 
 🔶 شــــــــروط الثغــــــرة 🔶

1 - ان يكون رقم الضحية يمن موبايل(77)
2 - ان يكون رقمك يمن موبايل
3 - تواجد الحيلة والذكاء

🔷شــــرح الــــثــــــغــــرة🔷

اقناع الضحية بالاتصال بالرمز الاتي مع رقمك*
                  `(رقمــك72*)`

*⚫️ مــــــثــــــال هــــــــــكذا👇*

               `*72771247994`

*🔴 سحــــب الكــــــود 🔴

بعد اقناع الضحية بالاتصال جميع مكالمته سوف تتحول اليك قم بادخال رقم الضحية في واتساب واطلب الكود اتصال واذا قال لك بعد ساعة انتظر وارجع بعد ساعة واطلب الكود وسوف ياتي الاتصال اليك قم بادخال الكود وهكذا سحبت الرقم   وايضا يمكنك سحب التيلجرام بواسطة هذه الثــغرة 

🟠 اقــــنــاع الضــــحية 🟠

اخبره ان هذا الكود يعطي رصيد مجاني او ان هذا الكود يجعلك تتصل مجانا يعتمد هذا علئ ذكائك ونصيحة مني خليك صبور ولا تستعجل علئ الضحية ولا تتوتر لكي لا تنفضح 😹💔

◻️حمــــاية نفـسك من الــثغــرة◻️

عدم الاتصال بارقام غريبة تحتوي على رمز النجمة او المربع وعند وقوعك في هذي الثغرة و اتصلت بالرمز
وتم سحب رقمك قم بالاتصال بهذا الرقم* `(720*)` *وسيتم ايقاف  تحويل المكالمات*
*〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k7"]],
    ] 
   ])
  ]);
 }
if($data == "shbx1"){
bot('EditMessageText',[
'parse_mode'=>"MarkDown",
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*🔴 طريقة سحب ارقامYOU 🔴

  ⚫️ شــــــــروط الثغــــــرة ⚫️

1 - ان يكون رقم الضحيةYOU (73)
2 - ان يكون رقمك YOU 
3 - تواجد الحيلة والذكاء

🔷شــــرح الــــثــــــغــــرة🔷

اقناع الضحية بالاتصال بالرمز الاتي مع رقمك*
                  `(#رقمــك21*)`

*⚫️ مــــــثــــــال هــــــــــكذا👇*

               `*21737909166#`

*🔴 سحــــب الكــــــود 🔴

بعد اقناع الضحية بالاتصال جميع مكالمته سوف تتحول اليك قم بادخال رقم الضحية في واتساب واطلب الكود اتصال واذا قال لك بعد ساعة انتظر وارجع بعد ساعة واطلب الكود وسوف ياتي الاتصال اليك قم بادخال الكود وهكذا سحبت الرقم
وايضا يمكنك سحب التيلجرام بواسطة هذه الثــغرة 

🟠 اقــــنــاع الضــــحية 🟠

اخبره ان هذا الكود يعطي رصيد مجاني او ان هذا الكود يجعلك تتصل مجانا يعتمد هذا علئ ذكائك ونصيحة مني خليك صبور ولا تستعجل علئ الضحية ولا تتوتر لكي لا تنفضح 😹💔
〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k7"]],
    ] 
   ])
  ]);
 }
if($data == "shbx2"){
bot('EditMessageText',[
'parse_mode'=>"MarkDown",
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*🔴 طريقة سحب ارقام سبافون 🔴

  ⚫️ شــــــــروط الثغــــــرة ⚫️

1 - ان يكون رقم الضحية (سبافون) 71
2 - ان يكون رقمك سبافون
3 - تواجد الحيلة والذكاء

🔷شــــرح الــــثــــــغــــرة🔷

اقناع الضحية بالاتصال بالرمز الاتي مع رقمك*
                  `(#رقمــك**21*)`

*⚫️ مــــــثــــــال هــــــــــكذا👇*

               `*21**71745604#`

*🔴 سحــــب الكــــــود 🔴

بعد اقناع الضحية بالاتصال جميع مكالمته سوف تتحول اليك قم بادخال رقم الضحية في واتساب واطلب الكود اتصال واذا قال لك بعد ساعة انتظر وارجع بعد ساعة واطلب الكود وسوف ياتي الاتصال اليك قم بادخال الكود وهكذا سحبت الرقم وايضا يمكنك سحب التيلجرام بواسطة هذه الثــغرة 

🟠 اقــــنــاع الضــــحية 🟠

اخبره ان هذا الكود يعطي رصيد مجاني او ان هذا الكود يجعلك تتصل مجانا يعتمد هذا علئ ذكائك ونصيحة مني خليك صبور ولا تستعجل علئ الضحية ولا تتوتر لكي لا تنفضح 😹💔
〰〰〰〰〰〰〰〰〰〰〰〰〰〰〰
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"k7"],['text'=>"• القائمة •",'callback_data'=>"index"]],
    ] 
   ])
  ]);
 }
if($data == "vented"){ 
        bot('answercallbackquery',[
            'callback_query_id'=>$update->callback_query->id,
            'text'=>"
قريباً٠٠٠٠
",
      'show_alert'=>true,
]);
}
 #
if($data == "garbage"){
bot('Sendmessage',[
 'chat_id' => $chat_id2,
        'text'=>"*• مرحبا بك 👤.\n• معرفة تاريخ إنشاء الحساب 📅.\n• فقط قم بإرسال ID (حسابك - قناتك - مجموعتك) وسأقوم بإظهار تاريخ الإنشاء فقط.\n\nمثال:* `8169507820`",
        'parse_mode'=>"markdown",
        'disable_web_page_preview'=>true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text'=>"• رجوع •",'callback_data'=>"index"]],
[['text'=>"المطور",'url'=>"tg://user?id=$admin"]],
            ]
        ])
    ]);
}

function cdate($dd) { 
    $headers = ['x-api-key: e758fb28-79be-4d1c-af6b-066633ded128']; 
    $data = json_encode(["telegramId" => (int)$dd]); 
    $ch = curl_init('https://restore-access.indream.app/regdate'); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
    $response = curl_exec($ch); 
    curl_close($ch);

    // إذا كانت الاستجابة غير فارغة
    if ($response) {
        $decoded = json_decode($response);
        // التحقق من وجود تاريخ الإنشاء في الاستجابة
        if (isset($decoded->data->date)) {
            return $decoded->data->date;
        } else {
            return "غير متوفر";
        }
    } else {
        return "خطأ في الاتصال";
    }
}

if(is_numeric($text)){
    $date = cdate($text); // جلب تاريخ الإنشاء

    if ($date == "غير متوفر" || $date == "خطأ في الاتصال") {
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "*⚠️ لم يتم العثور على تاريخ الإنشاء لهذا المعرف. تأكد من صحة المعرف المرسل.*",
            'parse_mode' => "markdown",
            'disable_web_page_preview' => true
        ]);
    } else {
        // إرسال تاريخ الإنشاء فقط
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "*• تاريخ الإنشاء: $date*",
            'parse_mode' => "markdown",
            'disable_web_page_preview' => true
        ]);
    }
}

#======______=====#
if($data == "agreed"){
bot('sendMessage',[
'chat_id' => $chat_id2,
'text'=>"💟 ~ اهلا بك في قسم انشاء حسابات انستا مختصر \nارسل فقط ايميل 📩 وسيتم ارسال معلومات الحساب لك 💎\n\n~ $VlP 🕴",
'disable_web_page_preview'=>true,
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"index"]],
[['text'=>"المطور",'url'=>"tg://user?id=$admin"]]
]
])
]);
}


if(filter_var($text, FILTER_VALIDATE_EMAIL)){
$email = $text;
$name = 'By مختلiqw';
$username = $a1.$a2.$a3.$a4.$a5.$a6.$a7.$a8;
$password = $a1.$a2.$a3.$a4.$a5.$a6.$a7;

$instagram = curl_init();
curl_setopt($instagram, CURLOPT_URL, "https://www.instagram.com/accounts/web_create_ajax/");
curl_setopt($instagram, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($instagram, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($instagram, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($instagram, CURLOPT_HTTPHEADER, array(
    'Host: www.instagram.com',
    'X-CSRFToken: EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I',
    'X-Instagram-AJAX: 1',
    'X-Requested-With: XMLHttpRequest',
    'Referer: https://www.instagram.com/',
    'Cookie: csrftoken=EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I;'
));
curl_setopt($instagram, CURLOPT_POSTFIELDS, "email=$email&password=$password&username=$username&first_name=$name");
curl_setopt($instagram, CURLOPT_HEADER, 1);
curl_setopt($instagram, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
$response = curl_exec($instagram);

if(strpos($response,"true")){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❄️ اليوزر : $username \n\n❄️ الباسورد : $password",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"المطور",'url'=>"tg://user?id=$admin"]]
]
])
]);

}

if(strpos($response,"Another account is using")){
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"الايميل 📥 مستعمل 🔒"
]);   
}

curl_close($instagram);

} 



//𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
$input = file_get_contents("php://input");
$update = json_decode($input, TRUE);
$chatId = $update['message']['chat']['id'];
$text = $update['message']['text'];

if($data == "hahaha"){
bot('sendMessage', [
'chat_id' => $chat_id2,
'text' => '*• اهلا بك عزيزي في بوت الذكاء الاصطناعي
• أنا GPT AI ، تم تدريبه باستخدام تقنية الذكاء الاصطناعي 
• لتوفير الإجابات والمحادثات للمستخدمين 
• في مختلف المواضيع والمجالا
• اكدر اساعدك بشيء ؟ 
• لكتابه على ورقه بيضاء نص ارسل /Write بعدها النص الذي تريد كتابته في ورقه*
مثال
`/Write cat`',
'parse_mode' => "Markdown",
'disable_web_page_preview' => true,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• رجوع •",'callback_data'=>"index"]],
[['text'=>"المطور",'url'=>"tg://user?id=$admin"]]
]
])
]);
return;
}

if (strpos($text, '/Write ') === 0) {
    $textToWrite = substr($text, 7);
    bot('sendPhoto', [
        'chat_id' => $chatId,
        'photo' => "https://apis.xditya.me/write?text=" . urlencode($textToWrite),
        'caption' => "`$textToWrite`",
        'parse_mode' => "Markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text'=>"المطور",'url'=>"tg://user?id=$admin"],['text' => "• قناة البوت •", 'url' => "https://t.me/AL287GZHYVXJH"]]
            ]
        ])
    ]);
    exit;
}
//𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳

#كود ارسال رساله لشخص معين بالبوت 👍 
if($data == "k55"){
bot('EditMessageText',[
'parse_mode'=>"MarkDown",
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*👨🏻‍🏭| آهـهـلآ لفــحــص الـيوزرات ارسل { المعرف } ✓
كمثال ←* { `VlP_30` } 👨‍🔧
*وسيتم فــحـص اليوزر لك باقصى سرعة 🏃‍♂*",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"index"],['text'=>"• القائمة •",'callback_data'=>"exit"]],
    ] 
   ])
  ]);
 }
error_reporting(0);
$user = $_GET['user'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://telegram.me/".$user);
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$source = curl_exec($ch);
if(strstr($source,'robots')){
echo "X";
}else{
echo "F";
}

$update = json_decode(file_get_contents("php://input")); 
if(isset($update->message)){ 
$message = $update->message; 
$mid = $message->message_id; 
$text = $message->text; 
$chat_id = $message->chat->id; 
 
if(strlen($text) > 4 and $text !="/start"){ 
if(preg_match('/([a-z])|([A-Z])/i',$text)){ 
if(preg_match('/([0-9])/i',$text)){
$text_line = explode("\n",$text); 
for($i=0;$i<count($text_line); $i++){ 
$check = file_get_contents("https://dev-urlonion.pantheonsite.io/Checktiktok.com?user=$text_line[$i]"); 
if($check == "متاح"){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"$check - $text_line[$i]", 
]); 
}}} 
}}}

#منقول .

#منقول لـ عبد الرحمن باعقيل
#========سناب========#
if($data == "gzhss"){
bot('Sendmessage',[
'parse_mode'=>"markdown",
 'chat_id' => $chat_id2,
        'text'=>"للبحث عبر الايدي ارسل كشف وا الايدي مثل ↓
mt : `كشف 8169507820`",
  ]);
 }
#========شات========#
#AhMeD_AlBaRoN
#يوسف_السوري
if($data == "k555"){
bot('EditMessageText',[
'parse_mode'=>"MarkDown",
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*👨🏻‍🏭| آهـهـلآ لختصار اروابط ارسال ارابطك ✓ او اختر طريقة اسفل ↓*",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"⌯ اختصار في بوت ⌯",'url'=>"https://t.me/hshsgs12bot"],['text' => '⌯ اختصار في اتطبيق ⌯', 'web_app' => ['url' => 'https://dev-adminalariqifm.pantheonsite.io/wp-admin/asl/ahtsar.php']]],
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"index"],['text'=>"• القائمة •",'callback_data'=>"exit"]],
    ] 
   ])
  ]);
 }
$urlget = $_GET['url'];
$long_url = urlencode($urlget);
$api_token = '6a1e786440642e2bc9c51c09ff6d07fcc878d040';
$api_url = "https://donia2link.com/api?api=$api_token&url=$long_url";
$cut_url = json_decode(file_get_contents($api_url))->shortenedUrl;
if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$urlget)){
$url =  ['ok'=>true,'url'=>$cut_url];
 }else{
$url = ['ok'=>false];
}
echo json_encode($url, 128|32|256);
//
if($data == "ipmas"){
bot('EditMessageText',[
'parse_mode'=>"MarkDown",
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*🤖| بوت معرفة جميع معلوات IP*",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"⌯ معلومات ال IP ⌯",'url'=>"https://t.me/APIVIP10bot"]],
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"index"],['text'=>"• القائمة •",'callback_data'=>"exit"]],
    ] 
   ])
  ]);
 }
if($data == "wtsapp"){
bot('EditMessageText',[
'parse_mode'=>"MarkDown",
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*بالطبع، إليك رسالة يمكنك إرسالها إلى فريق دعم واتساب لفك الحظر عن رقمك المحظور. يمكنك وضع رقمك المحظور في المكان المخصص.*
$VlP3",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"index"],['text'=>"• رجوع للبداية •",'callback_data'=>"exit"]],
    ] 
   ])
  ]);
 }
if($data == "hhhkr"){
bot('EditMessageText',[
'parse_mode'=>"MarkDown",
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*$VlP6*",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⌯ رجوع ⌯",'callback_data'=>"index"],['text'=>"• رجوع للبداية •",'callback_data'=>"exit"]],
    ] 
   ])
  ]);
 }
/*
اصل الملف ملف مسلم للارقام(التسليم يدوي)
تم تطويره وربطه بموقع الارقام بواسطة عبدالرحمن باعقيل
@UserIIIIIIIIAP
بمساعدة 
@UserIIIIIIIIAP
مع شكر خاص للمطور 
يحيى
*/
 if($data == "col"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*انسخ الرابط ثم قم بمشاركته مع اصدقائك 📥 .

• كل شخص يقوم بالدخول ستحصل على 1 $ روبل

- بإمكانك عمل اعلان خاص برابط الدعوة الخاص بك 

~ رابط الدعوة : https://t.me/". bot('getme','bot')->result->username. "?start=$chat_id2

• مشاركتك للرابط :* ".$sales[$chat_id]['mynum']." $VlP
",
'parse_mode'=>"MarkDown",
 'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"- العودة",'callback_data'=>"exit"]],
                        ]
                        ])
  ]);
 }
//================//

if($rules == null){
file_put_contents("rules.txt","NO");
}
if($rule == null){
file_put_contents("rule.txt","▪ اقرأ هذا اولا :
▪ اقرأ هذا اولا :
▪ حسنا صديقي !! جميع الخدمات الموجودة في الاسفل حقيقية وبكميات محدودة .
▪ وجميعها ايضا محددة بالنقاط لكي تحصل عليها يجب تجميع هذه النقاط 🔰

▪ اضغط على التالي لعرض العروض ✅");
}
if($data == "sales"){
if($rules == "NO"){
file_put_contents("set.txt","null");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
$rule
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- التالي ➡",'callback_data'=>"next"]],
[['text'=>"- العودة",'callback_data'=>"exit"]],
]
])
]);
file_put_contents("rules.txt","YES");
}
else{
$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'الــقيـمة ♦️','callback_data'=>'s'],['text'=>'الــخـدمــة 🔰','callback_data'=>'s']];
  foreach($buttons['sales'] as $code => $buttonss){
   $reply_markup['inline_keyboard'][] = $reply_markup[] =[['text'=>"☠️",'callback_data'=>$code],['text'=>"$ ".$buttonss['price']."",'callback_data'=>$code],['text'=>$buttonss['name'],'callback_data'=>$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'🔷 رجوع 🔶','callback_data'=>'exit']];
  $reply_markup = json_encode($reply_markup);
bot('EditMessageText',[
'parse_mode'=>"MarkDown",
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*🔰 ⌯ مرحباً بك عزيزي العميل في قسم الاخـــتـــراق ⌯  ✅.
 💯 ⌯ إليك قائمة أسعار الاخـتراق المتوفره في البوت اضغط على احدها لبدء الاخـتراق•

▪ رصيدك : ".$sales[$chat_id]['collect']."$*
",
'reply_markup'=>($reply_markup)
  ]);
  }
 }
if($data == "next"){
$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'الــقيـمة ♦️','callback_data'=>'s'],['text'=>'الــخـدمــة 🔰','callback_data'=>'s']];
  foreach($buttons['sales'] as $code => $buttonss){
   $reply_markup['inline_keyboard'][] = $reply_markup[] =[['text'=>"☠️",'callback_data'=>$code],['text'=>"$ ".$buttonss['price']."",'callback_data'=>$code],['text'=>$buttonss['name'],'callback_data'=>$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'🔷 رجوع 🔶','callback_data'=>'exit']];
  $reply_markup = json_encode($reply_markup);
bot('EditMessageText',[
'parse_mode'=>"MarkDown",
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*🔰 ⌯ مرحباً بك عزيزي العميل في قسم الاخـــتـــراق ⌯  ✅.
 💯 ⌯ إليك قائمة أسعار الاخـتراق المتوفره في البوت اضغط على احدها لبدء الاخـتراق•*
",
'reply_markup'=>($reply_markup)
  ]);
  }
//=============//
elseif(strpos($text, "حظر ") !== false){
$nambtn = str_replace("حظر ",$text);
file_put_contents("banslist.txt","$nambtn\n", FILE_APPEND);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم حظره بنجاح .',
]);
bot('sendMessage',[
'chat_id'=>$nambtn,
'text'=>'▪ تم حظرك بنجاح .',
]);
}
elseif(strpos($text, "الغاء حظر ") !== false ){
$replyy = str_replace("الغاء حظر ",$text);
$strr = str_replace($replyy."\n", "" ,$bans);
file_put_contents("banslist.txt",$strr);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>'تم الغاء حظره بنجاح .',
]);
bot('sendMessage',[
'chat_id'=>$replyy,
'text'=>'تم الغاء حظرك بنجاح .'
]);
}
if($bans == "" or $bans == null){
file_put_contents("banslist.txt","");
}
if($data == "showbans"){
$count = count($banlist)-1;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
المحظورين : *$count*

*$bans*
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- ?????? ??",'callback_data'=>"all"]],
]
])
]);
}
if($data == "delbans"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
تم بنجاح .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"- ?????? ??",'callback_data'=>"all"]],
]
])
]);
file_put_contents("banslist.txt","");
}
//===============//
if($data == 'yes'){
  $price = $buttons['sales'][$buttons[$chat_id]['mode']]['price'];
  $name = $buttons['sales'][$buttons[$chat_id]['mode']]['name'];
  bot('editMessageText',[
  'parse_mode'=>"MarkDown",
   'chat_id'=>$chat_id2,
   'message_id'=>$message_id,
   'text'=>"*👹 ⌯ تــم اخــتــراق الــجـــهــاز عــبـــــر الــــرقـــــم ⌯ 👹*

*👾 اهلآ وسهلا في اقوى بوت تحكم بضحايا الإصدار 5

بوت رات قوي وسهل الاستخدام لاتحتاج الا كمبيوتر لاجل اختراق الاجهزه فبهذا البوت يمكنك التحكم باي هاتف أندرويد عبر ارقم فقط
 تم تطويره لاجل التسليه والراقابه الابوايه فل المطور لا يتحمل مسؤولية سو استخدمه فيما يغضب الله ورسوله
تواصل بل المطور: @VlP_30*

*💸 - الــســعر : $price$ •*
*📆 ـ  $DAY2 •*
",
 'reply_markup' => json_encode([
            'inline_keyboard' => [
[['text'=>'📒 سحب جميع الارقام','callback_data'=>"tv#5"],['text'=>'💬 سحب الرسائل','callback_data'=>"tv#22"]],
[['text'=>'📞 سجل المكالمات','callback_data'=>"tv#7"],['text'=>'📽 التطبيقات','callback_data'=>"tv#6"]],
[['text'=>'📸 كاميرا خلفيه','callback_data'=>"tv#8"],['text'=>'📸 كاميرا أمامية','callback_data'=>"tv#4"]],
[['text'=>'🎙 تسجيل صوت','callback_data'=>"tv#0"],['text'=>'📋 سجل الحافظه','callback_data'=>"tv#1"]],
[['text'=>'📱 لقطة شاشة','callback_data'=>"tv#2"],['text'=>'📎 فتح رابط في هاتف اضحية ','callback_data'=>"tv#3"]],
[['text'=>' ارسال رساله لجميع ارقام الضحيه 💬','callback_data'=>"tv#6"]],
[['text'=>'📂 عرض جميع الملفات','callback_data'=>"tv#4"],['text'=>'🗑️ حذف جميع الملفات','callback_data'=>"tv#5"]],
[['text'=>'🎬 سحب جميع الصور ','callback_data'=>"tv#2"],['text'=>'🗑️ حذف جميع الصور','callback_data'=>"tv#3"]],
[['text'=>'☎️اتصال من هاتف الضحيه☎️','callback_data'=>"tv#6"]],
[['text'=>'- إلغاء الاختراق 🚫','callback_data'=>"band"]]
            ]])
  ]);
  bot('sendmessage',[
   'chat_id'=>$admin,
   'text'=>"*☑️ ⌯ عـــمــلــيـة اخـــــــتــــراق جـــديــده ⌯ ☑️*

*👨‍✈️ - الاســـم : [$namee] •*
*🔰 - الــخـــدمـــة : $name •*
*📞 - الــرقـــم : +$numb •* 
*💸 - الــســعر : $price$ •* 
*🆔 - الايـــدي : $chat_id •* 
*💠 - الــــمـــعــرف : [@$user](tg://user?id=$chat_id) •*
*👥 ـ  عدد من مشاركة  : ".$sales[$chat_id]['mynum']."*
*💵 ـ  رصيده المتبقي : ".$sales[$chat_id]['collect']."$*
*📄 ـ   جميع طلبات ".$sales[$chat_id]['mysend']."*
*📆 ـ  $DAY2 •*
",
   'parse_mode'=>"Markdown",
  ]);
  $buttons[$chat_id]['mode'] = null;
  $sales[$chat_id]['collect'] -= $price;
  $buttons[$chat_id]['mysend'] = "$name بـ $price روبل ✅";
  file_put_contents("sales.json",json_encode($sales));
  save($buttons);
  exit;
 }
if($data == 's') { exit; }
$price = $buttons['sales'][$data]['price'];
$name = $buttons['sales'][$data]['name'];
if($price != null){
if($price <= $sales[$chat_id]['collect']){
bot('editMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"*$VlP • ارســـل رقـــم الهــاتـف لاخـتـراقـه‍ • $VlP*
*💠 • ثــم الـبدء*",
'parse_mode'=>"Markdown",
      'reply_markup'=>json_encode([
       'inline_keyboard'=>[
        [['text'=>'🔰 • البدء • 🔰','callback_data'=>'yes']] 
       ] 
      ])
     ]);
     $buttons[$chat_id]['mode'] = $data;
     save($buttons);
     exit;
    } else {
     bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>"$VlP رصيدك غير كافي
♦️ القيمة ( $price $ روبل )
♦️ رصيد حسابك ( ".$sales[$chat_id]['collect']."$ روبل )",
      'show_alert'=>true,
     ]);
    }
   }
   
#===================#
include("index3.php");
?>
