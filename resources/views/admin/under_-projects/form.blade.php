<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('is_ftp') ? 'has-error' : ''}}">
    {!! Form::label('is_ftp', 'Is Ftp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('is_ftp', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('is_ftp', '0', true) !!} No</label>
</div>
        {!! $errors->first('is_ftp', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('emplacement') ? 'has-error' : ''}}">
    {!! Form::label('emplacement', 'Emplacement', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('emplacement', null, ['class' => 'form-control']) !!}
        {!! $errors->first('emplacement', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ftp_host') ? 'has-error' : ''}}">
    {!! Form::label('ftp_host', 'Ftp Host', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ftp_host', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ftp_host', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ftp_user') ? 'has-error' : ''}}">
    {!! Form::label('ftp_user', 'Ftp User', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ftp_user', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ftp_user', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ftp_pwd') ? 'has-error' : ''}}">
    {!! Form::label('ftp_pwd', 'Ftp Pwd', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::password('ftp_pwd', ['class' => 'form-control']) !!}
        {!! $errors->first('ftp_pwd', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ftp_mode') ? 'has-error' : ''}}">
    {!! Form::label('ftp_mode', 'Ftp Mode', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ftp_mode', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ftp_mode', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('project_id') ? 'has-error' : ''}}">
    {!! Form::label('project_id', 'Project Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('project_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('project_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
