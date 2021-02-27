<?php
echo 'name= ' ;
//if(isset($_POST['name']))
function censor($string, array $badWords, $character = '*') {
    $newBadWords = [];
    foreach ($badWords as $word) {
        $newBadWords[$word] = str_repeat($character, strlen($word));
    }
    return strtr($string, $newBadWords);
}
$badWords = ['stop', 'chicken', 'football','Mani','سلام' ,'چه خبر','روزمه','کاربر','مانی','چه خبر' ,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$text = $_POST['name'];

$output = censor($text, $badWords, '#');
echo $output;
echo '<hr/>';
echo mb_strlen($text);
echo 'character';
echo '<hr/>';
print_r($_POST);