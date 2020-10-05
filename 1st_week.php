<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/PHP_samplefile/css/style.css" />

    <title>よくわかるPHPの教科書</title>
</head>

<body>
    <header>
        <h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
    </header>

    <main>
        <h2>PHPの練習</h2>
        <pre>
        <?php  ?>
        <img src="" alt="">
<div>
    <img src="" alt="">
</div>
       <?php
        $file = file_get_contents('https://h2o-space.com/feed/json');
        $json = json_decode($file);

        foreach ($json->items as $item) :
        ?>
        ・<a href="<?php print($item->url); ?>"><?php print($item->title); ?></a>
        <?php
        endforeach;
        ?>
<div>
    <p>
    <a href=""></a>
    </p>
</div>
        <div>

        </div>
        </pre>
    </main>
</body>

</html>