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

/* Storage database and tables */
$cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
$cfg['Servers'][$i]['relation'] = 'pma__relation';
$cfg['Servers'][$i]['table_info'] = 'pma__table_info';
$cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
$cfg['Servers'][$i]['column_info'] = 'pma__column_info';
$cfg['Servers'][$i]['history'] = 'pma__history';
$cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
$cfg['Servers'][$i]['tracking'] = 'pma__tracking';
$cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
$cfg['Servers'][$i]['recent'] = 'pma__recent';
$cfg['Servers'][$i]['favorite'] = 'pma__favorite';
$cfg['Servers'][$i]['users'] = 'pma__users';
$cfg['Servers'][$i]['usergroups'] = 'pma__usergroups';
$cfg['Servers'][$i]['navigationhiding'] = 'pma__navigationhiding';
$cfg['Servers'][$i]['savedsearches'] = 'pma__savedsearches';
$cfg['Servers'][$i]['central_columns'] = 'pma__central_columns';
$cfg['Servers'][$i]['designer_settings'] = 'pma__designer_settings';
$cfg['Servers'][$i]['export_templates'] = 'pma__export_templates';
