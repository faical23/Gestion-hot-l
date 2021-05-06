const client_data = (ID_client) => {
    console.log(ID_client);
    window.location.href = `client_infomations.php?ID_client=${ID_client}`;
}



let img_our_srvice = document.querySelector(".img_our_service")

function showDetails(type) {
    img_our_srvice.src = `../assets/img/our_service/${type}.jpg `
}