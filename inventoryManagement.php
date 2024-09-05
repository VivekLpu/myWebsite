<!-- use an associate array to store inventory items with their quantities and prices. EG ['ITEM'=>['QUANTITY']] -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Inventory</title>
    <style>
        div,h1{
            display:flex;]
            flex-direction:column; 
            justify-content:center;
            align-items:center;
        }
        input{
            display: flex;
            flex-direction: row;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <h1>Inventory Management System</h1>
        <div>
            <h2>Add new Item  :</h2>
            <input class="add-new" type="text" name="item" id="" placeholder="Item Name" required >
            <input class="add-new" type="text" name="quantity" placeholder="Quantity" required>
            <input class="add-new" type="text" name="price" id="" placeholder="Price" required>
            <input class="add-new" type="submit" value="Add item" name="action">
        </div>
        <div>
            <h2>Update Item  :</h2>
            <input type="text" name="item" id="" placeholder="Item Name" required >
            <input type="text" name="quantity" placeholder="Quantity" required>
            <input class="add-new" type="text" name="price" id="" placeholder="Price" required>
            <input class="add-new" type="submit" value="Add item" name="action">
        </div>
        <div>
            <h2>Remove Item  :</h2>
            <input type="text" name="item" id="" placeholder="Item Name" required >
            <input type="text" name="quantity" placeholder="Quantity" required>
            <input class="add-new" type="submit" value="Remove Item" name="action">
        </div>
    </form>


    <?php
$inventory = [
    'maruti' => ['quantity' => 1, 'price' => 500],
    'zen' => ['quantity' => 3, 'price' => 900],
    'audi' => ['quantity' => 4, 'price' => 1400]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    // Assuming you have input fields named 'item', 'quantity', and 'price'
    $item = $_POST['item'];
    $quantity = intval($_POST['quantity']); // Convert to integer
    $price = floatval($_POST['price']); // Convert to float

    switch ($action) {
        case 'Add item':
            // Add a new item to the inventory
            $inventory[$item] = ['quantity' => $quantity, 'price' => $price];
            echo "Added '$item' to the inventory.";
            break;
        case 'Remove item':
            // Remove an item from the inventory
            if (isset($inventory[$item])) {
                unset($inventory[$item]);
                echo "Removed '$item' from the inventory.";
            } else {
                echo "Item '$item' not found in the inventory.";
            }
            break;
        case 'Update item':
            // Update an existing item's quantity and price
            if (isset($inventory[$item])) {
                $inventory[$item]['quantity'] = $quantity;
                $inventory[$item]['price'] = $price;
                echo "Updated '$item' in the inventory.";
            } else {
                echo "Item '$item' not found in the inventory.";
            }
            break;
        default:
            echo "Invalid action.";
    }
}
?>

</body>
</html>