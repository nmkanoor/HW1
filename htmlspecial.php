<?php
$str = "<p>this -&gt; &quot;</p>\n";

echo htmlspecialchars_decode($str);
?>
