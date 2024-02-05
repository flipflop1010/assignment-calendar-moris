<div>
   

    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#flipModal">
        Launch demo modal
    </button> --}}

    <button wire:click="$dispatch('event-modal-show')">Modal Event</button>

    <!-- Modal -->
    <div class="modal fade" id="flipModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($children as $key=>$child)
                        @livewire($child,key($key))
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

@script
<script>
    $wire.on('event-modal-show', () => {
        console.log('modal log');
        $('#flipModal').modal('show');
    });
</script>
@endscript

