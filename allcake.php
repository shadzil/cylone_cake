<?php

include_once("head.php");
include_once "cake.php";

$cake1 = new cake();

      $q =$cake1->get_all_cake();

      // print_r($q);

?>





<?php

include_once "nav.php";
?>

<img src="assets/images/xyz.jpg" class="img-fluid" alt="...">
<!-- --------------------------------------------------------------------------------------------------------- -->




<div class="container-fluid my-5">
<div class="row">
<!-- <div class="col-sm-2">

qqsqs
</div>

<div class="col-sm-10"> -->

<?php foreach($q as $item):  ?>


<div class="col-sm-4">
<div class="card text-center  " style="width: 18rem;"   >
  <img class="card-img-top" src="images/bg.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?=$item->cake_name ?></h5>
    <p class="card-text"><?=$item->cake_discription ?></p>
   
    <a href="#"  class="btn btn-primary downbtn ">Go somewhere</a>


</div>
</div>

</div>
<?php endforeach ;  ?>
</div>

<!-- </div>
</div> -->







<!-- ----------------------------------------------------------------------------------------------------------------- -->
<?php

include_once("foot.php");
?>