<?php
// Inicializar variables
$bmiResult = "";
$weight = $height = "";

// Procesar el cálculo del IMC
if (isset($_POST['calculate_bmi'])) {
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    
    if (is_numeric($weight) && is_numeric($height) && $height > 0) {
        $bmi = $weight / pow($height, 2);
        $bmiResult = number_format($bmi, 2);
    }
}

// Incluir el encabezado
include 'encabezado.php';
?>

<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden calculator-container">
    <div class="p-6">
        <h3 class="text-xl font-semibold text-indigo-700 mb-4">Cálculo del Índice de Masa Corporal (IMC)</h3>
        <p class="mb-4 text-gray-600">Ingrese su peso en kilogramos y su altura en metros para calcular su IMC.</p>
        
        <form method="post" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="weight" class="block text-sm font-medium text-gray-700 mb-1">Peso (kg)</label>
                    <input type="number" step="0.01" name="weight" id="weight" value="<?php echo $weight; ?>" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label for="height" class="block text-sm font-medium text-gray-700 mb-1">Altura (m)</label>
                    <input type="number" step="0.01" name="height" id="height" value="<?php echo $height; ?>" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
            </div>
            
            <button type="submit" name="calculate_bmi" 
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300 transform hover:scale-105">
                Calcular IMC
            </button>
        </form>
        
        <?php if ($bmiResult): ?>
        <div class="mt-6 p-4 bg-indigo-50 rounded-lg result-box">
            <h4 class="font-semibold text-indigo-700">Resultado:</h4>
            <p class="text-lg">Su IMC es: <span class="font-bold text-indigo-700"><?php echo $bmiResult; ?></span></p>
            <p class="text-sm text-gray-600 mt-2">
                <?php
                if ($bmiResult < 18.5) {
                    echo "Categoría: Bajo peso";
                } elseif ($bmiResult < 25) {
                    echo "Categoría: Peso normal";
                } elseif ($bmiResult < 30) {
                    echo "Categoría: Sobrepeso";
                } else {
                    echo "Categoría: Obesidad";
                }
                ?>
            </p>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php
// Incluir el pie de página
include 'pie.php';
?>
