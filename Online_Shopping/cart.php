<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
	switch($_GET["action"]) {
	case  "add":
	case "add ":
		// if(!empty($_POST["quantity"])) {
			echo $_GET["action"]." action";
			$productByproductId = $db_handle->runQuery("SELECT * FROM product WHERE productId='".$_GET["productId"]."'");
			$itemArray = array($productByproductId[0]["productId"]=>array('name'=>$productByproductId[0]["subcatg"], 'productId'=>$productByproductId[0]["productId"], 'quantity'=>1, 'price'=>$productByproductId[0]["price"],'image'=>$productByproductId[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByproductId[0]["productId"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByproductId[0]["productId"] == $k) {
							if($_SESSION["cart_item"][$k]["productId"]==$v["productId"]){
								$_SESSION["cart_item"][$k]["quantity"] += 1;
							}
							else if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;
							}
							$_SESSION["cart_item"][$k]["quantity"] += 0;
						}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		// }
	break;
	case "remove ":
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					// echo $k." k value    ".$v['productId']."v value    ";
					if($_GET["productId"] == $v['productId']){
						// echo "In remove".$_GET['productId'],$k;
						unset($_SESSION["cart_item"][$k]);			
					}
					if(empty($_SESSION["cart_item"])){
						// echo "In remove 2".$_GET['productId'];
						unset($_SESSION["cart_item"]);
					}
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;
	case "view":
	break;
	default: echo "default";
	}
}
?>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<div id="shopping-cart">
<div class="txt-heading">
	<a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
	<a id="btnEmpty" href="index.php">Home</a>
</div>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;"><strong>Name</strong></th>
<th style="text-align:left;"><strong>Category</strong></th>
<th style="text-align:left;"><strong>productId</strong></th>
<th style="text-align:right;"><strong>Quantity</strong></th>
<th style="text-align:right;"><strong>Price</strong></th>
<th style="text-align:center;"><strong>Action</strong></th>
</tr>	
<?php	
	$n=0;	
    foreach ($_SESSION["cart_item"] as $item){
    	$i=$item['image'];
    	$n++;
		?>
				<tr>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo "<img src='admin/itempics/$i.jpg' height='256px' width='200px'>"; ?></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["productId"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
				<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="cart.php?action=remove&productId=<?php echo $item["productId"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
<td> <a href='' id='order'>ORDER</a></td>
</tr>
</tbody>
</table>		
  <?php
}
?>
</div>

<!-- <div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM product ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="index.php?action=add&productId=<?php echo $product_array[$key]["productId"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div><strong><?php echo $product_array[$key]["brand"]; ?></strong></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
	<?php
			}
	}
	?>
</div> -->
</BODY>
</HTML>