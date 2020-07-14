
<label for="{{ $name }}" class="field-label">{{ ucfirst($name) }} </label>
<input type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}" id="{{ $name }}" class="field-input @error('{{ $name }}') field-error @enderror">

@if ($help)
    <small id="{{ $name }}Help" class="form-text text-muted">{{ $help }}</small>
@endif
@error('{{ $name }}')
    <p class="error-message">{{ $message }}</p>
@enderror
