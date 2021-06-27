@extends('layouts.base')
@section('title','備品登録')

@section('content')

<main class="main">
  <!-- コンテンツ幅  w1000px-->
  <div class="container site-width bg-lightgray">
    <h3 class="center form-title">編集ページ</h3>
    <div class="equipment-form--container">
      <div class="img-container">
        <img class="edit-img" src="images/DSCF3603.jpg" alt="">
      </div>
      <form class="form" method="post" action="{{route('equipment.update',['id'=>$equipment->id])}}">
        @if(count($errors) > 0)
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif
        @csrf
        <label for="name">備品名</label>
        <input id="name" class="form-field" type="text" name="equipment_name" value="{{$equipment->equipment_name}}">
        <label for="storage">保管場所</label>
        <input id="storage" class="form-field" type="text" name="storage_location" value="{{$equipment->storage_location}}">
        <label for="quantity">ストック個数</label>
        <input id="quantity" class="form-field" type="text" name="quantity" value="{{$equipment->quantity}}">
        <label for="">リマインド日</label>
        <input type="date" name="notification_date" value="{{$equipment->notification_date}}">
        <input class="form-btn btn-black" type="submit" value="完了">
      </form>
      <form method="post" action="{{route('equipment.destroy',['id'=>$equipment->id])}}">
        @csrf
        <input class="form-btn btn-black" type="submit" value="削除">
      </form>
    </div>
  </div>
</main>
@endsection
