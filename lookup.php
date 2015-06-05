<?php
$ipordomain = $_GET["query"];
$unparsedresult = dns_get_record($ipordomain . ".zen.spamhaus.org");
$parsedresult = json_encode($unparsedresult);
    if (strpos($parsedresult,'host') !== false) {
        echo 'Listed';
    }
else
{
    echo 'Not Listed';
}
?>
