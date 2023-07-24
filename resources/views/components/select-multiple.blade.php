@props(['options' => [], 'selected' => []])

<select multiple {{ $attributes->merge(['class' => 'form-multiselect border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
    @foreach($options as $value => $label)
        <option value="{{ $value }}" {{ in_array($value, $selected) ? 'selected' : '' }}>{{ $label }}</option>
    @endforeach
</select>


@push('select-scripts')
    <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('node_modules/select2/dist/js/select2.min.js') }}"></script>
    <script>
        // Initialize Select2
        $(document).ready(function () {
            $('select[multiple]').select2();
        });
    </script>
@endpush
