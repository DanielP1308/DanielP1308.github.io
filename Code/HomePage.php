<?php
    $path = "navPreset.php";
    include($path);
    
	if(!isset($_SESSION['user'])) {
		echo "	<script type='text/javascript'>alert('You are not logged in. Please login!');
						javascript:window.location.href = 'loginScreen.php' ;
				</script>";
	}
?>      
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
.column {
  -ms-flex: 50%;
  flex: 50%;
  padding: 0 4px;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    margin-bottom: 1%;
}
.box {
    position: absolute;
    left: auto;
    right: 25%;
    padding-bottom: 5px;
}
.button {
    width: 25%;
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: inline-block;
}
.buttonUp {
    width: 25%;
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left:25%;
}
.container {
    width: 50%;
    margin-left: 25%;
}
.hide {
    display: block;
}
</style>
</head>
<script>
$(function(){
    $.ajax({
        url: 'imageLoad.php', data: "", dataType: 'json',  success: function(rows)        
        {
            for (var i in rows)
            {
                var row = rows[i];          

                var id = row[0];
                $("#main").html('<img alt="Images" title="Map Image" src="'+ id +'"class="center" />');
            } 
        } 
    });
});    

</script>
<body>
<!-- Photo Grid -->
<form method="post" action="upload.php" enctype="multipart/form-data">
    <div style="text-align: center">
        <textarea style="resize: none" class="center" cols="50" rows="8" name="post" id="post"></textarea>
        <input type="file" name="fileToUpload" id="fileToUpload" class="button">
        <input type='submit' value='Submit' class="button" name="submit" /> 
    </div>
</form>
<div class="column" id="main"></div>
</body>
</html>