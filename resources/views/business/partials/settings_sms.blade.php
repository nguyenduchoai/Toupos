<div class="pos-tab-content">
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
 
    <div class="clearfix"></div>
        <hr>
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

    </div>
</div>
