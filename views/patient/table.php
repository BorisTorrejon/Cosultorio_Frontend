<table class="table">
    <thead>
        <tr>
            <th>Nombre Completo</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->patients as $row){
            
            ?>
        <tr>
            <td>
                <?php echo $row->patientSurname." ".$row->patientName?>
            </td>
            <td>
                <?php echo $row->patientAge?>
            </td>
            <td>
                <?php echo $row->patientPhone?>
            </td>
            <td>
                <?php echo $row->patientEmail?>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>