@extends('layouts.main ')

@section('main-cards')
<div class="container">
   <div class="comic-title">
     <h3>Current series</h3>
   </div>
   <div id="comics-list">
      @foreach ($comics as $comic)
         <div class="card">
            <div class="comic-front">
               <img src="{{ $comic->image }}" alt="{{ $comic->type }}">
            </div>
            <div class="comic-caption">
               <h4>
                  {{ $comic->title }}
               </h4>
            </div>
         </div>
      @endforeach
   </div>
   <div class="content-options">
     <button type="button">Load more</button>
   </div>
 </div>
@endsection
