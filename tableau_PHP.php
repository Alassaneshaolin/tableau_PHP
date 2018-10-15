<!DOCTYPE html>
<html>
<head>
    <title>tableau</title>
</head>
<body>

    <?php
    $membre=array(
        array('Pierre', 24, 'pierre@giraud.com'),
        array('Paul', 22, 'paul@dupral.com'),
        array('Jacque', 36, 'jacque@gmail.com')
    );
    echo $membre[0][0] . ' a ' .$membre[0][1]. 'ans. son mail est : '.$membre[0][2]. '<br/>';


    for($ligne=0; $ligne < 3; $ligne++){
        $membre_no = $ligne+1;
        echo 'Membre numero' .$membre_no. '<br/>';
        echo '<ul>';
        for($col = 0; $col < 3; $col++){
            echo '<li>' .$membre[$ligne][$col]. '<li>';

        }
        echo '</ul>';
    }

    ?>

</body>
</html>

