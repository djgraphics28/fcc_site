@props(['disabled' => false, 'value' => ''])

<input {{ $disabled ? 'disabled' : '' }} type="number" {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm', 'data-inputmask' => "'mask': '(999) 999-9999'", ]) }} value="{{ $value }}">

@push('contact-scripts')
    <script src="{{ asset('node_modules/inputmask/dist/inputmask.min.js') }}"></script>
    <script>
        // Add contact number masking
        document.addEventListener('DOMContentLoaded', function () {
            Inputmask().mask(document.querySelector('input[name="contactNumber"]'));
        });
    </script>
@endpush
