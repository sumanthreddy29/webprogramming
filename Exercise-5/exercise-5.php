<?php

?>
<!doctype unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Javascript IN CLASS Exercise - 5</title>
<script src="check.js"></script>
    
    <style type="text/css">
    #ERRORID, #ERRORFNAME, #ERRORLNAME{
    	color: red;
    	text-decoration: underline;
    }
    
   body{
   	background-color: white;
   }
    h1{
    	text-align: center;
    }
    table{
    	margin: 0px auto;
    }
    
    .btn{
  		text-align: right;
    }
    </style>
</head>
    <body>
    	<br/><h1>Javascript IN-Class Exericse - 5</h1>
    	<table>
	        <tr><td></td><td><p id="ERRORID"></p></td></tr>
	        <tr><td>ID :</td><td><input type="text" id="id" /></td></tr>
	        <tr><td></td><td><p id="ERRORFNAME"></p></td></tr>
	        <tr><td>First Name : </td><td><input type="text" id="fname" /></td></tr>
	        <tr><td></td><td><p id="ERRORLNAME"></p></td></tr>
	        <tr><td>Last Name : </td><td><input type="text" id="lname" /></td></tr>
	        <tr></tr>
	        <tr><td></td><td><button id="addBtn" onclick="checkAllFields();">ADD</button></td></tr>
	        <tr><td></td><td> <p id="msg"></p></td></tr>
        </table>
    </body>
</html>