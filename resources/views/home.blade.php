@extends('layouts.main ')

@section('main-cards')
<div class="container">
   <div class="comic-title">
     <h3>Current series</h3>
   </div>
   <div id="comics-list">
      <div class="card">
         <div class="comic-front">
            <img src="#" alt="comicSeries">
         </div>
         <div class="comic-caption">
            <h4>
               Comic Series
            </h4>
         </div>
      </div>
   </div>
   <div class="content-options">
     <button type="button">Load more</button>
   </div>
 </div>
@endsection
