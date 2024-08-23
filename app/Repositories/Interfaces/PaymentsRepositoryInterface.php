<?php

namespace App\Repositories\Interfaces;

interface PaymentsRepositoryInterface
{
    public function save($params);
    public function getById($id);
    public function fetchAll($condition = null);
    public function updateStatus($payment);
}