<?php
// Inicializar variables
$priceResult = "";
$price = "";

// Procesar el cálculo del precio
if (isset($_POST['calculate_price'])) {
    $price = $_POST['price'];
    
    if (is_numeric($price)) {
        $vat = $price * 0.19;
        $total = $price + $vat;
        $priceResult = number_format($total, 2);
    }
}

// Incluir el encabezado
include 'encabezado.php';
?>

<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden calculator-container">
    <div class="p-6">
        <h3 class="text-xl font-semibold text-indigo-700 mb-4">Cálculo del Total a Pagar en una Tienda</h3>
        <p class="mb-4 text-gray-600">Ingrese el precio del producto para calcular el total a pagar con IVA (19%).</p>
        
        <form method="post" class="space-y-4">
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Precio del producto ($)</label>
                <input type="number" step="0.01" name="price" id="price" value="<?php echo $price; ?>" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            
            <button type="submit" name="calculate_price" 
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300 transform hover:scale-105">
                Calcular Total
            </button>
        </form>
        
        <?php if ($priceResult): ?>
        <div class="mt-6 p-4 bg-indigo-50 rounded-lg result-box">
            <h4 class="font-semibold text-indigo-700">Resultado:</h4>
            <div class="mt-3 grid grid-cols-2 gap-2">
                <div class="bg-white p-3 rounded-md border border-indigo-100">
                    <p class="text-sm text-gray-600">Precio sin IVA:</p>
                    <p class="text-lg font-medium">$<?php echo number_format($price, 2); ?></p>
                </div>
                <div class="bg-white p-3 rounded-md border border-indigo-100">
                    <p class="text-sm text-gray-600">IVA (19%):</p>
                    <p class="text-lg font-medium">$<?php echo number_format($price * 0.19, 2); ?></p>
                </div>
            </div>
            <div class="mt-3 bg-indigo-100 p-3 rounded-md">
                <p class="text-sm text-indigo-700">Total a pagar:</p>
                <p class="text-xl font-bold text-indigo-700">$<?php echo $priceResult; ?></p>
            </div>
            <div class="mt-3 bg-white p-3 rounded-md border border-indigo-100">
                <p class="text-sm text-gray-600">Fórmula: Total = Precio + (Precio × 0.19)</p>
                <p class="text-sm text-gray-600">Cálculo: <?php echo number_format($price, 2); ?> + (<?php echo number_format($price, 2); ?> × 0.19) = <?php echo $priceResult; ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php
// Incluir el pie de página
include 'pie.php';
?>
