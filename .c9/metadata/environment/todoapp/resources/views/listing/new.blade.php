{"filter":false,"title":"new.blade.php","tooltip":"/todoapp/resources/views/listing/new.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":11},"action":"insert","lines":["@extends('layouts.app')","@section('content')","<div class=\"panel-body\">","<!-- バリデーションエラーの場合に表示 --> ","@include('common.errors')","","  <!-- リスト作成フォーム -->","  <form action=\"{{ url('listings')}}\" method=\"POST\" class=\"form-horizontal\">","  {{csrf_field()}} ","    <div class=\"form-group\"> ","      <label for=\"listing\" class=\"col-sm-3 control-label\">リスト名</label> ","      <div class=\"col-sm-6\"> ","        <input type=\"text\" name=\"list_name\" class=\"form-control\" value=\"{{ old('list_name') }}\">","      </div>","    </div>","    <div class=\"form-group\"> ","      <div class=\"col-sm-offset-3 col-sm-6\"> ","        <button type=\"submit\" class=\"btn btn-default\">","        <i class=\"glyphicon glyphicon-plus\"></i> 作成 </button> ","      </div>","    </div>","  </form>","</div> ","@endsection"],"id":1}]]},"ace":{"folds":[],"scrolltop":30,"scrollleft":0,"selection":{"start":{"row":23,"column":11},"end":{"row":23,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":37,"mode":"ace/mode/php"}},"timestamp":1589524041448,"hash":"1403046e8540f697dcd293418d4d2e206b92d6f2"}