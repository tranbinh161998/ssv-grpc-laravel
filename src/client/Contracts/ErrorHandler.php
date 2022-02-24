<?php

namespace Ssv\GrpcLaravel\Client\Contracts;

interface ErrorHandler
{
    /**
     * @param  $status
     * @param  null $codeToSend
     * @return mixed
     */
    public function handle($status, $codeToSend = null);
}
