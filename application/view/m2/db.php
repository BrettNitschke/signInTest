
<div class="container">
<div class="box">
        
        
        <h3>Database search results</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Description</td>
                <td>Rooms</td>
                <td>Distance from Campus</td>
                
            </tr>
            </thead>
            <tbody>
            <?php foreach ($rental_units as $rental_unit) { ?>
                <tr>
                    <td><?php if (isset($rental_unit->id)) echo htmlspecialchars($rental_unit->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($rental_unit->description)) echo htmlspecialchars($rental_unit->description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($rental_unit->rooms)) echo htmlspecialchars($rental_unit->rooms, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                    <td><?php if (isset($rental_unit->distFromCampus)) echo htmlspecialchars($rental_unit->distFromCampus, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                    
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    </div>