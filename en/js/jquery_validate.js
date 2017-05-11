$("#FormCS").validate({
	rules: {
		name: {
			required: true
		},
		email: {
			required: true,
			email: true
		},
		city: "required",
		comment: {
			required: true
		}
	},
	messages: {
		name: {
			required: "Campo requerido"
		},
		email: {
			required: "Campo requerido",
			email: "Ingresa un correo válido"
		},
		city: {
			required: "Campo requerido"
		},
		comment: {
			required: "Campo requerido"
		}
	},
	submitHandler: function(form) {
		form.submit();
	}
});

$("#FormContactUS").validate({
	rules: {
		name: {
			required: true
		},
		email: {
			required: true,
			email: true
		},
		company: {
			required: true
		},
		asuntos: {
			required: true
		},
		comment: {
			required: true
		}
	},
	messages: {
		name: {
			required: "Campo requerido"
		},
		email: {
			required: "Campo requerido",
			email: "Ingresa un correo válido"
		},
		company: {
			required: "Campo requerido"
		},
		asuntos: {
			required: "Campo requerido"
		},
		comment: {
			required: "Campo requerido"
		}
	},
	submitHandler:  function(form) {
		form.submit();
	}
});