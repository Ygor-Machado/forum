<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSupportRequest;

class UpdateSupportDTO
{
    public function __construct(
        public $id,
        public string $subject,
        public string $status,
        public string $body,
    ) {
    }

    public static function makeFromRequest(StoreUpdateSupportRequest $request): self
    {
        return new self(
            $request->id,
            $request->subject,
            'a',
            $request->body,
        );
    }

}
