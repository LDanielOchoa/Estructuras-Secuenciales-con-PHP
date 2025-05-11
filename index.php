<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadoras - POLITÉCNICO MAYOR</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="bg-gradient-to-br from-indigo-50 to-purple-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-10">
            <h1 class="text-3xl font-bold text-indigo-700 mb-2">POLITÉCNICO MAYOR</h1>
            <h2 class="text-xl text-indigo-600">Soluciones Informáticas - Estructuras Secuenciales con PHP</h2>
        </header>
        
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-8 text-center">
                <h3 class="text-2xl font-bold text-indigo-700 mb-6">Seleccione una Calculadora</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <a href="calculadora-imc.php" class="bg-indigo-100 hover:bg-indigo-200 p-6 rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <div class="text-indigo-700 text-4xl mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold">Calculadora IMC</h4>
                        <p class="text-sm text-gray-600 mt-2">Calcule su Índice de Masa Corporal</p>
                    </a>
                    
                    <a href="conversor-temperatura.php" class="bg-indigo-100 hover:bg-indigo-200 p-6 rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <div class="text-indigo-700 text-4xl mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold">Conversor de Temperatura</h4>
                        <p class="text-sm text-gray-600 mt-2">Convierta de Celsius a Fahrenheit</p>
                    </a>
                    
                    <a href="calculadora-precio.php" class="bg-indigo-100 hover:bg-indigo-200 p-6 rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <div class="text-indigo-700 text-4xl mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold">Calculadora de Precio</h4>
                        <p class="text-sm text-gray-600 mt-2">Calcule el precio con IVA</p>
                    </a>
                    
                    <a href="calculadora-tiempo.php" class="bg-indigo-100 hover:bg-indigo-200 p-6 rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <div class="text-indigo-700 text-4xl mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold">Calculadora de Tiempo</h4>
                        <p class="text-sm text-gray-600 mt-2">Calcule el tiempo de viaje</p>
                    </a>
                    
                    <a href="calculadora-interes.php" class="bg-indigo-100 hover:bg-indigo-200 p-6 rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
                        <div class="text-indigo-700 text-4xl mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold">Calculadora de Interés</h4>
                        <p class="text-sm text-gray-600 mt-2">Calcule el interés simple</p>
                    </a>
                </div>
            </div>
        </div>
        
        <footer class="mt-10 text-center text-gray-600 text-sm">
            <p>POLITÉCNICO MAYOR - MÓDULO: SOLUCIONES INFORMATICAS</p>
            <p>TEMA: Estructuras Secuenciales con PHP - PROGRAMA: ASISTENTE EN SISTEMAS</p>
            <p>ELABORADO POR: Daniel Ochoa Castrillón</p>
        </footer>
    </div>
</body>
</html>
