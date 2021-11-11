  
  <?php
    // if (isset($_POST['action']) && !empty($_POST['action'])) {
    //     echo json_encode(array("blablabla" => $variable));
    // }
    $myJSON = json_encode($data['item']);
    echo $myJSON;
    ?>