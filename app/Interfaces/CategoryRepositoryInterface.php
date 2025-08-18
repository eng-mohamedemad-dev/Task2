<?php

namespace App\Interfaces;

use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function allByStore(string $storeId);
    public function find(string $id): ?Category;
    public function create(array $data): Category;
    public function update(Category $category, array $data): ?Category;
    public function delete(Category $category): bool;
}


