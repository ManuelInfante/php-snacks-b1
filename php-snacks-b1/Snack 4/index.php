<?php 
    $arrayNumeri = [];

    while(count($arrayNumeri) < 15){
        $tmp = rand(1, 100);
        if(!in_array($tmp, $arrayNumeri)){
            $arrayNumeri[] = $tmp;
        }
    };

    //var_dump($arrayNumeri);

    foreach ($arrayNumeri as $key => $value) {
        echo '<ul>'.
                '<li>'. $value .'</li>'
             .'</ul>';
    };
?>
