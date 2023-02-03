<?php
    // interface declaration
    interface WebApp {
    
        public function login($email, $password);
        
        public function register($email, $password, $username);
        
        public function logout();
        
    }


    // class declaration
    class Login implements WebApp {

        public $email;
        public $password;
        public $username;
    
        // methods definition

        public function register($email, $password, $username) {
         echo "User registered: Email=".$email." <br> password= ".$password." <br> Username=".$username;
            $this->email = $email;
            return $email;
            $this->password = $password;
            return $password;
            $this->username = $username;
            return $username;
            
        }


        public function login($email, $password) {
            echo "<br>Login the user with email: " . $email ."    and password=".$password;
            $this->email = $email;
            return $email;
            $this->password = $password;
            return $password;
        }
        
        
        
        public function logout() {
            echo "<br>User logged out!";
        }
        
    }
    /*
      $ld= new Login();
      $this->email = $email;
      //echo '<pre>'; print_r($email); echo '</pre>'; exit();
      echo $ld->login("isha@123", "123"); //create error
      */
                    $ld= new Login();
                    $ld->register("isha@123","123","isha");
                    $ld->login("isha@1912","123");
                    $ld->logout();
                    
    

    
?>