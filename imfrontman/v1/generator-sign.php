<?php

header('Content-Type: text/html; charset=utf-8');

    $name=htmlspecialchars($_POST["name"]);
    $position=htmlspecialchars($_POST["position"]);
    $phone=htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $file_url = htmlspecialchars($_POST["file_url"]);
    $linked_url = htmlspecialchars($_POST["linked_url"]);

echo '<table class="body" style="border-collapse:collapse;width:100%"><tbody><tr style="vertical-align:top"><td class="float-left" align="left" valign="top"><table class="container" style="border-collapse:collapse;margin-left:0;max-width:760px!important;width:100%"><tbody><tr style="vertical-align:top"><td style="vertical-align:top;"><table style="border-collapse:collapse;vertical-align:top;width:100%"><tbody><tr style="vertical-align:top"><th class="small-12 columns" style="margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:8px;width:174px"><table style="border-collapse:collapse;vertical-align:top;width:100%"><tbody><tr style="vertical-align:top"><td style="margin:0;padding:0;vertical-align:top;"><img src="'.$file_url.'" width="153" alt="fotka" style="display:block;max-width:100%;outline:0;"></td></tr></tbody></table></th><th class="small-12 columns" style="margin:0 auto;padding:0;padding-bottom:16px;padding-left:8px;padding-right:8px;width:364px;text-align:left;"><p style="color:#fdc600;font-family:Tahoma,sans-serif;font-size:23px;font-weight:700;line-height:1.3;margin:0;margin-bottom:5px;padding:0;">'.$name.'</p><p style="color:#333;font-family:Tahoma,sans-serif;font-size:15px;font-weight:700;line-height:1.3;margin:0;margin-bottom:25px;padding:0;">'.$position.'</p><table style="border-collapse:collapse;vertical-align:top;width:100%"><tbody><tr style="vertical-align:top"><td style="color:#858d97;font-family:Helvetica,sans-serif;font-size:15px;font-weight:400;line-height:20px;margin:0;margin-bottom:0;padding:0;vertical-align:top;width:18px;"> P</td><td style="color:#858d97;font-family:Helvetica,sans-serif;font-size:15px;font-weight:400;line-height:20px;margin:0;margin-bottom:0;padding:0;padding-right:3px;vertical-align:top;"> :</td><td style="line-height:20px;margin:0;margin-bottom:0;padding:0;vertical-align:top;text-decoration:none;"><a href="tel:'.$phone. '" target="_blank" style="color:#858d97;font-family:Helvetica,sans-serif;font-size:15px;font-weight:400;line-height:20px;margin:0;margin-bottom:0;padding:0;text-decoration:none">'.$phone. '</a></td></tr><tr style="vertical-align:top"><td style="color:#858d97;font-family:Helvetica,sans-serif;font-size:15px;font-weight:400;line-height:20px;margin:0;margin-bottom:0;padding:0;vertical-align:top;width:18px;"> M</td><td style="color:#858d97;font-family:Helvetica,sans-serif;font-size:15px;font-weight:400;line-height:20px;margin:0;margin-bottom:0;padding:0;padding-right:3px;vertical-align:top;"> :</td><td style="text-decoration:none;color:#858d97;vertical-align:top;"><a href="mailto:'.$email.'" target="_blank" style="color:#858d97;font-family:Helvetica,sans-serif;font-size:15px;font-weight:400;line-height:20px;margin:0;margin-bottom:0;padding:0;text-decoration:none">'.$email. '</a></td></tr><tr style="vertical-align:top"><td style="color:#858d97;font-family:Helvetica,sans-serif;font-size:15px;font-weight:400;line-height:20px;margin:0;margin-bottom:0;padding:0;vertical-align:top;width:18px;"> W</td><td style="color:#858d97;font-family:Helvetica,sans-serif;font-size:15px;font-weight:400;line-height:20px;margin:0;margin-bottom:0;padding:0;padding-right:3px;vertical-align:top;"> :</td><td style="line-height:20px;margin:0;margin-bottom:0;padding:0;vertical-align:top;"><a href="https://imfrontman.com" target="_blank" style="color:#858d97;font-family:Helvetica,sans-serif;font-size:15px;font-weight:400;line-height:20px;margin:0;margin-bottom:0;padding:0;text-decoration:none">www.imfrontman.com</a></td></tr></tbody></table></th><th class="small-12 columns" style="margin:0 auto;padding:0;padding-bottom:16px;padding-left:8px;padding-right:16px;width:174px"><img src="https://podpis.imfrontman.com/assets/logo.gif" width="174" style="display:block;max-width:100%;outline:0;"><p class="under-logo" style="color:#0a0a0a;font-family:Helvetica,sans-serif;font-size:15px;font-weight:400;line-height:1.3;margin:0;margin-bottom:10px;margin-left:auto;margin-right:auto;max-width:174px;padding:0;text-align:center"> Součást skupiny GFF</p></th><th class="expander" style="margin:0;padding:0!important;visibility:hidden;width:0"></th></tr></tbody></table></td></tr><tr style="vertical-align:top"><td style="margin:0;padding:0;vertical-align:top;"><table style="border-collapse:collapse;vertical-align:top;width:100%"><tbody><tr style="padding:0;vertical-align:top"><th class="small-12 columns" style="margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:8px;width:554px"><table style="border-collapse:collapse;vertical-align:top;width:100%"><tbody><tr style="padding:0;vertical-align:top"><td style="margin:0;padding:0;vertical-align:top;"><img src="https://podpis.imfrontman.com/assets/pin.jpg" class="ico-map" style="display:block;max-width:100%;outline:0;text-decoration:none;width:auto"></td><td style="text-align:left;color:#858d97;font-family:Helvetica,sans-serif;font-size:15px;font-weight:400;line-height:1.3;margin:0;padding:0;padding-left:15px;vertical-align:bottom;"> Viena Light Point, Vídeňská 101/119, 619 00 Brno-jih-Dolní Heršpice</td></tr></tbody></table></th><th class="small-12 columns" style="margin:0 auto;padding:0;padding-bottom:16px;padding-left:8px;padding-right:16px;width:174px"><table style="border-collapse:collapse;vertical-align:top;width:100%"><tbody><tr style="vertical-align:top"><th class="columns small-3" style="margin:0 auto;padding:0;padding-bottom:5px;padding-left:0!important;padding-right:0!important;padding-top:3px;width:25%;text-decoration:none;"><a href="'.$linked_url.'" target="_blank" style="margin:0;padding:0;text-align:center;text-decoration:none;display:block;width:100%"><img src="https://podpis.imfrontman.com/assets/linked.jpg" alt="Linkedin" style="display:inline-block;outline:0;text-align:center;text-decoration:none;vertical-align:bottom;" width="20"></a></th><th class="columns small-3" style="margin:0 auto;padding:0;padding-bottom:5px;padding-left:0!important;padding-right:0!important;padding-top:3px;width:25%"><a href="https://www.facebook.com/imfrontman/" target="_blank" style="display:block;margin:0;padding:0;text-align:center;text-decoration:none;width:100%"><img src="https://podpis.imfrontman.com/assets/facebook.jpg" alt="Facebook" style="display:inline-block;outline:0;text-align:center;text-decoration:none;vertical-align:bottom;" width="10"></a></th><th class="columns small-3" style="margin:0 auto;padding:0;padding-bottom:5px;padding-left:0!important;padding-right:0!important;padding-top:3px;width:25%"><a href="https://www.instagram.com/ImFrontman/" target="_blank" style="display:block;margin:0;padding:0;text-align:center;text-decoration:none;width:100%"><img src="https://podpis.imfrontman.com/assets/insta.jpg" alt="instagram" style="display:inline-block;outline:0;text-align:center;text-decoration:none;vertical-align:bottom;" width="20"></a></th><th class="columns small-3" style="margin:0 auto;padding:0;padding-bottom:5px;padding-left:0!important;padding-right:0!important;padding-top:3px;width:25%"><a href="https://www.youtube.com/channel/UCtnFjsxiqlFI2JmpCtiLAfA" target="_blank" style="display:block;margin:0;padding:0;text-align:center;text-decoration:none;width:100%"><img src="https://podpis.imfrontman.com/assets/yt.jpg" alt="youtube" style="display:inline-block;outline:0;text-align:center;text-decoration:none;vertical-align:bottom;width:auto" width="26"></a></th><th class="expander" style="margin:0;padding:0!important;visibility:hidden;width:0"></th></tr></tbody></table></th><th class="expander" style="margin:0;padding:0!important;visibility:hidden;width:0"></th></tr></tbody></table></td></tr><tr style="padding:0;vertical-align:top"><td style="margin:0;padding:0;vertical-align:top;"><table class="separator" style="border-collapse:collapse;padding:0;vertical-align:top;width:100%"><tbody><tr style="padding:0;vertical-align:top"><td style="border-bottom:1px solid #e3e5e7;line-height:0;margin:0;padding:0;padding-bottom:0;vertical-align:top;width:100%;"> &nbsp;</td></tr></tbody></table><table style="border-collapse:collapse;display:table;padding:0;position:relative;vertical-align:top;width:100%"><tbody><tr style="vertical-align:top"><th class="columns small-12" style="text-align:left;color:#858d97;font-family:Helvetica,sans-serif;font-size:11px;font-weight:400;line-height:18px;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:8px;padding-top:20px;width:554px"> Právní informace: tento e-mail a všechny připojené soubory jsou důvěrné a mohou být chráněny zákonem.<br>Tento e-mail je určen pouze uvedenému příjemci a dalším osobám, které jsou jmenovitě uvedeny jako příjemci. </th><th class="columns small-12" style="margin:0 auto;padding:0;padding-bottom:16px;padding-left:8px;padding-right:16px;width:174px"></th><th class="expander" style="margin:0;padding:0!important;visibility:hidden;width:0"></th></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>';
?>