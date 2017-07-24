var inbox = function (){
	var bindEvents = function(){

		$(".contact-check").click(function(event) {
			$("#idemail").val($(this).closest('tr').data('email'));
			$('#mailModal').modal('open');
		});
		$('select').on('change', function() {
			$.blockUI({ message: $('#animationmatrix') });
			if(this.value == 1){
				window.location.href = HOST+'/admin/inbox';
			}
			if(this.value == 2){
				window.location.href = HOST+'/admin/inbox/contactados';
			}
			if(this.value == 3){
				window.location.href = HOST+'/admin/inbox/nocontactados';
			}
		})
		$("#savecontact").click(function(event) {
			var data = {
				'idemail'		: $("#idemail").val(),
				'contactname'	: $("#contactname").val(),
				'contactdate'	: $("#contactdate").val()
			};
			setContact(data);
		});

		$('.date').datePicker({
			// the datePicker options
			closeOnSelect: true, // weather the picker auto closes after picking a date or not
			elements: '.date', // the selector for the input fields using datePicker
			body: document.body, // element the picker should be depended on
			prevLabel: 'Previous month', // text written instead of {{prev}}
			minDate: '1969-01-01', // standard minimal displayable date
			maxDate: '2050-12-31', // standard maximal displayable date
			minDateAttribute: 'data-mindate', // attribute that could hold minimal displayable date data
			maxDateAttribute: 'data-maxdate', // attribute that could hold maximal displayable date data
			// classes for event listeners (click)
			nextButtonClass: 'dp-next', // next month button class name
			prevButtonClass: 'dp-prev', // previous month button class name
			selectYearClass: 'dp-select-year', // select year element class name
			selectMonthClass: 'dp-select-month', // select month element class name
				// {{hour}}, {{hours}}, {{minute}}, {{minutes}}, {{second}}, {{seconds}}, {{am-pm}}, {{am-pms}}
			timeFormat: '', // can be HH:MM:SS AM, HH:MM AM, HH:MM:SS or HH:MM 
			timeFormatAttribute:'data-timeformat', // attribute holding the timeFormat information if different from standard
			doAMPM: false, // switch for standard AM / PM rendering
			minuteSteps: 5, // steps of minutes displayed as options in {{minutes}}
			secondSteps: 10, // steps of seconds displayed as options in {{seconds}}
			AMPM: ['AM', 'PM'], // rendered strings in picker options and input fields
			// classes for event listeners (change of selects)
			selectHourClass: 'dp-select-hour', // class name of select for hours
			selectMinuteClass: 'dp-select-minute', // class name of select for minutes
			selectSecondClass: 'dp-select-second', // class name of select for seconds
			selectAMPMClass: 'dp-select-am-pm', // class name of select for AM/PM
			rangeStartAttribute: 'data-from', // attribute holding the name of the other input in a range collective (either rangeEndAttribute or name attribute)
			rangeEndAttribute: 'data-to', // attribute holding the name of the other input in a range collective
				weekDaysLong:
					['sabado', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'domingo'],
				initCallback: function(elements) {	
					for (var n = elements.length; n--; ) {
						elements[n].value =
							changeValueFormat_de(dates[elements[n].getAttribute(dataAttr)], this.options);
					}
				},
				renderValue: function(container, element, value) {
					$("#"+element.id+"").parent().find('label').addClass('active'); /*fix*/
					dates[element.getAttribute(dataAttr)] = value;
					element.value = changeValueFormat_de(value, this.options);
				},
				readValue: function(element) {
					return dates[element.getAttribute(dataAttr)];
				},
			picker: {}, // reference to instance of datePicker
			sundayBased: true, // renders weeks starting with Monday or Sunday
			renderWeekNo: false, // enables / disables rendering of week numbers
			renderDaysOfWeek: true, // depends also on template.start. {{days}} has to be returned as well
			equalHight: false, // renders extra days in next month to keep heights (row count) of all months the same
			useCache: true, // month that has been rendered will be cached on never be calculated again (also events)
			months: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic' ],// array of strings of all months in a year
			weekDays: ['Sa','Lu','Ma','Mi','Ju','Vi','Do'], // array of strings of week days
			workingDays: [1, 2, 3, 4, 5], // Date() based; 0 = Sun; others will be signed as week-end
		});

	} /*End BindEvents*/

	var setContact = function(form){
		$.ajax({
			url: HOST+'/admin/inbox/set-contact',
			type: 'POST',
			dataType: 'json',
			data: form,
		}).done(function(response) {
			if(!(response.error)){
				$('#inboxtable > tbody  > tr').each(function() {
					if($(this).data('email') == form.idemail){
						$(this).find('td:eq(8)').html(form.contactdate + ' '+form.contactname  );
					}
				});
				$('#mailModal').modal('close');
				Materialize.toast(response.msg, 4000,'green');
				$("#idemail").val("");
				$("#contactname").val("");
				$("#contactdate").val("");

			}else{
				 Materialize.toast(response.msg, 4000,'red'); 
			}
		}).fail(function(response) {
		}).always(function() {
		});
	}




	var dates =dates = {
			'date-1': '',
			'date-2': ''
		},
		dataAttr = 'data-date',
		changeValueFormat_de = function(value, options) {
			var parts = value.split(' ')[0].split('-'),
				date = new Date(parts[0], parts[1] - 1, parts[2] || 0);

			if(parts[0].length > 3){
				var MyDateString = ('0' + date.getDate()).slice(-2) + '-'
					+ ('0' + (date.getMonth()+1)).slice(-2) + '-'
					+ date.getFullYear();
					if(value){
						return MyDateString;
					}else{
						return '';
					}
			}else{
				return value;
			}
			
		};

	var onloadExec = function(){
		bindEvents();
		$('#mailModal').modal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: 0.5, // Opacity of modal background
			inDuration: 1000, // Transition in duration
			outDuration: 1000, // Transition out duration
			starting_top: '15%', // Starting top style attribute
			ending_top: '15%', // Ending top style attribute
		});
	}
	return {
		init:onloadExec
	}

};
$(function(){
	var mail = new inbox();
	mail.init();
});