<title>Employee details </title>

<?php include('includes/header.php') ;
include('db.php');
include('session.php');

if (isset($_POST['submit_adhar'])) {
 

$adhar_no = $_POST['adhar_no'];
   
  
 $fileinfo = @getimagesize($_FILES["adharCardfile"]["tmp_name"]);

 
 $allowed_image_extension = array(
     "png",
     "jpg",
     "jpeg"   
 );
 

 $file_extension = pathinfo($_FILES["adharCardfile"]["name"], PATHINFO_EXTENSION);
 

 if (! file_exists($_FILES["adharCardfile"]["tmp_name"])) {
     $response = array(
         "type" => "danger",
         "message" => "Choose image file to upload."
     );
 }    
 else if (! in_array($file_extension, $allowed_image_extension)) {
     $response = array(
         "type" => "danger",
         "message" => "Upload valid images. Only PNG and JPEG are allowed."
     );
 }    
 else if (($_FILES["adharCardfile"]["size"] > 2000000)) {
     $response = array(
         "type" => "danger",
         "message" => "Image size exceeds 2MB"
     );
 }   
else {
     $target = "image/" . basename($_FILES["adharCardfile"]["name"]);
     if (move_uploaded_file($_FILES["adharCardfile"]["tmp_name"], $target)) {

       $sql="INSERT INTO `employee_doc`(`adharCard`, `adharCardfile`) VALUES ('$adhar_no','$target')";
     
       if (mysqli_query($con, $sql)) {
        
           }else{
             
           }
        
         $response = array(
             "type" => "success",
             "message" => "Adhar details uploaded successfully."
         );

      
      
     } else {
         $response = array(
             "type" => "danger",
             "message" => "Problem in uploading image files."
         );
     }
 }
  
  }

?>

   
<div class="container col-4   ">
<div class="d-flex flex-row-reverse">
            <div class="p-2">
                <a href="logout.php" type="submit" name="logout_user" class="btn btn-danger ">LOGOUT</a>
            </div>
            <div class="p-2"> <b> Successfully logged in - <?php echo $_SESSION['NAME']; ?></b></div>
            <!-- <div class="p-2">Flex item 3</div> -->
        </div>
<div class="card mt-5 ">
<div class="card-header d-flex justify-content-center " > <strong>Employee | Info</strong>  </div>
<div class="card-body">
<h6 class="mb-3 mt-4">

                                <?php if(!empty($response)) { ?>
                                <div class="alert alert-<?php echo $response["type"]; ?> alert-dismissible fade show"
                                    role="alert">

                                    <div class="alert-<?php echo $response["type"]; ?> ">

                                        <strong> <?php echo $response["message"]; ?></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    <?php }?>
                            </h6>

<form action="home.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" name="adhar_no" id="adharCard" class="form-label">Adhar Card</label>
    <input type="number" class="form-control" name="adhar_no" id="adharCard" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
  <label for="formFile" class="form-label">Adhar file</label>
  <input class="form-control" type="file" name="adharCardfile" id="adharCardfile" >
</div>
  


  <button type="submit" name="submit_adhar" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

<?php include('includes/footer.php') ?>