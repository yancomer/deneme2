<x-app-layout>
    <x-slot name="header">{{$quiz->title}} Quizine ait sorular</x-slot>
    <div class ="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('questions.create',$quiz->id)}}" class="btn btn-sn btn-primary"><i class="fa fa-plus"></i>Soru oluştur.</a>
            </h5>
            <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Soru</th>
      <th scope="col">1.Cevap</th>
      <th scope="col">2.Cevap</th>
      <th scope="col">3.Cevap</th>
      <th scope="col">4.Cevap</th>
      <th scope="col">Doğru Cevap</th>
      <th scope="col" style="width: 110px;">İşlemler</th>
    </tr>
    @foreach($quiz->questions as $question )
    <tr>
      <th>{{ $question->question }}</th>
      <td>{{$question->image}}</td>
      <td>{{$question->answer1}}</td>
      <td>{{$question->answer2}}</td>
      <td>{{$question->answer3}}</td>
      <td>{{$question->answer4}}</td>
      <td class="text-success">{{substr($question->correct_answer,-1)}}. Cevap</td>
      <td>
        <a href="{{route('quizzes.edit',$question->id)}}" class="btn btn-sm btn-pencil"><i class="fa fa-edit"></i></a>
        <a href="{{route('quizzes.destroy',$question->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>

      </td>
    </tr>
    @endforeach
   </thead>
  <tbody>
  </tbody>
            </table> 
        </div>
    </div>
</x-app-layout>