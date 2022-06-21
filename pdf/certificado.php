

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado</title>
</head>
<body>
    <div style="text-align: center;">
    <p style="font-size:25px">INCLUTEC</p>
    <h2 >CERTIFICADO DE CONCLUSÃO </h2>
    <br>
    <p style="font-size:25px">Certificamos que</p>
    <h3 style="font-size:35px"><u><?php echo $_SESSION['usuario']['nome_completo'] ?></u></h3>
    <p style="font-size:25px">Concluiu o curso de <?php  echo $_SESSION['curso'] ?></p>
    <p style="font-size:25px">Emitido: <?php $timezone = new DateTimeZone('America/Sao_Paulo'); $agora = new DateTime('now', $timezone); echo $agora->format('d/m/Y'); ?></p>
    <br>
    
    </div>
    
</body>
</html>


