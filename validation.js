
 function checkEmail() {

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


var passid1_len=document.registration.pass.value.length;
var passid2_len=document.registration.passw.value.length;
var userid_len=document.registration.username.value.length;
var pass1=document.registration.pass.value;
var pass2=document.registration.passw.value;


	

if (userid_len >12 || userid_len <3)

alert("Username length should not be less than 3 or greater than 12"); 


 if (passid1_len >12 || passid1_len < 6)

alert("Password length should  be between 6 to 12"); 



if(pass1 != pass2 || passid1_len==0 || passid2_len==0)

alert("Password did not matched.Please re-enter");



if (!filter.test(email.value)) 
   alert('Please provide a valid email address');
   
 
}




 



