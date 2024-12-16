/*
         *
         * @brief
         * @author Jorge Ibarra
         * @param string
         * @return
         *
         */
function borrado(id) {
	Swal.fire({
		title: '¿Eliminar el proveedor?',
		text: "Todo lo que haya realizado con este proveedor sera eliminado y no se podrá recuperar!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Si, Eliminar!',
		cancelButtonText: 'Cerrar', 
	}).then((result) => {
		if (result.isConfirmed) {
			var formulario = "#formBorrar" + id;
			$(formulario).submit();
		}
	})
}
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});
function getInfo(id){
	let url = $("#url_editar"+id).val();
	let urlUpdate = $("#url_update"+id).val();
	$("#editarModal_form").attr("action", urlUpdate); //Will set it
	$.ajax({
		url: url,
		type: 'get',
		success: function(response) {
			$("#editarModal").modal('show');
			$("#rfc").val(response.rfc);
			$("#razon_social").val(response.razon_social);
			$("#alias").val(response.alias);
			$("#calle").val(response.calle);
			$("#num_ext").val(response.num_ext);
			$("#num_int").val(response.num_int);
			$("#cp").val(response.cp);
			$("#colonia").val(response.colonia);
			$("#municipio").val(response.municipio);
			$("#ciudad").val(response.ciudad);
			console.log(response.tipos_asistencias)
			$("#tipo_asistencia").val(response.tipos_asistencias);
			$("#tipo_asistencia").trigger('change');
			$("#estado").val(response.estado);
			$("#estado").trigger('change');
			$("#logotipo").css('background-image', 'url("/'+response.logotipo+'")'); 
		},

	});
}