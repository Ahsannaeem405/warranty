<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public function updateFooter($data, $id){

        return $this->where('id', $id)
                                ->update($data);
    }
}
