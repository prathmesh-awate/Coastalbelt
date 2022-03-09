<?php
function component($productname,$productprice,$productimage,$productid){
    $element="<div class='col-md-4 col-sm-6'>
    <div class='product-grid'>
        <div class='product-image'>
            <a href='single_product.php?product&id=$productid'>
                <img class='pic-1' src='./uploads/$productimage'>
            </a>
                <span class='product-discount-label'>-20%</span>
        </div>
        <div class='product-content>
            <h3 class='title'>
                <a href='single_product.php?product&id=$productid'>$productname</a>
            </h3>
            <div class='price'>$productprice
                <span>$20.00</span>
            </div>
        </div>
        <ul class='social'>
            <li><a href='' data-tip='Quick View'><i class='fa fa-eye'></i></a></li>
            <li><a href='' data-tip='Wishlist'><i class='fa fa-heart'></i></a></li>
            <li><a href='' data-tip='add to cart'><i class='fa fa-shopping-cart'></i></a></li>
            <li><a href='' data-tip='Compare'><i class='fa fa-random'></i></a></li>
        </ul>
    </div>
</div>";
echo $element;
}


?>