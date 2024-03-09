<?php

namespace Modules\Shop\Repositories\Front\Interfaces;

interface ProductRepositoryInterface
{
    public function findAll($options = []);
    public function findBySku($sku);
    public function findByID($id);
}