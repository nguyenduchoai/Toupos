<div class="pos-tab-content">
<!-- 02/10/19 DanhVT add -->
<div class="row well">
    <div class="col-xs-12">
        <h4>
        <label class="radio-inline">
        {!! Form::radio('sms_settings[checked]', 'tousms', $sms_settings['checked'] === 'tousms'); !!} TOUSMS
        </label>
        </h4>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            {!! Form::label('sms_settings[tousms][apikey]', 'API Key:') !!}
            {!! Form::text('sms_settings[tousms][apikey]', $sms_settings['tousms']['apikey'], ['class' => 'form-control','placeholder' => 'API Key']); !!}
        </div>
    </div>
</div>
<div class="row well">
    <div class="col-xs-12">
        <h4>
        <label class="radio-inline">
        {!! Form::radio('sms_settings[checked]', 'esms', $sms_settings['checked'] === 'esms'); !!} ESMS
        </label>
        </h4>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            {!! Form::label('sms_settings[esms][apikey]', 'API Key:') !!}
            {!! Form::text('sms_settings[esms][apikey]', $sms_settings['esms']['apikey'], ['class' => 'form-control','placeholder' => 'API Key']); !!}
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            {!! Form::label('sms_settings[esms][secretkey]', 'Secret Key:') !!}
            {!! Form::text('sms_settings[esms][secretkey]', $sms_settings['esms']['secretkey'], ['class' => 'form-control','placeholder' => 'Secret Key']); !!}
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            {!! Form::label('sms_settings[esms][brandname]', 'Brand Name:') !!}
            {!! Form::text('sms_settings[esms][brandname]', $sms_settings['esms']['brandname'], ['class' => 'form-control','placeholder' => 'Brand Name']); !!}
        </div>
    </div>
</div>
<div class="row well">
    <div class="col-xs-12">
        <h4>
        <label class="radio-inline">
        {!! Form::radio('sms_settings[checked]', 'vht', $sms_settings['checked'] === 'vht'); !!} VHT
        </label>
        </h4>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            {!! Form::label('sms_settings[vht][account]', 'Account Name:') !!}
            {!! Form::text('sms_settings[vht][account]', $sms_settings['vht']['account'], ['class' => 'form-control','placeholder' => 'Account Name']); !!}
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            {!! Form::label('sms_settings[vht][password]', 'Account Password:') !!}
            {!! Form::text('sms_settings[vht][password]', $sms_settings['vht']['password'], ['class' => 'form-control','placeholder' => 'Account Password']); !!}
        </div>
    </div>
</div>

<div class="col-md-8 col-xs-12">
    <div class="form-group">
        <div class="input-group">
            {!! Form::text('test_number', null, ['class' => 'form-control','placeholder' => __('lang_v1.test_number'), 'id' => 'test_number']); !!}
            <span class="input-group-btn">
                <button type="button" class="btn btn-success pull-right" id="test_sms_btn">@lang('lang_v1.test_sms_configuration')</button>
            </span>
        </div>
    </div>
</div>
<!-- 02/10/19 DanhVT end -->
<!-- 02/10/19 DanhVT remove -->
<!-- 02/10/19 DanhVT end -->
</div>
