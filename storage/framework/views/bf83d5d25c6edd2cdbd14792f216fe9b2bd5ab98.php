<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 PDF File Download using JQuery Ajax Request Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<?php echo $__env->make('pdf.pdf', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div>
    Download a PDF: <button type="button" class=" btn-success btn-sm" id="js-download" >Download</button>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $("#js-download").click(function(){

        var data = '';
        $.ajax({
            type: 'GET',
            url: '/download',
            data: data,
            xhrFields: {
                responseType: 'blob'
            },
            success: function(response){
                var blob = new Blob([response]);
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = "Sample.pdf";
                link.click();
            },
            error: function(blob){
                console.log(blob);
            }
        });
    });
    // $(document).on("click", "#js-download", function(e) {
    //
    //     e.preventDefault();
    //
    //     $.ajax({
    //         url: '/download',
    //         data: $("#js-pdf-form").serialize(),
    //         success:function(data) {
    //             console.log(data)
    //         },
    //         error:function() {
    //         }
    //     });
    //
    // });

</script>
</html>
<?php /**PATH D:\laragon\www\permissiongate\resources\views/pdf/index.blade.php ENDPATH**/ ?>