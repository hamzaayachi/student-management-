<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batches';
    protected $primaryKey = 'id';
    protected $fillable = ['name','course_id','star_date'];



    public function Course(){

        return $this->BelongsTo(Course::class);
    }

}
