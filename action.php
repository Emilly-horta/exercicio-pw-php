<html>
<body>
<?php
    if (!empty($_POST["nome"])) {
?>
    <table class="table">
        <tr class="cinza">
            <thead>
                <tr>
                    <th scope="col">Name:</th>
                    <th scope="col">birthday:</th>
                    <th scope="col">Adress:</th>
                    <th scope="col">CEP:</th>
                    <th scope="col">Phone:</th>
                </tr>
            </thead>
            <tbody>
                <td><?php echo $_POST['nome']?><br></td>
                <td><?php echo $_POST['date'] ?><br></td>
                <td><?php echo $_POST['adress'] ?><br></td>
                <td><?php echo $_POST['CEP'] ?><br></td>
                <td><?php echo $_POST['phone'] ?><br></td>
                <p style="color: red;"><?php echo "Cadastrado com sucesso!" ?></p>
                </td>
        </tr>
        </tbody>
    </table>
</body>
<?php } ?>
</html>
    
