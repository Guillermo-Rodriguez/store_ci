<table style="font-size: 14px;">
    <thead>
        <tr style="background-color: #A2D9CE;">
            <th style="border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;">Nombre</th>
            <th style="border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;">Marca</th>
            <th style="border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;">Descripcion</th>
            <th style="border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;">Precio</th>
            <th style="border-bottom: 1px solid #ddd">Fecha de Ingreso</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $item):?>
            <tr>
                <td style="border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;"><?=$item->nombre?></td>
                <td style="border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;"><?=$item->marca?></td>
                <td style="border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;"><?=$item->descripcion?></td>
                <td style="border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;"><?=$item->precio?></td>
                <td style="border-bottom: 1px solid #ddd"><?=$item->fecha_ingreso?></td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>