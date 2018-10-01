@extends('layouts.app')
@section('content')
<body  id="content"  onload="startTop()">

  <div class="container">
    <div class="row justify-content-center">

      @foreach($tops as $news)
      @if(isset($news->url))

      <div class="card border-warning col-12 col-md-5 bg-dark" id="card">
        <a href="{{$news->url}}" target="_blank">

          <div class="card-body text-warning">
            <h5 class="card-title"> {{$news->title}}</h5>
          </div>

          <div class="card-footer border-warning text-light">
            <p class="col-12 text-right">Publicado por: <strong>{{$news->by}}</strong></p>
          </div>

        </a>
      </div>

      @endif
      @endforeach
    </div>
  </div>
</body>
@endSection
