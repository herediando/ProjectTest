$(document).ready(function() {
	$.ajax({
		url: './include/process.php',
		type: 'post',
		data: { tag: 'getData'},
		dataType: 'json',
		success: function (data) {
			if (data.success)
			{
				$.each(data, function (index, record) 
				{
					if ($.isNumeric(index))
					{
						var row = $("<tr />");
						$("<td />").text(record.habcedula).appendTo(row);
						$("<td />").text(record.habnombre1).appendTo(row);
						$("<td />").text(record.habapellido1).appendTo(row);
						$("<td />").text(record.habsexo).appendTo(row);
						$("<td />").text(record.habfechanacimiento).appendTo(row);
						$("<td />").text(record.habestadocivil).appendTo(row);
						row.appendTo("table");
					}
				})
			}
			$('table').dataTable({
				"bJQueryUI": true,
				"sPaginationType": "full_numbers"
			})
		}
	});
})