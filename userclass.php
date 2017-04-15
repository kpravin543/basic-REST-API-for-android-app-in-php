class user {
   public function __construct(){
   }
   
   public function register_user($conn,$fname,$lastname,$mobile,$dob){
        $query= "INSERT INTO register_user VALUES ('$fname','$lastname','$mobile','$dob')";
        
   }
}
