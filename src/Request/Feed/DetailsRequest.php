<?php

namespace ImmobiliareLabs\BrazeSDK\Request\Feed;

use ImmobiliareLabs\BrazeSDK\Exception\ValidationException;
use ImmobiliareLabs\BrazeSDK\Request\BaseRequest;

class DetailsRequest extends BaseRequest
{
    public ?string $card_id = null;

    public function validate(bool $strict): void
    {
        if (null === $this->card_id) {
            throw new ValidationException('The "card_id" field is required');
        }
    }
}
