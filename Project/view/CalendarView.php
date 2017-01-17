<?php
/**
 * Created by Notepad++.
 * User: Seraphin
 * Date: 10.01.2017
 * Time: 09:17
 */	
?>

<script>

	$(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: new Date().toDateString(),
			defaultView: 'agendaWeek',
			editable: true,
			eventSources: [
				{
					url: 'input/LoadPostInput.php',
					color: 'yellow',   // a non-ajax option
					textColor: 'black' // a non-ajax option
				}
			]
		});
	});

</script>

<style type="text/css">

	#calendar {
		width: 900px;
		margin: 0 auto;
	}

</style>

<div id='calendar'></div>
