@if(count($languages))
<div id="sidebar_filter_areas" class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    {{ trans('application.select_lang') }}
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
      @foreach($languages as $lang)
    <li class="chosen-one" ><a href="#"><img id="lang_{{ $lang->code }}" height="20" alt="{{ $lang->code }}" src="{{ asset($lang->flag) }}" value="{{ $lang->code }}" />
      {{ $lang->title }}</img></a></li>
      @endforeach
  </ul>
</div>
        {!! Form::open(['method' => 'POST', 'route' => $route, 'id' => 'language-form-changer']) !!}
            {!! Form::hidden('language') !!}
        {!! Form::close() !!}
@endif
<script type="text/javascript">

$('.dropdown-menu').on('click', function(e) {
  e.stopPropagation();
});
$('#dropdownMenu1').on('click', function(e) {
  if(!$('#sidebar_filter_areas').hasClass( "open" )){
  $('#sidebar_filter_areas').addClass('open');} else {
    $('#sidebar_filter_areas').removeClass('open');
  }
});
</script>
