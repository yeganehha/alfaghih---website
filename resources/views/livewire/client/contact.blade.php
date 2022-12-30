<div>
    <div id="contact_form" class="form-border">
        <div class="field-set">
            @error('contact.name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <input type="text" class="form-control @error('contact.name') is-invalid @enderror" wire:model.lazy="contact.name" placeholder="{{ trans('Your') .' '.trans('Name') }}" onblur="this.placeholder='{{ trans('Your') .' '.trans('Name') }}'" onfocus="this.placeholder=''"/>
        </div>
        <div class="field-set">
            @error('contact.email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <input type="text" class="form-control @error('contact.email') is-invalid @enderror" wire:model.lazy="contact.email" placeholder="{{ trans('Your') .' '.trans('Email') }}" onblur="this.placeholder='{{ trans('Your') .' '.trans('Email') }}'" onfocus="this.placeholder=''"/>
        </div>
        <div class="field-set">
            @error('contact.mobile')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <input type="text" class="form-control @error('contact.mobile') is-invalid @enderror" wire:model.lazy="contact.mobile" placeholder="{{ trans('Your') .' '.trans('Phone') }}" onblur="this.placeholder='{{ trans('Your') .' '.trans('Phone') }}'" onfocus="this.placeholder=''"/>
        </div>
        <div class="field-set">
            @error('contact.message')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <textarea class="form-control @error('contact.message') is-invalid @enderror" wire:model.lazy="contact.message" placeholder="{{ trans('Your') .' '.trans('Message') }}" onblur="this.placeholder='{{ trans('Your') .' '.trans('Message') }}'" onfocus="this.placeholder=''"></textarea>
        </div>
        <div class="spacer-half"></div>
        @if(isset($error) and $error)
            <div class="text-danger">{{ $error }}</div>
        @endif
        @if(isset($success) and $success)
            <div class="text-success">
                {{$success}}
            </div>
        @endif
        <div id="submit">
            <input type="button" wire:loading.attr="disabled" wire:click.prevent="send" value="{{ trans('SEND') }}" class="btn btn-custom" />
        </div>
    </div>
</div>
