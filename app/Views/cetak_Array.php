<html>
    <head>
        <title><?= $title ?></title>
    </head>
<body>
    <h1><?=$heading?></h1>
    <h3>My To Do List</h3>
    <ul>
        <?php foreach ($todo_list as $item):?>
        <li><?= $item ?></li>
        <?php endforeach;?>
    </ul>
     
    <hr>
    <?php
    for($i=0;$i<sizeof($todo_list);$i++)
    {echo"<li>$todo_list[$i]</li>";}
    ?>
    </ul>
</body>
</html>