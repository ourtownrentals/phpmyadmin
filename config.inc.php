<?php

$i = 1;
$cfg['Servers'][$i]['AllowRoot'] = false;
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['ssl'] = true;
$cfg['Servers'][$i]['host'] = trim(getenv('PMA_HOST'));
$cfg['Servers'][$i]['pmadb'] = trim(getenv('PMA_CONTROL_DB'));
$cfg['Servers'][$i]['controluser'] = trim(getenv('PMA_CONTROL_USER'));
$cfg['Servers'][$i]['controlpass'] = trim(getenv('PMA_CONTROL_PASS'));

$cfg['ServerDefault'] = 1;
$cfg['DefaultLang'] = 'en';
$cfg['CaptchaLoginPublicKey'] = trim(getenv('PMA_CAPTCHA_PUBLIC_KEY'));
$cfg['CaptchaLoginPrivateKey'] = trim(getenv('PMA_CAPTCHA_PRIVATE_KEY'));
$cfg['blowfish_secret'] = trim(getenv('PMA_SECRET'));
