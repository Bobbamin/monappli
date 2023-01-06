<?php

// $toto = "<a href='test'>Test</a>";
// echo $toto ;
// echo "<br>";
// $new = htmlspecialchars("<a href='test'>Test</a>");
// echo $new; 
// &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

$toto = "<script>alert('danger');</script>";
$protege = htmlspecialchars($toto);
echo $protege ;

// echo "<hr>";
//   $str = '<a href="https://www.geeksforgeeks.org">GeeksforGeeks</a>';
//  echo $str ;
//   echo htmlentities( $str );

echo htmlentities('<Il était une fois un être>.');
// Output: &lt;Il &eacute;tait une fois un &ecirc;tre&gt;.
//                ^^^^^^^^                 ^^^^^^^

echo htmlspecialchars('<Il était une fois un être>.');
// Output: &lt;Il était une fois un être&gt;.
       
?>