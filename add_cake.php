<?php

include_once "cake.php";

$cake1 = new cake();

if(isset($_POST["cake_name"]))
{

    $cake1->cake_name=$_POST["cake_name"];
    $cake1->cake_price=$_POST["cake_price"];
    $cake1->cake_discription=$_POST["cake_dis"];

    $cake1->insert_cake();



}

?>







<form action="add_cake.php" method="POST">
  <div class="row">
    <div class="col">
        name
      <input type="text" name="cake_name" class="form-control" placeholder="cake_name">
    </div>
    <div class="col">
        price
      <input type="text" name="cake_price" class="form-control" placeholder="Last name">
    </div>

    <div class="col">
        Discription
      <input type="text" name="cake_dis" class="form-control" placeholder="Last name">
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
  </div>
</form>