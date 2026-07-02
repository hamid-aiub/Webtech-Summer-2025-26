console.log("Connected");


function onSubmit(){
    alert("Please click ok1 to close");
     alert("Please click ok2 to close");
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    console.log({name, email});
    if(!name){
        document.getElementById("nameError").innerHTML = "Name is required";
    }
    return false;
}