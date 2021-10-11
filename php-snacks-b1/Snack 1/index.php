<?php 
    $partite = [
        [
            "squadraCasa" => "Olimpia Milano",
            "squadraOspite" => "Cantù",
            "puntiCasa" => (rand(0,90)),
            "puntiOspite" => (rand(0,90)),
        ],
        [
            "squadraCasa" => "Squadra 1",
            "squadraOspite" => "Squadra 2",
            "puntiCasa" => (rand(0,90)),
            "puntiOspite" => (rand(0,90)),
        ],
        [
            "squadraCasa" => "Squadra 3",
            "squadraOspite" => "Squadra 4",
            "puntiCasa" => (rand(0,90)),
            "puntiOspite" => (rand(0,90)),
        ],
        [
            "squadraCasa" => "Squadra 5",
            "squadraOspite" => "Squadra 6",
            "puntiCasa" => (rand(0,90)),
            "puntiOspite" => (rand(0,90)),
        ],
    ]
?>


<ul>
    <?php for ($i = 0; $i < count($partite); $i++) {?>
        <li><?php echo $partite[$i]['squadraCasa'] . ' - ' . $partite[$i]['squadraOspite'] . ' | ' . $partite[$i]['puntiOspite'] . ' - ' . $partite[$i]['puntiOspite']?></li>
    <?php } ?>
</ul>