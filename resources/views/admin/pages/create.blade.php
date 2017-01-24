@extends('layouts.admin')

@section('content')
    {!! form($form) !!}
    @include('partials.admin.tinymce')
    <br>
    <div class="alert alert-danger">
							<strong>Note that</strong> if you wanna fill your content with HTML containing images, you hsould click on the "insert/edit image", and upload the image you need, and close the box, and then include the next line of code adding to it your styling
              <p><br /> &lt;img src="/files/your file name" alt="image title"&gt;</p>
						</div>
@endsection
