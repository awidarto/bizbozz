@extends('layout.front')


@section('content')

<h3>{{$title}}</h3>

{{Former::open_for_files_horizontal($submit,'POST',array('class'=>'custom addAttendeeForm'))}}

{{ Former::hidden('id')->value($formdata['_id']) }}

<div class="row">
    <div class="span6">

        {{ Former::text('title','Title') }}
        {{ Former::text('permalink', 'URL friendly name')->id('permalink')}}
        {{ Former::text('docDepartment','Department') }}
        {{ Former::text('tags','Tags (visible)')->class('tag_keyword span6') }}

        <?php
            $fupload = new Fupload();
        ?>

        {{ $fupload->id('filesupload')->title('Select File')->label('Upload File')->make($formdata) }}


        {{ Form::submit('Save',array('class'=>'btn primary'))}}&nbsp;&nbsp;
        {{ HTML::link($back,'Cancel',array('class'=>'btn'))}}

    </div>
</div>

{{Former::close()}}

<script type="text/javascript">

$(document).ready(function() {

    $('#title').keyup(function(){
        var title = $('#title').val();
        var slug = string_to_slug(title);
        $('#permalink').val(slug);
    });

});

</script>

@stop

