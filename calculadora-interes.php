<?php
// Inicializar variables
$interestResult = "";
$capital = $rate = $years = "";

// Procesar el cálculo del interés
if (isset($_POST['calculate_interest'])) {
    $capital = $_POST['capital'];
    $rate = $_POST['rate'];
    $years = $_POST['years'];
    
    if (is_numeric($capital) && is_numeric($rate) && is_numeric($years)) {
        $interest = $capital * ($rate/100) * $years;
        $total = $capital + $interest;
        $interestResult = [
            'interest' => number_format($interest, 2),
            'total' => number_format($total, 2)
        ];
    }
}

// Incluir el encabezado
include 'encabezado.php';
?>

<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden calculator-container">
    <div class="p-6">
        <h3 class="text-xl font-semibold text-indigo-700 mb-4">Cálculo del Interés Simple en un Préstamo</h3>
        <p class="mb-4 text-gray-600">Ingrese el capital, la tasa de interés anual y el tiempo para calcular el interés simple.</p>
        
        <form method="post" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label for="capital" class="block text-sm font-medium text-gray-700 mb-1">Capital ($)</label>
                    <input type="number" step="0.01" name="capital" id="capital" value="<?php echo $capital; ?>" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label for="rate" class="block text-sm font-medium text-gray-700 mb-1">Tasa de interés anual (%)</label>
                    <input type="number" step="0.01" name="rate" id="rate" value="<?php echo $rate; ?>" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label for="years" class="block text-sm font-medium text-gray-700 mb-1">Tiempo (años)</label>
                    <input type="number" name="years" id="years" value="<?php echo $years; ?>" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
            </div>
            
            <button type="submit" name="calculate_interest" 
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300 transform hover:scale-105">
                Calcular Interés
            </button>
        </form>
        
        <?php if (is_array($interestResult)): ?>
        <div class="mt-6 p-4 bg-indigo-50 rounded-lg result-box">
            <h4 class="font-semibold text-indigo-700">Resultado:</h4>
            <div class="mt-3 grid grid-cols-1 md:grid-cols-3 gap-2">
                <div class="bg-white p-3 rounded-md border border-indigo-100">
                    <p class="text-sm text-gray-600">Capital:</p>
                    <p class="text-lg font-medium">$<?php echo number_format($capital, 2); ?></p>
                </div>
                <div class="bg-white p-3 rounded-md border border-indigo-100">
                    <p class="text-sm text-gray-600">Interés a pagar:</p>
                    <p class="text-lg font-medium">$<?php echo $interestResult['interest']; ?></p>
                </div>
                <div class="bg-indigo-100 p-3 rounded-md">
                    <p class="text-sm text-indigo-700">Total a pagar:</p>
                    <p class="text-lg font-bold text-indigo-700">$<?php echo $interestResult['total']; ?></p>
                </div>
            </div>
            <div class="mt-3 bg-white p-3 rounded-md border border-indigo-100">
                <p class="text-sm text-gray-600">Fórmula: Interés = Capital × Tasa × Tiempo</p>
                <p class="text-sm text-gray-600">Cálculo: <?php echo number_format($capital, 2); ?> × <?php echo $rate; ?>% × <?php echo $years; ?> años = $<?php echo $interestResult['interest']; ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php
// Incluir el pie de página
include 'pie.php';
?>
