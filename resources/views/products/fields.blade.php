<!-- Water Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Water', 'Water:') !!}
    {!! Form::text('Water', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Companyname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CompanyName', 'Companyname:') !!}
    {!! Form::text('CompanyName', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
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