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

    'accepted'             => ':attribute を承認してください。',
    'active_url'           => ':attribute は正しいURLではありません。',
    'after'                => ':attribute は :date より後の日付にしてください。',
    'after_or_equal'       => ':attribute は :date 以降の日付にしてください。',
    'alpha'                => ':attribute は英字のみにしてください。',
    'alpha_dash'           => ':attribute は英数字とハイフンのみにしてください。',
    'alpha_num'            => ':attribute は英数字のみにしてください。',
    'array'                => ':attribute は配列にしてください。',
    'before'               => ':attribute は :date より前の日付にしてください。',
    'before_or_equal'      => ':attribute は :date 以前の日付にしてください。',
    'between'              => [
        'numeric' => ':attribute は :min 〜 :max までにしてください。',
        'file'    => ':attribute は :min 〜 :max KBまでのファイルにしてください。',
        'string'  => ':attribute は :min 〜 :max 文字にしてください。',
        'array'   => ':attribute は :min 〜 :max 個までにしてください。',
    ],
    'boolean'              => ':attribute はtrueかfalseにしてください。',
    'confirmed'            => ':attribute が確認で入力された値と一致していません。',
    'date'                 => ':attribute は正しい日付ではありません。',
    'date_format'          => ':attribute は無効です。',
    'different'            => ':attribute は :other と違うものにしてください。',
    'digits'               => ':attribute は :digits 桁にしてください',
    'digits_between'       => ':attribute は :min 〜 :max 桁にしてください。',
    'dimensions'           => ':attribute は無効な画像サイズです。',
    'distinct'             => ':attribute は値が重複しています。',
    'email'                => ':attribute は有効なメールアドレスではありません。',
    'exists'               => '選択された :attribute は正しくありません。',
    'file'                 => ':attribute はファイルにしてください。',
    'filled'               => ':attribute は必須です。',
    'gt'                   => [
        'numeric' => ':attribute は :value より大きくしてください。',
        'file'    => ':attribute は :value KBよりも大きなファイルにしてください。',
        'string'  => ':attribute は :value 文字より多くしてください。',
        'array'   => ':attribute は :value 個より多くしてください。',
    ],
    'gte'                  => [
        'numeric' => ':attribute は :value 以上にしてください。',
        'file'    => ':attribute は :value KB以上のファイルにしてください。',
        'string'  => ':attribute は :value 文字以上にしてください。',
        'array'   => ':attribute は :value 個以上にしてください。',
    ],
    'image'                => ':attribute は画像にしてください。',
    'in'                   => '選択された :attribute は正しくありません。',
    'in_array'             => ':attribute は :other の中から選んでください。',
    'integer'              => ':attribute は半角数字にしてください。',
    'ip'                   => ':attribute を正しいIPアドレスにしてください。',
    'ipv4'                 => ':attribute を正しいIPv4アドレスにしてください。',
    'ipv6'                 => ':attribute を正しいIPv6アドレスにしてください。',
    'json'                 => ':attribute を正しいJSONにしてください。',
    'lt'                   => [
        'numeric' => ':attribute は :value より小さくしてください。',
        'file'    => ':attribute は :value KBよりも小さなファイルにしてください。',
        'string'  => ':attribute は :value 文字より少なくしてください。',
        'array'   => ':attribute は :value 個より少なくしてください。',
    ],
    'lte'                  => [
        'numeric' => ':attribute は :value 以下にしてください。',
        'file'    => ':attribute は :value KB以下のファイルにしてください。',
        'string'  => ':attribute は :value 文字以下にしてください。',
        'array'   => ':attribute は :value 個以下にしてください。',
    ],
    'max'                  => [
        'numeric' => ':attribute は :max 以下にしてください。',
        'file'    => ':attribute は :max KB以下のファイルにしてください。.',
        'string'  => ':attribute は :max 文字以下にしてください。',
        'array'   => ':attribute は :max 個以下にしてください。',
    ],
    'mimes'                => ':attribute は :values タイプのファイルにしてください。',
    'mimetypes'            => ':attribute は :values タイプのファイルにしてください。',
    'min'                  => [
        'numeric' => ':attribute は :min 以上にしてください。',
        'file'    => ':attribute は :min KB以上のファイルにしてください。.',
        'string'  => ':attribute は :min 文字以上にしてください。',
        'array'   => ':attribute は :min 個以上にしてください。',
    ],
    'not_in'               => '選択された :attribute は正しくありません。',
    'numeric'              => ':attribute は半角数字にしてください。',
    'present'              => ':attribute は存在する必要があります。',
    'regex'                => ':attribute の書式が正しくありません。',
    'not_regex'            => ':attribute の書式が正しくありません。',
    'required'             => ':attribute は必須項目です。',
    'required_if'          => ':other が :value の場合、:attribute は必須です。',
    'required_unless'      => ':other が :value にない場合、:attribute は必須です。',
    'required_with'        => ':values が存在する場合、:attribute は必須です。',
    'required_with_all'    => ':values が存在する場合、:attribute は必須です。',
    'required_without'     => ':values が存在しない場合、:attribute は必須です。',
    'required_without_all' => ':values が存在しない場合、:attribute は必須です。',
    'same'                 => ':attribute と :other が一致していません。',
    'size'                 => [
        'numeric' => ':attribute は :size にしてください。',
        'file'    => ':attribute は :size KBにしてください。',
        'string'  => ':attribute は :size 文字にしてください。',
        'array'   => ':attribute は :size 個にしてください。',
    ],
    'string'               => ':attribute は文字列にしてください。',
    'tel'                  => ':attribute が正しくありません。',
    'timezone'             => ':attribute は正しいタイムゾーンをしていしてください。',
    'unique'               => ':attribute は既に存在します。',
    'uploaded'             => ':attribute はアップロードできませんでした。',
    'url'                  => ':attribute を正しい書式にしてください。',
    'lockout'              => 'The :attribute is lock out.',

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
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'email'    => __('メールアドレス'),
        'password' => __('パスワード'),
        'last_name' => '姓',
        'first_name' => '名',
        'last_name_kana' => 'セイ',
        'first_name_kana' => 'メイ',
        'prefecture' => '都道府県',
        'city' => '市区町村',
        'house_number' => '番地',
        'building_name' => '建物名・部屋番号',
        'phone_number' => '電話番号',
        'prefecture_id' => '都道府県',
        'zip_code' => '郵便番号',
        'gender' => '性別',
        'birth_day' => '生年月日',
        'name' => 'お名前',
        'other_inquiry' => 'その他お問い合わせ',
    ],
];
