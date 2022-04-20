function ajax() {
	


	var json = {
		'Company': 'Function',
		'Mission': 'Our Mission is to produce a wide range of apparels with exceptional price,innovative designs and value addition.',
		'Description' : 'We value our commitments for on time delivery, quality and sustainability.We set high efficiency standard to run our core functions to excelWe test our social and technical compliance rigorously and routinely for accountability and transparency.Minimum order quantity is 2,000 pieces per color, per style. A large order quantity allows higher efficiency at a reduced manufacturing cost.We can assist customer creating fits and design for garments. We offer choices of fabrication, wide range of accessories and different packaging method: flat pack, boxed pack, hanging garments, etc.Our dedicated teams ensure high quality and craftsmanship standard remains consistent whether order quantity is 1,000 or 100,000 pieces.Our core functions are base on Enterprise Resource Planning (ERP). We strive continuously to reduce wastage of materials and increase production efficiency.'
	}

	var data = JSON.stringify(json);
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', 'json.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xhttp.onreadystatechange = function () {

		if (this.readyState == 4 && this.status == 200) {
			//var  xyz = JSON.parse(this.responseText);
			//alert(xyz.deptdata);
			//alert(this.responseText);
			document.getElementById('view').innerHTML = this.responseText;

		}
	}

	xhttp.send('mydata=' + data);
}