<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';

    public string $email = '';

    public string $message = '';

    public bool $sent = false;

    public function submit(): void
    {
        // Livewire is a good fit for forms because validation and submission happen
        // occasionally, unlike counter clicks that may happen many times per second.
        $this->validate([
            'name' => ['required', 'string', 'min:2', 'max:80'],
            'email' => ['required', 'email', 'max:120'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ]);

        // Replace this example with Mail::to(...)->send(...) or database storage in production.
        logger()->info('Tally counter contact form submitted', [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset('name', 'email', 'message');
        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
