<?php

namespace App\Models;

use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    Protected $guarded =[];
    public function project_category()
    {
        return $this->belongsTo(ProjectCategory::class,'project_category_id','id');
    }
}
