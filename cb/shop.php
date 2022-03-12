<?php include 'include/header.php';?>
<style>
  * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Filters</h3>
  <h4 class="w3-bar-item">Categories</h4>
  <a href="#" class="w3-bar-item w3-button">Tote Bags</a>
  <a href="#" class="w3-bar-item w3-button">School Bags</a>
  <a href="#" class="w3-bar-item w3-button">Office Bags</a>
  <a href="#" class="w3-bar-item w3-button">Laptop Bags</a>
  <a href="#" class="w3-bar-item w3-button">Shirts</a>
  <a href="#" class="w3-bar-item w3-button">Sweatshirts</a>
  <a href="#" class="w3-bar-item w3-button">Tshirts</a>
  <a href="#" class="w3-bar-item w3-button">Trousers</a>
  <a href="#" class="w3-bar-item w3-button">Joggers</a>
  <h4 class="w3-bar-item">Price</h4>
  <label for="customRange2" class="form-label w3-bar-item"></label>
  <input type="range" class="form-range w3-bar-item" min="0" max="5" id="customRange2">
</div>
<div class="row">
  <div class="col-3">
  </div>
  <div class="col-9">
      <div class="card" style="width: 18rem;">
        <img src="./Images/Blue-2-850x850.jpeg" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">Waterproof Bag</h5>
            <a href="#" class="btn btn-primary">Buy Now</a>
            <a href="#" class="btn btn-primary">Add to Cart</a>
            <?php getProducts(); ?>
        </div>
      </div>
  </div>
</div>
<script>


$(document).ready(function(){

  // getProducts Function Code Starts

  function getProducts(){

  // Manufacturers Code Starts

    var sPath = '';

var aInputs = $('li').find('.get_manufacturer');

var aKeys = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

var sPath = '';

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'man[]=' + aKeys[i]+'&';

}

}

// Manufacturers Code ENDS

// Products Categories Code Starts

var aInputs = Array();

var aInputs = $('li').find('.get_p_cat');

var aKeys = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'p_cat[]=' + aKeys[i]+'&';

}

}

// Products Categories Code ENDS

   // Categories Code Starts

var aInputs = Array();

var aInputs = $('li').find('.get_cat');

var aKeys  = Array();

var aValues = Array();

iKey = 0;

    $.each(aInputs,function(key,oInput){

    if(oInput.checked){

    aKeys[iKey] =  oInput.value

};

    iKey++;

});

if(aKeys.length>0){

    for(var i = 0; i < aKeys.length; i++){

    sPath = sPath + 'cat[]=' + aKeys[i]+'&';

}

}

   // Categories Code ENDS

   // Loader Code Starts

$('#wait').html('<img src="images/load.gif">');

// Loader Code ENDS

// ajax Code Starts

$.ajax({

url:"load.php",

method:"POST",

data: sPath+'sAction=getProducts',

success:function(data){

 $('#Products').html('');

 $('#Products').html(data);

 $("#wait").empty();

}

});

    $.ajax({
url:"load.php",
method:"POST",
data: sPath+'sAction=getPaginator',
success:function(data){
$('.pagination').html('');
$('.pagination').html(data);
}

    });

// ajax Code Ends

   }

   // getProducts Function Code Ends

$('.get_manufacturer').click(function(){

getProducts();

});


  $('.get_p_cat').click(function(){

getProducts();

});

$('.get_cat').click(function(){

getProducts();

});


 });

</script>
