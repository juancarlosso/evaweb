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
		title: '¿Eliminar el usuario?',
		text: "Todo lo que haya realizado con este usuario sera eliminado y no se podrá recuperar!",
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
			$("#name").val(response.name);
			$("#email").val(response.email);
			$("#telefono").val(response.telefono);
			$("#status").val(response.status);
			$("#perfil").val(response.perfil);
			$("#perfil").trigger('change');
		},

	});
}