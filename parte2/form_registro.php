<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_registro.css">
    <title>AGREGAR PRODUCTO</title>
    
</head>
<body>
    <h1 class="titulo">GESTION DE PRODUCTOS</h1>
    
    <div class="main-content">
        <form   class="form-reg" method ="post" action="insertar_producto.php">
            
            <div class="form-title-row">
                <h1>Agregar Producto</h1>
            </div>

            <div class= "form row">
                <label>Codigo del producto</label>
                <input type="text" name="c_prod" id="c_prod">
            </div>

            <div class= "form row">
                <label>Seccion</label>
                <input type="text" name="seccion" id="seccion">
            </div>

            <div class= "form row">
                <label>Nombre del producto</label>
                <input type="text" name="n_prod" id="n_prod">
            </div>

            <div class= "form row">
                <label>Pais de origen</label>
                <input type="text" name="p_orig" id="p_orig">
            </div>

            <div class= "form row">
                <label>¿El producto es importado?</label>
                <select name="importado" id="importado">
                    <option>VERDADERO</option>
                    <option>FALSO</option>
                </select>
            </div>

            <div class= "form row">
                <label>Precio del producto </label>
                <input type="text" name="precio" id="precio">
            </div> 

            <div class= "form row">
                <input type="submit" name="enviar" id="enviar" value="ENVIAR" >
                <input type="reset" name="borra" id="borra" value="LIMPIAR FORMULARIO">
            </div>

        </form >
    </div>
    
</body>
</html>