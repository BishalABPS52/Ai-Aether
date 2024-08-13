function appendToDisplay(value) {
    document.getElementById('display').value += value;
}

function clearDisplay() {
    document.getElementById('display').value = '';
}

function calculateResult() {
    let expression = document.getElementById('display').value;
    try {
        // Replace square root with Math.sqrt
        expression = expression.replace(/sqrt\(([^)]+)\)/g, 'Math.sqrt($1)');
        // Replace exponentiation with ** for eval
        expression = expression.replace(/\^/g, '**');
        let result = eval(expression);
        document.getElementById('display').value = result;
    } catch (e) {
        document.getElementById('display').value = 'Error';
    }
}
