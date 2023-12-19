<?php

        require("../app/controllers/Address.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="bg-gray-100">

    <div class="h-screen flex overflow-hidden bg-gray-200">
        <!-- Sidebar -->
        <div class="absolute bg-gray-800 text-white w-56 min-h-screen overflow-y-auto transition-transform transform -translate-x-full ease-in-out duration-300"
            id="sidebar">
            <!-- Your Sidebar Content -->
            <div class="p-4">
                <h1 class="text-2xl font-semibold">Sidebar</h1>
                <ul class="mt-4">
                    <li class="mb-2"><a href="bank.php" class="block hover:text-indigo-400">Home</a></li>
                    <li class="mb-2"><a href="bank.php" class="block hover:text-indigo-400">Bank</a></li>
                    <li class="mb-2"><a href="agency.php" class="block hover:text-indigo-400">Agency</a></li>
                    <li class="mb-2"><a href="atm.php" class="block hover:text-indigo-400">ATM</a></li>
                    <li class="mb-2"><a href="index.php" class="block hover:text-indigo-400">Permission</a></li>
                    <li class="mb-2"><a href="role.php" class="block hover:text-indigo-400">Role</a></li>
                    <li class="mb-2"><a href="user.php" class="block hover:text-indigo-400">User</a></li>
                    <li class="mb-2"><a href="account.php" class="block hover:text-indigo-400">Account</a></li>
                    <li class="mb-2"><a href="transaction.php" class="block hover:text-indigo-400">Transaction</a></li>
                    <li class="mb-2"><a href="address.php" class="block hover:text-indigo-400">Address</a></li>
                </ul>
            </div>
        </div>

        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Navbar -->
            <div class="bg-white shadow">
                <div class="container mx-auto">
                    <div class="flex justify-between items-center py-4 px-2">
                        <h1 class="text-xl font-semibold">Animated Drawer</h1>

                        <button class="text-gray-500 hover:text-gray-600" id="open-sidebar">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    </div>
                </div>
            </div>
            <!-- Content Body -->
            <div class="flex-1 overflow-auto p-4">
                <h1 class="text-2xl font-semibold">Welcome to our website</h1>
                
    <form action="../app/controllers/Address.php" method="post">
    <input type="hidden" name="action" value="addAddress">
        <input type="text" name="city" id="city" placeholder="city">
        <input type="text" name="district" id="district" placeholder="district">
        <input type="text" name="street" id="street" placeholder="street">
        <input type="text" name="postal_code" id="postal_code" placeholder="postal_code">
        <input type="text" name="email" id="email" placeholder="email">
        <input type="text" name="telephone" id="telephone" placeholder="telephone">
        <input type="text" name="date" id="date" placeholder="date">
        <input type="submit" name="submit" value="submit">
    </form>

    <br>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>city</th>
                <th>district</th>
                <th>street</th>
                <th>postal_code</th>
                <th>email</th>
                <th>telephone</th>
                <th>date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($addresss as $address): ?>
                <tr>
                    <td><?=$address['id']?></td>
                    <td><?=$address['city']?></td>
                    <td><?=$address['district']?></td>
                    <td><?=$address['street']?></td>
                    <td><?=$address['postal_code']?></td>
                    <td><?=$address['email']?></td>
                    <td><?=$address['telephone']?></td>
                    <td><?=$address['date']?></td>
                    <form action="" method="post">
                        <input type="hidden" name="action" value="editAddress">
                        <input type="hidden" name="id" value="<?=$address['id']?>">
                        <td>
                            <input type="text" name="city" value="<?=$address['city']?>">
                        </td>
                        <td>
                            <input type="text" name="district" value="<?=$address['district']?>">
                        </td>
                        <td>
                            <input type="text" name="street" value="<?=$address['street']?>">
                        </td>
                        <td>
                            <input type="text" name="postal_code" value="<?=$address['postal_code']?>">
                        </td>
                        <td>
                            <input type="text" name="email" value="<?=$address['email']?>">
                        </td>
                        <td>
                            <input type="text" name="telephone" value="<?=$address['telephone']?>">
                        </td>
                        <td>
                            <input type="text" name="date" value="<?=$address['date']?>">
                        </td>
                        <td>
                        <button type="submit" name="edit" onclick="return confirm('Are you sure you want to edit this address?')">Edit</button>
                        </form>
                    <td><form action="../app/controllers/Address.php" method="post">
                            <input type="hidden" name="delete_id" value="<?= $address['id'] ?>">
                            <input type="hidden" name="action" value="deleteAddress">
                            <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this address?')">Delete</button>
                        </form></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
    const openSidebarButton = document.getElementById('open-sidebar');
    
    openSidebarButton.addEventListener('click', (e) => {
        e.stopPropagation();
        sidebar.classList.toggle('-translate-x-full');
    });

    // Close the sidebar when clicking outside of it
    document.addEventListener('click', (e) => {
        if (!sidebar.contains(e.target) && !openSidebarButton.contains(e.target)) {
            sidebar.classList.add('-translate-x-full');
        }
    });
    </script>







    



</div>
</body>
</html>

