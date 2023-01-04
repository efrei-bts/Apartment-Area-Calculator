<tr>
    <td>
        <label for="<?php echo "room-$id" ?>"><?php echo $id ?></label>
    </td>
    <td>
        <input type="number" min="1" id="<?php echo "room-$id-largeur" ?>" name="room-largeur[]">
    </td>
    <td>
        <input type="number" min="1" id="<?php echo "room-$id-longueur" ?>" name="room-longueur[]">
    </td>
</tr>