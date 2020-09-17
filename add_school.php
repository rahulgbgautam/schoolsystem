<!DOCTYPE html>
<html lang="en">
<head>
  <title> Assignment </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <style>

body{

background-color: dimgrey;
}


  </style>






</head>
<body>


<div class="container">
    
    
    <br>
    <h1  class="text-white bg-dark text-center"> 
        Enter Schools Details
    </h1>

    <div class="col-lg-8 m-auto d-block">

    <form action="show_school.php" method="POST" enctype="multipart/form-data">

        <br>
        <div class="form-group">
            <label for="sn">  NAME </label>
            <input type="text" name="sn" id="sna" class="form-control" autocomplete="off">        
        </div>

                <br>
        <div class="form-group">
            <label for="addr">  ADDRESS </label>
            <input type="text" name="addr" id="addra" class="form-control" autocomplete="off">        
        </div>

                <br>
        <div class="form-group">
            <label for="city">  CITY </label>
            <input type="text" name="city" id="citys" class="form-control" autocomplete="off">        
        </div>


                <br>
        <div class="form-group">
            <label for="st">  STATE </label>
            <input type="text" name="state" id="states" class="form-control" autocomplete="off">        
        </div>


                <br>
        <div class="form-group">
            <label for="cn">  CONTACT </label>
            <input type="number" name="cn" id="cnum" class="form-control" autocomplete="off">        
        </div>


                <br>
        <div class="form-group">
            <label for="eid">  EMAIL ID  </label>
            <input type="text" name="eid" id="eide" class="form-control" autocomplete="off">        
        </div>

                <br>
        <div class="form-group">
            <label for="file">  SCHOOL PICS </label>
            <input type="file" name="file" id="files" class="form-control" autocomplete="off">        
        </div>

        <br>
        <br>
        
        <input type="submit" name="submit " value="submit" class= "btn btn-success" autocomplete="off">

    </form>

    </div>

</div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
