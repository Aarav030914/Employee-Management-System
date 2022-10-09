fetch("./myfile.json").then(response => response.json())
.then(data => {
    const employee_info = document.getElementsByClassName('box')[0];
    data.forEach((employee, index) =>{
        let employee_container = document.createElement('div');
        employee_container.classList.add("employee");

        let name = document.createElement('p');
        let nameText = document.createTextNode(`Name: ${employee.emp_name}`);
        name.appendChild(nameText);
        employee_container.appendChild(name);

        let mailid = document.createElement('p');
        let mailidText = document.createTextNode(`Mail ID: ${employee.emp_id}`);
        mailid.appendChild(mailidText);
        employee_container.appendChild(mailid);

        let contactno = document.createElement('p');
        let contactnoText = document.createTextNode(`Contact Number: ${employee.emp_number}`);
        contactno.appendChild(contactnoText);
        employee_container.appendChild(contactno);

        let department = document.createElement('p');
        let departmentText = document.createTextNode(`Department: ${employee.emp_department}`);
        department.appendChild(departmentText);
        employee_container.appendChild(department);

        let joiningDate = document.createElement('p');
        let joiningDateText = document.createTextNode(`Joining Date: ${employee.emp_date}`);
        joiningDate.appendChild(joiningDateText);
        employee_container.appendChild(joiningDate);
        
        employee_info.appendChild(employee_container);
    });
});
