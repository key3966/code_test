<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "birthday",
        "occupation",
        "gender",
        "children",
        "is_driver"
    ];

    public function formattedChildren() : string
    {
        if ($this->children > 0) {
            return 'I have '.$this->children.($this->children > 0 ? ' children.':' child.');
        } else {
            return 'No children.';
        }
    }

    // Todo: Fix this Function to return the Date in the format (Year年Month月Day日)
    public function formattedBirthday() : string
    {
        $birthday = $this->birthday;
        return $birthday->format('Md, Y');
    }

    // Todo: Fix this Function to return the Age in YEARS
    public function age() : int
    {
        $now = now();
        $birthday = $this->birthdayy;
        $age = $now->diff($birthday);

        return $age;
    }

    // Todo: Fix this Function to return the appropriate String
    public function selfIntroduction() : string
    {
        $name = $this->name;
        $age = age();
        $occupation = $this["occupatio"];
        // return "Hi, my name is " + $name + ". I am " + $age + " years old" + ($this->age > 17 : " and I work as a ".$occupation".": ".");
    }
}
