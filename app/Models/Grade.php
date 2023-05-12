<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    /**
     * @param $result
     */
    public function addResult($result)
    {
        if ($result > $this->best_grade) {
            $this->best_grade = $result;
        }
        
        if ($this->best_grade >= $this->lowest_passing_grade) {
            $this->passed_at = now();
        }
        
        $this->save();
    }
    
    public function course()
    {
        return $this->belongsTo(Grade::class);
    }
}
