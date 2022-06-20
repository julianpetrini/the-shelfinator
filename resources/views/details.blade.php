@extends('layout/master')
@include('nav')


{{-- HERE SHOULD BE ANOTHER WAY TO GENERATE TE VARIABLES --}}
@foreach ($messages as $message) @endforeach



<section class="details_section">
    <h1 class="h1_details">{{ $message->movieTitle }}</h1>
    {{-- <img class="img_details" src="{{ asset('img/robocop2.jpg') }}"> --}}
    <img class="img_details" src="data:image/jpg;base64,{{ chunk_split(base64_encode($message->moviePic)) }}">
    <div class="catalogo_details">
        {{-- <p class="genre-action">action</p> --}}
        <p class="genre-{{ $message->movieGenre }}">{{ $message->movieGenre }}</p>
        <img class="star" src="{{ asset('img/star.png') }}">
        <p class="txt_catalogo">{{ $message->movieScore }}</p>
        
        {{-- Here it also should call info from the database --}}
    </div>
    <h2 class="description_details"> {{ $message->movieDescription }}</h2>
    <h1 class="description_title_form">LEAVE YOUR THOUGHT</h1>
    

    
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1" class="text-white">Name | A.K.A</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="titleMessage" placeholder="Please enter your name">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1" class="text-white">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contentMessage"
                placeholder="Here you can leaver your amazing thoughts"></textarea>
        </div>

        @error('title')
                <h1 class="asign-danger">Please fill both title and content</h1>
            @enderror

        <button type="submit" class="btn btn-warning sbutton">Submit</button>
    </form>


</section>
<h1 class="description_title_form">THOUGHTS</h1>
@if ($message->titleMessage) >= 1)
<section class="">
    <ul class="ul_comments">
        <li>{{ $message->titleMessage }}</li>
        <li>{{ $message->contentMessage }} </li>
    </ul>
    @else
        <h1 class="description_title_form text-info">I don't have any nice messages to show you yet ♥</h1>
       
    @endif
</section>
