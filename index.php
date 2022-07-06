
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "Belgica", 28, 1.82, 70, 8, 2, 4);
          //  var_export($l[0]);
          //  $tamanho = strlen($no);
          // echo $tamanho;
            
           // $l[0]->status();
            $l[1] = new Lutador("Putscript","Brasil" , 19, 1.87, 58.6, 14, 2, 3);
            $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
            $uec01 = new Luta();
           
            $uec01->marcarLuta($l[5],$l[4]);
            $uec01->lutar();
             $l[5]->status();
            $l[4]->status();
          
            
            
        ?>
        </pre>
    </body>
</html>
