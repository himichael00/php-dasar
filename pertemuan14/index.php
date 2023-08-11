<?php
require 'functions.php';
$products = query("SELECT * FROM tokoban ORDER BY id DESC");

//tombol cari ditekan
if ( isset($_POST["find"]) ) {
    $products = find($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style/style.css">
    <script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
            '<td><input type="text" class="form-control" name="department" id="department"></td>' +
            '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>
</head>
<body>
    
    <div class="container">
    <h1>List of products</h1>

    <a href="addproduct.php">Add data product</a>
    <br>
    <br>

    <form action="" method="post">
        <input type="text" name="keyword" size="30" placeholder="Find your product" autocomplete="off">
        <button type="submit" class="btn btn-info" name="find">Find</button>
    </form>
    
    <br>

    <table class="table table-bordered" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Label</th>
            <th>Size</th>
            <th>tipe</th>
            <th>Price</th>
            <th>Picture</th>
            <th>Action</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($products as $product) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $product["label"]; ?></td>
            <td><?php echo $product["size"]; ?></td>
            <td><?php echo $product["tipe"]; ?></td>
            <td><?php echo $product["price"]; ?></td>
            <td><img src="img/<?php echo $product["picture"]; ?>" width="50"></td>
            <td>
                <a href="edit.php?id=<?php echo $product["id"]; ?>" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> |
                <a href="delete.php?id=<?php echo $product["id"]; ?>" title="Delete" data-toggle="tooltip"><i class="material-icons" style="color:red">&#xe872;</i></a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

    </div>
</body>
</html>