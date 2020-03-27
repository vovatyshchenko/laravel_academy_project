@extends('layouts.default_admin')
@section('title_admin', 'Услуги')
@section('content_admin')
<div class="container-fluid px-0 py-0">
		<div class="row">
			<div class="alert alert-primary col-12 text-center font-weight-bold" role="alert">
  			Услуга добавлена успешно!
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 pt-5 text-center">
				<h1>Добавление новой услуги</h1>
			</div>
		</div>
	<div class="row">
	<main class="col-12 col-md-9 col-xl-8 py-md-5 px-md-5 bd-content m-auto" role="main">
	<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Название</span>
  </div>
  <input type="text" class="form-control" placeholder="Название услуги" aria-label="service_name" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Стоимость</span>
  </div>
  <input type="text" class="form-control" placeholder="Стоимисть" aria-label="service_price" aria-describedby="basic-addon2">
</div>
<button type="submit" class="btn btn-primary btn-lg btn-block">Добавить</button>
</main>
</div>
</div>
   </div><!--<div id="layoutSidenav">--> 
@endsection
