<?php

namespace App\Mail;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $client;
    public $product;
    public $waUrl;

    public function __construct(Client $client, Product $product)
    {
        $this->client = $client;
        $this->product = $product;

        // Buat pesan WhatsApp otomatis
        $linkUpload = "https://mantraweb.id/upload-gambar/{$client->id}";
        $linkPembayaran = "https://mantraweb.id/pembayaran/{$client->id}";

        $message = "Halo {$client->name}, terima kasih telah memesan layanan {$product->name} di " . config('app.name') . ".\n\n"
            . "Berikut link penting untuk Anda:\n"
            . "📸 Upload gambar & konten: {$linkUpload}\n"
            . "💰 Pembayaran: {$linkPembayaran}\n\n"
            . "Kami akan segera menghubungi Anda lebih lanjut.";

        $phone = preg_replace('/^0/', '62', $client->phone);
        $this->waUrl = "https://wa.me/{$phone}?text=" . urlencode($message);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pesanan Baru dari ' . $this->client->name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.admin-order',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
