function student_list() {
    var sec_id = document.getElementById('section').value
    $('#student_table_here').load('php/student_list.php?sec_id='+sec_id);
        
}




function add_new_student()
{
    var add_student  = document.forms.namedItem("add_student");
    var form_data = new FormData(add_student);
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var x = this.responseText;
            student_list();
            alert(x);
        }
    };

    xhttp.open("POST", "php/add_new_student.php", true);
    xhttp.send(form_data);
}