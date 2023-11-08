$(document).ready(function() {
				$('#paymentsform').bootstrapValidator({
					fields: {
						payment_amount: {
							validators: {
								notEmpty: {
									message: 'The amount is required and can\'t be empty'
								},
							}
						},
						invoice_id: {
							  validators: {
								  notEmpty: {
									message: 'The invoice number is required and can\'t be empty'
								}
							}
						},
						date: {
							  validators: {
								  notEmpty: {
									message: 'The cheque date is required and can\'t be empty'
								}
							}
						},
						number: {
							  validators: {
								  notEmpty: {
									message: 'The cheque number is required and can\'t be empty'
								}
							}
						},
					}
				});
			});

			$(document).ready(function() {
				// Bootstrap Validator initialization
				$('#paymentsform').bootstrapValidator({
					// Your existing validation rules go here
				});
			
				// Function to toggle transferencia number and date fields
				function toggleTransferenciaFields() {
					var paymentMethod = $('#mode').val();
					if (paymentMethod == 0) {
						$('#chequeDetails').show();
					} else {
						$('#chequeDetails').hide();
					}
				}
			
				// Toggle transferencia number and date fields on page load
				toggleTransferenciaFields();
			
				// Toggle transferencia number and date fields when payment method changes
				$('#mode').on('change', function() {
					toggleTransferenciaFields();
				});
			});