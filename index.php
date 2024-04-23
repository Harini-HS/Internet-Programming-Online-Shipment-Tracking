<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShipRocket Delivery</title>
    <link rel="stylesheet" href="index.css">
<script> 
    function formvalidation() { 
    var x = document.forms["regform"]["uname"].value; 
    var y = document.forms["regform"]["city"].value; 
    var z = document.forms["regform"]["mno"].value;
     if (x == ""||x==null) { 
       window.alert("Name must be filled out");
        return false; 
    }  
    if (y == ""||y==null) { 
        alert("City must be filled out"); 
        return false; 
    } 
    if (z == ""||z==null) { 
        alert("enter mobile no");
     return false;
     } 
    if(z.length<10){ 
    alert("enter 10 digit"); 
    return false; 
    }
}
</script>
</head>
<body>
    <div class="rrr">
    <h1>Welcome to ShipRocket</h1>   
    <!--<img src="./bg.jpg" alt="bg">-->
    <h2>One place for all your shipment details</h2>
   </div>
    <div class="box">
        <form id="regform"  onsubmit="return formvalidation()" method="post" action="addprocess.php">
            <h3>Enter the details:</h3><br>
            <b> Name:</b><br>
            <input type="text" placeholder="name" name="uname"><br><br>
            <b>City:</b><br>
            <input type="text" placeholder="City" name="city"><br><br>
            <b>Mobile no:</b><br>
            <input type="text" placeholder="contact no" name="mno"><br><br>
            <center>
                <button class="btn">
                    <a type="button" href="tracking.php">Submit</a>
                </button> 
            </center>
        
        </form>
    </div>
    
</body>
</html>