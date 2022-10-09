// let employees = [
//     {
//         name:"Aarav_1",
//         mail_id:"aarav1@gmail.com",
//         contact_no:"123456789",
//         department:"xyz1",
//         joining_date:"13Feb 2018"  
//     },
//     {
//         name:"Aarav_2",
//         mail_id:"aarav2@gmail.com",
//         contact_no:"123456789",
//         department:"xyz2",
//         joining_date:"14Feb 2018"  
//     },
//     {
//         name:"Aarav_3",
//         mail_id:"aarav3@gmail.com",
//         contact_no:"123456789",
//         department:"xyz3",
//         joining_date:"15Feb 2018"  
//     },
//     {
//         name:"Aarav_4",
//         mail_id:"aarav4@gmail.com",
//         contact_no:"123456789",
//         department:"xyz4",
//         joining_date:"16Feb 2018"  
//     }

// ];
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
