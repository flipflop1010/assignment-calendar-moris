<?php

namespace App\Livewire\Event;

use App\Http\Traits\NotificationTrait;
use App\Models\Event;
use Livewire\Component;

class EventCreateComp extends Component
{
    use NotificationTrait;

    public $event_title;
    public $start_date;
    public $start_time;
    public $end_date;
    public $end_time;
    public $meeting_link;

    protected $rules=[
        'event_title' => 'required|string|max:255',
        'start_date' => 'required|date',
        'start_time' => 'required|date_format:H:i',
        'end_date' => 'required|date|after_or_equal:start_date',
        'end_time' => 'required|date_format:H:i|after:start_time',
        'meeting_link'=>'required'

    ];

    public function mount(){
        $this->start_date=now()->format('Y-m-d');
        $this->end_date=now()->format('Y-m-d');
        $this->start_time=now()->format('H:i');
        $this->end_time=now()->addMinutes(30)->format('H:i');
    }


    public function render()
    {
        return view('livewire.event.event-create-comp');
    }


    public function createEvent()
    {
        $validatedData=$this->validate();

        // Your logic to create the event goes here
        // $this->dispatch('event-notification',message:'New Event created successfully');
        $validatedData['user_id']=auth()->id();
        $newEvent=Event::create($validatedData);

        $this->_sendSuccessNotification('New Event created successfully');
        
        // $this->dispatchBrowserEvent('post-created', ['title' => $post->title]);

        // After event creation, you might want to reset the form fields
        $this->reset();
        $this->mount();
       

        return redirect('/');
    }
}
