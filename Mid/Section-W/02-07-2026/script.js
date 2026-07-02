console.log("Connected");


function onSubmitForm(){
    // alert("Please click ok1 to close");
    //  alert("Please click ok2 to close");
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    console.log({name, email});
    if(!name){
        document.getElementById("nameError").innerHTML = "Name is required";
    }else if (name.length<6){
      document.getElementById("nameError").innerHTML = "Name should be at least 6 char long";  
    }
    return false;
}