@extends('layouts.app')
@section('title','Register')
@section('content')


<div class=" block mx-auto my-12 p-8 bg-success">
    <form action="" method="POST" class="">
        <label for="matricula"> Matricula</label>
        <input type="text" placeholder="00-00-0000" id="matricula" name="matricula">
        <br>
        <label for="matricula"> Usuario</label>
        <input type="text" placeholder="" id="usuario" name="usuario">
        <br>
        <button type="submit"> Ingresar</button>
    </form>
  </div>
@endsection
