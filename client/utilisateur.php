<?php
    require '../config-db.php';
    $result = $conn->query("SELECT * FROM client");
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
            <a href="../contrat/contrat.php">
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
    <section class="flex flex-col gap-5 items-center w-full">
        <div class="my-3">
            <button onclick="addClient()"
                class="bg-violet-950 px-6 py-1 text-white text-xl rounded shadow-lg shadow-violet-600 hover:scale-110 hover:duration-500 hover:bg-green-900 hover:bg-opacity-85">
                Add New Client
            </button>
        </div>

        <div class="table-wrapper">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>N.Client</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>N.Telephone</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tbody>
                    <tr>
                        <th scope='row'>{$row['clientId']}</th>
                        <td>{$row['name']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['phone']}</td>
                        <td><button class='btn-edit'><i class='fa-solid fa-pen-to-square hover:text-green-600'></i></button></td>
                        <td>
                            <form action='./removeClient.php' method='POST' style='display: inline;'>
                                <input type='hidden' name='clientId' value='{$row['clientId']}'>
                                <button type='submit' >
                                    <i class='fa-solid fa-trash hover:text-red-600'></i>
                                </button>
                            </form>
                        </td>
                        </tr>
                        </tbody>";
                    }
                ?>
            </table>
        </div>

        <form id="clientForm" action="./clients.php" method="POST"
            class="hidden w-[40%] p-8 flex flex-col gap-8 items-center absolute top-20 left-1/3 bg-gradient-to-br from-indigo-800 shadow-lg rounded">
            <label for="name"></label>
            <input id="name" type="text" placeholder="Enter Your Name" required name="name"
                class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

            <label for="adress"></label>
            <input type="text" placeholder="Enter Your Adress" required name="address"
                class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

            <label for="phone"></label>
            <input type="number" placeholder="Enter Your Phone Number" required name="phone"
                class="border border-black rounded pl-2 h-9 w-[65%] opacity-95">

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