////////user class all define all the functions this class in order to organise your code/////////////

class user {
   public function __construct(){
   }
   
   public function register_user($conn,$fname,$lastname,$mobile,$dob){
        $query= "INSERT INTO register_table VALUES ('$fname','$lastname','$mobile','$dob')";
        
   }

  public function check_login($conn, $email, $pass){
         $query = "SELECT *FROM register_table WHERE email='$email' AND password= '$pass'";
  }
}
