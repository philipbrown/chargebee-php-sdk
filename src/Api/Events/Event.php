<?php

namespace NathanDunn\Chargebee\Api\Events;

use Http\Client\Exception;
use NathanDunn\Chargebee\Api\AbstractApi;

class Event extends AbstractApi
{
    /**
     * @param array $parameters
     * @return array|string
     * @throws Exception
     */
    public function list(array $parameters = [])
    {
        $resolver = $this->createOptionsResolver();

        $url = $this->url('events');

        return $this->get($url, $resolver->resolve($parameters));
    }

    /**
     * @param $id
     * @return array|string
     * @throws Exception
     */
    public function find($id)
    {
        $url = $this->url('events/%s', $id);

        return $this->get($url);
    }
}