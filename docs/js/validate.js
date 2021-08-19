function hireCompany(){
    let txt=document.getElementById('hireCompany').value;
    if(txt=="0"){
        document.getElementById('hireCompanyWarn').innerHTML="*Choose your Hiring Company";
    }
    else
        document.getElementById('hireCompanyWarn').innerHTML="";
}
function post(){
    let txt=document.getElementById('post').value;
    if(txt=="0"){
        document.getElementById('postWarn').innerHTML="*Choose the Post";
    }
    else
        document.getElementById('postWarn').innerHTML="";
}
function eMail(){
    let txt=document.getElementById('eMail').value;
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(txt==0){
        document.getElementById('eMailWarn').innerHTML="*Email Address is required";
    }
    else if(!(re.test(txt)))
    document.getElementById('eMailWarn').innerHTML="*A valid Email Address is required!"
    else
        document.getElementById('eMailWarn').innerHTML="";
}
function address(){
    let txt=document.getElementById('address').value;
    if(txt==0){
        document.getElementById('addressWarn').innerHTML="*Address is required";
    }
    else if(txt.length>200){
        document.getElementById('addressWarn').innerHTML="*Maximum character limit is 200";
    }
    else
        document.getElementById('addressWarn').innerHTML="";
}
function contactNo(){
    var txt=document.getElementById("contactNo").value;
    if(txt.length==0){
        document.getElementById('contactNoWarn').innerHTML="*Contact Number is required";
    }
    else if(txt.length<10){
        document.getElementById('contactNoWarn').innerHTML="*A valid Contact Number is required";
    }
    
    else if(txt.length>10){
        document.getElementById('contactNoWarn').innerHTML="*A valid Contact Number is required. Maximum length should be 10";
    }
    else{
        document.getElementById('contactNoWarn').innerHTML="";
    }
}
function nic(){
    let txt=document.getElementById('nic').value;
    if(txt==0){
        document.getElementById('nicWarn').innerHTML="*NIC is required";
    }
    else if(!(txt.length==10 || txt.length==12)){
        document.getElementById('nicWarn').innerHTML="*A valid NIC is required";
    }
    else{
        document.getElementById('nicWarn').innerHTML="";
    }
}

function gender(){
    var gend = document.getElementsByName('gender');
    var ischecked_method = false;
    for ( var i = 0; i < gend.length; i++) {
        if(gend[i].checked) {
            ischecked_method = true;
            break;
        }
    }
    if(!ischecked_method)   { 
        document.getElementById('genderWarn').innerHTML="*Choose your Gender!";
    }
    else{
        document.getElementById('genderWarn').innerHTML="";
    }
}
function birthDate(){
    let txt=document.getElementById('birthDate').value;
    if(txt==0){
        document.getElementById('birthDateWarn').innerHTML="*Birth Date is required";
    }
    else
        document.getElementById('birthDateWarn').innerHTML="";
}
function nameInitial(){
    let txt=document.getElementById('nameInitial').value;
    if(txt==0){
        document.getElementById('nameInitialWarn').innerHTML="*Name with Initials is required";
    }
    else
    document.getElementById('nameInitialWarn').innerHTML="";      
}
function fullName(){
    let txt=document.getElementById('fullName').value;
    var re = /^[A-Za-z]+$/;
    if(txt==0){
        document.getElementById('fullNameWarn').innerHTML="*Full Name is required";
    }
    else if(!(re.test(txt)))
    document.getElementById('fullNameWarn').innerHTML="*A valid Name is required!"
    else
    document.getElementById('fullNameWarn').innerHTML="";
}
function firstName(){
    let txt=document.getElementById('firstName').value;
    var re = /^[A-Za-z]+$/;
    if(txt==0){
        document.getElementById('firstNameWarn').innerHTML="*First name is required";
    }
    else if(!(re.test(txt)))
    document.getElementById('firstNameWarn').innerHTML="*A valid Name is required!"
    else
    document.getElementById('firstNameWarn').innerHTML="";
}
function lastName(){
    let txt=document.getElementById('lastName').value;
    var re = /^[A-Za-z]+$/;
    if(txt==0){
        document.getElementById('lastNameWarn').innerHTML="*Last Name is required";
    }
    else if(!(re.test(txt)))
    document.getElementById('lastNameWarn').innerHTML="*A valid Name is required!"
    else
    document.getElementById('lastNameWarn').innerHTML="";
}