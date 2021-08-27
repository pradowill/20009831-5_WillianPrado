<?php
    include("menu.php");
    include("../dados/doces.php");
   
?>

<link rel="stylesheet" href="../css/Style.css" type="text/css">


<div class="container">
    <div class="row">
    
<?php

    $arr = $array;

    
    for ($i = 1; $i <= count($arr)-1; $i++) {
        echo '<div style="margin-bottom: 20px;" class="col-sm">'.
            '<div class="card" style="width: 18rem;">'.
                '<img style="width:250px; height: 200px" class="card-img-top" src="'.$arr[$i]['imagem'].'">'.
                '<div class="card-body">'.
                    '<h5 class="card-text">'.$arr[$i]['titulo'].'</h5>'.
                    '<p class="card-text">'.$arr[$i]['descricao'].'</p>'.
                '</div>'.
            '</div>'.
        '</div>';
    }

    include ("footer.php");
?>
    </div>
</div>
<br><br><br><br>