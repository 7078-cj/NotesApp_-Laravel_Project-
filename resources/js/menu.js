const noteCreate =  document.getElementById("createNote");
console.log(noteCreate);
const addNew = document.getElementById("addNew");
console.log(addNew);

addNew.onclick = function(){
  noteCreate.classList.toggle("hidden");
  noteCreate.classList.toggle("animate-slide-in-bottom");
}
