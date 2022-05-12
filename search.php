<?php
require_once '../Controller/ServicesC.php';
$ServicesC = new PublicationC();
$Services =$ServicesC ->afficherServicess();
if (isset ($_POST['Services'])&& isset ($_POST ['search '])){
    $list = $PublicationC ->afficherlistePublication($_POST ['Services']);
?>
}
<div class ="form-contrainer">

< form action="" method = "POST">
<div class="row">
<div class ="col-25">
<label>Search:</label>
</div>
<div class="col-75">
<select name="Services" id="Services">
<?php
foreach ($Services as $Services){
?>
<option 
value="<?= $Services['idt']?>"
<?php if (isset ($_POST ['search'])&& $Services ['idt']=$_POST['Services']){
    ?>
    selected 
    <?php }

?>
>
<?= $Services ['numan']?>
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
foreach ($list as $Publication){
    ?>
    <div class ="shop-items">

<strong class =""shop-items-title"> <?= $album['titre'] ?> </strong>
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
