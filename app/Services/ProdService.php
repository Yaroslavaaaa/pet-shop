<?php

namespace App\Services;

use http\Env\Request;

interface ProdService
{
    public function getAll();
    public function getById($request, $id);
    public function createNew($request);
    public function updateProd($request, $id);
    public function deleteProd($request, $id);
}
