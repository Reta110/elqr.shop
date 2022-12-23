<!-- Identifier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('identifier', 'Identifier:') !!}
    {!! Form::number('identifier', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::number('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::number('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_to', 'Phone To:') !!}
    {!! Form::number('phone_to', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('banks.index') }}" class="btn btn-secondary">Cancel</a>
</div>
