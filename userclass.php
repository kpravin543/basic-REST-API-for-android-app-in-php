////////user class all define all the functions this class in order to organise your code/////////////

class user {
   public function __construct(){
   }
   
   public function register_user($conn,$fname,$lastname,$mobile,$dob){
        $stmt = $conn->prepare("INSERT INTO register_table (FirstName,LastName,Mobile,DOB) 
        VALUES ($fname, $lname, $mobile, $DOB)");
        $stmt->bindParam(':nam', $txtNam);
        $stmt->bindParam(':add', $txtAdd);
        $stmt->bindParam(':cit', $txtCit);
        $stmt->execute();
       
      if($num_rows>0){
          $response['status']=1;
          $response['message']='success';
         
          return $response;
              }
         $response['status']=0;
          $response['message']='failed';
         
          return $response;
   }

  public function check_login($conn, $email, $pass){
         $query = "SELECT *FROM register_table WHERE email='$email' AND password= '$pass'";
  }
}
