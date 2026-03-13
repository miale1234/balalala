let contacts = JSON.parse(localStorage.getItem("contacts")) || [];

function displayContacts(){

let list = document.getElementById("contactList");
list.innerHTML="";

contacts.forEach((c,index)=>{

list.innerHTML += `
<tr>
<td>${c.nume}</td>
<td>${c.telefon}</td>
<td>${c.email}</td>

<td>
<button onclick="editContact(${index})">Edit</button>
<button onclick="deleteContact(${index})">Delete</button>
</td>

</tr>
`;

});

localStorage.setItem("contacts",JSON.stringify(contacts));

}

function addContact(){

let nume = document.getElementById("nume").value;
let telefon = document.getElementById("telefon").value;
let email = document.getElementById("email").value;

contacts.push({nume,telefon,email});

displayContacts();

}

function deleteContact(index){

contacts.splice(index,1);
displayContacts();

}

function editContact(index){

let c = contacts[index];

let newName = prompt("Nume:",c.nume);
let newTel = prompt("Telefon:",c.telefon);
let newEmail = prompt("Email:",c.email);

contacts[index] = {
nume:newName,
telefon:newTel,
email:newEmail
};

displayContacts();

}

displayContacts();