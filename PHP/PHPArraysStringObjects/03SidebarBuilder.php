<?php function PrintSideBar($name,$data) 
{ ?>
      <div class='bar'>
          <h3><?php echo $name; ?></h3>
          <hr/>
          <ul>
              <?php
              foreach ($data as $value) : ?>
              <li>
                  <?php echo $value; ?>
              </li>
              <?php endforeach ?>    
             
          </ul>
      </div>
<?php } ?>   



<html>
<head>
<meta charset="UTF-8">
<title>SidebarBuilder</title>
<style>
    input[type='text']{
        width:300px;
    }
    h3{
        margin: 0;
        padding-top: 20px;
        text-align: center;
    }
    .bar{
        width:130px;
        background: #C1D2EA;
        border-radius: 25px;
        padding-left: 3px;
        padding-bottom:10px;
        margin:20px;
    }
    .bar ul li{
        list-style-type:circle;
    }
</style>
</head>
<body>
    
<form action="" method="post">
    <label>Categories:</label>
    <input type='text' name="cat"><br>
    <label>Tags:</label>
    <input type='text' name="tags"><br>
    <label>Months</label>
    <input type='text' name="months"><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    if(isset($_POST['cat'] ) && isset($_POST['tags'] ) && isset($_POST['months'] )){
        $names=array("Categories","Tags","Months");
        $data[0]=explode(', ',$_POST['cat']);
        $data[1]=explode(', ',$_POST['tags']);
        $data[2]=explode(', ',$_POST['months']);
        for ($i=0; $i <3; $i++) { 
	         PrintSidebar($names[$i],$data[$i]);
        }
        
    }
?>
</body>
</html>
