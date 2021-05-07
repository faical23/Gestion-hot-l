////////// another popup for success and error

function success($message) {
    swal({
        title: "Congratulations",
        text: $message,
        icon: "success",
    });
}

function error($message) {
    swal({
        title: "Error",
        text: $message,
        icon: "error",
    });
}


///// pop up delete and update

let update_chambre_prix = (id, name, table) => {

    swal(`prix : ${name}`, {
            content: "input",
        })
        .then((value) => {
            swal(`${name} : ${value} $`);
            window.location.href = `../controller/update.php?id=${id}&prix=${value}&table=${table}`;
        });

}


let delete_data = (id, $whereID, table) => {
    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = `../controller/delete.php?id=${id}&whereID=${$whereID}&table=${table}`;
            } else {
                swal("Your imaginary file is safe!");
            }
        });

}