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
		title: '¿Eliminar el registro?',
		text: "Todo lo que haya realizado con este registro sera eliminado y no se podrá recuperar!",
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
function getInfo(id,tipo){
	let url = $("#url_editar_"+tipo+"_"+id).val();
	let urlUpdate = $("#url_update_"+tipo+"_"+id).val();
	$("#editarModal_form").attr("action", urlUpdate); //Will set it
	$.ajax({
		url: url,
		type: 'get',
		success: function(response) {
			$("#editarModal").modal('show');
			$("#nombre").val(response.nombre);
			$("#activo").val(response.activo);
			$("#activo").trigger('change');
		},

	});
}