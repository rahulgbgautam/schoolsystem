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

    * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #494848;
}

.topnav a {
  float: right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #494848;
  color: white;
}

.topnav .search-container {
  float: left;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  margin-left:1em;
  font-size: 17px;
  border: none;
  width: 30em;
  height: 2em;
}

.topnav .search-container button {
  float: right;
  padding: 5px 17px;
  margin-top: 8px;
  margin-left: 0.2em;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}


/*                          display code             */




body{
  margin:0;
  padding:0;
  background:#f2f2f2;
  font-family: 'Acme';

  background-color:#aaa;"
}

.dcontainer{
  max-width:1000px;
  margin:100px auto;
  display:flex;
  flex-wrap:wrap;
  justify-content:space-around;
}

.card{
  position:relative;
  margin:20px 0;
  width:300px;
  height:400px;
  background: #fff;
  transform-style:preserve-3d;
  transform:perspective(2000px);
  transition:1s;
  box-shadow:inset 100px 0 50px rgba(0,0,0,0.5);
}

.card:hover{
  z-index:1111;
  transform:perspective(2000px) rotate(-10deg);
  box-shadow:inset 20px 0 50px rgba(0,0,0,0.5);
}

.card .img-container{
  position:relative;
  width:100%;
  height:100%;
  border:1px solid #000;
  box-sizing:border-box;
  transform-origin:left;
  z-index:1;
  transition:1s;
}

.card .img-container img{
  position:absolute;
  left:0;
  top:0;
  height:100%;
  width:100%;
  object-fit:cover;
}

.card:hover .img-container{
  transform:rotateY(-135deg);
}

.card .card-details{
  position:absolute;
  left:0;
  top:0;
  box-sizing:border-box;
  padding:20px;
  color:#000;
}

 .card .card-details h2{
  margin:0;
  padding:0.5em 0;
  text-transform:uppercase;
  font-size:2em;
  color:#ed363a;
}

.card .card-details p{
  margin:0;
  padding:0;
  line-height:25px;
  font-size:1.1em;
}




  </style>


</head>
<body>

<div class="topnav">
  <a class="active" href="add_school.php">Add Schools </a>

</div>

    <br>
    <div class="container">
      <h1 class="text-center text-white bg-dark">  Schools Details </h1>    
    </div>


  <div class="dcontainer">

    <?php
    
    $con = mysqli_connect('localhost', 'root');

    mysqli_select_db($con, 'school') or die(mysqli_error($con));

        $schoolname = $_POST['sn'];
        $address = $_POST['addr'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $contactnumber = $_POST['cn'];
        $emailid = $_POST['eid'];
        $files = $_FILES['file'];



      /*
        $em=filter_var($emailid, FILTER_VALIDATE_EMAIL);

        echo "email";
        echo "$em";

        $cnn  =preg_match('/^[0-9]{10}+$/', $contactnumber);


        echo "numb";
        echo "$cnn";


        $pattern = "/^[a-zA-Z . - ]+$/";
        $snn=preg_match($pattern, $schoolname);


      echo "school";
      echo "$snn";


        $pattern = "/^[a-z]+$/";
        $sa = preg_match($pattern, $address);


        $pattern = "/^[a-z]+$/";
        $c=preg_match($pattern, $city); 



        $pattern = "/^[a-z]+$/";
        $s=preg_match($pattern, $state);



        if($cnn and $snn and $sa and $c and $s){

            echo "all is clear";
        }



        */

        $em ="";
        $cnn ="";
        $snn ="";
        $sa ="";
        $c= "";
        $s ="";



        // check if e-mail address is well-formed
        if (!filter_var($emailid, FILTER_VALIDATE_EMAIL)) {
              $em="false";              
        }
        else{
          $em = "true";
        }


        // mobile number validation
    

//echo "<br>";

//echo "$length ";

//echo "<br>";


//echo is_numeric($contactnumber);

if(preg_match('/^[0-9]{10}+$/', $contactnumber)) {

  $cnn = "true";
}
else{
        $cnn ="false";
}



       // school name validations

$pattern = "/^[a-zA-Z . - ]+$/";

 if (preg_match($pattern, $schoolname)) {

  $snn = "true";
}

else{
  $snn = "false";
}
 

// address validation


$pattern = "/^[a-z]+$/";

if (preg_match($pattern, $address)) {

  $sa = "true";
} 
else {
    $sa = "false";
}



// city validation 



$pattern = "/^[a-z]+$/";


if (preg_match($pattern, $city)) {

$c= "true";
} 
else {

    $c= "false";
}



// state validation 


$pattern = "/^[a-z]+$/";


if (preg_match($pattern, $state)) {

  $s="true";
} 

else {
    $s="false";
}



if ($cnn == "true" and $snn == "true"  and $sa == "true" and $c== "true" and $s== "true") {

//        print_r($schoolname);

//       echo "<br>";

    //   print_r($address);

    //  echo "<br>";

    // print_r($city);

//        echo "<br>";

//      print_r($state);

//     echo "<br>";

    //  print_r($contactnumber);

    //echo "<br>";

    //print_r($emailid);

//       echo "<br>";

//        print_r($files);

    $filename = $files['name'];

//      echo "<br>";

//    print_r($filename);

    $fileerror = $files['error'];

    //  echo "<br>";

    //print_r($fileerror);

    $filetmp = $files['tmp_name'];

    // echo "<br>";

    //   print_r($filetmp);

    $fileext = explode('.', $filename);

    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

    // echo"true";

    if (in_array($filecheck, $fileextstored)) {

    //  echo "true";

        $destinationfile = 'school_images/' . $filename;

        move_uploaded_file($filetmp, $destinationfile);

        $q = "INSERT INTO schools (name, address, city, state, contact, image,email_id) VALUES ('$schoolname',

                   '$address','$city','$state','$contactnumber','$destinationfile','$emailid')";

        $query = mysqli_query($con, $q);

        if ($query == "true") {
            //echo "inserted data in database";
        } else {
            echo mysqli_error($con);
        }

        $displayq = "select * from schools";
        $data = mysqli_query($con, $displayq);
        $total = mysqli_num_rows($data);

        if ($total != 0) {
            //echo " data are here";
            echo "<br>";

            while ($result = mysqli_fetch_assoc($data)) {
                ?>


                          <div class="card">
                            <div class="img-container">
                              <img src=" <?php echo $result['image']; ?>">
                            </div>
                            <div class="card-details">
                              <h2> <?php echo $result['id']; ?> </h2>
                              <p> <?php echo $result['name']; ?> </p>
                              <p> <?php echo $result['address']; ?> </p>
                              <p> <?php echo $result['city']; ?> </p>
                              <p> <?php echo $result['state']; ?> </p>
                               <p> <?php echo $result['contact']; ?> </p>
                                <p> <?php echo $result['email_id']; ?> </p>
                            </div>
                          </div>




                  <?php
            }
        }
    }


else {

    echo "extension is not supported , it supports only in jpg , gpeg and png ";
}





}

else{


  echo "NOt all is clear";


  if($cnn=="false")
    echo "contact is invalid"; 


  if ($snn == "false")
    echo "contact is invalid";


  if($sa=="false")
    echo "contact is invalid"; 


  if($c=="false")
    echo "contact is invalid"; 


  if ($s == "false") 
    echo "contact is invalid";



}


?>
      </div>




  <script>
  


  </script>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
