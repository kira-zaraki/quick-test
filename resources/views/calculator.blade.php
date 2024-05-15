<x-layout>
    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/calculate') }}" method="POST">
        @csrf
        <div>
            <label for="number1">Number 1:</label>
            <input type="text" id="number1" name="number1" value="{{ old('number1', $number1 ?? '') }}" required>
        </div>
        <div>
            <label for="number2">Number 2:</label>
            <input type="text" id="number2" name="number2" value="{{ old('number2', $number2 ?? '') }}" required>
        </div>
        <div>
            <label for="operation">Operation:</label>
            <select id="operation" name="operation" required>
                <option value="plus" {{ old('operation', $operation ?? '') == 'plus' ? 'selected' : '' }}>+</option>
                <option value="minus" {{ old('operation', $operation ?? '') == 'minus' ? 'selected' : '' }}>-</option>
                <option value="multiply" {{ old('operation', $operation ?? '') == 'multiply' ? 'selected' : '' }}>*</option>
                <option value="divide" {{ old('operation', $operation ?? '') == 'divide' ? 'selected' : '' }}>/</option>
            </select>
        </div>
        <div>
            <button type="submit">Calculate</button>
        </div>
    </form>

    @isset($result)
        <h2 class="result">Result: {{ $result }}</h2>
    @endisset
</x-layout>

