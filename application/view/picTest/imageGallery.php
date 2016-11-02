<div class="container">
    <table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Image</td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($images as $image) { ?>
        <tr>
            <td><?php if (isset($image->id)) echo htmlspecialchars($image->id, ENT_QUOTES, 'UTF-8'); ?></td>
            <td>
                 <?php
                            // display user-uploaded image if it exists
                            if (isset($image->image)) {
                                echo ("<img src='data:image/jpeg;base64," . base64_encode($image->image)
                                . "' alt='Item image' style='height:100px; width: 100px'");
                            }
                 ?>
            </td>
        </tr>
         <?php }?>
    </tbody>
    </table>
</div>