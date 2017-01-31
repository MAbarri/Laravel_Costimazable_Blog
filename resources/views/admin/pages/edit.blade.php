@extends('layouts.admin')

@section('content')
    {!! form($form) !!}
    @include('partials.admin.tinymce')
    <br>
    <div class="alert alert-warning">
							<strong>Note that :</strong> If you wanna fill your content with HTML containing images, you hsould click on the "insert/edit image", and upload the image you need, and close the box, and then include the next line of code adding to it your styling.
              <p><br /> &lt;img src="/files/your file name" alt="image title"&gt;</p>
						</div>
    <div class="alert alert-warning">
							<strong>Note that :</strong> If you select an option for the "Parent page", This page will be inaccessible from the main menu, to make it accessible again please contact your developer, or unfill the "Parent page" field.
						</div>
@endsection
