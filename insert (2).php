< ?php
$Username = $-POST['USERNAME'];
$EMAIL = $-POST['EMAIL'];
$MOBILE NUMBER  = $-POST['MOBILE NUMBER'];
$PASSWORD = $-POST['PASSWORD'];

// Database connection here 
$com = new mysqli("localhost"),"root","","mydb"
if($con->connect_error) {
     die("failed to connect : ".$con->connect_error);
} else { 
    $stmt = $con->prepare("insert into registration(name,email,mobile number,password) 
    values (?,?,?,?,?,?)
    $stmt->blind_param("ssssi",$name,$email,$mobile number,$password);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
    
    
}
</?php>