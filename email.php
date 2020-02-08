<?php
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
ini_set('memory_limit', '-1');
mkdir('result-email');
mkdir('result-trash');

$f = file_get_contents($argv[1]);
$f = explode("\r\n", $f);
$counts = count($f);
$f = array_unique($f);

$count 		= count($f); 
$yahoo 		= 0;
$gmail 		= 0;
$hotmail 	= 0;
$aol 		= 0;
$other 		= 0;
$icloud 	= 0;
$sbcglobal	= 0;
$comcast	= 0;
$verizon	= 0;
$email163	= 0;
$att		= 0;
$tonline	= 0;
$mailru		= 0;
$yandex		= 0;
$cox		= 0;
$gmx		= 0;
$bellsouth	= 0;
$earthlink  = 0;
$mailcom  	= 0;
$qq  		= 0;
$email126  	= 0;
$libero  	= 0;
$trash 		= 0;
$valid 		= 0;
$hitung 	= 0;
echo '

 _       _______ __    __       ________  ______    ______       ____________  ________________ 
| |     / /__  // /   / /      / ____/  |/  /   |  /  _/ /      / ____/  _/ / /_  __/ ____/ __ \
| | /| / / /_ </ /   / /      / __/ / /|_/ / /| |  / // /      / /_   / // /   / / / __/ / /_/ /
| |/ |/ /___/ / /___/ /___   / /___/ /  / / ___ |_/ // /___   / __/ _/ // /___/ / / /___/ _, _/ 
|__/|__//____/_____/_____/  /_____/_/  /_/_/  |_/___/_____/  /_/   /___/_____/_/ /_____/_/ |_|  
                                                                                                
';


foreach ($f as $key => $email) {
	$explode = explode("@", $email);
	if(! is_numeric($explode[0]) && filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/marketplace|marketplace.amazon|example|test|auto@|cdiscount.com/", $explode[0]) && !preg_match("/marketplace|marketplace.amazon|example|test|auto@|cdiscount.com|emaildomain|.png/", $explode[1])){
			

		preg_match_all('/(.*?)@(.*?)(.ac|.ag|.ai|.as|.biz.pr|.biz.tt|.bo|.br.com|.bs|.bz|.cl|.co.ag|.co.bz|.co.cr|.co.dm|.co.gy|.co.lc|.co.ms|.co.ni|.co.tt|.co.ve|.co.vi|.com.ag|.com.ai|.com.ar|.com.bo|.com.br|.com.bs|.com.bz|.com.co|.com.do|.com.ec|.com.gp|.com.gt|.com.gy|.com.hn|.com.ht|.com.jm|.com.kn|.com.lc|.com.ms|.com.mx|.com.ni|.com.pa|.com.pe|.com.pr|.com.py|.com.sv|.com.tt|.com.uy|.com.vc|.com.ve|.com.vi|.cr|.dm|.do|.ec|.gd|.gp|.gs|.gt|.gy|.hn|.ht|.info.ec|.kn|.lc|.mex.com|.ms|.mx|.net.ag|.net.br|.net.bz|.net.co|.net.ec|.net.ht|.net.pr|.net.vc|.nom.ag|.nom.co|.north.am|.org.ag|.org.bz|.org.ht|.org.ms|.org.pr|.org.vc|.pa|.pe|.pr|.south.am|.sx|.tc|.tt|.tv.br|.us|.us.com|.us.org|.uy|.vc|.vg)+$/m', $email , $american);

		preg_match_all('/(.*?)@(.*?)(.ac.nz|.ae|.ae.org|.af|.asia|.az|.bh|.biz.fj|.biz.id|.biz.ki|.biz.pk|.cc|.cn|.cn.com|.co.id|.co.in|.co.kr|.co.nz|.co.th|.com.af|.com.az|.com.bd|.com.bh|.com.cn|.com.fj|.com.hk|.com.jo|.com.ki|.com.kz|.com.lk|.com.my|.com.nf|.com.ph|.com.pk|.com.ps|.com.sa|.com.sb|.com.sg|.com.tw|.com.vn|.com.vu|.cx|.edu.sg|.firm.in|.fm|.geek.nz|.gen.in|.gen.nz|.hk|.hk.com|.hk.org|.id|.idv.hk|.in|.in.net|.in.th|.inc.hk|.ind.in|.info.fj|.info.ki|.info.nf|.int.az|.io|.jo|.ki|.kiwi.nz|.kr|.kz|.la|.lk|.ltd.hk|.maori.nz|.mn|.mobi.ki|.my|.my.id|.name.fj|.ne.kr|.net.az|.net.cn|.net.fj|.net.in|.net.ki|.net.nf|.net.nz|.net.pk|.net.ps|.net.sb|.net.vn|.nf|.nu|.nz|.or.kr|.org.az|.org.cn|.org.fj|.org.hk|.org.in|.org.ki|.org.kz|.org.lk|.org.nz|.org.pk|.org.ps|.org.sb|.org.sg|.org.vn|.per.sg|.ph|.phone.ki|.pk|.pp.az|.pro.fj|.ps|.qa|.sa|.sa.com|.sb|.school.nz|.sg|.tk|.tl|.tm|.to|.tv|.tw|.vn|.vu|.web.id|.web.nf|.web.pk|.ws|.í•œêµ­|.å…¬å¸.é¦™æ¸¯|.ä¸­å›½|.é¦™æ¸¯|.Ø§Ù…Ø§Ø±Ø§Øª|.Ø§Ù„Ø³Ø¹ÙˆØ¯ÙŠØ©|.ç¶²çµ¡.é¦™æ¸¯|.çµ„ç¹”.é¦™æ¸¯|.Ù‚Ø·Ø±)+$/m', $email , $asia);

		
		preg_match_all('/(.*?)@(.*?)(.co.nl|.nl)+$/m', $email , $belanda);
		preg_match_all('/(.*?)@(.*?)(.fr)+$/m', $email , $france);
		preg_match_all('/(.*?)@(.*?)(.co.jp|.jp|.jp.net|.jpn.com|.or.jp)+$/m', $email , $japan);
		preg_match_all('/(.*?)@(.*?)(.ca)+$/m', $email , $canada);
		preg_match_all('/(.*?)@(.*?)(.asn.au|.auz.biz|.auz.info|.auz.net|.id.au|.net.au|.com.au|.org.au)+$/m', $email , $audonk);

		preg_match_all('/(.*?)@(.*?)(.ac.im|.am|.at|.ba|.be|.bg|.biz.pl|.biz.tr|.by|.ch|.co.at|.co.ee|.co.gg|.co.gl|.co.hu|.co.il|.co.im|.co.je|.co.no|.co.rs|.co.uk|.com.de|.com.es|.com.gl|.com.gr|.com.hr|.com.im|.com.mk|.com.mt|.com.pl|.com.pt|.com.ro|.com.ru|.com.se|.com.tr|.com.ua|.cz|.de|.de.com|.dk|.ee|.es|.eu|.eu.com|.fi|.gb.net|.gg|.gr|.gr.com|.hr|.hu|.hu.net|.ie|.im|.in.rs|.info.pl|.info.tr|.is|.it|.je|.li|.lt|.ltd.co.im|.ltd.uk|.lu|.lv|.md|.me.uk|.mk|.mp|.mt|.net.im|.net.mt|.net.pl|.net.ru|.net.ua|.no|.nom.es|.or.at|.org.es|.org.il|.org.im|.org.mt|.org.pl|.org.ua|.org.uk|.pl|.plc.co.im|.pm|.pt|.re|.ro|.rs|.ru|.ru.com|.se|.se.net|.si|.sk|.su|.tf|.tv.tr|.ua|.uk|.uk.com|.uk.net|.web.tr|.wf|.Ñ€Ñ„)+$/m', $email , $european);


		preg_match_all('/(.*?)@(.*?)(.africa.com|.bi|.cd|.cg|.cm|.co.bi|.co.cm|.co.ke|.co.mg|.co.mw|.co.na|.co.ug|.co.za|.com.bi|.com.cm|.com.ly|.com.mg|.com.mw|.com.na|.com.ng|.com.sc|.coop.mw|.ly|.mg|.mu|.mw|.na|.net.cm|.net.mg|.net.za|.ng|.or.bi|.org.mg|.org.na|.org.za|.rw|.sc|.sh|.sl|.so|.st|.ug|.web.za|.za.com)+$/m', $email , $african);


		if(preg_match("/gmail|GMAIL|Gmail/", $explode[1])){
			$x = fopen("result-email/email-gmail.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			
			$gmail++;

		}else if(preg_match("/yahoo|ymail|rocketmail|YAHOO|Yahoo/", $explode[1])){
			$x = fopen("result-email/email-yahoo.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);

			$yahoo++;

		}else if(preg_match("/hotmail|live|outlook|msn|OUTLOOK|HOTMAIL|MSN|LIVE|Outlook|Msn|Live|Hotmail/", $explode[1])){
			$x = fopen("result-email/email-hotmail.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$hotmail++;
		}else if(preg_match("/aol|AOL|Aol/", $explode[1])){
			$x = fopen("result-email/email-aol.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$aol++;
		}else if(preg_match("/me.com|icloud.com|mac.com/", $explode[1])){
			$x = fopen("result-email/email-icloud.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$icloud++;
		}else if(preg_match("/sbcglobal.com|sbcglobal.net|sbcglobal/", $explode[1])){
			$x = fopen("result-email/email-sbcglobal.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$sbcglobal++;
		}else if(preg_match("/comcast|comcast.net/", $explode[1])){
			$x = fopen("result-email/email-comcast.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$comcast++;
		}else if(preg_match("/verizon.net|verizon.com/", $explode[1])){
			$x = fopen("result-email/email-verizon.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$verizon++;
		}else if(preg_match("/163.net|163.com/", $explode[1])){
			$x = fopen("result-email/email-163.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$email163++;
		}else if(preg_match("/att.net|att/", $explode[1])){
			$x = fopen("result-email/email-att.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$att++;
		}else if(preg_match("/t-online.de|t-online/", $explode[1])){
			$x = fopen("result-email/email-t-online.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$tonline++;
		}else if(preg_match("/mail.ru/", $explode[1])){
			$x = fopen("result-email/email-mail.ru.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$mailru++;
		}else if(preg_match("/yandex/", $explode[1])){
			$x = fopen("result-email/email-yandex.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$yandex++;
		}else if(preg_match("/cox.net/", $explode[1])){
			$x = fopen("result-email/email-cox.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$cox++;
		}else if(preg_match("/gmx.de|gmx.com|gmx.net/", $explode[1])){
			$x = fopen("result-email/email-gmx.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$gmx++;
	}else if(preg_match("/bellsouth/", $explode[1])){
			$x = fopen("result-email/email-bellsouth.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$bellsouth++;
	}else if(preg_match("/earthlink/", $explode[1])){
			$x = fopen("result-email/email-earthlink.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$earthlink++;		
	}else if(preg_match("/mail.com/", $explode[1])){
			$x = fopen("result-email/email-mail.com.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$mailcom++;			
	}else if(preg_match("/qq.com/", $explode[1])){
			$x = fopen("result-email/email-qq.com.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$qq++;
	}else if(preg_match("/126.com/", $explode[1])){
			$x = fopen("result-email/email-126.com.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$email126++;	
	}else if(preg_match("/libero.it/", $explode[1])){
			$x = fopen("result-email/email-libero.it.txt", "a+");
			fwrite($x, $email."\r\n");
			fclose($x);
			$libero++;				
		}else{

			if($japan[0][0]){

				$x = fopen("result-email/other-japan.txt", "a+");
				fwrite($x, $japan[0][0]."\r\n");
				fclose($x);

				$c_japan++;

			}else if($canada[0][0]){

				$x = fopen("result-email/other-canda.txt", "a+");
				fwrite($x, $canada[0][0]."\r\n");
				fclose($x);

				$c_canada++;

			}else if($belanda[0][0]){

				$x = fopen("result-email/other-belanda.txt", "a+");
				fwrite($x, $belanda[0][0]."\r\n");
				fclose($x);

				$c_belanda++;

			}else if($france[0][0]){

				$x = fopen("result-email/other-france.txt", "a+");
				fwrite($x, $france[0][0]."\r\n");
				fclose($x);

				$c_fr++;

			}else if($audonk[0][0]){

				$x = fopen("result-email/other-au.txt", "a+");
				fwrite($x, $audonk[0][0]."\r\n");
				fclose($x);

				$c_au++;

			}else if($american[0][0]){

				$x = fopen("result-email/other-american.txt", "a+");
				fwrite($x, $american[0][0]."\r\n");
				fclose($x);

				$c_amr++;

			}else if($asia[0][0]){
				
				$x = fopen("result-email/other-asia.txt", "a+");
				fwrite($x, $asia[0][0]."\r\n");
				fclose($x);

				$c_asia++;

			}else if($european[0][0]){

				$x = fopen("result-email/other-european.txt", "a+");
				fwrite($x, $european[0][0]."\r\n");
				fclose($x);
				$c_euro++;

			}else if($african[0][0]){

				$x = fopen("result-email/other-african.txt", "a+");
				fwrite($x, $african[0][0]."\r\n");
				fclose($x);
				$c_aff++;

			}else{
				
				$x = fopen("result-email/other-benua.txt", "a+");
				fwrite($x, $email."\r\n");
				fclose($x);

				$c_other++;
			}

			$other++;
		}

		$valid++;
	}else{
		$x = fopen("result-trash/email-trash.txt", "a+");
		fwrite($x, $email."\r\n");
		fclose($x);
		$trash++;
	}
	echo "[Filter Email - W3LL] Email ".number_format( $hitung , 0 , '' , ',' )." of ".number_format( $count , 0 , '' , ',' )." -[ ".round(($hitung+1)/$count * 100,2)."% ]-\r\n";
	$hitung++;
}
echo '
-------------------------------------------------
    REPORT EMAIL - Email Filter - Spammer ID
-------------------------------------------------
[+] LIBERO.IT   : '.number_format( $libero, 0 , '' , ',' ).' ('. (round(100-($valid-$libero)/$valid * 100,2)) .'%)
[+] 126.COM   : '.number_format( $email126, 0 , '' , ',' ).' ('. (round(100-($valid-$email126)/$valid * 100,2)) .'%)
[+] QQ.COM   : '.number_format( $qq, 0 , '' , ',' ).' ('. (round(100-($valid-$qq)/$valid * 100,2)) .'%)
[+] MAIL.COM   : '.number_format( $mailcom, 0 , '' , ',' ).' ('. (round(100-($valid-$mailcom)/$valid * 100,2)) .'%)
[+] EARTHLINK   : '.number_format( $earthlink, 0 , '' , ',' ).' ('. (round(100-($valid-$earthlink)/$valid * 100,2)) .'%)
[+] COX   : '.number_format( $cox, 0 , '' , ',' ).' ('. (round(100-($valid-$cox)/$valid * 100,2)) .'%)
[+] GMX   : '.number_format( $gmx, 0 , '' , ',' ).' ('. (round(100-($valid-$gmx)/$valid * 100,2)) .'%)
[+] Bellsouth   : '.number_format( $bellsouth, 0 , '' , ',' ).' ('. (round(100-($valid-$bellsouth)/$valid * 100,2)) .'%)
[+] Yandex   : '.number_format( $yandex, 0 , '' , ',' ).' ('. (round(100-($valid-$yandex)/$valid * 100,2)) .'%)
[+] mail.ru   : '.number_format( $mailru, 0 , '' , ',' ).' ('. (round(100-($valid-$mailru)/$valid * 100,2)) .'%)
[+] tonline   : '.number_format( $tonline, 0 , '' , ',' ).' ('. (round(100-($valid-$tonline)/$valid * 100,2)) .'%)
[+] att   : '.number_format( $att, 0 , '' , ',' ).' ('. (round(100-($valid-$att)/$valid * 100,2)) .'%)
[+] 163   : '.number_format( $email163, 0 , '' , ',' ).' ('. (round(100-($valid-$email163)/$valid * 100,2)) .'%)
[+] Verizon   : '.number_format( $verizon, 0 , '' , ',' ).' ('. (round(100-($valid-$verizon)/$valid * 100,2)) .'%)
[+] Sbcglobal   : '.number_format( $sbcglobal, 0 , '' , ',' ).' ('. (round(100-($valid-$sbcglobal)/$valid * 100,2)) .'%)
[+] Hotmail     : '.number_format( $hotmail, 0 , '' , ',' ).' ('. (round(100-($valid-$hotmail)/$valid * 100,2)) .'%)
[+] Comcast     : '.number_format( $comcast, 0 , '' , ',' ).' ('. (round(100-($valid-$comcast)/$valid * 100,2)) .'%)
[+] Yahoo       : '.number_format( $yahoo, 0 , '' , ',' ).' ('. (round(100-($valid-$yahoo)/$valid * 100,2)) .'%)
[+] Apple       : '.number_format( $icloud, 0 , '' , ',' ).' ('. (round(100-($valid-$icloud)/$valid * 100,2)) .'%)
[+] Gmail       : '.number_format( $gmail, 0 , '' , ',' ).' ('. (round(100-($valid-$gmail)/$valid * 100,2)) .'%)
[+] Aol         : '.number_format( $aol, 0 , '' , ',' ).' ('. (round(100-($valid-$aol)/$valid * 100,2)) .'%)
[+] Other       : '.number_format( $other, 0 , '' , ',' ).' ('. (round(100-($valid-$other)/$count * 100,2)) .'%)
-------------------------------------------------
[+] '.strtoupper('asia').'     : '.number_format( $c_asia, 0 , '' , ',' ).' ('. (round(100-($valid-$c_asia)/$valid * 100,2)) .'%)
[+] '.strtoupper('european').' : '.number_format( $c_euro, 0 , '' , ',' ).' ('. (round(100-($valid-$c_euro)/$valid * 100,2)) .'%)
[+] '.strtoupper('American').' : '.number_format( $c_amr, 0 , '' , ',' ).' ('. (round(100-($valid-$c_amr)/$valid * 100,2)) .'%)
[+] '.strtoupper('African').'  : '.number_format( $c_aff, 0 , '' , ',' ).' ('. (round(100-($valid-$c_aff)/$valid * 100,2)) .'%)
[+] '.strtoupper('Other').'    : '.number_format( $c_other, 0 , '' , ',' ).' ('. (round(100-($valid-$c_other)/$valid * 100,2)) .'%)
-------------------------------------------------
[+] '.strtoupper('Japan').'    : '.number_format( $c_japan, 0 , '' , ',' ).' ('. (round(100-($valid-$c_japan)/$valid * 100,2)) .'%)
[+] '.strtoupper('Canada').'   : '.number_format( $c_canada, 0 , '' , ',' ).' ('. (round(100-($valid-$c_canada)/$valid * 100,2)) .'%)
[+] '.strtoupper('Austra').'   : '.number_format( $c_au, 0 , '' , ',' ).' ('. (round(100-($valid-$c_au)/$valid * 100,2)) .'%)
[+] '.strtoupper('France').'   : '.number_format( $c_fr, 0 , '' , ',' ).' ('. (round(100-($valid-$c_fr)/$valid * 100,2)) .'%)
[+] '.strtoupper('Belanda').'   : '.number_format( $c_belanda, 0 , '' , ',' ).' ('. (round(100-($valid-$c_belanda)/$valid * 100,2)) .'%)
-------------------------------------------------
[+] Jumlah Email Sama  : '.number_format( ($counts-$count) , 0 , '' , ',' ).' dari '.number_format( $counts, 0 , '' , ',' ).' Email
[+] Jumlah Email Unik  : '.number_format( $count , 0 , '' , ',' ).'
[+] Email  Bagus       : '.number_format( $valid , 0 , '' , ',' ).'
[+] Email  trash      : '.number_format( $trash , 0 , '' , ',' ).'
[+] Reputasi Hasil     : '.(100-round(($valid-$other)/$count * 100,2)).'%
-------------------------------------------------
[+] Filter date time : '.date("Y-m-d h:i:sa").'  
-------------------------------------------------
'; 
