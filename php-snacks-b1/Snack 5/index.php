<?php 
    $text = 'In una terra lontana, dietro le montagne Parole, lontani dalle terre di Vocalia e Consonantia, vivono i testi casuali. Vivono isolati nella cittadina di Lettere, sulle coste del Semantico, un immenso oceano linguistico. Un piccolo ruscello chiamato Devoto Oli attraversa quei luoghi, rifornendoli di tutte le regolalie di cui hanno bisogno. È una terra paradismatica, un paese della cuccagna in cui golose porzioni di proposizioni arrostite volano in bocca a chi le desideri. Non una volta i testi casuali sono stati dominati dall’onnipotente Interpunzione, una vita davvero non ortografica. Un giorno però accadde che la piccola riga di un testo casuale, di nome Lorem ipsum, decise di andare a esplorare la vasta Grammatica. Il grande Oximox tentò di dissuaderla, poiché quel luogo pullulava di virgole spietate, punti interrogativi selvaggi e subdoli punti e virgola, ma il piccolo testo casuale non si fece certo fuorviare. Raccolse le sue sette maiuscole, fece scorrere la sua iniziale nella cintura, e si mise in cammino. Quando superò i primi colli dei monti Corsivi, si voltò a guardare un’ultima volta la skyline di Lettere, la sua città, la headline del villaggio Alfabeto e la subline della sua stessa strada, il vicolo Riga. Una domanda retorica';

    $paragraphs = explode('.', $text);

    foreach ($paragraphs as $key => $paragraph) {
        echo '<p>'.
            $paragraph
        .'</p>';
    }
?>