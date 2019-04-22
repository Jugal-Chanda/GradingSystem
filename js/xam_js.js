function select_sec(){

    var c_id = document.getElementById('curse').value;
    if (c_id==null) {
        c_id=0;
    }
    var sel = document.getElementById('section');
    var length = sel.length;
    for(var i=0;i<length;i++)
    {
        sel.remove(0);
    }
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var myObj = JSON.parse(this.responseText);
            var sel = document.getElementById('section');
            for(var i=0;i<myObj.length;i++)
            {
                var opt = document.createElement('option');
                opt.appendChild( document.createTextNode(myObj[i][1]));
                opt.value = myObj[i][0];
                sel.appendChild(opt);
            }
        }
    };

    xhttp.open("GET", "php/all_sec.php?id="+c_id, true);
    xhttp.send();

}

function  quize_fun() {
    var q1 = Number(document.getElementById('quize1').value);
    var q2 = Number(document.getElementById('quize2').value);
    var q3 = Number(document.getElementById('quize3').value);
    var arr = [q1,q2,q3];
    for(var i=0;i<3;i++)
    {
        for(var j=i+1;j<3;j++)
        {
            if (arr[i]<arr[j]) {
                var tmp = arr[i];
                arr[i] = arr[j];
                arr[j] = tmp;
            }
        }
    }
    console.log(arr);
    var ans = (arr[0]+arr[1])/2;
    document.getElementById('quize').value = ans;
}

function add_marks(){
    var add_mark  = document.forms.namedItem("add_mark");
    var form_data = new FormData(add_mark);
    var sec_id = document.getElementById('section').value;
    form_data.append('sec_id', sec_id)
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var x = this.responseText;
            alert(x);
        }
    };

    xhttp.open("POST", "php/add_mark.php", true);
    xhttp.send(form_data);
}

function id_valid(){
    var s_id = document.getElementById('s_id').value;

    if(s_id.length == 13){
        var sec_id = document.getElementById('section').value;
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                document.getElementById('mid1').value = myObj[1];
                document.getElementById('mid2').value = myObj[2];
                document.getElementById('final').value = myObj[3];
                document.getElementById('quize1').value = myObj[4];
                document.getElementById('quize2').value = myObj[5];
                document.getElementById('quize3').value = myObj[6];
                document.getElementById('project').value = myObj[9];
                document.getElementById('lab').value = myObj[10];
                document.getElementById('class_p').value = myObj[8];
                document.getElementById('quize').value = myObj[7];
                if(myObj[0]==1)
                {
                    document.getElementById("add_btn").disabled = false;
                }
                else
                {
                    alert("Invalid ID or Section")
                }
            }
        };

        xhttp.open("GET", "php/mark_information.php?s_id="+s_id+"&sec_id="+sec_id, true);
        xhttp.send();
    }

    else{
        document.getElementById("add_btn").disabled = true;
    }
}

function show_all_student_mark(){

    var sec_id = document.getElementById('sec_id').value;
    $('#show_all_mark').load('php/show_all_mark.php?sec_id='+sec_id);

}