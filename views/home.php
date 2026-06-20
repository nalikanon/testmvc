<?php 
 echo "<h1>Welcome</h1>";

 if (!empty($users)) {
    echo "<ul>";
     foreach ($users as $user ) {
         echo "<li>". htmlspecialchars($user['firstname'] ." ".$user['lastname']." ".$user['position']) . "</li>";
     }
     echo "</ul>";
 } else {
    echo "<p>User Not Found</p>";
 }

?>