function cheak_number(value) {
	if(isNaN(value)){
		return 0;
	}else{
		return Number(value);
	}
}

function max_average(value1,value2,value3)
{
	var arr = [value1,value2,value3];
	for(var i=0;i<3;i++)
	{
		for(var j=i+1;j<3;j++)
		{
			if(arr[j]>arr[i])
			{
				var tmp = arr[i];
				arr[i]= arr[j];
				arr[j] = tmp;
			}
		}
	}
	return (arr[0]+arr[1])/2;
}

function other_change(id) {
	var array = id.split("_");
	var quize1 = document.getElementById(array[0]+"_quize1").value;
	var quize2 = document.getElementById(array[0]+"_quize2").value;
	var quize3 = document.getElementById(array[0]+"_quize3").value;
	var average = document.getElementById(array[0]+"_average").value;
	var classperticipation = document.getElementById(array[0]+"_classperticipation").value;
	var project = document.getElementById(array[0]+"_project").value;
	var lab = document.getElementById(array[0]+"_lab").value;
	document.getElementById(array[0]+"_average").value = max_average(cheak_number(quize1),cheak_number(quize2),cheak_number(quize3));
	var sec_id = document.getElementById('sec_id').value;
	var form_data = new FormData();
	form_data.append('s_id',array[0]);
	form_data.append('sec_id',sec_id);
	form_data.append('quize1', quize1);
	form_data.append('quize2', quize2);
	form_data.append('quize3', quize3);
	form_data.append('average', average);
	form_data.append('classperticipation', classperticipation);
	form_data.append('project', project);
	form_data.append('lab', lab);

	var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var x = this.responseText;
            alert(x);
        }
    };

    xhttp.open("POST", "php/update_other_mark.php", true);
    xhttp.send(form_data);
}

function show_all_student_mark()
{
	var sec_id = document.getElementById('sec_id').value;
	$('#input_place').load('php/other_student_list.php?sec_id='+sec_id);
}