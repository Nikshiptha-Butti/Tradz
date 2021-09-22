 function validateform(){  
var email=document.myform.email.value;  
var password=document.myform.password.value; 
var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
  
if (email==null || email==""){  
  alert("Please Enter Email Id");  
  return false;  
}else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){
    alert("Please Enter Valid Email Id");
    return false;
}else if(password.length<8){  
  alert("Password must be 8 characters long.");  
  return false;  
  }  
}  