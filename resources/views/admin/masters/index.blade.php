@extends('admin.layouts.default')
@section('title_admin', 'Персонал')
@section('content_admin')
<div id="layoutSidenav_content">
       <div class="card mb-4">
			<div class="container">
	<div class="row">
	<main class="col-12 col-md-9 col-xl-8 py-md-5 px-md-5 bd-content m-auto" role="main">
        <div class="row">
            <a class="btn btn-primary btn-lg" href="{{ route('admin.masters.create') }}" role="button">Добавить нового работника</a>
        </div>
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
