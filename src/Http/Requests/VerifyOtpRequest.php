<?php

namespace NurdauletArtykbaev\CoreAuth\Http\Requests;

class VerifyOtpRequest extends PhoneNumberRequest
{

    public function rules()
    {
        return array_merge(parent::rules(), [
            'code' => 'required|min:4'
        ]);
    }
}