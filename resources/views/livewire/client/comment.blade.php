<div>
    <div id="contact_form" class="form-default">
        <label>{{ trans('Name') }} <span class="req">*</span></label>
        @error('comment.name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <input type="text" wire:model.lazy="comment.name"  class="form-control  @error('comment.name') is-invalid @enderror"/>
        <input type="hidden" wire:model="comment.parent_id" id="parrent_comment" />

        <label>{{ trans('Email') }} <span class="req">*</span></label>
        @error('comment.email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <input type="text" wire:model.lazy="comment.email" class="form-control @error('comment.email') is-invalid @enderror"/>

        <label>{{ trans('Message') }} <span class="req">*</span></label>
        @error('comment.comment')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        <textarea cols="10" rows="10" wire:model.lazy="comment.comment" class="form-control  @error('comment.comment') is-invalid @enderror"></textarea>


        @if(isset($error) and $error)
            <div class="text-danger">{{ $error }}</div>
        @endif
        @if(isset($success) and $success)
            <div class="text-success">
                {{$success}}
            </div>
        @endif
        <p id="btnsubmit">
            <button  wire:loading.attr="disabled"
                   wire:click.prevent="send" class="btn btn-custom">
                {{ trans('SEND') }}
            </button>
        </p>
    </div>
</div>
