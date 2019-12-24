@if ($message = Session::get('success'))
  @component('components.success-message')
    {{$message}}
  @endcomponent
@endif

@if ($message = Session::get('error'))
  @component('components.danger-message')
    {{$message}}
  @endcomponent
@endif

@if ($message = Session::get('warning'))
  @component('components.warning-message')
    {{$message}}
  @endcomponent
@endif

@if ($message = Session::get('info'))
  @component('components.info-message')
    {{$message}}
  @endcomponent
@endif

@if ($errors->any())
  @component('components.danger-message')
    {{$message}}
  @endcomponent
@endif
