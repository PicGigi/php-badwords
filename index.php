<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $testo = 'Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita.
    Ahi quanto a dir qual era è cosa dura esta selva selvaggia e aspra e forte che nel pensier rinova la paura!
    Tant’è amara che poco è più morte; ma per trattar del ben ch’i’ vi trovai, dirò de l’altre cose ch’i’ v’ ho scorte.
    Io non so ben ridir com’i’ v’intrai, tant’era pien di sonno a quel punto che la verace via abbandonai.';
    $testoCensurato = str_ireplace($_GET['badword'], '***', $testo);
    $lunghezza = strlen($testoCensurato);
    ?>

    <p><?= $testoCensurato ?></p>
    <form method="GET" action="">
        <label for="parolaCensurata">Scrivi la parola da censurare</label>
        <input type="text" id="parolaCensurata" name="badword">
        <button>Censura!</button>
    </form>
    <span>Lunghezza paragrafo: </span>
    <span><?= $lunghezza ?> caratteri.</span>
</body>
</html>