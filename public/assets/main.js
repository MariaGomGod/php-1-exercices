console.log('page ready!');

const deleteButtons = document.getElementsByClassName("employees-delete-button");

Array.from(deleteButtons).forEach(element => {
   element.addEventListener('click', () => {
       console.log(element);
   });
});