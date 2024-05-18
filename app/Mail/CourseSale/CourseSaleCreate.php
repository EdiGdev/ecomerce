<?php

namespace App\Mail\CourseSale;

use App\Models\CourseSale;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseSaleCreate extends Mailable
{
    use Queueable, SerializesModels;

    private $courseSale;

    public function __construct(CourseSale $courseSale){
        $this->courseSale = $courseSale;
        $this->courseSale->load('courses');
    }
    public function build(){
        return $this->subject('Compra con número: #'.$this->courseSale->number.' realizada con éxito')
        ->markdown('emails.course-sale.create', [
            'courseSale' => $this->courseSale
        ]);
    }
}
