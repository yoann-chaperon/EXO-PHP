<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 1.1</title>
</head>
<body>
<div>
    <?php
        $age = rand(1,10);
    ?>
    <?php if ($age>= 3 && $age<=5) { 
        echo "Robert a $age ans et est en maternel";
    } else {?>
    <?php switch ($age) :

                case '6' :
                echo "Robert a $age ans et est en classe de CP";
                break; 

                case '7' : 
                echo "Robert a $age ans et est en classe de CE1";
                 break; 
                case '8' :
                echo "Robert a $age ans et est en classe de CE2";
                 break; 

                case '9' : 
                echo "Robert a $age ans et est en en classe de CM1";
                break; 

                case '10' : 
                echo "Robert a $age ans et est en classe de de CM2";
                break;
                default :
                echo "Il as $age ans donc garde ton gosse";
                break; 
            endswitch ;} ?>
    </div>
</body>
</html>