# Documents 
E-commerce Website

Connect To Database 

First Import sql file in phpmyadmin database_file/paingchan_db.sql

Edit database user name and password
/Ecommerce_project/functions/db.php

```
<?php
    $con = mysqli_connect("localhost" , "root" , "8G!(Y/33eOh.3qXj" , "paingchan_db");
    if (!$con)
    {
        echo "fail to connect";
        exit();
    }
?>
```

Edit admin panel database user name and password
/Ecommerce_project/admin/functions/db.php

```
<?php
    $con = mysqli_connect("localhost" , "root" , "8G!(Y/33eOh.3qXj" , "paingchan_db");
    if (!$con)
    {
        echo "fail to connect";
        exit();
    }
?>
```

Login Admin panel

localhost/Ecommerce_project/admin/

email : admin@admin.com
pwd : 123456
