// tarjetas.js
document.addEventListener('DOMContentLoaded', () => {
    const botones = document.querySelectorAll('.btn-detalles');

    botones.forEach(boton => {
        boton.addEventListener('click', () => {
            const tarjeta = boton.closest('.tarjeta');
            tarjeta.classList.toggle('expandida');

            // Cambiar texto del botón
            boton.textContent = tarjeta.classList.contains('expandida') ? 'Ver menos' : 'Ver detalles';
        });
    });
});
// document.addEventListener("DOMContentLoaded", () => {
//     const botones = document.querySelectorAll(".btn-detalles");

//     botones.forEach((boton) => {
//         boton.addEventListener("click", () => {
//             const tarjeta = boton.closest(".tarjeta");
//             tarjeta.classList.toggle("expandida");
//         });
//     });
// });


//   document.querySelectorAll('.btn-favorito').forEach(btn => {
//     btn.addEventListener('click', () => {
//       btn.classList.toggle('fav');
//       btn.textContent = btn.classList.contains('fav') ? '♡' : '♡';
//     });
//   });
