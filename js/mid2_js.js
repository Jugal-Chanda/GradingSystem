function cheak_number(value) {
	if(isNaN(value)){
		return 0;
	}else{
		return Number(value);
	}
}

function mid1_change(id) {
	var array = id.split("_");
	var co1 = document.getElementById(array[0]+"_co1").value;
	var co2 = document.getElementById(array[0]+"_co2").value;
	var co3 = document.getElementById(array[0]+"_co3").value;
	var co4 = document.getElementById(array[0]+"_co4").value;
	document.getElementById(array[0]+"_to").value = cheak_number(co1)+cheak_number(co2)+cheak_number(co3)+cheak_number(co4);
	var sec_id = document.getElementById('sec_id').value;
	var form_data = new FormData();
	form_data.append('s_id',array[0]);
	form_data.append('sec_id',sec_id);
	form_data.append('co1', co1);
	form_data.append('co2', co2);
	form_data.append('co3', co3);
	form_data.append('co4', co4);

	var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var x = this.responseText;
            alert(x);
        }
    };

    xhttp.open("POST", "php/update_mid2_mark.php", true);
    xhttp.send(form_data);
}

function show_all_student_mark()
{
	var sec_id = document.getElementById('sec_id').value;
	$('#input_place').load('php/mid2_student_list.php?sec_id='+sec_id);
}