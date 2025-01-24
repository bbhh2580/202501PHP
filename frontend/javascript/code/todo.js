let input = document.getElementById('todo-input');
let addButton = document.getElementById('add-btn');
let todoList = document.getElementById('todo-list');
let deleteButton = document.getElementsByClassName('delete-btn');

addButton.addEventListener('click', () => {
    addTodoItem();
})

addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        addTodoItem();
    }
})


function addTodoItem() {
    let text = input.value.trim();
    if (text) {
        let listItem = document.createElement('li');
        listItem.textContent = text;

        let deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.classList.add('delete-btn');
        deleteButton.addEventListener('click', () => {
            if (confirm('Are you sure you want to delete this item?')) {
                todoList.removeChild(listItem);
            }
        })

        listItem.appendChild(deleteButton);
        todoList.appendChild(listItem);

        input.value = '';
    } else {
        alert('Please enter a valid todo item');
    }
}