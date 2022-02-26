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
        </div>
      </div>
  </div>
</div>

