<?php
$strDomain = "exsample.jp";

echo "調査ドメイン:{$strDomain}<br/>";
echo "<br/>";
echo "<br/>";

$aryRslt_n = gethostbynamel($strDomain );

foreach($aryRslt_n as $strRslt_n) {
    $strRslt_i = gethostbyaddr($strRslt_n);

    echo "■名前→IP<br/>";
    var_dump($strRslt_n);
    echo "<br/>";
    echo "<br/>";
    
    echo "■IP→名前<br/>";
    var_dump($strRslt_i);
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
}
