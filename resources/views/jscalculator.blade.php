<x-layout>
    <form onsubmit="calculate(event)">
        <div class="calculator-form">
            <input type="text" id="number1" placeholder="Enter number 1" required>
            <input type="text" id="number2" placeholder="Enter number 2" required>
            <select id="operation" required>
                <option value="plus">+</option>
                <option value="minus">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <button>Calculate</button>
        </div>
        <div id="result" class="result"></div>
    </form>
    @push('scripts')
        <script src="{{ asset('js/calculator.js') }}"></script> <!-- Include the JavaScript file for calculations -->
    @endpush
</x-layout>