
const createNewT= document.getElementById("nava");
const login= document.getElementById("navb");
const btn =document.querySelector(".btn");
const form1 = document.getElementsByClassName("form1");
const form2 = document.getElementsByClassName("form2");




createNewT.addEventListener("click",()=>{
   window.open('createnewticket.php');
});

login.addEventListener("click",()=>{
    window.open('database.php');
    
 });







