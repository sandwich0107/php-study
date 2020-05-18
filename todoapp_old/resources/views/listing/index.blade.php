@extends('layouts.app')
@section('content')

<div class="topPage">
  <div class="listWrapper">
     @foreach ($listings as $listing) <!-- ListingsController.phpのindexメソッドからデータ配列で受け取って、foreachを使って一覧を表示  -->
      <div class="list">
        <div class="list_header">
          <h2 class="list_header_title">{{ $listing->title }}</h2> <!--  リストのタイトルを表示する記述 -->
          <div class="list_header_action">
            <a onclick="return confirm('{{ $listing->title }}を削除して大丈夫ですか？')" href="{{ url('/listingsdelete', $listing->id) }}"><i class="fas fa-trash"></i></a>
            <a href="{{ url('/listingsedit', $listing->id) }}"><i class="fas fa-pen"></i></a>
          </div>
        </div>
      </div>
     @endforeach
  </div>
</div>
@endsection
