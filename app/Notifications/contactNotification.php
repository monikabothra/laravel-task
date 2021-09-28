<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;

class contactNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $data;
    public function __construct($data)
    {
        // dd('called');
        $this->data = $data;
        // dd($this->data);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return ['mail','database','nexmo'];
        return ['nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Thank you for contacting us.')
                    ->line('you can contact us with '.$this->data['email'])
                    ->action('Reply', url('/'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
    public function toDatabase($notifiable)
    {
        //  dd($notifiable);
        return [
            'name'=>$this->data['email'],
            'url'=>'/home',
            'message'=>'want to contact with you'
        ];
    }
    public function toNexmo($notifiable)
    {
        dump('nexmo');
        //dd($notifiable);
        return(new NexmoMessage)
        ->content('babudi testing sms service..hihi')
        ->from('team');
        // dump('nexmo');

    }
}

