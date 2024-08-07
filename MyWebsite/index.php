<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color:#c3c8ff;
        }
        .form-container {
            margin-top: 100px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .button-color{
            background-color:#c37be3;
            border: 2px solid #fff;
        }
        .button-color:hover,
        .buton-color:focus{
            background-color: #D8BFD8; 
            border: 2px solid #fff;
        }
        </style>
        
</head>
<body> 
<div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="form-container">
            <h2 class="text-center ">Form</h2>
            <form action="formhandler.php" method="POST">
                <div class="form-group">
                    <label for="number">Number:</label>
                    <input required id="number" type="number" class="form-control" name="number" placeholder="Number...">
                </div>
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input id="firstname" type="text" class="form-control" name="firstname" placeholder="First Name...">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Last Name...">
                </div>
                <div class="form-group">
                    <label for="favouritepet">Favourite Pet:</label>
                    <select id="favouritepet" name="favouritepet" class="form-control">
                        <option value="none">None</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="bird">Bird</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block button-color" name="submit">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
