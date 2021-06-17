@extends('layouts.base')

@section('title','HOME')


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
            <a class="btn btn-black" href="{{route('equipment_registration')}}">備品を登録</a>
        </div>

        <section class="card">
            <div class="card-list mb-20">
                <!-- <h3 class="center">スポンジ</h3> -->
                <div class="card-list--left">
                    <img class="card-img" src="images/DSCF3603.jpg" alt="">
                </div>
                <div class="card-list--right">
                    <div class="card-item">
                        <label class="equipment-tag">備品</label>
                        <p class="item-list">スポンジ</p>
                    </div>
                    <div class="card-item">
                        <label class="equipment-tag">保管場所</label>
                        <p class="item-list">台所の下の収納</p>
                    </div>
                    <div class="card-item">
                        <label class="equipment-tag">残り数量</label>
                        <p class="item-list">5</p>
                    </div>
                    <div class="card-item mb-20">
                        <label class="equipment-tag">リマインド日</label>
                        <p class="item-list">2021-08-21</p>
                    </div>
                    <form action="">
                        <input class="btn btn-black w-100 mb-20" type="submit" value="編集する">
                        <input class="btn btn-white w-100" type="submit" value="削除する">
                    </form>
                </div>
            </div>

            <div class="card-list mb-20">
                <!-- <h3 class="center">スポンジ</h3> -->
                <div class="card-list--left">
                    <img class="card-img" src="images/DSCF3603.jpg" alt="">
                </div>
                <div class="card-list--right">
                    <div class="card-item">
                        <label class="equipment-tag">備品</label>
                        <p class="item-list">スポンジ</p>
                    </div>
                    <div class="card-item">
                        <label class="equipment-tag">保管場所</label>
                        <p class="item-list">台所の下の収納</p>
                    </div>
                    <div class="card-item">
                        <label class="equipment-tag">残り数量</label>
                        <p class="item-list">5</p>
                    </div>
                    <div class="card-item mb-20">
                        <label class="equipment-tag">リマインド日</label>
                        <p class="item-list">2021-08-21</p>
                    </div>
                    <form action="">
                        <input class="btn btn-black w-100 mb-20" type="submit" value="編集する">
                        <input class="btn btn-white w-100" type="submit" value="削除する">
                    </form>
                </div>
            </div>
        </section>



    </div>
</main>

@endsection
