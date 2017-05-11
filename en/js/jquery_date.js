$(document).ready(function(){
var today = serverdate; /*Hora del servidor*/
	(function gb_update_hour(){

		var date_current = $(".date_current");

		// Date Current
		
		today.setSeconds(today.getSeconds() + 1);
		var day = today.getDate();
		var month = today.getMonth();
		var year = today.getFullYear();

		// Hours Current
		var hour = today.getHours();
		var minute = today.getMinutes();
		var seconds = today.getSeconds();

		// Array of the months of the year
		var months = new Array();
		months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

		// Array days of the week
		var dayweek = new Array();
		dayweek = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];

		hour = (hour <=9)? "0"+hour : hour;
		minute = (minute <=9)? "0"+minute : minute;
		seconds = (seconds <=9)? "0"+seconds : seconds;

		// Concat date current format ---> Lunes 06 de Febrero de 2017 13:00 hrs
		var date_format = dayweek[today.getDay()]+ " " + today.getDate() + " de " + months[today.getMonth()] + " de " + year + " | " + hour + ":" + minute + " hrs ";
		date_current.html(date_format);
		// Refresh every second
		setTimeout(gb_update_hour, '1000');
	})();
});
