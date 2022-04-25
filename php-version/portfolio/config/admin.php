<?php
    //connecting to databse 
    require("../config/constants.php");
    
    //print_r($_POST);
    //update sections 
    if(isset($_POST['update-section'])){
        $home = $_POST['home'] ?? 0;
        $about = $_POST['about'] ?? 0;
        $service = $_POST['service'] ?? 0;
        $portfolio = $_POST['portfolio'] ?? 0;
        $contact = $_POST['contact'] ?? 0;

        //query 
        $query = "UPDATE section_contro SET ";
        $query.= "home_section= '$home',";
        $query.= "about_section= '$about',";
        $query.= "service_section= '$service',";
        $query.= "portfolio_section= '$portfolio',";
        $query.= "contact_section= '$contact' WHERE id=1 ";

        $run = mysqli_query($db, $query);
       // $s_data = mysqli_fetch_array($run);
        //print_r($s_data);

        if($run){
            echo "<script>window.location.href='../admin/index.php';</script>";
        }
    }
    ///////////////////////////////////
    //////  Update home section //////
    /////////////////////////////////
    if(isset($_POST['update-home'])){
       // print_r($_POST);
       // print_r($_FILES);
        $name = mysqli_real_escape_string($db, $_POST['name']);
        echo $name;
        //$title = $_POST['title'];      // mysqli_real_escape_string($db, $_POST['title])=> if we get any error
        $title = mysqli_real_escape_string($db, $_POST['title']);
        $image_name = time().$_FILES['pro_pic']['name'];
        $image_temp = $_FILES['pro_pic']['tmp_name'];

        if($image_temp == ''){
            $q = "SELECT * FROM home WHERE 1";
            $r = mysqli_query($db, $q);
            $d = mysqli_fetch_array($r);

            $image_name = $d['profile_pic'];

        }
        
        if(move_uploaded_file($image_temp, "../images/$image_name")){
            //query 
            // $query = "UPDATE home SET ";
            // $query.= "name= '$name',";
            // $query.= "title= '$title',";
            // $query.= "profile_pic= '$image_name' WHERE id=1 ";
            $query = "UPDATE home
                      SET profile_name = '$name', profile_title = '$title', profile_pic = '$image_name'
                      WHERE id = 1";

            $run = mysqli_query($db, $query);

            if($run){
                echo "<script>window.location.href='../admin/index.php?homesetting=true';</script>";
            }         
        }
    }
    /////////////////////////////////////
    //////  Update about section  //////
    ////////////////////////////////////
    if(isset($_POST['update-about'])){
        // print_r($_POST);
         $about_title = $_POST['about_title'];
         $despricption_1 = $_POST['desc_1'];      // mysqli_real_escape_string($db, $_POST['title])=> if we get any error
         $despricption_2 = $_POST['desc_2'];

        //  echo "Holaaaa....";
        //  echo $despricption_1;
        //  echo $about_title;
        //  echo $despricption_2;

         //query 
         $query = "UPDATE about 
                    SET title = '$about_title', description_1 = '$despricption_1', description_2 = '$despricption_2' 
                    WHERE id=1";
        //  $query.= "title= '$about_title',";
        //  $query.= "description-1= '$despricption_1',";
        //  $query.= "descripttion-2= '$despricption_2'";
 
         $run = mysqli_query($db, $query);
 
         if($run){
             echo "<script>window.location.href='../admin/index.php?aboutsetting=true';</script>";
         }
     }

     ///////////////////////////////////
     ///// Update Service Section //////
     ///////////////////////////////////
     
      

?>