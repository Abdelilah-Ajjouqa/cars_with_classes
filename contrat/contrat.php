<?php
require '../config-db.php';
$result = $conn->query("SELECT * FROM contrat");
$clients = $conn->query("SELECT * FROM client");
$cars = $conn->query("SELECT * FROM cars");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../outils/style.css">
    <script src="../outils/app.js" defer></script>
    <title>Utilisateurs | Car Rental</title>
</head>

<body class="flex bg-gradient-to-r from-indigo-600">
    <!-- side-bare -->
    <nav class="h-[100vh] w-[25%] bg-black bg-opacity-95">
        <ul class="flex flex-col gap-4 py-10 px-5 text-white">
            <a href="../main.php"
                class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Page
                d'Accueille</li></a>
            <a href="../client/utilisateur.php">
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">
                    Utilisateurs</li>
            </a>
            <a href="./contrat.php">
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Contrat
                </li>
            </a>
            <a href="../car/voitures.php">
                <li class="p-2 border-b border-gray-500 hover:bg-slate-400 hover:scale-110 hover:duration-500">Voitures
                </li>
            </a>
        </ul>
        <div class="absolute bottom-2 w-[15%]">
            <ul class="flex justify-evenly">
                <li><a href="#"><i class="fa-brands fa-facebook text-white hover:scale-110 hover:duration-500"></i></a>
                </li>
                <li><a href="#"><i class="fa-brands fa-whatsapp text-white hover:scale-110 hover:duration-500"></i></a>
                </li>
                <li><a href="#"><i class="fa-brands fa-instagram text-white hover:scale-110 hover:duration-500"></i></a>
                </li>
                <li><a href="#"><i class="fa-brands fa-linkedin text-white hover:scale-110 hover:duration-500"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- main page -->
    <section class="flex flex-col gap-5 w-[80%] box-border overflow-auto">
        <div class="my-3 mx-auto">
            <button onclick="addContrat()"
                class="bg-violet-950 px-6 py-1 text-white text-xl rounded shadow-lg shadow-violet-600 hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85">
                Add New Contrat
            </button>
        </div>

        <div class="table-wrapper">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>N.Contrat</th>
                        <th>Start-Date</th>
                        <th>End-Date</th>
                        <th>Duration</th>
                        <th>N.Client</th>
                        <th>N.Car</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tbody>
                    <tr>
                        <th scope='row'>{$row['contratId']}</th>
                        <td>{$row['startDate']}</td>
                        <td>{$row['endDate']}</td>
                        <td>{$row['duration']}</td>
                        <td>{$row['clientID']}</td>
                        <td>{$row['carID']}</td>
                        <td><button class='btn-edit'><i class='fa-solid fa-pen-to-square hover:text-green-600'></i></button></td>
                        <td><button class='btn-delete'><i class='fa-solid fa-trash hover:text-red-600'></i></button></td>
                        </tr>
                        </tbody>";
                }
                ?>
            </table>
        </div>

        <form id="contratForm" action="contrats.php" method="POST"
            class="hidden w-[40%] p-8 flex flex-col gap-8 items-center absolute top-20 left-1/3 bg-gradient-to-br from-indigo-800 shadow-lg rounded">
            <label for="startDate" class="text-xl text-white self-start pl-3">Start-Date:</label>
            <input id="startDate" type="date" required name="startDate" min="2024-12-14"
                class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

            <label for="endDate" class="text-xl text-white self-start pl-3">End-Date:</label>
            <input id="endDate" type="date" required name="endDate" min="2024-12-15"
                class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

            <label for="userName" class="text-xl text-white self-start pl-3">Select the Client :</label>
            <select name="userName" id="userName" class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">
                <?php
                while ($row = $clients->fetch_assoc()) {
                    echo "<option value='{$row["clientId"]}'>{$row["name"]}</option>";
                }
                ?>
            </select>

            <label for="carName" class="text-xl text-white self-start pl-3">Select the Client's Car :</label>
            <select name="carName" id="carName" class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">
                <?php
                while ($row = $cars->fetch_assoc()) {
                    echo "<option value='{$row["carId"]}'>{$row["marque"]}</option>";
                }
                ?>
            </select>

            <div>
                <input type="submit" value="Save"
                    class="cursor-pointer px-4 py-1 bg-indigo-400 shadow-md rounded hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85 hover:text-white">

                <input onclick="closeForm()" type="button" value="Cancel"
                    class="cursor-pointer px-4 py-1 bg-indigo-400 shadow-md rounded hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85 hover:text-white">
            </div>
        </form>

    </section>
</body>

</html>