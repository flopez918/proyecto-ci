<html>
<body>
    <h1>
        Nuevo empleado
    </h1>
    <?php
        echo form_open('empleados/nuevo_empleado');
        echo form_label('Nombre', 'nombre');
        echo form_input('nombre');echo '<br>';
        echo form_label('Sueldo', 'sueldo');
        echo form_input('sueldo');echo '<br>';      
        echo form_submit('botonSubmit', 'Enviar');
        echo form_close();
    ?>
</body>
</html>