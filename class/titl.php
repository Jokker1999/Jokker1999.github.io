<?php

if (strpos($_SERVER['PHP_SELF'], 'index.php' ) !== false)
{$nazvanie='RU-KASSA - моментальное пополнение';
$descrip='';
$keyw='оплата мегафон, пополнение скайп, теле2, билайн, мтс, йота, одноклассники, танки онлайн, World of Tanks, skype';
}
if (strpos($_SERVER['PHP_SELF'], '' ) !== false)
{$nazvanie='RU-KASSA - моментальное пополнение';
$descrip='';
$keyw='оплата мегафон, пополнение скайп, теле2, билайн, мтс, йота, одноклассники, танки онлайн, World of Tanks, skype';
}
if (strpos($_SERVER['REQUEST_URI'], 'megafon/ru' ) !== false)
{$nazvanie='Пополнить счет МегаФон';
$descrip='';
$keyw='мегафон, пополнить счет мегафона, мегафон пополнить счет картой';
}
if (strpos($_SERVER['REQUEST_URI'], 'tele/ru/' ) !== false)
{$nazvanie='Пополнить счет Tele2';
$descrip='';
$keyw='Tele2, пополнить счет теле2, теле2 пополнить картой';
}
if (strpos($_SERVER['REQUEST_URI'], 'mtc/ru/' ) !== false)
{$nazvanie='Пополнить счет MTC Россия';
$descrip='';
$keyw='мтс россия, пополнить счет мтс, мтс пополнить счет картой';
}
if (strpos($_SERVER['REQUEST_URI'], 'beeline/ru/' ) !== false)
{$nazvanie='Пополнить счет Билайн Россия';
$descrip='';
$keyw='билайн, пополнить счет билайн, билайн пополнить счет картой';
}
if (strpos($_SERVER['REQUEST_URI'], 'yota/ru/' ) !== false)
{$nazvanie='Пополнить счет Yota';
$descrip='';
$keyw='Yota, пополнить счет йота, Yota пополнить счет картой';
}
if (strpos($_SERVER['REQUEST_URI'], 'ok/ru/' ) !== false)
{$nazvanie='Пополнить счет (ОК) в Одноклассниках';
$descrip='';
$keyw='купить ок одноклассники, OK одноклассники,';
}
if (strpos($_SERVER['REQUEST_URI'], 'skype/ru/' ) !== false)
{$nazvanie='Пополнить счет Skype';
$descrip='';
$keyw='пополнить скайп, skype, оплата скайп картой';
}
if (strpos($_SERVER['REQUEST_URI'], 'wargaming/ru/' ) !== false)
{$nazvanie='Пополнить счет World of Tanks (WOT)';
$descrip='';
$keyw='World of Tanks пополнить, оплатить WOT';
}
if (strpos($_SERVER['REQUEST_URI'], 'tanki/ru/' ) !== false)
{$nazvanie='Пополнить счет Танки Онлайн';
$descrip='';
$keyw='танки Онлайн, купить кристаллы танки, оплата танки онлайн,';
}
if (strpos($_SERVER['REQUEST_URI'], 'rstug/ru/' ) !== false)
{$nazvanie='Оплата Ростелеком ЮГ';
$descrip='';
$keyw='ростелеком, ростелеком юг,';
}
if (strpos($_SERVER['REQUEST_URI'], 'partner' ) !== false)
{$nazvanie='RU-KASSA - Партнёрская программа';
$descrip='';
$keyw='';
}
if (strpos($_SERVER['REQUEST_URI'], 'beel_tv/ru/' ) !== false)
{$nazvanie='Оплатить Билайн ТВ';
$descrip='';
$keyw='билайн тв, пополнить счет билайн тв, оплата услуг билайн тв,';
}
if (strpos($_SERVER['REQUEST_URI'], 'dom_kab/ru/' ) !== false)
{$nazvanie='Оплатить ДОМ.RU: кабельное телевидение';
$descrip='';
$keyw='ДОМ.RU: кабельное телевидение, пополнить счет ДОМ.RU: кабельное телевидение, оплата услуг ДОМ.RU: кабельное телевидение,';
}
if (strpos($_SERVER['REQUEST_URI'], 'dom_cifr/ru/' ) !== false)
{$nazvanie='Оплатить ДОМ.RU: цифровое кабельное телевидение';
$descrip='';
$keyw='ДОМ.RU: цифровое кабельное телевидение, пополнить счет ДОМ.RU: цифровое кабельное телевидение, оплата услуг ДОМ.RU: цифровое кабельное телевидение,';
}

if (strpos($_SERVER['REQUEST_URI'], 'ntv_plus/ru/' ) !== false)
{$nazvanie='Оплатить НТВ-ПЛЮС';
$descrip='';
$keyw='ДНТВ-ПЛЮС, пополнить счет НТВ-ПЛЮС, оплата услуг НТВ-ПЛЮС,';
}
if (strpos($_SERVER['REQUEST_URI'], 'telekarta/ru/' ) !== false)
{$nazvanie='Оплатить ТЕЛЕКАРТА';
$descrip='';
$keyw='ТЕЛЕКАРТА, пополнить счет ТЕЛЕКАРТА, оплата услуг ТЕЛЕКАРТА,';
}
?>