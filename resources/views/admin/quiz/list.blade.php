<x-app-layout>
    <x-slot name="header">Quizler</x-slot>
    <div class ="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('quizzes.create')}}" class="btn btn-sn btn-primary"><i class="fa fa-plus"></i>Quiz oluştur.</a>
            </h5>
            <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Quiz</th>
      <th scope="col">Durum</th>
      <th scope="col">Bitiş Tarihi</th>
      <th scope="col">İşlemler</th>
    </tr>
  </thead>
  <tbody>
    @foreach($quizzes as $quiz)
    <tr>
      <th>{{ $quiz->title }}</th>
      <td>{{$quiz->status}}</td>
      <td>{{$quiz->finished_at}}</td>
      <td>
        <a href="#" class="btn btn-sm btn-pencil"><i class="fa fa-edit"></i></a>
        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table> 
{{$quizzes->links()}}   
</div>
        </div>
</x-app-layout>