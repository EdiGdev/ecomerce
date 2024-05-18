<?php

namespace App\Mail\CourseSale;

use App\Models\CourseSale;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseSaleChangePaymentStatus extends Mailable
{
    use Queueable, SerializesModels;

    private $courseSale;

    public function __construct(CourseSale $courseSale){
        $this->courseSale = $courseSale;
    }
    public function build(){
        return $this->subject('Se actualizó el pago: '.$this->courseSale->number)
        ->markdown('emails.course-sale.change-payment-status', [
            'courseSale' => $this->courseSale
        ]);
    }
}
