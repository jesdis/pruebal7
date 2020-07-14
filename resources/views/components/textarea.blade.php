<label for="{{ $name }}" class="field-label">Contenido:</label>
<textarea name="{{ $name }}" id="{{ $name }}" rows="{{ $rows }}" class="field-textarea @error('{{ $name }}') field-error @enderror">{{ old($name, $content) }}</textarea>
@if ($help)
    <small id="{{ $name }}Help" class="form-text text-muted">{{ $help }}</small>
@endif
@error('{{ $name }}')
    <p class="error-message">{{ $message }}</p>
@enderror