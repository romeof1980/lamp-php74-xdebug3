<html>
<head>
    <title>Api cats</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <?php echo "<h1>Api categories</h1>"; ?>

    <?php

    //use Api\ApiResults;
    require_once("./include/Api.php");

    $api = new Api\ApiResults();

    $cats = $api->getApi("https://api.publicapis.org/categories");

    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>id</th><th>cat name</th></tr></thead>';
    $value = json_decode($cats , true);
    $values = $value['categories'];
    $id = 0;
    foreach($values as $element){
        echo '<tr>';
        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        echo '<td>' . $id . '</td>';
        echo '<td>' . $element . '</td>';
        $id++;
    }

    echo '</tr>';
    echo '</table>';

    ?>
</div>
</body>
</html>
