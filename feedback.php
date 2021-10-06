<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>userfeedback</title>
</head>
<style>
    body{
        background-color: #e3e3e3;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<?php         
        if (isset($_POST['submit'])) {
            $name = test_check($_POST['name']);
            $textarea = test_check($_POST['textarea']);

            $name_error = '';
            $textarea_error = '';

            if (empty($name)) {
                $name_error = 'please under your name!';
            }elseif(empty($textarea)){
                $textarea_error = 'please feedback to developer!';
            }

            if (!empty($name) && !empty($textarea)) {
               $sql = "INSERT INTO phpdatabase (name,feedback) VALUES ('$name','$textarea')";
               if (!mysqli_query($conn,$sql)) {
                   echo 'Error :' . $sql . mysqli_error($conn);
               }               
               header('location:index.php'); 
            }
        }  
        function test_check($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }  
        mysqli_close($conn);    
    ?>
<body>    
    <div class="container-fluid">
        <form action="feedback.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput" class="form-label display-2 text-uppercase">Name</label>
                <input type="text" class="form-control <?php if($name_error != ''){?>is-invalid <?php }?>" value="<?php echo $name ?>" name="name" id="exampleFormControlInput1" placeholder="your name">
                <i class="text-danger"><?php echo $name_error ?></i>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label display-2 text-uppercase">Suggestions</label>
                <textarea class="form-control <?php if($textarea_error != ''){?>is-invalid <?php }?>" value="<?php echo $textarea ?>" name="textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
                <i class="text-danger"><?php echo $textarea_error ?></i>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-secondary mb-3" name="submit">Suggest!</button>
            </div>
        </form>
        <a href="index.php">HOME</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>