<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>ZMFOOD Products</h2>
<img alt="Logo" src="http://zmfood.eu/wp-content/uploads/2019/03/zmfood-logo.png" width="45px" class="h-15px" />
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Url</th>
        <th>Sub Category Name</th>
        <th>Category Name</th>
    </tr>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <tr>
            <td><?php echo e($product->id); ?></td>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->slug); ?></td>
            <td><?php echo e($product->subcategory->name); ?></td>
            <td><?php echo e($product->subcategory->category->name); ?></td>
        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html>

<?php /**PATH D:\laragon\www\permissiongate\resources\views/admin/product/products_pdf.blade.php ENDPATH**/ ?>