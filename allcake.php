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
  <div class="col-lg-2">
    <p>htisfboibnfoubdf</p>
    <p>htisfboibnfoubdf</p>
    <p>htisfboibnfoubdf</p>
  </div>
  <div class="col-lg-10">
  <?php foreach($q as $item):  ?>


<div class="col-sm-3 mx-5 my-2 d-flex justify-content-between" style="float:left;">
<div class="card text-center  "   >
  <img class="card-img-top" src="assets/images/xyz.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?=$item->cake_name ?></h5>
    <p class="card-text"><?=$item->cake_discription ?></p>
   
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

</div>
</div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach ;  ?>


  </div>
<!-- <div class="col-sm-2">

qqsqs
</div>

<div class="col-sm-10"> -->


</div>

<!-- </div>
</div> -->







<!-- ----------------------------------------------------------------------------------------------------------------- -->
<?php

include_once("foot.php");
?>