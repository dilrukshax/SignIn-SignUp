<?php 
   session_start();

   include("config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<head>
    <title>Profile</title>
</head>
<body>
<?php
  require "header.php";
  ?>
   

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }

            if(isset($_POST['delete_profile'])) {
              $id = $_SESSION['id'];
           
              $delete_query = mysqli_query($con, "DELETE FROM users WHERE Id=$id");
              if($delete_query) {
                 
                  header("Location: logout.php");
                  exit;
              } else {
                 
                  echo "Error deleting profile.";
              }
          }
            ?>
            

    <main> 
       
        

       <div class="main-box top">
         <h1 class="title">Profile</h1>
          <div class="top ">
          <div class="bottom"> 
          <div class="bottom"> 

            <div class="box">
              <p> Name : <b><?php echo $res_Uname ?></b></p>
            </div>
            </div>
            <div class="bottom"> 
            
            <div class="box">
                <p>Email : <b><?php echo $res_Email ?></b></p>
            </div> 
            </div>
            <div class="bottom"> 

            <div class="box">
                <p>Age : <b><?php echo $res_Age ?></b></p> 
            </div>
            </div>

            </div>
          </div>
          <div class="top">           
          <a href="logout.php"> <button class="btn">Log Out</button> </a> 
          <a href="edit.php?Id=<?php echo $res_id ?>"><button class="btn"> Edit </button></a> 
          <form action="" method="post">
            <button class="btn" name="delete_profile">Delete Profile</button>
          </form>
          </div>
          
          
            
       </div>
   

    </main>
</body>
</html>