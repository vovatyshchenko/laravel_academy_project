@extends('layouts.default_admin')
@section('title_admin', 'Персонал')
@section('content_admin')
<div id="layoutSidenav_content">
                <main>
           <div class="card mb-4">
<div class="container-fluid">
  <div class="row">
    <div class="alert alert-primary col-12 text-center font-weight-bold" role="alert">
          Работник добавлен успешно!
    </div>
  </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12 pt-5 text-center">
			<h1>Добавление нового работника</h1>
		</div>
  </div>
	<div class="row">
	<main class="col-12 col-md-9 col-xl-8 py-md-5 px-md-5 bd-content m-auto" role="main">
	<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Фимилия</span>
  </div>
  <input type="text" class="form-control" placeholder="Фимилия" aria-label="name" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Имя</span>
  </div>
  <input type="text" class="form-control" placeholder="Имя" aria-label="surname" aria-describedby="basic-addon2">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Отчество</span>
  </div>
  <input type="text" class="form-control" placeholder="Отчество" aria-label="patronymic" aria-describedby="basic-addon3">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon4">Число, месяц, год рождения</span>
  </div>
  <input type="text" name="birthday" value="01/01/1990" class="form-control" aria-label="patronymic" aria-describedby="basic-addon4">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Специализация</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option value="1">Парикмахер</option>
    <option value="2">Барбер</option>
    <option value="3">Может все</option>
  </select>
</div>
<button type="button" class="btn btn-primary btn-lg btn-block">Добавить</button>
</main>
</div>
</div>
</main>
               </div>
   </div><!--<div id="layoutSidenav">--> 
@endsection
