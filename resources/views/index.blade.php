@extends('layouts.base')

@section('title','HOME')
@section('header')



@section('content')
<main class="main">
    <!-- コンテンツ幅  w1000px-->
    <div class="container site-width bg-lightgray">
        <div class="search-menu">
            <form class="search-form" action="" method="get">
                <label class="sort" for="sort">表示順</label>
                <select id="sort" class="select-box" name="">
                    <option value="サンプル1">リマインド日が近い順</option>
                    <option value="サンプル2">リマインド日が遠い順</option>
                    <option value="サンプル3">数量が少ない順</option>
                    <option value="サンプル3">数量が多い順</option>
                </select>
            </form>
            <a class="btn btn-black" href="{{route('equipment.create')}}">備品を登録</a>
        </div>
        <section class="card">
            @if(!$equipment)
            <h3>まだ備品が登録されていません</h3>
            @else
            @foreach($equipment as $val)
            <div class="card-list mb-20">
                <!-- <h3 class="center">スポンジ</h3> -->
                <div class="card-list--left">
                    <img class="card-img" src="images/DSCF3603.jpg" alt="">
                </div>
                <div class="card-list--right">
                    <div class="card-item">
                        <label class="equipment-tag">備品</label>
                        <p class="item-list">{{$val->equipment_name}}</p>
                    </div>
                    <div class="card-item">
                        <label class="equipment-tag">保管場所</label>
                        <p class="item-list">{{$val->storage_location}}</p>
                    </div>
                    <div class="card-item">
                        <label class="equipment-tag">残り数量</label>
                        <p class="item-list">{{$val->quantity}}</p>
                    </div>
                    <div class="card-item mb-20">
                        <label class="equipment-tag">リマインド日</label>
                        <p class="item-list">{{$val->notification_date}}</p>
                    </div>
                    <!-- <form method="post" action=""> -->
                    <a class="btn btn-black w-100 mb-20" href="{{route('equipment.edit',['id'=>$val->id])}}">編集する</a>
                    <!-- <input class="btn btn-white w-100" type="submit" value="削除する"> -->
                    <!-- </form> -->
                </div>
            </div>
            @endforeach
            @endif
        </section>



    </div>
</main>

@endsection
