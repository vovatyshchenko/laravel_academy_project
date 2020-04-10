<div class="row">
        <div class="form-group">
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
            {!! Form::label('master_id', 'Мастер') !!}
            <select name="master_id" class="form-control">
                @foreach($masterName as $master)
                    <option value="{{ $master->id }}">{{ $master->name }} {{ $master->surname }}</option>
                @endforeach
            </select>
            @error('master_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {!! Form::label('service', 'Услуга') !!}
            <select name="service" class="form-control">
                @foreach($services as $service)
                    <option value="{{ $service->name }} {{ $service->price }}">{{ $service->name }} {{ $service->price }} грн</option>
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
        </div>
</div>


