console.log("Connected");

const arr = ["mango", "apple", "banana", "Orange"];
const arr2 = [
  {
    id: "101",
    name: "User1",
    email: "user1@gmail.com",
  },
  {
    id: "102",
    name: "User2",
    email: "user2@gmail.com",
  },
];
arr.map((fruit) => {
  console.log(fruit);
});

arr2.find((user) => user.id === "101");

arr2.map((user, index) => {
  console.log("Index: ", index);
  console.log("id: ", user.id);
  console.log("name: ", user.name);
  console.log("email: ", user.email);
});

function collectData() {
  const username = document.getElementById("username").value;
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirmPassword").value;

  if (!username) {
    document.getElementById("usernameError").innerHTML = "Username is required";
    // document.getElementById("usernameError").style.color = "red";
  } else if (username.length < 3) {
    document.getElementById("usernameError").innerHTML =
      "Username should be at least 3 char long";
    // document.getElementById("usernameError").style.color = "red";
  } else {
    document.getElementById("usernameError").innerHTML = "";
  }
  return false;
}

function getUsername() {
  const username = document.getElementById("username").value;
  console.log("Username is: ", username);
}

function getName() {
  const name = document.getElementById("name").value;
  console.log("Name is: ", name);
}
