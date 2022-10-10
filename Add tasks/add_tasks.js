let emp_usm = document.getElementById("emp_username").value;
console.log(emp_usm);
fetch("./employe_task.json").then(response => response.json())
.then(data =>{
    let task_box = document.getElementsByClassName("task-box")[0];
    data.forEach((task, index)=>{
        if(task.Username == emp_usm){
            let task_container = document.createElement('div');
            task_container.classList.add("task_data");

            let task_description = document.createElement('p');
            let descriptionText = document.createTextNode(`Description: ${task.Description}`);
            task_description.appendChild(descriptionText);
            task_container.appendChild(task_description);

            let date_of_assign = document.createElement('p');
            let date_of_assignText = document.createTextNode(`Date of Assignment: ${task.Date}`);
            date_of_assign.appendChild(date_of_assignText);
            task_container.appendChild(date_of_assign);
            
            let start_time = document.createElement('p');
            let start_timeText = document.createTextNode(`Start Time: ${task.Start_Time}`);
            start_time.appendChild(start_timeText);
            task_container.appendChild(start_time);

            let deadline = document.createElement('p');
            let deadlineText = document.createTextNode(`End Time: ${task.End_Time}`);
            deadline.appendChild(deadlineText);
            task_container.appendChild(deadline);

            task_box.appendChild(task_container);
        }
    });
});
