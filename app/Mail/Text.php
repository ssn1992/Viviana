<?php 
 
namespace App\Mail; 
 
use Illuminate\Bus\Queueable; 
use Illuminate\Mail\Mailable; 
use Illuminate\Queue\SerializesModels; 
use Illuminate\Contracts\Queue\ShouldQueue; 
 
class Text extends Mailable
{ 
    use Queueable, SerializesModels; 
 
    /** 
     * Create a new message instance. 
     * 
     * @return void 
     */ 
    public function __construct($content) 
    { 
        $this->content = $content;

    } 
 
    /** 
     * Build the message.
     * 
     * @return $this 
     */ 
    public function build() 
    {
        return $this->view('emails.send-text')
            ->subject('Mensagem Website')
            ->with([
                'name'      => $this->content['name'],
                'email'     => $this->content['email'],
                'text'      => $this->content['text'],
            ]);
    }
}
