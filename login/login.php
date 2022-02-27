<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>LOGIN FORM</h2>

                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary"> login </button>

                </form>
            </div>
            <div class="col-lg-6">
                <h2>SIGNIN FORM</h2>

                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary"> signin </button>

                </form>
            </div>

        </div>
    </div>
    
</body>
</html>