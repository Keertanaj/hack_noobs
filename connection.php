//Used to estabilish a connection between the local host server and the app using this file

<?php 
    $hostName='localhost';//by default entry of local host
    $userName='root';//Note:for local host it is by default root but when creating a online host server you need to enter username given by the host server
    $userPass='';//Note:for local host it is by default password is blank but when creating a online host server you need to enter password given by the host server
    $dbName='userdata';//It is the name of the sql database that you create using xammp server or some other appliation

    $con=mysqli_connect($hostName,$userName,$userPass,$dbName);//mysqli_connect takes arguments and connects the sql database with the app
 //    if(!$con){

 //    	echo "connection failed";
 //    }
 //    else
 //    	echo "connection success";

 // ?>