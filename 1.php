<?php
// mysql connection
include("dbconnect.php");


// fetch records
$result =mysql_query("SELECT * FROM  sentmail");
// delete records
if(isset($_POST['submit']))
{
   echo  $arr = $_POST['chk_id'];
     foreach ($arr as $id) {
	  // $id;
       mysql_query("DELETE FROM sentmail WHERE id ='$id'");
     }
    $msg = "Deleted Successfully!";
   // header("Location: index.php?msg=$msg");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Multiple Rows Using PHP & MySQL</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>
<body>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="" method="post">
            <?php if (isset($_GET['msg'])) { ?>
            <p class="alert alert-success"><?php echo $_GET['msg']; ?></p>
            <?php } ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th><input id="chk_all" name="chk_all" type="checkbox"  /></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email ID</th>
                    <th>City</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$a=0;
				 while($row = mysql_fetch_array($result)) { ?>
                <tr>
                    <td><input name="chk_id[<?php echo  $a; ?>]" type="checkbox" class='chkbox' value="<?php echo $row['id']; ?>"/><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                </tr>
                <?php  $a++; }  ?>
                </tbody>
            </table>
            <input id="submit" name="submit" type="submit" class="btn btn-danger" value="Delete Selected Row(s)" />
            </form>
        </div>
    </div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#chk_all').click(function(){
        if(this.checked)
            $(".chkbox").prop("checked", true);
        else
            $(".chkbox").prop("checked", false);
    });
});

$(document).ready(function(){
    $('#delete_form').submit(function(e){
        if(!confirm("Confirm Delete?")){
            e.preventDefault();
        }
    });
});
</script>
</body>
</html>