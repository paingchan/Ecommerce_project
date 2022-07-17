# Documents 
E-commerce Website

![Screenshot 2022-07-17 232916](https://user-images.githubusercontent.com/54994337/179416795-d922b82a-eced-46b5-b1a2-480546dcd0a5.png)


>Front-end E-commerce template By Marazzo HTML5

>Admin panel template by Vuexy template


# Setup

>Connect To Database

First Import sql file in phpmyadmin

```
database_file/paingchan_db.sql
```

>Edit database user name and password

```bash
/Ecommerce_project/functions/db.php
```

```php
<?php
    $con = mysqli_connect("localhost" , "root" , "8G!(Y/33eOh.3qXj" , "paingchan_db");
    if (!$con)
    {
        echo "fail to connect";
        exit();
    }
?>
```

>Edit admin panel database user name and password

```
/Ecommerce_project/admin/functions/db.php
```

```php
<?php
    $con = mysqli_connect("localhost" , "root" , "8G!(Y/33eOh.3qXj" , "paingchan_db");
    if (!$con)
    {
        echo "fail to connect";
        exit();
    }
?>
```

>Login Admin panel

```
localhost/Ecommerce_project/admin/
```

![Screenshot 2022-07-17 233830](https://user-images.githubusercontent.com/54994337/179416922-234632e3-0e6a-4ace-abd2-961b99f71220.png)

>**Note**

>email : admin@admin.com

>pwd : 123456

