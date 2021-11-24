<!--<?php
//$this->load->controller('csv_import');
 // if( isset($_POST['import_csv']))
 //           {
 //            $this->Csv_import->index($_FILES['csv_file']['tmp_name'])
 //            //var_dump($_FILES['csv_file']);
          
 //            }
?>-->

<!-- <?php
//$this->load->Csv_import_model;
//$data=$this->Csv_import_model->fetch($data);
?> -->



<html>
<head>
  <title>Thank You!</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
   body{
    background-image: url("https://images.app.goo.gl/NykXtGmJvMFznBmMA");
    background-image: url("<?php echo base_url();?>'assets/image/form.jpg'"); 
    <img src="<?php echo base_url();?>'assets/image/form.jpg'">
    
  }
  .sm{
    margin-top: 100px;
  }
  .sm1
  {
    align:center;
</style>
</head>
<body   style="background-image= url("https://images.app.goo.gl/NykXtGmJvMFznBmMA");" class="w-100 p-3 bg-danger bg-darken-xl border">

<!-- <img src="thank.jpg"> -->
 <div class=" sm container box text-center my-4">
  <h3 align="center">Thank you for signing up</h3>
  
  <form method="POST" id="import_csv" align="center" enctype="multipart/form-data">
   <div class=" form-group text-center my-4">
    <div class=" d-flex justify-content-center">
      <div class="sm1">
      <label>Select CSV File</label>
      <input type="file" name="csv_file" id="csv_file"   required accept=".xls,.xlsx,.csv" />
    </div>
   
    </div>
    <br />
    <button type="submit" name="import_csv"  class="btn btn-info" id="import_csv_btn">Import CSV</button>
  </div>
</form>
<br />
<div id="imported_csv_data"></div>
</div>
 
 </body>
 </html>
