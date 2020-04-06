<div class="row">
        <div class="form-group">
            {!! Form::label('created_at', 'Дата заявки') !!}
            {!! Form::text('created_at', $order->created_at, ['class' => 'form-control']) !!}
            @error('created_at')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {!! Form::label('name', 'Имя') !!}
            {!! Form::text('name', $order->name, ['class' => 'form-control']) !!}
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {!! Form::label('tel', 'Телефон') !!}
            {!! Form::text('tel', $order->tel, ['class' => 'form-control']) !!}
            @error('tel')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {!! Form::label('master', 'Мастер') !!}
            <select name="master" class="form-control">
                @foreach($masterName as $master)
                    <option value="{{ $master->name }}">{{ $master->name }}</option>
                @endforeach
            </select>
            @error('master')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {!! Form::label('service', 'Услуга') !!}
            <select name="service" class="form-control">
                @foreach($services as $service)
                    <option value="{{ $service->name }}">{{ $service->name }}</option>
                @endforeach
            </select>
            @error('service')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {!! Form::label('date', 'Дата') !!}
            {!! Form::date('date', $order->date, ['class' => 'form-control']) !!}
            @error('date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {!! Form::label('time', 'Время') !!}
            {!! Form::text('time', $order->time, ['class' => 'form-control']) !!}
            @error('time')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {!! Form::label('price', 'Стоимость') !!}
            {!! Form::text('price', $order->price, ['class' => 'form-control']) !!}
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
</div>


