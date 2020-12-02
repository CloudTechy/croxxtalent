<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class EmployerApplication extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $admin;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, User $admin)
    {
        $this->user = $user;
         $this->admin = $admin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "New Application from Employer {$this->user->display_name}";
        $employer_application_url = "yet to come";
        return $this->subject($subject)
                    ->replyTo( $this->user->email, $this->user->name)
                    ->view('api.emails.employer_application')
                    ->text('api.emails.employer_application_plain')
                    ->with([
                        'admin_name' => $this->admin->display_name,
                        'name' => $this->user->display_name,
                        'email' => $this->user->email,
                        'employer_org_name' => $this->user->employer_org_name,
                        'employer_org_core_services' => $this->user->employer_org_core_services,
                        'employer_org_size' => $this->user->employer_org_size,
                        'employer_org_contact' => $this->user->employer_org_contact,
                        'employer_application_url' => $employer_application_url
                    ]);
    }
}
