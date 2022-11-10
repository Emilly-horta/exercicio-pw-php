<form action="action.php" method="get"> 
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $nome; ?>" />

        <label>birthday</label>
        <input type="text" name="email" value="<?php echo $date; ?>"/>

        <label>Adress</label>
        <input type="text" name="adress" value="<?php echo $adress; ?>"/>

        <label>CEP</label>
        <input type="text" name="CEP" value="<?php echo $CEP; ?>"/>

        <label>Phone</label>
        <input type="phone" name="phone" value="<?php echo $phone; ?>"/>

        <p><input type="submit" value="cadastrar"/></p>
</form>