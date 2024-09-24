<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 

class QuestionBankExport implements FromCollection, WithHeadings 
{
    public $paper_id;
    public $category_id;

    function __construct($paper_id, $category_id)  
    {
        $this->paper_id  = $paper_id;
        $this->category_id = $category_id;
    }

    
    public function collection()
    {
        return collect([
            [
                $this->paper_id, 
                $this->category_id, 
                'Full form of PHP is?',
                '', // explanation
                '', // hints
                '5', // totalOption
                'Hypertext Preprocessor', // option1
                'Hypertext Preprocessor is a scripting language', // option2
                'Hypertext Preprocessor is a programming language', // option3
                'Hypertext Preprocessor is a markup language', // option4
                'None of these', // option5
                '2', // answer
            ],
        ]);
    }

    
    public function headings(): array
    {
        return [
            'paper_id',
            'category_id',
            'question',
            'explanation',
            'hints',
            'totaloption',
            'option1',
            'option2',
            'option3',
            'option4',
            'option5',
            'answer'
        ];
    }
}
