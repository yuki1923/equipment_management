@extends('layouts.base')
@section('title','備品登録')

@section('content')

<main class="main">
  <!-- コンテンツ幅  w1000px-->
  <div class="container site-width bg-lightgray">
    <h3 class="center form-title">登録ページ</h3>
    <div class="equipment-form--container">
      <div class="img-container">
        <img class="edit-img" src="images/DSCF3603.jpg" alt="">
      </div>
      <form class="form" method="post" action="{{route('equipment.store')}}">
        @if(count($errors) > 0)
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif
        @csrf
        <label for="name">備品名</label>
        <input id="name" class="form-field" type="text" name="equipment_name" value="{{old('equipment_name')}}">
        <label for="storage">保管場所</label>
        <input id="storage" class="form-field" type="text" name="storage_location" value="{{old('storage_location')}}">
        <label for="quantity">ストック個数</label>
        <input id="quantity" class="form-field" type="text" name="quantity" value="{{old('quantity')}}">
        <label for="">リマインド日</label>
        <input type="date" name="notification_date" value="{{old('notification_date')}}">
        <input class="form-btn btn-black" type="submit" value="登録する">
      </form>
    </div>
  </div>
</main>
@endsection
