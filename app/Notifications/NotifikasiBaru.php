<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifikasiBaru extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

/**
 * Get the mail representation of the notification.
 */
public function toMail(object $notifiable): MailMessage
{
    return (new MailMessage)
                ->subject('Pemberitahuan Penting') // Judul Email
                ->greeting('Halo, Pengguna!')      // Salam Pembuka
                ->line('Ini adalah notifikasi baru dari aplikasi Anda.') // Isi Utama
                ->action('Lihat Detail', url('/')) // Tombol Aksi (Opsional)
                ->line('Terima kasih telah menggunakan aplikasi kami!'); // Penutup
}


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
