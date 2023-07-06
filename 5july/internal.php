<?php
if($_GET["name"] || $_GET["age"])
{
    echo "Welcome". $_GET["name"]."<br/>";
    echo "you are". $_GET["age"]."old.";
    exit();


}
?>

<html lang="en">

    
<body>
    <form action="<?php $_PHP_SELF?>" method="GET">
   name:<input type="text" name="name"/>
 age:<input type="text" name="age"/>
  <input type="submit"/>
</form>
</body>
</html>