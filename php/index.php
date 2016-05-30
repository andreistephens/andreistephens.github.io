<? php
	class user(){
		public $email;
		public $password = "guest";

		public function __construct($email){
			$this -> email -> $email;
			#$this -> password -> $password;  
		}

		public function register() {
			$subject = "Welcome to AYN!";
			$body = "We've received your interest, and will reach out when we have news. </ br> Thanks, </ br> The AYN? Team";
			$headers = "From: aynsubscribe@gmail.com";

			if (mail($email, $)) {
				$successMessage = "Thanks for registering!";
			} else {
				$emailStatus = "Something went wrong! Please try again."
			}
		}

		public function signIn() {
			//TODO get email and password from database, validate
		}
	}

	public function registrationEmail() {
		//TODO send welcome/register email to new user
	}

?>