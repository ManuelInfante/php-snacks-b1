
<?php
    $data = $_GET;
    // var_dump($data);
    $errors = '';

    if (strlen($data['name']) <= 3) {
        $errors .= '/ Accesso negato - nome troppo corto /';
    } if (strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false){
        $errors .=  '/ Accesso negato - Mail inesistente /';
    } if (!is_numeric($data['age'])){
        $errors .= '/ Accesso negato - La tua età non contiene numeri /';
        
    } if (empty($data['name']) || empty($data['mail']) || empty($data['age'])) {
        echo 'Errors';
     } else if ($errors != ''){
        echo $errors;
        } else {
        echo 'Accesso riuscito';
        }
?>