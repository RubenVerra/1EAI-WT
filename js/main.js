window.alert("welkom bij mijn javascript pagina");

//colors array
let colors = ['blue', 'yellow','cyan', 'red','brown','orange' ];
//get button
let button = document.getElementById('button');

//event listener
button.addEventListener('click', function(){
  console.log('test')
  //randommizer
  var randomcolor = colors[Math.floor(Math.random() * colors.length)]
  //get container
  let container = document.getElementById('container');


  container.style.background = randomcolor;
})


let addToDoButton = document.getElementById('addToDo');
let toDoContainer = document.getElementById('toDoContainer');
let inputField = document.getElementById('inputField');

addToDoButton.addEventListener('click', function(){
    var paragraph = document.createElement('p');
    paragraph.classList.add('paragraph-styling');
    paragraph.innerText = inputField.value;
    toDoContainer.appendChild(paragraph);
    inputField.value = "";
    paragraph.addEventListener('click', function(){
        paragraph.style.textDecoration = "line-through";
    })
    paragraph.addEventListener('dblclick', function(){
        toDoContainer.removeChild(paragraph);
    })
})
