////////user class to define all the functions, this class is important to organise your code/////////////

class user {
   public function __construct(){
   }
   
   public function register_user($conn,$fname,$lastname,$mobile,$dob){
        try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO register_user ($firstname, $lastname, $mobile, $dob) 
    VALUES (:firstname, :lastname, :mobile, :dob)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':dob',$dob);

    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
        
        $num_rows= $stmt->affected_rows;
        $stmt->close();
      if($num_rows>0){
          $response['status']=1;
          return $response;
              }
         $response['status']=0;
          return $response;
   }

  public function check_login($conn, $email, $pass){
         $query = "SELECT *FROM register_table WHERE email='$email' AND password= '$pass'";
  }
}
