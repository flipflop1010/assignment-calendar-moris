<div>
    <form wire:submit.prevent="createEvent">
        <div class="form-group">
            <label for="event_title">Event Title:</label>
            <input type="text" class="form-control @error('event_title') is-invalid @enderror" id="event_title" wire:model="event_title" >
            @error('event_title') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="meeting_link">Meeting Link:</label>
            <input type="text" class="form-control @error('meeting_link') is-invalid @enderror" id="meeting_link" wire:model="meeting_link" >
            @error('meeting_link') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
    
        <div class="form-group">
            <label for="start_date">Start Date:</label>
            <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" wire:model="start_date" >
            @error('start_date') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
    
        <div class="form-group">
            <label for="start_time">Start Time:</label>
            <input type="time" class="form-control @error('start_time') is-invalid @enderror" id="start_time" wire:model="start_time" >
            @error('start_time') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
    
        <div class="form-group">
            <label for="end_date">End Date:</label>
            <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" wire:model="end_date" >
            @error('end_date') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
    
        <div class="form-group">
            <label for="end_time">End Time:</label>
            <input type="time" class="form-control @error('end_time') is-invalid @enderror" id="end_time" wire:model="end_time" >
            @error('end_time') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
    
        <!-- Add other fields as needed -->
    
        <button type="submit" class="btn btn-primary">Create Event</button>
    </form>
    
    
</div>
