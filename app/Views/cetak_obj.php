<html>
    <head>
        <title>
            <?= $title ?>
        </title>
    </head>
    <body>
        <h1>
            <?=$heading?>
        </h1>

        <h3>List Data</h3>

        <ul>
        <?php foreach ($obj as $key=>$value):?>
            <li><?php echo "$key : $value "; ?></li>
        <?php endforeach;?>
        </ul>
    </body>
</html>