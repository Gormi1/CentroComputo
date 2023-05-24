
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
