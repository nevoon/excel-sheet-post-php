$mode = false;
        $error = false;
        $der = array();

date_default_timezone_set("Asia/Calcutta");
if(isset($_POST['submit'])){
    $quantity = array();
    $medicine = array();
    foreach ($quantity as $value) {
        # code...
        if (empty($value)) {
            # code...
            $error = true;

        }
    }

    foreach ($medicine as $value) {
        # code...
        if (empty($value)) {
            # code...
            $error = true;

        }
    }

    if($error = false){


        $quantity = $_POST['Qty'];
        $medicine = $_POST['Drug'];
        $mode = true;

        

        
        $re = count($quantity);

        for ($i=0; $i < $re; $i++) { 
            # code...
            $der[$i]['medicine'] = $medicine[$i];
            $der[$i]['qty'] = $quantity[$i];
        }

    }
    
}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>My HTML Form</title>
  <style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Grenze&display=swap');
.blogdesire-body{
  background-image: linear-gradient(-20deg, #ff2846 0%, #6944ff 100%);
  background-repeat: no-repeat;
  min-height: 109vh;
   font-family: 'Grenze', serif;
}
.blogdesire-wrapper{
   padding: 20px;
   width: 100%;
   margin: auto;
   box-shadow: 0px 8px 60px -10px rgba(13, 28, 39, 0.6);
   background: #fff;
   border-radius: 12px;
   max-width: 700px;
   position: relative;
}
.blogdesire-heading{
  display: block;
  text-align: center;
  font-size: 30px;
  color: #6944ff;
}
.blogdesire-form{
 
}
.blogdesire-form input{
  width: 96%;
  border: 1px solid #6944ff;
  color: #6944ff;
  padding: 2%;
  border-radius: 20px;
  margin-top: 15px;
  font-family: 'Grenze', serif;
}
.blogdesire-form input:last-child{
  background: #6944ff;
  color: #fff;
  width: 20%;
}

.flit{
  display: inline-block;
   width: 100%;
   margin-top: 15px;
   justify-content: center;
   text-align: center;
}
.flit input{
 width: 40%;
  border: 1px solid #6944ff;
  color: #6944ff;
  padding: 2%;
  border-radius: 20px;
  
  font-family: 'Grenze', serif;
}

.flit input:last-child{
  background: #6944ff22;
  color: black;

}
</style>
</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    <div class="blogdesire-heading">
      Dispensary, C.H.C. Sampla


    </div>

<?php if ($mode == false):?>
<form  method="post">


<input type="text" name="OPD" placeholder="Enter OPD No." required autocomplete="off"> <br>
<div>

  <?php for($i = 0; $i < 10; $i++):?>
  <div class="flit">
<input type="text" name="Drug[]" placeholder="Select Medicine Name" required autocomplete="off" > 
<input type="number" name="Qty[]" placeholder="Select Qty." required autocomplete="off" > 
</div><br>
  <?php endfor;?>
  <br>
</div>

<input style="float: right;margin-top: 5%;" type="submit" name="submit" value="Submit" class="blogdesire-submit">
    </form>
<?php endif;?>
  </div>
<?php if($mode == true):?>
<table id="tableokay" >
  <thead>
    <tr>
      <th>Medicine</th>
       <th>Qty</th>
    </tr>
  </thead>
  <tbody>


  <?php if(is_array($der)):?>
    <?php foreach($der as $k):?>

<tr>
<td><?=$k['medicine']?></td><td><?=$k['qty']?></td>
</tr>
<?php endforeach; ?>

<?php endif; ?>

   </tbody>
    
  </table>

  <a download="tableokay.xls" href="#" onclick="return ExcellentExport.excel(this,'tableokay','Submitted Prescription');">
  Export to excel</a>
<?php endif; ?>
</body>
</html>

<script type="text/javascript" src="<?=ASSETS . THEME?>admin/js/excellentexport.js"></script>