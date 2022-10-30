
error_reporting(0); 
session_start(); 
$luc = "\033[0;37m"; 
$do="\033[1;91m"; 
$vang="\033[1;93m"; 
$ress = "\033[0;32m"; 
$res = "\033[0;33m"; 
$red = "\033[0;31m"; 
$green = "\033[0;37m"; 
$yellow = "\033[0;33m"; 
$white = "\033[0;33m"; 
$xnhac = "\033[1;96m"; 
$den = "\033[1;90m"; 
$do = "\033[1;32m"; 
$luc = "\033[1;92m"; 
$xduong = "\033[1;94m"; 
$hong = "\033[1;95m"; 
$trang = "\033[1;97m"; 
$BBlack="\033[1;30m" ; 
$BRed="\033[1;31m" ; 
$BGreen="\033[1;32m" ; 
$BYellow="\033[1;33m" ; 
$BBlue="\033[1;34m" ; 
$BPurple="\033[1;35m" ; 
$BCyan="\033[1;36m" ; 
$BWhite="\033[1;37m" ; 
$Blue="\033[0;34m"; 
$lime="\033[1;32m"; 
$red="\033[1;31m"; 
$xanh="\033[1;32m"; 
$cyan="\033[1;36m"; 
$yellow="\033[1;33m";
$turquoise="\033[1;34m"; 
$maugi="\033[1;35m"; 
$white= "\033[1;37m";
$ngay = date("d"); 
$thang = date("m"); 
$nam = date("Y"); 
$daucau = "\n\033[1;31m [\033[1;37m✅\033[1;31m] \033[1;37m"; 
$daucau1 = "\n\033[1;31m [\033[1;37m✅\033[1;31m]\033[1;37m => \033[1;32m"; 
$dodai = strlen($keyfree); if($dodai == 21){ $khoangtrang = " "; } 
if($dodai == 20){ $khoangtrang = " "; } 
if($dodai == 19){ $khoangtrang = " "; } 
if($dodai == 18){ $khoangtrang = " "; } 
if($dodai == 17){ $khoangtrang = " "; } 
if($dodai == 16){ $khoangtrang = " "; } 
if($dodai == 15){ $khoangtrang = " "; } 
if($dodai == 14){ $khoangtrang = " "; } 
if($dodai == 13){ $khoangtrang = " "; } 
if($dodai == 12){ $khoangtrang = " "; } 
if($dodai == 0){ $khoangtrang = " "; }
 /***[ Color ]***/ 
$xnhac = "\033[1;36m";
$do = "\033[1;31m"; 
$luc = "\033[1;32m"; 
$vang = "\033[1;33m"; 
$xduong = "\033[1;34m"; 
$hong = "\033[1;35m"; 
$trang = "\033[1;37m"; 
$thanh_xau= $do."[".$luc."●".$do."] ".$trang."=> "; 
$thanh_dep= $do."[".$luc."●".$do."] ".$trang."=> "; 
$An_Orin= $do."[".$luc."●".$do."] ".$trang."=> "; 
$thanh_xau= $trang."".$luc."[".$luc."●".$luc."] ".$trang."➩ "; 
$thanh_dep= $trang."".$luc."[".$luc."✓".$luc."] "; 
$thanh_dac_biet= $trang."➩ "; 

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

@system("clear"); echo"\033[1;33m "; echo"\033[1;33m  \033[1;33m ".$luc." \033[1;37m  \033[1;33m \n"; echo"\033[1;33m \033[1;32m
 ███╗   ██╗████████╗██████╗     ████████╗ ██████╗  ██████╗ ██╗     
 ████╗  ██║╚══██╔══╝██╔══██╗    ╚══██╔══╝██╔═══██╗██╔═══██╗██║     
 ██╔██╗ ██║   ██║   ██████╔╝       ██║   ██║   ██║██║   ██║██║     
 ██║╚██╗██║   ██║   ██╔══██╗       ██║   ██║   ██║██║   ██║██║     
 ██║ ╚████║   ██║   ██████╔╝       ██║   ╚██████╔╝╚██████╔╝███████╗
╚═╝  ╚═══╝   ╚═╝   ╚═════╝        ╚═╝     ╚═════╝  ╚═════╝ ╚══════╝
                                                                  
 \n";
 echo"\033[1;32m╔═══════════════════════════════════════════════════════════════════════╗\n";
 echo"\033[1;33m| ●  Youtube:  \033[1;37mNTB TOOL \033[1;33m                                                |\n";
echo"| ●\033[1;31m  Nhóm Thông Báo Tool: \033[1;37mhttps://zalo.me/g/dchohj645 \033[1;33m                  | \n";
echo"| ●\033[1;31m  Tăng Like follow giá rẻ tại website:\033[1;37m: http://autosubsale.online\033[1;33m    |\n"; echo"\033[1;32m╚═══════════════════════════════════════════════════════════════════════╝\n";  
echo"\033[1;32m╔═════════════════════╗\n";echo"\033[1;32m║ \033[1;33mTool Trao Đổi Sub   \033[1;32m║\n"; echo"\033[1;32m╚═════════════════════╝\n"; usleep(50000);
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m2 \033[1;31m] \033[1;32mTool TDS Cookie \033[1;33mĐa Luồng \033[1;31m[V2] \033[1;33m[Mới] \n"; usleep(50000); 
echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m4\033[1;31m] \033[1;32mTool TDS TIK TOK \n"; echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m1.7\033[1;31m] \033[1;32mTool TDS TOKEN \033[1;33m(Mới) \033[1;31m[V2] \033[1;33m[Mới]\n"; usleep(50000); echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m8\033[1;31m] \033[1;32mTool TDS MAX SPEED COOKIE \033[1;33m[Mới] \n"; usleep(50000); echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m9\033[1;31m] \033[1;32mTool TDS MAX SPEED TOKEN \033[1;33m[Mới] \n"; echo"\033[1;32m╔═══════════════════════╗\n"; echo"\033[1;32m║ \033[1;33mTool Tương Tác Chéo   \033[1;32m║\n"; echo"\033[1;32m╚═══════════════════════╝\n"; echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m10.10\033[1;31m] \033[1;32mTool TTC Cookie \033[1;33mĐa Luồng \033[1;31m[V1] \033[1;33m[Mới] \n"; usleep(50000); echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m11.11\033[1;31m] \033[1;32mTool TTC Cookie \033[1;33mĐa Luồng \033[1;31m[V2] \033[1;33m[Mới] \n"; 
 echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m13\033[1;31m] \033[1;32mTool TTC TIK TOK \n";  usleep(50000); echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m16.16\033[1;31m] \033[1;32mTool TTC TOKEN \033[1;33m \033[1;31m[V2] \033[1;33m[Mới]\n"; echo"\033[1;32m╔═════════════════════╗\n"; echo"\033[1;32m║ \033[1;33mTool Instagram      \033[1;32m║\n"; echo"\033[1;32m╚═════════════════════╝\n"; echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m17\033[1;31m] \033[1;32mTool Vipig (TTC) \033[1;33m[Mới] \n"; usleep(50000); echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m18\033[1;31m] \033[1;32mTool Topig (TDS) \033[1;33m[Mới] \n"; usleep(50000); echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m19\033[1;31m] \033[1;32m tool Reg page \033[1;33m  \033[1;31m \033[1;33m\n"; usleep(50000); echo"\033[1;33m════════════════════════\n"; echo"\033[1;31m[✅\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;37m===>: \033[1;33m"; $chedo = trim (fgets(STDIN)); echo " \r"; usleep(185000); echo "\r"; echo " \r"; echo "\e[1;31mVui Lòng Đợi <~>\e[1;37m \e[1;33m \e[1;32m \e[1;31m \e[1;35m \e[1;36m \e[1;37m".$x."\e[1;36m"; usleep(185000); echo "\n"; sleep(5); 
if ($chedo == '2') { if(!$sock = @fsockopen('www.google.com', 80)) { echo 'Vui lòng bật kết nối mạng'; exit(); } eval(file_get_contents('https://run.mocky.io/v3/3babfb86-afc4-49b1-9fa6-80c2ca21fea9'));} 


else if ($chedo == '4'){eval(file_get_contents('https://pastebin.com/raw/v1V1CYyx')); } 

else if ($chedo == '1.7'){eval(file_get_contents('https://run.mocky.io/v3/c5a98ef2-46ae-4ae9-aa36-cb5d3f2ba611')); } 
else if ($chedo == '8'){eval(file_get_contents('https://run.mocky.io/v3/7ab7f56d-68f9-4f29-8959-06278901f41d')); } 
else if ($chedo == '9'){eval(file_get_contents('https://run.mocky.io/v3/fe0b3718-39be-479d-9dd3-b91824ab1322')); } 
else if ($chedo == '10.10'){eval(file_get_contents('https://run.mocky.io/v3/654aa924-9dad-4f39-ba38-2c23e165b794')); } 
else if ($chedo == '11.11'){eval(file_get_contents('https://pastebin.com/raw/CzKhtjjr')); } 

else if ($chedo == '13'){eval(file_get_contents('https://run.mocky.io/v3/1bd1d542-50f6-4364-883e-8df33b556960')); } 

else if ($chedo == '16.16'){eval(file_get_contents('https://run.mocky.io/v3/968d44ae-f05e-407a-a540-1dc75df6eb6f')); } 
else if ($chedo == '17'){eval(file_get_contents('https://run.mocky.io/v3/d59346ac-f057-4f48-9143-743d88ee3199')); } 
else if ($chedo == '18'){eval(file_get_contents('https://run.mocky.io/v3/6a305413-ab9f-4a69-aac8-1af7268c2b86')); } 
else if ($chedo == '19'){eval(file_get_contents('https://run.mocky.io/v3/f54b4445-02a9-42b8-993d-f30707a66583')); } 
