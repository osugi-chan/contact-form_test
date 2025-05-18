<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Contact extends Model
{
    use HasFactory;
    protected $fillable =[
        'last_name',
        'first_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'category_id',
        'detail'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
}

// app/Models/Contact.php

public function getGenderLabelAttribute()
{
    if ($this->gender === 'male') {
        return '男性';
    } elseif ($this->gender === 'female') {
        return '女性';
    } else {
        return 'その他';
    }
}

public function getCategoryLabelAttribute()
{
    switch ((int) $this->category_id) {
        case 1:
            return '商品のお届けについて';
        case 2:
            return '商品の交換について';
        case 3:
            return '商品トラブル';
        case 4:
            return 'ショップへのお問い合わせ';
        case 5:
            return 'その他';
        default:
            return '未設定';
    }
}


}
