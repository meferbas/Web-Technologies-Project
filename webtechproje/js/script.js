function FormKontrol(){

    let x = document.forms["myForm"]["isim"].value;
    let y=document.forms["myForm"]["email"].value;
    let z=document.forms["myForm"]["mesaj"].value;


  
    if (x == "") {
      alert("Lütfen isim giriniz");
      return false;
    }
    if(y==""){
        alert("Lütfen mail giriniz");
        return false;
    }
    
    if(z==""){
        alert("Lütfen bana ileteceğiniz mesajı giriniz.");
        return false;
    }
    
}
function DegerYazdir(){
    var isim= document.getElementById("isim").value;
    var email=document.getElementById("email").value;
    var mesaj=document.getElementById("mesaj").value;
    localStorage.setItem("isim", isim);
    localStorage.setItem("email", email);
    localStorage.setItem("mesaj", mesaj);



}

    



