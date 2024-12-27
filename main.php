<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Car Rental</title>
</head>

<body>
    <main class="flex">
        <!-- side-bare -->
        <nav class="h-[100vh] w-[25%] bg-black bg-opacity-95">
            <ul class="flex flex-col gap-4 py-10 px-5 text-white">
                <a href="./main.php"
                    class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Page
                    d'Accueille</li></a>
                <a href="./client/utilisateur.php">
                    <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">
                        Utilisateurs</li>
                </a>
                <a href="./contrat/contrat.php">
                    <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">
                        Contrat
                    </li>
                </a>
                <a href="./car/voitures.php">
                    <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">
                        Voitures
                    </li>
                </a>
            </ul>
            <div class="absolute bottom-2 w-[15%]">
                <ul class="flex justify-evenly">
                    <li><a href="#"><i
                                class="fa-brands fa-facebook text-white hover:scale-110 hover:duration-500"></i></a>
                    </li>
                    <li><a href="#"><i
                                class="fa-brands fa-whatsapp text-white hover:scale-110 hover:duration-500"></i></a>
                    </li>
                    <li><a href="#"><i
                                class="fa-brands fa-instagram text-white hover:scale-110 hover:duration-500"></i></a>
                    </li>
                    <li><a href="#"><i
                                class="fa-brands fa-linkedin text-white hover:scale-110 hover:duration-500"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- context -->
        <section class="bg-gradient-to-r from-indigo-600 p-20">
            <div>
                <h1 class="text-8xl font-medium">Welcome to a Car Rental Management</h1><br>
                <h2 class="text-2xl">Manage your Rentals contracts easely</h2>
            </div>
            <div class="p-7">
                <a href="./client/utilisateur.php"><button
                        class="bg-violet-950 px-6 py-1 text-white text-xl rounded shadow-lg shadow-violet-600 hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85">
                        Add Client Now
                    </button></a>
            </div>
        </section>
    </main>
</body>

</html>