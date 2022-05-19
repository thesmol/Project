@extends('layout')
@section('title')
Отзывы
@endsection

@section('main_content')
<h1>Форма добавления отзыва</h1>

@if($errors -> any())
    <div class = "alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/review/check">
    @csrf
    <input type="email" name="email" id="email" placeholder="Введите почту" class="form-control"> <br>
    <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"> <br>
    <textarea name="message" id="message" cols="30" rows="5" class = "form-control" placeholder="Введите сообщение"></textarea> <br>
    <button type="submit" class = "btn btn-success">Отправить</button>
</form>
<br>
<h1>Все отзывы</h1>
@foreach($data as $element)
<div class="container px-4 py-5" id="hanging-icons">
      <div class="col d-flex align-items-start">
        <div>
          <h2>{!! $element->subject !!}</h2>
          <b>{{ $element -> email}}</b>
          <p class="text-break">{{ $element->message }}</p>
        </div>
      </div>
  </div>
@endforeach

@endsection