<?php

namespace App\Notifications;

use App\Models\Admin\Coupon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCouponForUserNotify extends Notification implements ShouldBroadcast, ShouldQueue
{
    use Queueable;

    protected $coupon;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('there is new coupon added from admin .' . $this->coupon->coupon)
            ->action('use it please', route('home'))
            ->line('Thank you for using our ecom!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'name' => $this->coupon->coupon,
            'discount' => $this->coupon->discount,
            'created_at' => $this->coupon->created_at,
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'data' => [
                'name' => $this->coupon->coupon,
                'discount' => $this->coupon->discount,
                'created_at' => $this->coupon->created_at,
            ]
        ]);
    }
}
