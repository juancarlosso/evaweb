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