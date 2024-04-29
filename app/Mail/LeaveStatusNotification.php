<?php

namespace App\Mail;

use App\Models\Employee;
use App\Models\LeaveRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class LeaveStatusNotification extends Mailable
{
    use Queueable, SerializesModels;
    public $leave;
    public $message;
    public $employee;

    /**
     * Create a new message instance.
     */
    public function __construct(LeaveRequest $leave, $message,$employee)
    {
        $this->leave = $leave;
        $this->message = $message;
        $this->employee = $employee;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Leave Status Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }
    public function build()
    {
        return $this->subject("Leave Request From Leave Tracker")->markdown('Backend.Mail.Employee_mail');
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
