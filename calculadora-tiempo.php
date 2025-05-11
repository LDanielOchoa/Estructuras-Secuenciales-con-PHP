<?php
// Inicializar variables
$timeResult = "";
$distance = $speed = "";

// Procesar el cálculo del tiempo
if (isset($_POST['calculate_time'])) {
    $distance = $_POST['distance'];
    $speed = $_POST['speed'];
    
    if (is_numeric($distance) && is_numeric($speed) && $speed > 0) {
        $time = $distance / $speed;
        $timeResult = number_format($time, 2);
    }
}

// Incluir el encabezado
include 'encabezado.php';
?>

<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden calculator-container">
    <div class="p-6">
        <h3 class="text-xl font-semibold text-indigo-700 mb-4">Cálculo del Tiempo de Viaje en Carro</h3>
        <p class="mb-4 text-gray-600">Ingrese la distancia a recorrer y la velocidad promedio para calcular el tiempo de viaje.</p>
        
        <form method="post" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="distance" class="block text-sm font-medium text-gray-700 mb-1">Distancia (km)</label>
                    <input type="number" step="0.01" name="distance" id="distance" value="<?php echo $distance; ?>" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label for="speed" class="block text-sm font-medium text-gray-700 mb-1">Velocidad (km/h)</label>
                    <input type="number" step="0.01" name="speed" id="speed" value="<?php echo $speed; ?>" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
            </div>
            
            <button type="submit" name="calculate_time" 
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300 transform hover:scale-105">
                Calcular Tiempo
            </button>
        </form>
        
        <?php if ($timeResult): ?>
        <div class="mt-6 p-4 bg-indigo-50 rounded-lg result-box">
            <h4 class="font-semibold text-indigo-700">Resultado:</h4>
            <p class="text-lg">El tiempo de viaje es: <span class="font-bold text-indigo-700"><?php echo $timeResult; ?> horas</span></p>
            <?php
            $hours = floor($timeResult);
            $minutes = round(($timeResult - $hours) * 60);
            ?>
            <div class="mt-3 grid grid-cols-2 gap-2">
                <div class="bg-white p-3 rounded-md border border-indigo-100">
                    <p class="text-sm text-gray-600">Horas:</p>
                    <p class="text-lg font-medium"><?php echo $hours; ?></p>
                </div>
                <div class="bg-white p-3 rounded-md border border-indigo-100">
                    <p class="text-sm text-gray-600">Minutos:</p>
                    <p class="text-lg font-medium"><?php echo $minutes; ?></p>
                </div>
            </div>
            <div class="mt-3 bg-white p-3 rounded-md border border-indigo-100">
                <p class="text-sm text-gray-600">Fórmula: Tiempo = Distancia / Velocidad</p>
                <p class="text-sm text-gray-600">Cálculo: <?php echo $distance; ?> / <?php echo $speed; ?> = <?php echo $timeResult; ?> horas</p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php
// Incluir el pie de página
include 'pie.php';
?>
