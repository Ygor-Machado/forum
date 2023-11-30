<?php

namespace App\DTO\Replies;

class CreateReplyDTO
{
    public function __construct(
        protected string $supportId,
        protected string $content
    ) {
    }


}
