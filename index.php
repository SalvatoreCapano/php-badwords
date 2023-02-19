<?php
$paragraph =
    'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima ullam nisi voluptatibus quod quasi saepe. Ad dignissimos soluta fugit ipsum fugiat porro ratione non recusandae. Architecto excepturi atque dolore labore!
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima ullam nisi voluptatibus quod quasi saepe. Ad dignissimos soluta fugit ipsum fugiat porro ratione non recusandae. Architecto excepturi atque dolore labore!
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima ullam nisi voluptatibus quod quasi saepe. Ad dignissimos soluta fugit ipsum fugiat porro ratione non recusandae. Architecto excepturi atque dolore labore!
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima ullam nisi voluptatibus quod quasi saepe. Ad dignissimos soluta fugit ipsum fugiat porro ratione non recusandae. Architecto excepturi atque dolore labore!
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima ullam nisi voluptatibus quod quasi saepe. Ad dignissimos soluta fugit ipsum fugiat porro ratione non recusandae. Architecto excepturi atque dolore labore!
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima ullam nisi voluptatibus quod quasi saepe. Ad dignissimos soluta fugit ipsum fugiat porro ratione non recusandae. Architecto excepturi atque dolore labore!;';

$word = $_GET['word'];
$substitution = '***';
$newParagraph = str_replace($word, $substitution, $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <div class="paragraphBox">
            <h2>Paragrafo Originale</h2>
            <p>
                <?php echo $paragraph; ?>
            </p>
            <span>
                Il paragrafo e' composto da <strong><?php echo strlen($paragraph); ?></strong> caratteri.
            </span>
        </div> <!-- /paragraphBox-->

        <div class="formContainer">

            <form action="" method="GET">

                <input type="text" name="word" placeholder="Inserisci una parola...">

                <button>Censura</button>

            </form>

        </div> <!-- /formContainer-->

        <div class="paragraphBox">
            <h2>
                <!-- Paragrafo in cui la parola '<?php echo $word; ?>' e' censurata -->
                Paragrafo in cui la parola '<?php echo $word; ?>' e' censurata
            </h2>
            <p>
                <?php echo $newParagraph; ?>
            </p>
            <span>
                Il paragrafo e' composto da <strong><?php echo strlen($newParagraph); ?></strong> caratteri.
            </span>
        </div> <!-- /paragraphBox-->

    </div> <!-- /container-->

</body>

</html>