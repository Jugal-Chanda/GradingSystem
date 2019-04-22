function co_cal() {
	var co11 = document.getElementById('co11').value;
	var co21 = document.getElementById('co21').value;
	var co31 = document.getElementById('co31').value;
	var co41 = document.getElementById('co41').value;
	var weight1 = document.getElementById('weight1');

	var co12 = document.getElementById('co12').value;
	var co22 = document.getElementById('co22').value;
	var co32 = document.getElementById('co32').value;
	var co42 = document.getElementById('co42').value;
	var weight2 = document.getElementById('weight2');

	var co13 = document.getElementById('co13').value;
	var co23 = document.getElementById('co23').value;
	var co33 = document.getElementById('co33').value;
	var co43 = document.getElementById('co43').value;
	var weight3 = document.getElementById('weight3');

	var co14 = document.getElementById('co14').value;
	var co24 = document.getElementById('co24').value;
	var co34 = document.getElementById('co34').value;
	var co44 = document.getElementById('co44').value;
	var weight4 = document.getElementById('weight4');

	var co15 = document.getElementById('co15').value;
	var co25 = document.getElementById('co25').value;
	var co35 = document.getElementById('co35').value;
	var co45 = document.getElementById('co45').value;
	var weight5 = document.getElementById('weight5');

	var co16 = document.getElementById('co16').value;
	var co26 = document.getElementById('co26').value;
	var co36 = document.getElementById('co36').value;
	var co46 = document.getElementById('co46').value;
	var weight6 = document.getElementById('weight6');

	var co17 = document.getElementById('co17').value;
	var co27 = document.getElementById('co27').value;
	var co37 = document.getElementById('co37').value;
	var co47 = document.getElementById('co47').value;
	var weight7 = document.getElementById('weight7');

	weight1.value = Number(co11)+Number(co21)+Number(co31)+Number(co41);
	weight2.value = Number(co12)+Number(co22)+Number(co32)+Number(co42);
	weight3.value = Number(co13)+Number(co23)+Number(co33)+Number(co43);
	weight4.value = Number(co14)+Number(co24)+Number(co34)+Number(co44);
	weight5.value = Number(co15)+Number(co25)+Number(co35)+Number(co45);
	weight6.value = Number(co16)+Number(co26)+Number(co36)+Number(co46);
	weight7.value = Number(co17)+Number(co27)+Number(co37)+Number(co47);

	var total_weight = Number(weight1.value)+Number(weight2.value)+Number(weight3.value)+Number(weight4.value)+Number(weight5.value)+Number(weight6.value)+Number(weight7.value);
	document.getElementById('total5').innerHTML = total_weight;

	if(total_weight ==100)
	{
		document.getElementById('total5').style.backgroundColor = "";
		document.getElementById("co_update_button").disabled = false;
	}
	else
	{
		document.getElementById('total5').style.backgroundColor = "red";
		document.getElementById("co_update_button").disabled = true;
	}
	
}