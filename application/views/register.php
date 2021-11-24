

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script type='text/javascript' src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

<style type="text/css">
  body{
/*  <img src="<?php //echo base_url(); ?>assets/image/form.jpg" height="85" width="75">
*/  /*background-image: url('assets/image/form.jpg');
   background-image: url('../image/color.jpg');*/
/*  background-image: url("<?php //echo base_url(); ?>assets/image/form.jpg" height="888" width="755");

*/
background-image: url('https://images.app.goo.gl/NykXtGmJvMFznBmMA') ;
height:100%;
 
}

''
</style>
 
</head>
<body style="background-image= url('https://images.app.goo.gl/NykXtGmJvMFznBmMA') height=100%;">

  <div class="solution1 container-fluid"></div>
 <div class="container">





   <div class="col-md-6">
    <div class="card mt-5">
     <div class="card-header">
      <?php if(isset($_SESSION['msg'])){ ?>


        <div class="alert alert-success alert-block"><?php echo( $_SESSION['msg']);?></div>
        
         <?php //redirect('index.php/Csv_import/index');
          //  $this->load->helper('url');

// $h=$this->Csv_import->index();
// // Redirect browser
header( 'Location: http://localhost/ci/index.php/Csv_import' );

// exit;


      // return  redirect('www.googl.com'); //redirect to codeigniter tutorials on CodingTag
     
         ?>

      <?php }
      ?>
      <form  method="Post" action="<?php echo base_url().'index.php/auth/register'?>">
        <div class="form-group ,mx-auto" >
         <h1>Sign Up</h1>
         <div class="form-group">
          <label for="fullname">Full Name</label>

          <input type="text" name="full_name" id="full_name" placeholder="Full Name" class="form-control <?php echo form_error('full_name') != "" ? 'is-invalid' : '';?>"  value="<?php echo set_value('full_name')?>" required>
          <p class="invalid-feedback"><?php echo form_error('full_name')?></p>
        </div>
        <div class="form-group">
          <label for="email">Email</label>

          <input type="email" name="email" id="email" placeholder="Example@gmail.com" class="form-control <?php echo form_error('email') != "" ? 'is-invalid' : '';?>"  value="<?php echo set_value('email')?>" required>
          <p class="invalid-feedback"><?php echo form_error('email')?></p>

        </div>
        <div class="form-group">
          <label for="password">Password</label>

          <input type="Password" name="password" id="password" placeholder="Password 6 to 10 character" class="form-control <?php echo form_error('password') != "" ? 'is-invalid' : '';?>"  value="<?php echo set_value('password')?>" required>
          <p class="invalid-feedback"><?php echo form_error('password')?></p>
        </div>
        <div class="form-group form-check">


        </div>
        <button type="submit" name="register" class="btn btn-lg btn-primary" onclick="myFunction()">CREATE ACCOUNT</button>
      </div>

    </div>
  </div>
</div>
</div>
</body>
</html>
<?php
// if(isset($_POST['register'])){
// <script>


//   function myFunction() {
//   location.replace("localhost/ci/index.php/Csv_import");
// }
// </script>
// }
?>