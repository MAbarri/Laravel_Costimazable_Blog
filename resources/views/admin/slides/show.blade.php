@extends('layouts.admin')

@section('content')
        <img class="user-image img-circle" src="{{ !empty($object->image) ? $object->image : 'https://ssl.gstatic.com/accounts/ui/avatar_2x.png' }}" alt="{{ $object->title  }}" />
    <div class="col-xs-12 no-padding">
        <div class="post-title pull-left">
            <h1> {{ $object->title }} </h1>
        </div>
    </div>
    <p>{!! $object->description !!}</p>
    <p>{!! $object->image !!}</p>
@endsection
