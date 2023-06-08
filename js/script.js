

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})

function search() {
  let input = document.getElementById('searchbar').value
  input = input.toLowerCase()
  let x = document.getElementsByClassName('card')

  for (i = 0; i < x.length; i++){
    if(!x[i].innerHTML.toLowerCase().includes(input)){
      x[i].style.display = "none"
    }else {
      x[i].style.display = "list-item"
    }
  }
}