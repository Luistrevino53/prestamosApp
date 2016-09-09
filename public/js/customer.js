$(document).ready(function(){
	/*$('#new_customer').click(function(e){
		e.preventDefault();
		$('#new_customer_modal').modal('show');
	});*/
	$('#zip_code').focusout(function(){
		var codigo=$('#zip_code').val();
		console.log(codigo);
		$.getJSON('https://api-codigos-postales.herokuapp.com/v2/codigo_postal/'+codigo, function(r){
			var select='';
			for(var i=0;i<r['colonias'].length;i++){
				select+='<option value="'+r['colonias'][i]+'">'+r['colonias'][i]+'</option>';
			}
			$('#suburb').html(select);
			$('#city').val(r['municipio']);
			$('#state').val(r['estado']);
		});
	});
	$.getJSON('api/todo',function(r){
		var customers='';
		$.each(r, function(i,d){
			customers+='<tr>';
				customers+='<td>'+d.id+'</td>'			;
				customers+='<td>'+d.cname+' '+d.capellidop+' '+d.capellidom+'</td>';
				customers+='<td>'+d.address+'</td>';
				customers+='<td>'+d.uname+' '+d.uapellidop+' '+d.uapellidom+'</td>';
				if(d.completed_bill == 0){
					customers+='<td><button class="btn btn-default" id="new_customer" data-toggle="modal" data-target="#modal-cst-newbill" data-whatever="'+d.id+'" title="Nuevo Prestamo"><span class="glyphicon glyphicon-piggy-bank"></span></button>';
				}else{
					customers+='<td>'+d.bill.amount_temp+'</td>';
				}
				customers+='<td>';
					customers+='<button class="btn btn-default" id="new_customer" data-toggle="modal" data-target="#modal-cst-pay" title="Nuevo Deposito" data-whatever="'+d.id+'" data-temp="'+d.bill.amount_temp+'"><span class="label label-default">$</span></button>';
					customers+='<button class="btn btn-default" id="new_customer" data-toggle="modal" data-target="#modal-historial" title="Historial de Pagos" data-whatever="'+d.id+'"><span class="glyphicon glyphicon-list-alt"></span></button>';
					customers+='<button class="btn btn-default" id="infoCustomer" data-whatever="'+d.id+'"data-toggle="modal" data-target="#modal-cst-info" title="Informacion de '+d.cname+'"><span class="glyphicon glyphicon-user"></span></button>';
				customers+='</td>';
			customers+='</tr>';
		});


		$('#customersT').append(customers);
	});

	//informacion del usuario


	$('#modal-cst-newbill').on('show.bs.modal', function(e){
		var button = $(e.relatedTarget);
		var id = button.data('whatever');

		var modal=$(this);
		modal.find('#id').val(id);
	});

	$('#modal-cst-pay').on('show.bs.modal', function(e){
		var button =$(e.relatedTarget);
		var id = button.data('whatever');
		var temp = button.data('temp');

		var modal=$(this);
		modal.find('#id').val(id);
		modal.find('#temp').val(temp);
	});

	$('#modal-historial').on('show.bs.modal', function(e){
		var button =$(e.relatedTarget);
		var id = button.data('whatever');

		var modal=$(this);
		modal.find('#id').val(id);
	});
	$('#modal-cst-info').on('show.bs.modal', function(e){
		var button =$(e.relatedTarget);
		var id = button.data('whatever');

		var modal=$(this);
		modal.find('#id').val(id);
	});
});
