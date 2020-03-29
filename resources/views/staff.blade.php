@extends('layouts.default_admin')
@section('title_admin', 'Персонал')
@section('content_admin')
<div id="layoutSidenav_content">
                <main>
           <div class="card mb-4">
<div class="container-fluid px-0 py-0">
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
      @foreach($positions as $position)
        <option value={{ $loop->iteration }}>{{ $position->name }}</option>
      @endforeach
  </select>
</div>
<button type="button" class="btn btn-primary btn-lg btn-block">Добавить</button>

</main>
</div>
    <div class="row">
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Patronymic</th>
                <th scope="col">Birth day</th>
                <th scope="col">Position</th>
            </tr>
            </thead>
            <tbody>
            @foreach($masters as $master)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $master->name }}</td>
                    <td>{{ $master->surname }}</td>
                    <td>{{ $master->patronymic }}</td>
                    <td>{{ $master->b_day }}</td>
                    <td>{{ $position->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

</main>
               </div>
   </div><!--<div id="layoutSidenav">-->
@endsection