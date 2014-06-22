@extends('layout.front')

@section('content')
<div class="row-fluid">
    <div class="span8">
        <div id="calendar">

        </div>
    </div>
    <div class="span8">
    </div>
</div>

{{ HTML::style('js/fullcalendar-2.0.0/fullcalendar.css')}}
{{ HTML::script('js/fullcalendar-2.0.0/lib/moment.min.js')}}
{{ HTML::script('js/fullcalendar-2.0.0/fullcalendar.js')}}

<style type="text/css">

.fc-state-highlight{
    background-color: #ddd;
}
</style>
<script type="text/javascript">
    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            // put your options and callbacks here
        })

    });
</script>
@stop