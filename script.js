function actualizarReloj() {
    const ahora = new Date();
    document.getElementById('fecha-actual').textContent = ahora.toLocaleDateString();
    document.getElementById('hora-actual').textContent = ahora.toLocaleTimeString();
}

if(document.getElementById('fecha-actual')) {
    setInterval(actualizarReloj, 1000);
    actualizarReloj();
}

function convertirPesos() {
    const dolares = parseFloat(document.getElementById('dolares').value);
    if (isNaN(dolares)) {
        document.getElementById('resConvertidor').textContent = "Ingresa un número válido.";
        return;
    }
    const pesos = dolares * 20.0; // Tipo de cambio de referencia
    document.getElementById('resConvertidor').textContent = "Son: $" + pesos.toFixed(2) + " Pesos MXN";
}

function calcular(operacion) {
    const n1 = parseFloat(document.getElementById('num1').value);
    const n2 = parseFloat(document.getElementById('num2').value);
    let resultado = 0;

    if (isNaN(n1) || isNaN(n2)) {
        document.getElementById('resCalculadora').textContent = "Ingresa ambos números.";
        return;
    }

    if (operacion === '+') resultado = n1 + n2;
    if (operacion === '-') resultado = n1 - n2;
    if (operacion === '*') resultado = n1 * n2;
    if (operacion === '/') {
        if (n2 === 0) {
            document.getElementById('resCalculadora').textContent = "No se puede dividir entre cero.";
            return;
        }
        resultado = n1 / n2;
    }

    document.getElementById('resCalculadora').textContent = "Resultado: " + resultado;
}

function calificarQuiz() {
    const respuesta = document.querySelector('input[name="p1"]:checked');
    const mensaje = document.getElementById('resQuiz');

    if (!respuesta) {
        mensaje.textContent = "Selecciona una respuesta.";
        return;
    }

    if (respuesta.value === 'correcto') {
        mensaje.textContent = "¡Respuesta correcta!";
        mensaje.style.color = "green";
    } else {
        mensaje.textContent = "Respuesta incorrecta.";
        mensaje.style.color = "red";
    }
}
