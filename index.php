<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Control de Almacén</title>
</head>
<body>

    <header>
        <h1>Control de Almacén</h1>
    </header>

    <div class="container">

        <section class="provider-section">
            <h2>Proveedores</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID Proveedor</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí puedes agregar filas con información de proveedores -->
                    <tr>
                        <td>1</td>
                        <td>Proveedor 1</td>
                        <td>Dirección 1</td>
                    </tr>
                    <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
        </section>

        <section class="purchase-section">
            <h2>Compras</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID Compra</th>
                        <th>ID Proveedor</th>
                        <th>Fecha</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí puedes agregar filas con información de compras -->
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>2023-01-01</td>
                        <td>$1000</td>
                    </tr>
                    <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
            <button class="action-button">Compra</button>
        </section>

        <section class="stock-section">
            <h2>Inventario</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID Producto</th>
                        <th>Nombre</th>
                        <th>Cantidad en Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí puedes agregar filas con información de productos en stock -->
                    <tr>
                        <td>1</td>
                        <td>Producto 1</td>
                        <td>100</td>
                    </tr>
                    <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
        </section>

        <section class="purchase-form-section">
            <h2>Realizar Compra</h2>
            <form action="#" method="post">
                <label for="providerId">ID Proveedor:</label>
                <input type="text" id="providerId" name="providerId" required>

                <label for="purchaseQuantity">Cantidad:</label>
                <input type="text" id="purchaseQuantity" name="purchaseQuantity" required>

                <label for="purchaseTotal">Total:</label>
                <input type="text" id="purchaseTotal" name="purchaseTotal" required>

                <button type="submit" class="action-button">Realizar Compra</button>
            </form>
        </section>

        <section class="stock-out-form-section">
            <h2>Realizar Salida</h2>
            <form action="#" method="post">
                <label for="productId">ID Producto:</label>
                <input type="text" id="productId" name="productId" required>

                <label for="outQuantity">Cantidad:</label>
                <input type="text" id="outQuantity" name="outQuantity" required>

                <label for="outDate">Fecha:</label>
                <input type="date" id="outDate" name="outDate" required>

                <label for="outTime">Hora:</label>
                <input type="time" id="outTime" name="outTime" required>

                <button type="submit" class="action-button">Realizar Salida</button>
            </form>
        </section>

    </div>

</body>
</html>
