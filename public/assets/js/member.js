var startDateValidators = {
	row: '.plan-start-date',
	validators: {
		notEmpty: {
			message: 'La fecha de inicio es requerida'
		}
	}
};

$('#membersform').bootstrapValidator({
	fields: {
		member_code: {
			validators: {
				notEmpty: {
					message: 'El código de miembro es requerido y no puede estar vacío'
				}
			}
		},
		name: {
			validators: {
				notEmpty: {
					message: 'El nombre es requerido y no puede estar vacío'
				},
				stringLength: {
					max: 50,
					message: 'Debe tener menos de 50 caracteres'
				}
			}
		},
		address: {
			validators: {
				notEmpty: {
					message: 'La dirección es requerida y no puede estar vacía'
				},
				stringLength: {
					max: 200,
					message: 'Debe tener menos de 200 caracteres'
				}
			}
		},
		email: {
			validators: {
				notEmpty: {
					message: 'La dirección de correo electrónico es requerida y no puede estar vacía'
				},
				emailAddress: {
					message: 'El correo electrónico no es válido'
				},
				stringLength: {
					max: 50,
					message: 'Debe tener menos de 50 caracteres'
				}
			}
		},
		DOB: {
			validators: {
				notEmpty: {
					message: 'La fecha de nacimiento es requerida'
				},
				date: {
					format: 'YYYY-MM-DD',
					message: 'La fecha debe estar en formato YYYY-MM-DD'
				}
			}
		},
		status: {
			validators: {
				notEmpty: {
					message: 'El estado es requerido y no puede estar vacío'
				}
			}
		},
		health_issues: {
			validators: {
				notEmpty: {
					message: 'Este campo es requerido y no puede estar vacío'
				},
				regexp: {
					regexp: /^[0-9\.]+$/,
					message: 'El valor ingresado no es válido'
				},
				stringLength: {
					max: 13,
					message: 'Debe tener menos de 13 caracteres'
				},
			}
		},
		proof_name: {
			validators: {
				notEmpty: {
					message: 'El nombre de la prueba es requerido y no puede estar vacío'
				},
				stringLength: {
					max: 50,
					message: 'Debe tener menos de 50 caracteres'
				}
			}
		},
		gender: {
			validators: {
				notEmpty: {
					message: 'El género es requerido y no puede estar vacío'
				}
			}
		},
		plan_id: {
			validators: {
				notEmpty: {
					message: 'El ID del plan es requerido y no puede estar vacío'
				}
			}
		},
		pin_code: {
			validators: {
				notEmpty: {
					message: 'El código PIN es requerido y no puede estar vacío'
				},
				regexp: {
					regexp: /^[0-9\.]+$/,
					message: 'El valor ingresado no es válido'
				}
			}
		},
		occupation: {
			validators: {
				notEmpty: {
					message: 'La ocupación es requerida y no puede estar vacía'
				},
				stringLength: {
					max: 50,
					message: 'Debe tener menos de 50 caracteres'
				}
			}
		},
		aim: {
			validators: {
				notEmpty: {
					message: 'El objetivo es requerido y no puede estar vacío'
				},
				stringLength: {
					max: 50,
					message: 'Debe tener menos de 50 caracteres'
				}
			}
		},
		source: {
			validators: {
				notEmpty: {
					message: 'La fuente es requerida y no puede estar vacía'
				},
				stringLength: {
					max: 50,
					message: 'Debe tener menos de 50 caracteres'
				}
			}
		},
		invoice_number: {
			validators: {
				notEmpty: {
					message: 'El número de factura es requerido y no puede estar vacío'
				}
			}
		},
		admission_amount: {
			validators: {
				notEmpty: {
					message: 'El monto de admisión es requerido y no puede estar vacío'
				},
				regexp: {
					regexp: /^[0-9\.]+$/,
					message: 'El valor ingresado no es válido'
				}
			}
		},
		subscription_amount: {
			validators: {
				notEmpty: {
					message: 'El monto de suscripción es requerido y no puede estar vacío'
				},
				regexp: {
					regexp: /^[0-9\.]+$/,
					message: 'El valor ingresado no es válido'
				}
			}
		},
		taxes_amount: {
			validators: {
				notEmpty: {
					message: 'El monto de impuestos es requerido y no puede estar vacío'
				},
				regexp: {
					regexp: /^[0-9\.]+$/,
					message: 'El valor ingresado no es válido'
				}
			}
		},
		payment_amount: {
			validators: {
				notEmpty: {
					message: 'El monto es requerido y no puede estar vacío'
				},
				regexp: {
					regexp: /^[0-9\.]+$/,
					message: 'El valor ingresado no es válido'
				}
			}
		},
		invoice_id: {
			validators: {
				notEmpty: {
					message: 'El número de factura es requerido y no puede estar vacío'
				}
			}
		},
		date: {
			validators: {
				notEmpty: {
					message: 'La fecha del cheque es requerida y no puede estar vacía'
				}
			}
		},
		number: {
			validators: {
				notEmpty: {
					message: 'El número de cheque es requerido y no puede estar vacío'
				}
			}
		},
		contact: {
			validators: {
				notEmpty: {
					message: 'El contacto es requerido y no puede estar vacío'
				},
				regexp: {
					regexp: /^[0-9\.]+$/,
					message: 'El valor ingresado no es válido'
				},
				stringLength: {
					max: 10,
					message: 'Debe tener menos de 10 caracteres'
				}
			}
		},
		emergency_contact: {
			validators: {
				notEmpty: {
					message: 'El contacto de emergencia es requerido y no puede estar vacío'
				},
				regexp: {
					regexp: /^[0-9\.]+$/,
					message: 'El valor ingresado no es válido'
				},
				stringLength: {
					max: 10,
					message: 'Debe tener menos de 10 caracteres'
				}
			}
		},
		'plan[0].start_date' : startDateValidators								          
	}
});
