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

class LeaveRequestNotification extends Mailable
{
    use Queueable, SerializesModels;
 

    public $employee;
    public $leaveRequest;
    /**
     * Create a new message instance.
     */
    public function __construct(Employee $employee, LeaveRequest $leaveRequest)
    {
        $this->employee = $employee;
        $this->leaveRequest = $leaveRequest;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Leave Request Notification',
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

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function build()
    {
        return $this->subject("Leave Request From Leave Tracker")->markdown('Backend.Mail.Admin_mail');
    }

    public function attachments(): array
    {
        return [];
    }
    
}
