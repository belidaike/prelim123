<!-- Brandname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BrandName', 'Brandname:') !!}
    {!! Form::text('BrandName', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Stocks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Stocks', 'Stocks:') !!}
    {!! Form::text('Stocks', null, ['class' => 'form-control','maxlength' => 5,'maxlength' => 5]) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Date', 'Date:') !!}
    {!! Form::text('Date', null, ['class' => 'form-control','id'=>'Date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush