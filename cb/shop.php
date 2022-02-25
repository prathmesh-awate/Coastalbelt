<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Shop Page</h1>      
  </div>
</div>
<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
<h3 class="w3-bar-item">Menu</h3>
<a href="#" class="w3-bar-item w3-button">Link 1</a>
<a href="#" class="w3-bar-item w3-button">Link 2</a>
<a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Card 1</h3>
      <p><img src="" class="img-rounded" alt="product image"></p>
      <p>Some text</p>
      <button type="button" class="btn btn-danger">Add to cart</button>
      <button type="button" class="btn btn-danger">Buy Now</button>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Card 2</h3>
      <p><img src="" class="img-rounded" alt="product image"></p>
      <p>Some text</p>
      <button type="button" class="btn btn-danger">Add to cart</button>
      <button type="button" class="btn btn-danger">Buy Now</button>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 3</h3>
      <p><img src="" class="img-rounded" alt="product image"></p>
      <p>Some text</p>
      <button type="button" class="btn btn-danger">Add to cart</button>
      <button type="button" class="btn btn-danger">Buy Now</button>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 4</h3>
      <p><img src="" class="img-rounded" alt="product image"></p>
      <p>Some text</p>
      <button type="button" class="btn btn-danger">Add to cart</button>
      <button type="button" class="btn btn-danger">Buy Now</button>
    </div>
  </div>
</div>


<footer class="container-fluid text-center">
 
</footer>

</body>
</html>