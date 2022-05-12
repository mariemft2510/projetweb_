<?php
require_once '../Controller/mannequinC.php';
$mannequinC = new catalogueC();
$mannequins =$mannequineC ->afficherMannequins();
if (isset ($_POST['mannequin'])&& isset ($_POST ['search '])){
    $list = $catalogueC ->afficherlisteCatalogue($_POST ['mannequin']);
?>
}
<div class ="form-contrainer">

< form action="" method = "POST">
<div class="row">
<div class ="col-25">
<label>Search:</label>
</div>
<div class="col-75">
<select name="Mannequin" id="Mannequin">
<?php
foreach ($mannequin as $mannequin){
?>
<option 
value="<?= $mannequin['idM']?>"
<?php if (isset ($_POST ['search'])&& $mannequin ['idM']=$_POST['mannequin']){
    ?>
    selected 
    <?php}

?>
>
<?= $mannequin ['nom']?>
</option>
<?php 

}
?>

</selected>
</div>
</div>
<br>
<div class ="row">
<input type ="submit" value ="Search" name ="search">
</div>
</form>
</div>
<?php if (isset ($_POST['search'])){ ?>
    <section class="contrainer">
    <h2> MUSIC</h2>
    <div class ="shop-items">
    <?php
foreach ($list as $catalogue){
    ?>
    <div class ="shop-items">

<strong class =""shop-items-title"> <?= $album['titre'] ?> </strong>
<img src ="../assets/images/<?=$album ['image']?> class ="shop-items-image">
<div class ="shop-items-details">
<span class "shop-item-price"><?= $album['prix'] ?>dt . </span>
</div>
</div>
<?php

}
?>
</div>
</section>
<?php
} 
?>



















