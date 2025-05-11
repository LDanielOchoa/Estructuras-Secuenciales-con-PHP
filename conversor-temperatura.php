<?php
// Inicializar variables
$tempResult = "";
$celsius = "";

// Procesar la conversión de temperatura
if (isset($_POST['convert_temp'])) {
    $celsius = $_POST['celsius'];
    
    if (is_numeric($celsius)) {
        $fahrenheit = ($celsius * 9/5) + 32;
        $tempResult = number_format($fahrenheit, 2);
    }
}

// Incluir el encabezado
include 'encabezado.php';
?>

<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden calculator-container">
    <div class="p-6">
        <h3 class="text-xl font-semibold text-indigo-700 mb-4">Conversión de Temperatura: Celsius a Fahrenheit</h3>
        <p class="mb-4 text-gray-600">Ingrese una temperatura en grados Celsius para convertirla a Fahrenheit.</p>
        
        <form method="post" class="space-y-4">
            <div>
                <label for="celsius" class="block text-sm font-medium text-gray-700 mb-1">Temperatura (°C)</label>
                <input type="number" step="0.01" name="celsius" id="celsius" value="<?php echo $celsius; ?>" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            
            <button type="submit" name="convert_temp" 
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300 transform hover:scale-105">
                Convertir a Fahrenheit
            </button>
        </form>
        
        <?php if ($tempResult): ?>
        <div class="mt-6 p-4 bg-indigo-50 rounded-lg result-box">
            <h4 class="font-semibold text-indigo-700">Resultado:</h4>
            <p class="text-lg"><?php echo $celsius; ?>°C equivale a <span class="font-bold text-indigo-700"><?php echo $tempResult; ?>°F</span></p>
            <div class="mt-3 bg-white p-3 rounded-md border border-indigo-100">
                <p class="text-sm text-gray-600">Fórmula: F = (C × 9/5) + 32</p>
                <p class="text-sm text-gray-600">Cálculo: (<?php echo $celsius; ?> × 9/5) + 32 = <?php echo $tempResult; ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php
// Incluir el pie de página
include 'pie.php';
?>
