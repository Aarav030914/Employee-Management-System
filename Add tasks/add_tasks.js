let tasks = [
    {
        description:"Kill your Boss",
        Date_of_Assign: "12June 2019",
        Deadline: "12Dec 2052"
    },
];

let task_box = document.getElementsByClassName("task-box")[0];
tasks.forEach((task, index)=>{
    let task_container = document.createElement('div');
    task_container.classList.add("task");

    let task_description = document.createElement('p');
    let descriptionText = document.createTextNode(`Description: ${task.description}`);
    task_description.appendChild(descriptionText);
    task_container.appendChild(task_description);

    let date_of_assign = document.createElement('p');
    let date_of_assignText = document.createTextNode(`Date of Assignment: ${task.Date_of_Assign}`);
    date_of_assign.appendChild(date_of_assignText);
    task_container.appendChild(date_of_assign);

    let deadline = document.createElement('p');
    let deadlineText = document.createTextNode(`Deadline: ${task.Deadline}`);
    deadline.appendChild(deadlineText);
    task_container.appendChild(deadline);

    task_box.appendChild(task_container);
})
