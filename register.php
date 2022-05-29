//This php file is used to register the client entry on the database
<?php
   require 'connection.php';//require basically imports your other api,specifically connection here is imported so as to estabilish a connection bw database and app
   $username=$_POST['username'];//$username is a variable and $_Post is used to take input of this variable and post it under username heading in the database
   $email=$_POST['email'];
   $password=md5($_POST['password']);//md5 here encrypts the password in the database so that the person who is accessing the database can also not see the password


//line 11-line 31 , first checks whether the client is already registered or not ,if not registered then registers it in the database

   $checkUser="SELECT * from user WHERE email='$email'";//checkuser is variable which basically stores email from database,select basically selects,"*" selects all entries from user database where email in databsase is equal to email entered by client
   $checkQuery=mysqli_query($con,$checkUser);//checkquery is variable which checks query using mysqli_query that is sends connection request of all variables in connection.php and then checkuser to verify if there is any entry already present and returns number of entries that matches the given condition,in this case it is email else if not present returns 0

   if(mysqli_num_rows($checkQuery)>0){
   	$response['error']="002";//this is in json format basically which is array printing of things
      $response['message']="User exist";
   }
   else
   {
   	$insertQuery="INSERT INTO user(username,email,password) VALUES('$username','$email','$password')";//insert query is variable which stores the details ie username email and password entered by the client 
   $result=mysqli_query($con,$insertQuery);//passes the query in the database,here the name of the database is user

   if($result){

      $response['error']="000";
   	$response['message']="Register successful";
   }
   else
   {
   	$response['error']="001";
      $response['message']="Registration failed!";
}

   }

   echo json_encode($response);//this encodes the array response in json format and echo(command to print)prints it




   
   	



?>