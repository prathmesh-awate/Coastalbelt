<!DOCTYPE html>
<html lang="en">
<head>
  <title>NAV BAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Coastalbelt</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">MEN</a></li>
      <li><a href="#">WOMEN</a></li>
      <li><a href="#">UNISEX</a></li>
      <li><a href="#">CORPORATE GIFTS</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>

<div class="container">
  <h3>Navbar Forms</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ipsam recusandae nulla. Ducimus voluptates blanditiis quae excepturi asperiores, perferendis laudantium ex nemo ipsam debitis, quidem deserunt mollitia aspernatur nulla enim.</p>
  <p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>
  <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind it as a "help text".</p>
  <p>The .input-group-btn class attaches a button next to an input field. This is often used as a search bar:</p>
</div>

</body>
</html>