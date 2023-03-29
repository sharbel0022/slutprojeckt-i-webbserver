// Get the first element with the name "elements" and assign it to a variable
let elNum = document.getElementsByName("elements")[0];

// Get all form elements and assign to a variable
form = document.forms;

// Select the first select element and assign to a variable
type = document.querySelector("select");

// Get the first element with the name "texts" and assign it to a variable
text = document.getElementsByName("texts")[0];

// Select the element with the class "results" and assign it to a variable
results = document.querySelector(".results");

// Add a submit event listener to the first form element, which will create a specified number of elements with specified attributes and styles when the form is submitted
form[0].onsubmit = function(el) {
    el.preventDefault(); // Prevent the default form submission behavior

    // Remove all elements with the class "box"
    document.querySelectorAll(".box").forEach(el => el.remove());

    // Create the specified number of elements with specified attributes and styles, and append them to the "results" element
    for (let i = 1; i <= elNum.value; i++) {
        let myEl = document.createElement(type.value);
        let myText = document.createTextNode(text.value);

        myEl.className = "box";
        myEl.title = "Element";
        myEl.id = `id-${i}`;

        myEl.style.display = "inline-block";
        myEl.style.width = "200px";
        myEl.style.margin = "20px";
        myEl.style.padding = "10px";
        myEl.style.color = "white";
        myEl.style.backgroundColor = "blue";
        myEl.style.textAlign = "center";
        myEl.style.borderRadius = ".5rem";

        myEl.appendChild(myText);
        results.appendChild(myEl);
    }
};

// Select all elements with the class "input" and assign them to a variable
let input = document.querySelectorAll(".input");

// Select the submit button and assign it to a variable
submit = document.querySelector("[type= 'submit']");

// Select all elements with the class "box" and assign them to a variable
box = document.querySelectorAll(".box");

// Set styles for all elements with the class "input"
for (let i = 0; i < input.length; i++) {
    input[i].style.display = "block";
    input[i].style.boxSizing = "border-box";
    input[i].style.width = "250px";
    input[i].style.padding = "10px";
    input[i].style.margin = "15px auto";
    input[i].style.borderRadius = ".5rem";
    input[i].style.border = "1px solid black";
}

// Set styles for the submit button
submit.style.backgroundColor = "gray";
submit.style.display = "block";
submit.style.width = "250px";
submit.style.padding = "10px";
submit.style.borderRadius = ".5rem";
submit.style.border = "none";
submit.style.margin = "15px auto";
submit.style.color = "white";