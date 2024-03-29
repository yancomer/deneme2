<x-app-layout>
    <x-slot name="header">{{$quiz->title}}</x-slot>
    <div class="card">
  <div class="card-body">
    <p class="card-text">
    <div class="row">
    <h5 class="card-title">
                <a href="{{route('quizzes.index')}}" class="btn btn-sn btn-secondary"><i class="fa fa-arrow-left"></i>Quizlere dön</a>
            </h5>
        <div class="col-md-4">
        <ul class="list-group">
            @if($quiz->finished_at)
        <li class="list-group-item d-flex justify-content-between align-items-center">
    Son Katılım Tarihi
    <span title="{{$quiz->finished_at}}" class="text-primary">{{$quiz->finished_at->diffForHumans()}}</span>
  </li>
  @endif
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Soru Sayısı
    <span class="text-danger">{{$quiz->questions_count}}</span>
  </li>
  @if($quiz->details)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Katılımcı Sayısı
    <span class="text-warning">{{ $quiz->details['join_count']}}</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Ortalama Puan
    <span class="text-warning">{{$quiz->details['average']}}</span>
  </li>text-success
  @endif
</ul>
@if(count($quiz->topTen)>0)
<div class="card mt-3">
  <div class="card-body">
    <h5 class="card-title">İlk 10</h5>
    <ul class="list-group">
    @foreach($quiz->topTen as $result)  
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <strong class="h6">{{$loop->iteration}}.</strong>

       
      <span @if(auth()->user()->id==$result->user_id) class="text-success" @endif>{{$result->user->name}}</span>
      <span class="text-success">{{$result->point}}</span>
    </li>
    @endforeach
</ul>
  </div>
</div>
@endif
        </div>
        <div class="col-md-8">
        {{$quiz->description}}
        <table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">Ad Soyad</th>
      <th scope="col">Puan</th>
      <th scope="col">Doğru</th>
      <th scope="col">Yanlış</th>
    </tr>
  </thead>
  <tbody>
    @foreach($quiz->results as $result)
    <tr>
      <td>{{$result->user->name}}</td>
      <td>{{$result->point}}</td>
      <td>{{$result->correct}}</td>
      <td>{{$result->wrong}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </p>    
  </div>
    </div>    
  </div>
</div>
</x-app-layout>