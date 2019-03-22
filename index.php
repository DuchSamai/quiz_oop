
<?php 

include "header.php";
include "src/cal.php";

?>
<div class="container mt-4">
<div class="row">
 <div class="col-6">
 <div class="card">
    <div class="card-body">
      <form action="#" method="POST">
            <div class="form-group">
            <span>Name</span><br>
             <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="form-group">
            <span>Gender</span><br>
            <select name="" id="">
            <option type="" name="gender" id="" class="form-control" value="Male">Male
            <option type="select" name="gender" id="" class="form-control" value="Femal">Femal
            </select>
            
            </div>
            <div class="form-group">
            <span>Province</span><br>
             <input type="text" name="province" id="" class="form-control">
            </div>
            <div class="form-group">
            <span>Email</span><br>
             <input type="email" name="email" id="" class="form-control">
            </div>

            <div class="form-group">
            <br>
           <button type="submit" class="btn btn-success" name="submit_data">submit</button>
            </div>

      </form>
    </div>
 </div>
 </div>
 <div class="col-6">
 <?php 

if(isset($_POST[('submit_data')])){

  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $province=$_POST['province'];
  $email = $_POST['email'];

  $data = new calculate($name,$gender,$province,$email);
  $data->name=$name;
  $data->province=$province;
  $data->gender=$gender;
  $data->email=$email;


};


?>
<div class="card">
 <h3>Name:<?php echo $name?></h3>
 <h3>Gender:<?php echo $gender?></h3>
 <h3>Province:<?php echo $province?></h3>
 <h3>Email:<?php echo $email?></h3>
</div>


 </div>
</div>

</div>

