<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['page_layout'])) {
        switch ($_GET['page_layout']) {
            case 'list':
                require_once  'products/list.php';
                break;

            case 'add':
                require_once  'products/add.php';
                break;

            case 'edit':
                require_once  'products/edit.php';
                break;

            case 'remove':
                require_once  'products/remove.php';
                break;
            default:
                require_once  'products/list.php';
                break;
        }
    }
        else {
            require_once  'products/list.php';
        }
    ?>
</body>
</html>