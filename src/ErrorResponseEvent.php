<?php
declare(strict_types=1);

namespace hipanel\hiart;

use hiqdev\hiart\ResponseInterface;
use yii\base\Event;

class ErrorResponseEvent extends Event
{
    public function __construct(
        public readonly ResponseInterface $response,
        $config = []
    ) {
        parent::__construct($config);
    }
}
