<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :Thuộc tính này nhất định phải được chấp nhận.',
    'active_url'           => 'The :Thuộc tính không phải là một URL có giá trị.',
    'after'                => 'The :Thuộc tính nhất định phải là một ngày sau :date.',
    'after_or_equal'       => 'The :Thuộc tính nhất định phải là một ngày sau hoặc ngang với :date.',
    'alpha'                => 'The :Thuộc tính có thể chứa các chữ cái.',
    'alpha_dash'           => 'The :Thuộc tính có thể chứa các chữ cái, số và các gạch ngang.',
    'alpha_num'            => 'The :Thuộc tính có thể chứa các chữ cái, số.',
    'array'                => 'The :Thuộc tính phải là một mảng.',
    'before'               => 'The :Thuộc tính nhất định phải là một ngày trước :date.',
    'before_or_equal'      => 'The :Thuộc tính nhất định phải là một ngày trước hoặc ngang với :date.',
    'between'              => [
        'numeric' => 'The :Thuộc tính nhất định nằm giữa :min and :max.',
        'file'    => 'The :Thuộc tính nhất định nằm giữa :min and :max kilobytes.',
        'string'  => 'The :Thuộc tính nhất định nằm giữa :min and :max kí tự.',
        'array'   => 'The :Thuộc tính nhất định nằm giữa :min and :max items.',
    ],
    'boolean'              => 'The :Trường Thuộc tính nhất định phải là đúng hoặc sai.',
    'confirmed'            => 'The :Xác nhận thuộc tính không khớp.',
    'date'                 => 'The :Thuộc tính không phải là một giá trị.',
    'date_format'          => 'The :Thuộc tính không khớp với format :format.',
    'different'            => 'The :Thuộc tính và :other nhất đinh phải khác nhau.',
    'digits'               => 'The :Thuộc tính nhất định là :digits chữ số.',
    'digits_between'       => 'The :Thuộc tính nhất định nằm giữa :min and :max chữ số.',
    'dimensions'           => 'The :Thuộc tính có kích thước hình ảnh không hợp lệ.',
    'distinct'             => 'The :Trường Thuộc tính có giá trị lặp lại.',
    'email'                => 'The :Thuộc tính nhất định phải là một địa chỉ email.',
    'exists'               => 'The selected :Thuộc tính không hợp lệ.',
    'file'                 => 'The :Thuộc tính nhất định phải là một tệp.',
    'filled'               => 'The :tệp thuộc tính nhất định phải là một giá trị.',
    'image'                => 'The :thuộc tính nhất định phải là hình ảnh.',
    'in'                   => 'The selected :Thuộc tính không hợp lệ.',
    'in_array'             => 'The :tệp thuộc tính không tồn tại trong :other.',
    'integer'              => 'The :thuộc tính nhất định phải số nguyên.',
    'ip'                   => 'The :thuộc tính nhất định phải là một địa chỉ IP có giá trị.',
    'ipv4'                 => 'The :thuộc tính nhất định phải là một địa chỉ IPv4 có giá trị.',
    'ipv6'                 => 'The :thuộc tính nhất định phải là một địa chỉ IPv6 có giá trị.',
    'json'                 => 'The :thuộc tính nhất định phải là một chuối JSON có giá trị.',
    'max'                  => [
        'numeric' => 'The :thuộc tính không thể lớn hơn :max.',
        'file'    => 'The :thuộc tính không thể lớn hơn :max kilobytes.',
        'string'  => 'The :thuộc tính không thể lớn hơn :max kí tự.',
        'array'   => 'The :thuộc tính không thể có nhiều hơn :max items.',
    ],
    'mimes'                => 'The :thuộc tính nhất định phải là một tệp loại: :values.',
    'mimetypes'            => 'The :thuộc tính nhất định phải là một tệp loại: :values.',
    'min'                  => [
        'numeric' => 'The :thuộc tính nhất định phải tối thiểu là :min.',
        'file'    => 'The :thuộc tính nhất định phải tối thiểu là :min kilobytes.',
        'string'  => 'The :thuộc tính nhất định phải tối thiểu là :min kí tự.',
        'array'   => 'The :thuộc tính tối thiểu phải có :min items.',
    ],
    'not_in'               => 'The selected :Thuộc tính không hợp lệ.',
    'numeric'              => 'The :thuộc tính nhất định phải là một con số.',
    'present'              => 'The :Tệp thuộc tính nhất định phải được giới thiệu.',
    'regex'                => 'The :Định dạng thuộc tính không hợp lệ.',
    'required'             => 'The :Trường thuộc tính là bắt buộc.',
    'required_if'          => 'The :Trường thuộc tính là bắt buộc khi :other là :value.',
    'required_unless'      => 'The :Trường thuộc tính là bắt buộc nếu không :other là trong :values.',
    'required_with'        => 'The :Trường thuộc tính là bắt buộc khi :values được giới thiệu.',
    'required_with_all'    => 'The :Trường thuộc tính là bắt buộc khi:values được giới thiệu.',
    'required_without'     => 'The :Trường thuộc tính là bắt buộc khi :values được giới thiệu.',
    'required_without_all' => 'The :Trường thuộc tính là bắt buộc khi none of :values được giới thiệu.',
    'same'                 => 'The :Thuộc tính và :other nhất định phải khớp.',
    'size'                 => [
        'numeric' => 'The :thuộc tính nhất định phải là :size.',
        'file'    => 'The :thuộc tính nhất định phải là :size kilobytes.',
        'string'  => 'The :thuộc tính nhất định phải là :size kí tự.',
        'array'   => 'The :thuộc tính nhất định phải chứa :size items.',
    ],
    'string'               => 'The :thuộc tính nhất định phải là một chuỗi.',
    'timezone'             => 'The :thuộc tính nhất định phải là một vùng giá trị.',
    'unique'               => 'The :Thuộc tính đã được sử dụng.',
    'uploaded'             => 'The :Thuộc tính tải lên thất bại.',
    'url'                  => 'The :Định dạng thuộc tính không hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'tùy chỉnh-tin nhắn',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],
    'custom-messages' => [
        'quantity_not_available' => 'chỉ :qty :unit available',
        'this_field_is_required' => 'Trường này là bắt buộc'
    ],

];