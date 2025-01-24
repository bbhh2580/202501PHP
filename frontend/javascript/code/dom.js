let heading = document.getElementById("title");
console.log(heading.textContent);

let items = document.getElementsByClassName("item");
console.log(typeof items);
console.log(items[0].textContent);

let paragraphs = document.getElementsByTagName("p");
console.log(paragraphs[0].textContent);

let button = document.querySelector("btn");
console.log(button);

let buttons = document.querySelectorAll('btn');
console.log(buttons.length);

let title = document.querySelector("a");
title.textContent = "New Title";

let link = document.querySelector("a");
link.setAttribute("href", "https://www.google.com");
link.textContent = "Google";

let box = document.querySelector(".box");
box.style.backgroundColor = "red";
box.style.width = "100px";
box.style.height = "100px";
box.style.border = "1px solid black";
box.style.margin = "10px";
box.style.padding = "10px";
box.style.textAlign = "center";


let list = document.getElementById("list");
let item = document.querySelector('li');
let newItem = document.createElement('li');
newItem.textContent = "New Item";
newItem.style.color = "red";
list.appendChild(newItem);

