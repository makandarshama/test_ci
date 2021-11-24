    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Csv_import extends CI_Controller
    { 


      function index()
      {


        $this->load->view('csv_import');
        $this->load->database();


        

        if(isset($_POST['import_csv']))
        {
          $r=1;
          $filename = $_FILES['csv_file']['tmp_name'];

          if(($file = fopen($filename, 'r'))!== false)
          //   $s=count($file);
          // echo("<br>".$s."<br>");
          {
            while(($row = fgetcsv($file,1000,","))!==false)
            {
              $num=count($row);
            //  echo ("<br>".$num."<br>");
              $r++;
               $row++;
              for($c=1;$c<$num;$c++){
                $value = "'".implode("','",$row)."'";
                $q="INSERT INTO my_users(full_name,email) values(".$value.")";
               // echo ($q);
              }
               $row++;
  
            }
            fclose($file);
          }
  //$this->db->insert('my_users',$formArray);
              if($this->db->query($q)) {
                echo '<script type="text/javascript">';
    echo ' alert("Your data is imported successfully")';  //not showing an alert box.
    echo '</script>';

  }
  else
  {
                //$this->csv =false;
    echo $this->error;
  }
}
   //        if($this->db->query($q)) {
   //          echo '<script type="text/javascript">';
   //  echo ' alert("Your data is imported successfully")';  //not showing an alert box.
   //  echo '</script>';

   // }
   //  else
   //  {
   //              //$this->csv =false;
   //    echo $this->error;
   //  }

   //  }







}
}
              /**
               * 
               */
              ?>