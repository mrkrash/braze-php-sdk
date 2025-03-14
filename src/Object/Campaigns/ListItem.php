<?php

namespace ImmobiliareLabs\BrazeSDK\Object\Campaigns;

use DateTimeImmutable;
use DateTimeInterface;
use ImmobiliareLabs\BrazeSDK\Object\BaseObject;

class ListItem extends BaseObject
{
    public ?string $id = null;

    public ?DateTimeInterface $last_edited = null;

    public ?string $name = null;

    public ?bool $is_api_campaign = null;

    /** @var ?string[] */
    public ?array $tags = null;

    /**
     * @throws \Exception
     */
    public function fillFromArray(array $params, bool $allowExtraProperties = false): void
    {
        if (isset($params['last_edited']) && is_string($params['last_edited'])) {
            $this->last_edited = new DateTimeImmutable($params['last_edited']);
        }

        parent::fillFromArray($params);
    }
}
