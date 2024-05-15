function calculate(e) {
    e.preventDefault();
    var number1 = parseFloat(document.getElementById('number1').value);
    var number2 = parseFloat(document.getElementById('number2').value);
    var operation = document.getElementById('operation').value;
    var result;

    switch (operation) {
        case 'plus':
            result = number1 + number2;
            break;
        case 'minus':
            result = number1 - number2;
            break;
        case 'multiply':
            result = number1 * number2;
            break;
        case 'divide':
            result = number2 !== 0 ? number1 / number2 : 'Error: Division by zero';
            break;
        default:
            result = 'Error: Invalid operation';
    }

    document.getElementById('result').textContent = 'Result: ' + result;
}
