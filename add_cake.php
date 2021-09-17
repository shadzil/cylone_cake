

<?php

include_once "cake.php";


include_once "head.php";
$cake1 = new cake();

if(isset($_POST["cake_name"]))
{

    $cake1->cake_name=$_POST["cake_name"];
    $cake1->cake_price=$_POST["cake_price"];
    $cake1->cake_discription=$_POST["cake_dis"];
    $cake1->cake_cat=$_POST["cake_cat"];

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



    <div class="col">
      <label class="form-label">  catergoty</label>
<select name="cake_cat" class="form-control">

<option value="1">  Butter</option>
<option value="1">  Butter</option>
<option value="1">  Butter</option>
<option value="1">  Butter</option>





</select>



    </div>

    <button type="submit" class="btn btn-primary mb-3">ADD</button>
  </div>
</form>