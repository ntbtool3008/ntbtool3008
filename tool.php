error_reporting(0); session_start(); date_default_timezone_set("Asia/Ho_Chi_Minh"); $useragent = "Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36"; $ip = file_get_contents('http://kiemtraip.com/raw.php'); $ress = "\033[0;32m"; $ress = "\033[0;32m"; $res = "\033[0;33m"; $red = "\033[0;31m"; $green = "\033[0;37m"; $vang = "\033[1;93m"; $white = "\033[0;33m"; $xnhac = "\033[1;96m"; $den = "\033[1;90m"; $do = "\033[1;91m"; $luc = "\033[1;92m"; $xduong = "\033[1;94m"; $hong = "\033[1;95m"; $trang = "\033[1;97m"; $BBlack = "\033[1;30m"; $BRed = "\033[1;31m"; $BGreen = "\033[1;32m"; $BYellow = "\033[1;33m"; $BBlue = "\033[1;34m"; $BPurple = "\033[1;35m"; $BCyan = "\033[1;36m"; $BWhite = "\033[1;37m"; $Blue = "\033[0;34m"; $lime = "\033[1;32m"; $red = "\033[1;31m"; $xanh = "\033[1;32m"; $cyan = "\033[1;36m"; $yellow = "\033[1;33m"; $turquoise = "\033[1;34m"; $maugi = "\033[1;35m"; $white = "\033[1;37m"; $thuong = $do."[".$luc."●".$do."]".$trang." => "; $thanhngang = $vang."-------------------------------------------------------------\n";
$weekday = date("l"); 
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$weekday = strtolower($weekday);switch($weekday) { case 'monday':
  $weekday = "\033[1;33mThứ\033[1;36m 2"; break; case 'tuesday':
    $weekday = "\033[1;33mThứ\033[1;36m 3"; break; case 'wednesday':
      $weekday = "\033[1;33mThứ \033[1;36m4"; break; case 'thursday':
        $weekday = "\033[1;33mThứ \033[1;36m5"; break; case 'friday':
          $weekday = "\033[1;33mThứ\033[1;36m 6"; break; case 'saturday':
            $weekday = "\033[1;33mThứ \033[1;36m7"; break; default:
              $weekday = "\033[1;33mCN"; break; }
system('clear');

$checkkey  = file('https://run.mocky.io/v3/8f8dfab3-b53c-4f6c-ae77-6537e94d63f4');

$lock=file_get_contents('https://run.mocky.io/v3/8f8dfab3-b53c-4f6c-ae77-6537e94d63f4');

$keylock=md5(htmlspecialchars($lock));
if (md5('lock') != $keylock){
}

$string = strlen($banner);
for($i=0; $i<=$string; $i++){
echo $banner[$i];usleep(500);}
while (true){

echo"\033[1;33m "; echo"\033[1;33m  \033[1;33m ".$luc." \033[1;37m  \033[1;33m \n"; echo"\033[1;33m \033[1;32m

 ███╗   ██╗████████╗██████╗     ████████╗ ██████╗  ██████╗ ██╗     
 ████╗  ██║╚══██╔══╝██╔══██╗    ╚══██╔══╝██╔═══██╗██╔═══██╗██║     
 ██╔██╗ ██║   ██║   ██████╔╝       ██║   ██║   ██║██║   ██║██║     
 ██║╚██╗██║   ██║   ██╔══██╗       ██║   ██║   ██║██║   ██║██║     
 ██║ ╚████║   ██║   ██████╔╝       ██║   ╚██████╔╝╚██████╔╝███████╗
╚═╝  ╚═══╝   ╚═╝   ╚═════╝        ╚═╝     ╚═════╝  ╚═════╝ ╚══════╝
                                                                  
 \n";
      
echo $thuong."\033[1;32mLink lấy key: ".$red."  https://mneylink.com/pC1bD3W\n"; 
echo $thuong."\033[1;33mNhập Key Để Vào Tool: \033[1;32m";
      $makey = trim(fgets(STDIN));
    if ($makey == $checkkey[0]) 
   
    {
    sleep(1);
        echo "\033[1;32";
        echo "\n";
        $a = 1;
        echo("$a");
        break;
    } else {
        echo $thuong."\033[1;32    Key sai Hoặc Lỗi! xin vui lòng lấy lại key mới nhất tại đây:
        
$hong                   https://mneylink.com/pC1bD3W\n";
        echo $vang."-------------------------------------------\n"; 
        sleep(1);
       }
       }	

@system("clear");

$banner1 = "\033[1;32m╔═════════════════════════════════════════════════════════════════╗\n". $thuong.$vang."Tool Víp Gộp Nhiều Chế Độ \n". $thuong.$xnhac."YOUTUBE: NTB TOOL\n". $thuong.$BBlue."Zalo".$do."https://zalo.me/g/dchohj645\n". $thuong.$maugi."Tăng Follow giá rẻ tại web:".$do."http://autosubsale.online \n". $thuong.$xnhac."Hôm Nay \033[1;36m$weekday \033[1;33mNgày \033[1;36m$ngay \033[1;33mTháng \033[1;36m$thang \033[1;33mNăm \033[1;36m$nam$end\033[0;00m\n".$thuong.$hong."IP Tool Của Bạn: \033[1;97m$ip\n". $luc."╚═════════════════════════════════════════════════════════════════╝\n";

$banner = "\033[1;32m╔═════════════════════════════════════════════════════════════════╗\n". $thuong.$vang."Tool Víp Gộp Nhiều Chế Độ\n". $thuong.$xnhac."YOUTUBE: NTB TOOL\n". $thuong.$BBlue."Zalo:".$do." https://zalo.me/g/dchohj645\n". $thuong.$maugi."Tăng Follow giá rẻ tại web:".$do." http://autosubsale.online \n". $thuong.$xnhac."Hôm Nay \033[1;36m$weekday \033[1;33mNgày \033[1;36m$ngay \033[1;33mTháng \033[1;36m$thang \033[1;33mNăm \033[1;36m$nam$end\033[0;00m\n".$thuong.$hong."IP Tool Của Bạn: \033[1;97m$ip\n". $luc."╚═════════════════════════════════════════════════════════════════╝\n".
$luc."╔═════════════════════════════════════════════════════════════════╗\n". $luc."╔═════════════════════╗\n". $luc."║ ".$xnhac."Tool Trao Đổi Sub ".$luc."  ║\n". $luc."╚═════════════════════╝\n".




$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m1\033[1;31m] \033[1;32mTool TDS Cookie \n".




$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m1.1\033[1;31m] \033[1;32mTool TDS TIK TOK\n".




$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m1.2\033[1;31m] \033[1;32mTool TDS TOKEN\n".




$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m1.3\033[1;31m] \033[1;32mTool TDS MAX SPEED Cookie\n".




$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m1.4\033[1;31m] \033[1;32mTool TDS MAX SPEED TOKEN\n".




$luc."╔═════════════════════╗\n". $luc."║ ".$xnhac."Tool Tương Tác Chéo".$luc." ║\n". $luc."╚═════════════════════╝\n".




$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m2\033[1;31m] \033[1;32mTool TTC Cookie\n".




$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m2.1\033[1;31m] \033[1;32mTool TTC TOKEN\n".




$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m2.2\033[1;31m] \033[1;32mTool TTC TIKTOK\n".



$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m2.3\033[1;31m] \033[1;32mTool TTC YOUTUBE\n".







$luc."╔═════════════════════╗\n". $luc."║ ".$xnhac."INSTAGRAM           ".$luc."║\n". $luc."╚═════════════════════╝\n".




$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m3\033[1;31m] \033[1;32mTool Vipig (TTC)\n".




$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m3.1\033[1;31m] \033[1;32mTool Topig\n".




$luc."╔═════════════════════╗\n". $luc."║ ".$xnhac."Facebook            ".$luc."║\n". $luc."╚═════════════════════╝\n".


$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m4\033[1;31m] \033[1;32mTool Reg page\n".




$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m4.1\033[1;31m] \033[1;32mChuyển page vị trí\n".



$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m4.2\033[1;31m] \033[1;32mLấy id Facebook\n".



$luc."╔═════════════════════╗\n". $luc."║ ".$xnhac."Điện Thoại          ".$luc."║\n". $luc."╚═════════════════════╝\n".



$thuong.$luc."\033[1;32mNhập \033[1;31m[\033[1;33m5\033[1;31m] \033[1;32m Spam OTP\n";

@system('clear');

$string = strlen($banner1); for ($i = 0; $i <= $string; $i++) {
    echo $banner1[$i]; usleep(2000);
}

@system('clear');

$string = strlen($banner); for ($i = 0; $i <= $string; $i++) {
    echo $banner[$i]; usleep(200);
} echo $luc."╚═════════════════════════════════════════════════════════════════╝\n"; echo "\e[1;95m┌─[\e[1;37m\e[1;42m Nhập Số Để Vào Tool\e[0m\e[1;95m]
└──╼ \e[1;39m:$vang "; $nhaptool2 = trim(fgets(STDIN)); if ($nhaptool2 == '1') {
    if (!$sock = @fsockopen('www.google.com', 80)) {
        echo 'Vui lòng bật kết nối mạng';
    } eval(file_get_contents("https://run.mocky.io/v3/3babfb86-afc4-49b1-9fa6-80c2ca21fea9"));
} else if ($nhaptool2 == '1.1') eval(file_get_contents("https://pastebin.com/raw/v1V1CYyx"));

else if ($nhaptool2 == '1.2') eval(file_get_contents("https://run.mocky.io/v3/c5a98ef2-46ae-4ae9-aa36-cb5d3f2ba611"));

else if ($nhaptool2 == '1.3') eval(file_get_contents("https://run.mocky.io/v3/7ab7f56d-68f9-4f29-8959-06278901f41d"));

else if ($nhaptool2 == '1.4') eval(file_get_contents("https://run.mocky.io/v3/fe0b3718-39be-479d-9dd3-b91824ab1322"));

else if ($nhaptool2 == '6') eval(file_get_contents("https://run.mocky.io/v3/0df97133-7093-47d7-82fa-ff817e28b32f"));

else if ($nhaptool2 == '7') eval(file_get_contents("https://run.mocky.io/v3/bfa1d3f0-b5e1-4d22-a9b6-d140e587e6b6"));

else if ($nhaptool2 == '1.1') eval(file_get_contents("https://pastebin.com/raw/v1V1CYyx"));

else if ($nhaptool2 == '1.2') eval(file_get_contents("https://run.mocky.io/v3/c5a98ef2-46ae-4ae9-aa36-cb5d3f2ba611"));

else if ($nhaptool2 == '1.3') eval(file_get_contents("https://run.mocky.io/v3/7ab7f56d-68f9-4f29-8959-06278901f41d"));

else if ($nhaptool2 == '1.4') eval(file_get_contents("https://run.mocky.io/v3/fe0b3718-39be-479d-9dd3-b91824ab1322"));

else if ($nhaptool2 == '2') eval(file_get_contents("https://run.mocky.io/v3/654aa924-9dad-4f39-ba38-2c23e165b794"));

else if ($nhaptool2 == '2.1') eval(file_get_contents("https://run.mocky.io/v3/968d44ae-f05e-407a-a540-1dc75df6eb6f"));

else if ($nhaptool2 == '2.2') eval(file_get_contents("https://run.mocky.io/v3/1bd1d542-50f6-4364-883e-8df33b556960"));

else if ($nhaptool2 == '2.3') eval(file_get_contents("https://pastebin.com/raw/LPW00Laa"));

else if ($nhaptool2 == '3') eval(file_get_contents("https://run.mocky.io/v3/d59346ac-f057-4f48-9143-743d88ee3199"));

else if ($nhaptool2 == '3.1') eval(file_get_contents("https://run.mocky.io/v3/6a305413-ab9f-4a69-aac8-1af7268c2b86"));

else if ($nhaptool2 == '4') eval(file_get_contents("https://run.mocky.io/v3/f54b4445-02a9-42b8-993d-f30707a66583"));

else if ($nhaptool2 == '4.1') eval(file_get_contents("https://run.mocky.io/v3/8bc3cadb-05de-4b2b-87d3-3d32ea19af39"));

else if ($nhaptool2 == '4.2') eval(file_get_contents("https://run.mocky.io/v3/d92f6be8-8ea5-407d-a4db-cec079e56c71"));

else if ($nhaptool2 == '5') eval(file_get_contents("https://run.mocky.io/v3/5b2881b4-83db-4a61-8071-036a70ccb27b"));
else if ($nhaptool2 == '25') {
    echo $thuong.$luc."Đang Lao Đến Gặp Admin Thưởng Đẹp Trai\n"; @system('xdg-open https://www.facebook.com/nongvanthuong8395'); sleep(3);
} else {
    echo $thuong.$luc."Nhập Sai Vui Lòng Chạy Lại Tool\n";
} ?>
