
const regresoSala = () =>{
    window.location.href = '/seleccionAula';
}
const Equipo = () =>{
    window.location.href = '/computo';
}
const pdf  = () =>{
    window.location.href = '/buscarDatos';
}
const pdfdescarga  = () =>{
    window.location.href = '/pdfDownload';
}
const Mantenimiento  = () =>{
    window.location.href = '/cambiarEstados';
}

const Reservacion  = () =>{
    window.location.href = '/reserva';
}


const Aula = () => {
    window.location.href = '/maestro';
}

const home = () => {
    window.location.href = '/';
}
// para la vista del administrador
const homeAdmin = () => {
    window.location.href = '/administrador';
}
const SelectAula = (Aula) =>{
    let url = "/BitacoraAula"+Aula;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function(response) {
            // Aquí puedes manejar la respuesta del controlador, como mostrarla en la vista
            window.location.href = '/BitacoraAula'+Aula;
            console.log(response);
        },
        error: function(error) {
            console.log(error);
        }
    });
}


/*
fetch('/obtener-estado')
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        let divs = document.querySelectorAll('.box');

        divs.forEach(function(div, index) {
            if (data[index].estado == 'ocupado') {
                div.classList.remove('disponible');
                div.classList.add('ocupado');
            } else {
                div.classList.remove('ocupado');
                div.classList.add('disponible');
            }
        });
    });
    */